<?php
 $fname=$_GET['fname'];
 $xml=simplexml_load_file($fname) or die ("Error: Cannot create object");
 echo "Contents of $fname in tabular format : <br><br>";
 echo"<table border=1><tr><th>Roll No. </th> <th> Name </th> <th>
 Address </th> <th> College</th><th>Course</th></tr>";
 foreach($xml->children() as $books)
 {
 echo "<tr><td>".$books->rno . "</td> ";
 echo "<td>".$books->name . "</td> ";
 echo "<td>".$books->addr . "</td>";
 echo "<td>".$books->collegename . "</td>";
 echo "<td>".$books->course . "</td></tr>";
 }
 echo "</table>"
?> 