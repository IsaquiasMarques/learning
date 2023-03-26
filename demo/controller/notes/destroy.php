<?php

use Core\Authentication\Auth;
use Core\Database;

$db = app('database', Database::class);
$auth = app('auth', Auth::class);

$id = $_POST['id'] ?? 0;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [':id' => $id])->findOrFail();
authorize($note['user_id'] === $auth->User()->id);

$db->query('DELETE FROM notes WHERE id = :id', ['id' => $_POST['id']]);

header_location();