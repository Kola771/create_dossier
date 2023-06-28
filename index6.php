<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $fichier = fopen('exemple2.txt', 'c+b');
            fwrite($fichier, 'Un premier texte dans mon fichier');
        ?>
        <p>Un paragraphe</p>
    </body>
</html>