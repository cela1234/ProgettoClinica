@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Patient Information -->
    <div class="patient-info">
        <div class="patient-avatar">
            <img src="{{ asset('path/to/avatar.png') }}" alt="Avatar">
        </div>
        <div class="patient-details">
            <h2>NOME COGNOME</h2>
            <p>+393800000000</p>
            <p>indirizzo</p>
            <p>indirizzo@mail.it</p>
            <p>M</p>
        </div>
    </div>

    <!-- Disorders Section -->
    <div class="disorders-section">
        <h3>Disturbi Motori</h3>
        <table class="disorders-table">
            <thead>
                <tr>
                    <th>Disturbi</th>
                    <th>Descrizione</th>
                    <th>Eventi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>disturbo1</td>
                    <td></td>
                    <td>
                        <ul>
                            <li>evento1</li>
                            <li>evento2</li>
                            <li>evento3</li>
                        </ul>
                    </td>
                    <td><a href="{{ route('disorder.show', $disorder->id) }}" class="info-btn">i</a></td>                </tr>
                <tr>
                    <td>disturbo2</td>
                    <td></td>
                    <td>
                        <ul>
                            <li>evento1</li>
                            <li>evento2</li>
                            <li>evento3</li>
                        </ul>
                    </td>
                    <td><a href="{{ route('disorder.show', $disorder->id) }}" class="info-btn">i</a></td>                </tr>
            </tbody>
        </table>
    </div>

    <!-- Event Insertion Form -->
    <div class="event-insert-section">
        <h4>Inserisci eventi :</h4>
        <form>
            <input type="text" name="disturbo" placeholder="disturbo">
            <input type="datetime-local" name="data-ora" placeholder="data-ora">
            <input type="text" name="durata" placeholder="durata">
            <input type="number" name="intensità" placeholder="intensità : n/10">
            <button type="submit">+</button>
        </form>
    </div>

    <!-- Clinical Record Button -->
    <div class="clinical-record-section">
        <button class="clinical-record-btn">Visualizza Cartella Clinica <i class="icon-folder"></i></button>
    </div>
</div>
@endsection

<style>
.container {
    background-color: #86DEF1; /* Background color */
    padding: 20px;
    border-radius: 10px;
}
.navbar {
    background-color: #14426C; /* Navbar color */
}
.patient-info {
    display: flex;
    align-items: center;
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 20px;
}
.patient-avatar img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
}
.patient-details {
    margin-left: 20px;
}
.disorders-section {
    background-color: #14426C;
    padding: 20px;
    border-radius: 10px;
    color: white;
}
.disorders-table {
    width: 100%;
    border-collapse: collapse;
}
.disorders-table th, .disorders-table td {
    padding: 10px;
    border: 1px solid #14426C;
}
.disorders-table th {
    background-color: #86DEF1;
}
.event-insert-section {
    background-color: #86DEF1;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
}
.event-insert-section form {
    display: flex;
    justify-content: space-between;
}
.event-insert-section input, .event-insert-section button {
    margin-right: 10px;
    padding: 10px;
    border: 1px solid #14426C;
    border-radius: 5px;
}
.clinical-record-section {
    margin-top: 20px;
}
.clinical-record-btn {
    padding: 10px 20px;
    background-color: #14426C;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.info-btn {
    background-color: #14426C;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 50%;
    cursor: pointer;
}
</style>