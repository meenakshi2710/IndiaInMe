<script>


      document.write('<script src="http://foundation.zurb.com/docs/assets/vendor/'
        + ('__proto__' in {} ? 'zepto' : 'jquery')
        + '.js"><\/script>');
    </script>
   
    <script src="http://foundation.zurb.com/docs/assets/docs.js"></script>
    <script>
      $(document)
      
        .foundation();
        
      
    </script>
	
	<a   class="small button split round" >
    <div onclick="changebtnImg();" >
		<img  id="btnImg" src="/img/playingSmile1.jpg" alt="Smiley face" height="42" width="42"  > 
		<div id="radioText" > Now Playing... </div> 
	</div>         
	<span data-dropdown="chooseRadio"></span>
</a>
	<ul id="chooseRadio" class="f-dropdown" data-dropdown-content>
  <li>
    <a id="btnStation0" class="small button" onmousedown="play('0')">
    <img  id="playingImg0" src="/img/playingSmile1.jpg" alt="" height="42" width="42"  > 
	Station 0 (Dubai radio - City 1016) </a></li>
    <div id="station0" style="display: block; width: 1px; height: 0px; visibility: hidden;" >
	    <embed type="application/x-shockwave-flash" src="http://player.streamtheworld.com/_players/stw/v2/GenericLiveAdServer.swf?stamp=1361284822" width="600" height="100" style="undefined" id="live_player" name="live_player" bgcolor="#666666" quality="high" wmode="window" menu="false" swliveconnect="true" allowscriptaccess="always" allowfullscreen="true" flashvars="livePlayerSWF=http://player.streamtheworld.com/_core/assets/swf/liveplayer.swf?stamp=1221763875&amp;baseurl=http://player.streamtheworld.com/_core/&amp;userlevel=0&amp;lang=en&amp;callsign=ARNCITY&amp;skintemplate=stw_dark&amp;streamid=8263&amp;showeq=1&amp;shownowplaying=1&amp;showcallsign=1&amp;manualTimeout=0&amp;tryhd=1&amp;adstype=NOADS&amp;clientname=&amp;zoneid=0&amp;tagurl=&amp;targetspot_stationid=&amp;helpurl=">
  </div>
  <li>
    <a id="btnStation1" class="small button" onmousedown="play('1')">
    <img  id="playingImg1" src="" alt="" height="42" width="42"  > 
	Station 1 (Mast radio) </a></li>
   	<div id="station1" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	    <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=150887&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
    </div>
  <li>
    <a id="btnStation2" class="small button" onmousedown="play('2')">
    <img  id="playingImg2" src="" alt="" height="42" width="42"  >
    Station 2 () </a></li>
	<div id="station2" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
		<embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=12979&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
    </div>
  <li><a id="btnStation3" class="small button" onmousedown="play('3')">
      <img  id="playingImg3" src="" alt="" height="42" width="42"  >
      Station 3 () </a></li>
      <div id="station3" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
      <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=183613&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
      </div>
  <li><a id="btnStation4" class="small button" onmousedown="play('4')">
      <img  id="playingImg4" src="" alt="" height="42" width="42"  >
      Station 4 () </a></li>
	  <div id="station4" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
      <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=154940&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
      </div>
  <li><a id="btnStation5" class="small button" onmousedown="play('5')">
      <img  id="playingImg5" src="" alt="" height="42" width="42"  >
      Station 5 () </a></li>
	 <div id="station5" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
     <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=154940&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li class="divider"></li>
  <li><a href="#">See all &rarr;</a></li> 
  <li><a id="btnStation6" class="small button" onmousedown="play('6')">
     <img  id="playingImg6" src="" alt="" height="42" width="42"  >
     Station 6 () </a></li>
	 <div id="station6" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
     <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=651525&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation7" class="small button" onmousedown="play('7')">
     <img  id="playingImg7" src="" alt="" height="42" width="42"  >
     Station 7 () </a></li>
	 <div id="station7" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=135389&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
      </div>
  <li><a id="btnStation8" class="small button" onmousedown="play('8')">
     <img  id="playingImg8" src="" alt="" height="42" width="42"  >
     Station 8 () </a></li>
	 <div id="station8" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=135389&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation9" class="small button" onmousedown="play('9')">
     <img  id="playingImg9" src="" alt="" height="42" width="42"  >
     Station 9 () </a></li>
	 <div id="station9" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=135389&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation10" class="small button" onmousedown="play('10')">
     <img  id="playingImg10" src="" alt="" height="42" width="42"  >
     Station 10 () </a></li>
	 <div id="station10" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=10745&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation11" class="small button" onmousedown="play('11')"> Station 11 () </a></li>
	 <div id="station11" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=1574385&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation12" class="small button" onmousedown="play('12')"> Station 12 () </a></li>
	 <div id="station12" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
     <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=23980&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation13" class="small button" onmousedown="play('13')"> Station 13 () </a></li>
	 <div id="station13" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
     <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=184620&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation14" class="small button" onmousedown="play('14')"> Station 14 () </a></li>
	 <div id="station14" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=128633&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation15" class="small button" onmousedown="play('15')"> Station 15 () </a></li>
	 <div id="station15" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=1526602&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a	id="btnStation16" class="small button" onmousedown="play('16')"> Station 16 () </a></li>
	 <div id="station16" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=3674&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation17" class="small button" onmousedown="play('17')"> Station 17 () </a></li>
	 <div id="station17" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=17698&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation18" class="small button" onmousedown="play('18')"> Station 18 () </a></li>
	 <div id="station18" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=33457&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation19" class="small button" onmousedown="play('19')"> Station 19 () </a></li>
	 <div id="station19" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=151265&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation20" class="small button" onmousedown="play('20')"> Station 20 () </a></li>
	 <div id="station20" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=100913&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation21" class="small button" onmousedown="play('21')"> Station 21 () </a></li>
	 <div id="station21" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=1485965&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation22" class="small button" onmousedown="play('22')"> Station 22 () </a></li>
	 <div id="station22" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=100913&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation23" class="small button" onmousedown="play('23')"> Station 23 () </a></li>
	 <div id="station23" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=115037&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='100' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation24" class="small button" onmousedown="play('24')"> Station 24 () </a></li>
	 <div id="station24" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=148472&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a id="btnStation25" class="small button" onmousedown="play('25')"> Station 25 () </a></li>
	 <div id="station25" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=186306&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>
  <li><a	id="btnStation26" class="small button" onmousedown="play('26')"> Station 26 () </a></li>
	 <div id="station26" style="display: none; width: 1px; height: 0px; visibility: hidden;" >
	 <embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=217030&play_status=1' quality='high' bgcolor='#ffffff' width='200' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>
     </div>

</ul>