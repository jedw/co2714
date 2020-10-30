<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class StudentModel extends Model{

    protected $table = "students";
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name','last_name','address','email', 'mobile'];
    protected $returnType = 'array';
    
    public function getAllStudents(){
        $student = $this->findAll();
        return $student;
    }

    public function addnewStudent($data){
        $this->insert($data);
    }

    public function getStudentWhere($id){
        $data = $this->where('id', $id)->first();
        return $data;
    }

    public function deleteStudentWhere($id){
        $this->where('id', $id)->delete();
    }

    public function updateStudentWhere($data, $id){
        $this->update($id, $data);
    }
}