<html>
    <head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,200,0,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>
        Caminhão
</title>
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
    <a class="navbar-brand">Home</a>
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

 
<br>
 <br>
 <center>
 
 <a class="text-dark btn btn-outline-Dark bg-white">Seus Agendamentos</a>

 

 <br>
 <br>
  
 
  
<div class="container my-4 text-white bg-dark border-bottom border-bottom-dark rounded-5 shadow-sm p-3">
   <div class="row">
    <div class="col-sm-12 col-md-12 col-xl-12 text-primary">
        <table id="datatable_users" class="table fs-8">
            <thead>
                <tr>
                    <th> # </th>
                    <th>Veiculos</th>
                    <th> Data de retirada </th>
                    <th> hora de retirada </th>
                    <th> Nome </th>
                    
                </tr>
            </thead>
            <tbody id="tableBody_users"></tbody>
        </table>
    </div>
  </div>   
</body>
</html>

<script>
    let dataTable;
    let dataTableIsInitialized=false;

    const dataTableOptions={
        pageLength:1,
        autoWidth:true,
        destroy:true,
        language:{
            search:         "Buscar",
            info:           "Mostrando _START_ a _END_ de um total de _TOTAL_  entradas",
            infoEmpty:      "Mostrando 0 a 0 de um total 0 entradas",
            infoFiltered:   "(filtrando from _MAX_ total entries)",
            lengthMenu:     "_MENU_ do total de entradas", 
            loadingRecords: "Carregando...",
            zeroRecords:    "No matching records found",
            paginate:{
                first:      "Primeiro",
                last:       "Ultimo",
                next:       "Proximo",
                previous:   "Anterior"
        }
    },
    }

    const initDateTable=async()=>{
        if (dataTableIsInitialized){
        dataTable.destroy(); 
        }
        await listUsers();
        dataTable=$("#datatable_users").DataTable(dataTableOptions);
        dataTableIsInitialized=true;
    };

    const listUsers=async()=>{
    try{
        const response=await fetch("home.json");
        const users= await response.json();
        
        let content='';
        users.forEach((user,index)=>{
            content+= "<tr>" +
                "<td>" + (index + 1)  + "</td>" +
                "<td>" + (user.veiculo)  + "</td>" +
                "<td>" + (user.dr1)  + "</td>" +
                "<td>" + (user.hr1)  + "</td>" +
                "<td>" + (user.nome)  + "</td>" +
            "</tr>";
        });
        tableBody_users.innerHTML=content;
    }catch(ex){
        alert(ex);
    }  
    };

    window.addEventListener("load", async () => {
    });
</script>
 
  
 </div>
 <a class="text-dark btn btn-outline-Dark bg-primary" href="agen.php">Página de Agendamento</a>
 </center>  
     


</body>
</html>