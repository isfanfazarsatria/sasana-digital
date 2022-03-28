<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Barryvdh\DomPDF\Facade as PDF;

class ParticipantsController extends Controller
{
    public function index()
    {
        $data = Participant::latest()->paginate(5);
        return view('participants.index',compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

        // $data = Participant::orderBy('fullName')->get();
        return view('participants.index', compact('data'));
    }

    public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Participant::create($input);

        return redirect('participants/list');
    }

    public function edit($id)
    {
        $participant = Participant::findOrFail($id);
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, $id)
    {
        $participant = Participant::findOrFail($id);
        $input = $request->all();
        $participant->update($input);
        return redirect('participants/list')->with('flash_message', 'participant Updated!');  
    }
  
    public function destroy($id)
    {
        Participant::destroy($id);
        return back()->with('flash_message', 'Participant deleted!'); 
    }

    public function pdf(Participant  $participant)
    {
        $data = Participant::find($participant);
        $pdf = \PDF::loadView('participants.pdf', ['participant' => $participant]);
        return $pdf->stream();
    }

    public function cf(Participant  $participant)
    {
        $data = Participant::find($participant);
        $cf = \PDF::loadView('participants.certificate', ['participant' => $participant]);
        return $cf->stream();
    }
}
