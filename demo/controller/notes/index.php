<?php

use Core\Authentication\Auth;
use Core\Database;

$db = app('database', Database::class);
$auth = app('auth', Auth::class);

$notes = $db->query("SELECT * FROM notes WHERE user_id = :id", [':id' => $auth->User()->id])->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);