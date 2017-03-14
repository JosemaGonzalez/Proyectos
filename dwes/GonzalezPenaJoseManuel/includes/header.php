<!DOCTYPE html>
<html lang="es">
<head>
  <title>Josema González</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    .jumbotron{
      background-color: #fff;
      margin-bottom: 0;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    footer {
      text-align: center;
      background-color: #fff;
      padding: 30px;
    }
    * {
      font-family: sans-serif;
      list-style: none;
      margin: 0;
      padding: 0;
      text-decoration: none;
    }

    .menu > li {
      float: left;
    }

    .menu > li a {
      text-decoration: none;
      background-color: #337AB7;
      color: #FFF;
      display: block;
      border: 1px solid;
      padding: 10px;
    }

    .menu > li a:hover {
      background-color: #286090;
    }

    .menu li .flecha {
      font-size: 10px;
      padding-left: 5px;
      display: none;
    }

    .menu li a:not(:last-child) .flecha {
      display: inline;
    }

    .menu li ul {
      display: none;
      min-width: 140px;
      position: absolute;
    }

    .menu li:hover > ul {
      display: block;
    }

    .menu li {
      position: relative;
    }

    .menu li ul li ul {
      left: 140px;
      top: 0;
      display: none;
    }

  </style>
</head>
<body>
  <div class="jumbotron">
    <div class="container text-center">
    <h2>Gestor de Multas Josema</h2>
