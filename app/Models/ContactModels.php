<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModels extends Model
{
    protected $table = 'aarhat_contact_form';
    protected $allowedFields = ['name', 'email',  'services', 'messages'] ;


    public function getDetails($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

}