<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ventas = floatval($_POST["ventas"]);
        $hijos = intval($_POST["hijos"]);

        $comision = $ventas * 0.075;
        $bonificacion = $hijos * 50;
        $sueldoBasico = 600;
        $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
        $descuento = $sueldoBruto * 0.11;
        $sueldoNeto = $sueldoBruto - $descuento;

        echo "<h2>Resultados:</h2>";
        echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
        echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
        echo "Sueldo Bruto: S/. " . number_format($sueldoBruto, 2) . "<br>";
        echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
        echo "Sueldo Neto: S/. " . number_format($sueldoNeto, 2) . "<br>";
    }
?>