@extends('welcome')

@section('content')
<div class="container py-5">
  <h2 class="text-danger mb-4">{{ $alerte->intitule }}</h2>

  <div class="card shadow-sm p-4">
    <p><strong>Référence :</strong> {{ $alerte->reference }}</p>
    {{-- <p><strong>Type :</strong> {{ $alerte->typeAlerte->libelle }}</p> --}}
    <p><strong>Date initiale :</strong> {{ \Carbon\Carbon::parse($alerte->date_initial)->translatedFormat('d F Y') }}</p>
    <p><strong>État :</strong> 
      @if($alerte->etat === 'initial')
        <span class="text-danger">Alerte en cours</span>
      @else
        <span class="text-success">Clôturée le {{ \Carbon\Carbon::parse($alerte->date_traite)->format('d/m/Y') }}</span>
      @endif
    </p>

    <hr>
    <p><strong>Synthèse :</strong><br>{{ $alerte->synthese }}</p>
    <p><strong>Solution :</strong><br>{{ $alerte->solution }}</p>
  </div>

  <div class="mt-4">
    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">⬅ Retour</a>
  </div>
</div>
@endsection
