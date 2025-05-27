<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>404 - Сторінку не знайдено</title>
  <link rel="stylesheet" href="styles.css" />
  <style>
    /* Додаткові стилі лише для 404, якщо хочеш */
    body {
      background-color: #fff; /* світло-сірий фон */
      margin: 0;
      font-family: Arial, sans-serif;
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      text-align: center;
    }
    .error-image {
      max-width: 300px;
      width: 80vw;
    }
    .home-link {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007acc;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }
    .home-link:hover {
      background-color: #005f99;
    }
  </style>
</head>
<body>
  <img src="img/404.png" alt="404 Not Found" class="error-image" />
  <h1>Сторінку не знайдено</h1>
  <a href="/" class="home-link">На головну</a>
</body>
</html>
