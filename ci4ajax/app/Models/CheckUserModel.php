<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CheckUserModel extends Model{

    protected $table = "ajaxcheckuser";
    protected $primaryKey = 'ID';
    protected $allowedFields = ['ID', 'firstname', 'surname', 'email', 'username', 'password', 'email'];
    protected $returnType = 'array';

    public function getUserWhere($username)
    {
        $data = $this->where('username', $username)->first();
        if ($data){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
}