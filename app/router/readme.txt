Projet de Stage 2020 CEDRIC TAMGNO 

26/05/2020.


Le projet a été réalisé avec PHP, Mysql, HTML, BOOTSTRAP, Et CSS

Aussi Il se decompose donc en MVC (Model, Vue, Controleur)

Du fait de temps limité accordé, et de notre disponibilité (Les cours à l'UTT+Compositions)
nous avons pu faire une interface qui intérargi avec la base de donnée.

La Base de donnée (réalisé avec Wamp Server à été exporté) retrouvable dans le dossier outil


-------------------------------------------------

Pour lancer le projet:


             1)Dossier Controleur(dans app)

---Dans le fichier controllerModule.php a l'entete remplacer le chemin absolu par celui de la machine
qui hebergera le projet par exmeple:

require_once './projet_stage/app/model/ModelModule.php';

Deviendra

require_once 'C:/Users/Nom_machine/Documents/NetBeansProjects/projet_stage/app/model/ModelModule.php';


---Dans le fichier config.php 
Renseigner les informations sur la base de donnée ( username, password)
Ainsi que le chemin du projet dans $root par exemple:

$root = "C:/Users/Desktop/projet_stage";



              2) Dossier model

--Dans le fichier model.php ne pas oublier d'inclure le chemin entier de config.php
par exemple:

include ('C:/Users/Documents/projet_stage/app/controller/config.php');


               3) Dossier router

--Dans le fichier router1.php  ne pas oublier d'inclure le chemin entier de ControllerModule.php
par exemple:

require ('C:/Users/projet_stage/app/controller/ControllerModule.php');


                4) Dossier view - module

--Dans le fichier viewInsert.php ne pas oublier d'inclure le chemin entier de biblio_bt.php

par exemple:

require "C:/Users/projet_stage/app/controller/biblio_bt.php";








--------------------------------------------------------------------------------

Apres toute la configuration vous pouvez lancer index.php 


Merci pour votre attention.



TAMGNO Cedric, étudiant en 3e année à l'Université Technologique de Troyes.
 