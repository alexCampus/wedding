<?php

namespace App\Http\Controllers;

use App\InscriptionLandingPage;
use App\Participant;
use Illuminate\Http\Request;
use Auth;

class ApiController extends Controller
{
    /**
     * @var
     */
    protected $participantModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $this->participantModel = $participant;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getParticipants($id)
    {
        $participants = $this->participantModel->where('user_id', '=', $id)->get();

        return response()->json($participants);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function insert(Request $request)
    {
        $this->participantModel->insert($request->all());

        return response()->json(true);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function inscriptionLandingPage(Request $request, InscriptionLandingPage $inscriptionModel)
    {
        $inscriptionModel->insert($request->all());

        /*$this->inscriptionModel->name  = $request->input('name');
        $this->inscriptionModel->email = $request->input('email');
        $this->inscriptionModel->save();*/

        return response()->json(true);
        // return redirect('/');
    }


}
