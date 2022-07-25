<?php

namespace App\Models;

use \DateTimeInterface;
use App\Models\DataDua;
use App\Models\DataEmpat;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataTiga extends Model
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use HasFactory;

    public $table = 'data_tigas';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama',
        'created_at',
        'updated_at',
        'deleted_at',
        'team_id',
        'id_data_dua',
    ];

    public function dataTigaInputDatas()
    {
        return $this->belongsToMany(InputData::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function dataDua()
    {
        return $this->hasMany(DataDua::class);
    }

    public function dataEmpat()
    {
        return $this->belongsTo(DataEmpat::class, 'id_data_tiga');
    }
}
