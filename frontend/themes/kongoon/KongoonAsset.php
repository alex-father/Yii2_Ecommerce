<?php 

  namespace frontend\themes\kongoon;

  use yii\web\AssetBundle;

  class KongoonAsset extends AssetBundle
  {

    public $sourcePath = '@frontend/themes/kongoon';
  	public $css = [
  	  'css/bootstrap.css',
  	  'css/style.css'
  	  ];
  	public $js = [];
  	public $depends = [
           'yii\web\YiiAsset',
           'yii\bootstrap\BootstrapAsset'
            ];
  }





