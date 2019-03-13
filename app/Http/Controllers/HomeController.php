<?php

namespace App\Http\Controllers;

use App\InscriptionLandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function organisation()
    {
        return view('organisation');
    }

    public function inscription()
    {
        return view('subscriber');
    }



    public function listeLanding()
    {
        $lstLanding = $this->inscriptionModel->orderBy('name')->get();

        return view('lstLanding', array('lstLanding' => $lstLanding));
    }
}
