<?php include("session.php");
if ($_POST["nom"]=="" || $_POST["prenom"]=="" || $_POST["email"]=="" || $_FILES["file"]["name"]=="" || $_POST["message"]==""){
	header("location: livre-dor.php?retour=erreur");
	$_SESSION["retour"]=true;
	$_SESSION["retourMessage"]="Veuillez remplir tous les champs";
}else {
			 //var_dump($_FILES);
			 // Upload Images
	
			 $dossier = 'uploadImages/';
				
			 if(!is_dir($dossier)){
				   //mkdir($dossier);
				   mkdir($dossier, 0777, true);
				}
			 $search  = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ');
	         $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');
			 $fichier = str_ireplace($search, $replace, $_POST["nom"]."_".uniqid()."_".basename($_FILES['file']['name']));
			 if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)==false) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			 {
				header("location: livre-dor.php");
				$_SESSION["retourMessage"]="Veuillez verifier votre image";
			 }
			
	         // Upload Images
			
	
			 //Injection basse de donnée
	
			
			   $nom=addslashes($_POST["nom"]);
			   $prenom=addslashes($_POST["prenom"]);
			   $email=addslashes($_POST["email"]);
			   $message=addslashes($_POST["message"]);
			   $image="/".$dossier.$fichier;
	
			   include("connexion_bdd.php");
	
			   $rq="INSERT INTO `LivreDorAnaMike` (`Nom`,`Prenom`,`Email`,`Message`,`Image`) VALUES ('$nom','$prenom','$email','$message','$image') " ;
			   $query = $pdo->query($rq);
				
	
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Livre d'or Ana et Mike</title>
<link href="https://fonts.googleapis.com/css?family=Tangerine:400,700&display=swap" rel="stylesheet">	
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="viewport" content="width=device-width, initial-scale=1.0">

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
	<div class="globalLivre">
		<div class="livre">
			<div class="presentation">
				Ana & Mike<br>
				<span>LIVRE D'OR</span><br>
				<hr>
				Save the date<br>
				<span>17&bull;AOÛT&bull;2019</span><br>
			</div>
			<div class="cofirmation">
				<div class="couple">
					<img src="imgs/img_couple.png" width="253" height="242" alt="">
				</div>
				<div class="globalRetour">
					<div class="retour center InlineBlock">
						Message correctement enregistré <a href="previsualisation.php" target="_blank">(voir)</a>
					</div>
					<div class="retourPlus center InlineBlock">
						<a href="livre-dor.php?add=ok"><strong>+</strong></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>