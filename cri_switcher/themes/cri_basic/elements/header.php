<?php     defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php 
	if ($c->isEditMode()) {
	echo ('<style>#ccm-highlighter {margin-top: -49px;}</style>');
	}
?>

<?php  Loader::element('header_required');  ?>

	<!-- ******************** COLOR Profiles  READ ME ********************* -->
	<!--only one color can be active at a time so put the "to use this color..." before and after lines around any color you do not intent to use-->
	
	<!-- ***BLUE*** -->

	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_blue.css"> 

	<!-- ***** END BLUE ***** -->
	
	<!-- ***BLUEGRAY*** -->
	<!-- to use this color, delete this line
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_bluegray.css"> 
	to use this color, delete this line -->
	<!-- ***** END BLUEGRAY ***** -->
	
	<!-- ***GOLD*** -->
	<!-- to use this color, delete this line
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_gold.css"> 
	to use this color, delete this line -->
	<!-- ***** END GOLD ***** -->
	
	<!-- ***GRAY*** -->
	<!-- to use this color, delete this line
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_gray.css"> 
	to use this color, delete this line -->
	<!-- ***** END GRAY ***** -->
	
	<!-- ***SAGE*** -->
	<!-- to use this color, delete this line
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_sage.css"> 
	to use this color, delete this line -->
	<!-- ***** END SAGE ***** -->
	
	<!-- ***SAND*** -->
	<!-- to use this color, delete this line
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/app_sand.css"> 
	to use this color, delete this line -->
	<!-- ***** END SAND ***** -->
	
	<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/styles/css/general_enclosed_foundicons.css">
	<link rel="stylesheet" media="screen" type="text/css" href="<?php    echo $this->getStyleSheet('typography.css')?>" />
	<link href='http://fonts.googleapis.com/css?family=Parisienne|Elsie+Swash+Caps|Domine' rel='stylesheet' type='text/css'>

	<script src="<?=$this->getThemePath()?>/javascripts/foundation/modernizr.foundation.js"></script>
</head>
<body>
	<header class="row">
		<h2 class="eight columns"><a href="#">
			<?php 
				$a = new GlobalArea('Site Name');
				$a->display();
			?>
		</a></h2>
		<h4 class="four columns">
			<i class="foundicon-phone"></i>
				<?php 
					$a = new GlobalArea('Contact');
					$a->display();
				?>
		</h4>
		<div class="row">
			<span class="eight columns push-four tagline">
				<?php 
					$a = new GlobalArea('Tagline');
					$a->display();
				?>
			</span>
		</div>
	</header>
	
	<nav class="twelve columns nav-bar">
		<div class="row nav">
			<?php 
				$bt = BlockType::getByHandle('autonav');
				$bt->controller->displayPages = 'top';
				$bt->controller->orderBy = 'display_asc';
				$bt->controller->displaySubPages = 'none'; 
				$bt->controller->displaySubPageLevels = 'none';
				$bt->render('templates/customnav');
			?>
		</div>
	</nav>