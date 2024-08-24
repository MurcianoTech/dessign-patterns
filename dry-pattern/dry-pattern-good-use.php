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

    public function isAdmin(): bool 
    {
        return $this->role = 'admin';
    }

    public function isLogged(): bool
    {
        return true === $this->logged;
    }

    public function postNote(string $message): void
    {
        if (!$this->isLogged() && !$this->isAdmin()) {
            throw new Exception('User is not logged');
        }
        
        $this->messageToPost = $message;
    }
}