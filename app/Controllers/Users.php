<?php

namespace App\Controllers;

// use App\Database\Migrations\Users;
use App\Models\UsersModel;
use App\Models\RolesModel;
// use \Mailjet\Resources;

class Users extends BaseController
{
    protected $usersModel;
    protected $rolesModel;
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        $this->rolesModel = new RolesModel();
        // $this->mj = new \Mailjet\Client(getenv('APIkey'), getenv('Secretkey'), true, ['version' => 'v3.1']);
    }
    public function index()
    {
        $data['users'] = $this->usersModel->getAll();
        return view('users/index', $data);
        // $data = [

        //     'title' => 'Users',
        //     'users' => $this->users->getUsers()
        // ];
    }

    public function detail($users_id)
    {
        $data['users'] = $this->usersModel->getDetail($users_id);
        return view('users/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Users',
            //get all role
            'roles' => $this->rolesModel->get()->getResultArray(),
            'validation' => \Config\Services::validation()

        ];

        // dd($data);

        return view('users/create', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'users_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                    'is_unique' => 'nama sudah terdaftar'
                ]
            ],
            'users_nip' => [
                'rules' => 'required|is_unique[users.users_nip]',
                'errors' => [
                    'required' => 'nip harus diisi.',
                    'is_unique' => 'nip sudah terdaftar'
                ],
            ],
            'users_email' => [
                'rules' => 'required|is_unique[users.users_email]',
                'errors' => [
                    'required' => 'email harus diisi.',
                    'is_unique' => 'email sudah terdaftar'
                ],
            ],
            'users_password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password harus diisi.',
                ],
            ],
            'users_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alamat harus diisi.',
                ],
            ],

            'users_status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status harus diisi.',
                ],
            ],
            'users_role' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'role harus diisi.',
                ],
            ],
        ])) {
            return redirect()->to('users/create')->withInput();
        } else {
            $this->usersModel->save([
                'users_nama' => $this->request->getVar('users_nama'),
                'users_nip' => $this->request->getVar('users_nip'),
                'users_email' => $this->request->getVar('users_email'),
                'users_password' => $this->request->getVar('users_password'),
                'users_alamat' => $this->request->getVar('users_alamat'),
                'users_telp' => $this->request->getVar('users_telp'),
                'users_status' => $this->request->getVar('users_status'),
                'users_role' => $this->request->getVar('users_role'),
            ]);
            session()->setFlashdata('pesan', 'Data Users Berhasil Ditambahkan');
            return redirect()->to('/users');
        }
    }



    public function delete($users_id)
    {
        $this->usersModel->where(['users_id' => $users_id])->delete();
        session()->setFlashdata('pesan', 'Data Users Berhasil Dihapus');
        return redirect()->to('/users');
    }


    public function edit($users_id)
    {
        $data = [
            'title' => 'Ubah Users',
            'validation' => \Config\Services::validation(),
            'users' => $this->usersModel->getUsers($users_id),
            'roles' => $this->rolesModel->get()->getResultArray(),
        ];

        return view('users/edit', $data);
    }


    public function update($users_id)
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'users_nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama harus diisi.',
                    'is_unique' => 'nama sudah terdaftar'
                ]
            ],
            'users_nip' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nip harus diisi.',
                    'is_unique' => 'nip sudah terdaftar'
                ],
            ],
            'users_email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus diisi.',
                    'is_unique' => 'email sudah terdaftar'
                ],
            ],
            'users_password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'password harus diisi.',
                    'is_unique' => 'password sudah terdaftar'
                ],
            ],
            'users_alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus diisi.',
                ],
            ],
            'users_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'telepom harus diisi.',
                    'is_unique' => 'telpon sudah terdaftar'
                ],
            ],
            'users_status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'status harus diisi.',
                    'is_unique' => 'status sudah terdaftar'
                ],
            ]
        ])) {
            return redirect()->to('users/edit/' . $users_id)->withInput();
        }

        $ubah = [
            // 'users_id' => $this->request->getVar('users_id'),
            'users_nama' => $this->request->getVar('users_nama'),
            'users_nip' => $this->request->getVar('users_nip'),
            'users_email' => $this->request->getVar('users_email'),
            'users_password' => $this->request->getVar('users_password'),
            'users_alamat' => $this->request->getVar('users_alamat'),
            'users_telp' => $this->request->getVar('users_telp'),
            'users_status' => $this->request->getVar('users_status'),
            'users_role' => $this->request->getVar('users_role'),

        ];

        $this->usersModel->update($users_id, $ubah);
        session()->setFlashdata('pesan', 'Data users Berhasil Diubah');

        return redirect()->to('/users');
    }
}
