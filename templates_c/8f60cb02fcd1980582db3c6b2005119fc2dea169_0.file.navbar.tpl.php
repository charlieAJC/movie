<?php
/* Smarty version 3.1.33, created on 2019-12-12 04:27:37
  from 'C:\xampp\htdocs\movie\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5df1b3a98a0201_72959121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f60cb02fcd1980582db3c6b2005119fc2dea169' => 
    array (
      0 => 'C:\\xampp\\htdocs\\movie\\templates\\navbar.tpl',
      1 => 1576121256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df1b3a98a0201_72959121 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-inverse">
    <div class="navbar_gap">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">CYmovie</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['permission'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_prefixVariable1;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 2) {?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" id="navAdmin" style="cursor: pointer">
                            <span class="glyphicon glyphicon-wrench"></span>
                            Admin
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="manager_member.php">會員管理</a></li>
                            <li><a href="manager_movie.php">電影上下架</a></li>
                            <li><a href="manager_addevent.php">電影新增場次</a></li>
                        </ul>
                    </li>
                <?php }?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['permission'];
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_prefixVariable3;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 0) {?>
                    <li><a id="navRegister" href="register.php"><span
                                    class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a id="navLogin" href="login.php"><span
                                    class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php }?>

                <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['permission'];
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_prefixVariable5;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['permission'];
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_prefixVariable7;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable6 >= 1 || $_prefixVariable8 == -1) {?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" id="navAccount" style="cursor: pointer">
                            Welcome, <?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['account'];
$_prefixVariable9 = ob_get_clean();
echo $_prefixVariable9;?>

                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="record.php">訂單紀錄</a></li>
                        </ul>
                    </li>
                    <li>
                        <a id="navCash" href="deposit.php"><span
                                    class="glyphicon glyphicon-usd"></span><?php ob_start();
echo $_smarty_tpl->tpl_vars['navbar']->value['cash'];
$_prefixVariable10 = ob_get_clean();
echo $_prefixVariable10;?>
</a>
                    </li>
                    <li>
                        <a id="navLogout" href=""><span
                                    class="glyphicon glyphicon-log-out"></span> Logout</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav><?php }
}
