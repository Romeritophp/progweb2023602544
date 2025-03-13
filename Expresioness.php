<?php
     // Función que calcula la expresión A
    function expresion_a($x, $y) {
        return (1/$x) + (($x + $y)/3) + (2 * ($x/$y));
    }
     // Función que calcula la expresión B
    function expresion_b($x) {
        return ((1/2) * $x + (3 + $x/2) * (2 * pow($x,2))) / ((2 + 3) * $x);
    }
     // Función que calcula la expresión C
    function expresion_c($x) {
        return (sqrt(pow((2 * $x),2) + pow(3,2)) / 5) + sqrt(pow($x,2));
    }
     // Función que calcula la expresión D
    function expresion_d($x) {
        return ((1/2 + 1/8) * sqrt($x)) / ((sqrt($x)/2) + (3 * pow($x,2)/4));
    }
      // Función que calcula la expresión E
    function expresion_e($x) {
        return sqrt(((pow($x,2)/2) + (1/sqrt($x))) / (3 + (1/2) * pow($x,3)));
    }
    // Captura los valores de x e y desde la URL (Ejemplo: index.php?x=5&y=2)
    $x = $_GET["x"];
    $y = $_GET["y"];
?>

<html>
<head>
    <title>Expresiones Matemáticas</title>
    <h1>Expresiones Matemáticas</h1>
</head>
<body>
    <p>A es igual a (X=<?php echo $x ?>, Y=<?php echo $y ?>): <?php echo expresion_a($x, $y); ?></p>
    <p>B es igual a (X=<?php echo $x ?>): <?php echo expresion_b($x); ?></p>
    <p>C es igual a (X=<?php echo $x ?>): <?php echo expresion_c($x); ?></p>
    <p>D es igual a (X=<?php echo $x ?>): <?php echo expresion_d($x); ?></p>
    <p>E es igual a (X=<?php echo $x ?>): <?php echo expresion_e($x); ?></p>

     <?php
    $imagen = "Expresiones.png";
    echo "<img src='$imagen' alt='Imagen en PHP'>";
    ?>
</body>
</html>