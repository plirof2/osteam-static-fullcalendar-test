<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
echo "<HR size=3>";

echo "<table>";



    foreach ($_REQUEST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }



echo "</table>";


echo "<HR size=3>";
print_r($_REQUEST);
echo "<HR size=3>";
var_dump($_REQUEST);

 ?>
 </body>
 </html>
