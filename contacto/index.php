<?php
session_start();
require_once "../comons/version_css_js.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#9c1323">
		<meta name="MobileOptimized" content="width">
		<meta name="HandheldFriend" content="true">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="description" content="En Textile realizamos creamos y diseñamos con las mejores telas.">

		<link rel="stylesheet" href="/public/css/home.css">
		<link rel="stylesheet" href="/public/css/about.css">
		<link rel="canonical" href="https://www.textile.com/contacto">
		<link rel="apple-touch-icon" href="/public/icon/favicon.ico">
		<link rel="apple-touch-startup-image" href="/public/icon/favicon.ico">
		<link rel="icon" href="/public/icon/favicon.ico">

		<link
		 rel="stylesheet"
		 href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
		/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

		<title>Maceió textile | Nosotros</title>
		<script type="application/ld+json">
				{
						"@context": "http://schema.org",
						"@type": "LocalBusiness",
						"name": "Maceió textile",
						"image": "https://www.textile.com/public/img/home_textile_logo.webp",
						"telephone": ["55 4631 2410"],
						"address": {
								"@type": "PostalAddress",
								"addressLocality": "Distrito Capital, Caracas - 1010, Venezuela"
						},
						"url": "https://www.textile.com/contacto"
				}
		</script>
</head>

