<?php    defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<footer>
		<div class="row">
			<div class="eleven columns centered">
				<?php 
				$as = new Area('Footer');
				$as->display($c);
				?>
			</div>
		</div>
		<div class="row copy">
			<div class="ten columns centered">
			<small>
				Copyright &copy;<?php echo t(date('Y'))?> <a href="<?php    echo DIR_REL?>/"><?php    echo t(SITE)?></a>. All rights reserved.
			</small>
			</div>
		</div>
		<div class="row lower">
			<div class="four columns centered">
				<small>Site Deployed by CRI</small>
			</div>
		</div>
		<div class="row bottom">
			<div class="four columns centered">
				<small>
					Powered by <a href="http://www.concrete5.org/r/-/106697" title="<?php    echo t('powered by concrete5 open source Content Management System')?>" alt="<?php    echo t('concrete5 content management system')?>"> <?php    echo t('Concrete5 CMS')?></a>
				</small><br />
				<small>
					<?php 
						$u = new User();
						if ($u->isRegistered()) { ?>
							<span class="sign-in"><?php echo t('Welcome <b>%s</b>!', $u->getUserName())?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a></span>
						<?php  } else { ?>
							<span class="sign-in"><a href="<?php echo $this->url('/login')?>"><?php echo t('Sign In')?></a></span>
					<?php  } ?>
				</small>
			</div>
		</div>
	</footer>

	<!-- Included JS Files (Uncompressed) -->
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.cookie.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.event.move.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.event.swipe.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.accordion.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.alerts.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.buttons.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.clearing.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.forms.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.joyride.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.magellan.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.navigation.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.orbit.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.reveal.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.tabs.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.tooltips.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.foundation.topbar.js"></script>
	
	<script src="<?=$this->getThemePath()?>/javascripts/foundation/jquery.placeholder.js"></script>

  <!-- Application Javascript, safe to override -->
  	<script src="<?=$this->getThemePath()?>/javascripts/foundation/app.js"></script>
<?php  Loader::element('footer_required'); ?>  
</body>
</html>
