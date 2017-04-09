<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>


<div class="hero">
	<video src="<?php echo $view->getThemePath()?>/images/HomepageBanner.mp4" type="video/mp4" autoplay="" loop="true"></video>
	<div class="hero-content">
		<h2>Storytelling through website design and analysis.</h2>
		<!-- <h3>Simple pricing and easy-to-use interfaces. Call us for a quote 612.492.1804</h3> -->
	</div>
</div>
<div class="services fluid-container">
	<div class="row">
      	<div class="col-sm-4">
			<div class="content">
				<h3>First Impressions</h3>
				<h2>The first impression says everything.</h2>
				<p>Nine out of ten consumers rely on the internet to locate and evaluate local goods and services which means that your website is forming their first impression. Using your site to tell a story about you and your business begins the relationship.</p>
			</div>
			<picture>
		        <img class="background" src="<?php echo $view->getThemePath()?>/images/still.png">
	      	</picture>
      	</div>
      	<div class="col-sm-4">
			<div class="content">
				<h3>Custom Solutions</h3>
				<h2>If there's no problem to be solved, move on.</h2>
				<p> Whether you need online restaurants reservations, in-store point of service or simply technical knowhow allow us to collaborate and help you improve the efficiency of your business.</p>
			</div>
			<picture>
		        <img class="background" src="<?php echo $view->getThemePath()?>/images/still2.png">
	      	</picture>
      	</div>
      	<div class="col-sm-4">
			<div class="content">
				<h3>Data Based Decisions</h3>
				<h2>What gets measured, gets improved.</h2>
				<p>Determine the effectiveness of your site based on real analytical data. Learn about the demographics of your visitors, how they’re finding your site, what’s they’re clicking on and more.</p>
			</div>
			<picture>
		        <img class="background" src="<?php echo $view->getThemePath()?>/images/still3.png">
	      	</picture>
      	</div>
    </div>
</div>    
<div class="contact container">
	<div class="row">
		<div class="col-sm-9">
			<?php
		    $a = new Area('Contact Form');
		    $a->display($c);
		    ?>
		</div>
	</div>
</div>
<!-- <div class="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Who are we?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="/"/>
						<h3>Natasha</h3>
						<p>Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. </p>
					</div>
					<div class="col-sm-6">
						<img src="/"/>
						<h3>Nick</h3>
						<p>Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<?php $this->inc('elements/footer.php');
