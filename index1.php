<!DOCTYPE html>
<html>
<head lang="fr">
<meta charset="utf-8">
<title> PHP fonction pour afficher la liste des fichiers dans un répertoire</title>

  </head>
<body>
<p>
 <?php
// Définir une fonction pour afficher la liste des fichiers dans un répertoire.
function outputFiles($path){
    // Vérifier l'existance du dossier
    if(file_exists($path) && is_dir($path)){
        // Parcouir les fichiers du dossier
        $result = scandir($path);
        
        // Filtrer les répertoires courant (.) et parent (..)
        $files = array_diff($result, array('.', '..'));
        
        if(count($files) > 0){
            // Boucle à travers le tableau résultant
            foreach($files as $file){
                if(is_file("$path/$file")){
                    // afficher la liste
                    echo $file . "<br>";
                } else if(is_dir("$path/$file")){
                    /* Appel récursif de la fonction si des répertoires sont trouvés*/
                    outputFiles("$path/$file");
                }
            }
        } else{
            echo "ERREUR : Aucun fichier trouvé dans le répertoire";
        }
    } else {
        echo "ERREUR : Le répertoire n'existe pas.";
    }
}
 
// Call the function
outputFiles("backup");
?>
</p>
</body>
</html>

