  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?> - Emprendedores Cartago</title>
  <meta name="description" content="<?= $descripcion ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/theme.css">
  <link rel="stylesheet" href="../css/animate.min.css">
  <!--Floating WhatsApp css-->
  <link rel="stylesheet" href="../css/floating-wpp.min.css">
  <link rel="stylesheet" href="../css/main.css">
  <!--<link rel="stylesheet" href="../css/snowflake.css">-->
  <link rel="icon" href="../img/favicon.ico">

  <!-- Open Graph data -->
  <meta property="og:title" content="<?= $title ?> - Emprendedores Cartago">
  <meta property="og:type" content="website">

  <?php
  $thumb_url = (isset($thumbnail)) ? "http://emprendedorescartago.com/img/$thumbnail?v=" . time() : "http://emprendedorescartago.com/img/thumbnail.jpg?v=" . time();
  $thumb_urls = (isset($thumbnail)) ? "https://emprendedorescartago.com/img/$thumbnail?v=" . time() : "https://emprendedorescartago.com/img/thumbnail.jpg?v=" . time();
  ?>

  <meta property="og:image" itemprop="image" content="<?= $thumb_url ?>">
  <meta property="og:image:secure_url" itemprop="image" content="<?= $thumb_urls ?>">
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:url" content="<?= $url ?>">
  <meta property="og:description" content="<?= $descripcion ?>">
  <meta property="og:image:alt" content="<?= $descripcion ?>" />
  <meta property="og:locale" content="es_es">
  <meta property="og:site_name" content="Emprendedores Cartago">
  <meta property="og:updated_time" content="1546705013">
  <link rel="base" href="https://emprendedorescartago.com/">
  <link rel="canonical" href="<?= $url ?>">
  <link rel="manifest" href="../manifest.json">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="Emprendedores Cartago">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-750x1294.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-1242x2148.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-1536x2048.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-1668x2224.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="../img/splash/launch-2048x2732.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="57x57" href="../img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../img/apple-icon-152x152.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../img/favicon-96x96.png">
  <meta name="msapplication-TileColor" content="#128C7E">
  <meta name="msapplication-TileImage" content="../img/ms-icon-144x144.png">
  <meta name="theme-color" content="#128C7E">
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N437HC3');
  </script>
  <!-- End Google Tag Manager -->