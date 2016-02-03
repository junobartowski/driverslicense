<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HomeController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionHome()
    {
        return $this->render('index');
    }
}
