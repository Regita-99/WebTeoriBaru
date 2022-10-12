<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Baju;

class BajuController extends BaseController
{
    public function index()
    {
        $bajumodel = new Baju();
        $kumpbaju = $bajumodel->findAll();

        $data = ['title' => 'Baju', 'kumpbaju' => $kumpbaju];

        return view('pages/list', $data);
    }
    public function store()
    {
        $data = [
            'title' => 'Create Baju'
        ];

        return view('pages/home');
    }
    public function create()
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/home');
        }
        $baju = new Baju();
        $bajuinput = [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $baju->insert($bajuinput);
        return redirect()->to('/pages');
    }

    public function delete($id)
    {
        $bajumodel = new Baju();
        $bajumodel->delete($id);
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $bajumodel = new Baju();


        $data = [
            'kumpbaju' => $bajumodel->find($id),
            'title' => 'Edit Data'
        ];

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'npm' => 'required|numeric',
            'nama' => 'required|string',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $bajumodel = new Baju();
        $data = [
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $bajumodel->update($id, $data);

        return redirect()->to('/pages');
    }
}
