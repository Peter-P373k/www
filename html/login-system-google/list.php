<html>
<head>
<title>Teacher Pull Working</title>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<body>
<script>
$(document).ready(function() {
//////////////////////
$.getJSON("dlist.php", function(return_data){
$.each(return_data.data, function(key,value){
$("#student").append(

"<option value=" + value.Email_address +">"+value.First_name+"'-'"+value.Last_name+"</option>"

);
});
});
//////////////////////
});
</script>
<select name=student id=student>
</select>

</body>
</html>