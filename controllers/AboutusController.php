<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AboutusController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionAboutus()
    {
        return $this->render('index');
    }
}
