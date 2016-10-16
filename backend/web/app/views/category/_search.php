<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_parentid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'pinyin') ?>

    <?= $form->field($model, 'ord') ?>

    <?php // echo $form->field($model, 'is_display') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <?php // echo $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'spider_url') ?>

    <?php // echo $form->field($model, 'is_recommend') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
