<?php

class DryExampleBadUse {
    private string $role = 'admin';
    private bool $logged = true;

    private ?string $messageToPost;

    public function __construct() 
    {
        $this->role = 'admin';
        $this->logged = true;
        $this->messageToPost = null;
    }

    public function postNote(string $message): void
    {
        if (true === $this->logged && $this->role = 'admin') {
            $this->messageToPost = $message;
        }

        throw new Exception('User is not logged');
    }
}