<?php

namespace victorruan\dropzone;

use yii\web\AssetBundle;

class DropZoneAsset extends AssetBundle
{
    public $sourcePath = 'dropzone/downloads';
    public $css = [
        'css/dropzone.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
    ];
    public $js = [
        'dropzone.min.js',
    ];
}
