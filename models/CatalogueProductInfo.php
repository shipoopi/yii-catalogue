<?php

Yii::import('catalogue.models._base.BaseProductInfo');

class CatalogueProductInfo extends BaseProductInfo
{
    public static function model($className = null)
    {
        if (!$className) $className = Yii::app()->getModule("catalogue")->productInfoModelClass;
        return parent::model($className);
    }

    public function relations()
    {   $relations = parent::relations();

        $relations['product'][1] = Yii::app()->getModule("catalogue")->productModelClass;


        return $relations;
    }
}