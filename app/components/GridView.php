<?php

namespace app\components;


use yii\helpers\Html;
use kartik\grid\GridView as KartikGridView;
use app\components\ExportMenu;

class GridView{
    public static function widget($dataProvider, $searchModel, $title, $columns){
        return KartikGridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $columns,
            'panel' => [
                'heading'=> '<i class="fa fa-list"></i> ' . Html::encode($title) . " Listing",
                'titleOptions' => ['class' => 'mb-0 float-left'],
                'summaryOptions' => ['class' => 'summary-container'],
                'headingOptions' => ['class' => 'card-header bg-primary text-white flex-row-reverse'],
                'type'=>'primary',
                'footer'=>false,
            ],
            'toggleDataOptions' => ['all' => ['class' => 'btn btn-primary'], 'page' => ['class' => 'btn btn-primary']],
        ]);
    }
}