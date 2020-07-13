
<!-- ----- debut ModelModule -->
<?php
require_once 'Model.php';

class ModelModule {

 private $numero, $nom, $description, $type, $temperature, $duree, $nbre_donnee,$etat;

 // pas possible d'avoir 2 constructeurs
 public function __construct($numero = NULL, $nom = NULL, $description = NULL, $type = NULL, $temperature = NULL, $duree=NULL, $nbre_donnee=NULL,$etat=NULL  ) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($numero)) {
   $this->numero= $numero;
   $this->nom = $nom;
   $this->description = $description;
   $this->type = $type;
   $this->temperature = $temperature;
   $this->duree = $duree;
   $this->nbre_donnee = $nbre_donnee;
   $this->etat = $etat;
   
   
   
   
  }
 }

 function setNumero($numero) {
  $this->numero = $numero;
 }

 function setNom($nom) {
  $this->nom = $nom;
  }
 
 function setDescription($description) {
  $this->description = $description;
 }
function setType($type) {
  $this->type = $type;
  }
  function setTemperature($temperature) {
  $this->temperature = $temperature;
  }
  function setDuree($duree) {
  $this->duree = $duree;
  }
  function setNbre_donnee($nbre_donnee) {
  $this->nbre_donnee = $nbre_donnee;
  }
  function setEtat($etat) {
  $this->etat = $etat;
  }

 function getNumero() {
  return $this->numero;
 }

 function getNom() {
  return $this->nom;
 }

 function getDescription() {
  return $this->description;
 }
 

 function getType() {
  return $this->type;
 }

 function getTemperature() {
  return $this->temperature;
 }
  function getDuree() {
  return $this->duree;
 }
  function getNbre_donnee() {
  return $this->nbre_donnee;
 }
   function getEtat() {
  return   $this->etat;
 }
 
 
 
 public function __toString() {
  return $this->numero;
 }

 // Persistance .......


 public static function view() {
  printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>%.00f</td><td>%d</td><td>%d</td><td>%s</td></tr>", $this->getNumero(), $this->getNom(), $this->getDescription(), $this->getType(), $this->getTemperature(), $this->getDuree(), $this->nbre_donnee(), $this->getEtat());
 }

// retourne une liste des id
 public static function getAllId() {
  try {
   $database = Model::getInstance();
   $query = "select numero from module";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelModule");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from module";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelModule");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function getOne($numero) {
  try {
   $database = Model::getInstance();
   $query = "select * from module where numero = :numero";
   $statement = $database->prepare($query);
   $statement->execute([
     'numero' => $numero
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelModule");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 public static function insert($numero, $nom, $description, $type, $temperature, $duree, $nbre_donnee,$etat) {
  try {
   $database = Model::getInstance();

   // recherche de la valeur de la clé = max(id) + 1
   $query = "select max(numero) from module";
   $statement = $database->query($query);
   $tuple = $statement->fetch();
   $numero = $tuple['0'];
   $numero++;

   // ajout d'un nouveau tuple;
   $query = "insert into module value (:numero, :nom, :description, :type, :temperature,:duree, :nbre_donnee,:etat)";
   $statement = $database->prepare($query);
   $statement->execute([
        'numero'=> $numero,
       'nom' => $nom,
       'description' => $description,
       'type' => $type,
       'temperature' => $temperature,
     'duree' => $duree,
     'nbre_donnee' => $nbre_donnee,
     'etat' => $etat
   ]);
   return $numero;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

 public static function update() {
  echo ("ModelModulen : update() TODO ....");
  return null;
 }

 public static function delete() {
  echo ("ModelModule : delete() TODO ....");
  return null;
 }

}
?>
<!-- ----- fin ModelMdule -->
