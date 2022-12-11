<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    protected $table = "karyawans";

    protected $fillable = ['id', 'user_id', 'nama', 'jabatan', 'no_hp', 'jk'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
