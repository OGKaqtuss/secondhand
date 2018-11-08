<?php $this->setSiteTitle('Home');  ?>
<?php $this->start('head');  ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <link rel="stylesheet" href="<?=PROOT?>css/front.css">
    <!--<script src="<?=PROOT?>js/libs/Builder/Builder.js"></script>
    <script src="<?=PROOT?>js/Blueprint.js"></script>
    <script src="<?=PROOT?>js/Builder.js"></script>-->
    <script src="<?=PROOT?>js/front.js"></script>
<?php $this->end();  ?>

<?php $this->start('body');  ?>
<section id="main-page">
    <header class="front-header">
        <div class="inner-header">
            <div class="logo">
                <img id="logoImg" src="http://mediad.publicbroadcasting.net/p/vpr/files/styles/x_large/public/201408/marketplace-tech-report-logo.png"/>
                <span class="logo-text">Krampladsen</span>
            </div>
            <nav class="header-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="market">Market</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="frontPage">
        <div class="image"></div>
        <div class="inner-front-page">
            <div class="left-page-navigator">
                <ul>
                    <li class="current"><a href="#main-page">Home</a></li>
                    <li><a href="#page1">About</a></li>
                    <li><a href="#page2">Products</a></li>
                    <!--<li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>-->   
                </ul>
            </div>
            <div class="front-small-box">
    
            </div>
        </div>
    </section>

    <div id="triangle">
        <a class="page-shift" href="#"><i class="fas fa-chevron-down"></i></a>
    </div>
    <section id="frontPageFooter">

    </section>
</section>
<section id="page1">

    <section id="page1Footer">

    </section>
</section>
<a id="toTop" href="#">
    <i class="fas fa-chevron-up"></i>
</a>

<?php $this->end();  ?>