<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net demo scripts using JQuery</title>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<body>
<script>
$(document).ready(function() {
//////////////////////
$.getJSON("student-data.php", function(return_data){
	$.each(return_data.data, function(key,value){
		$("#student").append("<option value=" + value.id +">"+value.name+"</option>");
	});
});
//////////////////////
});
</script>
<select name=student id=student>
</select>
<br><br><br><br>
Visit <a href=http://www.plus2net.com/jquery/site_map.php rel="nofollow">www.plus2net.com from more free scripts and tutorials</a>
</body>
</html>
