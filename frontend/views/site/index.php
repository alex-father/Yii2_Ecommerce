<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;


$this->title = Yii:: $app->name;
?>


    <div class="jumbotron">
        <h1>Welcome to Auto Parts!</h1>

        <p class="lead">De todo para tu automovil</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Compra ya!</a></p>
    </div>
   

<div class ="row">
    <div class ="col-md-9 text-center">
        <h1>New Products</h1>
        <div class ="row">

            <?=ListView::widget([
            'dataProvider' => $dataProviderProduct,
            'itemView' => '_product',
            ]) ?>
         </div>
    </div>

</div>