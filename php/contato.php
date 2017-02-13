
<?php
include 'parts/header.php';
include 'parts/nav.php';
?>
<br><br>

<div class="container">
  <div class="row">
    <h3 class="teal-text text-darken-1 center border"> Entre em contato </h3>
    <br><br>
     <form class="col s12" action="server/email.php" method="post">
       <div class="row">
         <div class="input-field col s12 m6">
           <input id="first_name" type="text" class="validate" name="name">
           <label for="first_name">First Name</label>
         </div>
         <div class="input-field col s12 m6">
           <input id="last_name" type="text" class="validate" name="second">
           <label for="last_name">Last Name</label>
         </div>
       </div>
       <div class="row">
         <div class="input-field col s12 m6">
           <input id="email" type="email" class="validate" name="email">
           <label for="email">Email</label>
         </div>
         <div class="input-field col s12 m6">
           <input id="email" type="tel" class="validate" name="phone">
           <label for="email">Phone Number</label>
         </div>
       </div>
       <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
            <label for="textarea1">Message</label>
          </div>
      </div>
      <div class="input-field col s12">
        <button class="btn waves-effect waves-light product-bt teal darken-3" type="submit">Send
            <i class="material-icons right">send</i>
          </button>
      </div>
     </form>
   </div>
 </div>


<?php
include 'parts/footer.php';
?>
