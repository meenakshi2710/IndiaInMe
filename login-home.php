<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
require('/head/index.php');
require('/menu/index.php');


?>
<link href="/js/zrssfeed-120/jquery.zrssfeed.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/js/zrssfeed-120/jquery.zrssfeed.min.js" type="text/javascript"></script>


<script type="text/javascript">
$(document).ready(function () {
  $("#test").rssfeed("http://businessofcinema.com/feed", {
    limit: 10
  });
  
  
  $("li.rssRow" ).live('click',function() {
	
	// get href of feed link
	var href = $(this).children("h4").children("a").attr("href") ;
	// set href on overlay
	$("#blwdNews1").attr("src", href);
	//alert($("#blwdNews1").attr("src"));
	$( "#showModal" ).click();
	// make feed link unclickable
	return false;
	
		
  });
  
  
});
</script>
<script type="text/javascript">
    		var activeRadio;
		function closeAllStations() {
		// close all stations
		  for (var i=0; i < 27; i++) {
	    	var station = document.getElementById("station" + i);
	    	if (station.style.display == "block") {
	    	   station.style.display = "none";
			   activeRadio = i;
			   
            }   
		  }
		};
		
		function play(radioId){
		  // close all stations first
		   closeAllStations();
		  // play only selected radio station
		  var stationId = document.getElementById("station" + radioId);
		  if(stationId.style.display == "block"){
		     stationId.style.display = "none";
			 document.getElementById("playingImg"+radioId).src = "";
			 
		  } else {
		     stationId.style.display = "block";
			 activeRadio = radioId;
			 document.getElementById("playingImg"+radioId).src = "/img/playingSmile1.jpg";
		  }
		};
		
		
		function changebtnImg() {
		    // stop radio 
			if(document.getElementById("btnImg").src.contains("/img/playingSmile1.jpg")) {
				document.getElementById("btnImg").src = "/img/stopSmile1.png";
				closeAllStations();
				var text = document.getElementById("radioText");
                text.innerHTML="Play again...";  
				
			} else {
			// restart radio
				document.getElementById("btnImg").src = "/img/playingSmile1.jpg";
				play(activeRadio);
				var text = document.getElementById("radioText");
                text.innerHTML="Now playing..."; 
			}
		};
		
		function closeblwdNewsModal(){
			// remove src from overlay
			$("#blwdNews1").attr("src", ""); 
			//alert("src now: "+$("#blwdNews1").attr("src"));
		};
		
		
		function changeFeed(feed){
			switch(feed) {
				
				 case "0" : 
					$("#test").rssfeed("http://businessofcinema.com/feed", {
						limit: 10
					});
					break;
				case "1":	
					$("#test").rssfeed("http://timesofindia.feedsportal.com/c/33039/f/533928/index.rss", {
						limit: 5
					});
					break;
				case "2":	
					$("#test").rssfeed("http://ibnlive.in.com/ibnrss/rss/moviesnews/moviesnews.xml", {
						limit: 5
					});
					break;
				default:  
   				    break; 
			}
			
  
        };
</script>
	
<body>
<!--
<div id='fg_membersite_content'>
<h2>Landing Page</h2>

</div> -->
 <!-- Header and Nav -->

  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1>Landing Page(Bollywood Feeds)</h1>
      </div>
    </div>
  </div>

<div class="row">
<!-- Start Side Nav --> 

  <div class="large-4 columns">
      <div class="panel">
        <a href="#"><img src="/img/bollywoodFeeds/Cover.jpg" /></a>
        <h5><a href="#">Select Section:</a></h5>
        
        <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
		  
		  <section class="section active" >
			<h5 class="title" style="left: 0px;" ><a onclick="changeFeed('0');" href="#">BusinessOfCinema</a></h5>
		  </section>
		  <section class="section" >
			<h5 class="title" style="left: 178px;"><a onclick="changeFeed('1');" href="#">TOI</a></h5>
		  </section>
		  <section class="section" >
			<h5 class="title"style="left: 356px;"><a onclick="changeFeed('2');" href="#">IBN Live</a></h5>
		  </section>
		  
      </div>

      </div>
   </div>
<!-- End Side Nav --> 
  
<!-- Start Feed Entry -->  
 <div class="large-8 columns">	
  <div class="panel">
   	<div id="test"></div> 
 </div>
 </div>
 <!-- End Feed Entry -->


</div>
      
  
	
	<div class="small-12 medium-8 large-6 columns medium-push-4 large-push-3">
  
	<a id="showModal"  href="#" data-reveal-id="videoModal" class="radius button" style="visibility: hidden;">Load Modal</a>

	<div id="videoModal" class="reveal-modal large">
		<div class="flex-video">
		  <iframe id="blwdNews1" width="800" height="315" src="/img/Loading.jpg" frameborder="0" allowfullscreen></iframe>
		</div>

		<a class="close-reveal-modal" onclick="closeblwdNewsModal();">&#215;</a>
	</div>
	

 <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
  <!--  <aside class="large-3 columns hide-for-small">
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
      <p><img src="http://placehold.it/300x440&text=[ad]" /></p>
    </aside>

    -->

<?php 
require('/footer/index.php');
?>

</body>
</html>


<!--
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="35WZ26VJKGCCG">
<table>
<tr><td><input type="hidden" name="on0" value="Subscription options">Subscription options</td></tr><tr><td><select name="os0">
	<option value="Option 1">Option 1 : $0.99 USD - weekly</option>
	<option value="Option 2">Option 2 : $4.99 USD - monthly</option>
	<option value="Option 3">Option 3 : $49.99 USD - yearly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
-->

<!--
<dl class="sub-nav">
  <dt>Filter:</dt>
  <dd class="active"><a href="#">Bollywood</a>
		
  </dd>
  <dd><a href="#">TV Saga</a></dd>
  <dd><a href="#">India News</a></dd>
  <dd><a href="#">World News/a></dd>
</dl>
-->