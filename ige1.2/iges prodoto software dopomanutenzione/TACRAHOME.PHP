<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<title>TacraHome &reg; -----Home Page</title>
<script type="text/javascript" language="javascript">


var scrtxt="Benvenuto su TacraHome";
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








var img=new Array();
for(i=0;i<4;i++) img[i]=new Image;
img[0].src="immagini/salerno1.jpg";
img[1].src="immagini/salerno.gif";
img[2].src="immagini/veduta.jpg";
img[3].src="immagini/salerno.jpg";
var intID=0;
var variabile=0;

function cambia() { if(!intID) intID=setInterval("cambia2()",2000); }

function cambia2() { 
 variabile=(variabile==3)?0:++variabile;
                        document.salerno1.src=img[variabile].src;
                       }


function controllaModulo(modulo) {

//verifica login inserita
if (modulo.login.value == "") {

	alert("Inserire una login");

	modulo.login.focus();

   return false;  }

//verifica password inserita
if (modulo.password.value == "") {

	alert("Inserire una password");

	modulo.password.focus();

   return false;  }

return true;}

</script>
</head>


<body onload="scorrevole()">
<?php include 'header.html'; ?>

<div id="corpo2" >
<h5 class="commento">Attraverso la form<i> Autenticazione</i> si accede alla sezione protetta del sito; Se non siete registrati occorre farlo, cliccando su<i> Registrazione</i> (Nella barra di menu a sinistra)!</h5>

<h5 id="commento1">Gli utenti registrati che intendono effettuare la cancellazione del proprio account possono farlo accedendo alla sezione protetta del sito tramite la form <i>Autenticazione.</i></h5>

<h4 id="commento2" >Cerchi casa? Questo è il sito giusto...appartamenti a portata di tutte le tasche e per tutte le vostre esigenze..TACRAHOME, Un Nome, Una Garanzia! Rivolgiti ai nostri esperti e avrai tutti i chiarimenti che vuoi; Saranno pronti a consigliare sempre il meglio...cioè quello che tratta la nostra agenzia! </h4>

<p class="indirizzo" align="center"><span>TacraHome S.r.l.</span><br>

Corso Vittorio Emanuele<br>

Salerno - ITALIA

</p>

<img src="immagini/salerno1.jpg" name="salerno1" class="corpo1" onload="cambia()">

<img src="immagini/salerno12.jpg"  class="logosal">



<form class="login" style="width:100;" method="post" action="login.php" name="modulo" onSubmit="return controllaModulo(this)";>



<FIELDSET>

  <LEGEND ALIGN="center">Autenticazione</LEGEND>

<table>

<tr><td>Login: <td><input type="text" name="login" size="10" value="">

<tr><td>Password: <td><input type="password" name="password" size="10" maxlenght="10">

<tr><td><input type="submit" value="Login">

    <td align="right"><input type="reset" value="Resetta">
 

</table>
</fieldset>
</form>
</div>
<?php include 'sidebar.html'; ?>

</body>
</html>
