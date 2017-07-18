<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php foreach ($data as $key){
    echo $key->title. '<br/>';
}
?>