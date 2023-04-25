<?php
 $fname=$_GET['fname'];
 $xml=simplexml_load_file($fname) or die("Error: Cannot create object");
 echo "Contents of $fname in tabular format : <br><br>";
 echo"<table border=1><tr><th>Code</th><th>TItle</th><th>Author
 </th><th>Year</th><th>Price</th></tr>";
 foreach($xml->children() as $books)
 {
 echo "<tr><td>".$books->code . "</td> ";
 echo "<td>".$books->name . "</td> ";
 echo "<td>".$books->author . "</td>";
 echo "<td>".$books->year . "</td>";
 echo "<td>".$books->price . "</td></tr>";
 }
 echo "</table>"
?> 
