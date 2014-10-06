<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form method="request" action="">
		Nota1
		<input type="text" name="nota1">
		Nota2
		<input type="text" name="nota2">
		<input type="submit">
	</form>

	<?php 
	$nota1 = str_replace(",",".",$_REQUEST['nota1']);
	$nota2 = str_replace(",",".",$_REQUEST['nota2']);
	
	$media = number_format(($nota1 + $nota2)/2,"2",",",".");
	if($media >= 7){
		echo "aprovado ",$media;
	}
	else if(($media >=5) && ($media <= 6)){
		echo "recuperacao ",$media;
	}
	else{
		echo "reprovado ",$media;
	}
	?>
</body>
</html>