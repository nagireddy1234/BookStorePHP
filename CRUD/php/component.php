<?php 
function inputElement($icon, $placeholder, $name, $value) {
  $ele ='
  <div class="input-group mb-2">
  <div class="input-group-prepend">
  <span class="input-group-text bg-warning" id="basic-addon1">'$icon'</span>
  </div>
  <input type="text" name='$name' class="form-control" autocomplete="off" placeholder='$placeholder' aria-label="Username" value='$value'
    aria-describedby="basic-addon1">
</div>';
echo $ele;
}
?>