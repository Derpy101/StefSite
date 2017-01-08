<?php
session_start();
$username = $_SESSION['useron'];
?>
<html>
	<head>
		<title>Stefsite</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body onload="loadEverything();">
<embed src="/music/intrementalcore.mp3" autostart="true" loop="true" hidden="true">
		<!-- Wrapper 20 -->

</head>

<script type="text/javascript">

var username = "<?php echo $username ?>";	

var money = 0;
	
var sp = 0;
var co = 0;
var hc = 0;
var sl = 0;
var de = 0;
var ag = 0;
var ft = 0;
var am = 0;

var pm = 0;
var dm = 0;
var sa = 0;

var cpp = 0;



function as(){
	if (money >= 50){
	money = (money - 50);
	sp += 1;
	document.getElementById("sp").innerHTML = sp;
	saveEverything();
}
}
function bs(){
	if (money >= 100){
	money = (money - 100);
	co += 1;
	document.getElementById("co").innerHTML = co;
	saveEverything();
	
}
}
function cs(){
	if (money >= 50){
	money = (money - 50);
	hc += 1;
	document.getElementById("hc").innerHTML = hc;
	saveEverything();
}
}
function ds(){
	if (money >= 100){
	money = (money - 100);
	sl += 1;
	document.getElementById("sl").innerHTML = sl;
	saveEverything();
}
}
function es(){
	if (money >= 50){
	money = (money - 50);
	de += 1;
	document.getElementById("de").innerHTML = de;
	saveEverything();
}
}
function fs(){
	if (money >= 100){
	money = (money - 100);
	ag += 1;
	document.getElementById("ag").innerHTML = ag;
	saveEverything();
}
}
function gs(){
	if (money >= 150){
	money = (money - 150);
	ft += 1;
	document.getElementById("ft").innerHTML = ft;
	saveEverything();
}
}
function hs(){
	if (money >= 100){
	money = (money - 100);
	am += 1;
	document.getElementById("am").innerHTML = am;
	saveEverything();
}
}
function is(){
	if (money >= 20000){
	money = (money - 20000);
	pm += 1;
	document.getElementById("pm").innerHTML = pm;
	saveEverything();
}
}
function js(){
	if (money >= 20000){
	money = (money - 20000);
	dm += 1;
	document.getElementById("dm").innerHTML = dm;
	saveEverything();
}
}
function ks(){
	if (money >= 15000){
	money = (money - 15000);
	sa += 1;
	document.getElementById("sa").innerHTML = sa;
	saveEverything();
}
}
function ls(){
	if (money >= 500){
	money = (money - 500);
	cpp += 1;
	document.getElementById("cpp").innerHTML = cpp;
	saveEverything();
}
}





function asu(){
	if (sp >= 1){
	sp -= 1;
	document.getElementById("sp").innerHTML = sp;
	saveEverything();
}
}
function bsu(){
	if (co >= 1){
	co -= 1;
	document.getElementById("co").innerHTML = co;
	saveEverything();
}
}
function csu(){
	if (hc >= 1){
	hc -= 1;
	document.getElementById("hc").innerHTML = hc;
	saveEverything();
}
}
function dsu(){
	if (sl >= 1){
	sl -= 1;
	document.getElementById("sl").innerHTML = sl;
	saveEverything();
}
}
function esu(){
	if (de >= 1){
	de -= 1;
	document.getElementById("de").innerHTML = de;
	saveEverything();
}
}
function fsu(){
	if (ag >= 1){
	ag -= 1;
	document.getElementById("ag").innerHTML = ag;
	saveEverything();
}
}
function gsu(){
	if (ft >= 1){
	ft -= 1;
	document.getElementById("ft").innerHTML = ft;
	saveEverything();
}
}
function hsu(){
	if (am >= 1){
	am -= 1;
	document.getElementById("am").innerHTML = am;
	saveEverything();
}
}
function isu(){
	if (pm >= 1){
	pm -= 1;
	document.getElementById("pm").innerHTML = pm;
	saveEverything();
}
}
function jsu(){
	if (dm >= 1){
	dm -= 1;
	document.getElementById("dm").innerHTML = dm;
	saveEverything();
}
}
function ksu(){
	if (sa >= 1){
	sa -= 1;
	document.getElementById("sa").innerHTML = sa;
	saveEverything();
}
}
function lsu(){
	if (cpp >= 1){
	cpp -= 1;
	document.getElementById("cpp").innerHTML = cpp;
	saveEverything();
}
}
function reset(){
	
	sp = 0;
	co = 0;
	hc = 0;
	sl = 0;
	de = 0;
	ag = 0;
	ft = 0;
	am = 0;

	pm = 0;
	dm = 0;
	sa = 0;
	saveEverything();
}


