<?php

namespace App\Models;

use CodeIgniter\Model;

class AvailModels extends Model
{
    protected $table = 'aarhat_avail_offer_form';
    protected $allowedFields = ['name', 'email',  'phone', 'coupon'] ;


    public function getDetails($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}