<?php

namespace App\Entity;

class Categories
{
    protected ?int $id = null;
    protected string $espece = '';

    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of espece
     */
    public function getEspece(): string
    {
        return $this->espece;
    }

    /**
     * Set the value of espece
     */
    public function setEspece(string $espece): self
    {
        $this->espece = $espece;

        return $this;
    }
}