<!DOCTYPE html>
<html lang="jp">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src=<?php echo '"http://'.$_SERVER["SERVER_NAME"].':7777/socket.io/socket.io.js"'; ?> ></script>
	<script>
    var myName = '';
	var roomId = 0;
        var socket = io.connect(<?php echo "'".$_SERVER["SERVER_NAME"].":7777'"; ?>);
		socket.emit('EnterRoom',roomId);
		$(document).ready(function(){
			$("#gameStart").click(function(){
			    myName = $("#nameId").val();
			    myName = $('<span/>').text(myName).html();
				if(myName===""){
					return;
				}
				var data = {
					roomId : roomId,
					name : myName
				}
				document.getElementById("myname").innerHTML = myName;
				$("#nameText").css("display", "none");
				$("#nameId").css("display", "none");
        		socket.emit('GameEntry',data);
      		});
		});
</script>

<title>Gacha Builders</title>
<style type="text/css">
.btnimg{
  position:absolute;
  top:-2px;left:-2px;
}

.humanbtn{
position:absolute;
  top:100px;left:0px;
}
.headbtn{
position:absolute;
  top:100px;left:80px;
}
.accebtn{
position:absolute;
  top:100px;left:160px;
}
.swordbtn{
position:absolute;
  top:180px;left:0px;
}
.bodybtn{
position:absolute;
  top:180px;left:80px;
}
.shieldbtn{
position:absolute;
  top:180px;left:160px;
}
.footbtn{
position:absolute;
  top:260px;left:80px;
}

.enemyhumanbtn{
position:absolute;
  top:100px;left:1360px;
}
.enemyheadbtn{
position:absolute;
  top:100px;left:1440px;
}
.enemyaccebtn{
position:absolute;
  top:100px;left:1520px;
}
.enemyswordbtn{
position:absolute;
  top:180px;left:1360px;
}
.enemybodybtn{
position:absolute;
  top:180px;left:1440px;
}
.enemyshieldbtn{
position:absolute;
  top:180px;left:1520px;
}
.enemyfootbtn{
position:absolute;
  top:260px;left:1440px;
}

#descriptiontable{
position:absolute;
  top:100px;left:250px;
 text-align: center;
 table-layout: fixed;
background-color: #3A4750;
}
#enemydescriptiontable{
  position:absolute;
    top:100px;left:880px;
   text-align: center;
   table-layout: fixed;
background-color: #3A4750;
}
#descriptiontable th{
background-color: #EA9215;
}
#descriptiontable td.textarea{
width : 40px;
	color:#EEEEEE;
}
#descriptiontable td.effectarea{
width : 90px;
	color:#EEEEEE;
}
#descriptiontable td.namearea{
width : 90px;
}
#enemydescriptiontable th{
background-color: #EA9215;
}
#enemydescriptiontable td.textarea{
width : 40px;
	color:#EEEEEE;
}
#enemydescriptiontable td.namearea{
width : 90px;
}
#enemydescriptiontable td.effectarea{
width : 90px;
	color:#EEEEEE;
}
.imgarea{
  width:30px;
  height:30px;
	background-color:#3A4750;
}
div.timer {
width: 300px;
height: 60px;
position: absolute;
top: 200px;
left: 730px;
}
div.timerEq {
width: 300px;
height: 60px;
position: absolute;
top: 190px;
left: 742px;
}
#timerNumber{
	color:#EA9215;

}
div.enemyname{
  position:absolute;
  top:60px;left:880px;
  text-align: center;
}
div.myname{
  position:absolute;
  top:60px;left:0px;
  text-align: center;
}

#humanline{
}
#headline{
}
#acceline{
}
#bodyline{
}
#swordline{
}
#shieldline{
}
#footline{
}
#enemyhumanline{
}
#enemyheadline{
}
#enemyacceline{
}
#enemybodyline{
}
#enemyswordline{
}
#enemyshieldline{
}
#enemyfootline{
}

div.battlelog{
width: 1200px;
height: 400px;
position: absolute;
top: 550px;
left: 0px;
margin:5px; padding:10px; border:1px solid black;
background-color:#3A4750;
overflow: scroll;
}

</style>
</head>
<body bgcolor="#303841" text="#EEEEEE">

        <label id="nameText">名前を入力してください</label>
        <br>
        <input type="text" name="name" value="" id="nameId">
        <input type="button" name="mode" id="gameStart" value="ゲームスタート！">

<div class="myname" id="myname" style="font-size:20pt;">名無し</div>
<table id="descriptiontable" border=1>
<tr>
<th class="imgarea"></th>
<th class="namearea">Name</th>
<th class="textarea">HP</th>
<th class="textarea">ATK</th>
<th class="textarea">DEF</th>
<th class="textarea">SPD</th>
<th class="textarea">LUK</th>
<th class="effectarea">EFFECT</th>
</tr>
<tr id="humanline">
<td class="imgarea"><img id="humanresult" class="imgarea" src="res/human/onnnasouryo.png"></td>
<td class="namearea"><span id="humanname">無職</span></td>
<td class="textarea"><span id="humanhp">1</span></td>
<td class="textarea"><span id="humanatk">1</span></td>
<td class="textarea"><span id="humandef">1</span></td>
<td class="textarea"><span id="humanspd">1</span></td>
<td class="textarea"><span id="humanluk">1</span></td>
<td class="effectarea"><span id="humaneffect">無し</span></td>
</tr>
<tr id="headline">
<td class="imgarea"><img id="headresult" class="imgarea" src="res/head/helm_001.png"></td>
<td class="namearea"><span id="headname">ただの帽子</span></td>
<td class="textarea"><span id="headhp">1</span></td>
<td class="textarea"><span id="headatk">1</span></td>
<td class="textarea"><span id="headdef">1</span></td>
<td class="textarea"><span id="headspd">1</span></td>
<td class="textarea"><span id="headluk">1</span></td>
<td class="effectarea"><span id="headeffect">無し</span></td>
</tr>
<tr id="acceline">
<td class="imgarea"><img id="acceresult" class="imgarea" src="res/acce/acce_002.png"></td>
<td class="namearea"><span id="accename">ただの腕輪</span></td>
<td class="textarea"><span id="accehp">1</span></td>
<td class="textarea"><span id="acceatk">1</span></td>
<td class="textarea"><span id="accedef">1</span></td>
<td class="textarea"><span id="accespd">1</span></td>
<td class="textarea"><span id="acceluk">1</span></td>
<td class="effectarea"><span id="acceeffect">無し</span></td>
</tr>
<tr id="bodyline">
<td class="imgarea"><img id="bodyresult" class="imgarea" src="res/body/armor_001.png"></td>
<td class="namearea"><span id="bodyname">ただの洋服</span></td>
<td class="textarea"><span id="bodyhp">1</span></td>
<td class="textarea"><span id="bodyatk">1</span></td>
<td class="textarea"><span id="bodydef">1</span></td>
<td class="textarea"><span id="bodyspd">1</span></td>
<td class="textarea"><span id="bodyluk">1</span></td>
<td class="effectarea"><span id="bodyeffect">無し</span></td>
</tr>
<tr id ="swordline">
<td class="imgarea"><img id="swordresult" class="imgarea" src="res/sword/we_sword001.png"></td>
<td class="namearea"><span id="swordname">ただの剣</span></td>
<td class="textarea"><span id="swordhp">1</span></td>
<td class="textarea"><span id="swordatk">1</span></td>
<td class="textarea"><span id="sworddef">1</span></td>
<td class="textarea"><span id="swordspd">1</span></td>
<td class="textarea"><span id="swordluk">1</span></td>
<td class="effectarea"><span id="swordeffect">無し</span></td>
</tr>
<tr id = "shieldline">
<td class="imgarea"><img id="shieldresult" class="imgarea" src="res/shield/shield_001b.png"></td>
<td class="namearea"><span id="shieldname">ただの盾</span></td>
<td class="textarea"><span id="shieldhp">1</span></td>
<td class="textarea"><span id="shieldatk">1</span></td>
<td class="textarea"><span id="shielddef">1</span></td>
<td class="textarea"><span id="shieldspd">1</span></td>
<td class="textarea"><span id="shieldluk">1</span></td>
<td class="effectarea"><span id="shieldeffect">無し</span></td>
</tr>
<tr id = "footline">
<td class="imgarea"><img id="footresult" class="imgarea" src="res/foot/boots_001.png"></td>
<td class="namearea"><span id="footname">ただの靴</span></td>
<td class="textarea"><span id="foothp">1</span></td>
<td class="textarea"><span id="footatk">1</span></td>
<td class="textarea"><span id="footdef">1</span></td>
<td class="textarea"><span id="footspd">1</span></td>
<td class="textarea"><span id="footluk">1</span></td>
<td class="effectarea"><span id="footeffect">無し</span></td>
</tr>
<tr>
<td class="imgarea"></td>
<td class="namearea"><span id="totalname">合計</span></td>
<td class="textarea"><span id="totalhp">7</span></td>
<td class="textarea"><span id="totalatk">7</span></td>
<td class="textarea"><span id="totaldef">7</span></td>
<td class="textarea"><span id="totalspd">7</span></td>
<td class="textarea"><span id="totalluk">7</span></td>
<td class="effectarea"><span id="totaleffect"></span></td>
</tr>
</table>

