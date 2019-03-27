<?php
/**
 * Created by PhpStorm.
 * User: Sang Nguyen
 * Date: 26-3-2019
 * Time: 12:55
 */

$waggie = array(
array("Kenteken"=>"GF-NX-07", "Merk"=>"Volkswagen", "Type"=>"Polo", "DatumAPK"=>"1999-07-12", "Kilometerafstand"=>"78000"),
array("Kenteken"=>"GF-PD-34", "Merk"=>"Volkswagen", "Type"=>"Golf", "DatumAPK"=>"1999-09-23", "Kilometerafstand"=>"57500"),
array("Kenteken"=>"KR-RT-65", "Merk"=>"Volkswwagen", "Type"=>"Polo", "DatumAPK"=>"1999-08-08", "Kilometerafstand"=>"42000"),
array("Kenteken"=>"PT-ER-45", "Merk"=>"Ford", "Type"=>"Fiesta", "DatumAPK"=>"1999-08-08", "Kilometerafstand"=>"25000"),
array("Kenteken"=>"TT-PR-73", "Merk"=>"Cirtoen", "Type"=>"XM", "DatumAPK"=>"1999-03-02", "Kilometerafstand"=>"1200"),
array("Kenteken"=>"TT-RW-01", "Merk"=>"Volkswagen", "Type"=>"Polo", "DatumAPK"=>"1999-11-14", "Kilometerafstand"=>"4500"),
    array("Kenteken"=>"GF-PD-34", "Merk"=>"Volkswagen", "Type"=>"Golf", "DatumAPK"=>"1999-09-23", "Kilometerafstand"=>"57500"),);

echo "<table border='1.1'>";
echo "<tr> <th>Kenteken</th> 
<th>Merk</th> 
<th>Type</th> 
<th>DatumAPK</th> 
<th>Kilometerstand</th> </tr>";
foreach($waggie as $car) {
echo "<tr> <td>$car[Kenteken]</td>
<td>$car[Merk]</td> 
<td>$car[Type]</td> 
<td>$car[DatumAPK]</td> 
<td>$car[Kilometerafstand]</td> </tr>";
}
echo "</table>";

?>

