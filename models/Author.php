<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.07.2017
 * Time: 11:51
 */

namespace app\models;


use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return 'authors';
    }
}