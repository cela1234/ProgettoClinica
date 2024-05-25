<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clinica | @yield('title', 'Clinica')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="icon" href="{{ asset('css/immagini/physiomove_fisioterapia_e_movimento20230619170138.jpg') }}" type="image/x-icon">
</head>
<body>
  <img class="Logo" src="{{ asset('css/immagini/physiomove_fisioterapia_e_movimento20230619170138.jpg') }}" alt="">
  <nav id="menu" class="navbar">
    @include('layouts/_navpublic')
  </nav>

  <div id="page">
    <div id="page-bgtop">
      <div id="page-bgbtm">
        @yield('content')
        <div style="clear: both;">&nbsp;</div>
      </div>
    </div>
  </div>

  <!-- Optional footer section
  <div id="footer">
    <br>
    <p>universit&agrave; politecnica delle marche - Corso di  <a href="https://learn.univpm.it/course/view.php?id=7098">tecnologie web</a>.</p>
  </div>
  end #footer -->
</body>
</html>
