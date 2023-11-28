<?php

namespace App\Controllers;

use App\Core\Controller;

class Dashboard extends Controller {
	public object $modelUser;
	public object $modelGolongan;
	public object $modelPelanggan;
	public function __construct()
	{
		parent::cekLogin();
		$this->modelUser      = new \App\Models\User();
		$this->modelPelanggan = new \App\Models\Pelanggan();
		$this->modelGolongan  = new \App\Models\Golongan();
	}

	public function index()
	{
		$data['user']      = $this->modelUser->dataUser();
		$data['pelanggan'] = $this->modelPelanggan->dataPelanggan();
		$data['golongan']  = $this->modelGolongan->dataGolongan();
		$this->dashboard('dashboard/index', $data);
	}

	public function logout()
	{
		session_destroy();
		header('location:' . URL);
	}
}
