@extends('layouts.app')

@section('title', 'FAQ - Telemedicina')

@section('content')
<div class="container-faq-completo">
    <div class="container-legenda">
        <h1>Argomenti</h1>
        <a href="#">Uso della piattaforma</a>
        <a href="#">Privacy e Sicurezza</a>
        <a href="#">Assistenza Tecnica</a>
    </div>
    <div class="container-faq">
        @foreach ($faqs as $faq)
        <div onclick="toggleAnswer('{{$faq->id}}')">
            <h2 id="question{{$faq->id}}" class="question">{{$faq->question}}</h2>
            <h3 id="answer{{$faq->id}}" class="answer" style="display: none;">{{$faq->answer}}</h3>
        </div>
        @auth
        @if (auth()->user()->isAdmin())
        <div>
            <button class="btn-edit" onclick="openEditPopup('{{$faq->id}}', '{{$faq->topic}}', '{{$faq->question}}', '{{$faq->answer}}')">Modifica FAQ</button>
            <a class="btn-delete" href="{{ route('faq.delete', [$faq->id]) }}">Elimina FAQ</a>
        </div>
        @endif
        @endauth
        @endforeach
    </div>
    @auth
    @if (auth()->user()->isAdmin())
    <button id="btnAddFaq" class="btn-add" onclick="openAddPopup()">Aggiungi FAQ</button>
    @endif
    @endauth

    <!-- Popup per aggiungere una nuova FAQ -->
    <div id="addFaqPopup" class="popup" style="display: none;">
        <h2>Nuova FAQ</h2>
        <form id="addFaqForm" action="{{ route('faq.store') }}" method="POST">
            @csrf
            <label for="topic">Argomento:</label>
            <input type="text" id="topic" name="topic" required>

            <label for="question">Domanda:</label>
            <textarea id="question" name="question" required></textarea>

            <label for="answer">Risposta:</label>
            <textarea id="answer" name="answer" required></textarea>

            <button type="submit">Invia</button>
            <button type="button" onclick="closeAddPopup()">Annulla</button>
        </form>
    </div>

    <!-- Popup per modificare una FAQ esistente -->
    <div id="editFaqPopup" class="popup" style="display: none;">
        <h2>Modifica FAQ</h2>
        <form id="editFaqForm" action="{{ route('faq.update') }}" method="POST">
            @csrf
            <input type="hidden" id="editFaqId" name="id">

            <label for="editTopic">Argomento:</label>
            <input type="text" id="editTopic" name="topic" required>

            <label for="editQuestion">Domanda:</label>
            <textarea id="editQuestion" name="question" required></textarea>

            <label for="editAnswer">Risposta:</label>
            <textarea id="editAnswer" name="answer" required></textarea>

            <button type="submit">Salva</button>
            <button type="button" onclick="closeEditPopup()">Annulla</button>
        </form>
    </div>
</div>
@endsection
