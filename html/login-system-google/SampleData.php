<html>
<head>
<title>Teacher Pull Working</title>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<body>
<script>
$(document).ready(function() {
//////////////////////
$.getJSON("SampleQuery.php", function(return_data){
$.each(return_data.data, function(key,value){
$("#TeacherData").append(

"<option value=" + value.Email_address +">"+value.First_name+'-'+value.Last_name+"</option>"

);
});
$('#TeacherData').change(function(){
var st=$('#TeacherData option:selected').text();
var st=$('#TeacherData').val();
alert(st);
});
$(document).ready(function() {
///////////////////////////////
$("#TeacherData").change(function(){ // change function of listbox
//alert($('#city_id').val());
window.location = $('#TeacherData').val();
});
//////////////////////////
})
});
//////////////////////
});
</script>
<select name=TeacherData id=TeacherData>
</select>

</body>
</html>