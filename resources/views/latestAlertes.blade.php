@extends('landingPage')

@section('latestAlertes')
<div class="container mt-5">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Reference</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Statut</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($alertes as $alerte)
                <tr>
                    <th scope="row">{{ $alerte->date }}</th>
                    <td>
                        <button type="button" class="btn btn-sm btn-outline-success">{{ $alerte->reference }}</button>
                    </td>
                    
                    <td>
                        <a href="#" class="link-primary">{{ $alerte->intitule }}</a>
                    </td>
                    <td>{{ $alerte->etat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection