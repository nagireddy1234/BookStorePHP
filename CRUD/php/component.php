<?php 
function inputElement(){
  $ele = "

  <div class=\"input-group mb-2\">
  <div class=\"input-group-prepend\">
  <span class=\"input-group-text bg-warning\" id=\"basic-addon1\"><i class=\"fas fa-swatchbook\"></i></span>
  </div>
  <input type=\"text\" class=\"form-control\" autocomplete=\"off\" placeholder=\"ID\" aria-label=\"Username\"
    aria-describedby=\"basic-addon1\">
</div>";
echo $ele;
}
?>