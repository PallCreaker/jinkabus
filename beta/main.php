<!DOCTYPE html>
<html lang="ja-JP">
<html>
    <head>
        <meta charset="utf-8" />
		<meta name = "viewport" content = "width=device-width, , initial-scale = 1, user-scalable = no">
		<meta name="keywords" content="所沢,キャンパス,時刻表,バス,早稲田,bus">
		<meta name="description" content="所沢キャンパスの時刻表です！"> 
        <title>とこきゃんBUS時刻表</title>
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

    include ('db_login.php');
    $con = mysql_connect($db_host,$db_username,$db_password);
	$db_select = mysql_select_db($db_databese);

    //今の時間を＄timeに。
    $time = time(); 
    $Nowtime = date("Hi" , $time);

            
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
    <body>
    	 <div class="container-fluid">
        <!-- Home -->
        <div id="content">
            <div id="header">
                <h3>
                	<div align="center">
                    とこきゃんBUS時刻表
                   </div>
                </h3>
            </div>
<?php if(empty($_POST)):?>
	こちらの不都合です。いったん戻ってね！
<?php else:?>
	<?php if($_POST['time-table'] == "next-bus")://次のバスを表示、、、でっかいif文になっってる。?>
            
	<?php
	//ここは次のバスの時間を出す。
	$query = "SELECT * FROM jikokuhyo WHERE time > $Nowtime AND direction LIKE '%$direction%' AND day = $day LIMIT 3;";
    $result = mysql_query($query);
	$day = array();
	$direction = array();
	while($row = @mysql_fetch_assoc($result)){
    	$hour[] = substr($row['time'], 0,2);  
    	$minute[] = substr($row['time'], 2,3);
		$day[] = $row['day'];
		$direction[]= $row['direction'];
	}


	if($day[0] == 1 && $day[1] == 1 && $day[2] == 1){
		$day = "平日";
 	} elseif ($day[0] == 2 && $day[1] == 2 && $day[2] == 2){
		$day = "土曜、休校日";
    } elseif ($day[0] == 3 && $day[1] == 3 && $day[2] == 3){
		$day = "日曜、祝日";
	}
	
	for($i=0; $i <= 2; $i++):
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


	<?php if(count($day) == 0):?>
      	今日(23：59)までのバスはございません。
	<?php else: ?>	
      	
    <!--以下、next-busを表示-->
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
	<?php endif;//でっかいif文終わり ?>


	<?php if($_POST['time-table'] == 'next-time')://またでっかいif文になってて、次は時刻表を。。?>
	<?php
	function isLoop($time, $data, $loop_flg){
		for($i=$loop_flg; $i<count($data);$i++){
			if($data[$i]['hour'] == $time){
				$data_list[] = $data[$i]['minute'];
			} else {
				return array($data_list, $data, $i); //なぜにここにarrayがあるのか。。。。
				break;
			}
		}
	}
	/*next-timeの表示*/    	
	$querys = "SELECT * FROM jikokuhyo WHERE direction LIKE '%$direction%' AND day = $day;";
	$results = mysql_query($querys);
		$days = array();
		$directions = array();
		while($rows = @mysql_fetch_assoc($results)){
			$data[] = array(
					'hour' => substr($rows['time'], 0,2),
					'minute'=> substr($rows['time'], 2,3)
					);
    		//$hours[] = substr($rows['time'], 0,2);以前Ｖｅｒｓｉｏｎ
    		//$minutes[] = substr($rows['time'], 2,3);以前Ｖｅｒｓｉｏｎ変数の入れ方を考えよう。
			$days[] = $rows['day'];
			$directions[]= $rows['direction'];
		}

	$loop_flg = 0;
	list($clock8, $data, $loop_flg) = isLoop(8, $data, $loop_flg);//$loop_flgはそのままデータが残る。じゃないと動かない。また$loop_flg = 0から始まると止まる
	list($clock9, $data, $loop_flg) = isLoop(9, $data, $loop_flg);
	list($clock10, $data, $loop_flg) = isLoop(10, $data, $loop_flg);
	list($clock11, $data, $loop_flg) = isLoop(11, $data, $loop_flg);
	list($clock12, $data, $loop_flg) = isLoop(12, $data, $loop_flg);
	list($clock13, $data, $loop_flg) = isLoop(13, $data, $loop_flg);
	list($clock14, $data, $loop_flg) = isLoop(14, $data, $loop_flg);
	list($clock15, $data, $loop_flg) = isLoop(15, $data, $loop_flg);
	list($clock16, $data, $loop_flg) = isLoop(16, $data, $loop_flg);
	list($clock17, $data, $loop_flg) = isLoop(17, $data, $loop_flg);
	list($clock18, $data, $loop_flg) = isLoop(18, $data, $loop_flg);
	list($clock19, $data, $loop_flg) = isLoop(19, $data, $loop_flg);
	list($clock20, $data, $loop_flg) = isLoop(20, $data, $loop_flg);
	list($clock21, $data, $loop_flg) = isLoop(21, $data, $loop_flg);

	$clock_list = array($clock8,$clock9,$clock10,$clock11,$clock12,$clock13,$clock14,$clock15,$clock16,$clock17,$clock18,$clock19,$clock20,$clock21);
	$hour_time = array(8,9,10,11,12,13,14,15,16,17,18,19,20,21);
	?>
	  	<table class="table table-striped">
	  		<caption><?php echo $direction_jp;?></caption>
	  		<caption><?php echo $day_jp;?></caption>
		<?php for($i=0; $i<count($clock_list) ;$i++):?>
		<tr>
			<th><?php echo $hour_time[$i];?></th>
			<?php for($p=0; $p<10; $p++):?>
				<td>
					<?php echo $clock_list[$i][$p];?>
					<?php //注意事項
					if($_POST["day"] == "ordinary-day" && $_POST["direction"] == "to-waseda" && $i==0 && $p == 9){?>
						<div class="worning2"> 8時10〜50分まで、2〜3分間隔で運行</div>
					<?php } ?>
					<?php if($_POST["day"] == "ordinary-day" && $_POST["direction"] == "to-waseda" && $i==2 && $p == 9){?>
						<span class="worning2">10時00〜20分まで、2〜3分間隔で運行</span>
					<?php } ?>
				</td>
			<?php endfor;?>
		</tr>
		<?php endfor;?>
	</table>
	<?php endif;//でっかいif文終わり。?>
<?php endif;?>
		<div class="return">
			<div class="btn btn-inverse">
           	<a href="http://jinkabus.com">戻る</a>
            </div>
		</div>           
        <div id="footer">
        	<div id="socialbutton">
         		<div id="facebook">
        			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fkazumasa.main.jp%2Fjikokuhyo%2F&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=240978759360924" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
        		</div>
        		<div id="twitter">
        			<a href="https://twitter.com/share" class="twitter-share-button"　data-text="とこきゃん専用BUS時刻表をぜひ、使ってみ！！" data-url="http://jinkabus.com" data-via="jinka_bus" data-lang="ja">Tweet</a>
                	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        		</div>
        	</div>
        	<div class="footer-text credits">
				<div class="one">&copy; <a href="http://jinkabus.com"></a>人科専用BUS時刻表</div>
				<div class="two">Powered by @PallCreaker</div>
			</div>
		</div>

     
        </div>
    </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>





