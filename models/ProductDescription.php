<?php

Yii::import('application.models._base.BaseProductDescription');

class ProductDescription extends BaseProductDescription
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}