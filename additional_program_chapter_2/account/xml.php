<?php 
 $fname=$_GET['fname']; 
 $xml=simplexml_load_file($fname) or die("Error: Cannot create object"); 
 echo "Contents of $fname in tabular format : <br><br>"; 
 echo"<table border=1><tr><th>Account No.</th><th>Name</th><th> 
 Address</th><th>Branch</th><th>Type</th><th>Balance</th></tr>";
 foreach($xml->children() as $books) 
 { 
 echo "<tr><td>".$books->acno . "</td> "; 
 echo "<td>".$books->name . "</td> "; 
 echo "<td>".$books->addr . "</td>"; 
 echo "<td>".$books->branch . "</td>"; 
 echo "<td>".$books->actype . "</td>"; 
 echo "<td>".$books->bal . "</td></tr>"; 
 } 
 echo "</table>"
?>