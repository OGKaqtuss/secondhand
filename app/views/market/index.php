<?php $this->setSiteTitle('Market');  ?>
<?php $this->start('head');  ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
<link href="<?=PROOT?>css/market.css" rel="stylesheet">
<script src="<?=PROOT?>js/market.js"></script>
<?php $this->end();  ?>

<?php $this->start('body');  ?>

<header>
    <div class="inner">
        <div class="title">
            <h1>Krampladsen</h1>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#">Forside</a></li>
                    <li class="active"><a href="#">Marked</a></li>
                    <li><a href="#">Log ud</a></li>
                    <li><a href="#">Om os</a></li>
                </ul>
            </nav>
        </div>
        <div class="user">
            <figure>
                <figcaption>
                    <img alt="UserIcon" src="https://scontent.faar1-1.fna.fbcdn.net/v/t1.0-9/36480466_2030045627313329_8267727300800282624_n.jpg?_nc_cat=0&oh=cd74cdaefc238ff84621a8c650a878c9&oe=5C003E4B" />
                </figcaption> 
                <div class="name">Martin Ringtved</div>
            </figure>
        </div>
    </div>
</header>
<section class="left-menu">
    <ul class="menu">
        <li>
            <div class="top">
                <div class="icon fas fa-plus"></div>
                <div class="text">Pris</div>
            </div>
        </li>
        <li>
            <div class="top">
                <div class="icon fas fa-plus"></div>
                <div class="text">Hvor er varen</div>
            </div>
        </li>
        <li>
            <div class="top">
                <div class="icon fas fa-plus"></div>
                <div class="text">Oplysninger</div>
            </div>    
        </li>
        <li>
            <div class="top">
                <div class="icon fas fa-plus"></div>
                <div class="text">Sikkerhed</div>
            </div> 
            <div class="bottom hidden">fgddddddddddddddddddddddddddd</div>
        </li>
    </ul>
</section>

<?php $this->end();  ?>