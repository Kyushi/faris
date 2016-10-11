<?php include_once "header.php"; ?>

				<?php
					$pageText= pageText();
					if ( !empty( $pageText ) && viewingProjectTags() == false ):
				?>
				<div class="pageText row">
					<?php echo pageText(); ?>
				</div>
				<?php endif; ?>

				<div class="view row">
					<?php
						if ( viewingProjectTags() )
							echo '<ul>' . projects(	) . '</ul>';
						else
							echo pageContent();
					?>
				</div>

<?php include_once "footer.php"; ?>
