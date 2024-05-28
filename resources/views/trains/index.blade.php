<!DOCTYPE html>
<html>
<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Treni in Partenza</title>
</head>
<body>
    <h1 class="text-center m-5">Treni in Partenza</h1>
    <table class="container ">
        <tr">
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice Treno</th>
            <th>Numero Carrozze</th>
            <th>In Orario</th>
            <th>Cancellato</th>
        </tr>
        @foreach ($treni as $treno)
        <tr >
            <td>{{ $treno->azienda }}</td>
            <td>{{ $treno->stazione_di_partenza }}</td>
            <td>{{ $treno->stazione_di_arrivo }}</td>
            <td>{{ $treno->orario_di_partenza }}</td>
            <td>{{ $treno->orario_di_arrivo }}</td>
            <td>{{ $treno->codice_treno }}</td>
            <td>{{ $treno->numero_carrozze }}</td>
            <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
            <td>{{ $treno->cancellato ? 'Sì' : 'No' }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
