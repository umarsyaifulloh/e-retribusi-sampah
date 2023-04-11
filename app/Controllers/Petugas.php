<?php

namespace App\Controllers;

use App\Models\PetugasModel;
// use \Mailjet\Resources;

class Petugas extends BaseController
{
    protected $petugasModel;
    public function __construct()
    {
        $this->petugasModel = new PetugasModel();
        // $this->mj = new \Mailjet\Client(getenv('APIkey'), getenv('Secretkey'), true, ['version' => 'v3.1']);
    }
    public function index()
    {
        $data = [
            'title' => 'Data Petugas',
            'petugas' => $this->petugasModel->getPetugas()
            // $Petugas = $this->PetugasModel->findAll()
        ];

        // $PetugasModel = new \App\Models\PetugasModel()
        // $PetugasModel = new PetugasModel();

        return view('petugas/index', $data);
    }

    public function detail($petugas_id)
    {
        $data = [
            'title' => 'Daftar Petugas',
            'petugas' => $this->petugasModel->getPetugas($petugas_id)
        ];

        return view('petugas/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Petugas',
            'validation' => \Config\Services::validation()
        ];

        return view('petugas/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'petugas_nama' => [
                'rules' => 'required|is_unique[petugas.petugas_nama]',
                'errors' => [
                    'required' => 'nama harus diisi.',
                    'is_unique' => 'nama sudah terdaftar'
                ]
            ],
            'petugas_no' => [
                'rules' => 'required|is_unique[petugas.petugas_no]',
                'errors' => [
                    'required' => 'no harus diisi.',
                    'is_unique' => 'no sudah terdaftar'
                ]
            ],
            'petugas_wilayah' => [
                'rules' => 'required|is_unique[petugas.petugas_wilayah]',
                'errors' => [
                    'required' => 'wilayah harus diisi.',
                    'is_unique' => 'wilayah sudah terdaftar'
                ],
            ]
        ])) {
            return redirect()->to('petugas/create')->withInput();
        } else {
            // $this->PetugasModel->insert($petugas);
            $this->petugasModel->save([
                'petugas_nama' => $this->request->getVar('petugas_nama'),
                'petugas_no' => $this->request->getVar('petugas_no'),
                'petugas_wilayah' => $this->request->getVar('petugas_wilayah')
            ]);
            session()->setFlashdata('pesan', 'Data Petugas Berhasil Ditambahkan');
            return redirect()->to('/petugas');
        }
    }



    public function delete($petugas_id)
    {
        $this->petugasModel->where(['petugas_id' => $petugas_id])->delete();
        session()->setFlashdata('pesan', 'Data Petugas Berhasil Dihapus');
        return redirect()->to('/petugas');
    }


    public function edit($petugas_id)
    {
        $data = [
            'title' => 'Form ubah Data Petugas',
            'validation' => \Config\Services::validation(),
            'petugas' => $this->petugasModel->getPetugas($petugas_id),
        ];

        return view('petugas/edit', $data);
    }


    public function update($petugas_id)
    {
        if (!$this->validate([
            'petugas_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ],
            'petugas_no' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'no harus diisi.',
                ]
            ],
            'petugas_wilayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('petugas/edit/' . $this->request->getVar('petugas_id'))->withInput();
        }

        $ubah = [
            'petugas_nama' => $this->request->getVar('petugas_nama'),
            'petugas_no' => $this->request->getVar('petugas_no'),
            'petugas_wilayah' => $this->request->getVar('petugas_wilayah')

        ];

        $this->petugasModel->update($petugas_id, $ubah);
        session()->setFlashdata('pesan', 'Data Petugas Berhasil Diubah');

        return redirect()->to('/petugas');
    }
}
