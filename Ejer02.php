<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $precio_Por_Litro = floatval($_POST["precio"]);
        $cantidad = intval($_POST["cantidad"]);

        $nuevo_Precio= $precio_Por_Litro *0.95;
        $importe_Compra = $nuevo_Precio *$cantidad;
        $importe_Descuento = $importe_Compra *0.07;
        $importe_Pagar = $importe_Compra - $importe_Descuento;
        $obsequio = $cantidad *2;

        echo "<h2>Resultados:</h2>";
        echo "Nuevo Precio de la Gaseosa (por litro): S/. " . number_format($nuevo_Precio, 2) . "<br>";
        echo "Importe de la Compra: S/. " . number_format($importe_Compra, 2) . "<br>";
        echo "Importe del Descuento: S/. " . number_format($importe_Descuento, 2) . "<br>";
        echo "Importe a Pagar: S/. " . number_format($importe_Pagar, 2) . "<br>";
        echo "Obsequio (caramelos): " . $obsequio . "<br>";
    }
?>