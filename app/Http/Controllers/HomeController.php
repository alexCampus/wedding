<?php

namespace App\Http\Controllers;

use App\InscriptionLandingPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var
     */
    protected $inscriptionModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InscriptionLandingPage $inscriptionModel)
    {
        $this->inscriptionModel = $inscriptionModel;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function inscriptionLandingPage(Request $request)
    {
        $this->inscriptionModel->name  = $request->input('name');
        $this->inscriptionModel->email = $request->input('email');
        $this->inscriptionModel->save();
        return redirect('/');
    }
}
