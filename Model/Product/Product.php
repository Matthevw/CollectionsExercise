<?php

namespace M2M\CollectionsExercise\Model\Product;

use \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use \Magento\Catalog\Model\ResourceModel\Product\Collection;
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
        $collection = $this->productCollectionFactory->create()->addAttributeToFilter('type_id', ['eq' => 'simple'])->getData();
        //create() - tworzy obiekt klasy CollectionFactory :)
        // var_dump($collection);
        print("<pre>".print_r($collection,true)."</pre>");
    }

    public function getProductCollectionBySku(string $sku)
    {
        $product = $this->productRepository->get($sku);
        // var_dump($product->getName());
        // print("<pre>".print_r($product->getName(),true)."</pre>");
        return $product;
    }

}
?>