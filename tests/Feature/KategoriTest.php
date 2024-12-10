<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Kategori;
use App\Models\User;

class KategoriTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_tambah_kategori_berhasil()
    {
        $admin = User::where('username', 'admin')->first();

        $data = [
            'nama_kategori' => 'Kategori Baru 1',
        ];

        $response = $this->actingAs($admin)->json('POST', '/kategori/tambah_kategori', $data);
        $response->assertStatus(200);
        $response->assertJson(['message' => 'Kategori berhasil ditambahkan.']);
    }

    public function test_tambah_kategori_gagal()
    {
        $admin = User::where('username', 'admin')->first();

        $data = [
            'nama_kategori' => '', // nama_kategori tidak diisi
        ];

        $response = $this->actingAs($admin)->json('POST', '/kategori/tambah_kategori', $data);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors([
            'nama_kategori' => 'Nama kategori harus diisi',
        ]);
    }
}
