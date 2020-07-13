
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
require "./projet_stage/app/controller/biblio_bt.php";
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.html';
    

      
            form_begin("stage", "get", "router1.php");

            
            form_input_hidden("action",'moduleCreated');
            form_input_text("numero", "numero" );
            form_input_text("nom", "nom" );
            form_input_text("description", "description" );
            form_input_text("type", "type" );
          
            $stack1=array(23,24,25.4,27.4,28.2,29);
            form_select1("temperature", "temperature", 1, $stack1);

            echo ('<p>');
            $stack2=array(14,20,30,40,50);
            form_select1("duree", "duree", 1, $stack2);

            echo ('<p>');
            
            $stack3=array(10,30,50,100,110);
            form_select1("nbr_donnee", "nbr_donnee", 1, $stack3);

            echo ('<p>');
            
            $stack4=array('fonctionnel','repos','non_operationnel','en_panne');
            form_select1("etat", "etat", 1, $stack4);

            echo ('<p>');

            form_input_submit("Enregistrer");

            form_end();
      
      
            
            ?> 
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

<!-- ----- fin viewInsert -->



