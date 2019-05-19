<?php

namespace App\Http\Controllers;

use App\InscriptionLandingPage;
use App\Participant;
use App\User;
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
        $user         = User::find($id);
        $participants->prepend($user);


        return response()->json($participants);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     *
     */
    public function insert(Request $request)
    {
        $data = $request->all();
        if ($data[0]['id']) {
            $part            = $this->participantModel->find($data[0]['id']);
            $part->name      = $data[0]['name'];
            $part->firstname = $data[0]['firstname'];
            $part->age       = $data[0]['age'];
            $part->save();

        } else {
            $this->participantModel->insert($request->all());
        }

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

    public function deletePar($id, Participant $participant, Request $request)
    {
        $res = false;
        if (isset($request->token) && $request->token === 'wedding2019%24Olive%25Mari') {
            $res = $participant->find($id)->delete();
        }

        return response()->json($res);
    }


}
