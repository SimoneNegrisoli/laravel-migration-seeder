@extends('layouts.app')
@section('title', 'Treni in arrivo')

@section('content')
    <main class="container">
        <div class="row">
            <div class="col-12">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Compagnia</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario partenza</th>
                            <th scope="col">Orario arrivo</th>
                            <th scope="col">Codice treno</th>
                            <th scope="col">N° carrozze</th>
                            <th scope="col">Treno cancellato</th>
                            <th scope="col">Treno in orario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ $train['orario_partenza'] }}</td>
                                <td>{{ $train['orario_arrivo'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>

                                @if ($train['cancellato'] == 0)
                                    <td>
                                        <i class="fa-solid fa-check mydelete"></i>
                                    </td>
                                    <td>
                                        <i class="fa-solid fa-xmark mydelete"></i>
                                    </td>
                                @else
                                    <td>
                                        <i class="fa-solid fa-xmark myconfirmed"></i>
                                    </td>
                                    <td>
                                        <i class="fa-solid fa-check myconfirmed"></i>
                                    </td>
                                @endif

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>
@endsection


{{-- <i class="fa-solid fa-check"></i> --}}