<div class="enemyname" id="enemyname" style="font-size:20pt;">名無し</div>
<table id="enemydescriptiontable" border=1>
<tr>
<th class="imgarea"></th>
<th class="namearea">Name</th>
<th class="textarea">HP</th>
<th class="textarea">ATK</th>
<th class="textarea">DEF</th>
<th class="textarea">SPD</th>
<th class="textarea">LUK</th>
<th class="effectarea">EFFECT</th>
</tr>
<tr id = "enemyhumanline">
<td class="imgarea"><img id="enemyhumanresult" class="imgarea" src="res/human/onnnasouryo.png"></td>
<td class="namearea"><span id="enemyhumanname">無職</span></td>
<td class="textarea"><span id="enemyhumanhp">1</span></td>
<td class="textarea"><span id="enemyhumanatk">1</span></td>
<td class="textarea"><span id="enemyhumandef">1</span></td>
<td class="textarea"><span id="enemyhumanspd">1</span></td>
<td class="textarea"><span id="enemyhumanluk">1</span></td>
<td class="effectarea"><span id="enemyhumaneffect">無し</span></td>
</tr>
<tr id = "enemyheadline">
<td class="imgarea"><img id="enemyheadresult" class="imgarea" src="res/head/helm_001.png"></td>
<td class="namearea"><span id="enemyheadname">ただの帽子</span></td>
<td class="textarea"><span id="enemyheadhp">1</span></td>
<td class="textarea"><span id="enemyheadatk">1</span></td>
<td class="textarea"><span id="enemyheaddef">1</span></td>
<td class="textarea"><span id="enemyheadspd">1</span></td>
<td class="textarea"><span id="enemyheadluk">1</span></td>
<td class="effectarea"><span id="enemyheadeffect">無し</span></td>
</tr>
<tr id = "enemyacceline">
<td class="imgarea"><img id="enemyacceresult" class="imgarea" src="res/acce/acce_002.png"></td>
<td class="namearea"><span id="enemyaccename">ただの腕輪</span></td>
<td class="textarea"><span id="enemyaccehp">1</span></td>
<td class="textarea"><span id="enemyacceatk">1</span></td>
<td class="textarea"><span id="enemyaccedef">1</span></td>
<td class="textarea"><span id="enemyaccespd">1</span></td>
<td class="textarea"><span id="enemyacceluk">1</span></td>
<td class="effectarea"><span id="enemyacceeffect">無し</span></td>
</tr>
<tr id = "enemybodyline">
<td class="imgarea"><img id="enemybodyresult" class="imgarea" src="res/body/armor_001.png"></td>
<td class="namearea"><span id="enemybodyname">ただの洋服</span></td>
<td class="textarea"><span id="enemybodyhp">1</span></td>
<td class="textarea"><span id="enemybodyatk">1</span></td>
<td class="textarea"><span id="enemybodydef">1</span></td>
<td class="textarea"><span id="enemybodyspd">1</span></td>
<td class="textarea"><span id="enemybodyluk">1</span></td>
<td class="effectarea"><span id="enemybodyeffect">無し</span></td>
</tr>
<tr id = "enemyswordline">
<td class="imgarea"><img id="enemyswordresult" class="imgarea" src="res/sword/we_sword001.png"></td>
<td class="namearea"><span id="enemyswordname">ただの剣</span></td>
<td class="textarea"><span id="enemyswordhp">1</span></td>
<td class="textarea"><span id="enemyswordatk">1</span></td>
<td class="textarea"><span id="enemysworddef">1</span></td>
<td class="textarea"><span id="enemyswordspd">1</span></td>
<td class="textarea"><span id="enemyswordluk">1</span></td>
<td class="effectarea"><span id="enemyswordeffect">無し</span></td>
</tr>
<tr id = "enemyshieldline">
<td class="imgarea"><img id="enemyshieldresult" class="imgarea" src="res/shield/shield_001b.png"></td>
<td class="namearea"><span id="enemyshieldname">ただの盾</span></td>
<td class="textarea"><span id="enemyshieldhp">1</span></td>
<td class="textarea"><span id="enemyshieldatk">1</span></td>
<td class="textarea"><span id="enemyshielddef">1</span></td>
<td class="textarea"><span id="enemyshieldspd">1</span></td>
<td class="textarea"><span id="enemyshieldluk">1</span></td>
<td class="effectarea"><span id="enemyshieldeffect">無し</span></td>
</tr>
<tr id = "enemyfootline">
<td class="imgarea"><img id="enemyfootresult" class="imgarea" src="res/foot/boots_001.png"></td>
<td class="namearea"><span id="enemyfootname">ただの靴</span></td>
<td class="textarea"><span id="enemyfoothp">1</span></td>
<td class="textarea"><span id="enemyfootatk">1</span></td>
<td class="textarea"><span id="enemyfootdef">1</span></td>
<td class="textarea"><span id="enemyfootspd">1</span></td>
<td class="textarea"><span id="enemyfootluk">1</span></td>
<td class="effectarea"><span id="enemyfooteffect">無し</span></td>
</tr>
<tr>
<td class="imgarea"></td>
<td class="namearea"><span id="enemytotalname">合計</span></td>
<td class="textarea"><span id="enemytotalhp">7</span></td>
<td class="textarea"><span id="enemytotalatk">7</span></td>
<td class="textarea"><span id="enemytotaldef">7</span></td>
<td class="textarea"><span id="enemytotalspd">7</span></td>
<td class="textarea"><span id="enemytotalluk">7</span></td>
<td class="effectarea"><span id="enemytotaleffect"></span></td>
</tr>
</table>

