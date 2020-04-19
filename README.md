Api couleur créée par Andy douarre 
Date de création : 19/O4/2020
Version : 1.0

Introduction de l’application:
Cette api permet de récupérer et ajouter des couleurs de la base de données dans le format JSON.

Liste des technologies et frameworks utilisés:
Pour ce projet, j'ai utilisé :
    - PHP  
    - Un framework maison créé pour un projet de site web : jcphotographie.fr


Comment installer les dépendances et exécuter le projet?
Pour cela, suivez les étapes ci-dessous dans l'ordre :
    1- dézippez le dossier
    2- créez une base de données 'apiCouleur'
    3- insérez dans la base de données, le fichier bdd.sql
    3- changez les identifiants de la connexion à la bdd par les vôtres dans le fichier : "modeles/mBdd.php"
    4- Le projet est maintenant exécutable, en local tapez : "localhost/nomdudossier/
    il vous affichera le get colores

endpoint de couleurs:
/colores/ : toutes les couleurs avec les informations suivantes: id,name,color
/colores/index.php?action=search&id=[id recherché] : la couleur recherché avec les informations suivantes: id,name,color,pantone,year
/colores/index.php?action=insert&name=[nom choisi]&color=[couleur]&year=[année]&pantone=[pantone] : permet d'ajouter une couleur

Mettre en place la pagination des données fournies:
Je n'ai pas réussi à mettre en place la pagination des données fournies, j'essaierai de le mettre en place dans une future version suite à ce test.

Renvoyer JSON ou XML en fonction de ce qui est indiqué:
Malheureusement, je n'ai pas réussi dans le temps imparti à trouver un moyen de générer correctement un XML, l'application retourne un Json par défaut.


Utiliser git comme contrôle de version:
https://github.com/andyd63/apiCouleur

