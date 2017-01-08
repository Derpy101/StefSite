<html>
	<head>
		<title>Stefsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>



<script src="jquery.js"></script>


<button type="button" onclick="buzz()">Click Me</button>
<p></p>
<script type="text/javascript">
 
 function buzz() {
      $.ajax({
        url:"script.php", //the page containing php script
        type: "POST", //request type
        success:function(result){
//         alert(result);
       }
     });
 }
 
</script>


</body></html>
