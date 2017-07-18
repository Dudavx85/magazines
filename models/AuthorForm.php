<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.07.2017
 * Time: 13:32
 */

namespace app\models;


use yii\db\ActiveRecord;

class AuthorForm extends ActiveRecord
{
    public function attributeLabels()
    {
        return [
            'first_name' => 'Имя автора*',
            'last_name' => 'Фамилия автора*',
        ];
    }

    public function rules()
    {
        return[
            [ ['first_name', 'last_name'], 'trim'],
            [ ['first_name', 'last_name'], 'required'],
            [ 'last_name', 'string', 'min' => 3, 'tooShort' => 'Введите минимум 3 символа'],
        ];

    }
}