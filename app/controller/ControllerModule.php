
<!-- ----- debut ControllerModule -->
<?php
require_once './projet_stage/app/model/ModelModule.php';

class ControllerModule {
 // --- page d'acceuil
 public static function Accueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewAccueil.html';
  if (DEBUG){
   echo ("ControllerModule : Accueil : vue = $vue");
  }
 
   require ($vue);
 }

 // --- Liste des Modules
 public static function moduleReadAll() {
  $results = ModelModule::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/module/viewAll.php';
  if (DEBUG){
   echo ("ControllerModule : moduleReadAll : vue = $vue");
 }
   require ($vue);
  
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function moduleReadId() {
  $results = ModelModule::getAllId();

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/module/viewId.php';
  require ($vue);
 }

 // Affiche un Module particulier (id)
 public static function moduleReadOne() {
  $module_id = $_GET['numero'];
  $results = ModelModule::getOne($module_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/module/viewAll.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un module
 public static function moduleCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/module/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau module.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function moduleCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelModule::insert(
      htmlspecialchars($_GET['numero']), htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['description']), htmlspecialchars($_GET['type']), htmlspecialchars($_GET['temperature']), htmlspecialchars($_GET['duree']), htmlspecialchars($_GET['nbr_donnee']), htmlspecialchars($_GET['etat'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/module/viewInserted.php';
  require ($vue);
 }
 
}
?>
<!-- ----- fin ControllerModule -->


