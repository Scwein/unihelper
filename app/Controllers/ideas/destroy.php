<?php

$db = db();

$id = $_POST['id'] ?? 0;

$db->query('DELETE FROM ideas WHERE id = ?', [$id]);

redirect();

require_once VIEWS . '/incs/header.blade.php';