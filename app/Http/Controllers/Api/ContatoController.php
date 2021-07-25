<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\NewContatoJob;
use App\Mail\NewContatoMail;
use App\Models\Contatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Contatos::orderBy('id', 'DESC')->get();
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
       $data = $request->only(['name', 'email', 'facebook_link', 'linkedin_link']);
       $status = Contatos::create($data);

       if ($status) {
           $message = 'Salvo com sucesso!';
       }else {
            $message = 'Ops, houve um erro!';
       }

       NewContatoJob::dispatch($request->email)->delay(now()->addSeconds('15'));

       return response()->json(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = Contatos::findOrFail($id);

        if ($contato) {
            return response()->json(['contato' => $contato]);
        }else {
             $message = 'Ops, houve um erro!';
             return response()->json(['message' => $message]);
        }

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
    public function update(Request $request)
    {
        $contato = Contatos::find($request->id);
        $data = $request->only(['name', 'email', 'facebook_link', 'linkedin_link']);

        if ($contato) {
            $contato->update($data);
            $message = 'Atualizado com sucesso!';
        }else {
             $message = 'Ops, houve um erro!';
        }

        return response()->json(['message' => $message]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contato = Contatos::find($id);

        if ($contato) {
            $contato->delete();
            $message = 'Removido com sucesso!';
        }else {
             $message = 'Ops, houve um erro!';
        }

        return response()->json(['message' => $message]);
    }
}
