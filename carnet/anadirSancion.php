<?php
session_start();
include 'includes/header.php';
include 'funciones/funciones.php';
comprobarVariablesSesion();
if ($_SESSION['perfil']!="PRO"||!isset($_GET['alu'])) {
	header("Location: index.php");
}
?>

<div class="row center" style="border-radius: 2%;">
	<div class="col s12 center">
		<h4>Añadir Sanción</h4>
	</div>
	<div class="col s12">
		<div class="row">
			<form action="crearSancion.php" method="post" accept-charset="utf-8">
				<div class="col s6 m4">
					<label>Fecha</label>
					<input type="date"  name="fecha" placeholder="Fecha"  value="<?php echo date('Y-m-d'); ?>">
				</div>
				<div class="col s6 m4">
					<label>Fecha Comunicación</label>
					<input type="date"  name="fechaComunicacion" placeholder="Fecha Comunicación"  value="<?php echo date('Y-m-d'); ?>">
				</div>
				<div class="col s6 m4">
					<label>Fecha Confirmación</label>
					<input type="date"  name="fechaConfirmacion" placeholder="Fecha Confirmación"  value="<?php echo date('Y-m-d'); ?>">
				</div>
				<div class="col s6 m4">
					<label>Fecha Inicio</label>
					<input type="date"  name="fechaInicio" placeholder="Fecha Inicio"  value="<?php echo date('Y-m-d'); ?>">
				</div>
				<div class="col s6 m4">
					<label>Fecha Final</label>
					<input type="date"  name="fechaFinal" placeholder="Fecha Final"  value="<?php echo date('Y-m-d'); ?>">
				</div>
				<div class="input-field col s12 m6">
					<textarea id="Sancion" name="Sancion" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="Sancion">Sanción</label>
				</div>
				<div class="input-field col s12 m6">
					<textarea id="observaciones" name="observaciones" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="observaciones">Observaciones</label>
				</div>
				<div class="input-field col s12 m6">
					<textarea id="Evaluacion" name="Evaluacion" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="Evaluacion">Evaluación</label>
				</div>
				<div class="input-field col s6 m4">
					<input  id="puntos" name="puntos" type="number" min="0" max="10" value="0" class="validate">
					<label for="puntos">Puntos 0-10</label>
				</div>
				<div class="col s6 m4">
					<label for="tipo">Tipo</label>
					<p>
						<input name="tipo" type="radio" id="Comunicacion"  value="Comunicacion" checked/>
						<label for="Comunicacion">Comunicación</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Expulsion" value="Expulsion"   />
						<label for="Expulsion">Expulsión</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Horas_AC" value="Horas AC"   />
						<label for="Horas_AC">Horas AC</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Jornadas_AC" value="Jornadas AC"   />
						<label for="Jornadas_AC">Jornadas AC</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Otras" value="Otras"   />
						<label for="Otras">Otras</label>
					</p>
				</div>
				<div class="col s6 m4">
					<label for="estado">Estado</label>
					<p>
						<input name="estado" type="radio" id="En_curso"  value="En curso" />
						<label for="En_curso">En curso</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Comunicada"  value="Comunicada"  />
						<label for="Comunicada">Comunicada</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Confirmado"  value="Confirmado" />
						<label for="Confirmado">Confirmado</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Iniciada"  value="Iniciada" checked/>
						<label for="Iniciada">Iniciada</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Finalizado"  value="Finalizado" />
						<label for="Finalizado">Finalizado</label>
					</p>
				</div>
				<?php
				if (isset($_GET['alu'])) {
					cargarPartes($_SESSION["idAlu"]);
				}
				else
				{
					cargarPartes($_SESSION["id"]);
				}

				echo '<div class="col s6 left"><br>';
				if (isset($_GET['alu'])) {
					echo '<a href="sancionParte.php?alu='.base64_encode($_SESSION["idAlu"]).'" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></a></div>';
				}
				else {
					echo '<a href="sancionParte.php?alu='.base64_encode($_SESSION["id"]).'" class="btn-floating btn-large waves-effect waves-light blue darken-3"><i class="material-icons">undo</i></a></div>';
				}
				?>
				<div class="col s6 right">
					<br><br>
					<button class="btn waves-effect waves-light" type="submit" name="anadirSancion">Enviar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
include 'includes/footer.php';
?>
