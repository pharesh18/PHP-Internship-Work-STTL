<?php
class Category
{
    private $category_name;
    private $category_image;

    public function __construct($POST)
    {  
        $this->category_name = $POST['category_name'];
        $this->category_image = "";
    }

    public function Create_Category($conn)
    {
        $imgPath = '';
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . time() . basename($_FILES["category_image"]["name"]);

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["category_image"]["tmp_name"], $targetFile)) {

        $imgPath = $targetFile;
        }
        
        $sql = "INSERT INTO `category` (category_name, category_image)
                    VALUES('$this->category_name', '$imgPath')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        } else {
            die("Error while adding data");
        }
    }

    public static function getAllCategories($conn)
    {
        $sql = "SELECT * FROM category";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return $result;
        } else {
            die("Error while fetching data");
        }
    }

    public static function getCategoryById($conn, $id)
    {
        $sql = "SELECT * FROM category WHERE category_id = $id";

        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while fetching category");
        } else {
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
    }
    public function UpdateCategoryById($conn, $id)
    {
        $imgPath = '';
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $targetFile = $targetDir . time() . basename($_FILES["category_image"]["name"]);

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (move_uploaded_file($_FILES["category_image"]["tmp_name"], $targetFile)) {

        $imgPath = $targetFile;
        }
        
        $sql = "UPDATE category SET
                    category_name = '$this->category_name',
                    category_image = '$imgPath'
                WHERE category_id = $id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            return true;
        } else {
            die("Error in updating the data");
        }
    }

    public static function DeleteCategoryById($conn, $id)
    {
        $sql = "DELETE FROM category WHERE category_id = $id";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die("Error while deleting category");
        } else {
            return true;
        }
    }
}