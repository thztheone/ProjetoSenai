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
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pagina do administrador</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ADMhome.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ADMcarros.php">Cadastro de carros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ADMusuario.php">Cadastro de Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ADMcentro.php">Cadastro Centro de custo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ADMagen.php">Agendamento</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais opções
          </a>
          <ul class="dropdown-menu">
           <li><a class="dropdown-item " href="#">Manutenções</a></li>
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
  <label class="text-dark btn btn-outline-danger" for="vbtn-radio1">Ocupados no dia</label>
  <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
  <label class="text-dark btn btn-outline-danger" for="vbtn-radio2">Disponiveis no dia</label>
</div>
<br>
<br>
<p class="container rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded w-50 p-3 fw-semibold fs-5" id="declaracaoAmor"></p>
<script>
  // Função chamada quando o botão é clicado
  function botaoPressionado() {
    var declaracao = "Gol,Fox,etc";
    document.getElementById("declaracaoAmor").innerText = declaracao;
  }

  // Função chamada quando o botão é solto
  function botaoSolto() {
    document.getElementById("declaracaoAmor").innerText = "Vrum,Vrum,Vrum";
  }

  // Obtendo referência ao botão pelo seu ID
  var botao = document.getElementById("vbtn-radio1");
  var botao1 = document.getElementById("vbtn-radio2");


  // Adicionando os eventos onmousedown e onmouseup ao botão
  botao.onclick = botaoPressionado;
  botao1.onclick = botaoSolto;
</script>

</center>
</body>
</html>