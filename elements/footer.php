<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer style="clear:both;">
	<div class="container">
		<div class="row">
			<div class="social col-md-3 col-xs-12">
				<ul>
					<li class="social-fb">
						<a target="_blank" href="https://www.facebook.com/Mischief-Studios-266425877120784/">
							<img src="<?php echo $view->getThemePath()?>/images/facebook-black-iso.png" alt="Visit Mischief Studios Facebook Page"/>
						</a>
					</li>
					<li class="social-in">
						<a target="_blank" href="https://www.linkedin.com/Mischief-Studios">
							<img src="<?php echo $view->getThemePath()?>/images/linkedin-black-iso.png" alt="Visit Mischief Studios Linkedin Profile"/>
						</a>
					</li>
					<li class="social-gh">
						<a target="_blank" href="https://github.com/MischiefStudios">
							<img src="<?php echo $view->getThemePath()?>/images/github-black-iso.png" alt="Visit Mischief Studios GitHub"/>
						</a>
					</li>
				</ul>
			</div>
			<div class="contact col-md-6 col-xs-12">
				<ul>
					<li class="contact-phone">
						<a href="tel:612.492.1804"><span class="hidden-sm hidden-md hidden-lg">CALL US</span><span class="hidden-xs"> 612-492-1804</span></a>
					</li>
					<li class="contact-email">
						<a href="mailto:contact@mischief-studios.com"><span class="hidden-sm hidden-md hidden-lg">EMAIL US</span><span class="hidden-xs"> contact@mischief-studios.com</span></a>
					</li>
				</ul>
			</div>
			<div class="copyright col-md-3 col-xs-12">
				<p>© Mischief Studios</p>
			</div>
		</div>
	</div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>

