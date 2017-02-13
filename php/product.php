<?php
include 'parts/header.php';
include 'parts/productModal.php';
include 'server/auth.php';
verifyUser();
?>
  <br><br><br>
    <div class="container">
      <div class="section">
        <div class="fixed-action-btn horizontal click-to-toggle position-bt">
          <a class="btn-floating btn-large teal darken-3">
            <i class="material-icons">menu</i>
          </a>
          <ul>
            <li><a class="btn-floating grey" href="server/logout.php"><i class="material-icons">perm_identity</i></a></li>
            <li><a class="btn-floating blue"><i class="material-icons">search</i></a></li>
            <li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
            <li><a class="btn-floating yellow darken-1"><i class="material-icons">loop</i></a></li>
            <li><a class="btn-floating orange" data-target="modal1" href="#modal1"><i class="material-icons">add</i></a></li>
          </ul>
        </div>
      </div>
      <br><br>
      <div class="section">
        <div class="row">
          <div class="col s12">
            <table class="bordered responsive-table grey-text text-darken-2">
              <thead>
                <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Description</th>
                    <th data-field="price">Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Alvin</td>
                  <td>Eclair</td>
                  <td>$0.87</td>
                </tr>
                <tr>
                  <td>Alan</td>
                  <td>Jellybean</td>
                  <td>$3.76</td>
                </tr>
                <tr>
                  <td>Jonathan</td>
                  <td>Lollipop</td>
                  <td>$7.00</td>
                </tr>
              </tbody>
          </table>
          </div>
        </div>

      </div>
      <br><br>
    </div>
<?php
include 'parts/footer.php';
?>
