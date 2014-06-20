
//ユーザーの現在の位置情報を取得
navigator.geolocation.getCurrentPosition(successCallback, errorCallback);

/***** ユーザーの現在の位置情報を取得 *****/
function successCallback(position) {
	
	var gl_lat =  position.coords.latitude;//緯度
	var gl_long = position.coords.longitude;//軽度
	
	
	if(gl_lat > 35.78283 && gl_lat < 35.790){
		if(gl_long > 139.3998 && gl_long < 139.402500){
			//document.getElementById("gl-direction").value = "to-kote";
			document.getElementById("gl-direction").innerHTML = "<input type='hidden' name='direction' value='to-kote'/>";
			document.getElementById("show_place").innerHTML = "<span>ここは所沢キャンパス内です</span>";
		}else{
			//document.getElementById("gl-direction").value = "";
			document.getElementById("gl-direction").innerHTML = "<input type='hidden' name='direction' value='to-waseda'/>";
		}
	}else{
		//document.getElementById("gl-direction").value = "to-waseda";
		document.getElementById("gl-direction").innerHTML = "<input type='hidden' name='direction' value='to-waseda'/>";
	}

 /* var gl_text = "緯度：" + position.coords.latitude + "<br>";
    gl_text += "経度：" + position.coords.longitude + "<br>";
    gl_text += "高度：" + position.coords.altitude + "<br>";
    gl_text += "緯度・経度の誤差：" + position.coords.accuracy + "<br>";
    gl_text += "高度の誤差：" + position.coords.altitudeAccuracy + "<br>";
    gl_text += "方角：" + position.coords.heading + "<br>";
    gl_text += "速度：" + position.coords.speed + "<br>";
    
    if(gl_lat > 35.78983 && gl_lat < 35.789777){
		if(gl_long > 139.40187 && gl_long < 139.40187){
			document.getElementById("show_result").innerHTML = "ここは、とこキャン内です";
		}else{
			document.getElementById("show_result").innerHTML = "ここは、外です";
		}
	}else{
		document.getElementById("show_result").innerHTML = gl_long;
	}
	
    */
}

/***** 位置情報が取得できない場合 *****/
function errorCallback(error) {
  var err_msg = "";
  switch(error.code)
  {
    case 1:
      err_msg = "<span style='color:red;'>※注意！</span><br />ブラウザの位置情報(GPS)が許可されてません。<br />iPhoneの方→<br />「設定」>「プライバシー」>「位置情報サービス」でsafariのGPSをON<br />androidの方 → GPSをON";
      document.getElementById("secret").style.display  = 'none';
      break;
    case 2:
      err_msg = "デバイスの位置が判定できません";
      break;
    case 3:
      err_msg = "もう一度、お願いします";
      break;
  }
 //alert(err_msg);
	document.getElementById("show_result").innerHTML = err_msg;
	
 //document.getElementById("show_result").innerHTML += error.message;//debug
}


