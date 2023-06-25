<?php

namespace M2M\CollectionsExercise\Model\Category;

use \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollection;
use \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollection;

class Category
{

    /**
     * @var CategoryCollection
     */
    protected $categoryCollection;

    public function __construct
    (
        CategoryCollection $categoryCollection,
    ) {
        $this->categoryCollection = $categoryCollection;
    }

    public function getCategoriesCollection()
    {
        $categories = $this->categoryCollection->create()
            ->addAttributeToSelect('path')
            ->getData();
            
        print("<pre>".print_r($categories,true)."</pre>"); die;
        return $categories;
    }
}