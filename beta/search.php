<!DOCTYPE html>
<html lang="ja-JP">
<html>
    <head>
        <meta charset="utf-8" />
		        <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no">
        <meta name="keywords" content="とこきゃん,キャンパス,時刻表,バス,早稲田,bus">
		<meta name="description" content="所沢キャンパスの時刻表です！−とこきゃん−"> 
		<meta property="og:title" content="とこきゃんBUS時刻表-早稲田所沢キャンパスBUS時刻表-"/>
		<meta property="og:image" content="http://jinkabus.com/bus.jpeg"/>
		<meta property="og:url" content="http://jinkabus.com"/>
		<meta property="og:site_name" content="bus時刻表"/>
		<meta property="og:description" content="早稲田所沢キャンパス（とこきゃん）のbus時刻表です。"/>
		<meta property="og:tyoe" content="website"/>
        <!--メディアクエリでPC用・スマホ用CSSを振り分け-->
        <link rel="stylesheet" media="only screen and (min-width:481px)" href="css/main.css" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css" />
		<link media="only screen and (max-device-width:480px)" href="css/main-ip-ad.css" type="text/css" rel="stylesheet" />
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
    </head>
    
<?php
    include('db_login.php');
    $con = mysql_connect($db_host,$db_username,$db_password);
	$db_select = mysql_select_db($db_databese);

	//検索の時間
	$search_time = $_POST['search-time'];
	
	//var_dump($_POST);
	
	//数字の先頭に０を追加する
	$search_time = sprintf("%02d",$search_time); //$search-time string
	
	//echo gettype($search_time);
            
    if ($_POST["direction"] == "to-waseda") {
		$direction = "kote";
		$direction_jp = "早稲田行き";
    } else {
        $direction = "wase";
		$direction_jp = "小手指行き";
	}
			
    if ($_POST["day"] == "ordinary-day") {
		$day = 1;				  
		$day_jp = "平日";
    } elseif ($_POST["day"] == "saturday") {
        $day = 2;
		$day_jp = "土曜日・祝日";
    } else {
        $day = 3;
		$day_jp = "日曜日・休日";
    }
?>
<?php if(empty($_POST)):?>
	こちらの不都合です。いったん戻ってね！
<?php else:
	//ここは次のバスの時間を出す。
	$query = "SELECT * FROM jikokuhyo WHERE time LIKE '$search_time%' AND direction LIKE '%$direction%' AND day = $day ;";
    $result = mysql_query($query);
	$day = array();
	$direction = array();
	while($row = @mysql_fetch_assoc($result)){
    	$hour[] = substr($row['time'], 0,2);  
    	$minute[] = substr($row['time'], 2,3);
		$day[] = $row['day'];
		$direction[]= $row['direction'];
	}
	
	for($j = 0; $j <= count($day); $j++){
		if($day[$j] == 1 ){
			$day = "平日";
		} elseif ($day[$j] == 2 ){
			$day = "土曜、休校日";
    	} elseif ($day[$j] == 3){
			$day = "日曜、祝日";
		}
	}
	
	for($i=0; $i <= count($direction); $i++):
		if ($direction[$i] == "kotenorth") {
			$direction_start[$i] = "小手指";
			$direction_finish[$i] = "早稲田";
			$gateway[$i] = "北口発";
		} elseif ($direction[$i] == "kotesouth") {
			$direction_start[$i] = "小手指";
			$direction_finish[$i] = "早稲田";
			$gateway[$i] = "南口発";
		} elseif ($direction[$i] == "wasenorth") {
			$direction_start[$i] = "早稲田";
			$direction_finish[$i] = "小手指";
			$gateway[$i] = "北口着";
		} elseif ($direction[$i] == "wasesouth") {
			$direction_start[$i] = "早稲田";
			$direction_finish[$i] = "小手指";
			$gateway[$i] = "南口着";
		}
	endfor;?>


	<?php if(count($day) == 0): //kesu?>
      	今日(23：59)までのバスはございません。
	<?php else: ?>	
<body>
    	 <div class="container-fluid"><!-- container-fluid -->
        <div id="content"><!-- content -->
            <div id="header"><!-- header -->
                <h1>
                	<div align="center">
                    とこきゃんBUS時刻表
                   </div>
                </h1>
            </div><!-- #header -->
    <?php //以下、next-busを表示?>
			<?php //$directionの配列の数によって何個、表示するか決める。?>
      		<?php for($i=0; $i < count($direction); $i++): ?>  
      		<div id="timetable_center">
      			<div id="bus-time">
          			<div class="number-bus">
          				<?php $p = $i + 1; ?>
          				<?php echo $p."番目"; ?>
          			</div>
            		<div class="direction">
            			<?php echo "$direction_start[$i]" . "→" . "$direction_finish[$i]"; ?>
            		</div>
            		<div class="time">
            				<p>次のバス</p>
            			<div>
            				<?php echo $hour[$i].":".$minute[$i]; ?>
            			</div>	
            		</div>
            		<div class="gateway">
            				<?php echo "$gateway[$i]"; ?>
            		</div>
            		<div class="day">
            			<?php echo "$day"; ?>
            		</div>
            		<div class="worning">
            			<?php $test = $hour[0];?>
            			<?php if($_POST["day"] == "ordinary-day" && $_POST["direction"] == "to-waseda" && $test == 8 && $i == 1){?>
            				<p>8時10〜50分まで、2〜3分間隔で運行</p>
						<?php } ?>
						<?php if($_POST["day"] == "ordinary-day" && $_POST["direction"] == "to-waseda" && $test == 10 && $i == 0){?>
            				<p>10時00〜20分まで、2〜3分間隔で運行</p>
						<?php } ?>
            		</div>
            	</div>
      		</div>
          		
        	<?php endfor; ?>
	<?php endif;?>
<?php endif;?>


		<div class="return">
			<div class="btn btn-inverse">
           	<a href="http://jinkabus.com">戻る</a>
            </div>
		</div>           
        <div id="footer"><!-- footer -->
        	<div id="socialbutton">
        		<div id="line">
        			<a href="http://line.naver.jp/R/msg/text/?とこきゃん時刻表を使ってください！http://jinkabus.com"><img src="http://kazumasa.main.jp/test/timetable/linebutton/linebutton_86x20.png" width="86" height="20" alt="LINEで送る" /></a>
        		</div>
         		<div id="facebook">
        			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkazumasa.main.jp%2Fjikokuhyo%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=240978759360924" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
        		</div>
        		<div id="twitter">
        			<a href="https://twitter.com/share" class="twitter-share-button"　data-text="とこきゃん専用BUS時刻表をぜひ、使ってみ！！" data-url="http://jinkabus.com" data-via="jinka_bus" data-lang="ja">Tweet</a>
                	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        		</div>
        	</div>
        	<div class="footer-text credits">
				<div class="one">&copy; <a href="http://jinkabus.com"></a>とこきゃん専用BUS時刻表</div>
				<div class="two">Powered by @PallCreaker</div>
			</div>
		</div><!-- #footer -->
        </div><!-- #content -->
    </div><!-- #container-fluid -->
    </body>
</html>
