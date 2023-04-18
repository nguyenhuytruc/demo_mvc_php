<?php

class dbConfig{
    private $host = "localhost";
    private $name = "root";
    private $pass = "";
    private $dbname = "student";
    protected $conn = null;
    protected $result = null;
    

    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
        if (!$this->conn) {
            echo "Kết nối thất bại";
            exit();
        }else{
            mysqli_set_charset($this->conn, 'utf8');
        }
        return $this->conn;
    }

    // Thực thi câu lệnh truy vấn
    public function execute($sql){
        $this->result = $this->conn->query($sql);
        return $this->result;

    }

    // phương thức lấy dữ liệu
    public function getData(){
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    //phương thức lấy toàn bộ dữ liệu
    public function getAllData($table){
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }

     // phương thức lấy dữ liệu theo id
     public function getDataId($table, $id){
        $sql = "SELECT * FROM $table WHERE id = '$id'";
        $this->execute($sql);
        if($this->num_rows()>0){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }

    // phương thức đếm số bản ghi
    public function num_rows(){
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        }else{
            $num = 0;
        }
        return $num;
    }

    // phương thức thêm dữ liệu
    public function insertData($full_name, $email, $phone){
        $sql = "INSERT INTO student(id, full_name, email, phone) VALUES(null, '$full_name', '$email', '$phone')";
        return $this->execute($sql);
    }
    
    //phương thức sửa dữ liệu
    public function updateData($id, $full_name, $email, $phone){
        $sql = "UPDATE student SET full_name = '$full_name', email = '$email', phone = '$phone' WHERE id = '$id'";
        return $this->execute($sql);
    }

    //phương thức xóa
    public function deleteData($id, $table){
        $sql = "DELETE FROM $table WHERE id = '$id'";
        return $this->execute($sql);
    }


    // phương thức tìm kiếm dữ liệu
    public function searchData($table, $key){
        $sql = "SELECT * FROM $table WHERE full_name REGEXP '$key' ORDER BY id DESC";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
            while($datas = $this->getData()){
                $data[] = $datas;
            }
        }
        return $data;
    }
}
?>