<div class="timerEq" style="font-size:20pt;">残り時間</div>
<div class="timer" id="timer" style="font-size:100pt;"><span id="timerNumber" color="#EA9215">0</span></div>

<form>
<button id="humanbtn" class="humanbtn" type="button" style="width:80px;height:80px">
<img id ="humanimg" class="btnimg" src="res/human/onnnasouryo.png" width="80" height="80"></button>

<button id="headbtn" class="headbtn" type="button"style="width:80px;height:80px">
<img id="headimg" class="btnimg" src="res/head/helm_001.png" width="80" height="80"></button>

<button id="accebtn" class="accebtn" type="button"style="width:80px;height:80px">
<img id ="acceimg" class="btnimg" src="res/acce/acce_002.png "width="80" height="80"></button>

<button id="bodybtn" class="bodybtn" type="button"style="width:80px;height:80px">
<img id="bodyimg" class="btnimg" src="res/body/armor_001.png" width="80" height="80"></button>

<button id="swordbtn" class="swordbtn" type="button"style="width:80px;height:80px">
<img id="swordimg" class="btnimg" src="res/sword/we_sword001.png" width="80" height="80"></button>

<button id="shieldbtn" class="shieldbtn" type="button"style="width:80px;height:80px">
<img id ="shieldimg" class="btnimg" src="res/shield/shield_001b.png "width="80" height="80"></button>

<button id="footbtn" class="footbtn" type="button"style="width:80px;height:80px">
<img id ="footimg" class="btnimg" src="res/foot/boots_001.png "width="80" height="80"></button>
</form>

<form>
<button id="enemyhumanbtn" class="enemyhumanbtn" type="button" style="width:80px;height:80px">
<img id ="enemyhumanimg" class="btnimg" src="res/human/onnnasouryo.png" width="80" height="80"></button>

<button id="enemyheadbtn" class="enemyheadbtn" type="button"style="width:80px;height:80px">
<img id="enemyheadimg" class="btnimg" src="res/head/helm_001.png" width="80" height="80"></button>

<button id="enemyaccebtn" class="enemyaccebtn" type="button"style="width:80px;height:80px">
<img id ="enemyacceimg" class="btnimg" src="res/acce/acce_002.png "width="80" height="80"></button>

<button id="enemybodybtn" class="enemybodybtn" type="button"style="width:80px;height:80px">
<img id="enemybodyimg" class="btnimg" src="res/body/armor_001.png" width="80" height="80"></button>

