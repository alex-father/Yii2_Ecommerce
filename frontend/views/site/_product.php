<?php 

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
$this->title = Yii:: $app->name;


 ?>


            <div class ="col-sm-8 col-md-3 text-center">
                    <div class = "thumbnail">
                        <img src="<?php echo Yii::getAlias('@web').'/'.$model->image ?>" class="card-mg-top">
                    
                        <div class="caption">
                            <h3><?= Html::encode($model->name)?></h3>
                            <p><?= HtmlPurifier::process($model->description)?></p>
                            <p><?=Html::a('Add to de Cart',['/shop/cart/add','id' =>$model->id],['class'=> 'btn btn-sm btn-success'])?>

                            <?=Html::a('Details',['/shop/product/detail','id'=>$model->id],['class'=> 'btn btn-sm btn-success'])?></p>
                        </div>
                    </div>
            </div>

