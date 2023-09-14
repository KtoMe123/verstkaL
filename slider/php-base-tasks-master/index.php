<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Детальная страница товара</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>

<?php
define("TEMPLATE_NAME", "/detail-page");

$arResult = [
    'NAME' => 'Товар 1',
    'PREVIEW_TEXT' => 'Небольшое описание товара',
    'PROPERTIES' => [
        'ADVANTAGES' => [
            'NAME' => 'Преимущества',
            'VALUE' => [
                [
                    'VALUE' => 'Преимущество 1',
                    'DESCRIPTION' => 'Описание преимущества 1'
                ],
                [
                    'VALUE' => 'Преимущество 2',
                    'DESCRIPTION' => 'Описание преимущества 2'
                ],
                [
                    'VALUE' => 'Преимущество 3',
                    'DESCRIPTION' => ''
                ],
            ]
        ]
    ],
    'INCLUDE_TEXT' => 'Абзац текст из включаемой области',
    'INCLUDE_TEXT_NEW' => 'Обновленный абзац текст из включаемой области, имитация сброса кэша'
];

$context = include $_SERVER['DOCUMENT_ROOT'] . '/detail-page/result_modifier.php';
include $_SERVER['DOCUMENT_ROOT'] . TEMPLATE_NAME.'/template.php';
?>

</body>
</html>