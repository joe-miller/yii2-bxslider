<?php

namespace joemiller\bxslider;

use yii\web\AssetBundle;

class BxsliderAsset extends AssetBundle {

    public $sourcePath = '@bower/bx-slider.js/src';
    public $css = ['less/jquery.bxslider.less'];
    public $js = ['js/jquery.bxslider.js'];
    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
