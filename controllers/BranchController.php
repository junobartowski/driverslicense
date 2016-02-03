<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BranchController extends Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionBranch()
    {
        return $this->render('index');
    }
}
