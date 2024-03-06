<?php

require 'Models/Product.php';

class ProductTest extends PHPUnit\Framework\TestCase
{
    public function testFind()
    {

        $product = Product::Find(1);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals(1, $product->getId());
    }

    public function testCreate()
    {

        $params = array(
            "nome" => "Nuovo Prodotto",
            "prezzo" => 10.99,
            "marca" => "Nuova Marca"
        );

        $product = Product::Create($params);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals("Nuovo Prodotto", $product->getNome());
    }

    public function testFetchAll()
    {
        $products = Product::FetchAll();

        $this->assertIsArray($products);
        $this->assertNotEmpty($products);
        $this->assertInstanceOf(Product::class, $products[0]);
    }

    public function testUpdate()
    {
        $product = Product::Find(1);
        $params = array(
            "prezzo" => 19.99
        );

        $updatedProduct = $product->update($params);

        $this->assertInstanceOf(Product::class, $updatedProduct);
        $this->assertEquals(19.99, $updatedProduct->getPrezzo());
    }

    public function testDelete()
    {
        $product = Product::Find(1);
        $result = $product->delete();

        $this->assertTrue($result);
    }
}
