<?php 
declare(strict_types=1);

include "./Person.php";
include "./PeopleList.php";


$p = new Person("mom", "mooom", 30);
echo "проверяем текущее значение: " . $p->__get("name") . PHP_EOL; // проверяем текущее значение
$p->__set("name", "Tommy"); // записываем новое имя
echo "читаем новое имя: " . $p->__get("name") . PHP_EOL; // читаем новое имя

// сериализуем Person p
$s = serialize($p); 
echo "сериализуем: " . $s . PHP_EOL;

// заменяем значение
// старое и новое значение совпадает по длинне, иначе ошибка
$sr = str_replace("Tommy", "Nikol", $s); 

// десериализация Person p
$u = unserialize($s); 
echo "читаем имя после десериализации: " . $u->__get("name") . PHP_EOL; // читаем имя после десериализации

// десериализация Person p и замены
$u2 = unserialize($sr);
echo "читаем имя после десериализации и замены: " . $u2->__get("name") . PHP_EOL; // читаем имя после десериализации



echo "------------------------------------------------------------\n";

// PeopleList через foreach
$list = new PeopleList();
echo "Через foreach:\n";
foreach ($list as $person) {
    echo $person . "\n"; // вызов __toString() объекта Person
}

// Можно выводить весь список через __toString()
echo "\nВесь список:\n" . $list;