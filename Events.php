<?php

namespace humhub\modules\Stripe;

use Yii;
use yii\helpers\Url;
use humhub\modules\Stripe\widgets\StripeFrame;
use humhub\models\Setting;

class Events extends \yii\base\BaseObject
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('StripeModule.base', 'Stripe Settings'),
            'url' => Url::toRoute('/Stripe/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fab fa-Stripe"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'Stripe' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addStripeFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::class);
        $event->sender->addWidget(StripeFrame::class, [], [
            'sortOrder' => Setting::Get('timeout', 'Stripe')
        ]);
    }
}
