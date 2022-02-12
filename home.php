<?php
	include 'header.php';

	//$connect = mysqli_connect("localhost", "root", "Senha1234", "sistemalogin");

	
?>

	<body>
		<h1 class="h1_cadastro">Cadastrar Usuário</h1>
		<div class="d_cadastro">
		<form id="f_user" class="f_cadastro" action="home.php">

			<label class="l_cadastro">Nome:</label>
			<input class="i_cadastro" name="Nome">

			<label class="l_cadastro">Telefone:</label>
			<input class="i_cadastro" name="Telefone">

			<label class="l_cadastro">Logadouro:</label>
			<input class="i_cadastro" name="Logadouro">

			<label class="l_cadastro">Complemento:</label>
			<input class="i_cadastro" name="Complemento">

			<label class="l_cadastro">Bairro:</label>

			<select class="s_cadastro" name="PortoCanoa">
		      <option value="porto_canoa">Porto Canoa</option>
		      <option value="cidade_pomar">Cidade Pomar</option>
		      <option value="el_dourado">El Dourado</option>
		      <option value="planicie_da_serra">Planície da Serra</option>
		      <option value="tubarao">Tubarão</option>
		      <option value="solar_do_porto">Solar do Porto</option>
		      <option value="serra_dourada1">Serra Dourada I</option>
		      <option value="serra_dourada2">Serra Dourada II</option>
		      <option value="serra_dourada3">Serra Dourada III</option>
		      <option value="mata_da_serra">Mata da Serra</option>
		      <option value="colina_de_laranjeiras">Colina de Laranjeiras</option>
		      <option value="barcelona">Barcelona</option>
		    </select>

		    <button class="btn-cadastrar" type="submit">Cadastrar</button>

		</form>
	</div>
	</body>
</html>
