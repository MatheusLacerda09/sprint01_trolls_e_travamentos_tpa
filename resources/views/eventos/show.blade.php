@extends('layouts.app')

<<<<<<< HEAD
@section('title', $evento->titulo . ' — FalaQ')

@section('content')
<div class="row">
    <!-- Formularço de envio de Pergunta -->
    <div class="col-md-5 mb-4">
        <div class="card shadow-sm p-3">
            <h4 class="fw-bold mb-3">💬 Faça sua Pergunta</h4>
            <form action="{{ route('eventos.perguntas.store', $evento->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="texto" class="form-label text-secondary">Texto da Pergunta</label>

                    <textarea name="texto" id="texto" rows="4" 
                              class="form-control bg-dark text-white border-secondary @error('texto') is-invalid @enderror"
                              placeholder="Digite sua dúvida ou comentário para o palestrante..."></textarea>

                    @error('texto')
                        <div class="invalid-feedback fw-bold">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Enviar Pergunta</button>
            </form>
        </div>
    </div>

    <!-- Lista de Perguntas (TICKET #002) -->
    <div class="col-md-7">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold m-0">📋 Perguntas do Evento</h4>
            <span class="text-secondary small">Total de perguntas: {{ $perguntas->total() }}</span>
        </div>

        @forelse($perguntas as $pergunta)
            <div class="card mb-3 shadow-sm border-start border-4 border-primary">
                <div class="card-body">
                    <p class="fs-5 mb-2 text-white">{{ $pergunta->texto }}</p>
                    <div class="d-flex justify-content-between align-items-center text-secondary small">
                        <span>Status: <span class="badge bg-success">{{ $pergunta->status }}</span></span>
                        <span>{{ $pergunta->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-dark text-center p-4">
                Nenhuma pergunta enviada ainda. Seja o primeiro!
            </div>
        @endforelse

        <!-- TICKET #002: Renderização dos Botões de Paginação -->
        @if(method_exists($perguntas, 'links'))
            <div class="d-flex justify-content-center mt-4">
                {{ $perguntas->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
=======
@section('content')
<div class="max-w-4xl mx-auto p-6">
    <!-- Cabeçalho do Evento -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <a href="{{ route('eventos.index') }}" class="text-blue-500 hover:underline text-sm">← Voltar para a lista</a>
        <h1 class="text-3xl font-bold text-gray-800 mt-2">{{ $evento->titulo }}</h1>
        <p class="text-gray-600 mt-2">{{ $evento->descricao }}</p>
    </div>

    <!-- Formulário para Nova Pergunta -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Faça sua Pergunta</h2>

        @if(session('sucesso'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('sucesso') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('perguntas.store') }}" method="POST">
            @csrf
            <input type="hidden" name="evento_id" value="{{ $evento->id }}">

            <div class="mb-4">
                <textarea name="texto" rows="3" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Digite sua pergunta aqui (mínimo 10 caracteres)...">{{ old('texto') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Enviar Pergunta
            </button>
        </form>
    </div>

    <!-- Lista de Perguntas -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Perguntas do Evento</h2>

        @forelse($perguntas as $pergunta)
            <div class="border-b border-gray-200 py-3 last:border-b-0">
                <p class="text-gray-800">{{ $pergunta->texto }}</p>
                <span class="text-xs text-gray-500">{{ $pergunta->created_at->diffForHumans() }}</span>
            </div>
        @empty
            <p class="text-gray-500 text-center py-4">Nenhuma pergunta enviada ainda. Seja o primeiro!</p>
        @endforelse

        <!-- Botões de Navegação (Paginação) -->
        <div class="mt-4">
            {{ $perguntas->links() }}
        </div>
    </div>
</div>
@endsection
>>>>>>> 596e555460e862e73aa1f31c51a9f5935a72f795
