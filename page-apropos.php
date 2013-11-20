<?php
/*
Template Name: A propos
*/
?>
<?php get_header(); ?>
        
       <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title() ?></h1>
		        	<h2 class="main-subtitle"><span class="f-whimsy"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l.about">
	        		<div class="l-cols2 clearfix">
		        		<?php the_field( "bloc1_image" ); ?>
		        		<div class="col about-mission">
			        		<h2 class="formatted-title"><?php the_field( "bloc1_titre" ); ?></h2>        		
			        		<ul>
			        			<?php the_field( "bloc1_texte" ); ?>
			        		</ul>
		        		</div><!-- .col -->
	        		</div><!-- .l-cols2 -->
	        		<hr />
	        		<h2 class="formatted-title"><?php the_field( "bloc2_titre" ); ?></h2>       
	        		<ul class="l-cols3 clearfix formatted-warning">
	        			<?php the_field( "bloc2_colonne_gauche" ); ?>
	        			<?php the_field( "bloc2_colonne_centrale" ); ?>
	        			<?php the_field( "bloc2_colonne_droite" ); ?>
	        		</ul>		
	        		<p><small><i>(Plus d'informations sur la rubrique <a href="faq.html">FAQ</a>)</i></small></p>
	        		<hr />
	        		<?php the_field( "bloc3_image" ); ?>
	        		<h2 class="formatted-title"><?php the_field( "bloc3_titre" ); ?></h2>
	        		<?php the_field( "bloc3_texte" ); ?>
	        		<hr />
	        		<h2 class="formatted-title"><?php the_field( "bloc4_titre" ); ?></h2>
	        		<p><span class="f-whimsy"><?php the_field( "bloc3_texte" ); ?></p>
	        		<article class="team team-juan">
	        			<?php the_field( "bloc4_image_gauche" ); ?>
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_gauche" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_gauche" ); ?></h4>
	        		</article>
	        		<article class="team team-patricio">
	        			<?php the_field( "bloc4_image_centrale" ); ?> 
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_gauche" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_gauche" ); ?></h4>
	        		</article>
	        		<article class="team team-ombeline">
	        			<?php the_field( "bloc4_image_droite" ); ?> 
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_gauche" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_gauche" ); ?></h4>
	        		</article>
	        	</div><!-- .main-body -->
					
<?php get_footer(); ?>
