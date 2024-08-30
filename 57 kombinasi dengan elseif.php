<?php
$suhu = 30;

if ($suhu < 20) {
    echo "Cuaca dingin.";
} elseif ($suhu <= 30) {
    echo "Cuaca hangat.";
    print_r("<p><strong> by: putri nayla</strong>");
} else {
    echo "Cuaca panas.";
}
