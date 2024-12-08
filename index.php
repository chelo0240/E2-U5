<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPHP Grupo XC</title>
    <link rel="stylesheet" href="css/estilos.css"/>    
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Ramla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
    <section class="wrapper">
        <header>
            <h1 class="logo"><a href="index.html">StemPhp</a></h1>
            <nav>
                <ul> 
                    <li> <a href="index.php" class="current">Inicio</a></li>
                </ul>
            </nav>
        </header>
        
        <section id="contenedor">
            <section class="problema">
                <h2>Problema: determina el aumento de temperatura del agua</h2>
                <p>Descripción:</p>
                <p>Un colector solar plano tiene una superficie de 4m² y debe calentar agua para uso doméstico. Sabiendo que el coeficiente de radiación solar K = 0.9 cal/min·cm² y que el consumo de agua es constante a razón de 6 l/minuto, determina el aumento de temperatura del agua si está funcionando durante 2 horas. El agua inicialmente está a 8°C y no hay pérdidas de calor.</p>
            </section>

            <section class="formulas">
                <h2>Fórmulas</h2>
                <p>Q = K * t * S en Kcal.</p>
                <p>Convertir a Kwh (base 1 h.)</p>
            </section>

            <section class="datos">
                <h2>Datos:</h2>
                <p> Q = Energía generada</p>
                <p> K = Coeficiente de radiación</p>
                <p> t = Tiempo, en minutos</p>
                <p> S = Área, cm²</p>
                <p> r = Rendimiento</p>
            </section>

            <section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/agua.jpg" alt="Esquema del problema">
                </center>
            </section>

            <section class="calculos">
                <h2>Solución</h2>
                <p>Si no hay pérdidas de calor, el rendimiento es del 100% y la energía solar absorbida es igual que la energía útil o calorífica necesaria para calentar el agua.</p>

                <p>Q = V/t</p>
                <p>V agua = 6 l/min * (2 * 60) min = 720 l</p>
                <p>m agua = 720 Kg (la densidad del agua es 1)</p>

                <p>E_t = K * t * S = 0.9 cal/min·cm² * (2 * 60) min * (4 * 10<sup>4</sup>) cm² = 4320000 cal = 4320 Kcal</p>

                <p>E_t = C_e * m * (T_f - T_i)</p>
                <p>4320 Kcal = 1 * 720 * (T_f - 8)</p>
                <p>Resultado:</p>
                <p>T_f = 14°C</p>
            </section>

            <?php
            function calcular() {
                // Datos
                $K = 0.9;  // Coeficiente de radiación en cal/min·cm²
                $t = 2 * 60; // Tiempo en minutos (2 horas)
                $S = 4 * 10000; // Área en cm² (4 m² convertidos a cm²)
                $m = 720;  // Masa del agua en kg
                $T_i = 8;  // Temperatura inicial en °C
                $E_t = $K * $t * $S/1000;

                $C_e = 1; 

                $T_f = ($E_t / $m)+$T_i;

                return $T_f;
            }

 
            ?>

<section class="resultado">
    <h2>Resultado:</h2>
    <h1>Resultado: <?php echo calcular(); ?> °C</h1>
</section>

        </section>

        <footer class="pie">
            Creative Commons versión 4.0 SciSoft 2024
        </footer>
    </section>
</body>
</html>

