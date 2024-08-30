<?php
$nilai = 45;

switch (true) {
    case ($nilai >= 90):
        echo "Grade A";
        ("<p><strong>by:putri nayla</strong>");
        break;
    case ($nilai >= 80):
        echo "Grade B";
        ("<p><strong>by:putri nayla</strong>");
        break;
    case ($nilai >= 70):
        echo "Grade C";
        ("<p><strong>by:putri nayla</strong>");
        break;
    case ($nilai >= 60):
        echo "Grade D";
        ("<p><strong>by:putri nayla</strong>");

        break;
    default:
        echo "Grade E";
}
