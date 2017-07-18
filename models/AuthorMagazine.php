<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.07.2017
 * Time: 11:57
 */

namespace app\models;


use yii\db\ActiveRecord;

class AuthorMagazine extends ActiveRecord
{
    public static function tableName()
    {
        return 'author_magazines';
    }
}