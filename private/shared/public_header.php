<?php

//echo " dirname(__FILE__) " . dirname(__FILE__) . "<br/>";
//echo "dirname(PRIVATE_PATH) " . dirname(PRIVATE_PATH) . "<br/>";

if (!isset($page_title)) {
    $page_title = 'bike shop';
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/style.css') ?>"/>
    <title>Bike Shop - <?php echo h($page_title); ?></title>
</head>
<body>
<header>
    <h1>Bike Shop</h1>
</header>
