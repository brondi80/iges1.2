<html>
<head>
<link rel="stylesheet" href="stileprogetto.css" type="text/css">
<title>TacraHome &reg; -----Chi Siamo?</title>
<script type="text/javascript">





var scrtxt="Chi Siamo?";
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



</script>
<style type="text/css">
p {text-align:justify;padding-right:25px;}
</style>

</head>

<body onload="scorrevole()">

<?php include 'header.html'; ?>

<div id="corpo">

<b>La Storia</b><br> 

<p>Il primo gruppo d’intermediazione immobiliare in franchising d’Europa, nasce in Italia nel 1986. La strategia societaria ha puntato, sin dall’inizio, all’erogazione di servizi esclusivi e moderni. 
</p>
<p>
Il negozio viene portato su strada, aperto al pubblico, i collegamenti informatici strutturati in rete, alla scuola di formazione permanente si erogano corsi gratuiti per affiliati e collaboratori, si affianca al servizio immobiliare un servizio finanziario.
L’obiettivo di queste azioni è quello di offrire una maggior efficienza e professionalità ai clienti.</p> 

<b>Il Gruppo TacraHome</b><br><p>
Nel gruppo i giovani, tradizionalmente vicini a concetti di modernità e flessibilità, trovano molto spazio. Lo sviluppo è essenzialmente “interno”. Si concede la possibilità di aprire nuove agenzie solo a professionisti formati e cresciuti nel gruppo. La conoscenza maturata negli anni è considerata una buona garanzia di qualità.</p> 

<b>Franchising</b> 
<p>
TacraHome è un Marchio che contraddistingue una catena di agenzie immobiliari in franchising.
Ciò vuol dire che ogni agenzia che espone il Marchio è in realtà un' impresa autonoma, con un suo titolare e un regime giuridico e patrimoniale indipendente.
TacraHome è dunque un insieme di imprese che hanno scelto di collaborare a uno stesso progetto imprenditoriale, perseguendo obiettivi e strategie comuni. 
</p><p>
Tramite il contratto di franchising il franchisor concede ai franchisees l'utilizzo del Marchio e dei segni distintivi ad esso collegati in una zona di competenza esclusiva.
Insieme al Marchio il franchisor trasferisce il suo know-how, ovvero l'insieme delle tecniche e delle conoscenze necessarie a rendere più efficiente lo svolgimento dell'attività professionale dei franchisees. 
</p><p>
Il franchisor fornisce inoltre varie forme di assistenza affinchè i franchisees gestiscano la propria attività in linea con la politica commerciale e d'immagine del franchisor.
I franchisees si impegnano a rispettare le condizione contrattuali pattuite, nell'interesse reciproco delle parti e del consumatore finale.
</p>


</div>
<?php include 'menu1.html'; ?>


</body>
</html>