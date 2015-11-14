
<link rel="icon" href="inc/img/cropped-7192a1d1-32x32.png" sizes="32x32" />
<link rel="icon" href="inc/img/cropped-7192a1d1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="inc/img/cropped-7192a1d1-180x180.png">
<meta name="msapplication-TileImage" content="inc/img/cropped-7192a1d1-270x270.png">

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
