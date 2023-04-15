<?php

use Core\Authentication\Auth;
use Core\Database;
use Core\Validator;

$db = app( config('container.names.for_database'), Database::class );
$auth = app( config('container.names.for_authentication'), Auth::class );

$errors = [];

$note_title = htmlspecialchars($_POST['title']);
$note_description = htmlspecialchars($_POST['description']);

if(! Validator::string($note_title, 1, 50))
{
    $errors[] = "Note title field is required and no more than 50 characters";
}

if(! Validator::string($note_description, 1, 200))
{
    $errors[] = "Note description field is required and no more than 200 characters";
}

if(empty($errors)){
    $note_created = $db->query("INSERT INTO notes(title, body, user_id)
                        VALUES(:title, :body, :user_id)",
                        [
                            ':title' => $note_title,
                            ':body' => $note_description,
                            ':user_id' => $auth->User()->id
                        ]
                    );
    header('location: /notes');
    die();
}

view('notes/create.view.php', [
    'heading' => 'Create Note',
    'errors' => $errors
]);