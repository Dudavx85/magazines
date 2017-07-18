<?php

namespace app\models;


use yii\db\ActiveRecord;

/**
 * Class MagazineForm
 * @package app\models
 */
class MagazineForm extends ActiveRecord
{
    public $title;
    public $description;
    public $publish_at;

    public function attributeLabels()
    {
        return [
            'title' => 'Название журнала*',
            'description' => 'Краткое описание журнала',
        ];
    }

    public function rules()
    {
        return[
            [ ['title', 'description'], 'trim'],
            [ ['title'], 'required'],
            [ 'title', 'string', 'min' => 3, 'tooShort' => 'Введите минимум 3 символа'],
            [ 'description', 'string', 'max' => 255, 'tooLong' => 'Введите не более 255 символов'],
        ];

    }
}