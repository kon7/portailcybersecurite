{{-- @extends('welcome')

@section('content')
<div class="container py-5">
  <h2 class="text-center text-danger fw-bold mb-4">ALERTES DE SÉCURITÉ NUMERIQUE</h2>

  @foreach($types as $type)
    <h4 class="text-danger mt-5 border-bottom pb-2">{{ $type->libelle }}</h4>

    <table class="table table-striped mt-3">
      <tbody>
        @foreach($type->alertes as $alerte)
          <tr>
            <td>{{ \Carbon\Carbon::parse($alerte->date_initial)->translatedFormat('d F Y') }}</td>
            <td><strong>{{ $alerte->reference }}</strong></td>
            <td>{{ $alerte->intitule }}</td>
            <td>
              @if($alerte->etat === 'initial')
                <span class="text-danger">Alerte en cours</span>
              @else
                <span class="text-success">Clôturée le {{ \Carbon\Carbon::parse($alerte->date_traite)->format('d/m/y') }}</span>
              @endif
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

    <div class="text-end mb-5">
      <a href="{{ route('alertes.par.type', $type->id) }}" class="text-decoration-none fw-bold">
        Voir toutes les alertes >>
      </a>
    </div>
  @endforeach
</div>
@endsection --}}
@extends('welcome')

@section('content')
<div class="container py-5">
  <h2 class="text-center text-danger fw-bold mb-4">ALERTES DE SÉCURITÉ</h2>

  @foreach($types as $type)
    <h4 class="text-danger mt-5 border-bottom pb-2">{{ $type->libelle }}</h4>

    <div class="table-responsive">
      <table class="table table-striped table-hover mt-3 align-middle">
        <tbody>
          @foreach($type->alertes as $alerte)
            <tr class="alert-row" data-href="{{ route('alertes.show', $alerte->id) }}">
              <td>{{ \Carbon\Carbon::parse($alerte->date_initial)->translatedFormat('d F Y') }}</td>
              <td><strong>{{ $alerte->reference }}</strong></td>
              <td>{{ $alerte->intitule }}</td>
              <td>
                @if($alerte->etat === 'initial')
                  <span class="text-danger">Alerte en cours</span>
                @else
                  <span class="text-success">Clôturée le {{ \Carbon\Carbon::parse($alerte->date_traite)->format('d/m/y') }}</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="text-end mb-5">
      <a href="{{ route('alertes.par.type', $type->id) }}" class="text-decoration-none fw-bold">
        Voir toutes les alertes >>
      </a>
    </div>
  @endforeach
</div>
@endsection
