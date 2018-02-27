<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>


    <div class="hero">
        <video src="<?php echo $view->getThemePath()?>/images/HomepageBanner.mp4" type="video/mp4" autoplay="" loop="true"></video>
        <div class="hero-content">
            <h1>Want to start a project?</h1>
            <p>It's simple.</p>
            <!--        <h1>Storytelling through website design and&nbsp;analysis.</h1>-->
            <h3><!-- Simple pricing and easy-to-use interfaces. -->
                <a href="/index.php/contact-us">
                    <button>Contact Us</button>
                </a>
            </h3>
        </div>
    </div>

    <div class="services container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="content">
                    <h3>Storytelling</h3>
                    <h2>The first impression says everything.</h2>
                    <p>Nine out of ten consumers rely on the internet to evaluate local goods and services which means that the story you tell on your website is forming their first impression.</p>
                </div>
                <picture>
                    <img class="background" src="<?php echo $view->getThemePath()?>/images/still.png">
                </picture>
            </div>
            <div class="col-sm-4">
                <div class="content">
                    <h3>Custom Solutions</h3>
                    <h2>Make changes, increase efficiency.</h2>
                    <p> Don't settle for good enough solutions. Automate mundane and routine tasks so you can get back to the important stuff before your competitors do.</p>
                </div>
                <picture>
                    <img class="background" src="<?php echo $view->getThemePath()?>/images/still2.png">
                </picture>
            </div>
            <div class="col-sm-4">
                <div class="content">
                    <h3>Scientific Approach</h3>
                    <h2>What gets measured, gets improved.</h2>
                    <p>Website analytics provide non-biased, objective, and factual data about how to increase your sales and website conversion so you don't have to keep guessing.
                </div>
                <picture>
                    <img class="background" src="<?php echo $view->getThemePath()?>/images/still3.png">
                </picture>
            </div>
        </div>
    </div>
    <div class="main-content container-fluid">
        <row>
            <div class="col-sm-6 pad-wrap">
                <h2>About Mischief Studios</h2>
                <p>Nick and I (Natasha) are a creative duo, working with like minded partners to provide comprehensive web design and development solutions. We build more than just websites with our engineering backgrounds though. We're problem solvers and we'd love to chat about how to solve your inefficiencies around the office and at home.</p>
                <a href="/index.php/contact-us">
                    <button>Get in touch</button>
                </a>
            </div>
            <div class="col-sm-6 pad-wrap">
                <h2>Outsource to Mischief Studios</h2>
                <p>We're excited to tailor our services to meet the needs of our agency partners because it means we get to focus on development! Mischief Studios can come to the table as your development team or work invisibly to support your brand. Provide your project specs and we'll get back to you with a project estimate at our outsource rate.</p>
                <a href="/index.php/partners"></a>
                <button>Partner with us</button>
                </a>
            </div>
        </row>
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

<?php $this->inc('elements/footer.php');
