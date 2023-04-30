<?php

namespace humhub\modules\stripe;

return [
    'id' => 'stripe',
    'class' => 'humhub\modules\stripe\Module',
    'namespace' => 'humhub\modules\stripe',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\Stripe\Events',
                'addStripeFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\Stripe\Events',
                'addStripeFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\Stripe\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
