<?php

namespace M2M\CollectionsExercise\Model\Product;

use \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use \Magento\Catalog\Model\ProductRepository;

//Model - dodajemy
//ResourceModel - zapisujemy
//Collection - pobieramy

class Product
{
    protected $productCollectionFactory;
    protected $productRepository;
        
    public function __construct(
        CollectionFactory $productCollectionFactory,
        ProductRepository $productRepository,
    )
    {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productRepository = $productRepository;
    }
    
    public function getProductCollection()
    {
        // Creates and filters a collection of products which type is equal to simple
        $collection = $this->productCollectionFactory->create()->addAttributeToFilter('type_id', ['eq' => 'simple'])->getData();

        // Prints array $collection
        print("<pre>".print_r($collection,true)."</pre>");
    }

    public function getProductCollectionBySku(string $sku)
    {
        // Returns product with the given sku
        $product = $this->productRepository->get($sku);

        return $product;
    }
}
?>