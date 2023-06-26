<?php

namespace M2M\CollectionsExercise\Model\Category;

use \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory as CategoryCollection;

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
        // Creates a collection of categories then prints array $categories
        $categories = $this->categoryCollection->create()
            ->getData();
            
        print("<pre>".print_r($categories,true)."</pre>");

        // Returns array $categories
        return $categories;
    }
}