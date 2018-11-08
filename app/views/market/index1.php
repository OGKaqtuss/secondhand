<?php $this->setSiteTitle('Market');  ?>
<?php $this->start('head');  ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
<script src="<?=PROOT?>js/main.js"></script>
<link href="<?=PROOT?>css/main.css" rel="stylesheet">
<?php $this->end();  ?>

<?php $this->start('body');  ?>
<!-- // Header menu for info -->
<header class="menubar">
    <div class="notification">
        <div><i class="fas fa-bell"></i></div>
        <div><i class="fas fa-comment-alt"></i></div>
        <div><i class="fas fa-dollar-sign"></i></div>
    </div>
</div>
<!-- Left navbar -->
<section id="left_side_bar" class="left_side_bar open">
    <div class="left_side_bar_head">
        <img alt="UserIcon" class="sidebar_userIcon" src="https://scontent.faar1-1.fna.fbcdn.net/v/t1.0-9/36480466_2030045627313329_8267727300800282624_n.jpg?_nc_cat=0&oh=cd74cdaefc238ff84621a8c650a878c9&oe=5C003E4B" />
        <div class="sidebar_userName">Mathias Carlsen</div>
        <div class="sidebar_arrow" href="#">
            <i class="fas fa-arrow-left"></i>
        </div>
    </div>    
    <nav>
        <ul>
            <li>
                <a class="sidebar_navigation_link" href="#">
                    <i class="navIcon fas fa-home"></i>
                    Forside
                    <i class="icon fas fa-home"></i>
                </a>
            </li>
            <li>
                <a class="sidebar_navigation_link" href="#">
                    <i class="navIcon fas fa-shopping-bag"></i>
                    Marked
                    <i class="icon fas fa-shopping-bag"></i>
                </a>
            </li>
        </ul>
    </nav>
</section>
<section id="market_main_left" class="open hideContent">
    <ul>
        <li></li>
        <li>
            <figure class="market_left_nav_text" data-list-open="false">
                <div class="title"><i class="fas fa-plus-circle"></i> Filtrering</div>
                <figcaption>
                    <p>Hej med dig du er en taber så være sød at fucke af.</p>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="market_left_nav_text" data-list-open="false">
                <div class="title"><i class="fas fa-plus-circle"></i> Kategorier</div>
                <figcaption>
                    <p>Hej med dig du er en taber så være sød at fucke af.</p>
                </figcaption>
            </figure>
        </li>
        <li>
            <figure class="market_left_nav_text" data-list-open="false">
                <div class="title"><i class="fas fa-plus-circle"></i> Pris</div>
                <figcaption>
                    <p>Hej med dig du er en taber så være sød at fucke af.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
</section>
<?php $this->end();  ?>