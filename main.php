<?php

$tickets = [«Сочи», «Казань», «Минск», «Дубай», «Париж», «Берлин», «Рим», «Стамбул»];
$names = [«Анна», «Иван», «Мария», «Дмитрий», «Ольга», «Сергей», «Елена», «Алексей», «Наталья», «Павел»];
$passengers = [];

function hello($name) {
    return «Сотрудник: Здравствуйте, $name!<br>»;
}

foreach ($names as $name) {

    echo hello($name);

    if (count($tickets) > 0) {

        // Показываем, какие билеты есть в наличии
        echo «Билеты в наличии:<br>»;
        foreach ($tickets as $t) {
            echo «- $t<br>»;
        }

        $ticket = array_shift($tickets);
        echo «$name купил билет: $ticket<br>»;
        $passengers[] = «$name - $ticket»;

    } else {
        echo «$name, билетов нет.<br>»;
    }

    echo «—<br>»;
}

echo «<br>Кто куда летит:<br>»;
foreach ($passengers as $p) {
    echo «$p<br>»;
}