//===============================================================================================================
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
        
        function updateall(){
			document.getElementById("sp").innerHTML = sp;
			document.getElementById("co").innerHTML = co;
			document.getElementById("hc").innerHTML = hc;
			document.getElementById("sl").innerHTML = sl;
			document.getElementById("de").innerHTML = de;
			document.getElementById("ag").innerHTML = ag;
			document.getElementById("ft").innerHTML = ft;
			document.getElementById("am").innerHTML = am;
			document.getElementById("pm").innerHTML = pm;
			document.getElementById("dm").innerHTML = dm;
			document.getElementById("sa").innerHTML = sa;
			document.getElementById("sa").innerHTML = cpp;
			document.getElementById("$").innerHTML = money;
		}
        
        
        function saveEverything(){
            setCookie(username + ".sp",sp,730);
            setCookie(username + ".co",co,730);
            setCookie(username + ".hc",hc,730);
            setCookie(username + ".sl",sl,730);
            setCookie(username + ".de",de,730);
            setCookie(username + ".ag",ag,730);
            setCookie(username + ".ft",ft,730);
            setCookie(username + ".am",am,730);
            setCookie(username + ".pm",pm,730);
            setCookie(username + ".dm",dm,730);
            setCookie(username + ".sa",sa,730);
            setCookie(username + ".sa",cpp,730);
            setCookie(username + ".moneys",money,730);
            loadEverything();
        }
        
        function loadEverything(){
            sp = 1 * getCookie(username + ".sp");
            co = 1 * getCookie(username + ".co");
            hc = 1 * getCookie(username + ".hc");
            sl = 1 * getCookie(username + ".sl");
            de = 1 * getCookie(username + ".de");
            ag = 1 * getCookie(username + ".ag");
            ft = 1 * getCookie(username + ".ft");
            am = 1 * getCookie(username + ".am");
            pm = 1 * getCookie(username + ".pm");
            dm = 1 * getCookie(username + ".dm");
            sa = 1 * getCookie(username + ".sa");
            money = 1 * getCookie(username + ".moneys");
            updateall();
        }
<!-- ======================================================================================================== -->
</script>

<h1>Shop<h1>
<h3>Money: <a id="$">0</a><h3>
<h3><h3>
<h2>Normal Items:<h2>
<h2><h2>
<h3><h3>
<button type="button" onClick="as()">Spray Kit $50</button> &nbsp; <a id="sp">0</a> &nbsp; <button type="button" onClick="asu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Half Price For Christmas Sale!<h3><h3>

<button type="button" onClick="bs()">+100000 Cookies $100</button> &nbsp; <a id="co">0</a> &nbsp; <button type="button" onClick="bsu()">Use</button><h3><h3>

<button type="button" onClick="cs()">Hill Climb Racer x5 $50</button> &nbsp; <a id="hc">0</a> &nbsp; <button type="button" onClick="csu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Half Price For Christmas Sale!<h3><h3>

<button type="button" onClick="ds()">Sither.io x5 $100</button> &nbsp; <a id="sl">0</a> &nbsp; <button type="button" onClick="dsu()">Use</button><h3><h3>

<button type="button" onClick="es()">Deip.io x5 $50</button> &nbsp; <a id="de">0</a> &nbsp; <button type="button" onClick="esu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Half Price For Christmas Sale!<h3><h3>
	
<button type="button" onClick="fs()">Agar.io x5 $100</button> &nbsp; <a id="ag">0</a> &nbsp; <button type="button" onClick="fsu()">Use</button><h3><h3>

<button type="button" onClick="gs()">New Game Test x2 $150</button> &nbsp; <a id="ft">0</a> &nbsp; <button type="button" onClick="gsu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Half Price For Christmas Sale!<h3><h3>

<button type="button" onClick="hs()">Add New Song $100</button> &nbsp; <a id="am">0</a> &nbsp; <button type="button" onClick="hsu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; Half Price For Christmas Sale!<h3><h3>

<h3><h3>
<h2>Super Items:<h2>
<h3><h3>

<button type="button" onClick="is()">Private Music Page $20,000</button> &nbsp; <a id="pm">0</a> &nbsp; <button type="button" onClick="isu()">Use</button><h3><h3>

<button type="button" onClick="js()">Download Song x2 $20,000</button> &nbsp; <a id="dm">0</a> &nbsp; <button type="button" onClick="jsu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 10,000 off For Christmas Sale!<h3><h3>

<button type="button" onClick="ks()">Login Account +1 $15,000</button> &nbsp; <a id="sa">0</a> &nbsp; <button type="button" onClick="ksu()">Use</button> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 5,000 off For Christmas Sale!<h3><h3>

<h3><h3>
<h2>Packages:<h2>
<h3><h3>
	
<button type="button" onClick="ls()">Christmas Pack $500</button> &nbsp; <a id="cpp">0</a> &nbsp; <button type="button" onClick="lsu()">Use</button> &nbsp;  &nbsp;  &nbsp;( x10 HillClimb,  &nbsp; x10 Deipio,  &nbsp; x1 SprayKit )  &nbsp;  &nbsp;  &nbsp;  &nbsp; Limited Offer for the Christmas Sale!<h3><h3>
	
	
	
<h3><h3>
<h2>Other:<h2>
<h3><h3>

<button type="button" onClick="reset()">Reset</button><h3><h3>
<button type="button" onClick="saveEverything()">Save</button><h3><h3>

</body>		
</html>
<?php
print($username);
?>
