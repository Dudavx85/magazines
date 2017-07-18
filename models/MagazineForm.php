<?php

namespace app\models;

use yii\base\Model;

/**
 * Class MagazineForm
 * @package app\models
 */
class MagazineForm extends Model
{
    public $first_name;
    public $last_name;
    public $title;
    public $description;
    public $publish_at;

    public function attributeLabels()
    {
        return [
            'first_name' => 'Имя автора*',
            'last_name' => 'Фамилия автора*',
            'title' => 'Название журнала*',
            'description' => 'Краткое описание журнала',
        ];
    }

    public function rules()
    {
        return[
            [ ['first_name', 'last_name', 'title', 'description'], 'trim'],
            [ ['first_name', 'last_name', 'title'], 'required'],
            [ 'last_name', 'string', 'min' => 3, 'tooShort' => 'Введите минимум 3 символа'],
            [ 'title', 'string', 'min' => 3, 'tooShort' => 'Введите минимум 3 символа'],
            [ 'description', 'string', 'max' => 255, 'tooLong' => 'Введите не более 255 символов'],
        ];

    }
}