

<?php

/**
 * database class
 * 
 * digunakan untuk mendeklarasikan koneksi database m
 * enggunakan metode PDO
 */
class database
{
    
    public $user ='root';
    public $db_name ='comment';
    public $password ='';
    public $server ="localhost";
    public $port ='3306';
    
    // public $user ='unaux_34083372';
    // public $db_name ='unaux_34083372_comment';
    // public $password ='w1r4n4t4';
    // public $server ="sql310.unaux.com";
    // public $port ='3306';
    public $koneksi;
    public $status;
    
    /**
     * __construct
     *
     * Menjalankan koneksi database 
     * 
     * @return void
     */ 
    public function __construct()
    {
        $data_conn = "host=".$this->server."; port=".$this->port."; dbname=".$this->db_name."; user=".$this->user."; password=".$this->password.";";
        try {
            $this->koneksi = new PDO('mysql:'.$data_conn);
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->koneksi->exec("SET NAMES utf8mb4");
             $this->status = "connection success fully";
        } catch (PDOException $e) {
            $error_mesage = $e->getMessage();
             $this->status = "error : PDO ".$error_mesage;
            exit();
        }
        return $this->koneksi;
    }

    public function getStatus()
    {
        return $this->status;
    }

    // public function getData()
    // {
    //     $sql = "select * from tb_comments";
    //     $select = $this->koneksi->prepare($sql);
    //     $select->execute();
    //     $data = $select->fetchAll(PDO::FETCH_OBJ);
    //     return json_encode($data);
    // }

    // public function createData($nama = null, $ucapan = null, $kehadiran = null, $create_at_timestamp = null)
    // {
    //     try {
    //         $query = "INSERT INTO tb_comments (nama, ucapan, kehadiran, create_at_timestamp) VALUES (:nama, :ucapan, :kehadiran, :create_at_timestamp)";
    //         $stmt = $this->koneksi->prepare($query);
    
    //         // Bind parameters
    //         $stmt->bindParam(':nama', $nama, PDO::PARAM_STR);
    //         $stmt->bindParam(':ucapan', $ucapan, PDO::PARAM_STR);
    //         $stmt->bindParam(':kehadiran', $kehadiran, PDO::PARAM_STR);
    //         $stmt->bindParam(':create_at_timestamp', $create_at_timestamp, PDO::PARAM_STR);
    
    //         // Execute the statement
    //         $stmt->execute();
    
    //         // Return the ID of the newly inserted record (optional)
    //         return $this->koneksi->lastInsertId();
    //     } catch (PDOException $e) {
    //         die("Error: " . $e->getMessage());
    //     }
    // }
}
    
?>