<?php
namespace console\controllers;
//namespace app\commands;

use Yii;
use common\models\User;
use common\models\Admin;
use yii\console\Controller;
class UsersInitController extends Controller{

    // In console: ./yii users-init/init
    public function actionInit(){
        $user = Admin::find()->where(['username' => 'admin'])->one();
        $userRole = Yii::$app->authManager->getRole('admin');
        Yii::$app->authManager->assign($userRole, $user->getId());

        $user = Admin::find()->where(['username' => 'ZHAISANBEK'])->one();
        $userRole = Yii::$app->authManager->getRole('teacher');
        Yii::$app->authManager->assign($userRole, $user->getId());

        $user = User::find()->where(['username' => 'Иван'])->one();
        $userRole = Yii::$app->authManager->getRole('learner');
        Yii::$app->authManager->assign($userRole, $user->getId());
    }

}