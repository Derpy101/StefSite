<html>
	<head>
		<title>Stefsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Wrapper 20 -->
			<div id="wrapper">
				
			</div>


<h1>Administration Page<h1>

<h2>Money:<h2>
<button onclick="fix()" type="button">Set Cookies</button><h3><h3>
<button onclick="add$()" type="button">Add Cookies</button><h3><h3>
<h2>Other:<h2>
<button onclick="userpass()" type="button">Passwords</button><h3><h3>
<script>
	
	
	
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

function fix(){
	var person = prompt("who?: ");
	var coins = prompt("amount?; ");
	setCookie(person + ".moneys",coins,730);
	person = 0;
	coins = 0;
}
</script>
<script>
function add$(){
	var amount = prompt("How Much?: ");
	var who = prompt("Who?: ");
	money = 1 * getCookie(who + ".moneys");
	amount = amount + money;
	setCookie(who + ".moneys",amount,730);
	amount = 0;
	who = 0;
	money = 0;
	
}
</script>
<script>
function userpass(){
	alert("Beka: beka");
	alert("Toby: toby123");
	alert("Test: test");
	var help = prompt("pass:");
	if (help == 20009){
		alert("Stefan: stefan1230");
	}
	else{
		alert("incorrect");
	}
	help = 0;
}
</script>



</body>
</html>



