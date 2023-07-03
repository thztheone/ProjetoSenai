<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js">


    <style>
    div.dataTables_filter,div.dataTables_length,div.dataTables_info,div.dataTables_paginate {
        font-size: 12px;
    }
    </style>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="main.js"></script>


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

    
     
  

   <div class="container my-4 text-white bg-dark border-bottom border-bottom-dark rounded-5 shadow-sm p-3">
   <div class="row">
    <div class="col-sm-12 col-md-12 col-xl-12 text-primary">
        <table id="datatable_users" class="table fs-8">
            <thead>
                <tr>
                    <th> # </th>
                    <th>Nome</th>
                    <th> CPF </th>
                    <th> Placa </th>
                    <th> Carro </th>
                    
                </tr>
            </thead>
            <tbody id="tableBody_users"></tbody>
        </table>
    </div>
  </div>   
</body>
</html>