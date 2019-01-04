<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="html2canvas.js"></script>
<script>
function take_screenshot()
{
 html2canvas(document.body, {  
  onrendered: function(canvas)  
  {
    var img = canvas.toDataURL()
    $.post("save_screenshot.php", {data: img}, function (file){
	window.location.href =  "save_screenshot.php?file="+ file
    });
  }
 });
}
</script>
<body>
<div id="wrapper">
<div id="screenshot_div">
textarea {
 background: #eff0f1;
 width: 600px;
 height: 300px;
 font: normal 14px verdana;
 line-height: 25px;
 padding: 2px 10px;
 border: solid 1px #ddd;
}textarea {
 background: #eff0f1;
 width: 600px;
 height: 300px;
 font: normal 14px verdana;
 line-height: 25px;
 padding: 2px 10px;
 border: solid 1px #ddd;
}textarea {
 background: #eff0f1;
 width: 600px;
 height: 300px;
 font: normal 14px verdana;
 line-height: 25px;
 padding: 2px 10px;
 border: solid 1px #ddd;
}
  <button type="button" onclick="take_screenshot()">Take Screenshot</button>
</div>
</div>
</body>
</html>