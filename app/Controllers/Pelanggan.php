<?php

namespace App\Models;


namespace App\Controllers;

// use App\Database\Migrations\Users;
use App\Models\PelangganModel;
use App\Models\KategoriModel;
// use \Mailjet\Resources;

class Pelanggan extends BaseController
{
    protected $pelangganModel;
    protected $kategoriModel;
    public function __construct()
    {
        $this->pelangganModel = new PelangganModel();
        $this->kategoriModel = new KategoriModel();
        // $this->mj = new \Mailjet\Client(getenv('APIkey'), getenv('Secretkey'), true, ['version' => 'v3.1']);
    }
    public function index()
    {
        $data['pelanggan'] = $this->pelangganModel->getAll();
        return view('pelanggan/index', $data);
        // $data = [

        //     'title' => 'Users',
        //     'users' => $this->users->getUsers()
        // ];
    }

    public function detail($pelanggan_id)
    {
        $data['pelanggan'] = $this->pelangganModel->getDetail($pelanggan_id);
        return view('pelanggan/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pelanggan',
            //get all kategori
            'kategori' => $this->kategoriModel->get()->getResultArray(),
            'validation' => \Config\Services::validation()

        ];

        // dd($data);

        return view('pelanggan/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'pelanggan_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ],
            'pelanggan_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alamat harus diisi.',
                ],
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'provinsi harus diisi.',
                ],
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kecamatan harus diisi.',
                ],
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kabupaten harus diisi.',
                ],
            ],
            'pelanggan_telp' => [
                'errors' => [
                    'rules' => 'required|is_unique[pelanggan.pelanggan_telp]',
                    'required' => 'status harus diisi.',
                    'is_unique' => 'nomor telah terdaftar'
                ],
            ],
            'pelanggan_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kategori harus diisi.',
                ],
            ],
        ])) {
            return redirect()->to('pelanggan/create')->withInput();
        } else {
            $this->pelangganModel->save([
                'pelanggan_nama' => $this->request->getVar('pelanggan_nama'),
                'pelanggan_alamat' => $this->request->getVar('pelanggan_alamat'),
                'provinsi' => $this->request->getVar('provinsi'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'pelanggan_telp' => $this->request->getVar('pelanggan_telp'),
                'pelanggan_kategori' => $this->request->getVar('pelanggan_kategori'),
            ]);
            session()->setFlashdata('pesan', 'Data pelanggan Berhasil Ditambahkan');
            return redirect()->to('/pelanggan');
        }
    }



    public function delete($pelanggan_id)
    {
        $this->pelangganModel->where(['pelanggan_id' => $pelanggan_id])->delete();
        session()->setFlashdata('pesan', 'Data Pelanggan Berhasil Dihapus');
        return redirect()->to('/pelanggan');
    }


    public function edit($pelanggan_id)
    {
        $data = [
            'title' => 'Ubah Data Pelanggan',
            'validation' => \Config\Services::validation(),
            'pelanggan' => $this->pelangganModel->getPelanggan($pelanggan_id),
            'kategori' => $this->kategoriModel->get()->getResultArray(),
        ];

        return view('pelanggan/edit', $data);
    }


    public function update($pelanggan_id)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'pelanggan_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                ]
            ],
            'pelanggan_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alamat harus diisi.',
                ],
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'provinsi harus diisi.',
                ],
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kecamatan harus diisi.',
                ],
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kabupaten harus diisi.',
                ],
            ],
            'pelanggan_telp' => [
                'rules' => 'required|is_unique[pelanggan.pelanggan_telp]',
                'errors' => [
                    'required' => 'status harus diisi.',
                ],
            ],
            'pelanggan_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kategori harus diisi.',
                ],
            ],
        ])) {
            return redirect()->to('pelanggan/edit/' . $pelanggan_id)->withInput();
        }

        $ubah = [
            'pelanggan_nama' => $this->request->getVar('pelanggan_nama'),
            'pelanggan_alamat' => $this->request->getVar('pelanggan_alamat'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'pelanggan_telp' => $this->request->getVar('pelanggan_telp'),
            'pelanggan_kategori' => $this->request->getVar('pelanggan_kategori'),
        ];

        $this->pelangganModel->update($pelanggan_id, $ubah);
        session()->setFlashdata('pesan', 'Data Pelanggan Berhasil Diubah');

        return redirect()->to('/pelanggan');
    }
}
