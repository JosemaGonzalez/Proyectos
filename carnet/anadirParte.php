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
		<h4>Añadir Parte</h4>
	</div>
	<div class="col s12">
		<div class="row">
			<form action="crearParte.php" method="post" accept-charset="utf-8">
				<div class="col s6 m4">
					<input type="date"  name="fecha" placeholder="Fecha">
				</div>
				<div class="col s6 m4">
					<input type="date"  name="fechaComunicacion" placeholder="Fecha Comunicación">
				</div>
				<div class="col s6 m4">
					<input type="date"  name="fechaConfirmacion" placeholder="Fecha Confirmación">
				</div>
				<div class="input-field col s12 m6">
					<textarea id="Descripcion" name="Descripcion" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="Descripcion">Descripción</label>
				</div>
				<div class="input-field col s12 m6">
					<textarea id="tareas" name="tareas" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="tareas">Tareas</label>
				</div>
				<div class="col s6 m4">
					<input type="time" name="horaSalidaAula" placeholder="Hora salida del aula">
				</div>
				<div class="col s6 m4">
					<input type="time" name="horaLlegadaJefatura" placeholder="Hora llegada a jefatura">
				</div>
				<div class="col s6 m4">
					<input type="time" name="horaLlegadaAulaConvivencia" placeholder="Hora llegada a aula de convivencia">
				</div>
				<div class="col s6 m4">
					<label for="formato">Formato</label>
					<p>
						<input name="formato" type="radio" id="Papel" value="Papel"/>
						<label for="Papel">Papel</label>
					</p>
					<p>
						<input name="formato" type="radio" id="Digital" value="Digital" checked />
						<label for="Digital">Digital</label>
					</p>
				</div>
				<div class="input-field col s12 m6">
					<textarea id="observaciones" name="observaciones" class="materialize-textarea" data-length="255" maxlength="255"></textarea>
					<label for="observaciones">Observaciones</label>
				</div>
				<div class="input-field col s6 m4">
					<input  id="puntos" name="puntos" type="number" min="0" max="10" class="validate">
					<label for="puntos">Puntos 0-10</label>
				</div>
				<div class="col s6 m4">
					<label for="estado">Estado</label>
					<p>
						<input name="estado" type="radio" id="Caducado"  value="Caducado" />
						<label for="Caducado">Caducado</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Comunicado"  value="Comunicado" checked />
						<label for="Comunicado">Comunicado</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Confirmado"  value="Confirmado" />
						<label for="Confirmado">Confirmado</label>
					</p>
					<p>
						<input name="estado" type="radio" id="Iniciado"  value="Iniciado" />
						<label for="Iniciado">Iniciado</label>
					</p>
				</div>
				<div class="col s6 m4">
					<label for="tipo">Tipo</label>
					<p>
						<input name="tipo" type="radio" id="Muy Grave"  value="Muy Grave" />
						<label for="Muy Grave">Muy Grave</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Grave"  value="Grave" />
						<label for="Grave">Grave</label>
					</p>
					<p>
						<input name="tipo" type="radio" id="Leve" value="Leve"  checked />
						<label for="Leve">Leve</label>
					</p>
				</div>
				<div class="col s12">
				<br><br>
					<button class="btn waves-effect waves-light" type="submit" name="anadirParte">Enviar
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
