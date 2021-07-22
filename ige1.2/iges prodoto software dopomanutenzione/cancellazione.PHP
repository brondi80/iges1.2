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


$cn=mysql_connect("localhost") or die("<b>Errore:</b>Connessione non riuscita");

mysql_select_db("progetto") or die("<b>Errore:</b>Connessione al database del Server non riuscita");


$query="DELETE FROM utenti WHERE id='$login' ";


$risultato=mysql_query($query);


echo "<p id='risneg'><br>&nbsp<br> <b>&nbsp &nbsp Eliminazione account effettuata.<br>Per tornare alla Home Page clicca quì:</b><br>&nbsp<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a href='tacrahome.php' class='indietro'>Home Page</a></p>";



mysql_close($cn);

?>

</div>

<?php include 'sidebar.html'; ?>

</body>
</html>