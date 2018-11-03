<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;


$this->title = Yii:: $app->name;
?>

<div align="center">
<img src="autopartes.png" width="50%" height="50%">
  
        <h2>¡Bienvenido a AutoPartes!</h2>
        <p>De todo para tu automovil</p>

        <p><a class="btn btn-lg btn-success" href="" data-toggle="tooltip" title="Comprar">Comprar</a></p>


    <div class ="col-md-50% text-center">
        <h1>Nuestros productos</h1>
<div class="container">
    <div align=" center">
    <div class ="col-md-11">
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
</div>