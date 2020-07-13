
<!-- ----- début viewId -->
<?php 
require ($root . '/app/view/fragment/fragmentHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentMenu.html';
      include $root . '/app/view/fragment/fragmentJumbotron.html';

      // $results contient un tableau avec la liste des clés.
      ?>

    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='moduleReadOne'>
        <label for="numero">numero : </label> <select class="form-control" id='numero' name='numero' style="width: 100px">
            <?php
            foreach ($results as $numero) {
             echo ("<option>$numero</option>");
            }
            ?>
        </select>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentFooter.html'; ?>

  <!-- ----- fin viewId -->