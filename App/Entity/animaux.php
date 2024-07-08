<?php

namespace App\Entity;

class Animaux
{
   protected ?int $id = null;
   protected ?int $category_id = null;
   protected ?int $employers_id = null;
   protected string $race = '';
   protected string $name = '';
   protected int $age = 0;
   protected string $description = '';
   protected string $image = '';


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
    * Get the value of category_id
    */
   public function getCategoryId(): ?int
   {
      return $this->category_id;
   }

   /**
    * Set the value of category_id
    */
   public function setCategoryId(?int $category_id): self
   {
      $this->category_id = $category_id;

      return $this;
   }

   /**
    * Get the value of employers_id
    */
   public function getEmployersId(): ?int
   {
      return $this->employers_id;
   }

   /**
    * Set the value of employers_id
    */
   public function setEmployersId(?int $employers_id): self
   {
      $this->employers_id = $employers_id;

      return $this;
   }

   /**
    * Get the value of name
    */
   public function getName(): string
   {
      return $this->name;
   }

   /**
    * Set the value of name
    */
   public function setName(string $name): self
   {
      $this->name = $name;

      return $this;
   }

   /**
    * Get the value of age
    */
   public function getAge(): int
   {
      return $this->age;
   }

   /**
    * Set the value of age
    */
   public function setAge(int $age): self
   {
      $this->age = $age;

      return $this;
   }

   /**
    * Get the value of description
    */
   public function getDescription(): string
   {
      return $this->description;
   }

   /**
    * Set the value of description
    */
   public function setDescription(string $description): self
   {
      $this->description = $description;

      return $this;
   }

   /**
    * Get the value of race
    */
   public function getRace(): string
   {
      return $this->race;
   }

   /**
    * Set the value of race
    */
   public function setRace(string $race): self
   {
      $this->race = $race;

      return $this;
   }

   /**
    * Get the value of image
    */
   public function getImage(): string
   {
      return $this->image;
   }

   /**
    * Set the value of image
    */
   public function setImage(string $image): self
   {
      $this->image = $image;

      return $this;
   }
}