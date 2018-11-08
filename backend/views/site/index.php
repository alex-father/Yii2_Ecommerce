<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\widgets\ListView;

$this->title = Yii:: $app->name;
?>
<div class="site-index">

    <div align="center">
        <img src="/autopartes.png" width="50%" height="50%">
        <h2>Sistema de Administracion de AutoPartes</h2>
        <h4>Agencia Guastatoya</h4>
        </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Ubicación</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d482.0560115548512!2d-90.06925840478937!3d14.856201686384065!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cadb9e19d61f46f!2sColegio+de+Aplicaciones+Integradas+-CAIGUA-!5e0!3m2!1ses-419!2sgt!4v1541218508182" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
