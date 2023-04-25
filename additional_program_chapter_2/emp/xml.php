<?php
 $fname=$_GET['fname'];
 $xml=simplexml_load_file($fname) or die("Error: Cannot create object");
 echo "Contents of $fname in tabular format : <br><br>";
 echo"<table border=1><tr><th>Emp No.
 </th><th>Name</th><th>Designation</th><th>Sal</th></tr>";
 foreach($xml->children() as $books)
 {
 echo "<tr><td>".$books->empno . "</td> ";
 echo "<td>".$books->empname . "</td> ";
 echo "<td>".$books->salary . "</td>";
 echo "<td>".$books->designation. "</td></tr>";
 }
 echo "</table>"
?>