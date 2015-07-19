<?php
/**
 * @author Crunchify.com
 * Plugin: Foursquare Checkins
 */
?>

    <div class=wrap>

    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <input type="hidden" name="info_update" id="info_update" value="true" />


    <u><h2>FourSquare Integration Options</h2></u>

<div align="left">
<br>
<h3>Follow us on Twitter & Facebook to get latest update:</h3>
<br>	
<a href="https://twitter.com/Crunchify"
				class="twitter-follow-button" data-show-count="false">Follow
				@Crunchify</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

			<div class="fb-like" data-href="https://www.facebook.com/Crunchify"
				data-layout="standard" data-action="like" data-show-faces="false"
				data-share="true"></div>


	<div id="poststuff" class="metabox-holder has-right-sidebar">

		<div style="float:left;width:67%;">

                  <br>

                  <?php
                  require_once 'setting-page/4sq-left-column.php';
                  require_once 'setting-page/4sq-right-column.php';
                  require_once 'setting-page/4sq-footer.php';

                  ?>
