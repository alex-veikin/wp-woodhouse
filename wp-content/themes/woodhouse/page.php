<?php
get_header();
?>


    <section class="content py-5">
        <div class="container py-3">

			<?php
			while ( have_posts() ) :
				the_post(); ?>
                <h2 class="title text-center pb-3 text-uppercase"><?php the_title(); ?></h2>
                <div class="mx-3">
                    <div class="row bg-white py-3">
                        <div class="col-12 col-lg-6">
                            <div class="row no-gutters">
                                <div class="col-6 text-center">
                                    <img class="border border-primary image-selected"
                                         src="img/les1.png" alt="">
                                </div>
                                <div class="col">
                                    <div class="row no-gutters">
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border border-primary image-select"
                                                    src="img/les1.png" alt="">
                                        </div>
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border image-select"
                                                    src="img/les2.png" alt="">
                                        </div>
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border image-select"
                                                    src="img/les3.png" alt="">
                                        </div>
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border image-select"
                                                    src="img/les4.png" alt="">
                                        </div>
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border image-select"
                                                    src="img/les5.png" alt="">
                                        </div>
                                        <div class="col-6 col-sm-4"><img
                                                    class="mx-1 border image-select"
                                                    src="img/les6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="description my-3">
								<?php the_content(); ?>
                            </div>
                            <button class="btn content-btn">Узнать цену</button>
                        </div>
                    </div>
                </div>

			<?php
			endwhile;
			?>

        </div>
    </section>

    <section class="content py-5">
        <div class="container py-3">
        </div>
    </section>

<?php
get_footer();
