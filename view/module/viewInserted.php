
<!-- ----- début viewInserted -->
<?php
    require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentMenu.html';
    include $root . '/app/view/fragment/fragmentJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Le nouveau Module a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>numero = " . $_GET['numero'] . "</li>");
     echo ("<li>nom = " . $_GET['nom'] . "</li>");
     echo ("<li>description = " . $_GET['description'] . "</li>");
     echo ("<li>type = " . $_GET['type'] . "</li>");
     echo ("<li>temperature = " . $_GET['temperature'] . "</li>");
     echo ("<li>duree = " . $_GET['duree'] . "</li>");
     echo ("<li>nbr_donnee = " . $_GET['nbr_donnee'] . "</li>");
     echo ("<li>etat = " . $_GET['etat'] . "</li>");

     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du Module</h3>");
     echo ("numero = " . $_GET['numero']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    