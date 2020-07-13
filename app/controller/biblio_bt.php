<!DOCTYPE html>

        <?php

function panel_head ($titre){
    
   echo( '<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">'.$titre.' </h3></div></div>'); 
      
}

function form_input_hidden($name,$value){
 
    echo("<!-- form_input_hidden : $name $value --> \n");
  echo(" <p>\n ");
  echo("<div class='form-group'>");
  echo("<input type='hidden' name='$name' value='$value' >");
  echo("</div>");  
    
    
}

function form_begin($class, $method, $action)
{
  echo("\n<!-- ============================= -->\n");
  echo("<!-- form_begin : $class $method $action --> \n");
  printf("<form class='%s' method='%s' action='%s' >\n", $class, $method, $action);
  
   
}

function form_input_submit($value){
  echo("<!-- form_input_submit : $value --> \n");
  echo(" \n ");
  echo(" <button type=\"Submit\" class=\"btn btn-primary\" value=\'$value\'>Submit form</button> ");

  
}

function form_select1($label, $name,$size,$liste){
  echo("<!-- form_input_text : $label $name  $size  --> \n");
  echo(" <p>\n ");
  echo("<div class='form-group'>");
  echo("<label>$label</label> \n");
  printf("<select name='%s' class=\"form-control\"  size='%s' required>\n" , $name,  $size);
            foreach ($liste as $key => $value){
                printf("<option value='%s'> %s </option>\n", $value, $value);
            }
          echo("</select> \n");
          echo(" </p> \n");
   
}


function form_input_text($label, $name)
{
  echo("<!-- form_input_text : $label $name  --> \n");
  echo(" <p>\n ");
  echo("<div class='form-group'>");
  echo("<label for='$label'>$label</label>");
  echo("<input type='text' class='form-control' name='$name'  required >");
  echo("</div>");
    
    
}


function form_end()
{
  echo("\n<!-- ============================= -->\n");
  echo("<!-- form_end: --> \n");
  echo("</form>\n");
    
}


        ?>
  