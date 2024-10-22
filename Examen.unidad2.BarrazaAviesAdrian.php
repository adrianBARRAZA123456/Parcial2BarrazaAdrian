<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
   


$telefonos = array('iPhone 15'=>' $15,999','Samsung Galaxy S23'=>'$15,999','Google Pixel 8
'=>'$13,999','OnePlus 11'=>' $13,999' ,'Xiaomi 13'=>'  $14,999' );



   foreach ($telefonos as $modelo => $precio) {
        echo "El modelo: " . $modelo. " con un precio de" . $precio;
    }


echo"<br>";
echo"<br>";

array_push($telefonos, array("modelo" => "Huawei P60", "precio" => '14999'), array("modelo" => "Motorola Edge 40", "precio" => '12999'));

asort($telefonos);
		
echo "modelos después de agregar:";
   foreach ($telefonos as $modelo => $precio){
     echo "El modelo: " . $modelo. " con un precio de" . $precio;
}
?>
</body>
</html>