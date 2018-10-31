<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;


$this->title = Yii:: $app->name;
?>

<div align="center">
<img src="autopartes.png" width="50%" height="50%">
  
        <h1>¡Bienvenido a AutoPartes!</h1>
        <h3>De todo para tu automovil</h3>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Comprar</a></p>
        
<div align="center">
<div class ="row">
    <div class ="col-md-10 ">
        <h1>Nuevos productos</h1>
        <div class ="row">
            <?=ListView::widget([
            'dataProvider' => $dataProviderProduct,
            'itemView' => '_product',
            ]) ?>
         </div>
    </div>
</div>
</div>

</div>