<?php
	$title = "M-WebDesign : Contact";
?>

<!-- ==============================================
    CALL TO ACTION  
	=============================================== -->
	
	<section id="call-to-action">
		<div class="container">
			<h1 class="wow fadeInDown" data-wow-duration=".2s" data-wow-delay=".4s"></h1>
			
		</div>
    </section>
<!-- ==============================================
    CONTACT
    =============================================== -->

<section id="contact">
	<div class="svg-wave">
		<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
			<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
		</svg>
	</div>
	<div class="container">
		<h2>Contact</h2>
		<div class="row">
			<div class="col-lg-4 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
				<h4>Un projet ? Une place dans votre équipe ?</h4>
				<a href="mailto:alexandra.moullet@gmail.com" class="email-link">alexandra.moullet@gmail.com</a>
				<p>(+33) 06.62.34.03.08</p>
				<p>Disponible sur : </p> <p>Montbéliard, Besançon, Mulhouse. <b>FR</b></p> <p>Porrentruy, Delémont, Bienne. <b>CH</b></p>
				<ul class="social-media">
					<li><a href="https://twitter.com/MoulletAlexand1"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="https://github.com/Neithy88"><i class="fab fa-github"></i></a></li>
				</ul>
			</div>
			<div class="col-lg-8 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
				<h4>Discutons en</h4>
				<form action ="Controllers/ContactController.php" method="POST">
					<div class="row">
						<div class="col">
							<input type="email" name="email" class="form-control" placeholder="email:">
						</div>
						<div class="col">
							<input type="text" name="sujet" class="form-control" placeholder="sujet:">
						</div>
					</div>
					<!-- Form Group -->
					<div class="form-group wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
						<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Message:" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary">Envoyé</button>
				</form>
			</div>
		</div>
	</div>
</section>     