@extends('welcome')

@section('content')
<div class="container py-5">
  <h2 class="text-center text-danger fw-bold mb-4">{{ $type->libelle }}</h2>

  <table class="table table-striped">
    <tbody>
      @foreach($type->alertes as $alerte)
        <tr>
          <td>{{ \Carbon\Carbon::parse($alerte->date_initial)->translatedFormat('d F Y') }}</td>
          <td><strong>{{ $alerte->reference }}</strong></td>
          <td>{{ $alerte->intitule }}</td>
          <td>
            @if($alerte->etat === 'Initial')
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
@endsection
