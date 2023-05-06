<?php

declare(strict_types=1);

namespace Domain\User;

class User
{
    private string $id;
    private string $name;
    private string $email;
    private string $phone;
    private string $anotherData;

    public function __construct(string $id, string $name, string $email, string $phone, string $anotherData)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->anotherData = $anotherData;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAnotherData(): string
    {
        return $this->anotherData;
    }
}
