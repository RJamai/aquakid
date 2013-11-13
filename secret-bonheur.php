<?php
/*
Template Name: Secret du bonheur
*/
?>
<?php get_header(); ?>

        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l-happiness">
	        		<?php the_field( "image1_premiere_regle" ); ?>
    				<h2 class="formatted-title"><span class="f-darkblue">Regle n°1&nbsp;: </span> <?php the_field( "titre_premiere_regle" ); ?></h2>        		
    				<p>
						<?php the_field( "texte1_premiere_regle" ); ?>
					</p>					  				 
    				
    				<div class="l-cols2 clearfix margintop4">
    					<div class="col">
    						<h3 class="formatted-title2"><?php the_field( "sous_titre_premiere_regle" ); ?></h3>        		
    						<p>
								<?php the_field( "texte2_premiere_regle" ); ?>
							</p>
    					</div>
    					<figure class="col text-center">
    						<?php the_field( "image2_premiere_regle" ); ?>
    						<figcaption><i><?php the_field( "detail_image2_premiere_regle" ); ?></i></figcaption>
    					</figure>
    				</div><!-- .l-cols2 -->
    				    		
	        		<hr />
	        		<h2 class="formatted-title"><span class="f-darkblue">Regle n°2&nbsp;: </span><?php the_field( "titre_deuxieme_regle" ); ?></h2>     
	        		<p>
						<?php the_field( "sous_titre_deuxieme_regle" ); ?>
					</p>   
	        		<div class="l-cols3 clearfix">
						<?php the_field( "contenu_deuxieme_regle" ); ?>
					</div><!-- .l-cols3 -->	
	        		<hr />
	        		<h2 class="formatted-title"><span class="f-darkblue">Regle n°3 : </span><?php the_field( "titre_troisieme_regle" ); ?></h2>	
	        		<div class="l-cols2 clearfix marginbottom2">
	        			<div class="col text-center">
	        				<?php the_field( "image1_troisieme_regle" ); ?>
	        			</div>
	        			<div class="col">
	        				<p>
								<?php the_field( "texte1_troisieme_regle" ); ?>
							</p>
	        			</div>
	        		</div>
	        		<div class="l-cols2 clearfix marginbottom2">
	        			<div class="col">
	        				<p>
								<?php the_field( "texte2_troisieme_regle" ); ?>
							</p>	        					        				
	        			</div>
	        			<div class="col text-center">
	        				<?php the_field( "image2_troisieme_regle" ); ?>
	        			</div>
	        		</div>
	        		<div class="l-cols2 clearfix">
	        			<div class="col text-center">
	        				<?php the_field( "image3_troisieme_regle" ); ?>
	        			</div>
	        			<div class="col">
	        				<p>
								<?php the_field( "texte3_troisieme_regle" ); ?>
							</p>
	        			</div>
	        		</div><!-- .l-cols2 -->
	        		<hr />
	        		<?php the_field( "bloc_conclusion" ); ?>
	        	</div><!-- .main-body -->
				
<?php get_footer(); ?>