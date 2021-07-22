<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<style type="text/css">

table{ position:absolute; left:20%;}
th { background-color:#00f; font-size:larger; color:#fff; }
td { text-align:center;  }
.coll { cursor:pointer;color:blue;}
.coll:hover { cursor:pointer;}
</style>
</head>

<script type="text/javascript">

car="width=400px height=450px left=80% top=60%";


</script>

<body>
<?php include 'header.html'; ?>

<div id="corpo">


<?php
$contratto=$_POST['contratto'];
$zona=$_POST['zona'];
$vani=$_POST['vani'];
$pmin=$_POST['pmin'];
$pmax=$_POST['pmax'];

$pmin=str_replace(".", "", $pmin);

$pmax=str_replace(".", "", $pmax);

$cn=mysql_connect("localhost") or die("<b>Errore:</b>Connessione non riuscita");

mysql_select_db("progetto") or die("<b>Errore:</b>Connessione al database del Server non riuscita");



 if ($zona=="" && $vani==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto'  AND prezzo >= '$pmin'  AND prezzo <= '$pmax' ";}



else if ($pmin=="" && $pmax=="" && $zona==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND vani='$vani' "; }



else if ($pmin=="" && $pmax=="" && $vani==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND zona='$zona' "; }





else if ($zona==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND vani='$vani' AND prezzo >= '$pmin'  AND prezzo <= '$pmax'"; }





else if ($vani==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND zona='$zona' AND prezzo >= '$pmin'  AND prezzo <= '$pmax'"; }





else if ($pmin=="" && $pmax==""){
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND zona='$zona' AND vani='$vani' "; }





else{
$query = "SELECT * FROM appartamenti WHERE contratto='$contratto' AND zona='$zona' AND vani='$vani' AND prezzo >= '$pmin'  AND prezzo <= '$pmax'";} 





$risultato = mysql_query($query) or 
		die("Query fallita");



if (mysql_num_rows($risultato) > 0) { 

if ($contratto=="Affitto"){

echo "<img src='/progetto/immagini/colonna.jpg' class='colonna' >
 
      <img src='/progetto/immagini/colonna.jpg' class='colonna1'>";


echo"<table border=1 cellspacing=8 cellpadding=3 class='tab'>";
echo"<h3 class='title'>&nbsp &nbsp Appartamenti - Affitto</h3>";
echo"<tr><th>Zona</th><th>&nbsp Vani &nbsp</th><th>&nbsp Prezzo &nbsp</th><th>Dettagli</th></tr>";

while ($riga = mysql_fetch_row($risultato)){


$punto=number_format($riga[3],0,",",".");

        echo"<tr><td>".$riga[1]."</td><td >".$riga[2]."</td><td>"."€ $punto"."</td><td>".$riga[4]."</td></tr>";
}

echo "<caption align='bottom'><b>&nbsp<br>Per effettuare un'altra ricerca clicca qui. </b><form><button onclick=location.href='/progetto/ricerca.php'>Torna Indietro</button></form></caption>";

echo"</table>";}

 if ($contratto=="Vendita"){

echo "<img src='/progetto/immagini/colonna.jpg' class='colonna' >
 
      <img src='/progetto/immagini/colonna.jpg' class='colonna1'>";


echo"<table border=1 cellspacing=8 cellpadding=3 class='tab'>";
echo"<h3 class='title'>&nbsp Appartamenti - Vendita</h3>";
echo"<tr><th>Zona</th><th>&nbsp Vani &nbsp</th><th>&nbsp Prezzo &nbsp</th><th>Dettagli</th></tr>";

while ($riga = mysql_fetch_row($risultato)){

$punto=number_format($riga[3],0,",",".");         

        echo"<tr><td>".$riga[1]."</td><td >".$riga[2]."</td><td>"."€ $punto"."</td><td>".$riga[4]."</td></tr>";

}

echo "<caption align='bottom'><b>&nbsp<br>Per effettuare un'altra ricerca clicca qui. </b><form><button onclick=location.href='/progetto/ricerca.php'>Torna Indietro</button></form></caption>";

echo"</table>";
 } }

else { 
     
 echo "<p id='risneg1'><br>&nbsp<br> <b>Siamo spiacenti ma non è stato trovato nessun immobile con le caratteristiche richieste.</b><form><button onclick=location.href='/progetto/ricerca.php' id='indietro'>Torna Indietro</button></form></p>";} 




mysql_free_result($risultato);
mysql_close($cn); 

?>

</div>

<?php include 'sidebar.html'; ?>

</body>
</html>


