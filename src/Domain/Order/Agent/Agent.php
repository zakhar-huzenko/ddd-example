<?php

declare(strict_types=1);

namespace Domain\Order\Agent;

class Agent
{
    private string $id;
    private string $name;
    private string $email;

    public function __construct(
        string $id,
        string $name,
        string $email,
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
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
}
