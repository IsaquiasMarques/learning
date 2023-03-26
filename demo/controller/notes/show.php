<?php

use Core\Authentication\Auth;
use Core\Database;

$id = $_GET['id'] ?? 0;

$db = app('database', Database::class);
$auth = app('auth', Auth::class);

$note = $db->query("SELECT * FROM notes WHERE id = :id", [':id' => $id])->findOrFail();
authorize($note['user_id'] === $auth->User()->id);

view('notes/show.view.php', [
    'heading' => $note['title'],
    'note' => $note
]);