<?php

namespace App\Http\Controllers;

use App\InscriptionLandingPage;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var
     */
    protected $inscriptionModel;

    /**
     * @var
     */
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @param InscriptionLandingPage $inscriptionModel
     * @param User $user
     */
    public function __construct(InscriptionLandingPage $inscriptionModel, User $user)
    {
        $this->inscriptionModel = $inscriptionModel;
        $this->user             = $user;
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

    public function hebergement()
    {
        return view('hebergement');
    }

    public function inscription()
    {
        return view('subscriber');
    }

    public function forum()
    {
        return view('forum');
    }

    public function onePost()
    {
        return view('onePostForum');
    }

    public function formForum()
    {
        return view('formForum');
    }

    public function listeLanding()
    {
        $lstLanding = $this->inscriptionModel->orderBy('name')->get();

        return view('lstLanding', array('lstLanding' => $lstLanding));
    }

    public function listeInscrits()
    {
        $lstLanding = $this->user->orderBy('name')->get();

        return view('lstInscrit', array('lstLanding' => $lstLanding));
    }
}
