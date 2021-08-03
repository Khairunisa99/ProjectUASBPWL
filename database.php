<?php
class database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con, "select * from ");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input(){
        mysqli_query($this->con, "insert into  values ('', '$', '$', '$')");
    }
    function hapus($id){
        mysqli_query($this->con, "delete from  where id='$id'");
    }
    function edit($id){
        $data = mysqli_query($this->con, "select * from  where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update(){
        mysqli_query($this->con, "update  set ='$',='$',='$' where id='$id'");
    }
}
?>

