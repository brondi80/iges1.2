<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<title>TacraHome &reg; -----Registrazione</title>


<script type="text/javascript" language="javascript">

var scrtxt="Registrazione";
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






function controllaModulo(modulo) {



//verifica nome inserito
if (modulo.nome.value == "") {

	alert("Inserire il nome");

	modulo.nome.focus();

   return false;  }

//verifica cognome inserito
if (modulo.cognome.value == "") {

	alert("Inserire il cognome");

	modulo.cognome.focus();

   return false;  }

//verifica userid inserita
if (modulo.userid.value == "") {

	alert("Inserire una userid");

	modulo.userid.focus();

   return false;  }


var caratteriNonValidi = " /:,;"

//Controllo e-mail inserita
if (modulo.email.value == ""){
   alert ("Inserire un'indirizzo e-mail!");
	modulo.email.focus();
        return false;}

//Controllo caratteri non validi
for (var i=0; i<caratteriNonValidi.length; i++) {
	var noCar = caratteriNonValidi.charAt(i)
     if (modulo.email.value.indexOf(noCar,0) > -1){ 
	alert ("Attenzione: Nel campo e-mail sono stati inseriti\n uno o più carattere non validi");	
         return false;}}


//controllo @
atPos = modulo.email.value.indexOf("@",1)			
if (atPos == -1){
       alert ("Attenzione: Inserire un indirizzo e-mail valido!");
       return false;}	

//controllo singola @
atPos1 = modulo.email.value.indexOf("@",atPos+1)
if (atPos1 != -1){  
       alert ("Attenzione: Inserire un indirizzo e-mail valido!");	
       return false;}

//controllo .
dotPos = modulo.email.value.indexOf(".",atPos) 
if (dotPos == -1){ 
       alert ("Attenzione: Inserire un indirizzo e-mail valido!");	
       return false;}

//controllo singolo .
dotPos1 = modulo.email.value.indexOf(".",dotPos+1) 
if (dotPos1 != -1){ 
       alert ("Attenzione: Inserire un indirizzo e-mail valido!");	
       return false;}

//controllo 2/3 caratteri dopo il punto
if (modulo.email.value.length - dotPos>4 || modulo.email.value.length - dotPos<3){ 
       alert ("Attenzione: Inserire un indirizzo e-mail valido!");	 
       return false;}

//verifica password inserita
if (modulo.password.value == "") {

	alert("Inserire una password");

	modulo.password.focus();

   return false;  }

//verifica reinserimento password
if (modulo.password.value != modulo.password2.value) {

	alert("Attenzione: Le due password non corrispondono!");

	modulo.password.focus();

	modulo.password.select();

    return false;  }
	

			
return true;}





</script>
<style type="text/css">

</style>
</head>

<body onload="scorrevole()">

<?php include 'header.html'; ?>

<div id="corpo">
<b><br>&nbsp<br>Se sei un nuovo utente ed intendi registrarti, compila tutti i campi del modulo sottostante: <br>&nbsp<br>
<form ACTION ="mod1.php" METHOD="POST" name="modulo" onSubmit="return controllaModulo(this) ;">
<fieldset style="width:10cm;" >

     <legend align="left" ><b>DATI PERSONALI</b></legend>
&nbsp 
<table border=0>
<tr><td>Nome:  </td><td><input type="text" name="nome" size="10" ></td></tr>

<tr><td>Cognome: </td><td><input type="text" name="cognome" size="10" ></td></tr>

<tr><td>User ID:  </td><td><input type="text" name="userid" size="10" maxlenght="10" ></td></tr>

<tr><td>Inserire e-mail:  </td><td><input type="text" name="email" size="10"></td></tr>

<tr><td>Password: </td><td><input type="password" name="password" size="10" maxlenght="10"></td></tr>

<tr><td>Reinserisci la password: </td><td><input type="password" name="password2" size="10" maxlenght="10"></td></tr>


<tr><td><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type="submit" value="Invia" "></td>
<td align="center">&nbsp &nbsp<input type="reset" value="Cancella"></td></tr>
</table>
</form>
</fieldset>

<img src="immagini/Salerno-Notte.jpg" class="snotte">
</div>


<?php include 'MENU1.html'; ?>


</body>
</html>