<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=$directoryAsset;?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=dmstr\widgets\Menu::widget(
    [
        'options' => ['class' => 'sidebar-menu'],
        'items'   => [
            [
                'label'  => Yii::t('app', '首页'),
                'url'    => Yii::$app->homeUrl,
                'icon'   => 'fa fa-dashboard',
                'active' => Yii::$app->request->url === Yii::$app->homeUrl,
            ],
            ['label' => '内容', 'options' => ['class' => 'header']],
            [
                'label' => '商品',
                'icon'  => 'fa fa fa-cog',
                'url'   => '#',
                'items' => [
                    ['label' => '产品分类', 'icon' => 'glyphicon glyphicon-list-alt', 'url' => ['category/index']],
                ],
            ],
            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
            ['label' => '系统', 'options' => ['class' => 'header']],
            ['label' => '用户', 'icon' => 'fa fa-users', 'url' => ['/user/admin/index'], 'visible' => Yii::$app->user->can('userView'),
            ],
            [
                'label' => '系统',
                'icon'  => 'fa fa fa-cog',
                'url'   => '#',
                'items' => [
                    ['label' => '用户', 'icon' => 'fa fa-user', 'url' => ['/user/index']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
                    [
                        'label' => 'Level One',
                        'icon'  => 'fa fa-circle-o',
                        'url'   => '#',
                        'items' => [
                            ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                            [
                                'label' => 'Level Two',
                                'icon'  => 'fa fa-circle-o',
                                'url'   => '#',
                                'items' => [
                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                                    ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#'],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]
);?>

    </section>

</aside>
