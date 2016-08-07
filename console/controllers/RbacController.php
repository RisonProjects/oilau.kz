<?php
namespace console\controllers;
//namespace app\commands;
use Yii;
use yii\console\Controller;

class RbacController extends Controller{
    // In console: ./yii rbac/init
    public function actionInit(){
        $role = Yii::$app->authManager->createRole('admin');
        $role->description = 'Администратор';
        Yii::$app->authManager->add($role);

        $role = Yii::$app->authManager->createRole('teacher');
        $role->description = 'Учитель';
        Yii::$app->authManager->add($role);

        $role = Yii::$app->authManager->createRole('learner');
        $role->description = 'Ученик';
        Yii::$app->authManager->add($role);
    }
}