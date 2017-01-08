<html>
	<head>
		<title>Stefsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body onload="settimer();">

		<!-- Wrapper 20 -->
			<div id="wrapper">
				
			</div>



<h1>Stefan's Music Page<h1>

<h2>Songs:</h2>
<button onclick="a()" type="button">Try Harder</button> &nbsp; <a href="/music/tryharder.mp3" download="Try Harder">Download</a>

<script>
function a(){
	window.location="/music/tryharder.mp3";
}
</script>
<h2></h2>


<button onclick="b()" type="button">Blessings</button> &nbsp; <a href="/music/blessings.mp3" download="Blessings">Download</a>
<script>
function b(){
	window.location="/music/blessings.mp3";
}
</script>
<h2></h2>


<button onclick="c()" type="button">Cornerstone</button> &nbsp; <a href="/music/cornerstone.mp3" download="cornerstne">Download</a>
<script>
function c(){
	window.location="/music/cornerstone.mp3";
}
</script>
<h2></h2>


<button onclick="d()" type="button">Do Something</button> &nbsp; <a href="/music/do_something.mp3" download="Do Something">Download</a>
<script>
function d(){
	window.location="/music/do_something.mp3";
}
</script>
<h2></h2>

<button onclick="e()" type="button">Let Love Win</button> &nbsp; <a href="/music/let_love_win.mp3" download="Let Love Win">Download</a>
<script>
function e(){
	window.location="/music/let_love_win.mp3";
}
</script>
<h2></h2>

<button onclick="f()" type="button">My Story</button> &nbsp; <a href="/music/my_story.mp3" download="My Story">Download</a>
<script>
function f(){
	window.location="/music/my_story.mp3";
}
</script>
<h2></h2>

<button onclick="g()" type="button">I Need You Now</button> &nbsp; <a href="/music/plumb.mp3" download="I Need You Now">Download</a>
<script>
function g(){
	window.location="/music/plumb.mp3";
}
</script>
<h2></h2>


<button onclick="h()" type="button">Intremental core</button> &nbsp; <a href="/music/intrementalcore.mp3" download="Intremntal Core">Download</a>
<script>
function h(){
	window.location="/music/intrementalcore.mp3";
}
</script>
<h2></h2>


<button onclick="i()" type="button">Jar Of Hearts</button> &nbsp; <a href="/music/jarofhearts.mp3" download="I Need You Now">Download</a>
<script>
function i(){
	window.location="/music/jarofhearts.mp3";
}
</script>
<h2></h2>


<button onclick="j()" type="button">Race Time</button> &nbsp; <a href="/music/racetime.mp3" download="RaceTime">Download</a>
<script>
function j(){
	window.location="/music/racetime.mp3";
}
</script>
<h2></h2>


<button onclick="k()" type="button">Shut Up and Dance With Me</button> &nbsp; <a href="/music/Shutdance.mp3" download="Shut Up And Dance">Download</a>
<script>
function k(){
	window.location="/music/Shutdance.mp3";
}
</script>
<h2></h2>


<button onclick="l()" type="button">Thousand Men</button> &nbsp; <a href="/music/thousandmen.mp3" download="thousandmen">Download</a>
<script>
function l(){
	window.location="/music/thousandmen.mp3";
}
</script>
<h2></h2>


<button onclick="m()" type="button">x2 The Trouble</button> &nbsp; <a href="/music/x2trouble.mp3" download="x2trouble">Download</a>
<script>
function m(){
	window.location="/music/x2trouble.mp3";
}
</script>
<h2></h2>




<h2>Other</h2>

<button onclick="stefmusic()" type="button">Music</button>

<script>




function stefmusic(){
	window.location="sound.php?";
}
</script>

<script>
function settimer(){
	setInterval(mytimer, 30000000);
	 
}
var moneys = 0;
function mytimer(){
	var aws = prompt("Password:                (No Caps)    ");
	alert("You Won $");
	moneys = 1 * getCookie(aws + ".moneys");
	moneys = moneys + 500;
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



