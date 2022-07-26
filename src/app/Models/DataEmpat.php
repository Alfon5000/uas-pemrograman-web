<?php

namespace App\Models;

use \DateTimeInterface;
use App\Models\DataTiga;
use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataEmpat extends Model
{
    use SoftDeletes;
    use MultiTenantModelTrait;
    use HasFactory;

    public $table = 'data_empats';

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
        'id_data_tiga',
    ];

    public function dataEmpatInputDatas()
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

    public function dataTiga()
    {
        return $this->belongsTo(DataTiga::class, 'id_data_tiga');
    }
}
