<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Hobi;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HobiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hobis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hobi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hobi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'warna_kesukaan',
            'makanan_kesukaan',
            'hobi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Hobi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
