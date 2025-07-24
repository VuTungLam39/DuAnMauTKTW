<?php
// có class chứa các function thực thi xử lý logic 
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new ProductModel();
    }

    public function Home()
    {
        $title = "Đây là trang chủ nhé hahaa";
        $thoiTiet = "Hôm nay trời có vẻ là mưa";
        require_once './views/trangchu.php';
    }

    public function getAllProduct()
    {
        $products = $this->modelProduct->getAllProduct();
        require_once './views/product/list.php';
    }

    public function getHotProducts()
    {
        return $this->modelProduct->getHotProducts();
    }

    public function Product()
    {
        // Lấy danh sách sản phẩm hot
        $hotProducts = $this->getHotProducts();

        // Truyền dữ liệu vào view
        require_once './views/sanpham.php';
    }
}
