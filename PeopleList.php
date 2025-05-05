<?php 
declare(strict_types=1);

class PeopleList implements Iterator 
{
  private $position = 0;
  private array $peopleList;

  public function __construct() 
  {
    $this->peopleList = [
      new Person("Маша", "masha", 25),
      new Person("Петя", "petya", 30),
      new Person("Вася", "vasya", 28),
      new Person("Олег", "oleg", 35)
    ];
  }

  public function __toString(): string
  {
    $res = "";
    foreach ($this->peopleList as $person) {
      $res .= $person . "\n";
    }
    return $res;
  }

  public function rewind(): void 
  {
    $this->position = 0;
  }

  public function current(): mixed
  {
    return $this->peopleList[$this->position];
  }

  public function key(): mixed
  {
    return $this->position;
  }

  public function next(): void
  {
    ++$this->position;
  }

  public function valid(): bool
  {
    return isset($this->peopleList[$this->position]);
  }

}
