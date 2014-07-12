<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>

		<title>Test unitaire</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link href="../css/global.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="header">
			<h1>Test - Modèles</h1>
		</div>
		<div id="contenu">
			<?php 
                        
                        echo "<h2>Méthode getVilles()</h2>";
				require_once (BASE.'/modeles/Villes.class.php');
				$oVilles = new Villes();
				$aVilles = $oVilles->getVilles();
				var_dump($aVilles);
			
                        echo "<h2>Méthode getAnnonces()</h2>";
				require_once (BASE.'/modeles/Annonces.class.php');
				$oAnnonces = new Annonces();
				$aAnnonces = $oAnnonces->getAnnonces();
				var_dump($aAnnonces);
                        ?>
                    
		</div>
		<div id="footer">
                    
		</div>
	</body>
</html>








