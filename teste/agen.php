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
    <form  action='ProcessamentoL.php' method='POST'>
<div class="container rounded-5 shadow-sm mt-4 p-3 mb-5 bg-body-tertiary rounded w-50 p-3"> 
  
<div class="row">
  <div class="col">
    
    <a>Data de retirada</a>
    <input type="Date" class="form-control" name="info" id="DT">
  </div>
  <div class="col">
    <a>Data da entrega</a>
    <input type="Date" class="form-control"  name="info" id="DE">
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col">
    <a>Hora de retirada</a>
    <input type="time" class="form-control" name="info" id="HR">
  </div>
  <div class="col">
    <a>Hora da entrega</a>
    <input type="time" class="form-control" name="info" id="HE">
  </div>
</div>
  

   <br> <br>
   <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
   <label class="text-decoration-none text-dark btn btn-outline-danger" for="vbtn-radio1">Buscar carros disponiveis</label>
 
   <p class="container rounded-5 shadow-sm p-3 mb-5 bg-body-tertiary rounded w-50 p-3 fw-semibold fs-5" id="info"></p>
   <script>

   function botaoPressionado() {
     var all = "<a class='fs-1'>hgh</a>Fox <br> AudioR8 <br> BMW";

     document.getElementById("info").innerHTML = all;

   }
 
   var botao = document.getElementById("vbtn-radio1");

   botao.onclick = botaoPressionado; 
 </script>
   <a href="agenC.php" class="text-decoration-none text-white btn btn-primary">Avançar</a>

</div>
  </form>

</body>
</html>