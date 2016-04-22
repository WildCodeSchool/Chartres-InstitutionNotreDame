		<div class="col-md-12 main-offset">
		</div>

		<div class="col-md-12 footer-top" id="ancre1">
			<div class="col-md-3 footer-part">
				<h4>Ecole Saint-Ferdinand</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.8224185589397!2d1.4840701508049532!3d48.44074793787453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c456f32e20f%3A0xc9904916ab660570!2s15+Rue+Chanzy%2C+28000+Chartres!5e0!3m2!1sfr!2sfr!4v1459691790099" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>Tel: 02 37 28 09 49</p>
			</div>
			<div class="col-md-3 footer-part">
				<h4>Collège / Lycée Notre Dame</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2646.8224185589397!2d1.4840701508049532!3d48.44074793787453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e40c456f32e20f%3A0xc9904916ab660570!2s15+Rue+Chanzy%2C+28000+Chartres!5e0!3m2!1sfr!2sfr!4v1459691790099" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				<p>Tel: 02 37 34 61 55</p>
			</div>
			<div class="col-md-3 footer-part ">
			<h4>Contacter :</h4>
			<?php wp_nav_menu( array(
				'theme_location' => 'footer-menu-1',
				'container' => false,
				'menu_class' => 'footer-menu' 
				)); ?>
			</div>
			<div class="col-md-3 footer-part">
			<h4>Retrouvez également :</h4>
			<?php wp_nav_menu( array(
				'theme_location' => 'footer-menu-2',
				'container' => false,
				'menu_class' => 'footer-menu' 
				)); ?>
			</div>
		</div>
		<div class="col-md-12 footer-next">
			Tous droits réservés - Design by Wild Code School
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	</body>
</html>