<?php
$zip = new ZipArchive();

$zipName = __DIR__ . '/archive.zip';
$folderPath = __DIR__ . '/backup';

if ($zip->open($zipName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folderPath, FilesystemIterator::SKIP_DOTS),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $name => $file) {
        if (!$file->isDir()) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($folderPath) + 1);

            $zip->addFile($filePath, $relativePath);
        }
    }

    $zip->close();

    echo 'Le dossier "backup" et ses sous-dossiers ont été zippés avec succès.';
} else {
    echo 'Échec lors de la création de l\'archive.';
}
$file = "essai.html";
$op = fopen($file, 'w');
fwrite($op, "<p>Hola</p>");
fwrite($op, "\n<p>Hola</p>");
$t = file($file);
var_dump($t);
foreach($t as $key => $val)
{
    echo htmlspecialchars($val);
}

// $open = fopen('exemple.txt', 'w');
$open = file('exemple.txt');
var_dump($open) ;