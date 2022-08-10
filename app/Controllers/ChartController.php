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

        foreach($record as $row)
        {
            $inv[] = [
                'name' => $row->location,
                'data'   => floatval($row->amount)
            ];
            // var_dump(json_encode($inv));
            $datachart[] = ['name' => $row->location, 'data' => [floatval($row->amount)]];
            // var_dump($datachart);
            $datapie[] = ['name' => $row->location, 'y' => floatval($row->amount)];
            $value[] = $row->amount;
            // var_dump(json_encode($datachart));
        }
        $data['inventory'] = ($inv);
        // var_dump($data['inventory']);
        // $data['value'] = json_encode($value);
        $data['value'] = json_encode($value);
        $data['datapie'] = ($datapie);
        // var_dump($datapie);
        $data['datachart'] = ($datachart);
        // var_dump($datachart);
        return view('view_chart', $data);
    }
}
