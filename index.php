<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1</title>
</head>
<body>
    <?php
	    echo ('<h1>PHP alapok</h1>');
        print ('<h2>Print eredménye</h2>');
        echo '<p>Ezt a PHP írta.</p>';

        // konstants használata
        define("GREETING","<p>Hello you! How are you today?</p>");
        echo constant("GREETING");

        // változó használata, összefűzés jele a pont (.)
        $szoveg1 = 'Fáradt'; 
        $szoveg2 = "vagyok";
        echo "<p>A két szöveg együtt: ".$szoveg1."+".$szoveg2."</p>";
        echo "<p>A két szöveg együtt: $szoveg1 $szoveg2</p>";
        // alapesetben a "-t használjuk
        // aposztrófon belül nem érzékeli a változót
        echo '<p>A két szöveg együtt: $szoveg1 $szoveg2</p>';

        // egész szám, tört szám
        $kitevo = 10; //1023 a maximum, amit számol
        $alap = 2.0;
        echo "<br>A $alap a $kitevo -dik hatványon: ".pow($alap, $kitevo);

        // Összeadás
        $tort1 = 3.56;
        //var_dump($tort1);
        $tort2 = 3.44;                // Fűzze össze a két szám összegét
        echo "<br>A $tort1 és a $tort2 összege: ".$tort1+$tort2;
        $logikai1 = true;
        $logikai2 = false;
        echo "<br>A két logikai érték: ".$logikai1." ".$logikai2; //true 1-et jelent, a 0-át nem adja vissza, mert csak az igaz értéket írja ki

        // Listák (dinamikus tömbök)
        $a = array("red", "green", "blue");
        echo"<br>";
        // lista kiiratására nem alkalmas az echo
        print_r($a);
        var_dump($a);
        $tomb0 = array(1,2,3,4,5);
        $tomb1 = array();
        $tomb2[0] = "Ady Endre";
        $tomb2[1] = "József Attila";
        $tomb3 = ["Milan Kundera", "Hermann Hesse"];

        echo "<br>1. tömb: ";
        print_r($tomb0);

        echo "<br>2. tömb: ";
        print_r($tomb1);

        echo "<br>3. tömb: ";
        print_r($tomb2);

        echo "<br>4. tömb: ";
        print_r($tomb3);

        // kétféle módszer a dinamikus tömb bővítésére
        $tomb2 = "Tóth Árpád";
        array_push($tomb3, "Mikszáth Kálmán");

        // 3. tömb bővítés után
        echo "<br>3. tömb kiiratása bővítés után: ";
        print_r($tomb2);
    ?>
</body>
</html>