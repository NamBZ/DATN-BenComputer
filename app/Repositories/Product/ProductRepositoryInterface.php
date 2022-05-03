<?php
namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getProductDetails($slug, $id);

    public function getProductRatings($product_id, $rating_per_page);

    public function getRelatedProducts($product, $amount);

    public function findAndDeleteImage($product_id, $image_id);

    public function createImage($product_id, $image_info);
}
