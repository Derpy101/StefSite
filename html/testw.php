<html>
	<head>
		<title>Stefsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body onload="loads();">

		<!-- Wrapper 20 -->
			<div id="wrapper">
				
			</div>
</head>

<script>

var sp = 0;
var co = 0;
var hc = 0;
var sl = 0;
var de = 0;
var ag = 0;
var ft = 0;

function a(){
	sp += 1;
	document.getElementById("sp").innerHTML = sp;
}
function b(){
	co += 1;
	document.getElementById("co").innerHTML = co;
}
function c(){
	hc += 1;
	document.getElementById("hc").innerHTML = hc;
}
function d(){
	sl += 1;
	document.getElementById("sl").innerHTML = sl;
}
function e(){
	de += 1;
	document.getElementById("de").innerHTML = de;
}
function f(){
	ag += 1;
	document.getElementById("ag").innerHTML = ag;
}
function g(){
	ft += 1;
	document.getElementById("ft").innerHTML = ft;
}

</script>

<h1>Shop<h1>
<h2>Normal Items:<h2>
<h2><h2>

<button type="button" onClick="a()">1</button>
<button type="button" onClick="b()">2</button>
<button type="button" onClick="c()">3</button>
<button type="button" onClick="d()">4</button>
<button type="button" onClick="e()">5</button>
<button type="button" onClick="f()">6</button>
<button type="button" onClick="g()">7</button>

<h2>sp: <a id="sp">0</a><h2>
<h2>co: <a id="co">0</a><h2>
<h2>hc: <a id="hc">0</a><h2>
<h2>sl: <a id="sl">0</a><h2>
<h2>de: <a id="de">0</a><h2>
<h2>ag: <a id="ag">0</a><h2>
<h2>ft: <a id="ft">0</a><h2>


</body>		
</html>