<body>
		<main>
				<?php
				require_once "../comons/bar_top.php";
				require_once "../comons/nav.php";
				require_once "../comons/button_ws.php";
				?>

				<!-- Section Contacto -->
				<div class="banner1">
						<div class="container">
								<div class="content">
										<!-- SECCION FROM -->
										<div class="section_form" id="contact">
												<div class="section_form_form">
														<div class="section_form_form_text">
																<div class="section_form_form_subtitle show_contacto">
																		<p><b>Contacto</b></p>
																</div>
														</div>

														<section class="section_form_form_text_title">
																<header>
																		<h2>¿Quieres un contacto <br> más directo con nuestro equipo?</h2>
																</header>
														</section>

														<div class="section_formulario">
																<div class="form_form">
																		<form class="section_form_inputs" action="/contact/" method="POST">
																				<div class="section_form_sender">
																						<div class="form_form_header">
																								<h2>Hola. ¿Desde donde realiza el envio?</h2>
																								<h3>Remitente</h3>
																						</div>
																						<div class="required">
																								<label class="section_form_inputs_encabezado" for="senderCountry">
																										País/Territorio
																										<input type="text" name="senderCountry" required placeholder="México" />
																								</label>
																								<span>*</span>
																						</div>
																				<div class="other_inputs_information">
																						<div class="other_inputs_information_flex">
																								<div class="required">
																										<label class="section_form_inputs_encabezado" for="senderCompany">
																												Nombre completo o nombre de la empresa
																												<input type="text" name="senderCompany" required placeholder="Empresa" />
																								</label>
																										<span>*</span>
																								</div>

																									 <div class="required">
																						<label class="section_form_inputs_encabezado" for="senderName">
																								Nombre de contacto
																								<input type="text" name="senderName" required placeholder="Nombre y apellido" />
																						</label>
																						<span>*</span>
																				</div>
																						</div>
																						<div class="required">
																					 <label class="section_form_inputs_encabezado" for="senderAdress">
																								Dirección
																								<input type="text" name="senderAdress" placeholder="Dirección" />
																						</label>
																						<span>*</span>
																				</div>

																						<!-- <label class="section_form_inputs_encabezado" for="adress">
																								Dirección 3
																								<input type="text" name="adress" placeholder="Dirección 3" />
																						</label> -->

																						<div class="other_inputs_information_check">
																								 <div class="required">
																										<label class="section_form_inputs_encabezado" for="senderCodePostcard">
																												Código postal
																												<input type="number" name="senderCodePostcard" required placeholder="Código postal" />
																										</label>
																										<span>*</span>
																								</div>

																								<div class="required">
																										<label class="section_form_inputs_encabezado" for="senderCity">
																												Ciudad
																												<input type="text" name="senderCity" required placeholder="Ciudad" />
																										</label>
																										<span>*</span>
																								</div>


																								<label class="section_form_inputs_encabezado" for="senderState">
																										Estado
																										<input type="text" name="senderState" placeholder="Estado" />
																								</label>
																						</div>
																				</div>
																				<div class="other_inputs">
																						<!-- <label class="section_form_inputs_encabezado" for="phone">
																								Tipo de teléfono
																								<select name="select">
																										<option value="oficina" selected>Oficina</option>
																										<option value="casa">Casa</option>
																										<option value="personal">Personal</option>
																								</select>
																						</label> -->

																						<div class="required">
																								 <label class="section_form_inputs_encabezado" for="senderEmail">
																										Correo Electronica
																										<input type="email" require name="senderEmail" placeholder="Correo Electronica" />
																								 </label>
																								<span>*</span>
																						</div>

																						 <!-- <div class="required">
																								 <label class="section_form_inputs_encabezado" for="phone">
																										Código
																										<input type="tel" require name="phone" />
																								 </label>
																								<span>*</span>
																						</div> -->


																						 <div class="required">
																								<label class="section_form_inputs_encabezado" for="senderPhone">
																										Teléfono
																										<input type="tel" name="senderPhone" required placeholder="Teléfono" />
																								</label>
																								<span>*</span>
																						</div>

																						 <label class="section_form_inputs_encabezado" for="senderExtension">
																								Extensión
																								<input type="text" name="senderExtension" placeholder="Extensión" />
																						</label>
																				</div>
																					<div class="section_form_inputs_box">
																						<div class="section_form_inputs_box_input">
																							<label for="cmHigh">
																								Alto:
																								<input type="number" placeholder="cm" for="cmHigh" require />
																							</label>
																							<label for="cmLarge">
																								Ancho:
																								<input type="number" placeholder="cm" for="cmLarge" require />
																							</label>
																							<label for="cmLong">
																								Largo:
																								<input type="number" placeholder="cm" for="cmLong" require />
																							</label>
																						</div>
																						<div class="section_form_inputs_box_image">
																							<img src="../public/img/box.png" alt="caja">
																						</div>
																					</div>
																				</div>
																				<span class="section_form_line"></span>
																				<div class="section_form_addressee">
																						<div class="form_form_header">
																								<h2>¿A donde su envio?</h2>
																								<h3>Destinatario</h3>
																						</div>

																						 <div class="section_form_inputs_addressee">

																				 <div class="required">
																										<label class="section_form_inputs_encabezado" for="addresseeCountry">
																												País/Territorio
																												<input type="text" name="addresseeCountry" required placeholder="País/Territorio" />
																										</label>
																										<span>*</span>
																								</div>
																				<div class="other_inputs_information">
																						<div class="other_inputs_information_flex">
																								<div class="required">
																										<label class="section_form_inputs_encabezado" for="addresseeCompany">
																												Nombre completo o nombre de la empresa
																												<input type="text" name="addresseeCompany" required placeholder="Empresa" />
																								</label>
																										<span>*</span>
																								</div>

																									<div class="required">
																						<label class="section_form_inputs_encabezado" for="addresseeName">
																								Nombre de contacto
																								<input type="text" name="addresseeName" required placeholder="Nombre y apellido" />
																						</label>
																						<span>*</span>
																				</div>
																						</div>

																							<div class="required">
																						<label class="section_form_inputs_encabezado" for="addresseeAdress">
																										Dirección
																										<input type="text" name="addresseeAdress" placeholder="Dirección" />
																								</label>
																								<span>*</span>
																						</div>

																						<!-- <label class="section_form_inputs_encabezado" for="adress">
																								Dirección 3
																								<input type="text" name="adress" placeholder="Dirección 3" />
																						</label> -->

																						<div class="other_inputs_information_check">
																								 <div class="required">
																										<label class="section_form_inputs_encabezado" for="addresseeCodePostcard">
																												Código postal
																												<input type="number" name="addresseeCodePostcard" required placeholder="Código postal" />
																										</label>
																										<span>*</span>
																								</div>

																								<div class="required">
																										<label class="section_form_inputs_encabezado" for="addresseeCity">
																												Ciudad
																												<input type="text" name="addresseeCity" required placeholder="Ciudad" />
																										</label>
																										<span>*</span>
																								</div>


																								<label class="section_form_inputs_encabezado" for="addresseeState">
																										Estado
																										<input type="text" name="addresseeState" placeholder="Empresa" />
																								</label>
																						</div>
																				</div>
																				<div class="other_inputs">
																						<!-- <label class="section_form_inputs_encabezado" for="phone">
																								Tipo de teléfono
																								<select name="select">
																										<option value="oficina" selected>Oficina</option>
																										<option value="casa">Casa</option>
																										<option value="personal">Personal</option>
																								</select>
																						</label> -->

																						 <!-- <div class="required">
																								 <label class="section_form_inputs_encabezado" for="code">
																										Código
																										<input id="phone" type="tel" require name="phone" />
																								 </label>
																								<span>*</span>
																						</div> -->

																							 <div class="required">
																								 <label class="section_form_inputs_encabezado" for="addresseeEmail">
																										Correo Electronica
																										<input type="email" require name="addresseeEmail" placeholder="Correo Electronica" />
																								 </label>
																								<span>*</span>
																						</div>


																						 <div class="required">
																								<label class="section_form_inputs_encabezado" for="addresseePhone">
																										Teléfono
																										<input type="tel" name="addresseePhone" required placeholder="Teléfono" />
																								</label>
																								<span>*</span>
																						</div>

																						 <label class="section_form_inputs_encabezado" for="addresseeCompany">
																								Extensión
																								<input type="text" name="addresseeCompany" placeholder="Extensión" />
																						</label>

																						
																				</div>
																				<div class="section_form_inputs_botones">
																						<div class="section_form_boton">
																								<input type="hidden" class="g-recaptcha-response" name="g-recaptcha-response">
																								<button type="submit">Envia tu mensaje</button>
																						</div>
																				</div>
																		</div>
																				</div>
																		</form>
																</div>
														</div>
												</div>
										</div>
								</div>
						</div>
				</div>


				<?php
				require_once "../comons/footer.php";
				?>
		</main>

		<script>
				const phoneInputField = document.querySelector("#phone");
				const phoneInput = window.intlTelInput(phoneInputField, {
						utilsScript:
						"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
						separateDialCode: "true"
				});
		</script>
</body>
<script src="/public/js/menu.js"></script>

</html>