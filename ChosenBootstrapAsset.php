<?php
/**
 * @copyright Copyright (c) 2020 ArtInt
 * @link https://github.com/kv4nt
 * @version 1.0.0
 */
namespace kv4nt\chosen;

use yii\web\AssetBundle;

/**
 * ChosenBootstrapAsset
 *
 * @author kv[4]nt <ArtInt>
 * @link https://github.com/kv4nt/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 */
class ChosenBootstrapAsset extends AssetBundle
{
    public $sourcePath = '@bower/chosen-bootstrap';

    public $css = [
        'chosen.bootstrap.css',
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
        'kv4nt\chosen\ChosenAsset',
    ];
}
