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
            /*Notre fichier contient toujours le texte :
             *"abcdefmier texte dans mon fichier. Un autre texte"
             *ajouté précédemment*/
            $fichier = fopen('exemple2.txt', 'c+b');
            fwrite($fichier, 'abc');
            fwrite($fichier, 'def');
            
            //On déplace le curseur de 20 octets
            fseek($fichier, 20, SEEK_CUR);
            fwrite($fichier, 'ghijk');
            
            //On place le curseur en fin de fichier
            fseek($fichier, filesize('exemple2.txt'));
            fwrite($fichier, 'lmnop');
        ?>
        <p>Un paragraphe</p>
    </body>
</html>