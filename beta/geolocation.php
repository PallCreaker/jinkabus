<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type"
        content="text/html; charset=utf-8">
    <title>Test</title>
    <style>
    body { padding:5px; }
    h1 { font-size:18pt; background-color:#EEEEFF; }
    </style>
    <script type="text/javascript">
    <!--
    function doAction(){
        navigator.geolocation.getCurrentPosition(getPosition);
    }
 
    function getPosition(p){
        var lat = p.coords.latitude;
        var lng = p.coords.longitude;
        document.getElementById("msg").innerHTML = "緯度：" + lat + "," + "緯度：" + lng; 
    }
    // -->
    </script>
    <script type="text/javascript" src="js/geolocation.js"></script>
    </head>
    <body onload="doAction();">
        <h1>GPS Sample</h1>
        <div id="msg"></div>
        
        <p>あなたの現在位置</p>
<div id="show_result"></div>
<div id="test"></div>
    </body>
</html>

