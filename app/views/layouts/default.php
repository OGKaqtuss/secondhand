<!doctype html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <title><?=$this->siteTitle();?></title>
    <meta name="description" content="Krampladsen en let ny og smart måde at sælge ens gamle eller nye ting på. Krampladsen fungerer ligesom mange andre sider som fx Den Blå Avis. Det der bare er smarte Krampladsen er at Kunden og sælgeren er sikret.">
    <meta name="keywords" content="Krampladsen, Sælg">
    <meta name="author" content="Mark Ringtved Nielsen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d31cff" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i" rel="stylesheet">
    <!-- Social media tags -->
    <meta property="og:title" content="Krampladsen kom og sælg">
    <meta property="og:description" content="Vil du have peng for noget du ikke bruger? så er Krampladsen lige noget for dig.">
    <meta property="og:image" content="https://krampladsen.dk/Gfx/fb.png">
    <meta property="og:url" content="https://krampladsen.dk/">
    <!-- Scripts -->
    <script src="<?=PROOT?>js/libs/jQuery-min.js"></script>
    
    <?= $this->content('head'); ?>
</head>

<body>
    <?= $this->content('body'); ?>
</body>

</html>
