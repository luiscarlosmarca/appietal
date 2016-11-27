<?php

namespace AppIetal\Http\Controllers;

use Illuminate\Http\Request;
use AppIetal\User;
use AppIetal\Profile;
use AppIetal\Attendant;
use AppIetal\Institucion;
use Illuminate\Support\Facades\Auth;
use AppIetal\Http\Requests;
use AppIetal\Http\Controllers\Controller;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_user()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_user(Request $request)
    {

      $users= new User($request->all());
      $users->password=bcrypt($request->password);
      $users->tipo='Estudiante';
      $users->save();
      return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function create_datos()
     {
         return view('estudiantes.datos');
     }


     public function store_datos(Request $request)
     {
       $id=Auth::user()->id;
       $profiles= new Profile($request->all());
       $profiles->user_id=$id;

       if($request->file('foto')) {

           $foto = $request->file('foto');
           $name_foto = 'Appietal_'.time().'.'.$foto->getClientOriginalExtension();
           $path = public_path().'/upload/estudiantes/fotos/';
           $foto->move($path,$name_foto);
           $profiles->foto=$name_foto;
       }

       if($request->file('epsFile')) {

           $epsFile = $request->file('epsFile');
           $name_eps = 'Appietal_'.time().'.'.$epsFile->getClientOriginalExtension();
           $path = public_path().'/upload/estudiantes/eps/';
           $epsFile->move($path,$name_eps);
           $profiles->epsFile=$name_eps;
       }
       if($request->file('docFile')) {

           $docFile = $request->file('docFile');
           $name_doc = 'Appietal_'.time().'.'.$docFile->getClientOriginalExtension();
           $path = public_path().'/upload/estudiantes/doc/';
           $docFile->move($path,$name_doc);
           $profiles->docFile=$name_doc;
       }

       if($request->file('sisbenFile')) {

           $sisbenFile = $request->file('sisbenFile');
           $name_sisben = 'Appietal_'.time().'.'.$sisbenFile->getClientOriginalExtension();
           $path = public_path().'/upload/estudiantes/sisben/';
           $sisbenFile->move($path,$name_sisben);
           $profiles->sisbenFile=$name_sisben;
       }

       $profiles->save();
        return redirect()->route('acudientes.create');
     }


    /** acudiente *@param
    */

    public function create_acudientes()
    {
        return view('estudiantes.acudientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_acudientes(Request $request)
    {

      $acudientes= new Attendant($request->all());
      $id=Auth::user()->id;
      $acudientes->user_id=$id;
      $acudientes->save();
      return redirect()->route('institucions.create');
    }


    // instituciones

    public function create_institucions()
    {
        return view('estudiantes.instituciones');
    }

    public function store_institucions(Request $request)
    {
      $id=Auth::user()->id;
      $institucions= new Institucion($request->all());
      $users=User::findOrFail($id);
      $users->prematriculado=true;
      $users->aprobado='pendiente';
      $users->save();

      $institucions->user_id=$id;
      $institucions->save();
      return redirect('home');
    }

    public function listAprobados()
    {
      $users=User::where('aprobado', 'aprobado')->get();

      $criterio='aprobado';
      return view('admin/list', compact('users','criterio'));


    }

    public function listPendientes()
    {
      $users=User::where('aprobado', 'pendiente')->get();

      $criterio='pendiente';
      return view('admin/list', compact('users','criterio'));

    }

    public function listNoAprobados()
    {
      $users=User::where('aprobado', 'no aprobado')->get();
      $criterio='no aprobado';
      return view('admin/list', compact('users','criterio'));

    }

    public function listAspirantes()
    {
      $users=User::where('prematriculado', 1)->get();

      $criterio='aspirante';
      return view('admin/list', compact('users','criterio'));


    }

    public function edit_datos($id)
      {
        // editr usuario desde la lista, solo para la vista disponible para el role admin para todos los campos
         $user=User::findOrFail($id);
         return view('admin/editDatos',compact('user'));
        //editor solo mis datos el perfil se hace desde otro metodo
      }
      //
      // public function edit_acudiente($id)
      //   {
      //     // editr usuario desde la lista, solo para la vista disponible para el role admin para todos los campos
      //      $user=User::findOrFail($id);
      //      return view('admin/editDatos',compact('user'));
      //     //editor solo mis datos el perfil se hace desde otro metodo
      //   }

        // public function edit_institucion($id)
        //   {
        //     // editr usuario desde la lista, solo para la vista disponible para el role admin para todos los campos
        //      $user=User::findOrFail($id);
        //      return view('admin/editDatos',compact('user'));
        //     //editor solo mis datos el perfil se hace desde otro metodo
        //   }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_datos(Request $request, $id)
    {


     $profile=Profile::findOrFail($id);
     $id=$profile->user->id;
     $user=User::findOrFail($id);
     $user->aprobado=$request->aprobado;
     $user->observaciones=$request->observaciones;
     $profile->fill($request->all());
     $user->save();
     $profile->save();
      return view('admin/editAcudiente',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
