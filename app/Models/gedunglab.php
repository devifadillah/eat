<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gedunglab extends Model
{
    protected $table = "denah";   
    protected $primarykey = "id";   
    protected $fillable = [
    'id', 'lantai_id', 'ruang_id', 'walas', 'kelas', 'jammulai', 'jamakhir', 'gedung'];
    
    public function ruang(){
        return $this->belongsTo(ruang::class);
    }

    public function lantai(){
        return $this->belongsTo(lantai::class);
    }
}
