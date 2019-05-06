<?php
				
				$secret_key = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
		
				$mail = new PHPMailer();
				$mail->isSMTP();
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'ssl';
				$mail->Host = 'smtp.gmail.com';
				$mail->Port = '465';
				$mail->isHTML();
				$mail->Username = 'ventrae@gmail.com';
				$mail->Password = 'XXXXXXXXXXXXXXXX';
				$mail->SetFrom('ventrae@gmail','[No-reply - ICV]');
				$mail->Subject = 'Zapytanie biznesowe!';
				$mail->Body = "
				<html>
					<head>
						<meta charset='utf-8'>
						<style>
							#title {
								width: 100%;
								padding: 20px 0;
								background-color: darkblue;
								color: silver;
								text-align: center;
								font-size: 40px;
							}
							
							#autor {
								width: 100%;
								padding: 15px 0;
								text-align: center;
								background: url('/what-the-hex.png');
								border-bottom: 6px solid darkblue;
								font-size: 26px;
								border-radius: 6px;
							}
						
							#tresc {
								margin-left: auto;
								margin-right: auto;
								width: 65%;
								border-left: 6px solid darkblue;
								border-right: 6px solid darkblue;								
								border-bottom: 6px solid darkblue;								
								background: url('/funky-lines.png');
								text-align: center;
								padding-top: 25px;
								padding-bottom: 25px;
								padding-left: 140px;
								padding-right: 140px;
								border-radius: 6px;
							}
							
							
						
						
						</style>
					</head>
					<body>
						<div id='title'>
							Zawiadomienie biznesowe!
						</div>
						<div id='autor'>".$_POST['msg_name']." pisze:</div>
						<div id='tresc'>\"".$_POST['msg']."\" <br/><br/> <strong>Kontakt:</strong> ".$_POST['msg_mail']."</div>
						
						
						
						
					</body>
				</html>";
				
				
				$mail->AddAddress('ventrae@gmail.com');
				
?>