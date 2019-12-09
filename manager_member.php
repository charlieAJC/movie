<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';
require 'php/classTest/mysql_connect.php';
require 'php/classTest/Post.php';

$smarty = new Smarty;
$post = new Post($conn);
// $smarty->force_compile = true;
$smarty->debugging = true;
// $smarty->caching = true;
$smarty->cache_lifetime = 120;

## navbar data
$result = $post->checkToken();
if ($result["status"] === false) {
    ## token比對使用者失敗，前端重新登入
    $smarty->assign("tokenCheckFail", 1);
} elseif ($result["permission"] < 2) {
    ## 遊客和一般會員
    $smarty->assign("permissionDeny", 1);
} else {
    $smarty->assign("navbar", $result);

    $member = $post->manager_member();
    $smarty->assign("members", $member["data"]);
}

$smarty->display('manager_member.tpl');