<!DOCTYPE HTML>
<html>
<head>

	<meta charset="UTF-8">
	<title>Project Converter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Ajout de Bootstrap à partir du CDN-->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	

	<!--Ajout de W3.CSS à partir du CDN-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!--Pour utiliser les icônes Font Awesome avec Bootstrap 4 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">

	<!--Fichier CSS de la page-->
    <link rel="stylesheet" href="styles/main.css" />	
    <?php
	session_start();

		$degresC = $_POST["degres"];	
		$degresF = ($degresC * 1.8) +32;
		echo $degresC ."°C = ". $degresF."°F";
								
						
        ?>
</head>
<body>
	<div class="w3-container w3-white w3-center">
		<h1 id="titre">Project Converter</h1>
	</div>
	<br>

	<div class="w3-row">
		<div class="w3-quarter w3-container">
		&nbsp;
		</div>
		<div class="w3-half w3-light-grey w3-border w3-card-4">
			<div class="w3-container w3-blue w3-center">
				<h2>Converter Page</h2>
			</div>
			<br><br>
			<form class="w3-container" action="" method="post">
				
				<br>
				<label class="w3-text-vert">Valeur en °C</label>
				<input class="w3-input w3-text-blue" type="" name="degres" values='<?php echo $degresC;?>' placeholder="Entrez la valeur de la temperature en °C" autofocus>
				<br>
				<div id="button">
				<a href=""><button id="btn1" type="submit" class="w3-btn w3-teal w3-round-large w3-hover-green w3-medium">&nbsp;&nbsp; Valider</button></a>
				
				<a href=""><button id="btn2" type="submit" name="reset"  value="reset" class="w3-btn w3-black w3-round-large w3-hover-green w3-medium"></i>&nbsp;&nbsp; Reset</button></a>
				<br><br>
				</div>
				<div class="w3-blue w3-text-white">
					<input class="w3-input" type="" name="degres" values=''  placeholder="<?php
							$degresC = $_POST["degres"];	
							$degresF = ($degresC * 1.8) +32;
							echo "                                                 ".$degresC ."°C = ". $degresF."°F";								
						?>" disabled>									
				</div>
            </form>
            <br>
           
		</div>
		
	</div>
</body>
</html>