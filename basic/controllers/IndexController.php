<?php

namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        //$arr = array('a'=>123,'b'=>234);
        //return $this->render('index',$arr);
        $arr = array('a'=>123,'b'=>234);
        return $this->render('index',$arr);
        //return $this->render('index',['a' => 123]);
    }

}
