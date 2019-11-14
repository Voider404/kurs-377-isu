<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'news_id') ?>

    <?= $form->field($model, 'news_name') ?>

    <?= $form->field($model, 'news_text') ?>

    <?= $form->field($model, 'news_img') ?>

    <?= $form->field($model, 'news_category') ?>

    <?php // echo $form->field($model, 'news_author') ?>

    <?php // echo $form->field($model, 'news_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
