<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="verbos.css">
</head>
<body>

<?php
$irregularVerbs=array(
  array("Arise","Arose","Arisen","Surgir"),
  array("Awake","Awoke","Awoken","Despertarse"),
  array("Be","Was","Been","Ser/Estar"),
  array("Bear","Bore","Borne","Soportar"),
  array("Beat","Beat","Beaten","Golpear"),
  array("Become","Became","Become","Llegar a ser"),
  array("Begin","Began","Begun","Empezar"),
  array("Bend","Bent","Bent","Doblar"),
  array("Bet","Bet","Bet","Apostar"),
	array("Bid","Bid","Bid","Pujar"),
	array("Bind","Bound","Bound","Encuadernar"),
	array("Bite","Bit","Bitten","Morder"),
	array("Bleed","Bled","Bled","Sangrar"),
	array("Blow","Blew","Blown","Soplar"),
	array("Break","Broke","Broken","Romper"),
	array("Breed","Bred","Bred","Criar"),
	array("Bring","Brought","Brought","Traer"),
	array("Build","Built","Built","Construir"),
	array("Burn","Burnt","Burnt","Quemar"),
	array("Burst","Burst","Burst","Estallar"),
	array("Buy","Bought","Bought","Comprar"),
	array("Cast","Cast","Cast","Tirar"),
	array("Catch","Caught","Caught","Coger")
	);
echo "<div id='verbosForm'>";

define('HUECOS', 2);
define('FILAS', 4);
$array = array();
$indices = array();
$respuestas = array();
$lError = array();
$color = "#000000";
$errorEnviarNivel = false;
$lErrorEnviarNivel = "";
$valorInput = "";
$aciertos=0;

if (isset($_POST['enviarNivel'])) {
    if ($_POST['nivel'] == 'Fácil')
        $numHuecos = 1;
    elseif ($_POST['nivel'] == 'Medio')
        $numHuecos = 2;
    else
        $numHuecos = 3;
    if (!filter_var($_POST['filas'], FILTER_VALIDATE_INT) || $_POST['filas'] > 50) {
        $errorEnviarNivel = true;
        $lErrorEnviarNivel = "Tiene que intoducir un número entre 0 y 50";
    } else {
        $numFilas = test_input($_POST['filas']);
        for ($i = 0; $i < $numFilas; $i++) {
            for ($j = 0; $j < $numHuecos; $j++) {
                do {
                    $numAlea = rand(0, 3);
                } while (in_array($numAlea, $array));
                $array[$j] = $numAlea;
            }
            do {
                $numAlea = rand(0, count($irregularVerbs) - 1);
            } while (in_array($numAlea, $indices));
            $indices[$numAlea] = $array;
        }
    }
}

echo "<h2>Verbos irregulares en inglés</h2>";
echo "<form method='post' name='verbos' action='verbos.php'>";

if ((!isset($_POST['enviarNivel']) && !isset($_POST['comprobar'])) || $errorEnviarNivel || isset($_POST['volver'])) {
    echo "Seleccione dificultad <select name='nivel'>
    <option>Fácil</option>
    <option>Medio</option>
    <option>Difícil</option>
    </select><br><br>
              Seleccione número de verbos <input name='filas' type='number' max='50' min='0'/><span style='color: #A10000'>$lErrorEnviarNivel</span><br>
    <br/><input type='submit' name='enviarNivel'>";
}

if(isset($_POST['comprobar']))
    $indices=$_POST['hueco'];

if ((isset($_POST['comprobar']) || isset($_POST['enviarNivel'])) && !$errorEnviarNivel) {
    echo "<table><tr>";
    echo "<td>Infinitivo</td>";
    echo "<td>Pasado</td>";
    echo "<td>Participio</td>";
    echo "<td>Español</td></tr>";
    foreach ($indices as $index => $valor) {
        echo "<tr>";
        for ($i = 0; $i < 4; $i++) {
            if (isset($_POST['comprobar'])) {
                $condicion = array_key_exists($i, $valor);
                if ($condicion) {
                    $valorUsuario = $valor[$i];
                    if ($valorUsuario == $irregularVerbs[$index][$i]) {
                        $color = "#2AA644";
                        $valorInput = $irregularVerbs[$index][$i];
                        $aciertos++;
                    } else {
                        $color = "#A10000";
                        $valorInput = $indices[$index][$i];
                    }
                }
            } else
                $condicion = in_array($i, $valor);
            if ($condicion) {
                echo "<td> <input type='text' name='hueco[$index][$i]' value='$valorInput'  style='color: $color;'/>";
            } else
                echo "<td>" . $irregularVerbs[$index][$i] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    if(isset($_POST['comprobar']))
        echo "Aciertos: ".$aciertos. "<br/>";
      echo"<div><input type='submit' name='comprobar' value='Comprobar'> <input type='submit' name='volver' value='Inicio'></div></form>";
}
echo "</div></body></html>";


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!-- fin de código -->
<br><br>
<a href="ver.php?src=
<?php echo basename($_SERVER['PHP_SELF'])?>">Ver código</a>
