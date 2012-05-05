<title><?=FB_CONFIG_APP_NAME?></title>
<?php
/* Copyright indiandragon, do not redistribute this code without the permission*/

include 'facebook-php-sdk/src/facebook.php';
include 'header.php'; 
?>
    <head> 
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
        <script type="text/javascript" src="jquery.facebook.multifriend.select.js"></script> 
        <link rel="stylesheet" href="jquery.facebook.multifriend.select.css" /> 
        <style> 
            body {
                background: #fff;
                color: #333;
                font: 11px verdana, arial, helvetica, sans-serif;
            }
            a:link, a:visited, a:hover {
                color: #666;
                font-weight: bold;
                text-decoration: none;
            }
        </style> 
    </head> 
    <body> 
 
        <div id="pageBody"> 
            <div id="fb-root"></div> 
            <script src="http://connect.facebook.net/en_US/all.js"></script> 
            <script> 
                FB.init({appId: '<?=FB_CONFIG_APP_ID?>', cookie: true});
 
                FB.getLoginStatus(function(response) {
                    if (response.session) {
                      init();
                    } else {
                      // no user session available, someone you dont know
                    }
                });
 
 
                function login() {
                    FB.login(function(response) {
                        if (response.session) {
                            init();
                        } else {
                            alert('Login Failed!');
                        }
                    });
                }
 
                function init() {
                  FB.api('/me', function(response) {
                      $("#username").html("<img src='https://graph.facebook.com/" + response.id + "/picture'/><div>" + response.name + "</div>");


					
                      $("#jfmfs-container").jfmfs({ 
					      max_selected: 1, 
						  max_selected_message: "{0} of {1} selected",
						  friend_fields: "id,name,last_name",
						  pre_selected_friends: [1014025367],
						  exclude_friends: [1211122344, 610526078],
						  sorter: function(a, b) {
			                var x = a.last_name.toLowerCase();
			                var y = b.last_name.toLowerCase();
			                return ((x < y) ? -1 : ((x > y) ? 1 : 0));
						  }
			          });
                      $("#jfmfs-container").bind("jfmfs.friendload.finished", function() { 
                          console.log("finished loading!"); 
                      });
                      $("#jfmfs-container").bind("jfmfs.selection.changed", function(e, data) { 
                          console.log("changed", data);
                      });                     
                      
                      $("#logged-out-status").hide();
                      $("#show-friends").show();
  
                  });
                }              
 
                
 
                $("#show-friends").live("click", function() {
                    var friendSelector = $("#jfmfs-container").data('jfmfs');             
                    $("#selected-friends").html(friendSelector.getSelectedIds().join(', ')); 
            		var selectedFriends = friendSelector.getSelectedIds();
			
                            
                });                  
 				
                //Publish to the wall

				function publishToWall() {
				
				var friendSelector = $("#jfmfs-container").data('jfmfs');
                                var friendIds = friendSelector.getSelectedIds();
                                var testfriend = 100000025314299;
                                var storefriend = friendIds[0];
				
				var fcaption = <?=$_GET["caption"]?>;
				//var fdescription = <?=$_GET["description"]?>;
				
					FB.ui({
					  method: "stream.publish",
					  target_id: storefriend,
					  display: "dialog",
					  user_message_prompt: "Publish this on your friends wall!!",
					  message: "I am so smart!  S M R T!",
					  attachment: {
					     name: '<?=FB_CONFIG_BUTTON_NAME?>',
					     href: '<?=FB_CONFIG_ROOT?>',
					     caption: fcaption,
					     //description: fdescription,	    	     
				    media:[{"type":"image","src":'http://chuckashoe.digijin.com/img/shoe.jpg',"href":"http://example.com/"}],
					     properties:{
					       "1)":{"text":"Reading","href":"http://example.com/skill.php?reading"},
					       "2)":{"text":"Math","href":"http://example.com/skill.php?math"},
					       "3)":{"text":"Farmville","href":"http://example.com/skill.php?farmville"}
					     }
					  },
					  action_links: [{ text: 'Test yourself', href: 'http://example.com/test.php' }]
					 },
				   function(response) {
				     if (response && response.post_id) {
				       alert('Post was published.');
				     } else {
				       alert('Post was not published.');
				     }
				   }
				 );

				}
 
              </script> 
              
              <div id="logged-out-status" style=""> 
                  <a href="javascript:login()">Login</a> 
              </div> 
 
              <div> 
                  <div id="username"></div> 
                  <a href="#" id="show-friends" style="display:none;">Show Selected Friends</a> 
                  <div id="selected-friends" style="height:30px"></div> 
                  <div id="jfmfs-container"></div> 
              </div> 
			<div id="results_options">
			<span style="float right;">	
				<a href="#" onclick="publishToWall();"><img src="<?=html_root('images/publish_to_wall.png')?>"/></a>
			</span>
			</div>
        </div> 
    </body> 

	<?php include 'footer.php'; ?>
	<script>FB.CanvasClient.startTimerToSizeToContent()</script>
