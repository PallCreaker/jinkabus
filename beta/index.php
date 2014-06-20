
<!DOCTYPE html>
<html lang="ja-JP">
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="apple-touch-icon-precomposed" href="home_top_bus.jpeg" /> 
        <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no">
        <meta name="keywords" content="とこきゃん,キャンパス,時刻表,バス,早稲田,bus">
		<meta name="description" content="所沢キャンパスの時刻表です！−とこきゃん−"> 
		<meta property="og:title" content="とこきゃんBUS時刻表-早稲田所沢キャンパスBUS時刻表-"/>
		<meta property="og:image" content="http://jinkabus.com/bus.jpeg"/>
		<meta property="og:url" content="http://jinkabus.com"/>
		<meta property="og:site_name" content="bus時刻表"/>
		<meta property="og:description" content="早稲田所沢キャンパス（とこきゃん）のbus時刻表です。"/>
		<meta property="og:tyoe" content="website"/>
        <title>とこきゃんBUS時刻表-早稲田所沢キャンパスBUS時刻表-</title>
    <!--メディアクエリでPC用・スマホ用CSSを振り分け-->
        <link rel="stylesheet" media="only screen and (min-width:481px)" href="css/index.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" />
		<link media="only screen and (max-device-width:480px)" href="css/index-ip-ad.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/geolocation.js"></script> 
		<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38085443-1']);
  _gaq.push(['_setDomainName', 'main.jp']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</script>
    </head>
    <body>
    <!-- Home -->
    <div class="container-fluid">
		<div id="header">
			<h1>
				<div align="center">
                    とこきゃんBUS時刻表
                </div>
            </h1>
		</div>
    <!--form-->
	<form action="next.php" method="post" class="form">
    	<!--content-->
    	<div id="gl-direction"></div>
    	<?php $ddate = getdate();?> 
    	<?php if($ddate["wday"] == 1 || $ddate["wday"] == 2 || $ddate["wday"] == 3 || $ddate["wday"] == 4 || $ddate["wday"] == 5){?>
			<input type="hidden" name="day" value="ordinary-day" />
		<?php } elseif($ddate["wday"] == 6) { ?>
    	    <input type="hidden" name="day" value="saturday" />
	     <?php } elseif($ddate["wday"] == 0) { ?>
    	  	<input type="hidden" name="day" value="sunday" />
    	 <?php }?>
		<input type="hidden" name="action" value="next" />
		
		<h2>次のバスを検索する<br />※（現在地を利用）</h2>
		<div id="secret" class="button-radius">
			<input class="btn btn-info" type="submit" value="見る" />
     	</div>
     	<br />
     	<div id="show_place"></div>
     	<div id="show_result"></div>
     	
	</form>
	
	<form action="search.php" method="post" class="form">
		<h2 id="search">時間で検索する</h2>
			<div class="btn-group">
				<div id="direction">
                    <label for="selectmenu1">
                        目的地：
                    </label>
                    <select name="direction">
                        <option value="to-waseda">
                            早稲田行き
                        </option>
                        <option value="to-kote">
                            小手指行き
                        </option>
                    </select>
               	</div>
                <div>
               <?php $date = getdate();?> 
                    <label for="selectmenu2" id="day">
                        曜　日：
                    </label>
                    <select name="day">
                    <?php if($date["wday"]== 1 || 2 || 3 || 4 || 5){?>
                        <option value="ordinary-day" selected>平日</option>
                     <?php }else{ ?>
                     	<option value="ordinary-day">平日</option>
                     <?php } ?>
                     <?php if($date["wday"]== 6){?>
                        <option value="saturday" selected>土曜日・休校日</option>
                     <?php }else{ ?>
                     	<option value="saturday">土曜日・休校日</option>
                     <?php } ?>
                     <?php if($date["wday"]== 0){?>
                        <option value="sunday" selected>日曜日・祝日</option>
                     <?php }else{ ?>
                     	<option value="sunday">日曜日・祝日</option>
                     <?php } ?>
                   </select>
                </div>
                <div id="time-saerch">
                	<label for="selectmenu1">
                       	時間：
                    </label>
                    <select name="search-time">
                    	<?php for($i = 8; $i < 24; $i++){?> 
                        <option value="<?php echo $i;?>">
                           <?php echo $i ;?>時台
                        </option>
                        <?php } ?>
                    </select>
                </div>
               <input type="hidden" name="action" value="search" />
               <div class="button-radius">
                	<input class="btn btn-warning" type="submit" name="search" value="次へ" />
                </div>
        	</div> 
           </form>
          
        
        <div id="footer">
        	<div id="socialbutton">
        		<div id="line">
        			<a href="http://line.naver.jp/R/msg/text/?とこきゃん時刻表を使ってください！http://jinkabus.com"><img src="http://kazumasa.main.jp/timetable/linebutton/linebutton_86x20.png" width="86" height="20" alt="LINEで送る" /></a>
        		</div>
         		<div id="facebook">
        			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkazumasa.main.jp%2Fjikokuhyo%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=240978759360924" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
        		</div>
        		<div id="twitter">
        			<a href="https://twitter.com/share" class="twitter-share-button"　data-text="とこきゃん専用BUS時刻表をぜひ、使ってみて！！" data-url="http://jinkabus.com" data-via="jinka_bus" data-lang="ja">Tweet</a>
                	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        		</div>
        	</div>
        	<div class="footer-text credits">
				<div class="one">&copy; <a href="http://jinkabus.com"></a>とこきゃん専用BUS時刻表</div>
				<div class="two">Powered by @PallCreaker</div>
			</div>
		</div>

	</div>     
        <script>
            //App custom javascript
        </script>
    </body>
</html>