<?php

namespace App\Models;

use Database\Factories\HospitalStaffFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HospitalModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "hospitals";

    protected function casts(): array
    {
        return [
            'is_published' => 'bool',
        ];
    }

    public function staffs()
    {
        return $this->hasMany(HospitalStaffFactory::class);
    }
}
