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
                            <p><?= HtmlPurifier::process($model->description)?></p>
                            <h2>Q.<?=$model->price?></h2>
                            <p><?=Html::a('<i class="fas fa-shopping-cart"></i>  Add to de Cart',['/site/cart','id' =>$model->id],['class'=> 'btn btn-sm btn-success'])?>

                            <?=Html::a('Details',['/shop/product/detail','id'=>$model->id],['class'=> 'btn btn-sm btn-success'])?></p>
                        </div>

                     </div>

            </div>


            

