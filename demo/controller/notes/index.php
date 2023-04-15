<?php

use Core\Authentication\Auth;
use Core\Database;

$db = app( config('container.names.for_database'), Database::class );
$auth = app( config('container.names.for_authentication'), Auth::class );

$notes = $db->query("SELECT * FROM notes WHERE user_id = :id", [':id' => $auth->User()->id])->get();

view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);