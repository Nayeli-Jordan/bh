			<footer class="bg-gray padding-top-bottom-40">
				<div class="container wow zoomIn">
					<div class="row">
						<div class="col s12 m6 l3 margin-bottom-20">
							<p class="uppercase margin-bottom-10"><strong>BHSolar</strong></p>
							<p><a href="<?php echo THEMEPATH; ?>docs/testimonios.pdf">Testimonios</a></p>
							<p><a href="<?php echo SITEURL; ?>">Financiamiento</a></p>
							<p><a href="<?php echo SITEURL; ?>blog">Blog</a></p>
						</div>
						<div class="col s12 m6 l4 margin-bottom-20">
							<p class="uppercase margin-bottom-10"><strong>Contáctanos</strong></p>
							<a href="tel:+525568375020"><em class="icon-phone"></em> 5568375020</a><br>
							<a href="mailto:info@bhsolar.mx"><em class="icon-mail-alt"></em> info@bhsolar.mx</a>
							<?php include (TEMPLATEPATH . '/template/redes.php'); ?>
						</div>
						<div class="col s12 m12 l5 margin-bottom-20">
							<p class="uppercase margin-bottom-10"><strong>Mantente informado</strong></p>
							<p>Recibe noticias, promociones y novedades de eventos sobre instalación de paneles solares</p>
							<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
							<?php include (TEMPLATEPATH . '/template/newsletter.php'); ?>
						</div>
					</div>
					<p class="text-center border-top-gray padding-top-20">BHSolar © <?php echo date('Y'); ?> Todos los derechos reservados | <a href="<?php echo SITEURL; ?>aviso-de-privacidad">Aviso de privacidad</a></p>
				</div>
			</footer>
		</div> <!-- end main-body -->
		<?php wp_footer(); ?>
	</body>
</html>