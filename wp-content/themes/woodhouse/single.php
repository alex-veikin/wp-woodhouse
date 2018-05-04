<?php
get_header();
?>


    <section class="content py-5">
        <div class="container py-3">

			<?php
			while ( have_posts() ) :
				the_post();

				//			get_template_part( 'template-parts/content', 'page' );
			endwhile;
			?>

        </div>
    </section>

<?php
get_footer();
