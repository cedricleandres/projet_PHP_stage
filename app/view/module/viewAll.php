




<!-- ----- début viewAll -->
<?php


// J'ai enlevé les require config.php

require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">numero</th>
          <th scope = "col">nom</th>
          <th scope = "col">description</th>
          <th scope = "col">type</th>
          <th scope = "col">temperature</th>
          <th scope = "col">duree</th>
          <th scope = "col">nbr_donnee</th>
          <th scope = "col">etat</th>
         
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results             
          foreach ($results as $element) {
  printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>%.00f</td><td>%d</td><td>%d</td><td>%s</td></tr>", $element->getNumero(), $element->getNom(), $element->getDescription(), $element->getType(), $element->getTemperature(), $element->getDuree(), $element->getNbre_donnee(), $element->getEtat());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!-- ----- fin viewAll -->