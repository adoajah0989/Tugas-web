<?php
$ball = 'purple';

// Menginisialisasi variabel yang akan digunakan
$redbox = $yellowbox = $bluebox = $greenbox = $purplebox = $colorlessbox = '';

if ($ball == 'red') {
    $redbox = $ball;
} elseif ($ball == 'yellow') {
    $yellowbox = $ball;
} elseif ($ball == 'blue') {
    $bluebox = $ball;
} elseif ($ball == 'green') {
    $greenbox = $ball;
} elseif ($ball == 'purple') {
    $purplebox = $ball;
} else {
    $colorlessbox = $ball;
}

// Menampilkan nilai variabel berdasarkan kondisi
echo "red box : $redbox <br>\n";
echo "yellow box : $yellowbox <br>\n";
echo "blue box : $bluebox <br>\n";
echo "green box : $greenbox <br>\n";
echo "purple box : $purplebox <br>\n";
echo "colorless box : $colorlessbox <br>\n";
?>
