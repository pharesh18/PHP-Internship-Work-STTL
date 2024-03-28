<?php
class Product
{
    private $product_name;
    private $product_image;

    public function __construct($POST)
    {  
        $this->product_name = $POST['product_name'];
        $this->product_image = "";
    }
    public function createProduct($conn)
    {
        $imgPath = '';
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . time() . basename($_FILES["product_image"]["name"]);

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile)) {

        $imgPath = $targetFile;
        }
        
        $sql = "INSERT INTO `products` (product_name, product_image)
                    VALUES('$this->product_name', '$imgPath')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        } else {
            die("Error while adding data");
        }
    }

    public static function getAllProducts($conn)
    {
        $sql = "SELECT * FROM products ";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return $result;
        } else {
            die("Error while fetching data");
        }
    }

    public static function getProductById($conn, $id)
    {
        $sql = "SELECT * FROM products WHERE product_id = $id";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while fetching product");
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
    public function UpdateProductById($conn, $id)
    {
        $imgPath = '';
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . time() . basename($_FILES["product_image"]["name"]);

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $targetFile)) {

        $imgPath = $targetFile;
        }

        $sql = "UPDATE products SET
                    product_name = '$this->product_name',
                    product_image = '$imgPath'
                WHERE product_id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        } else {
            die("Error in updating the data");
        }
    }

    public static function DeleteProductById($conn, $id)
    {
        $sql = "DELETE FROM products WHERE product_id = $id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while deleting product");
        } else {
            return true;
        }
    }
}