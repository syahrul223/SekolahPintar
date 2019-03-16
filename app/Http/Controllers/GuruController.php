<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Guru;

class GuruController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nip' => 'required',
            'nama_guru' => 'required|max:150'
        ]);

        if($validation->fails())
        {
            $errors = $validation->errors();
            return [
                'status' => 'error',
                'message' => $errors,
                'result' => null
            ];
        }

        $result = Guru::create($request->all());
        if($result)
        {
            return [
                'status' => 'success',
                'message' => 'Data Berhasil Ditambahkan',
                'result' => $result
            ];
        }
        else 
        {
            return [
                'status' => 'error',
                'message' => 'Data Gagal Ditambahkan',
                'result' => null
            ];
        }
    }

    public function read()
    {
        $result = Guru::all();
        return [
            'status' => 'success',
            'message' => '',
            'result' => $result
        ];
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'nip' => 'required|max:50',
            'nama_guru' => 'required|max:150'
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            return [
                'status' => 'error',
                'message' => $errors,
                'result' => null
            ];
        }
        $guru = Guru::find($id);
        if(empty($guru))
        {
            return 
            [
                'status' => 'error',
                'message' => 'Data Tidak Ditemukan',
                'result' => null
            ];
        }
        $result = $guru->update($request->all());
        if($result)
        {
            return [
                'status' => 'success',
                'message' => 'Data Berhasil Diubah',
                'result' => $result
            ];
        }
        else 
        {
            return [
                'status' => 'error',
                'message' => 'Data Gagal Diubah',
                'result' => null
            ];
        }
    }
    
    public function delete($id)
    {
        $guru = Guru::find($id);
        if(empty($guru))
        {
            return 
            [
                'status' => 'error',
                'message' => 'Data Tidak Ditemukan',
                'result' => null
            ];
        }
        $result = $guru->delete();
        if($result)
        {
            return
            [
                'status' => 'success',
                'message' => 'Data Berhasil Dihapus',
                'result' => $result
            ];
        }
        else 
        {
            return [
                'status' => 'error',
                'message' => 'Data Gagal Dihapus',
                'result' => null
            ];
        }
    }
    
    public function detail($id)
    {
        $guru = Guru::find($id);
        if(empty($guru))
        {
            return
            [
                'status' => 'error',
                'message' => 'Data Tidak Ditemukan',
                'result' => null
            ];
        }
        return 
        [
            'status' => 'success',
            'message' => 'Berhasil',
            'result' => $guru
        ];
    }
}
