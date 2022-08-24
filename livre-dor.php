<?php 
session_start();

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
	<?php 
			$date=date('Ymd');
			if($date<=20190915 && !isset($_GET["retour"]) && !isset($_GET["add"])){ 
		?>
	<div class="globalMessagePopup">
		<div class="messagePopup">
			
				<span><strong>X</strong></span>
				Bonjour à toutes et à tous,<br>
				<br>
				pour l’occasion du mariage <br>de Ana et Mike,
				vous pouvez trouver via cette page un Livre d’or numérique,
				qui une fois constitué leur sera imprimé sous forme de book.<br><br>
				Vous devez à chacun de vos messages y lier une photo en référence avec nos tout jeunes&nbsp;mariés.<br>
				Une même personne peut poster plusieurs messages.
				<br>
				<br>
				N’hésitez pas à être créatif et surtout à propager ce lien à toutes les connaissances du couple.<br>
				<br>Ce formulaire sera actif jusqu’au: 15&nbsp;septembre&nbsp;2019.<br>
				<br>
				Merci d’avance et à très vite…<br>
				<br>
				Prévisualiser le book: <a href="previsualisation.php" target="_blank">ici</a><br><br>
				<div style="font-size:11px;">Si vous rencontrez des difficultés à enregistrer votre message contacter: <a href="mailto:contact@mail.fr">contact@mail.fr</a></div>
		</div>
	</div>
	<?php } else if($date>=20190915) { ?>
	<div class="globalMessagePopupEnd">
		<div class="messagePopupEnd">
				Événement terminé...
		</div>
	</div>
		<?php } else if($_GET["add"]=="ok"){
				unset($_SESSION);
			}?>
	<div class="globalLivre">
		
		<div class="livre">
			<span class="info"><i><strong>i</strong></i></span>
			<div class="presentation">
				Ana & Mike<br>
				<span>LIVRE D'OR</span><br>
				<hr>
				Save the date<br>
				<span>17&bull;AOÛT&bull;2019</span>
			</div>
			<div class="form">
				<form action="confirmation.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="nom" placeholder="Nom*" value="<?php echo $_SESSION["nom"]; ?>">
					<input type="text" name="prenom" placeholder="Prenom*" value="<?php echo $_SESSION["prenom"]; ?>">
					<input type="text" name="email" placeholder="Email*" value="<?php echo $_SESSION["email"]; ?>">
					<p class="file">
					<input type="file" name="file" id="file" value="<?php echo $_SESSION["file"]; ?>">
					<label for="file">IMAGE*</label>	
					</p>	
					<textarea name="message" placeholder="Tapez votre message*" ><?php echo $_SESSION["message"]; ?></textarea>
					<button>VALIDER</button>
					<div class="clear"></div>
				</form>
				<?php if($_SESSION["retour"]==true){ ?>
				<div class="retourLivreDor">
					<?php echo $_SESSION["retourMessage"];?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>