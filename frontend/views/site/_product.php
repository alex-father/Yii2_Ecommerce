<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;
$this->title = Yii:: $app->name;

 ?>
<link rel="stylesheet" href="fontawesome/css/all.css" crossorigin="anonymous">

<div class ="col-sm-8 col-md-3 text-center">
    <div class = "thumbnail">
        <img src="<?php echo Yii::getAlias('@web').'/'.$model->image ?>" class="card-mg-top">
        <div class="caption">
            <h3><?= Html::encode($model->name)?></h3>
            <?= HtmlPurifier::process($model->description)?>
            <h2>Q.<?=$model->price?></h2>
            <p>

            <?=Html::a('<i class="fas fa-shopping-cart"></i> Carrito',['/site/cart','id' =>$model->id],['class'=> 'btn btn-sm btn-success'])?>
            
            <?=Html::a('<i class="fas fa-search"></i> Detalles',['','id' =>$model->id],['class'=> 'btn btn-sm btn-success'])?>

           <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal"><i class="fas fa-search"></i>Detalles2</button>
            
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <?= Html::encode($model->name)?>
                        </div>
                        <div class="modal-body">
                            <p><?= HtmlPurifier::process($model->description)?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>