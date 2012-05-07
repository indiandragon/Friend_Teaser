/*Copyright 2012 indiandragon

This file is part of Friend Teaser Facebook application.

Friend Teaser is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Friend Teaser is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Friend Teaser.  If not, see <http://www.gnu.org/licenses/>.*/

<title><?=FB_CONFIG_APP_NAME?></title>
<?php
/* Copyright indiandragon, do not redistribute this code without the permission*/

include 'facebook-php-sdk/src/facebook.php';
include 'header.php'; 
?>    

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
        <script type="text/javascript" src="<?=html_root('scripts/jquery.facebook.multifriend.select.js')?>"></script>
        <script type="text/javascript" src="<?=html_root('scripts/swfobject.js')?>"></script> 
        <script type="text/javascript" src="<?=html_root('scripts/jquery.toastmessage.js')?>"></script>
        
        
        <link type="text/css" href="<?=html_root('scripts/css/jquery.toastmessage.css')?>" rel="stylesheet"/>




        <link rel="stylesheet" href="<?=html_root('scripts/jquery.facebook.multifriend.select.css')?>" />
        <style> 
            body {
                background: #fff;
                color: #333;
                font: 11px verdana, arial, helvetica, sans-serif;
                text-align:center;
                
            }
            a:link, a:visited, a:hover {
                color: #666;
                font-weight: bold;
                text-decoration: none;
            }
        </style>  
        
        
         
        
        
<script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({
    appId: '<?=FB_CONFIG_APP_ID?>',
    status : true, // check login status
    cookie : true, // enable cookies to allow the server to access the session
    xfbml  : true  // parse XFBML
  });
</script>
    
    
    <div style="display: none;">
<div id="fbsendmess" style="text-align: center; padding: 10px 0px;">Login failed!!</div>
</div>


        
<script language="JavaScript">

<!--

 
var ry

var checklogin=new Boolean();










// Start user configuration 

//small images
  
  var myimages=new Array()
  myimages[1]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/Achilles.jpg"
  myimages[2]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/Awesome.jpg"
  myimages[3]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/Cancer.jpg"
  myimages[4]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/cheifexport.jpg"
  myimages[5]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/darkness.jpg"
  myimages[6]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/death.jpg"
  myimages[7]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/doesnotsleep.jpg"
  myimages[8]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/donateblood.jpg"
  myimages[9]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/evolution.jpg"
  myimages[10]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/guiness.jpg"
  myimages[11]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/handicap.jpg"
  myimages[12]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/hunting.jpg"
  myimages[13]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/ifyoucansee.jpg"
  myimages[14]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/mars.jpg"
  myimages[15]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/NBC.jpg"
  myimages[16]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/nun.jpg"
  myimages[17]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/publish.jpg"
  myimages[18]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/pushup.jpg"
  myimages[19]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/Russianroullete.jpg"
  myimages[20]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/superman.jpg"
  myimages[21]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/tax.jpg"
  myimages[22]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/time.jpg"
  myimages[23]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/twospeeds.jpg"
  myimages[24]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/images/waldo.jpg"





  
  
  

// Caption for the images  
  
  var cap=new Array()
  cap[1]='Chuck Norris'
  cap[2]='Chuck Norris'
  cap[3]='Chuck Norris'
  cap[4]='Chuck Norris'
  cap[5]='Chuck Norris'
  cap[6]='Chuck Norris'
  cap[7]='Chuck Norris'
  cap[8]='Chuck Norris'
  cap[9]='Chuck Norris'
  cap[10]='Chuck Norris'
  cap[11]='Chuck Norris'
  cap[12]='Chuck Norris'
  cap[13]='Chuck Norris'
  cap[14]='Chuck Norris'
  cap[15]='Chuck Norris'
  cap[16]='Chuck Norris'
  cap[17]='Chuck Norris'
  cap[18]='Chuck Norris'
  cap[19]='Chuck Norris'
  cap[20]='Chuck Norris'
  cap[21]='Chuck Norris'
  cap[22]='Chuck Norris'
  cap[23]='Chuck Norris'
  cap[24]='Chuck Norris'
   
  
  
// Dialogue for the image

var desc=new Array()
desc[1]='Achilles was supposedly the greatest..'
desc[2]='Chuck Norris ordered a Big Mac..'
desc[3]='The cure for cancer is in ..'
desc[4]='The chief export of Chuck Norris is..'
desc[5]='Darkness is not the absence of light..'
desc[6]='If you can see Chuck Norris, he..'
desc[7]='Chuck Norris does not sleep.He waits.'
desc[8]='When Chuck Norris goes to donate ..'
desc[9]='There is no theory of evolution,..'
desc[10]='In fine print at on the last ..'
desc[11]='A handicapped parking sign ..'
desc[12]='Chuck Norris does not hunt..'
desc[13]='If you can see Chuck Norris,..'
desc[14]='Chuck Norris has already ..'
desc[15]='Chuck Norris is currently...'
desc[16]='As a teen Chuck Norris ..'
desc[17]='Chuck Norris can touch MC Hammer.'
desc[18]='When Chuck Norris does a pushup,...'
desc[19]='Chuck Norris played Russian ...'
desc[20]='Superman wears Chuck Norris ..'
desc[21]='When Chuck Norris sends ..'
desc[22]='Time waits for no man..'
desc[23]='Chuck Norris has two ..'
desc[24]='Chuck Norris is the reason..'






