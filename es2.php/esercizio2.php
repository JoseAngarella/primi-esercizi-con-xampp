<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
        //valori delle variabili modificabile (io li ho messi casualmente)
        $numgiorni=10;
        $capitale=1000;
        $tasso=5; //percentuale    

        //formula per calcolare il tasso di interesse in base ai valori impostati alle variabili
        $tasso_interesse=number_format(($tasso*$numgiorni*$capitale)/36500, 2); //solo due cifre decimali
        

        echo "<p>tasso: $tasso</p>";
        echo "<p>capitale: $capitale</p>";
        echo "<p>numero di giorni: $numgiorni</p>";
        echo "<h2 style='color:green'>tasso di interesse calcolato: $tasso_interesse €</h2>";

    ?>
    
</body>
</html>