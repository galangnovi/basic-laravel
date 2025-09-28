<?php
use App\Http\Controllers\Cobahallo;
use App\Http\Controllers\Buku;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hai", function(){
    return "Hallo lagi dari ralavel";
});

Route::get('/hallo', [Cobahallo::class, 'index']);
Route::get('/buku', [Buku::class, 'index'])->name('buku.index');
Route::post('/buku', [Buku::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [buku::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}/update', [buku::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}/delete',[buku::class, 'destroy'])->name('buku.delete');