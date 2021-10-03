<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("Videogames.xml");

$x=$xmlDoc->getElementsByTagName('id');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$games=($y->childNodes);

for ($i=0;$i<$games->length;$i++) {
  //Process only element nodes
  if ($games->item($i)->nodeType==1) {
    echo("<b>" . $games->item($i)->nodeName . ":</b> ");
    echo($games->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?>