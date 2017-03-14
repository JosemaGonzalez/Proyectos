<!DOCTYPE html>
<html lang="es">
<head>
  <title>Josema González</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="materialize/css/materialize.css">
  <!-- Compiled and minified JavaScript -->
  <script src="materialize/js/jquery-3.1.1.js"></script>
  <script src="materialize/js/materialize.min.js"></script>
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }
    .input-field.col label{
      left: -1.25rem;
      text-align: right;
    }
    .icoGC img{
      width:65px;
      height:65px;
    }
    .icoGC:hover{
      background-color: rgba(0,0,0,0.0)!important;
      cursor: default;
    }
    [type="checkbox"].filled-in:checked+label:after{
      border: 2px solid #1976D2;
      background-color: #1976D2;
    }
    input[type=text]:focus:not([readonly]),input[type=password]:focus:not([readonly]),input[type=email]:focus:not([readonly]){
      border-bottom: 1px solid #039BE5;
      box-shadow: 0 1px 0 0 #039BE5;
    }
    input[type=text]:focus:not([readonly])+label, input[type=password]:focus:not([readonly])+label, input[type=email]:focus:not([readonly])+label{
      color:#039BE5;
    }
    footer a{ font-size: 18px; }
    .respuesta{
      margin-top:160px;
    }
    #experto{
      font-size: 1rem;
      *margin-left: 10px;
    }
    @media (max-width: 600px) {
      #label{
        margin-left: 15px;
      color: #fff !important;}
      #logo-container{
        display: none;
      }
      .icoG{
        width: 55px;
        height: 55px;
        display: none;
      }
      .respuesta{
        margin-top:50px;
      }
    }
  </style>
</head>
<body>
  <main>
    <nav class="light-blue darken-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" class="brand-logo flow-text light-italic left">Sabio GC</a>
        <ul class="right">
          <li><a href="index.php"><i class="material-icons left">home</i>Inicio</a></li>
          <li><a href="login.php"><i class="material-icons left">person</i>Login</a></li>
          <li><a href="gestion.php"><i class="material-icons left">settings</i>Gestión</a></li>
          <li class=".hide-on-small-only"><a class="icoGC .hide-on-small-only">
            <img class="icoG .hide-on-small-only" src="includes/anagrama.jpg" alt="">
          </a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row">
          <div class="col m2"></div>
          <div class="col s12 m12 l12">
