<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $guarded = [];


    // Get the Enquiry list in desc
    public function getAllEnqiryList()
    {
        return Enquiry::orderBy('id', 'desc');
    }
}
