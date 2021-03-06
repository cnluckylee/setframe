<?php

namespace addons\RfArticle;

use Yii;
use common\helpers\MigrateHelper;
use backend\interfaces\AddonWidget;

/**
 * 卸载
 *
 * Class UnInstall
 * @package addons\RfArticle
 */
class UnInstall implements AddonWidget
{
    /**
     * @param $addon
     * @return mixed|void
     * @throws \yii\base\InvalidConfigException
     * @throws \yii\web\NotFoundHttpException
     * @throws \yii\web\UnprocessableEntityHttpException
     */
    public function run($addon)
    {
        MigrateHelper::downByPath([
            '@addons/RfArticle/console/migrations/'
        ]);
    }
}