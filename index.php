<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="overlay">
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      
        <form method="post" action="./Logica/inicio.php">
               <div class="con">
          <div class="form-outline mb-4">
          <header class="head-form">
               <h2>Log In</h2>
               <p>Ingrese con su usuario y contraseña</p>
            </header>
          <label class="form-label" for="form3Example3">Usuario</label>
          <br>
          <span class="input-item">
                  <i class="fa fa-user-circle"></i>
               </span>
            <input type="text" name="usuario" id="form3Example3" class="form-input"
              placeholder="Ingrese el nombre de usuario" />
          </div>
          <div class="form-outline mb-3">
          <label class="form-label" for="form3Example4">Password</label>
          <br>
          <span class="input-item">
                  <i class="fa fa-key"></i>
               </span>
            <input type="password" name="password" id="form3Example4" class="form-input"
              placeholder="Ingrese la contraseña" />
            
          </div>

          <div class="text-center text-lg-start mt-4 pt-2 ">
            <button type="submit" class="log-in">Ingresar</button>
          </div>
          <div class="other">
          <button class="btn submits frgt-pass">Olvido su contraseña</button>
                <button class="btn submits sign-up"><a href="formNewUser.php" >Registrarse
                     <i class="fa fa-user-plus" aria-hidden="true"></i>
               </button>
          </div>
          </div>
        </form>
        <div class="alert alert-info" role="alert" id="res">
        ... ANIMO Animo animo :3
      </div>
      </div>
    </div>
  </div>
  </div>
</section>
</body>
</html>