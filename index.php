<!DOCTYPE html>
<html>
<head lang="fr">
<meta charset="utf-8">
<title> PHP création de dossier et copier d'un fichier</title>

  </head>
<body>
<p>
 <?php
// le chemin du dossier à créer
$dir = "backup";
 
// Verifier l'existence du dossier
if(!file_exists($dir)){
    // Tentative de création du répertoire
    if(mkdir($dir)){
        echo "Répertoire créé avec succès.";
    } else{
        echo "ERREUR : Le répertoire n'a pas pu être créé.";
    }
} else{
    echo "ERREUR : Le répertoire existe déjà.";
}
echo "<br>";
// Source file path
$file = "test1.txt";
 
// Chemin de destination du fichier
$newfile = "backup/test1.txt";
 
// Vérification de l'existence du fichier
if(file_exists($file)){
    // Tentative de copier du fichier
    if(copy($file, $newfile)){
        echo "Fichier copié avec succès.";
    } else{
        echo "ERREUR : Le fichier n'a pas pu être copié.";
    }
} else{
    echo "ERREUR : Le fichier n'existe pas.";
}
?>
</p>
</body>
</html>
