<?php
/* Smarty version 3.1.33, created on 2019-11-26 09:57:11
  from 'C:\xampp\htdocs\movie\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddce8e7883c13_26742497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50a11f830d81e67a22e019c21787119d10c84c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movie\\templates\\index.tpl',
      1 => 1574758630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5ddce8e7883c13_26742497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2191140235ddce8e784ed87_04209326';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- jquery -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <?php echo '<script'; ?>
 src="js/navbar.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php ob_start();
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

    <div class="row article">
        <div class="movieList">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail movieItem">
                    <img src="img/film_20191028050.jpg">
                    <div class="caption">
                        <h3>決戰中途島</h3>
                        <p>MIDWAY</p>
                        <p>2019-11-08</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagebar">

        </div>

    </div>
</body>
</html><?php }
}
