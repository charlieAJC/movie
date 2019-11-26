<?php
/**
 * Example Application
 *
 * @package Example-application
 */
require 'libs/Smarty.class.php';
require 'php/classTest/mysql_connect.php';
require 'php/classTest/Member.php';
require 'php/classTest/Post.php';

$smarty = new Smarty;
$member = new Member($conn);
$post = new Post($conn);
// $smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;
// $smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));

## navbar data
if (isset($_COOKIE["token"])) {
    $result = $member->checkToken($_COOKIE["token"]);
} else {
    $result = $member->checkToken("");
}
$smarty->assign("navbar", $result);

## movieList data
if (isset($_GET["page"])) {
    $movieLists = $post->index($_GET["page"]);
} else {
    $movieLists = $post->index("1");
}
$smarty->assign("movieLists", $movieLists);
## https://www.smarty.net/docs/en/language.function.foreach.tpl

$smarty->display('index.tpl');
