<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home(): string
    {
        return view('home');
    }
    public function register(): string
    {
        return view('inscription');
    }
     public function login(): string
    {
        return view('connexion');
    }
     public function contact(): string
    {
        return view('contact');
    }
     public function shop(): string
    {
        return view('shop');
    }    
    public function terms(): string
    {
        return view('terms-condition');
    }
     public function privacy(): string
    {
        return view('privacy-policy');
    }
     public function dashboard(): string
    {
        return view('dashboard');
    }
      public function registers()
    {
        if ($this->request->is('post')) {

                $data = [
                    'nom_prenoms' => $this->request->getPost('registerName'),
                    'profession'  => $this->request->getPost('registerProfession'),
                    'adresse'     => $this->request->getPost('registerAdress'),
                    'telephone'   => $this->request->getPost('registerPhone'),
                    'motdepasse'  => password_hash(
                    $this->request->getPost('registerPassword'),
                      PASSWORD_BCRYPT
                ),
                ];

                $client = new \App\Models\Client();

               if ($client->insert($data)) {

                       return $this->response->setJSON([
                       'status' => 1
                   ]);

                } else {

                     return $this->response->setJSON([
                       'status' => 0,
                      'errors' => $client->errors()
                    ]);
                }
            }
    } 
    // connexion

     public function logins()
{
    if ($this->request->is('post')) {

        $telephone = $this->request->getPost('telephone');
        $motdepasse = $this->request->getPost('motdepasse');

        $model = new \App\Models\Client();

        $user = $model->where('telephone', $telephone)->first();

        if (!$user) {
            return $this->response->setJSON([
                'status' => 0,
                'message' => 'Utilisateur introuvable'
            ]);
        }

        if (!password_verify($motdepasse, $user['motdepasse'])) {
            return $this->response->setJSON([
                'status' => 0,
                'message' => 'Mot de passe incorrect'
            ]);
        }

        session()->set([
            'id_client' => $user['id_client'],
            'nom' => $user['nom_prenoms'],
            'profession' => $user['profession'],
            'telephone' => $user['telephone'],
            'logged_in' => true
        ]);

        return $this->response->setJSON([
            'status' => 1
        ]);
    }
}
    

   
}
