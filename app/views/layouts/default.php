<!doctype html>
<html lang="da">

<head>

    <meta charset="utf-8">
    <title><?=$this->siteTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#d31cff" />
    <!-- Scripts -->
    <script src="<?=PROOT?>js/libs/jQuery-min.js"></script>
    
    <?= $this->content('head'); ?>
</head>

<body>
    <?= $this->content('body'); ?>
</body>

</html>
