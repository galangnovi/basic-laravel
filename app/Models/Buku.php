<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBuku
 */
class Buku extends Model
{
    protected $table ='buku';
    protected $fillable = ['judul', 'pengarang','tahun_terbit'];
}
