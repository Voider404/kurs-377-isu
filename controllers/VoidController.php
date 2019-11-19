<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Events;
use app\models\News;

class VoidController extends Controller


 public function actionCalendar()
{
    $array = Events::find()->all();
}