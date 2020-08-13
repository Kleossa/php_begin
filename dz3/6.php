<?php

$arrNav = array(
    "Главная" => array(),
    "Новости" =>
        array(
            "Новости о спорте" => array(),
            "Новости о политике" => array(),
            "Новости о мире" => array(),
        ),
    "Контакты" => array(),
    "Справка" => array(),
);

$content = file_get_contents("index.html");

$navText = '<div>';

foreach ($arrNav as $key => $value) {
    $navText .= "<a><span>$key</span></a>";
    if (count($value) > 0) {
        $navText .= '<div>';
        foreach ($value as $key_2 => $value_2) {
            $navText .= " <a>$key_2</a>";
        }
        $navText .= '</div>';
    }
}
$navText .= '</div>';

$content = str_replace("{{NAV}}", $navText, $content);
echo $content;
//<div>
//    <a><span>Новости</span></a>
//    <div>
//        <a>Новости о спорте</a>
//        <a>Новости о политеке</a>
//        <a>Новости о мире</a>
//    </div>
//</div>
