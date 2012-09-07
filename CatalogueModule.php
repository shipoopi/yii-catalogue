<?php
class CatalogueModule extends CWebModule
{

    //category config init
    public $categoryModelClass = "CatalogueCategory";
    public $viewCategory = 'view';
    public $categoryInfoModelClass = "CatalogueCategoryInfo";
    public $actionCategoryView = "/catalogue/product/view";
    public $categoryPropertiesModelClass = "CatalogueProperty";
    public $viewListCategory = "list";
    public $categoryIndexView = 'index';

    public $categoryCompareView = "compare";

    //product config init
    public $viewProduct = 'view';
    public $actionProductView = "/catalogue/product/view";
    public $productModelClass = "CatalogueProduct";
    public $productInfoModelClass = "CatalogueProductInfo";

    public $searchWidgetView = "search";
    public $searchResultView = "found";
    /**
     * @return array AdminGenModule integration
     */
    public function adminGenLinks()
    {
        $menuItems = array('label' => 'Catalogue', 'url' => '', 'items' => array(
            array('url' => array("/catalogue/category/admin"), 'label' => Yii::t("app", "Manage Categories"), 'visible' => !Yii::app()->user->isGuest),
            array('url' => array("/catalogue/product/admin"), 'label' => Yii::t("app", "Manage Product"), 'visible' => !Yii::app()->user->isGuest)
        ),
        'visible' => !Yii::app()->user->isGuest);
        return $menuItems;
    }

    public function siteMapLinks()
    {
        $menuItems = array('label' => 'Catalogue', 'url' => '/catalogue/category');
        return $menuItems;
    }

}