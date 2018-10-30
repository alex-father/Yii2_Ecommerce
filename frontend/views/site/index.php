<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;


$this->title = Yii:: $app->name;
?>


    <div class="jumbotron">
        <h1>Welcome to Auto Parts!</h1>

        <p class="lead">De todo para tu automovil</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Compra ya!</a></p>
    </div>
   

<div class ="row">
    <div class ="col-md-9">
        <h1>New Products</h1>
        <div class ="row">
            <?php foreach($products as $p) { ?>

                <div class ="col-sm-6 col-md-4 text-center">
                    <div class = "thumbnail">
                        
                       
                           <img src="<?php echo Yii::getAlias('@web').'/'.$p->description;?>" class="card-mg-top">
                    
                        <div class="caption">
                            <h3><?= Html::encode($p->name)?></h3>
                            <p><?= HtmlPurifier::process($p->description)?></p>
                            <p>
                               
                                 
                             <?=Html::a('Add to de Cart',['cart/add','id' =>$p->id],['class'=> 'btn btn-sm btn-success'])?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php } ?>


                
         </div>
    </div>

</div>