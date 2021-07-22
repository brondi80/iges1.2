<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<title>TacraHome &reg; -----Immobili in Affitto</title>
<script type="text/javascript">

var scrtxt="Immobili in Affitto";
var lentxt=scrtxt.length;
var width=100;
var pos=1-width;

function scorrevole() {
  pos++;
  var scroller="";
  if (pos==lentxt) {
    pos=1-width;
  }
  if (pos<0) {
    for (var i=1; i<=Math.abs(pos); i++) {
      scroller=scroller+" ";}
    scroller=scroller+scrtxt.substring(0,width-i+1);
  }
  else {
    scroller=scroller+scrtxt.substring(pos,width+pos);
  }
  window.status = scroller;
  setTimeout("scorrevole()",80);
  }


car="width=400px height=450px left=80% top=60%";

</script>

<style type="text/css">


th { background-color:#00f; font-size:larger; color:#fff; }
td { text-align:center;}
.coll { cursor:pointer;color:blue;}
.coll:hover { cursor:pointer;}

</style>

</head>

<body onload="scorrevole()">

<?php include 'header.html'; ?>

<div id="corpo">

<img src="/progetto/immagini/colonna.jpg" class="colonna" >

<img src="/progetto/immagini/colonna.jpg" class="colonna1" >

<table border=1 cellspacing=8 cellpadding=3 class="tab">
<h3 class="title">&nbsp &nbsp Appartamenti - Affitto</h3>
<tr><th>Zona</th><th>&nbsp Vani &nbsp</th><th>&nbsp Prezzo &nbsp</th><th>Dettagli</th></tr>
        
        <tr><td>Centro</td><td>3 Vani </td><td>€ 700</td><td><a class="coll" onclick="window.open('affitti/affitto1.html','affitti',car)">Vai</a></td></tr>
        
        <tr><td>Lungoirno</td><td>3 Vani </td><td>€ 700</td><td><a class="coll" onclick="window.open('affitti/affitto2.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>3 Vani</td><td>€ 700</td><td><a class="coll" onclick="window.open('affitti/affitto3.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Centro Storico</td><td>3 Vani</td><td>€ 800</td><td><a class="coll" onclick="window.open('affitti/affitto4.html','affitti',car)" >Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>4 Vani</td><td>€ 1.000</td><td><a class="coll" onclick="window.open('affitti/affitto5.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>4 Vani</td><td>€ 1.000</td><td><a class="coll" onclick="window.open('affitti/affitto6.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>4 Vani</td><td>€ 1.400</td><td><a class="coll" onclick="window.open('affitti/affitto7.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Centro Storico</td><td>5 Vani</td><td>€ 2.400</td><td><a class="coll" onclick="window.open('affitti/affitto8.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Centro Storico</td><td>6 Vani</td><td>€ 2.000</td><td><a class="coll" onclick="window.open('affitti/affitto9.html','affitti',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>8 Vani</td><td>€ 2.000</td><td><a class="coll" onclick="window.open('affitti/affitto10.html','affitti',car)">Vai</a></td></tr>          

</table>
</div>
<?php include 'menu1.html'; ?>
</body>
</html>
