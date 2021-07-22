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

$nome=$_POST['nome'];
$cognome=$_POST['cognome'];
$userid=$_POST['userid'];
$pw=$_POST['password'];
$email=$_POST['email'];


$cn=mysql_connect("localhost") or die("<b>Errore:</b>Connessione non riuscita");

mysql_select_db("progetto") or die("<b>Errore:</b>Connessione al database del Server non riuscita");

$query1="SELECT * FROM utenti WHERE id='$userid' OR email='$email'";

$risultato1=mysql_query($query1) or die ("Query Fallita");

$riga=mysql_fetch_row($risultato1);

if ($userid==$riga[2]) {

echo "<p id='rispos'><br>&nbsp<br> <b>La User id scelta è già stata assegnata ad un altro utente! </b><form> <input type='button' value='Torna Indietro' onclick='javascript:history.back();' id='rispos1'></form></p>";}

else if ($email == $riga[4]){

echo "<p id='rispos'><br>&nbsp<br> <b>L'indirizzo email risulta già assegnato ad un altro utente! </b><form> <input type='button' value='Torna Indietro' onclick='javascript:history.back();' id='rispos1'></form></p>";}

else {

$query="INSERT INTO utenti(nome,cognome,id,password,email) VALUES ('$nome','$cognome','$userid','$pw' , '$email')";


$risultato=mysql_query($query);


echo "<p id='rispos'><br>&nbsp<br> <b>Operazione completata. Registrazione effettuata con successo.</b><br></p>";
echo "<p class='riepilogo'><br>";
echo "<b>I dati inseriti sono:</b><br>&nbsp<br>";
echo "<b>Nome:</b> $nome <br>";
echo "<b>Cognome:</b> $cognome <br>";
echo "<b>User-id:</b> $userid <br>";
echo "<b>E-mail:</b> $email <br>";
echo "<b>Password:</b> $pw <br>&nbsp &nbsp<br>";
echo "</p>";

echo "<br><p id='riepilogo1'><b>Per tornare alla Home Page clicca quì:</b> &nbsp <a href='tacrahome.php' class='indietro'>Home Page</a></p>";
}

mysql_close($cn);

?>

</div>

<?php include 'sidebar.html'; ?>

</body>
</html>