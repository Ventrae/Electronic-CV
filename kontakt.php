<!DOCTYPE html>	
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Filip Dobrzyniewicz</title>
	<meta name="description" content="Zatrudnij programistę!">
	<meta name="keywords" content="programista, Filip, Dobrzyniewicz, php, html, css, rwd, javascript, mysql, psql, ajax, jquery">
	<meta name="author" content="Filip Dobrzyniewicz">
	<link rel="icon" type="image/webp" href="resources/icon.webp">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/fontello.css">
	<link rel="stylesheet" href="/css/style_kontakt.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa|Exo" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
</head>
<body>

	<?php
		
		if(isset($_POST['msg'])){	
			if($_POST['msg_name']!=NULL) {
				if($_POST['msg_mail']!=NULL) {
					if($_POST['msg']!=NULL) {
						
						require_once('PHPMailer/PHPMailerAutoload.php');
						require_once "config.php";
			
						$mail->Send();	
						echo "<script>alert(\"Twoja wiadomość została wysłana pomyślnie. Odpowiem wkrótce.\");</script>";

					}
					else echo "<script>alert(\"Twoja wiadomość nie została wysłana, wpisz treść.\");</script>";
				}
				else echo "<script>alert(\"Twoja wiadomość nie została wysłana, podaj mail kontaktowy.\");</script>";
			} 
			else echo "<script>alert(\"Twoja wiadomość nie została wysłana, przedstaw się.\");</script>";
		}
		
	?>

	<div class="container-fluid">
		
		<nav class="row menu sticky-top no-gutters">
			<ul class="col-12 row no-gutters">
				
				<a href="index.html" class="col-6 col-md-3 menu_button">
					<li>
						<i class="icon-home"></i> Home
					</li>
				</a>

				<a href="omnie.html" class="col-6 col-md-3 menu_button">
					<li>
						<i class="icon-omnie"></i> O mnie
					</li>
				</a>
				
				<a href="portfolio.html" class="col-6 col-md-3 menu_button">
					<li>
						<i class="icon-portfolio"></i> Portfolio
					</li>
				</a>
			
				<a href="kontakt.php" class="col-6 col-md-3 menu_button">
					<li>
						<i class="icon-kontakt"></i> Kontakt
					</li>
				</a>

			</ul>
		</nav>
		
		<header class="col-12 baner">

			<div class="col-12 col-lg-8 baner_text">
				<h1>Filip Dobrzyniewicz</h1>
				<h6>Skontaktuj się ze mną!</h6>
			</div>
			
			<div class="d-none d-lg-block col-lg-4 baner_image">
				<img src="resources/ja.webp" height="100%"/>
			</div>
	
		</header>		
		
		<main>
			
			<section data-aos="zoom-in" data-aos-duration="1250" data-aos-once="true" class="row no-gutters">
			
					<div class="col-10 mx-auto paragraph_block_title">
						<strong data-aos="fade-up" data-aos-duration="500" data-aos-once="true" >Wyślij mi wiadomość!</strong>
					</div>
					
					<div class="col-10 mx-auto paragraph_block_message">
						<form action="kontakt.php" method="POST" id="msg_form" class="row no-gutters">
						
							<div class="offset-md-1"></div>
							<input type="text" name="msg_name" class="mx-auto col-10 col-md-5 form_name" placeholder="Podaj swoje imie i nazwisko!" onfocus="this.placeholder=''" onblur="this.placeholder='Podaj swóje imię i nazwisko!'"/>
							<div class="offset-md-1"></div>
							<input type="email" name="msg_mail" class="mx-auto col-10 col-md-4 form_mail" placeholder="Podaj swój email!" onfocus="this.placeholder=''" onblur="this.placeholder='Podaj swój email!'"/>
							<div class="offset-md-1"></div>
						
							<div class="offset-md-1"></div>
							<textarea form="msg_form" name="msg" class="mx-auto mb-3 mb-md-0 col-10 col-md-10 form_msg" placeholder="Zapytaj o coś lub złóż mi propozycję biznesową!" onfocus="this.placeholder=''" onblur="this.placeholder='Zapytaj o coś lub złóż mi propozycję biznesową!'"></textarea>
							<div class="offset-md-1"></div>
						
							<div class="offset-md-1"></div>
							<div class="g-recaptcha col-12 col-md-5 mx-auto form_captcha" data-sitekey="6Le442cUAAAAAK8a85eahUnzS24I8_0ZJqmYr_PL"></div>
							<div class="offset-md-1"></div>
							<div class="offset-md-1"></div>
							<input type="submit" value="Wyślij" class="mx-auto col-8 col-md-2 form_submit" />								
							<div class="offset-md-1"></div>
						
						</form>								
					</div>					
				
			</section>	
		
			<section data-aos="zoom-in" data-aos-duration="1250" data-aos-once="true">
			
				<div class="row no-gutters" >
				
						<div class="offset-1"></div>
				
						<div class="col-10 paragraph_block_title">
							<strong>Inne odnośniki do kontaktu:</strong>
						</div>	
						
						<div class="offset-1"></div>
						
				</div>	
				
				<div class="row no-gutters">
				
					<div class="offset-1"></div>
				
					<div class="col-10 row no-gutters paragraph_block_text" id="contacts">			

						<div data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" data-aos-once="true" class="col-5 col-md-3 mx-auto contact_button" onclick="window.open('https://www.facebook.com/Ventrae','_blank');" target="_blank" id="fb">
							<i class="icon-facebook"></i>
						</div>
						
						<div data-aos="fade-up" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="col-5 col-md-3 mx-auto contact_button" onclick="location.href='mailto: ventrae@gmail.com';" id="gm">
							<i class="icon-gmail "></i>
						</div>
					
						<div data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-once="true" class="col-5 col-md-2 mx-auto contact_button" onclick="location.href='tel: +48-697-279-730';" id="ph">
							<i class="icon-phone "></i>
						</div>
						
						<div data-aos="fade-up" data-aos-duration="500" data-aos-delay="800" data-aos-once="true" class="col-5 col-md-3 mx-auto contact_button" onclick="window.open('https://github.com/Ventrae?tab=repositories','_blank');" id="gh">
							<i class="icon-github "></i>
						</div>				
						
					</div>
					
				</div>						
				
			
			</section>

		</main>

		<aside>
			<a id="CV_link" href="Curriculum_Vitae.pdf" class="d-none d-lg-flex" target="_blank">
				<div id="CV_round">
					CV
				</div>
			</a>
		</aside>
		
		<footer>
		
			<div class="footer">
				Filip Dobrzyniewicz &copy Wszystkie prawa zastrzeżone. Internetowe CV programisty <i class="icon-smile"></i><br/>
				<span class="d-inline d-lg-none" style="font-size: 12px">Oglądasz okrojoną wersję strony (mobilną) - użyj większego urządzenia aby zobaczyć zdjęcia!</span>
			</div>
			
		</footer>			
		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>	
	<script src="js/bootstrap.min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	
	<div class="shade"></div>
	
</body>
</html>