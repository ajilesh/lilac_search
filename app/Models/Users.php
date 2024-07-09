<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Designation;

class Users extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $guarded = [];
    //protected $fillable = ['name', 'fk_department', 'fk_designation', 'phone_number'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'fk_department');
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class, 'fk_designation');
    }
}
