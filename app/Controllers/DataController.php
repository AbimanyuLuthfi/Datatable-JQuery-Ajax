<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;

class DataController extends BaseController
{
    public function index()
    {
        $dataModel = new DataModel();
        $getItems = $dataModel->getAllItem();
        $data = [
            'array_data' => $getItems,
        ];
        return view('homepage-test', $data);
    }

    public function admin_data_create()
    {
        $nama = $this->request->getVar('nama');
        $no_telp = $this->request->getVar('no_telp');
        $email = $this->request->getVar('email');

        $dataModel = new DataModel();
        $data = $dataModel->createItem([
            'nama' => $nama,
            'no_telp' => $no_telp,
            'email' => $email,
        ]);

        $data = ['status' => 'Success Inserted New Data'];
            return $this->response->setJSON($data);
    }

    public function list_data_index(){

        $dataModel = new DataModel();
        $getItems = $dataModel->getAllItem();
        $result = array();
        $i = 1;
        foreach ($getItems as $data => $value){
            $result['data'][] = array (
                $i++,
                $value['nama'],
                $value['no_telp'],
                $value['email'],
            );
        }
        echo json_encode($result);
    }
}
