<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>POO en PHP</h2>
    
    <?php
    
    echo "<h3>Clases y objetos</h3>";
    require('./clase/clase1.php');
    require('./clase/cliente.php');
    require('./clase/productos.php');
    $objeto= new ClasePropiedades();//instanciar
    echo $objeto->stock;

    $cliente=new Cliente("indra",5,true);
    echo $cliente->getNombre();
    //modifica el nombre del cliente
    $cliente->setNombre("Repsol");
    //consultar el nuevo nombre 
    echo $cliente->getNombre();
    

    //PRODUCTOS

    $total= new productos(100,"camisa", 5,7.99);
    echo $total->getPrecio();
    
    //modifico el precio de camisa
    $total->setPrecio(7.95*1.21);
    //nuevo precio de camisa
    echo $total->getPrecio();


    //getter
    echo "<p>" . $total->getId(). "</p>";
    echo "<p>" . $total->getNombre()."</p>";
    echo "<p>" .$total->getUnidades(). "</p>";
    echo "<p>El precio modificado es de " . $total->getPrecio() . " con iva incluido</p>";
    echo "<p>El total final con iva incluido es ". $total->calcularTotal();





    ?>
</body>
</html>