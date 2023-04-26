<?php
 $fname=$_GET['fname'];
 $xml=simplexml_load_file($fname) or die ("Error: Cannot create object");
 echo "Contents of $fname in tabular format : <br><br>";
 echo"<table border=1><tr><th>Item No.</th><th>Name</th><th>
 Description</th><th>Price</th></tr>";
 foreach($xml->children() as $books)
 {
 echo "<tr><td>".$books->ino . "</td> ";
 echo "<td>".$books->iname . "</td> ";
 echo "<td>".$books->desc . "</td>";
 echo "<td>".$books->iprice . "</td></tr>";
 }
 echo "</table>"
?>