// Path for SWF files

         var flash=new Array()
	flash[1]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/Achilles.swf"
	flash[2]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/Awesome.swf"
	flash[3]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/Cancer.swf"
	flash[4]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/cheifexport.swf"
	flash[5]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/darkness.swf"
	flash[6]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/death.swf"
	flash[7]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/doesnotsleep.swf"
	flash[8]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/donateblood.swf"
	flash[9]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/evolution.swf"
	flash[10]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/guiness.swf"
	flash[11]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/handicap.swf"
	flash[12]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/hunting.swf"
	flash[13]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/ifyoucansee.swf"
	flash[14]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/mars.swf"
	flash[15]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/NBC.swf"
	flash[16]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/nun.swf"
	flash[17]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/publish.swf"
	flash[18]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/pushup.swf"
	flash[19]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/Russianroullete.swf"
	flash[20]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/superman.swf"
	flash[21]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/tax.swf"
        flash[22]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/time.swf"
	flash[23]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/twospeeds.swf"
	flash[24]="https://gator1470.hostgator.com/~abishek/fbstore/chuckattack/flash/waldo.swf"



// End of user configuration





// Do not touch this code unless you know what you are doing

function random_imglink(){

  ry=Math.floor(Math.random()*myimages.length)

  if (ry==0){ry=1}
 
      
      // SWF embedd

   swfobject.embedSWF(flash[ry], "myContent", "398", "398", "9.0.0","http://fbstore.indiandragon.in/chuckattack/flash/expressInstall.swf")
   document.write('<div id="div'+ry+'" style="text-align:bottom"><h1>'+cap[ry]+' says, '+desc[ry]+'!!</h1></div>');

}

  random_imglink()
  

        

// Friend selector

  
           FB.getLoginStatus(function(response) {
                   if (response.status === "connected") {
                     init();
                   } else {
                     // no user session available, someone you dont know
                   }
               });
               
               
                  function login() {
                   FB.login(function(response) {
                       if (response.status === "connected") {
                           init();
                       } else {
                            checklogin=false;
                 //alert('Login Failed!! Please allow this secure application to use your friend list, if you want to post to your friend wall');
                 $().toastmessage('showErrorToast', "Login failed");
                       }
                   });
               }

 


                  function init() {
                 FB.api('/me', function(response) {
                     $("#username").html("<img src='https://graph.facebook.com/" + response.id + "/picture'/><div>" + response.name + "</div>");
                     $("#jfmfs-container").jfmfs({ max_selected: 15, max_selected_message: "{0} of {1} selected"});
                     $("#logged-out-status").hide();
                     $("#show-friends").show();
 
                 });
               }    
               

               $("#show-friends").live("click", function() {
                   var friendSelector = $("#jfmfs-container").data('jfmfs');             
                   $("#selected-friends").html(friendSelector.getSelectedIds().join(', ')); 
               });                  


 


//Publish to wall

function publishToWall() {
				
			      
                               if(checklogin===false)
				{
				$().toastmessage('showErrorToast', "Login to Facebook first.");

				}
								
				else{
				
				var friendSelector = $("#jfmfs-container").data('jfmfs');
                                var friendIds = friendSelector.getSelectedIds();
                                var storefriend = friendIds[0];
				
				if(storefriend==null)
				{
				$().toastmessage('showErrorToast', "Select friend first.");

				}
				
				
				
					else{
				
				
					
					
					FB.ui({
					  method: "stream.publish",
					  target_id: storefriend,
					  display: "dialog",
					  user_message_prompt: "Publish this on your friends wall!!",
					  message: "Check this out!!",
					  attachment: {
					     name: '<?=FB_CONFIG_BUTTON_NAME?>',
					     href: '<?=FB_CONFIG_ROOT?>',
					     caption: cap[ry],
					     description: desc[ry],	    	     
							 media: [
	              { 'type': "flash",
	              'swfsrc': flash[ry],
	              'imgsrc': myimages[ry],
	              'width' : "90",
	              'height': "90",
	              'expanded_width' : "398",
	              'expanded_height' : "398",
	               
	              }
	              ]
	    },
	    action_links: [
	         	      { text: '<?=FB_CONFIG_BUTTON_NAME?>', href: '<?=FB_CONFIG_ROOT?>' }
	    ]
							 },
				   function(response) {
		    if (response && response.post_id) {
		       	//alert('Post was published.');
		       	                           $().toastmessage('showSuccessToast', "Post has been published.");

		    	
		     } else {
		    	                           $().toastmessage('showErrorToast', "Post was not published.");

			}
		}
				 ); 
				 
				    }
				 
				  }

				}
 














//-->


  

  



 
  
</script>

                <div id="myContent">
<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
		</div>
		

 
               

<center>


<div id="results_options_retake_quiz">
<span style="float: center;">	
        <a href="<?=html_root('generate.php?q=0')?>"><img src="<?=html_root('images/retake_quiz.png')?>"/></a>
        </span>
</div>


<div id="results_options_Select_friend">
<span style="float: left;">	
        <a href="#" onclick="login();"><img src="<?=html_root('images/Select_friend.png')?>"/></a>
        <div id="jfmfs-container"></div> 
</span>
</div>

<div id="results_options">
<span style="float: right;">	
                <a href="#" onclick="publishToWall();"><img src="<?=html_root('images/Publish to friend.png')?>"/></a>
	
</span>
</div>


<h2><?=FB_CONGRATULATION_MESSAGE?></h2>



 </center>


<?php include 'footer.php'; ?>
<script>FB.CanvasClient.startTimerToSizeToContent()</script>