<button id="enemyswordbtn" class="enemyswordbtn" type="button"style="width:80px;height:80px">
<img id="enemyswordimg" class="btnimg" src="res/sword/we_sword001.png" width="80" height="80"></button>

<button id="enemyshieldbtn" class="enemyshieldbtn" type="button"style="width:80px;height:80px">
<img id ="enemyshieldimg" class="btnimg" src="res/shield/shield_001b.png "width="80" height="80"></button>

<button id="enemyfootbtn" class="enemyfootbtn" type="button"style="width:80px;height:80px">
<img id ="enemyfootimg" class="btnimg" src="res/foot/boots_001.png "width="80" height="80"></button>
</form>

<div style="font-size:20pt;" class ="battlelog" id = "battlelog">BattleLog<br></div>

<script src="js/jquery-3.1.1.min.js"></script>
<script>
var viewMode=false;
var hideEq = false;
var gameStart = false;
function GetCookie( name )
{
  var result = null;
  var cookieName = name + '=';
  var allcookies = document.cookie;

  var position = allcookies.indexOf( cookieName );
  if( position != -1 )
  {
      var startIndex = position + cookieName.length;

      var endIndex = allcookies.indexOf( ';', startIndex );
      if( endIndex == -1 )
      {
          endIndex = allcookies.length;
      }

      result = decodeURIComponent(
          allcookies.substring( startIndex, endIndex ) );
  }

  return result;
}
var timerId;
var time = document.getElementById("timerNumber").innerHTML;
function CountDown(){
if(gameStart){
  time -= 1;
  document.getElementById("timerNumber").innerHTML = time;
}
if(time == 0){
  clearInterval(timerId);
}
}

socket.on('GameStart',function(ret){
    gameStart = true;
    time = ret.gameTime;
    hideEq = false;
	document.getElementById("timerNumber").innerHTML = time;
    $('#timerNumber').css({ color: '' });
    document.getElementById("battlelog").innerHTML = 'ゲームスタート<br>';
timerId = setInterval(CountDown, 1000);


    var playerColor = ['#cd5c5c','#6495ed'];
if(myName == ret.players[0]){
document.getElementById("enemyname").innerHTML = ret.players[1];
document.getElementById("enemyname").style.color = playerColor[1];
document.getElementById("myname").innerHTML = ret.players[0];
document.getElementById("myname").style.color = playerColor[0];
}
else if(myName == ret.players[1]){
document.getElementById("enemyname").innerHTML = ret.players[0];
document.getElementById("enemyname").style.color = playerColor[0];
document.getElementById("myname").innerHTML = ret.players[1];
document.getElementById("myname").style.color = playerColor[1];
}else{
viewMode=true;
myName = ret.players[0];
document.getElementById("enemyname").innerHTML = ret.players[1];
document.getElementById("enemyname").style.color = playerColor[1];
document.getElementById("myname").innerHTML = ret.players[0];
document.getElementById("myname").style.color = playerColor[0];

				document.getElementById("nameText").innerHTML = "観戦モード";
				$("#nameId").css("display", "none");
				$("#gameStart").css("display", "none");
}
});
socket.on('HideEquip',function(){
    $('#timerNumber').css({ color: '#D72323' });
	if(viewMode)return;
	hideEq = true;
});
socket.on('OnBattle',function(str){
alert(str);
});
socket.on('Leave', function () {
gameStart=false;
	if(viewMode){
	myName = "";
	}else{
    socket.emit('Leave');
	}
});

