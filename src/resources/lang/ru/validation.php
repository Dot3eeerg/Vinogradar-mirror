<?php

return [
    'required' => 'Поле :attribute обязательно для заполнения.',
    'email' => 'Введите корректный адрес электронной почты.',
    'min' => [
        'string' => 'Поле :attribute должно содержать минимум :min символов.',
    ],
    'confirmed' => 'Пароли не совпадают.',
    'unique' => 'Пользователь с такой почтой уже существует.',
    'attributes' => [
        'email' => 'электронная почта',
        'password' => 'пароль',
        'name' => 'имя',
        'surname' => 'фамилия',
    ],
];
