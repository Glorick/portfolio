<?php
/**
 * Footer
 *
 * @package portfolio
 */
?>
	<footer role="footer">
		<div class="am-footer">
			<div class="am-footer-container">
				<div class="am-footer-row">
					<div class="am-footer-description">
						<h3 id="a-propos">A PROPOS</h3>
						Agé de 26 et actuellement alternant en BTS SIO Option SISR (réseaux), je suis à la recherche d’une entreprise afin de pouvoir poursuivre mes études en alternance dans le domaine de la sécurité informatique. Celle-ci concernant les niveaux d’étude : licence (bac +3) et master (bac +4/5). <p>Tout au long de ma formation en BTS SIO à l'ADRAR, j'ai pu développer et approfondir mes connaissances, allié à l'alternance cela m'a permis d'acquerir de la technique technique et de la rigueur.</p>
					</div>
					<div class="am-footer-social">
						<p>En sus de ma formation et grâce à la SAUR j'ai pu élargir ma vision sur l'informatique et le numérique, j'ai eu l'oportunité de visiter du siège de Microsoft France à Paris et échanger avec leurs techniciens, ou encore faire la visite de datas Center qui mon naturellement aiguillés vers la sécurité informatique, qui pour l'instant reste un domaine qui m'est encore que trés peu maitrisé mais ou je m'investi.</p><p>Titulaire du permis A et B</p>
					</div>
					<div class="am-footer-contact">
						<h3>Retrouvez-moi sur les réseaux</h3>
						<div class="am-footer-contact-icons">
							<a href="https://www.facebook.com/anthony.muffatto/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/facebook.svg" alt="" class="rounded-circle"></a>
		          <a href="https://www.twitter.com/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/twitter.svg" alt="" class="rounded-circle"></a>
		          <a href="https://fr.linkedin.com/in/anthony-muffatto-05167614a/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/linkedin.svg" alt="" class="rounded-circle"></a>
		          <a href="https://www.github.com/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/git.svg" alt="" class="rounded-circle"></a>
						</div>
						<h3 id="contact">Me contacter</h3>
						<div class="am-footer-contact-send">
							<a href="mailto:anthony.muffatto@gmail.com" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/envelope.svg" alt="" class="rounded-circle"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="am-footer-copyright">
			<div class="am-footer-container">
				<div class="am-footer-row">
					<div class="am-footer-copyright-content">
						<span>&copy copyright <?= date("Y");?> all right reserved</span>
						<span><a href="#">Mentions légales</a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
