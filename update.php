<?php
include ("validator.php");

if (isset($_POST["name"]) && isset($_POST["phone"])) {
    $res = json_decode(file_get_contents("dictionary.json"), true);

    if (count($res) != 0) {
        $id = $res[count($res)]["id"] + 1;
    } else {
        $id = 1;
    }

    $name = clear($_POST["name"]);
    $phone = clear($_POST["phone"]);

    $pattern_phone = '/(?:\+|\d)[\d\-\(\) ]{9,}\d/';
    $pattern_name = '/^.*[^А-яЁё].*/';
    $err = [];
    $flag = 0;


    if (!preg_match($pattern_phone, $phone)) {
        $err['phone'] = '<small class="text-danger">Неправильный формат номера телефона</small>';
        $flag = 1;
    }
    if (!preg_match($pattern_name, $name)) {
        $err['name'] = '<small class="text-danger">Имя не на русском языке</small>';
        $flag = 1;
    }

    if ($flag == 0) {
        $arr = array(
            'id' => $id,
            'name' => $name,
            'phone' => $phone
        );
        $res[$id] = $arr;
        file_put_contents("dictionary.json", json_encode($res));

        $err['success'] = '<div class="alert alert-success">Контакт добавлен</div>';

    }
}