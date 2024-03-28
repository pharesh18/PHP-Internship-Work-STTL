<!-- <?php 
    class DB{
        private $conn;

        public function connect_db(){
            $servername = "localhost:8383";
            $username = "root";
            $password = "";
            $dbname = "crud_form";
            $this->conn = mysqli_connect($servername, $username, $password, $dbname);

            if(!$this->conn){
                die("Connection failed" . mysqli_connect_error());
            }

            return $this->conn;
        }
    }
?> -->