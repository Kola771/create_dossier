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
            
            //On récupère le contenu du fichier
            $texte = file_get_contents('exemple.txt');
            
            //On ajoute notre nouveau texte à l'ancien
            $texte .= "\n**NOUVEAU TEXTE**";
            
            //On écrit tout le texte dans notre fichier
            file_put_contents('exemple.txt', $texte);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>