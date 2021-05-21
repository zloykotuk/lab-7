<?php

$a = 100;
$b = 14.12;
$c = 'Hello word';
$c = "Hello word";
$e = [
    'Jonny',
    'Flame',
    'Abraham',
    'Walker'
];

$f = [
    'name' => 'Aleksandr',
    'surname' => 'Burgela',
    'age' => 21,
    'byear' => 1999,
    'education' => [
        'school in 2004; collage in 2014'
    ],
    'married' => false,
    'smoking' => false,
    'geek' => true
];

$j = false;

echo $f['name'] .' ' . $f['surname'];
echo '<br>';
echo ($a . ' + ' . $b . ' = ') . ($a + $b);
echo '<br>';

$weather = 'snow';

echo match($weather) {
    'snow' => 'На вулиці йде сніг',
    'rain' => 'На вулиці йде дощ',
    'sun' => 'На вулиці сонячно',
    'cloudy' => 'На вулиці хмарно',
    default => 'None'
};
echo '<br>';
$age = 20;
echo match(true) {
    $age < 21 => 'Вам ще мало років йдіть додому',
    $age >= 21 => 'Ласкаво просимо',
};

foreach (range(1, 10) as $key) {
    echo 'Привіт світ<br>';
}

foreach ($f as $key => $value) {
    if (is_array($value)) {
        break;
    }
    echo "Ключ - $key,значення - $value<br>";
}

function getBigger(int|float $a,int|float $b): float|int
{
    return ($a > $b) ? $a : $b;
}

echo getBigger(1.5, 6);

$array = [4, 5, 10, 15, 44, 100];

echo '<br>';
echo round(43.6);
echo '<br>';
echo floor(43.6);
echo '<br>';
echo "Найменше зачення в масиві" . min($array);
echo '<br>';
echo "Найбільше зачення в масиві" . max($array);