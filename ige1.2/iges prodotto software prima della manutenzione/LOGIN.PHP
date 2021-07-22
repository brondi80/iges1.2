<html>
<head>
<title>Tacrahome-------Sezione Protetta</title>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<script type="text/javascript">


function cancella() {
               testo=document.getElementById('testo');
               testo.firstChild.nodeValue="";}



defaultStatus="Sezione Protetta ";






</script>

</head>

<?php include 'header.html'; ?>


<?php

echo "<div id='corpo'>";

$login = $_POST['login'];

$password = $_POST['password'];


$connessione = mysql_connect("localhost") or 

		die("Connessione non riuscita"); 


/* Selezione del database */

mysql_select_db("progetto") or 

               die("Selezione del database non riuscita"); 


/* Esecuzione di una query SQL */ 

$query = "SELECT * FROM utenti WHERE id='$login' AND password='$password'"; 

$risultato = mysql_query($query) or 

		die("Query fallita");

$riga=mysql_fetch_row($risultato);

if(mysql_num_rows($risultato)){ 

echo "<img src='/progetto/immagini/casa1.jpg' class='casa'>";

echo "<p id='cancellazione'><b>Effettuare l'eliminazione del proprio account?</b> &nbsp <form style='display:inline' ACTION='cancellazione.php' METHOD='POST'><input type='hidden' name='login'  value='$login'> <input type='submit' value='Cancellazione'></form></p>";

echo "<b> Ciao $riga[0],<br> per una proposta di Vendita-Fitto di un immobile è possibile compilare il modulo sottostante.<br>Se sono stati inseriti altri commenti in precedenza, è anche possibile modificarli."; 
        
       echo " <form ACTION ='mod3.php' METHOD='POST' name='modulo' >
              <fieldset style='width:10cm;'>      

<legend align='left' ><b>MODULO TRATTATIVA</b></legend>
&nbsp &nbsp &nbsp &nbsp &nbsp
<table border=0>
<tr><td>Commento: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </td><td><textarea id='testo' name='commento' rows='11'>$riga[5]</textarea></td></tr>

<tr><td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type='submit' value='Invia'></td>
<td align='center'><br>&nbsp &nbsp<input type='button' onClick='cancella()' value='cancella'></td></tr>

<tr><td><input type='hidden' name='login'  value='$login'></td><td>
</table> 
</form> "; }


else {

	echo "<p id='risneg'><br>&nbsp<br> <b>&nbsp &nbsp Siamo spiacenti ma l'autenticazione è fallita;<br>Controllare che Login e Password siano corrette.</b><form>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type='button' value='Torna Indietro' onclick='javascript:history.back();' ></form></p>";}


mysql_free_result($risultato);

mysql_close($connessione);

?>

</div>

<?php include 'sidebar.html'; ?>




</body>
</html>
