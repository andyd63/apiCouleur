Api couleur crée par Andy douarre 
Date de création : 19/O4/2020
Version : 1.0

Introduction de l’application:
Cette application permet de récupérer et ajouter des couleurs de la base de données dans le format JSON.

Liste des technologies et frameworks utilisés:
Pour ce projet, j'ai utilisé :
    - PHP  
    - Un framework maison crée pour un projet de site web : jcphotographie.fr


Comment installer les dépendances et exécuter le projet?
Il vous faudra tout suivre les étapes ci-dessous dans l'ordre :
    1- dézipper le dossier
    2- créer une base de données 'apiCouleur'
    3- insérer dans la base de données, le fichier baseDeDonnee.sql
    3- changer les identifiants de la connexion à la bdd par les votre dans le fichier : "modeles/mBdd.php"
    4- Le projet est maintenant executable, en local tapez : "localhost/nomdudossier/
    il vous affichera le get couleurs

endpoint de couleurs:
/colores/ : toutes les couleurs avec les informations suivantes: id,name,color
/colores/index.php?action=search&id=[id recherché] : la couleur recherché avec les informations suivantes: id,name,color,pantone,year
/colores/index.php?action=insert&name=[nom choisi]&color=[couleur]&year=[année]&pantone=[pantone] : permet d'ajouter une couleur

Mettre en place la pagination des données fournies:
Je n'ai pas réussi à mettre en place la pagination des données fournies, j'essaierai de le mettre en place dans une futur version suite à ce test.

Renvoyer JSON ou XML en fonction de ce qui est indiqué:
Malheureusement, je n'ai pas réussi dans le temps imparti à trouver un moyen de générer correctement un XML, l'application retourne un Json par défaut.


Utiliser git comme contrôle de version:
