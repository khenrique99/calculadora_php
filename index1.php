<!DOCTYPE HTML>

<HTML>

<HEAD>
	<link rel="stylesheet" href="Estilos/css.css" type="text/css"/>
	<title>CALCULADORA EM PHP</title>
</HEAD>

<BODY>

	<div class="quadrado1">
		<div align="center" class="quadrado2">CALCULADORA SIMPLES</div>
		
		<form method="post" action="index1.php">
			<div class="quadrado3">
					<textarea class="estilo2">
<?php
	$numero1 = 1;
	$numero2 = 2;
	$numero3 = 3;
	$numero4 = 4;
	$numero5 = 5;
	$numero6 = 6;
	$numero7 = 7;
	$numero8 = 8;
	$numero9 = 9;
	$numero0 = 0;
		echo $numero1 + $numero1;
?>
					</textarea>
			</div>

			<div class="quadrado4"><a href="index.php"><input type="button" value="apagar"class="estilo1"> </input></a></div>
			<div class="quadrado5"><input type="button" value="7" class="estilo1"></input></div>
			<div class="quadrado5"><input type="button" value="4" class="estilo1"></input></div>
			<div class="quadrado5"><input type="button" value="1" class="estilo1"></input></div>
			<div class="quadrado6"><input type="button" value="0" class="estilo1"></input></div>
			<div class="quadrado7"><input type="button" value="8" class="estilo1"></input></div>
			<div class="quadrado8"><input type="button" value="5" class="estilo1"></input></div>
			<div class="quadrado8"><input type="button" value="2" class="estilo1"></input></div>
			<div class="quadrado9"><input type="button" value="/" class="estilo1"></input></div>
			<div class="quadrado10"><input type="button" value="9" class="estilo1"></input></div>
			<div class="quadrado10"><input type="button" value="6" class="estilo1"></input></div>
			<div class="quadrado10"><input type="button" value="3" class="estilo1"></input></div>
			<div class="quadrado10"><input type="button" value="," class="estilo1"></input></div>
			<div class="quadrado11"><input type="submit" value="=" class="estilo1"></input></div>
			<div class="quadrado12"><input type="button" value="+" class="estilo1"></input></div>
			<div class="quadrado13"><input type="button" value="-" class="estilo1"></input></div>
			<div class="quadrado14"><input type="button" value="*" class="estilo1"></input></div>
		</form>
		
	</div>

</BODY>

</HTML>