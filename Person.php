<?php 
declare(strict_types=1);

class Person 
{
  public string $name;
  public string $login;
  public int $age;


  public function __construct(string $name, $login = '', $age = 0)
  {
    $this->name = $name;
    $this->login = $login;
    $this->age = $age;
  }

  public function __set (string $property, mixed $value): void 
  {
    $this->$property = $value;
  }

  public function __get($property): string 
  {
    return $this->$property ?? null;
  }

  public function __sleep(): array
  {
    return ['name', 'login', 'age'];
  }

  public function __wakeup(): void
  {
    // для примера
  }

  public function __toString(): string
  {
    return "Person: {$this->name}, login: {$this->login}, age: {$this->age}";
  }
}