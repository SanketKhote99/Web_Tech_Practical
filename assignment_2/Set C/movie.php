<?php
$doc=new DOMDocument("1.0", "UTF-8");
$xmlfile="Movie.xml"; 
$root-$doc->createElement("Movie CD_Store");

$classical=$doc->createElement("classical");
$mn=$doc->createElement("MovieTitle", "Mother India"); 
$classical->appendChild($an);
$an=$doc->createElement("ActorName", "Sunil Dutt"); 
$classical->appendChild($an);
$re=$doc->createElement("ReleaseYear", 1957); 
$classical->appendChild($re);

$horror=$doc->createElement("Horror");
$an=$doc->createElement("MovieTitle","stree"); 
$horror->appendChild($n); 
$an=$doc->createElement("ActorName", "Rajkummar Rao");
$horror->appendChild($an); 
$re=$doc->createElement("ReleaseYear", 2018);
$horror->appendChild($re);

$action=$doc->createElement("Action"); 
$an=$doc->createElement("MovieTitle", "Pathaan");
$action->appendChild($an);
$an=$doc->createElement("ActorName", "Shah Rukh Khan"); 
$action->appendChild($an );
$re=$doc->createElement("ReleaseYear", 2023);
$action->appendChild($re);

$root->appendChild($classical);
$root->appendChild($action); 
$root->appendChild($horror);
$doc->appendChild($root);
$doc->save("movies.xml"); 
echo '<a href="Movie.xml">Click Here </a>';
?>
