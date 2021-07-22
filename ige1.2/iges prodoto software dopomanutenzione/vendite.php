<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<title>TacraHome &reg; -----Immobili in Vendita</title>
<script type="text/javascript">

var scrtxt="Immobili in Vendita";
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

table{ position:absolute; left:20%;}
th { background-color:#00f; font-size:larger; color:#fff; }
td { text-align:center;  }
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
<h3 class="title">&nbsp &nbsp Appartamenti - Vendita</h3>
<tr><th>Zona</th><th>&nbsp Vani &nbsp</th><th>&nbsp Prezzo &nbsp</th><th>Dettagli</th></tr>

        <tr><td>Lungoirno</td><td>2 Vani</td><td>€ 140.000</td><td><a class="coll" onclick="window.open('vendite/vendita1.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Centro Storico</td><td>2 Vani</td><td>€ 175.000</td><td><a class="coll" onclick="window.open('vendite/vendita2.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>3 Vani</td><td>€ 180.000</td><td><a class="coll" onclick="window.open('vendite/vendita3.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Centro</td><td>3 Vani</td><td>€ 180.000</td><td><a class="coll" onclick="window.open('vendite/vendita4.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>4 Vani</td><td>€ 320.000</td><td><a class="coll" onclick="window.open('vendite/vendita5.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Torrione Alto</td><td>4 Vani</td><td>€ 380.000</td><td><a class="coll" onclick="window.open('vendite/vendita6.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Lungoirno</td><td>4 Vani</td><td>€ 425.000</td><td><a class="coll" onclick="window.open('vendite/vendita7.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Centro Storico</td><td>5 Vani</td><td>€ 315.000</td><td><a class="coll" onclick="window.open('vendite/vendita8.html','vendite',car)">Vai</a></td></tr>

        <tr><td>Centro</td><td>5 Vani</td><td>€ 330.000</td><td><a class="coll" onclick="window.open('vendite/vendita9.html','vendite',car)">Vai</a></td></tr>

         <tr><td>Lungoirno</td><td>5 Vani</td><td>€ 465.000</td><td><a class="coll" onclick="window.open('vendite/vendita10.html','vendite',car)">Vai</a></td></tr>
   
      
</table>
</div>
<?php include 'menu1.html'; ?>


</body>
</html>