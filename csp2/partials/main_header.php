<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><img class="logo" src="assets/images/guitaricon.png" alt="Cithra icon"></a>
      <a class="navbar-brand" href="home.php">Cithra</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php

        if (isset($_SESSION['current_user'])) {
          echo '
            <li>
              <a href="profile.php">' . ucfirst($_SESSION['current_user']) . '</a>
            </li>
          ';
        }

        ?>

        <li>
          <a href="cart.php"><img class="cart" src="http://pluspng.com/img-png/basket-cart-icon-image-28356-1200.png" alt="cart">
            <?php

            if (isset($_SESSION['current_user']) && isset($_SESSION['item_count'])) {
              echo '
                <strong style="color:red;">( '.$_SESSION['item_count'].' )</strong>
              ';
            }

            ?>
          </a>
        </li>
        <li>
          <a href="about.php">About</a></li>
        <li>
          <a href="catalog.php">Catalog</a>
        </li>
        <?php

        if (isset($_SESSION['current_user'])) {

          if ($_SESSION['role'] == 'admin') {
            echo '
              <li>
                <a href="settings.php">Settings</a>
              </li>
            ';
          }
        }
        
        ?>
        <?php

        if (isset($_SESSION['current_user'])) {
          echo '
            <li>
              <a href="logout.php">Logout</a>
            </li>
          ';
        } else {
          echo '
            <li>
              <a href="login.php">Login</a>
            </li>
            <li>
              <a href="register.php">Register</a>
            </li>
          ';
        }

        ?>
    </div><!-- navbar -->
  </div><!-- container -->
</nav>