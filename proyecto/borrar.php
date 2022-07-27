<?php
session_start();
?>
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title>
     Banco de MetroCiudad
   </title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
   <!-- CSS Files -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="assets/demo/demo.css" rel="stylesheet" />
 </head>
 
 <body class="">
   <div class="wrapper ">
     <div class="sidebar" data-color="white" data-active-color="danger">
       <div class="logo">
         <a  class="simple-text logo-mini">
           <div class="logo-image-small">
             <img src="assets/img/logo-small.png">
           </div>
         </a>
         <a  class="simple-text logo-normal">
         Bienvenido <?php echo $_SESSION['usuario'][0]; ?>
         </a>
       </div>
       <div class="sidebar-wrapper">
           <ul class="nav">
             <li class="active ">
               <a href="./dashboard.php">
                 <i class="nc-icon nc-bank"></i>
                 <p>Dashboard</p>
               </a>
             </li>
             <li>
               <a href="./depositar.php">
                 <i class="nc-icon nc-diamond"></i>
                 <p>Depositar</p>
               </a>
             </li>
             <li>
               <a href="./retirar.php">
                 <i class="nc-icon nc-tile-56"></i>
                 <p>Retirar</p>
               </a>
             </li>
             <li>
               <a href="./transacciones.php">
                 <i class="nc-icon nc-caps-small"></i>
                 <p>Transacciones</p>
               </a>
             </li>
             <li>
               <a href="./borrar.php">
                 <i class="nc-icon nc-single-02"></i>
                 <p>Borrar Cuenta</p>
               </a>
             </li>
           </ul>
         </div>
     </div>
     <div class="main-panel">
       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
         <div class="container-fluid">
           <div class="navbar-wrapper">
             <div class="navbar-toggle">
               <button type="button" class="navbar-toggler">
                 <span class="navbar-toggler-bar bar1"></span>
                 <span class="navbar-toggler-bar bar2"></span>
                 <span class="navbar-toggler-bar bar3"></span>
               </button>
             </div>
             <a class="navbar-brand" href="javascript:;">Información de la cuenta</a>
           </div>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-bar navbar-kebab"></span>
             <span class="navbar-toggler-bar navbar-kebab"></span>
             <span class="navbar-toggler-bar navbar-kebab"></span>
           </button>
           <div class="collapse navbar-collapse justify-content-end" id="navigation">
             <ul class="navbar-nav">
               <li class="nav-item btn-rotate dropdown">
                 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="nc-icon nc-settings-gear-65"></i>
                   <p>
                     <span class="d-lg-none d-md-block">Some Actions</span>
                   </p>
                 </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.html">Logout</a>
                 </div>
               </li>
             </ul>
           </div>
         </div>
       </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="assets/img/damir-bosnjak.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="assets/img/logo-small.png" alt="...">
                    <h5 class="title"><?php echo $_SESSION['usuario'][0]; ?></h5>
                  </a>
                  <p class="description">
                    @<?php echo $_SESSION['usuario'][0]; ?>
                  </p>
                </div>
                <p class="description text-center">
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <h5>$<br><small><?php echo $_SESSION['usuario'][2]; ?></small></h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    <div class="row">
                      <div class="col-md-2 col-2">
                        <div class="avatar">
                        </div>
                      </div>
                      <div class="col-ms-7 col-7">
                        <br />
                        <span class="text-danger"><small> </small></span>
                      </div>
                      <div class="col-md-3 col-3 text-right">   
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Borrar Cuenta</h5>
              </div>
              <div class="card-body">
                <form action="borrar_app.php" method="post">
                <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">No.cuenta</label>
                        <input type="text" class="form-control" name="cuenta">
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>VERIFICAR</label>
                        <input type="text" class="form-control" placeholder="ACEPTO BORRAR CUENTA" name='acepto'>
                      </div>
                    </div>
                  <button type="submit" class="btn btn-primary btn-danger" name='borrar'>BORRAR CUENTA</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, Hecho con <i class="fa fa-heart heart"></i> por Guillermo/Román
              </span>
            </div>
          </div>
        </div>
      </footer>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src=".assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
</body>

</html>