<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Aggiungi qui eventuali stili CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #86DEF1;
        }
        .navbar {
            background-color: #14426C;
            overflow: hidden;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 20px;
          
            font-weight: bold;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .right {
            float: right;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Imposta l'immagine di sfondo */
            background-image: url('C:\Users\peter\OneDrive\Documents\GitHub\ProgettoClinica\Background.jpg');
            background-size: cover; /* Ridimensiona l'immagine per coprire tutto lo sfondo */
            background-position: center; /* Centra l'immagine nello sfondo */
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="navbar">
  <a href="/">Home</a>
  <div class="right">
    <a href="login" class="button">Login</a>
    <a href="faq" class="button">FAQ</a>
    <a href="who" class="button">Chi Siamo</a>
  </div>
</div>

<div class="container">
  <h1>Benvenuto nella nostra Homepage!</h1>
  <p>Qui puoi trovare tutte le informazioni di cui hai bisogno.</p>
  <!-- Aggiungi qui il resto del contenuto -->
  <img src="Background.jpg" alt="">
  
</div>

</body>
</html>