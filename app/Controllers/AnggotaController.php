<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    // public function index()
    // {
    //     return view('dashboard/anggota');
    // }

    // public function index()
    // {
    //     $sm = new AnggotaModel();
    //     $anggota_data = $sm->findAll();
    //     return View('dashboard_home', ['anggota_data' => $anggota_data]);
    // }

    // public function view($id = false)
    // {
    //     $sm = new AnggotaModel();
    //     $xp = $sm->find($id);
    //     return View('dashboard_home', ['xp' => $xp]);
    // }

    public function add()
    {
        return View('anggota/form_input');
    }

    public function proses()
    {
        $sm = new AnggotaModel();
        $sm->insert($this->request->getPost());
        return redirect()->to(base_url('anggota'));
    }

    // public function edit($id)
    // {
    //     $sm = new AnggotaModel();
    //     $data_semester['data_semester'] = $sm->find($id);
    //     return view('form_edit', $data_semester);
    // }

    public function edit($id = false)
    {
        $sm = new AnggotaModel();
        $xp = $sm->find($id);
        return view('anggota/form_edit', ['xp' => $xp]);
    }

    public function edit_data()
    {
        $sm = new AnggotaModel();
        $sm->update($this->request->getPost('id'), $this->request->getPost());
        return redirect()->to(base_url('anggota'));
    }

    public function delete_data($id = false)
    {
        $sm = new AnggotaModel();
        $sm->delete($id);
        return redirect()->to(base_url('anggota'));
    }

    // public function delete($id = false)
    // {
    //     $sm = new AnggotaModel();
    //     $sm->delete($id);
    //     return redirect()->to(base_url());
    // }
}
