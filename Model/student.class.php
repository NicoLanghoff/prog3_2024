<?php
include("database.class.php");

class Student{
    private $idSudent=null;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthday=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $user=null;
    private $password=null;
    private $student=null;
    private $conexion=null;

    public function __construct($dni, $surname, $name, $birthday, $phone, $address,$email, $password, $school){
        $this->dni=$dni;
        $this->surname=$surname;
        $this->name=$name;
        $this->birthday=$birthaday;
        $this->phone=$phone;
        $this->address=$address;
        $this->email=$email;
        $this->password=$password;
        $this->school=$school;
    }

    public function addStudent(){
        //crear consulta
        $sql="INSERT INTO students (dni, surname, name, birthday, phone, address, email, password, school) VALUES (".$this->dni.", '".$this->surname."', '".$this->name."', '".$this->birthday."', '".$this->phone."', '".$this->address."', '".$this->email."', '".$this->password."', '".$this->school."')";
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
        return $result;
    }

    public function editStudent(){
        $sql="UPDATE FROM students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."', birthday='".$this->birthday."', phone='".$this->phone."', address='".$this->address."', email='".$this->email."', password='".$this->password."', school='".$this->school."' WHERE idStudent=".$this->idStudent;
        
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
        return $result;

    }

    public function deleteStudent(){
        $sql="DELETE FROM students WHERE idStudents=".$this->idStudent." ";
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
        return $result;
    }

    public function getStudent(){
        $sql="SELECT * FROM students WHERE idStudents=".$this->idStudent." ";
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
        if($result){
            if($row=$result->fetch_assoc()){
                $this->dni=$row("dni");
                $this->surname=$row("surname");
                $this->name=$row("name");
                $this->birthday=$row("birthday");
                $this->phone=$row("phone");
                $this->address=$row("address");
                $this->email=$row("email");
                $this->password=$row("password");
                $this->school=$row("school");
            }
        }
    }

    public function getAllStudents(){

    }




    //Getter y Setter
    public function getIdStudent(){
        return $this->idStudent;
    }

    public function setIdStudent($idStudent){
        $this->idStudent=$idStudent;
    } 
    //repetir lo mismo en todas las variables 
}