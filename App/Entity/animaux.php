<?php

namespace App\Entity;

class Animaux
{
   protected ?int $id = null;
   protected ?int $category_id = null;
   protected ?int $soignant_id = null;
   protected string $name;
   protected int $age;
   protected string $description;


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
    * Get the value of soignant_id
    */
   public function getSoignantId(): ?int
   {
      return $this->soignant_id;
   }

   /**
    * Set the value of soignant_id
    */
   public function setSoignantId(?int $soignant_id): self
   {
      $this->soignant_id = $soignant_id;

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
}