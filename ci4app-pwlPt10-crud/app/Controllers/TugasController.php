<?php

namespace App\Controllers;

use App\Models\TugasModel;

class TugasController extends BaseController
{
    public function index()
    {
        $model = new TugasModel();
        $data['tugas'] = $model->findAll();

        return view('tugas/index', $data);
    }

    public function create()
    {
        return view('tugas/create');
    }

    public function store()
    {
        $model = new TugasModel();

        $data = [
            'nama_tugas' => $this->request->getPost('tugas'),
            'deadline' => $this->request->getPost('deadline')
        ];

        $model->insert($data);

        return redirect()->to(base_url('/tugas'));
    }

    public function edit($id)
    {
        $model = new TugasModel();
        $data['tugas'] = $model->find($id);

        return view('tugas/edit', $data);
    }

    public function update($id)
    {
        $model = new TugasModel();

        $data = [
            'nama_tugas' => $this->request->getPost('tugas'),
            'deadline' => $this->request->getPost('deadline')
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('/tugas'));
    }

    public function delete($id)
    {
        $model = new TugasModel();
        $model->delete($id);

        return redirect()->to(base_url('/tugas'));
    }
}
