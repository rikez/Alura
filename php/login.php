
<?php
include 'parts/header.php';
include 'parts/nav.php';
include 'server/message.php';
showAlert("logout");
?>
<br><br><br><br><br>

  <div class="row">
    <form class="col s6 push-m3" method="POST" action="./server/db-user.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">input</i>
          <input id="icon_prefix" type="text" class="validate" name="email">
          <label for="icon_prefix">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_pass" type="password" class="validate" name="password">
          <label for="icon_pass">Password</label>
        </div>
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light product-bt" type="submit">Sign In
              <i class="material-icons right">send</i>
            </button>
        </div>
        <div class="input-field col s6 center">
            <a class="waves-effect waves-light red-text text-lighten-2" href="#">Forgot your password?</a>
        </div>
        <div class="input-field col s6 center">
            <a class="waves-effect waves-light grey-text text-darken-2" href="#">Sign up!</a>
        </div>
      </div>
    </form>
  </div>

<?php
include 'parts/footer.php';
?>
