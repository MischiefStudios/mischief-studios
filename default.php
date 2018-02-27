<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>


<div class="hero">
	<video src="<?php echo $view->getThemePath()?>/images/HomepageBanner.mp4" type="video/mp4" autoplay="" loop="true"></video>
	<div class="hero-content">
        <h1>Storytelling through website design and&nbsp;analysis.</h1>
	</div>
</div>
<div class="main-content container">
	<div class="row">
		<div class="col-sm-9">
			<?php
		    $a = new Area('Main Content');
		    $a->display($c);
		    ?>
		</div>
	</div>
</div>

<?php $this->inc('elements/footer.php');
