<?php

class User {
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
<<<<<<< HEAD


    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function setRole(array $role): void
    {
        $this->role = $role;
    }
    private $role = ['ROLE_USER'];

    public function __construct(
        $id = null
    ) {
        $this->id = $id;
    }


    public function setId(int $id): void
    {
=======
    private $role = ['ROLE_USER'];

    public function __construct(
        string $email,
        string $password,
        string $name,
        string $surname,
        int $id = null
    ) {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
>>>>>>> origin/master
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }


    public function getRole(): array
    {
        return $this->role;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }
}