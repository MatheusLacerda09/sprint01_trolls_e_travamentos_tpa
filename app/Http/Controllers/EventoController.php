<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\EventoFormRequest;
use App\Models\Evento;
use App\Models\Pergunta;
use App\Http\Requests\StorePerguntaRequest;
use Illuminate\Support\Facades\Auth;
=======
use App\Models\Evento;
use App\Models\Pergunta;
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795

class EventoController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);

        // TICKET #002: filtra pelo evento, mais recentes primeiro, 10 por página
=======
        $eventos = Evento::withCount('perguntas')->latest()->get();

        return view('eventos.index', compact('eventos'));
    }

    public function show(Evento $evento)
    {
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
        $perguntas = Pergunta::where('evento_id', $evento->id)
            ->latest()
            ->paginate(10);

        return view('eventos.show', compact('evento', 'perguntas'));
    }

<<<<<<< HEAD
 
    public function storePergunta(StorePerguntaRequest $request, $id)
    {
        $evento = Evento::findOrFail($id);

        Pergunta::create([
            'evento_id' => $evento->id,
            'user_id' => Auth::user()->id,
            'texto'     => $request->input('texto'),
            'status'    => 'pendente',
        ]);

        return redirect()->route('eventos.show', $evento->id)
            ->with('sucesso', 'Sua pergunta foi enviada com sucesso!');
    }

    public function create(){
        return view('eventos.create');
    }

    public function store(EventoFormRequest $request){
        $evento = $request->user()->eventos()->create($request->validated());
        return redirect()->route('eventos.show', $evento->id);
    }
}
=======
    public function storePergunta(\App\Http\Requests\StorePerguntaRequest $request)
    {
        Pergunta::create($request->validated());

        return back()->with('sucesso', 'Pergunta enviada com sucesso!');
    }
}
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
