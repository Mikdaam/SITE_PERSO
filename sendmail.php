<?php
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$sujet = $_POST['sujet'];
	$message = $_POST['message'];
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
		echo "How are you?";
?>
