<?php
	$nom = strip_tags($_POST['nom']);
	$prenom = strip_tags($_POST['prenom']);
	$mail = strip_tags($_POST['mail']);
	$sujet = strip_tags($_POST['sujet']);
	$message = strip_tags($_POST['message']);
	$to = "bmikdaam@gmail.com";
	$html = '
	<html>
		<head>
			<title>Visite sur mon site personnel</title>
		</head>
		<body>
			<p>'.$message.'</p>
		</body>
	</html>
	';
	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // En-têtes additionnels
    $headers[] = 'To: Mikdaam <bmikdaam@gmail.com>';
    $headers[] = 'From: '.$prenom.' '.$nom.' '.$mail.'';

    // Envoi
    mail($to, $sujet, $html, implode("\r\n", $headers));
		header("Location: index.html");
?>
