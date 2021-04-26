<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Riwayat;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $file = $request->file('foto');
        $filename =  $request['nama'].'.'.$file->getClientOriginalExtension();
        $file->move( 'images/',$filename);

        $data = array(
            'nama' => $request['nama'],
            'nip' => $request['nip'],
            'id_location' => $request['pos'],
            'foto' => $filename,
        );

        User::create($data);
        return redirect()->route('outkar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data['data'] = User::find($id);
        $data['user'] = User::join('location', 'location.id_location', '=', 'users.id_location')->where('users.id', $id)->first();
        $data['loc'] = Location::all();
        return view('update', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['user'] = User::join('location', 'location.id_location', "=", "user.id_location")->where('users.id', $id)->first();
        return view('update', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update(array(
            'nip' => $request['nip'],
            'nama' => $request['nama'],
            'id_location' => $request['pos'],
            'updated_at' => date('Y-m-d H:i:s'),
        ));

        return redirect()->route('outkar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('outkar');
    }

    public function outkar()
    {
        $data['data'] = User::join('location', 'location.id_location', '=', 'users.id_location')->get();
        return view('outkar', $data);
    }

    public function login($id)
    {
        $data['loc'] = Location::where('name', base64_decode($id))->first();
        return view('user', $data);
    }

    public function absen(Request $request, $id)
    {
        $user = User::where('nip', $request['nip'])->first();
        $loc = Location::find($id);
        if ($user != null) {
            $data = array(
                'id_user' => $user['id'],
                'id_location' => $id,
                'time' => date('Y-m-d H:i:s'),
            );

            Riwayat::create($data);
            $users = array(
                'data' => $user,
                'loc' => $loc,
                'time' => date('Y-m-d H:i:s'),
            );
            return view('outsen', $users);
        } else {
            return redirect('login/'.base64_encode($loc['name']));
        }
    }

    public function riwayat()
    {
        $data = array(
            'riwayat' => Riwayat::join('users', 'riwayats.id_user', '=', 'users.id')->join('location', 'riwayats.id_location', '=', 'location.id_location')->get(),
        );
        return view('riwayat', $data);
    }

    public function rekap(Request $request)
    {
        // $id =  User::where('nip', $request['nip'])->first();
        $query = array(
            'no' => 1,
            'date' => date('d F Y', strtotime($request['fdate'])). ' s.d '. date('d F Y', strtotime($request['ldate'])),
            'data' => Riwayat::join('users', 'riwayats.id_user', '=', 'users.id')->join('location', 'riwayats.id_location', '=', 'location.id_location')
                    ->whereRaw("(time >= ? AND time <= ?)",
                    [$request['fdate']." 00:00:00", $request['ldate']." 23:59:59"])->orderBy('time')->get(),
        );

        return view('prekap', $query);
    }
}
