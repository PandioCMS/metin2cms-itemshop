<?php require_once __DIR__.'/_bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title><?= $_SERVER['SERVER_NAME']; ?> Offline</title>
  <meta name="generator" content="Bootply">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link href="css/styles.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" />
  <link rel="icon" type="image/gif" href="images/favicon.ico" />
</head>
<body>
  Shop
  <div id="btop">
    <div id="bbtm">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
          <a class="navbar-brand" rel="home" href="index.php"><span class="glyphicon glyphicon-home"></span> <?= $_SERVER['SERVER_NAME']; ?></a>
        </div>

      </nav>
      <div id="wrapper">
        <!-- header -->
        <div id="header">
          <!-- logo -->
          <a id="logo" href="index.php" title="metin2"><img src="images/logo.png" alt="Metin2"></a>
        </div></div>

        <div class="container-fluid">
            <div class="well">
              <div class="alert alert-danger" role="alert">
                <strong>Momentan serverul nostru este offline! Vă rugăm să așteptați pâna revenim.</strong>
              </div>
            </div>
          <hr>
          <hr>
        </div><!--/container-fluid-->
        <!-- script references -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--FOOTER-->
        <div class="mt2cms-footer">
          <p>
            <span class="glyphicon glyphicon-copyright-mark"></span> Powered by <a href="http://metin2cms.cf/">Metin2CMS</a> v<?=get_version()?>
          </p>
        </div><!--/FOOTER-->

      </div>
    </div>
  </body>
  </html>
