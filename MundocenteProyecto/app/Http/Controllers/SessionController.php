<?php

namespace Mundocente\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Redirect;
use DB;
use Session;
use OAuth;

use Mundocente\User;

use Mundocente\Http\Requests;
use Mundocente\Http\Requests\SessionRequest;
use Mundocente\Http\Controllers\Controller;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Se inicia sesión con correo y contraseña
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SessionRequest $request)
    {
        if(Auth::attempt(['email'=>$request['email'], 'password'=> $request['password']])){
            return Redirect::to('publications');
        }
        Session::flash('message-error-session', 'Los datos son incorrectos');
            return Redirect::to('login');
    }



     /**
     * Ingesa con facebook
     *
     * @return \Illuminate\Http\Response
     */
    public function authfacebook()
    {     
        return OAuth::authorize('facebook');
    }





       /**
     * Inicia sesión con facebook
     *
     * @return \Illuminate\Http\Response
     */
    public function sesionfacebook()
    {
       OAuth::login('facebook',  function($user, $details) {
        $user->name = $details->nickname;
        $user->email = $details->email;
        $user->photo_url = $details->avatar;
        $user->save();
        });
         return Redirect::to('publications');
        
        dd(Auth::user());
    }


        /**
     * Cierra sesión
     *
     * @return \Illuminate\Http\Response
     */
    public function cerrarsesion()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
