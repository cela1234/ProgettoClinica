@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Disorder Details -->
    <div class="disorder-details">
        <h3>Disturbi Motori</h3>
        <h4>{{ $disorder->name }} :</h4>
        <p>Descrizione: {{ $disorder->description }}</p>

        <!-- Events Section -->
        <div class="events-section">
            <h5>Eventi :</h5>
            <table class="events-table">
                <thead>
                    <tr>
                        <th>Data- ora</th>
                        <th>Durata</th>
                        <th>Intensità</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($disorder->events as $event)
                        <tr>
                            <td>{{ $event->datetime }}</td>
                            <td>{{ $event->duration }}</td>
                            <td>{{ $event->intensity }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

<style>
.container {
    background-color: #86DEF1; /* Background color */
    padding: 20px;
    border-radius: 10px;
}
.disorder-details {
    background-color: #14426C;
    padding: 20px;
    border-radius: 10px;
    color: white;
}
.events-section {
    margin-top: 20px;
}
.events-table {
    width: 100%;
    border-collapse: collapse;
}
.events-table th, .events-table td {
    padding: 10px;
    border: 1px solid #14426C;
}
.events-table th {
    background-color: #86DEF1;
}
</style>