<?php    defined('C5_EXECUTE') or die(_("Access Denied.")); $this->inc('elements/header.php'); ?>
	
	<section class="row outer-section">			
		<div class="row inner-section">
			<div class="eight columns">
				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>
			</div>
	
			<aside class="four columns right">
				<?php 
				$as = new Area('Sidebar');
				$as->display($c);
				?>
			</aside>
		</div>
	</section>
<?php    $this->inc('elements/footer.php'); ?>