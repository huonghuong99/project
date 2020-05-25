<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'ma';
    protected $table = 'nguoi_dung';

    protected $fillable = ['phan_quyen', 'ten', 'email', 'mat_khau', 'sdt_lien_he'];

    public $timestamps = false;
    protected $rememberTokenName = false;

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
}
