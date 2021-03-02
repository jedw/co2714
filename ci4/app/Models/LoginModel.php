<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class LoginModel extends Model{

    protected $table = "login";
    protected $primaryKey = 'id';
    protected $allowedFields = ['username','password'];
    protected $returnType = 'array';
    
   
    public function register ($data){
        $this->insert($data);
    }

    public function login($username){
        $data = $this->where('username', $username)->first();
        return $data;
    }
}