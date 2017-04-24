		</div>
		<?php
if($_SESSION['perfil']!="invitado"){?>
<div class="col s1 m1 l1 center">
	<a class="btn light-blue darken-1" href="cerrarSesion.php">Cerrar Sesión<i class="material-icons right">exit_to_app</i>
	</a>
</div>
<?php
}
?>
	</main>
	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
