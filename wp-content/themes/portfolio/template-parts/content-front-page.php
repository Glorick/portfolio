<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

?>

<section>
	<header class="am-main-header">
    <div class="am-main-header-container">
      <div class="am-main-row">
        <div class="am-main-header-banner">
          <h1>MUFFATTO</h1>
          <h2>Anthony</h2>
          <h3>Administrateur réseaux</h3>
        </div>
        <div class="am-main-header-social">
          <a href="https://www.facebook.com/anthony.muffatto/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/facebook.svg" alt="" class="rounded-circle"></a>
          <a href="https://www.twitter.com/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/twitter.svg" alt="" class="rounded-circle"></a>
          <a href="https://fr.linkedin.com/in/anthony-muffatto-05167614a/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/linkedin.svg" alt="" class="rounded-circle"></a>
          <a href="https://www.github.com/" target="_blank" class="hvr-grow"><img src="<?= get_template_directory_uri();?>/assets/pictures/icons/git.svg" alt="" class="rounded-circle"></a>
        </div>
        <div class="am-main-header-picture">
          <img src="<?= get_template_directory_uri();?>/assets/pictures/identitee.jpg" alt="" class="rounded-circle">
        </div>
      </div>
    </div>
	</header>
  <div class="am-main-content-top">
    <div class="am-main-content-top-container">
      <div class="am-main-content-top-title">
        <h2>Portfolio & Projets Pro.</h2>
        <p>Epreuve E4</p>
      </div>
      <?php get_template_part("template-parts/content-front-page-e4");?>
    </div>
  </div>
  <div class="am-main-content-midlle">
    <div class="am-main-content-midlle-container">
      <div class="am-main-content-midlle-title">
        <h2 id="portfolio">Développement</h2><h2>Réseaux</h2>
        <h3>Projets professionels réalisés</h3>
      </div>
    </div>
  </div>
  <div class="am-main-content-bottom">
    <div class="am-main-content-bottom-container">
      <div class="am-main-content-bottom-title">
        <p>Epreuve E6: Parcours de professionnalisation</p>
      </div>
      <?php get_template_part("template-parts/content-front-page-e6");?>
    </div>
  </div>
	<footer>
    </footer>
</section>
