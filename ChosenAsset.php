<?php
/**
 * @copyright Copyright (c) 2020 ArtInt
 * @link https://github.com/kv4nt
 * @version 1.0.0
 */
namespace kv4nt\chosen;

use yii\web\AssetBundle;

/**
 * ChosenAsset
 *
 * @autror kv[4]nt <ArtInt>
 * @link https://github.com/kv4nt/yii2-chosen
 * @see http://harvesthq.github.io/chosen
 */
class ChosenAsset extends AssetBundle
{
    public $sourcePath = '@bower/chosen';

    public $js = [
        'chosen.jquery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
