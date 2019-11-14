<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_img')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_category')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_author')->textInput() ?>

    <?= $form->field($model, 'news_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
