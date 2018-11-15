<?php
return [
    '超级管理员' => [
        'type' => 1,
        'description' => '拥有所有后台管理权限',
        'children' => [
            '所有权限',
            '/admin/*',
            '/site/*',
            '/bemanage/client/*',
            '/bemanage/competition/*',
            '/bemanage/index/*',
            '/bemanage/news/*',
            '/bemanage/rule/*',
            '/bemanage/score/*',
            '/bemanage/shop/*',
            '/bemanage/slider/*',
            '/bemanage/upload/*',
            '/bemanage/user/*',
            '/bemanage/vote/*',
            '/admin/user/login',
            '/admin/user/logout',
            '/admin/user/signup',
            '/admin/user/change-password',
        ],
    ],
    '所有权限' => [
        'type' => 2,
        'children' => [
            '/admin/*',
            '/site/*',
            '/bemanage/client/*',
            '/bemanage/competition/*',
            '/bemanage/index/*',
            '/bemanage/news/*',
            '/bemanage/rule/*',
            '/bemanage/score/*',
            '/bemanage/shop/*',
            '/bemanage/slider/*',
            '/bemanage/upload/*',
            '/bemanage/user/*',
            '/bemanage/vote/*',
            '/admin/user/login',
            '/admin/user/logout',
            '/admin/user/signup',
            '/admin/user/change-password',
            '/bemanage/about/index',
            '/bemanage/about/view',
            '/bemanage/about/create',
            '/bemanage/about/update',
            '/bemanage/about/delete',
            '/bemanage/about/*',
            '/bemanage/contact/index',
            '/bemanage/contact/view',
            '/bemanage/contact/create',
            '/bemanage/contact/update',
            '/bemanage/contact/delete',
            '/bemanage/contact/*',
            '/bemanage/category/index',
            '/bemanage/category/view',
            '/bemanage/category/create',
            '/bemanage/category/update',
            '/bemanage/category/delete',
            '/bemanage/category/*',
            '/lang/*',
            '/bemanage/product/*',
            '/bemanage/config/index',
            '/bemanage/config/view',
            '/bemanage/config/create',
            '/bemanage/config/update',
            '/bemanage/config/delete',
            '/bemanage/config/*',
            '/bemanage/config/delete-all',
            '/bemanage/config/change-status',
            '/bemanage/category/delete-all',
            '/bemanage/category/change-status',
            '/bemanage/service/*',
            '/bemanage/banner/index',
            '/bemanage/banner/view',
            '/bemanage/banner/create',
            '/bemanage/banner/update',
            '/bemanage/banner/delete',
            '/bemanage/banner/*',
            '/bemanage/banner/delete-all',
            '/bemanage/banner/change-status',
            '/bemanage/service/upload',
            '/bemanage/service/index',
            '/bemanage/service/view',
            '/bemanage/service/create',
            '/bemanage/service/update',
            '/bemanage/service/delete',
            '/bemanage/service/delete-all',
            '/bemanage/service/change-status',
            '/bemanage/about/upload',
            '/bemanage/cases/upload',
            '/bemanage/cases/index',
            '/bemanage/cases/view',
            '/bemanage/cases/create',
            '/bemanage/cases/update',
            '/bemanage/cases/delete',
            '/bemanage/cases/delete-all',
            '/bemanage/cases/change-status',
            '/bemanage/cases/*',
            '/bemanage/contact/upload',
            '/bemanage/index/index',
            '/bemanage/news/upload',
            '/bemanage/news/index',
            '/bemanage/news/view',
            '/bemanage/news/create',
            '/bemanage/news/update',
            '/bemanage/news/delete',
            '/bemanage/news/delete-all',
            '/bemanage/news/change-status',
            '/bemanage/upload/image',
            '/bemanage/upload/file',
            '/bemanage/upload/delete-pic',
            '/lang/language',
            '/bemanage/partner/upload',
            '/bemanage/partner/index',
            '/bemanage/partner/view',
            '/bemanage/partner/create',
            '/bemanage/partner/update',
            '/bemanage/partner/delete',
            '/bemanage/partner/delete-all',
            '/bemanage/partner/change-status',
            '/bemanage/partner/*',
            '/bemanage/culture/upload',
            '/bemanage/culture/index',
            '/bemanage/culture/view',
            '/bemanage/culture/create',
            '/bemanage/culture/update',
            '/bemanage/culture/delete',
            '/bemanage/culture/delete-all',
            '/bemanage/culture/change-status',
            '/bemanage/culture/*',
        ],
    ],
    '/admin/*' => [
        'type' => 2,
    ],
    '/site/*' => [
        'type' => 2,
    ],
    '/bemanage/client/*' => [
        'type' => 2,
    ],
    '/bemanage/competition/*' => [
        'type' => 2,
    ],
    '/bemanage/index/*' => [
        'type' => 2,
    ],
    '/bemanage/news/*' => [
        'type' => 2,
    ],
    '/bemanage/rule/*' => [
        'type' => 2,
    ],
    '/bemanage/score/*' => [
        'type' => 2,
    ],
    '/bemanage/shop/*' => [
        'type' => 2,
    ],
    '/bemanage/slider/*' => [
        'type' => 2,
    ],
    '/bemanage/upload/*' => [
        'type' => 2,
    ],
    '/bemanage/user/*' => [
        'type' => 2,
    ],
    '/bemanage/vote/*' => [
        'type' => 2,
    ],
    '普通访客' => [
        'type' => 1,
        'description' => '没有后台管理权限的访客',
        'children' => [
            '/site/*',
        ],
    ],
    '内容编辑' => [
        'type' => 1,
        'description' => '拥有一般的内容编辑权限',
        'children' => [
            '/bemanage/slider/*',
            '/bemanage/rule/*',
            '/bemanage/index/*',
            '/admin/user/login',
            '/admin/user/logout',
            '/admin/user/change-password',
        ],
    ],
    '/admin/user/login' => [
        'type' => 2,
    ],
    '/admin/user/logout' => [
        'type' => 2,
    ],
    '/admin/user/signup' => [
        'type' => 2,
    ],
    '/admin/user/change-password' => [
        'type' => 2,
    ],
    '/bemanage/about/index' => [
        'type' => 2,
    ],
    '/bemanage/about/view' => [
        'type' => 2,
    ],
    '/bemanage/about/create' => [
        'type' => 2,
    ],
    '/bemanage/about/update' => [
        'type' => 2,
    ],
    '/bemanage/about/delete' => [
        'type' => 2,
    ],
    '/bemanage/about/*' => [
        'type' => 2,
    ],
    '/bemanage/contact/index' => [
        'type' => 2,
    ],
    '/bemanage/contact/view' => [
        'type' => 2,
    ],
    '/bemanage/contact/create' => [
        'type' => 2,
    ],
    '/bemanage/contact/update' => [
        'type' => 2,
    ],
    '/bemanage/contact/delete' => [
        'type' => 2,
    ],
    '/bemanage/contact/*' => [
        'type' => 2,
    ],
    '/bemanage/category/index' => [
        'type' => 2,
    ],
    '/bemanage/category/view' => [
        'type' => 2,
    ],
    '/bemanage/category/create' => [
        'type' => 2,
    ],
    '/bemanage/category/update' => [
        'type' => 2,
    ],
    '/bemanage/category/delete' => [
        'type' => 2,
    ],
    '/bemanage/category/*' => [
        'type' => 2,
    ],
    '/lang/*' => [
        'type' => 2,
    ],
    '/bemanage/product/*' => [
        'type' => 2,
    ],
    '/bemanage/config/index' => [
        'type' => 2,
    ],
    '/bemanage/config/view' => [
        'type' => 2,
    ],
    '/bemanage/config/create' => [
        'type' => 2,
    ],
    '/bemanage/config/update' => [
        'type' => 2,
    ],
    '/bemanage/config/delete' => [
        'type' => 2,
    ],
    '/bemanage/config/*' => [
        'type' => 2,
    ],
    '/bemanage/config/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/config/change-status' => [
        'type' => 2,
    ],
    '/bemanage/category/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/category/change-status' => [
        'type' => 2,
    ],
    '/bemanage/service/*' => [
        'type' => 2,
    ],
    '/bemanage/banner/index' => [
        'type' => 2,
    ],
    '/bemanage/banner/view' => [
        'type' => 2,
    ],
    '/bemanage/banner/create' => [
        'type' => 2,
    ],
    '/bemanage/banner/update' => [
        'type' => 2,
    ],
    '/bemanage/banner/delete' => [
        'type' => 2,
    ],
    '/bemanage/banner/*' => [
        'type' => 2,
    ],
    '/bemanage/banner/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/banner/change-status' => [
        'type' => 2,
    ],
    '/bemanage/service/upload' => [
        'type' => 2,
    ],
    '/bemanage/service/index' => [
        'type' => 2,
    ],
    '/bemanage/service/view' => [
        'type' => 2,
    ],
    '/bemanage/service/create' => [
        'type' => 2,
    ],
    '/bemanage/service/update' => [
        'type' => 2,
    ],
    '/bemanage/service/delete' => [
        'type' => 2,
    ],
    '/bemanage/service/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/service/change-status' => [
        'type' => 2,
    ],
    '/bemanage/about/upload' => [
        'type' => 2,
    ],
    '/bemanage/cases/upload' => [
        'type' => 2,
    ],
    '/bemanage/cases/index' => [
        'type' => 2,
    ],
    '/bemanage/cases/view' => [
        'type' => 2,
    ],
    '/bemanage/cases/create' => [
        'type' => 2,
    ],
    '/bemanage/cases/update' => [
        'type' => 2,
    ],
    '/bemanage/cases/delete' => [
        'type' => 2,
    ],
    '/bemanage/cases/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/cases/change-status' => [
        'type' => 2,
    ],
    '/bemanage/cases/*' => [
        'type' => 2,
    ],
    '/bemanage/contact/upload' => [
        'type' => 2,
    ],
    '/bemanage/index/index' => [
        'type' => 2,
    ],
    '/bemanage/news/upload' => [
        'type' => 2,
    ],
    '/bemanage/news/index' => [
        'type' => 2,
    ],
    '/bemanage/news/view' => [
        'type' => 2,
    ],
    '/bemanage/news/create' => [
        'type' => 2,
    ],
    '/bemanage/news/update' => [
        'type' => 2,
    ],
    '/bemanage/news/delete' => [
        'type' => 2,
    ],
    '/bemanage/news/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/news/change-status' => [
        'type' => 2,
    ],
    '/bemanage/upload/image' => [
        'type' => 2,
    ],
    '/bemanage/upload/file' => [
        'type' => 2,
    ],
    '/bemanage/upload/delete-pic' => [
        'type' => 2,
    ],
    '/lang/language' => [
        'type' => 2,
    ],
    '/bemanage/partner/upload' => [
        'type' => 2,
    ],
    '/bemanage/partner/index' => [
        'type' => 2,
    ],
    '/bemanage/partner/view' => [
        'type' => 2,
    ],
    '/bemanage/partner/create' => [
        'type' => 2,
    ],
    '/bemanage/partner/update' => [
        'type' => 2,
    ],
    '/bemanage/partner/delete' => [
        'type' => 2,
    ],
    '/bemanage/partner/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/partner/change-status' => [
        'type' => 2,
    ],
    '/bemanage/partner/*' => [
        'type' => 2,
    ],
    '/bemanage/culture/upload' => [
        'type' => 2,
    ],
    '/bemanage/culture/index' => [
        'type' => 2,
    ],
    '/bemanage/culture/view' => [
        'type' => 2,
    ],
    '/bemanage/culture/create' => [
        'type' => 2,
    ],
    '/bemanage/culture/update' => [
        'type' => 2,
    ],
    '/bemanage/culture/delete' => [
        'type' => 2,
    ],
    '/bemanage/culture/delete-all' => [
        'type' => 2,
    ],
    '/bemanage/culture/change-status' => [
        'type' => 2,
    ],
    '/bemanage/culture/*' => [
        'type' => 2,
    ],
];
