<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    // 
    $txt = isset( $_GET["t"])? $_GET["t"]: "Texto generico";
    $tam = isset ($_GET["tam"])? $_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])? $_GET["cor"]: "#000000";
    
    ?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /** Para dar style na pagina, necessario incluir o formato em php <?php ?> */
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
     <div>
    <?php
    echo " <span class = 'texto'>$txt </span>"; // para que possa criar style é necessario incluir o span.
   
    ?>
     </div>
        
</body>
</html>
