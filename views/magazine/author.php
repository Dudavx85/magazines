<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <h1><?php echo $title ?: 'New Author' ?></h1>

<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success')?>
    </div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error')?>
    </div>
<?php endif;?>

<?php $form = ActiveForm::begin(['options' => ['id'=>'journal_form']]) ?>
<?=  $form->field($form_author, 'first_name') ?>
<?=  $form->field($form_author, 'last_name') ?>

<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>

