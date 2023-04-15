<?php

use Core\Authentication\Auth;
use Core\Database;
use Core\Validator;

$db = app( config('container.names.for_database'), Database::class );
$auth = app( config('container.names.for_authentication'), Auth::class );

$errors = [];

$note_title = htmlspecialchars($_POST['title']);
$note_description = htmlspecialchars($_POST['description']);

$note = $db->query("SELECT * FROM notes WHERE id = :id",[
    ':id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $auth->User()->id);

if(! Validator::string($note_title, 1, 50))
{
    $errors[] = "Note title field is required and no more than 50 characters";
}

if(! Validator::string($note_description, 1, 200))
{
    $errors[] = "Note description field is required and no more than 200 characters";
}

if(empty($errors)){

    $update = $db->query('UPDATE notes SET title = :title,   body = :body WHERE id = :id', [
        ':id' => $note['id'],
        ':title' => $note_title,
        ':body' => $note_description
    ]);

    header('location: /notes');
    die();
}

view('notes/edit.view.php', [
    'heading' => 'Edit Note',
    'note' => $note,
    'errors' => $errors
]);