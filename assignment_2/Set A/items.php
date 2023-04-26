<?php
                $xml=simplexml_load_file("items.xml") or die("eror:cannot create object");
                echo "<table border=1 align=center>";
                echo "<tr><td>iname </td><td>iprice</td><td>Quantity</td></tr>";
                foreach($xml->children() as $item)
                {
                                echo "<tr><td>".$item->iname."</td>";
                                echo "<td>".$item->iprice."</td>";
                                echo "<td>".$item->Quantity."</td></tr>";
                }
                echo "<table>";
?>