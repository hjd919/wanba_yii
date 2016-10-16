<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?=Html::encode($this->title);?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ;;;;;;;;;;;;;?>

    <p>
        <?=Html::a('创建分类', ['create'], ['class' => 'btn btn-success']);?>
    </p>
    <?=GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel'  => $searchModel,
    'columns'      => [
        ['class' => 'yii\grid\SerialColumn'],

        'id',
        'category_parentid',
        'name',
        'pinyin',
        'ord',
        // 'is_display',
        // 'icon',
        // 'url:url',
        // 'spider_url:url',
        // 'is_recommend',
        // 'create_by',
        // 'create_at',

        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ],
]);?>
</div>
