<?php
class Writeyourcode_Learnnews_Model_Products_Api extends Mage_Api_Model_Resource_Abstract
{        
        public function myapimethod( $message)
        {
            return "This is the message: ".$message;
        }
		public function activeList($websiteId)
        {
			$collection = Mage::getModel('catalog/product')->getCollection()->setPageSize(10);
			
			
			$products =  array();			
			foreach($collection as $value) {
				$product = Mage::getModel('catalog/product')->load($value->getId());
				$productsEntity = new stdClass();
				$productsEntity->product_id 	= $product->getId();
				$productsEntity->product_name 	= $product->getName();
				$productsEntity->sku 	= $product->getSku();
				$productsEntity->price 	= $product->getPrice();				
				$products[]     = $productsEntity;
			}		
            
			return $products;
        }
		public function inactiveList($websiteId)
        {
			$collection = Mage::getModel('catalog/product')->getCollection()->setPageSize(10);
			
			
			$products =  array();			
			foreach($collection as $value) {
				$product = Mage::getModel('catalog/product')->load($value->getId());
				$productsEntity = new stdClass();
				$productsEntity->product_id 	= $product->getId();
				$productsEntity->product_name 	= $product->getName();
				$productsEntity->sku 	= $product->getSku();
				$productsEntity->price 	= $product->getPrice();				
				$products[]     = $productsEntity;
			}		
            
			return $products;
        }
		
		
}