var PartEnemySet = function(partName,enemy,ep){
document.getElementById(enemy + "totalhp").innerHTML = document.getElementById(enemy + "totalhp").innerHTML - document.getElementById(enemy + partName + "hp").innerHTML + ep.val['HP'];
document.getElementById(enemy + "totalatk").innerHTML = document.getElementById(enemy + "totalatk").innerHTML - document.getElementById(enemy + partName + "atk").innerHTML + ep.val['ATK'];
document.getElementById(enemy + "totaldef").innerHTML = document.getElementById(enemy + "totaldef").innerHTML - document.getElementById(enemy + partName + "def").innerHTML + ep.val['DEF'];
document.getElementById(enemy + "totalspd").innerHTML = document.getElementById(enemy + "totalspd").innerHTML - document.getElementById(enemy + partName + "spd").innerHTML + ep.val['SPD'];
document.getElementById(enemy + "totalluk").innerHTML = document.getElementById(enemy + "totalluk").innerHTML - document.getElementById(enemy + partName + "luk").innerHTML + ep.val['LUK'];

document.getElementById(enemy + partName + "hp").style.color = "";
document.getElementById(enemy + partName + "atk").style.color = "";
document.getElementById(enemy + partName + "def").style.color = "";
document.getElementById(enemy + partName + "spd").style.color = "";
document.getElementById(enemy + partName + "luk").style.color = "";
document.getElementById(enemy + partName + "effect").style.color = "";
var red = "#D72323";
var non = "#303841";
if(0>ep.val['HP']){
document.getElementById(enemy + partName + "hp").style.color = red;
}
if(0>ep.val['ATK']){
document.getElementById(enemy + partName + "atk").style.color = red;
}
if(0>ep.val['DEF']){
document.getElementById(enemy + partName + "def").style.color = red;
}
if(0>ep.val['SPD']){
document.getElementById(enemy + partName + "spd").style.color = red;
}
if(0>ep.val['LUK']){
document.getElementById(enemy + partName + "luk").style.color = red;
}
if(0==ep.val['HP']){
document.getElementById(enemy + partName + "hp").style.color = non;
}
if(0==ep.val['ATK']){
document.getElementById(enemy + partName + "atk").style.color = non;
}
if(0==ep.val['DEF']){
document.getElementById(enemy + partName + "def").style.color = non;
}
if(0==ep.val['SPD']){
document.getElementById(enemy + partName + "spd").style.color = non;
}
if(0==ep.val['LUK']){
document.getElementById(enemy + partName + "luk").style.color = non;
}
if("無し"==ep.val['EFFECT_TEXT']){
document.getElementById(enemy + partName + "effect").style.color = non;
}

document.getElementById(enemy + partName + "img").src = "../"+ep.val['img'];
document.getElementById(enemy + partName + "result").src = "../"+ep.val['img'];
document.getElementById(enemy + partName + "name").innerHTML = ep.val['name'];
document.getElementById(enemy + partName + "hp").innerHTML = ep.val['HP'];
document.getElementById(enemy + partName + "atk").innerHTML = ep.val['ATK'];
document.getElementById(enemy + partName + "def").innerHTML = ep.val['DEF'];
document.getElementById(enemy + partName + "spd").innerHTML = ep.val['SPD'];
document.getElementById(enemy + partName + "luk").innerHTML = ep.val['LUK'];
document.getElementById(enemy + partName + "effect").innerHTML = ep.val.EFFECT_TEXT;

var box = document.getElementById(enemy + partName + "line");
var color = "";
if(ep.val['RARE'] == 0)color = "#FCFF82";
else if(ep.val['RARE'] == 1)color = "#8EA5EB";
box.style.color = color;
if(color!=""){
	color += " 1px solid";
}
box.style.border = color;
}

socket.on('ChangeMonster',function(ep){
    if (myName == ep.name) {
        PartEnemySet("human", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("human", "enemy", ep);
    }
});

socket.on('ChangeHelm', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("head", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("head", "enemy", ep);
    }
});

socket.on('ChangeAcce', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("acce", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("acce", "enemy", ep);
    }
});

socket.on('ChangeArmor', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("body", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("body", "enemy", ep);
    }
});

socket.on('ChangeWeapon', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("sword", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("sword", "enemy", ep);
    }
});

socket.on('ChangeShield', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("shield", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("shield", "enemy", ep);
    }
});

socket.on('ChangeBoots', function (ep) {
    if (myName == ep.name) {
        PartEnemySet("foot", "", ep);
    }
    else if (!hideEq || ep.force) {
        PartEnemySet("foot", "enemy", ep);
    }
});

$(document).ready(function(){
$("#humanbtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaMonster');
});

$("#headbtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaHelm');
});

$("#accebtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaAcce');
  });

  $("#bodybtn").click(function(){
	if(viewMode)return;
      socket.emit('GachaArmor');
});

$("#swordbtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaWeapon');
});

$("#shieldbtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaShield');
});

$("#footbtn").click(function(){
	if(viewMode)return;
  socket.emit('GachaBoots');
});
});

socket.on('BattleLog', function (text) {
    var log = document.getElementById("battlelog");
    log.innerHTML = document.getElementById("battlelog").innerHTML + text + "<br>";

    if (!log) return;
    log.scrollTop = log.scrollHeight;
});
</script>

</body>
</html>
