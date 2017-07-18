<?php

namespace app\models;

use yii\db\ActiveRecord;

class Magazine extends ActiveRecord{

    public static function tableName(){
        return 'magazines';
    }
}