		</div>
		<?php
if($_SESSION['perfil']!="invitado"){?>
<div class="col s1 m1 l1 center" id="cerrar">
	<a class="btn-floating btn-large red lighten-1	 waves-effect waves-light" href="cerrarSesion.php"> <i class="material-icons right">exit_to_app</i>
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
