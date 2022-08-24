<?php 
session_start();
include("connexion_bdd.php");
	
$rq="SELECT * FROM `LivreDorAnaMike` ORDER BY id DESC";
$query = $pdo->query($rq);
$resultat = $query->fetchAll();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Livre d'or Ana et Mike</title>
<link href="https://fonts.googleapis.com/css?family=Tangerine:400,700&display=swap" rel="stylesheet">	
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jsLivreDor.js"></script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88246207-1', 'auto');
  ga('send', 'pageview');

</script>	
</head>
<body>
	<div class="globalPrevisualisation">
		<div class="titre">
			<h1>Livre d'or<br> Ana & Mike</h1>
		</div>	
		<?php foreach($resultat as $key=>$value){?>
		<div class="previsualisation">
			<div class="Img">
				<img src="<?php echo $resultat[$key]["Image"] ; ?>" width="280" height="auto" alt="">
			</div>
			<div class="Message">
				<p>
					<strong><?php echo ucfirst($resultat[$key]["Prenom"])." ".ucfirst($resultat[$key]["Nom"]); ?></strong> <br><br>
					<?php $messageTexte=str_replace(array("\r\n","\n"),'<br />',$resultat[$key]["Message"]); echo $messageTexte; ?>
				</p>
			</div>
		</div>
		<?php } ?>
	</div>
</body>
</html>