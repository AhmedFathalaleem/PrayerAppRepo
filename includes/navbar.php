<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Prayer App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php base_url('index.php') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sebha.php">Online Seebha</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="makkah.php">MakkaTV</a></li>
            <li><a class="dropdown-item" href="namesOfAllah.php">Names of Allah</a></li>
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <?php if(isset($_SESSION['authenticated'])) : ?>
          
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $_SESSION['auth_user']['user_fname']." ".$_SESSION['auth_user']['user_lname']?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="my-profile.php">Profile</a></li>
            <li><form action="" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
            </form></li>
           
          </ul>
        </li>
          <?php else : ?>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login.php') ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('register.php') ?>">Resigter</a>
        </li>
        <?php endif; ?>
      </ul>
      
      </form>
    </div>
  </div>
</nav>