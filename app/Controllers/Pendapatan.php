<?php

namespace App\Controllers;

use App\Models\PendapatanModel;

class Pendapatan extends BaseController
{
    protected $useTimestamps = true;
    protected $pendapatanModel;
    public function __construct()
    {
        $this->pendapatanModel = new PendapatanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'pendapatan' => $this->pendapatanModel->getPendapatan()
        ];
        return view('pendapatan/index', $data);
    }

    public function detail($pendapatan_id)
    {
        $data = [
            'title' => 'Detail Target',
            'pendapatan' => $this->pendapatanModel->getPendapatan($pendapatan_id)
        ];

        return view('pendapatan/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'tambah pendapatan',
            'pendapatan' => $this->pendapatanModel->get()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        return view('pendapatan/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'pendapatan_tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tahun harus diisi.',
                ]
            ],
            'pendapatan_besar_target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'besaran harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('pendapatan/create')->withInput();
        } else {
            $this->pendapatanModel->save([
                'pendapatan_tahun' => $this->request->getVar('pendapatan_tahun'),
                'pendapatan_besar_target' => $this->request->getVar('pendapatan_besar_target')
            ]);
            session()->setFlashdata('pesan', 'Besaran Target Berhasil Ditambahkan');
            return redirect()->to('/pendapatan');
        }
    }
    public function edit($pendapatan_id)
    {
        $data = [
            'title' => 'Ubah Target',
            'validation' => \Config\Services::validation(),
            'pendapatan' => $this->pendapatanModel->getPendapatan($pendapatan_id),
        ];

        return view('pendapatan/edit', $data);
    }


    public function update($pendapatan_id)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'pendapatan_tahun' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tahun harus diisi.',
                ]
            ],
            'pendapatan_besar_target' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'besaran harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('pendapatan/edit/' . $pendapatan_id)->withInput();
        }

        $ubah = [
            'pendapatan_tahun' => $this->request->getVar('pendapatan_tahun'),
            'pendapatan_besar_target' => $this->request->getVar('pendapatan_besar_target')
        ];
        $this->pendapatanModel->update($pendapatan_id, $ubah);
        session()->setFlashdata('pesan', 'Data Target Berhasil Diubah');

        return redirect()->to('/pendapatan');
    }
}
