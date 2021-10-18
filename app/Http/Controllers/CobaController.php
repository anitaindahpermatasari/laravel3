<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Familys;

class CobaController extends Controller
{
    /* public function index()
    {
        return 'test berhasil';
    }

    public function urutan($ke)
    {
// memanggil model firends
        $friends = Friends::paginate(3);

        return view('friend', compact('friends'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function coba($ke)
    {
        return view('coba');
        // sesuaikan dengan view yang ingin ditampilkan
    }
 */
    public function index(){
        // memanggil model firends
        $friends = Friends::paginate(2);

        return view('index', compact('friends'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // Validate the request...

        $friends = new Friends;

        $friends->nama = $request->nama;
        $friends->no_telp = $request->no_telp;
        $friends->alamat = $request->alamat;

        $friends->save();

    }

    public function familys(){
        // memanggil model familys
        $familys = familys::paginate(1);

        return view('familys', compact('familys'));
        // memakai compact karena memiliki banyak data array. di isi dengan nama variabel yang akan dipanggil
    }

    public function tambah(){
        return view('tambah');
    }

    public function storefamilys(Request $request){
        // Validate the request...

        $familys = new Familys;

        $familys->first_name = $request->first_name;
        $familys->last_name = $request->last_name;
        $familys->number_phone = $request->number_phone;
        $familys->address = $request->address;
        $familys->email = $request->email;

        $familys->save();

    }
}
