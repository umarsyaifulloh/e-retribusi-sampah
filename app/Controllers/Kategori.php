<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Kategori extends BaseController
{
    protected $useTimestamps = true;
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Kategori',
            'kategori' => $this->kategoriModel->getKategori()
        ];
        return view('kategori/index', $data);
    }

    public function detail($kategori_id)
    {
        $data = [
            'title' => 'Detail Kategori',
            'kategori' => $this->kategoriModel->getKategori($kategori_id)
        ];

        return view('kategori/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'tambah kategori',
            'kategori' => $this->kategoriModel->get()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        return view('kategori/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'kategori_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ],
            'kategori_besaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'besaran harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('kategori/create')->withInput();
        } else {
            $this->kategoriModel->save([
                'kategori_nama' => $this->request->getVar('kategori_nama'),
                'kategori_besaran' => $this->request->getVar('kategori_besaran')
            ]);
            session()->setFlashdata('pesan', 'Kategori Berhasil Ditambahkan');
            return redirect()->to('/kategori');
        }
    }
    public function delete($kategori_id)
    {
        $this->kategoriModel->where(['kategori_id' => $kategori_id])->delete();
        session()->setFlashdata('pesan', 'Data kategori Berhasil Dihapus');
        return redirect()->to('/kategori');
    }


    public function edit($kategori_id)
    {
        $data = [
            'title' => 'Ubah kategori',
            'validation' => \Config\Services::validation(),
            'kategori' => $this->kategoriModel->getKategori($kategori_id),
        ];

        return view('kategori/edit', $data);
    }


    public function update($kategori_id)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'kategori_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ],
            'kategori_besaran' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'besaran harus diisi.',
                ]
            ]
        ])) {
            return redirect()->to('kategori/edit/' . $kategori_id)->withInput();
        }

        $ubah = [
            'kategori_nama' => $this->request->getVar('kategori_nama'),
            'kategori_besaran' => $this->request->getVar('kategori_besaran')
        ];
        $this->kategoriModel->update($kategori_id, $ubah);
        session()->setFlashdata('pesan', 'Data Kategori Berhasil Diubah');

        return redirect()->to('/kategori');
    }
}
