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


<h1>Music<h1>

<h2>Songs:</h2>
<button onclick="a()" type="button">Try Harder</button>
<script>
function a(){
	window.location="/music/tryharder.mp3";
}
</script>
<h2></h2>


<button onclick="b()" type="button">Blessings</button>
<script>
function b(){
	window.location="/music/blessings.mp3";
}
</script>
<h2></h2>


<button onclick="c()" type="button">Cornerstone</button>
<script>
function c(){
	window.location="/music/cornerstone.mp3";
}
</script>
<h2></h2>


<button onclick="d()" type="button">Do Something</button>
<script>
function d(){
	window.location="/music/do_something.mp3";
}
</script>
<h2></h2>

<button onclick="e()" type="button">Let Love Win</button>
<script>
function e(){
	window.location="/music/let_love_win.mp3";
}
</script>
<h2></h2>

<button onclick="f()" type="button">My Story</button>
<script>
function f(){
	window.location="/music/my_story.mp3";
}
</script>
<h2></h2>

<button onclick="g()" type="button">I Need You Now</button>
<script>
function g(){
	window.location="/music/plumb.mp3";
}
</script>
<h2></h2>

<button onclick="h()" type="button">Intremental core</button>
<script>
function h(){
	window.location="/music/intrementalcore.mp3";
}
</script>
<h2></h2>


<button onclick="i()" type="button">Jar Of Hearts</button>
<script>
function i(){
	window.location="/music/jarofhearts.mp3";
}
</script>
<h2></h2>


<button onclick="j()" type="button">Race Time</button>
<script>
function j(){
	window.location="/music/racetime.mp3";
}
</script>
<h2></h2>



<h2>Other</h2>

<button onclick="stefmusic()" type="button">Stefan's Music</button>

<script>
function stefmusic(){
	var inpass = prompt("Password:");
	if (inpass == 20009){
		alert("Correct, Redirecting...");
		window.location="stefmusic.php?";
	}
	else{
		alert("Wrong Password, Try Again!");
	}
}
</script>
<script>
//var delay=30000; //1 second



//setTimeout(function plz() {
  //your code to be executed after 1 second
//  run();
//}, delay);
//function run(){
//var name = prompt("Name:         (no caps)");
//if (name = "stefan"){
	//alert("adding");
	//load();
//}
//if (name = "beka"){
	//alert("adding");
	//load();
//}
//if (name = "toby"){
	//alert("adding");
	//load();
//}
//if (name = "test"){
	//alert("adding");
	//load();
//}
//}

//var money = 0;

//function setCookie(cname, cvalue, exdays) {
	//var d = new Date();
    //d.setTime(d.getTime() + (exdays*24*60*60*1000));
    //var expires = "expires="+d.toUTCString();
    //document.cookie = cname + "=" + cvalue + "; " + expires;
//}
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
        
function save(){
	setCookie(name + ".money",money,730);
	alert(money);
}

function load(){
	money = 1 * getCookie(name + ".money");
	add();
}
function add(){
	money = (money + 5);
	save();
}


</script>
<script>
function settimer(){
	setInterval(mytimer, 300000);
	 
}
var moneys = 0;
function mytimer(){
	var aws = prompt("Name:                (No Caps)    ");
	alert("You Won $");
	moneys = 1 * getCookie(aws + ".moneys");
	moneys = moneys + 5;
	setCookie(aws + ".moneys",moneys,730);
	alert(moneys);
	
}

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

</script>
</body>
</html>



