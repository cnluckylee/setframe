<?php

return [
    // ----------------------- 权限配置 ----------------------- //

    'authItem' => [

    ],

    // ----------------------- 快捷入口 ----------------------- //

    'cover' => [

    ],

    // ----------------------- 菜单配置 ----------------------- //

    'menu' => [
        [
            'title' => '数据迁移生成',
            'route' => 'migrate/index',
            'icon' => '',
            'params' => [
            ],
        ],
        [
            'title' => 'Excel导入权限',
            'route' => 'auth/index',
            'icon' => '',
            'params' => [
            ],
        ],
        [
            'title' => '省市区爬虫',
            'route' => 'province-job/index',
            'icon' => '',
            'params' => [
            ],
        ],
        [
            'title' => 'PHP信息',
            'route' => 'php-info/index',
            'icon' => '',
            'params' => [
            ],
        ],
    ],
];