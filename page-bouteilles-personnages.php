<?php
/*
Template Name: Bouteilles et Personnages
*/
?>
<?php get_header(); ?>
        
        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix text-center l-characters">
	        		<?php the_field( "image_presentation" ); ?>
	        		<hr />
        			<h2 class="formatted-title"><?php the_field( "titre_presentation" ); ?></h2>  
        			<p class="formatted-subtitle"><?php the_field( "sous-titre_presentation" ); ?></p>
					<?php query_posts( 'post_type=personnage' ) ?>
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<article class="character">
									<h3 class="character-name"><?php the_field( "nom_personnage" ); ?></h3>
									<?php the_field( "image_bouteille" ); ?>
									<?php the_field( "image_personnage" ); ?>
									<div class="character-container character-charlie">
										<?php the_field( "texte_personnage" ); ?>
									</div>
								</article>
								<hr>
							<?php endwhile; ?>
						<?php endif; ?>	
        			<div class="margintop2"></div>        	
	        	</div><!-- .main-body -->
	        	
<?php get_footer(); ?>