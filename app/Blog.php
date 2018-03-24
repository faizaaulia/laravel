<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog'; //kalo nama tabel di db "blogs", gausah pake protected. kalo bukan blogs, harus pake protected
    public $timestamps = false; //created_at dan updated_at gaada

    //insert assignment
    // protected $fillable = ['title', 'description']; //whitelist (yang boleh diisi)
    protected $guarded = []; //blacklist (yang gaboleh diisi)
}
