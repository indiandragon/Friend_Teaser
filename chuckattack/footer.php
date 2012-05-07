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

<br clear="all"/>
<hr size="1"/>


<div id="footer">

<!-- Add your promotion code here -->
<span style="float: left;"><fb:like href="<?=FB_CONFIG_ROOT?>" layout="standard" show_faces="false" width="400" action="like" font="segoe ui" colorscheme="light"  send="true"/></span>

<span style="float: right;"><big>Which Naruto Children are you?-<a href="http://apps.facebook.com/randomgeneratordemo/" target="_blank"><b>Narutomania</b></a></big></span>
</div>

<!-- End of your promotion code -->


<!-- INSERT YOUR OWN AD FOOTER HERE -->
<center><iframe src='http://fbstore.indiandragon.in/randomgenerator/ads/hackintosh3.html' width='550' height='120' frameborder='0' border='0' scrolling='no'></iframe></center>
<center><iframe src='http://social.bidsystem.com/displayAd.aspx?pid=374240&appId=217436&plid=15965&adSize=728x90&channel=' width='728' height='90' frameborder='0' border='0' scrolling='no'></iframe></center>
</body>
</html>

<div id="fb-root" style="color: #ffffff;">Loading...</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: '<?=FB_CONFIG_APP_ID?>', status: true, cookie: true,
             xfbml: true});
    FB.Canvas.setAutoResize();
  };
  (function() {
	var e = document.createElement('script'); e.async = true;
	e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
	document.getElementById('fb-root').appendChild(e);
  }());
    
</script>