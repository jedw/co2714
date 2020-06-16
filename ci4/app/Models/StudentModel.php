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
        $studentModel = new StudentModel;
        $student = $studentModel->findAll();
        return $student;
    }

    public function addnewStudent($data){
        $studentModel = new StudentModel;
        $studentModel->insert($data);
    }

    public function getStudentWhere($id){
        $studentModel = new StudentModel;
        $data = $studentModel->where('id', $id)->first();
        return $data;
    }

    public function deleteStudentWhere($id){
        $studentModel = new StudentModel;
        $studentModel->where('id', $id)->delete();
    }

    public function updateStudentWhere($data, $id){
        $studentModel = new StudentModel;
        $studentModel->update($id, $data);
    }
}