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
            //On écrit un premier texte dans notre fichier  
            file_put_contents('exemple.txt', 'Ecriture dans un fichier');
            
            //On rajoute du texte dans notre fichier
            file_put_contents('exemple.txt', "\n**NOUVEAU TEXTE**", FILE_APPEND);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>