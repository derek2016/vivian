<?php
/**
 * Index
 *
 * @author DEREK
 *         2016-10-21
 */
require 'lib/init.php';

$smarty->assign("page_name", "首页");
$smarty->display('index.tpl');
