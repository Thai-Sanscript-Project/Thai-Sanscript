
<link rel="apple-touch-icon" sizes="57x57" href="inc/img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="inc/img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="inc/img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="inc/img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="inc/img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="inc/img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="inc/img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="inc/img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="inc/img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="inc/img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="inc/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="inc/img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="inc/img/favicon-16x16.png">
<link rel="manifest" href="inc/img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="inc/img/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="inc/css/bootstrap.min.css" type="text/css">

<!-- Custom Fonts -->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>-->
<link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css" type="text/css">

<!-- Plugin CSS -->
<link rel="stylesheet" href="inc/css/animate.min.css" type="text/css">

<!-- Custom CSS -->
<link rel="stylesheet" href="inc/css/creative.css" type="text/css">

<link rel="stylesheet" href="inc/css/nicedit.css" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<?php foreach ($css_file as $value) { ?>
    <link href="<?php echo base_css($value); ?>" rel="stylesheet">
<?php } ?>

<?php foreach ($css_embed as $value) { ?>
    <?php $this->load->view($value); ?>
<?php } ?>
