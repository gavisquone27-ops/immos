<?php

namespace App\Models;

use CodeIgniter\Model;

class Client extends Model
{
    protected $table         = 'client';   // même nom que la table SQL ci-dessous
    protected $primaryKey    = 'id_client';
    protected $returnType    = 'array';
    protected $allowedFields = ['nom_prenoms', 'profession', 'adresse', 'telephone', 'motdepasse'];
}