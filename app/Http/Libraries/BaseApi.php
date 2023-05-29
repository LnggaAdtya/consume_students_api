<?php
// Perbedaan helpers dan library
// helpers : bikin API
// Libraries : pake API

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    // variable yang cuman di akses di class ini dan turunnya
    protected $baseUrl;
    // construct : meyiapkan ini data, dijalankan otomatis tanpa di panggil
    public function __construct()
    {
        // var $baseUrl yang diatas diisi nilainya dari isian file .env bagian API_HOST
        // var ini diisi otomatis ketika file/class BaseApi dipanggil di controller
        $this->baseUrl ="http://127.0.0.1:2222" ;
    }
    private function client()
    {
        // koneksikan ip dari var $baseUrl ke depedency Http
        // mnggunakan depedency Http karna project API nya berbasis weh (protocol Http)
        return Http::baseUrl($this->baseUrl);
    }
    public function index(String $endpoint, Array $data = [])
    {
        // manggil ke function client yg diatas, trus manggil path yang dari $endpoint yang dikirim ke controllernya, kalau ada data yang mau dicari (params di postman) diambil dari paramter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function store (String $endpoint, Array $data = [])
    {
        // pake post() karena buat route tambah data di project REST API nya pake ::post
        return $this->client()->post($endpoint, $data);
    }
    public function edit(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
    public function update(String $endpoint, Array $data = [])
    {
        return $this->client()->patch($endpoint, $data);
    }
    public function delete(String $endpoint, Array $data = [])
    {
        return $this->client()->delete($endpoint, $data);
    }
    public function trash(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
    public function restore(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
    public function permanent(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }
}
?>