<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Pelajaran;

class PelajaranController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     //
    // }
    
    public function create(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'nama_matpel' => 'required',
            'kd_keahlian' => 'required'
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

        $result = Pelajaran::create($request->all());
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
        $result = Pelajaran::all();
        return [
            'status' => 'success',
            'message' => '',
            'result' => $result
        ];
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'nama_matpel' => 'required',
            'kd_keahlian' => 'required'
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
        $pelajaran = Pelajaran::find($id);
        if(empty($pelajaran))
        {
            return 
            [
                'status' => 'error',
                'message' => 'Data Tidak Ditemukan',
                'result' => null
            ];
        }
        $result = $pelajaran->update($request->all());
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
        $pelajaran = Pelajaran::find($id);
        if(empty($pelajaran))
        {
            return 
            [
                'status' => 'error',
                'message' => 'Data Tidak Ditemukan',
                'result' => null
            ];
        }
        $result = $pelajaran->delete();
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
        $pelajaran = Pelajaran::find($id);
        if(empty($pelajaran))
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
            'result' => $pelajaran
        ];
    }
}
