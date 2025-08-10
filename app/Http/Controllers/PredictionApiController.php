<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PredictionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return response()->json([
        //     'pesan' => 'masuk',
        // ]);
        $nodeScriptPath = base_path('public/jspicek/index2.js');

        // Perintah untuk menjalankan skrip Node.js
        $command = "node {$nodeScriptPath}";

        // Jalankan perintah di terminal.
        // output ini tidak akan menghentikan program jika ada error dari Node.js,
        // tapi akan mengembalikan respons dari Node.js jika ada.
        $output = shell_exec($command);

        // Jalur ke file JSON yang sudah diperbarui
        $jsonPath = base_path('public/jspicek/data.json');

        // Baca konten file JSON
        if (File::exists($jsonPath)) {
            $data = json_decode(File::get($jsonPath));
            $id = null;
            if ($data->nama == 'non') {
                    return response()->json([
                        "nama" => "non"
                    ]);
            } elseif ($data->nama == 'blast') {
                $id = 1;
            } elseif ($data->nama == 'blight') {
                $id = 2;
            } elseif ($data->nama == 'tungro') {
                $id = 3;
            }

            if ($id !== null) {
                $aboutData = DB::table('about')->where('id', $id)->first();
                if ($aboutData) {

                    return response()->json([
                        "nama" => $id,
                        "data" => $aboutData
                        ]);
                } else {
                    return response()->json([
                        'error' => 'Data rekomendasi tidak ditemukan untuk ID yang diberikan.'
                    ], 404);
                }
            } else {
                 return response()->json([
                    'error' => 'Nama penyakit tidak valid.'
                ], 400);
            }

            return response()->json($data);
        }

        // Jika file tidak ditemukan, kembalikan respons error
        return response()->json([
            'error' => 'File data.json tidak ditemukan atau gagal dibaca.',
            'node_output' => $output // Anda bisa menyertakan output dari Node.js untuk debugging
        ], 500);
    }


    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:10240', // max 10MB
        ]);

        // Simpan gambar ke public/jspicek/gambar
        $filename = time() . '-' . uniqid() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('jspicek/gambar'), $filename);

        // Path file JSON
        $jsonPath = public_path('jspicek/data.json');

        // Baca data JSON lama (kalau ada)
        $data = [];
        if (file_exists($jsonPath)) {
            $jsonContent = file_get_contents($jsonPath);
            $data = json_decode($jsonContent, true) ?? [];
        }

        // Update value "name"
        $data['name'] = $filename;

        // Simpan lagi ke file JSON (format rapi)
        file_put_contents($jsonPath, json_encode($data, JSON_PRETTY_PRINT));

        $nodeScriptPath = base_path('public/jspicek/index2.js');

        // Perintah untuk menjalankan skrip Node.js
        $command = "node {$nodeScriptPath}";

        // Jalankan perintah di terminal.
        // output ini tidak akan menghentikan program jika ada error dari Node.js,
        // tapi akan mengembalikan respons dari Node.js jika ada.
        $output = shell_exec($command);

        // Jalur ke file JSON yang sudah diperbarui
        $jsonPath = base_path('public/jspicek/data.json');

        // Baca konten file JSON
        if (File::exists($jsonPath)) {
            $data = json_decode(File::get($jsonPath));
            $id = null;
            if ($data->nama == 'non') {
                    return response()->json([
                        "nama" => "non"
                    ]);
            } elseif ($data->nama == 'blast') {
                $id = 1;
            } elseif ($data->nama == 'blight') {
                $id = 2;
            } elseif ($data->nama == 'tungro') {
                $id = 3;
            }

            if ($id !== null) {
                $aboutData = DB::table('about')->where('id', $id)->first();
                if ($aboutData) {

                    return response()->json([
                        "nama" => $data->nama,
                        "data" => $aboutData
                        ]);
                } else {
                    return response()->json([
                        'error' => 'Data rekomendasi tidak ditemukan untuk ID yang diberikan.'
                    ], 404);
                }
            } else {
                 return response()->json([
                    'error' => 'Nama penyakit tidak valid.'
                ], 400);
            }
        }

        // Jika file tidak ditemukan, kembalikan respons error
        return response()->json([
            'error' => 'File data.json tidak ditemukan atau gagal dibaca.',
            'node_output' => $output // Anda bisa menyertakan output dari Node.js untuk debugging
        ], 500);
    }

}
