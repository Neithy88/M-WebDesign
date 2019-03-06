<!-- ==============================================
    PORTFOLIO
    =============================================== -->

	<section id="portfolio">
		<div class="svg-wave">
			<svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 3600 248">
				<path d="M3601,31.227S2736.31,201.97,1661,72.2C547.345-62.2,0,32.227,0,32.227V343H3602Z"></path>
			</svg>
		</div>
		<div class="container-fluid wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s" style="margin-bottom:5em">
			<h2>Portfolio</h2>
			<div class="row">
			<?php foreach($projets as $key => $projet) : ?>
				<div class="col-md-6 col-lg-4 portfolio-item">
					<div class="item-img">
						<img src="<?= 'assets/img/projet/'.$projet['url_image']?>"alt="<?= 'image '.$projet['titre']?>">
					</div>
					<div class="item-info">
						<h3 class="heading-3"><?= $projet['titre'] ?></h3>
						<p class="p-text"><?= $projet['description'] ?></p>
						<a href= "<?='https://alexandram.promo-24.codeur.online/'.$projet['lien_demo']?>" class="link-text">Voir le projet</a>
					</div>
				</div>
				<?php endforeach; ?> 
			</div>
		</div>
	</section>