<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    // ['label' => '功能菜单', 'options' => ['class' => 'header']],
                    ['label' => '系统设置', 'icon' => 'fa fa-cogs', 'url' => ['/bemanage/config']],
                    ['label' => '站内关键字', 'icon' => 'fa fa-cogs', 'url' => ['/bemanage/pkey']],
                    ['label' => '分类管理', 'icon' => 'fa fa-newspaper-o', 'url' => ['/bemanage/category']],
                    ['label' => '轮播图管理', 'icon' => 'fa fa-image', 'url' => ['/bemanage/banner']],
                    ['label' => '关于我们', 'icon' => 'fa fa-flag-o', 'url' => ['/bemanage/about']],
                    ['label' => '钜禾服务', 'icon' => 'fa fa-newspaper-o', 'url' => ['/bemanage/service']],
                    ['label' => '案例赏析', 'icon' => 'fa fa-play-circle', 'url' => ['/bemanage/cases']],
                    ['label' => '文化传播', 'icon' => 'fa fa-camera-retro', 'url' => ['/bemanage/culture']],
                    ['label' => '合作伙伴', 'icon' => 'fa fa-mortar-board', 'url' => ['/bemanage/partner']],
                    ['label' => '合作流程', 'icon' => 'fa fa-i-cursor', 'url' => ['/bemanage/process']],
                    ['label' => '联系我们', 'icon' => 'fa fa-desktop', 'url' => ['/bemanage/contact']],
                ],
            ]
        ) ?>

    </section>

</aside>
