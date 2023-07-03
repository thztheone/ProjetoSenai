<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>
<body>
<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  
  <div class="container-fluid col-lg-6 d-flex align-items-center gradient-custom-2">
  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 80px;" alt="logo">  
    <a class="navbar-brand">Pagina do Agendamento</a>
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
          <span class="material-symbols-outlined ms-2">home</span>
          <a class="nav-link active ms-2" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
          <span class="material-symbols-outlined ms-2">receipt_long</span>      
          <a class="nav-link" href="agen.php">Agendamento</a>
        </li>
        <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
          <span class="material-symbols-outlined ms-2">check_box</span>
          <a class="nav-link" href="checkin.php">Check-in</a>
        </li>
        <li class="nav-item text-white d-flex flex justify-content-start align-items-center">
          <span class="material-symbols-outlined ms-2">domain_verification_off</span>
          <a class="nav-link" href="checkout.php">Check-out</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais opções
          </a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item " href="#">Sóbre Nós</a></li>
            <li><hr class="dropdown-divider "></li>
            <li><a class="dropdown-item" href="index.php">Página de login</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>