<?php

namespace frontend\modules\shop\controllers;

use common\models\product;
use yii\web\ForbiddenHttException;

class ProductController extends \yii\web\Controller
{
    public function actionDetail($id)
    {   
    	$model = $this->findModel($id);
        return $this->render('detail',[
    	'model' => $model,
    	]);
    }

    public function actionIndex($id)
    {
        return $this->render('index');
    }

    protected function findModel($id)
    {
      $model = product::findOne($id);
      if(!=$model){
      	     throw new Exception("Error Precessing Request", 1);
      }
      		return $model;
    }

}
