<!doctype html>
<html>
  <head> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
 
    <title>Login</title> 
  </head>
  
  <body>
   <br> <br> <br> <br> <br> <br>
   <div class= "container rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded w-50 p-3 " >
   
  <form  action='ProcessamentoL.php' method='POST'>
  
    <h1 class="h3 mb-3 fw-normal">Por favor faça o Login</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name='conta' >
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password "name='conta'>
      <label for="floatingPassword">Senha</label>
    </div>
   
    <input class="btn btn-primary w-100 py-2" type="submit" value="login">     
 
  </div>
 </div>
 </form>
    </body>
</html>
