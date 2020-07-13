
<!-- ----- debut Router1 -->
<?php
require ('./projet_stage/app/controller/ControllerModule.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

// --- Liste des méthodes autorisées
switch ($action) {
 case "moduleReadAll" :  

 case "moduleReadOne" : 
     
 case "moduleReadId" :  

 case "moduleCreate" : 

 case "moduleCreated" : 
     ControllerModule::$action();
  break;

 // Tache par défaut
 default:
      
                 $action = "Accueil";
                 ControllerModule::$action();
                           }


// --- Liste des méthodes autorisées



 


?>
<!-- ----- Fin Router1 -->

