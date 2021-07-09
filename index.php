<?php 
    include  __DIR__ . "/class/products.php";
    
    $motherboard = new Product("motherboard", "decrition_motherboard" , 173, 15) ;
    $motherboard-> setCategories("Componenti");
    $motherboard-> setUser("Luca", "Di Pietro", "21", "41");
    // var_dump( $motherboard);

    $cpu = new Product("cpu", "decrition_cpu" , 110, 16) ;
    $cpu-> setCategories("Componenti");
    $cpu-> setUser("Luigi", "Franco", "35", "42", "premium");
    // var_dump( $cpu);

    $gpu = new Product("gpu", "decrition_gpu" , 90, 17) ;
    $gpu-> setCategories("Componenti");
    $gpu-> setUser("Luca", "Franco", "45", "43", "premium");
    // var_dump( $gpu);

    $heatsink = new Product("heatsink", "decrition_heatsink" , 180, 18) ;
    $heatsink-> setCategories("Componenti");
    $heatsink-> setUser("Luigi", "Di Pietro", "18", "44", "premium");
    // var_dump( $heatsink);
    

; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Shop</h1>
    <div class="container" >
            <h2> 
                <?= $motherboard->name; ?>
            </h2>
            <p>
                <?= $motherboard->price; ?> €
            </p>
            <h3>
                <?= $motherboard-> setSconto($motherboard->account); ?>
            </h3>

            <a> Acquista </a>

    </div>

    <div class="container" >
            <h2> 
                <?= $cpu->name; ?>
            </h2>
            <p>
                <?= $cpu->price; ?> €
            </p>
            <h3>
                <?= $cpu-> setSconto($cpu->account); ?>
            </h3>

            <a> Acquista </a>

    </div>

    <div class="container" >
            <h2> 
                <?= $gpu->name; ?>
            </h2>
            <p>
                <?= $gpu->price; ?> €
            </p>
            <h3>
                <?= $gpu-> setSconto($gpu->account); ?>
            </h3>

            <a> Acquista </a>

    </div>

    <div class="container" >
            <h2> 
                <?= $heatsink->name; ?>
            </h2>
            <p>
                <?= $heatsink->price; ?> €
            </p>
            <h3>
                <?= $heatsink-> setSconto($heatsink->account); ?>
            </h3>

            <a> Acquista </a>

    </div>
    
</body>
</html>
