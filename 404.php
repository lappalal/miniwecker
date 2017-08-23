<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Miniwecker
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Gibt"s hier nicht...</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Die Seite, die du versucht hast aufzurufen gibt es leider nicht.</p>
          
          <p>Vielleicht hast du dich einfach vertippt? Oder hat dir jemand einen Link geschickt der nicht funktioniert? Wenn du dir sicher bist, dass der Link eigentlich funktionieren sollte, dann haben wohl der Jakob und der Ferdy hier mal wieder gepfuscht. Und du sollst es nun ausbaden? Nenene, schreib am Besten schnell eine <a href="mailto:pfarrjugendleitung@miniwecker.de">eMail</a> und die beiden bekommen ordentlich auf die Finger und müssen die kommende Nacht durcharbeiten, damit der Fehler so schnell wie möglich verschwindet.</p>

          <p>Es tut uns also sehr leid. Keiner von uns beiden wollte hier landen, vielleicht gehst du einfach nochmal zurück auf die <a href="/">Startseite</a>. Tschuldigung!</p>

					<?php
						get_search_form();
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
