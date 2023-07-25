<?php
namespace app\components;

use app\models\User;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord as BaseActiveRecord;
use yii\db\Expression;


class ActiveRecord extends BaseActiveRecord{
    public function init(){
        $this->on(self::EVENT_AFTER_FIND, [$this, 'dateRestore']);
        $this->on(self::EVENT_AFTER_REFRESH, [$this, 'dateRestore']);
        
        parent::init();
    }

    public function dateFormat($attribute){
        $date = \DateTime::createFromFormat("d/m/Y", $this->$attribute);
        $this->$attribute = $date->format('Y-m-d');
    }
}