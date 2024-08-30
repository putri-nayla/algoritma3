<?Php
$isiFile = "Contoh teks di dalam file.";
$status = file_put_contents("example.txt", $isiFile);

if ($status !== false) {
    echo "Penulisan file berhasil!";
    print_r("<P><strong>  by:putri nayla<?strong>");
} else {
    echo "Penulisan file tidak berhasil.";
    print_r("<P><strong>  by:putri nayla<?strong>");
    
}
