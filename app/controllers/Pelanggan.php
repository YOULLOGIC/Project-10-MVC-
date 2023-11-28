<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller {
    public object $model;
    public object $golonganModel;

    public function __construct()
    {
        parent::cekLogin();
        $this->model         = new \App\Models\Pelanggan();
        $this->golonganModel = new \App\Models\Golongan();
    }

    public function index()
    {
        $data["rows"]       = $this->model->show(); 
        $data["gol"]        = $this->golonganModel->show();
        $this->dashboard('pelanggan/index', $data);
    }

    public function save()
    {
        $this->model->save();
        header("Location:" . URL . "/pelanggan");
    }

    public function edit($id)
    {
        $data["row"] = $this->model->edit($id);
        $this->dashboard('pelanggan/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header("Location:" . URL . "/pelanggan");
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header("Location:" . URL . "/pelanggan");
    }

}

?>