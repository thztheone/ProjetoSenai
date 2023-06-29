<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>
        Caminhão
</title>
</head>
  <body>
  <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
  
  <div class="container-fluid col-lg-6 d-flex align-items-center gradient-custom-2">
  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 80px;" alt="logo">  
    <a class="navbar-brand">Pagina do Usuario</a>
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agen.php">Agendamento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="check.php">Check-in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="check.php">Check-out</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais opções
          </a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item " href="historico.php">historico</a></li>
            <li><hr class="dropdown-divider "></li>
            <li><a class="dropdown-item" href="#">Limpeza</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Revisão</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Página de login</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>

 
<br>
 <br>
 <center>
 

 <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
   <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
   <label class="text-dark btn btn-outline-danger" for="vbtn-radio1">Ver Agendamentos</label>
 </div>

 <br>
 <br>
 <p class="container rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded w-50 p-3 fw-semibold fs-5" id="info"></p>
 <script>

   function botaoPressionado() {
     var all = "Veiculos: Carro- placa 1 <br> Data de retirada: 12/06/2023 <br> Hora de retiradado: 12:00";

     document.getElementById("info").innerHTML = all;

   }
 
   var botao = document.getElementById("vbtn-radio1");

   botao.onclick = botaoPressionado; 
 </script>
   <a class="text-dark btn btn-outline-Dark bg-primary" href="agen.php">Página de Agendamento</a>
 </div>
 </center>  
     


</body>
</html>