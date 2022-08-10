<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Chart;

class ChartController extends BaseController
{
    public function index()
    {
        $model = new Chart();
        $data = $model->findAll();
        $datapoints = [];

        foreach($data as $d)
        {
            $datapoints[] = array(
                "location" => $d['location'],
                "data"     => [
                    intval($d['amount'])
                ]
                );
        }
        return view('view_chart', [
            "location" => json_encode(array($datapoints)),
            "data" => json_encode(array("amount")),
        ]);
    }
    public function get_data()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('inventory');
        $query = $builder->select('COUNT(amount) as amount, location');
        $query = $builder->groupBy('location')->orderBy('amount', 'DESC')->get();
        $record = $query->getResult();

        // get data chart
        $datachart[] = array();
        foreach($record as $row){
            $jon = array('name'=> $row->location);
            $amt = array('amount' => $row->amount);
            array_push($datachart, $jon, $amt);
        }
        $data['datachart'] = json_encode($datachart);
        // die(var_dump(json_encode($datachart)));
        $inventory = [];
        $inventory2 = [];
        foreach($record as $row)
        {
           
        }

        // die(var_dump(json_encode($inventory)));
        $data['inventory'] = json_encode($inventory);
        $data['inventory2'] = json_encode($inventory2);
        return view('view_chart', $data);

        // get data chart
        $datachart[] = array();
        foreach($record as $row){
            $jon = array('name'=> $row->location);
            $amt = array('amount' => $row->amount);
            array_push($datachart, $jon, $amt);
        }
        $data['datachart'] = json_encode($datachart);
        // die(var_dump(json_encode($datachart)));
    }
}
