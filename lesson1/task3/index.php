<?php
$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? - приведение между типами
var_dump((int)'012345');     // Почему 12345? - (int) приводит к типу integer
var_dump((float)123.0 === (int)123.0); // Почему false? (float) и (int) приводят к разным типам
var_dump((int)0 === (int)'hello, world'); // Почему true? так как (int) приводит str к int, но в строке цифр нет(поэтому 0).
