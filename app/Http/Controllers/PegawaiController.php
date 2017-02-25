<?php

namespace App\Http\Controllers;


use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use DB;
use Validator;
use Input;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;
use File;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
   
        use RegistersUsers;

    public function index()
    {
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();
        $pegawais = Pegawai::all();
         $pegawais=Pegawai::where('Nip',request('Nip'))->paginate(0);
        if(request()->has ('Nip'))
        {
         $pegawais=Pegawai::where('Nip',request('Nip'))->paginate(0);
 
        }
        else
        {
            $pegawais=Pegawai::paginate(3);
        }

        return view('pegawais.index', compact('jabatans', 'golongans', 'pegawais'));
    }
     public function create()
    {
       
        $jabatans=Jabatan::all();
        $golongans=Golongan::all();
        $users=User::all();
        return view('pegawais.create',compact('jabatans','golongans','users'));
    }

    public function store(Request $request)
    {
         
         $input = Request::all();
        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'permission' => $input['permission'],

        ]); 

       
$file = Input::file('Photo');
        $destinationPath = public_path().'/image/';
        $filename = str_random(6).'_'.$file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);

        if(Input::hasFile('Photo')){
           $mm = new Pegawai;
           $mm->Nip = input::get('Nip'); 
           $mm->user_id = $user->id;  
           $mm->jabatan_id = Input::get('jabatan_id'); 
           $mm->golongan_id = Input::get('golongan_id'); 
           $mm->Photo = $filename;
           $mm->save();
        }
        return redirect('pegawais');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawais=Pegawai::find($id);
        return view('pegawais.show',compact('pegawais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawais = Pegawai::find($id);
        $jabatans = Jabatan::all();
        $golongans = Golongan::all();

        return view('pegawais.edit', compact('pegawais', 'jabatans', 'golongans'));
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

    $pegawais = Pegawai::find($id);
        $pegawais->Nip = $request->get('Nip');
        $pegawais->jabatan_id = $request->get('jabatan_id');
        $pegawais->golongan_id = $request->get('golongan_id');

        if($request->hasFile('Photo')){

        $filename = null;
        $file = $request->file('Photo');
        $extension = $file->getClientOriginalExtension();
        $filename = md5(time()).'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'/image/';
        $file->move($destinationPath,$filename); 
       //hapus cover lama , jika

        if ($pegawais->Photo) {
            $old_photo = $pegawais->Photo;
            $filepath = public_path().DIRECTORY_SEPARATOR.'/image/'.DIRECTORY_SEPARATOR.$pegawais->Photo;
            try {
                File::delete($filepath);
                    } 
                    catch (FileNotFoundExpetion $e) {
                        
                    }        
                }
        $pegawais->Photo = $filename;
        
    }
        $pegawais->update();
        
      
        return redirect('pegawais');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pegawai::find($id)->delete();
        return redirect('pegawais');
    }

}
