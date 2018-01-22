<?php require_once ('./config/database.php'); error_reporting(E_ALL); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../public/css/bootstrap-reboot.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../public/css/style.scss" type="text/css" media="screen">


    <title>Shopping Cart</title>
</head>
<body>
<?php require ('navigation.php');?>

<div class ="container">
            <div class="page-header">
                <h1><?php echo isset($page_title) ? $page_title : "Shopping Cart"; ?></h1>
            </div>
        </div>
    </div>
</div>


