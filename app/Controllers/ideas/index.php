<?php 

/** @var Db $db */
/** @var Pagination $pagination */

$db = db();

if (isset($_GET['saveChanges'])) {
    $db->query("UPDATE ideas SET `text` = ? WHERE id = ?", [$_GET['text_idea'], $_GET['id']]);
}

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$total = $db->query('SELECT COUNT(*) FROM ideas')->columnCount();
$per_page = 5;
$pagination = new Pagination($page, $per_page, $total);
$start = $pagination->getStart();

$ideas = $db->query("SELECT * FROM ideas ORDER BY id DESC LIMIT $start, $per_page")->findAll();

$view = VIEWS . '/ideas/index.blade.php';
require_once VIEWS . '/incs/header.blade.php';
