<?php

if($_GET['clear_cache'] == "Y") {
    $seo_text = $arResult['INCLUDE_TEXT_NEW'];
}
else {
    $seo_text = $arResult['INCLUDE_TEXT'];
}

function getFeatures($arr) {
    $featuresArr = [];
    foreach($arr as $value)
        array_push($featuresArr, ['title' => $value['VALUE'], 'description' => $value['DESCRIPTION']]);
    
    return $featuresArr;
    
}

$context = [
        // @todo: Здесь добавить ключи (элементы ассоциативного массива), которые требуются в шаблоне template.php
        'name' => $arResult['NAME'],
        'description' => $arResult['PREVIEW_TEXT'],
        'features' => getFeatures($arResult['PROPERTIES']['ADVANTAGES']["VALUE"]),
        'seo_text' => $seo_text,

    ];



return $context;







