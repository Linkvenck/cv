<?php
	$pagination = get_option( 'pagination', 'No' );
	
	if ( $pagination == 'Yes' )
	{
		?>
			<nav class="post-pagination">
				<?php
					oxo_pagination( array() );
				?>
			</nav>
		<?php
	}
	else
	{
		?>
			<nav class="navigation" role="navigation">
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">←</span> Older posts', 'read' ) ); ?></div>
				
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">→</span>', 'read' ) ); ?></div>
			</nav>
			
			<nav class="post-pagination">
			
			</nav>
		<?php
	}
	// end if
?>