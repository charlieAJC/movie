<?php
/* Smarty version 3.1.33, created on 2019-12-05 07:21:01
  from 'C:\xampp\htdocs\movie\templates\manager_member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de8a1cdd703c9_95659093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3d29194003ac7f1ea7f39f3ae0cd6d61f4c9471' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movie\\templates\\manager_member.tpl',
      1 => 1575526860,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5de8a1cdd703c9_95659093 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
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

    <?php if (isset($_smarty_tpl->tpl_vars['tokenCheckFail']->value)) {?>
        <?php echo '<script'; ?>
 src="js/tokenCheckFail.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 src="js/navbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/manager_member.js"><?php echo '</script'; ?>
>

    <style>
        body {
            font-family: "微軟正黑體", sans-serif;
        }
    </style>
</head>
<body>
<?php ob_start();
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

<div class="container">
    <h2>會員管理</h2>
    <button type="button" class="btn btn-warning" id="quicksearch">快搜停權帳號</button>
    <table id="myTable" class="table order-list">
        <thead>
        <tr>
            <td>帳號</td>
            <td>權限</td>
            <td>最後登入時間</td>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['members']->value, 'member');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
?>
            <tr id="<?php ob_start();
echo $_smarty_tpl->tpl_vars['member']->value['id'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
">
                <td class="col-sm-3">
                    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['member']->value['account'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</p>
                </td>
                <td class="col-sm-3 level">
                    <?php if (($_smarty_tpl->tpl_vars['member']->value['permission'] === "1")) {?>
                        <p style="color: green"><?php ob_start();
echo $_smarty_tpl->tpl_vars['member']->value['level'];
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
</p>
                    <?php } elseif (($_smarty_tpl->tpl_vars['member']->value['permission'] === "-1")) {?>
                        <p style="color: red"><?php ob_start();
echo $_smarty_tpl->tpl_vars['member']->value['level'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
</p>
                    <?php }?>
                </td>
                <td class="col-sm-3">
                    <p><?php ob_start();
echo $_smarty_tpl->tpl_vars['member']->value['last_login'];
$_prefixVariable6 = ob_get_clean();
echo $_prefixVariable6;?>
</p>
                </td>
                <td class="col-sm-3 switch">
                    <?php if (($_smarty_tpl->tpl_vars['member']->value['permission'] === "1")) {?>
                        <input type="button" class="btn btn-danger btnn suspend" value="停權">
                    <?php } elseif (($_smarty_tpl->tpl_vars['member']->value['permission'] === "-1")) {?>
                        <input type="button" class="btn btn-info btnn lift" value="解除">
                    <?php }?>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
</body>
</html><?php }
}
