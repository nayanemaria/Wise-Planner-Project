<?php 
session_start();
$id = $_SESSION['id'];
?>
<div class="card-panel" style='border: 1px solid #005274;'>
	<div class='row'>
		<div class='col s12'></div>

		<form action="crud/procartoes.php" method="POST">
			<input type="hidden" name="idusr" value='<?= $id; ?>' required />
			<label>NOME CARTÃO</label>
			<br />
			<input type="text" name="nomecart" required>
			<br />
			<label>NUMERO DO CARTÃO</label>
			<br />
			<input type="number" max="999999999999999999" min="1000000" name="ncart" placeholder="máximo 18 dígitos" required>
			<br />
			<label>DATA DE VENCIMENTO</label>
			<br />
			<input type="date" name="datavenc" required>
			<br />
			<label>LIMITE TOTAL</label>
			<br />
			<input type="number" name="limitetotal" placeholder="1000" required>
			<br />
			<br />
			<button class="waves-effect waves-light btn white colorpri resetbtn" type="submit" name="botao">Enviar
								<i class="material-icons right">send</i>
							</button>
		</form>
	</div>
</div>