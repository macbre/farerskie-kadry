<?php if ( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) ) : ?>

	<div class="footer section big-padding bg-white">

		<div class="section-inner">

			<div class="widgets">

				<?php dynamic_sidebar( 'footer-one' ); ?>

			</div>

			<div class="widgets">

				<?php dynamic_sidebar( 'footer-two' ); ?>

			</div>

			<div class="widgets">

				<?php dynamic_sidebar( 'footer-three' ); ?>

			</div>

			<div class="clear"></div>

		</div><!-- .section-inner -->

	</div><!-- .footer.section -->

<?php endif; ?>

<div class="credits section bg-dark">

	<div class="credits-inner section-inner">

		<p>Tekst i zdjęcia: Maciej Brencz <span class="sep">&amp;</span> Materiały udostępnione na licencji <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.pl">CC BY-SA 4.0</a></p>
		<br>
		<p>Napędzane przez <a href="http://www.wordpress.org">WordPress</a> <span class="sep">&amp;</span> <span>Szablon autorstwa <a href="http://www.andersnoren.se">Andersa Nor&eacute;na</a></span></p>

	</div><!-- .section-inner -->

</div><!-- .credits.section -->

<?php wp_footer(); ?>

</body>
</html>
