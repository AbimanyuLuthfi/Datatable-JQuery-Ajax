<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataModel;

class DataController extends BaseController
{
    /**
     * GET : /
     */
    public function index()
    {
        $dataModel = new DataModel();
        $getItems = $dataModel->getAllItem();
        $data = [
            'array_data' => $getItems,
        ];
        return view('homepage-test', $data);
    }

    /**
     * POST : create/data/post
     */
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

    /**
     * GET : data/index
     */
    public function fetch_data(){
        $dataModel = new DataModel;
        $getItems['data'] = $dataModel->getAllItem();
        return $this->response->setJSON($getItems);
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
