<?php
// task 1
$n = 0;
while ($n <= 100) {
    echo ($n % 3 == 0 ? $n . ' ' : '');
    $n++;
}

// task 2
$n2 = 0;
do {
    echo $n2 . ' - ' . (($n2 % 2 == 0 || $n2 == 0) ? ($n2 == 0 ? 'ноль' : 'четное число') : 'нечетное число') . '<br>';
    $n2++;
} while ($n2 <= 10);

// task 3

$rigionsNames = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'республика Татарстан' => ['Казань', 'Альметьевск', 'Наб. Челны']
];
foreach ($rigionsNames as $rigionsName => $cities) {
    $cities = implode(', ', $cities);
    echo "$rigionsName:<br>" . "$cities<br>";
}

// task 4

$translation_list = [
    'а' => 'a', 'б' => 'b',
    'в' => 'v', 'г' => 'g',
    'д' => 'd', 'е' => 'ye',
    'ё' => 'ye', 'ж' => 'zh',
    'з' => 'z', 'и' => 'i',
    'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm',
    'н' => 'n', 'о' => 'o',
    'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f',
    'х' => 'kh', 'ц' => 'ts',
    'ч' => 'ch', 'ш' => 'sh',
    'щ' => 'shch', 'ъ' => '-',
    'ы' => 'y', 'ь' => '-',
    'э' => 'e', 'ю' => 'yu',
    'я' => 'ya'
];

function translitiration($word)
{
    global $translation_list;
    $translitiraited_word = '';
    for ($i = 0; $i < strlen($word); $i++) {
        if ($translation_list[$word[$i]]) {
            $translitiraited_word .= $translation_list[mb_substr($word, $i, 1)];
        } else {
            $translitiraited_word .= ' ';
        }
    }
    return $translitiraited_word;
}
echo translitiration('привет');

// task 5
function replacer($string)
{
    return str_replace(' ', "_", $string);
}
echo replacer('Hello world!');
