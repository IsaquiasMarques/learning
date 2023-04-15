<?php

use Core\Authentication\Auth;
use Core\Database;

$id = $_GET['id'] ?? 0;

$db = app( config('container.names.for_database'), Database::class );
$auth = app( config('container.names.for_authentication'), Auth::class );

$note = $db->query("SELECT * FROM notes WHERE id = :id", [':id' => $id])->findOrFail();
authorize($note['user_id'] === $auth->User()->id);

view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'note' => $note
]);