<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CoordinatesModel extends Model{

    protected $table = "coords";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'team', 'lat', 'lon'];
    protected $returnType = 'array';

    public function getCoords()
    {
        $coords = $this->findAll();
        return $coords;
    }
}
