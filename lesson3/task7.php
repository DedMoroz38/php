<?php

// task 7

for ($n = 0; $n < 10; print $n++) {
}

// task 8

$rigionsNames = [
    'Московская область' => ['Москва', 'Зеленоград', 'Klin'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Kronshtad'],
    'республика Татарстан' => ['Kazan', 'Альметьевск', 'Наб. Челны']
];
foreach ($rigionsNames as $rigionsName => $cities) {
    $result = array();
    for ($i = 0; $i < count($cities); $i++) {
        if ($cities[$i][0] === 'K') { //K - латинская (с русским не удалось( )
            $result[] = $cities[$i];
        }
        $string = implode(', ', $result);
    }

    echo "$rigionsName:<br>" . "$string<br>";
}

// task 9 
include  'tasks1_2_3_4_5.php';

function make_url(string $string): string
{
    return replacer(translitiration($string));
}
echo make_url('привет мир');
