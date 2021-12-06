<?php
class Blog_model
{

    // private $blog = [
    //     ["penulis" => "Ayu Sri", "judul" => "Belajar PHP MVC", "tulisan" => "Tutorial PHP MVC "],
    //     ["penulis" => "Ayu Sri", "judul" => "Belajar OOP PHP", "tulisan" => "Tutorial PHP OOP"],
    //     ["penulis" => "Ayu Sri", "judul" => "Belajar PHP Dasar", "tulisan" => "Tutorial PHP Dasar"]
    // ];
    private $dbh;
    private $stmt;
    public function __construct()
    {
        // data source name
        $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";
        try {
            $this->dbh = new PDO($dsn, "root", "");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    public function getAllBlog()
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM idblog");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
