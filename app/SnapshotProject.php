<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SnapshotProject extends Model
{
    protected $guarded = [];
    protected $table = 'projects';
    public $timestamps = false;

    public function snapshots()
    {
        return $this->hasMany('App\Snapshot');
    }
}