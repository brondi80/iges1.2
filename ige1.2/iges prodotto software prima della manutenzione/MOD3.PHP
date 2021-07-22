<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<script>



</script>
</head>

<body>
<?php include 'header.html'; ?>

<div id="corpo">
<?php

$login = $_POST['login'];
$commento = $_POST['commento'];


$cn=mysql_connect("localhost") or die("<b>Errore:</b>Connessione non riuscita");

mysql_select_db("progetto") or die("<b>Errore:</b>Connessione al database del Server non riuscita");

$query1="SELECT * FROM utenti WHERE id='$login' ";

$risultato1=mysql_query($query1) or die ("Query Fallita");

$riga=mysql_fetch_row($risultato1);

$query="UPDATE  utenti SET commento='$commento' WHERE id='$login' ";

$risultato=mysql_query($query);


echo "<p id='rispos'><br>&nbsp<br> <b>Operazione completata. Il commento è stato inviato correttamente.</b><form> <input type='button' value='Torna Indietro' onclick='javascript:history.back();' id='rispos1'></form></p>";

mysql_close($cn);

?>

</div>

<?php include 'sidebar.html'; ?>
</body>
</html>