<?php 
    include  __DIR__ . "/class/products.php";
    
    $motherboard = new Product("motherboard", "decrition_motherboard" , 173, 15) ;
    $motherboard-> setCategories("Componenti");
    $motherboard-> setUser("Luca", "Di Pietro", "21", "41");
    var_dump( $motherboard);

    $cpu = new Product("cpu", "decrition_cpu" , 110, 16) ;
    $cpu-> setCategories("Componenti");
    $cpu-> setUser("Luigi", "Franco", "35", "42", "premium");
    var_dump( $cpu);

; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>


    </div>
    
</body>
</html>
