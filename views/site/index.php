<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<h1> ВСТАВЬТЕ ТЕКСТ</h1>
<? echo Html::tag("td", Html::tag("a", "GII", ["class"=>"btn btn-primary","href"=>Url::toRoute('/gii' ),])); ?>

