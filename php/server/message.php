<?php
session_start();
function showAlert($type) {
  if(isset($_SESSION[$type])) : ?>
    <br><br>
    <h5 class="red-text text-darken-2 center"><?= $_SESSION[$type] ?></h5>
  <?php
  unset($_SESSION["logout"]);
  endif;
}
