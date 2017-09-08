<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Miniwecker
 */

get_header(); ?>

	<div id="primary" class="content-area error-404">
		<main id="main" class="site-main error-404">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title error-404">Gibt's hier nicht...</h1>
				</header><!-- .page-header -->

				<div class="page-content error-404">

					<p>Die Seite, die du aufzurufen willst, gibt es hier leider nicht.</p>

          <p>Vielleicht hast du dich einfach vertippt? Oder hat dir jemand einen Link geschickt der nicht funktioniert? Wenn du dir sicher bist, dass diese Seite eigentlich funktionieren sollte, dann hat wohl der Jakob hier mal wieder gepfuscht. Und du sollst es nun ausbaden? Nenene, schreib am Besten schnell eine <a href="mailto:pfarrjugendleitung@miniwecker.de">eMail</a> oder kontaktier uns &uuml;ber das <a href="/kontakt">Kontaktformular</a> und er bekommt ordentlich auf die Finger und muss die kommende Nacht durcharbeiten, damit der Fehler so schnell wie m&ouml;glich verschwindet.</p>

          <p>Es tut uns also sehr leid. Keiner von uns beiden wollte hier landen, vielleicht gehst du einfach nochmal zur&uuml;ck auf die <a href="/">Startseite</a>. Tschuldigung!</p>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
