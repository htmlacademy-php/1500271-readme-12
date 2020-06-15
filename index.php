<?php
$is_auth = rand(0, 1);
function textcut($str, $len) {
    if (strlen($str) > $len) {
        $i = 0;
        $l = 0;
        $arr_str = explode(" ", $str);
        foreach ($arr_str as $s) {
            if ($l < $len) {
                $i += 1;
                $l += strlen($s);
            }
        }
        return implode(' ', array_slice($arr_str, 0,$i)).'...'.'<br><a class="post-text__more-link" href="#">Читать далее</a>';
        }
    else{
        return $str;
    }
    };
$posts = [
    [
        'caption' => 'Цитата',
        'type' => 'post-quote',
        'content' => 'Мы в жизни любим только раз, а после ищем лишь похожих',
        'user_name' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'caption' => 'Игра престолов',
        'type' => 'post-text',
        'content' => 'Не могу дождаться начала финального сезона своего любимого сериала!',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ],
    [
        'caption' => 'Наконец, обработал фотки!',
        'type' => 'post-photo',
        'content' => 'rock-medium.jpg',
        'user_name' => 'Виктор',
        'avatar' => 'userpic-mark.jpg'
    ],
    [
        'caption' => 'Моя мечта',
        'type' => 'post-photo',
        'content' => 'coast-medium.jpg',
        'user_name' => 'Лариса',
        'avatar' => 'userpic-larisa-small.jpg'
    ],
    [
        'caption' => 'Лучшие курсы',
        'type' => 'post-link',
        'content' => 'www.htmlacademy.ru',
        'user_name' => 'Владик',
        'avatar' => 'userpic.jpg'
    ]
];
$user_name = 'Александр'; // укажите здесь ваше имя
$title = 'Популярное';
require('templates/layout.php');
?>
