<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\IncomingRequest;

class Chart extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'inventory';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'code', 'location', 'amount', 'category'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_data()
    {
        $this->db->table('inventory')
                         ->select('COUNT(amount) as amount, location')
                         ->groupBy('location')
                         ->orderBy('amount', 'DESC')
                         ->get();
                         
    }
    public function get()
    {
        return $this->db->query("SELECT COUNT(amount) as amount, location FROM inventory GROUP BY location ORDER BY amount DESC");
    }

    public function getData()
    {
        // return $this->db->table('inventory')
        //               ->select('amount', 'location')
        //               ->countAll('amount')
        //               ->groupBy('location')
        //               ->orderBy('amount', 'DESC')
        //               ->get();
        
        return $this->db->table('inventory')
        ->select('COUNT(amount) as amount,location')
        ->groupBy('location')
        ->orderBy('amount DESC')
        ->get();
    }
}
