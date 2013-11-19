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
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage1" ); ?></h3>
        				<?php the_field( "image_bouteille_1" ); ?>
        				<?php the_field( "image_personnage_1" ); ?>
        				<div class="character-container character-charlie">
        					<?php the_field( "texte_personnage_1" ); ?>
        				</div>
        			</article>
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage2" ); ?></h3>
        				<?php the_field( "image_bouteille_2" ); ?>
        				<?php the_field( "image_personnage_2" ); ?>
        				<div class="character-container character-jimba">
        					<?php the_field( "texte_personnage_2" ); ?>
        				</div>
        			</article>	        			
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage3" ); ?></h3>
        				<?php the_field( "image_bouteille_3" ); ?>
        				<?php the_field( "image_personnage_3" ); ?>
        				<div class="character-container character-ringo">
        					<?php the_field( "texte_personnage_3" ); ?>
        				</div>	
        			</article>
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage4" ); ?></h3>
        				<?php the_field( "image_bouteille_4" ); ?>
        				<?php the_field( "image_personnage_4" ); ?>
        				<div class="character-container character-tango">
        					<?php the_field( "texte_personnage_4" ); ?>
        				</div>
        			</article>
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage5" ); ?></h3>
        				<?php the_field( "image_bouteille_5" ); ?>
        				<?php the_field( "image_personnage_5" ); ?>
        				<div class="character-container character-boogie">
        					<?php the_field( "texte_personnage_5" ); ?>
        				</div>
        			</article>
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage6" ); ?></h3>
        				<?php the_field( "image_bouteille_6" ); ?>
        				<?php the_field( "image_personnage_6" ); ?>
        				<div class="character-container character-gigi">
        					<?php the_field( "texte_personnage_6" ); ?>
        				</div>
        			</article>	        			  
        			<hr> 
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage7" ); ?></h3>
        				<?php the_field( "image_bouteille_7" ); ?>
        				<?php the_field( "image_personnage_7" ); ?>
        				<div class="character-container character-lilipop">
        					<?php the_field( "texte_personnage_7" ); ?>
        				</div>
        			</article>	        			 
        			<hr>  
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage8" ); ?></h3>
        				<?php the_field( "image_bouteille_8" ); ?>
        				<?php the_field( "image_personnage_8" ); ?>
        				<div class="character-container character-samba">
							<?php the_field( "texte_personnage_8" ); ?>
        				</div>
        			</article> 
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage9" ); ?></h3>
        				<?php the_field( "image_bouteille_9" ); ?>
        				<?php the_field( "image_personnage_9" ); ?>
        				<div class="character-container character-doudou">
        					<?php the_field( "texte_personnage_9" ); ?>
        				</div>
        			</article>
        			<hr>
        			<article class="character">
        				<h3 class="character-name"><?php the_field( "nom_personnage10" ); ?></h3>
        				<?php the_field( "image_bouteille_10" ); ?>
        				<?php the_field( "image_personnage_10" ); ?>
        				<div class="character-container character-bobun">
        					<?php the_field( "texte_personnage_10" ); ?>
        				</div>
        			</article>     
        			<div class="margintop2"></div>        	
	        	</div><!-- .main-body -->
	        	
<?php get_footer(); ?>