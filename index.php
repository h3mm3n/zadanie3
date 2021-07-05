<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Отправка письма с вложением</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="box">
      <h1>Форма обратной связи</h1>
    	<form id="ajax-contact-form" enctype="multipart/form-data" method="post">
          <div class="form-group">
            <label for="nameFF">Имя:</label>
            <input id="nameFF" name="nameFF" type="text" required>
          </div>
          <div class="form-group">
            <label for="contactFF">E-mail:</label>
            <input id="contactFF" name="contactFF" type="email" required>
          </div>
          <div class="form-group">
            <label for="telFF">Телефон:</label>
            <input id="telFF" name="telFF" type="tel" required>
          </div>
          <div class="form-group">
            <label for="projectFF">Сообщение</label>
            <textarea id="projectFF" name="projectFF" cols="40" rows="3"></textarea>
          </div>
          <div class="control-file">
            <label for="fileFF">Прикрепить файл:</label>
            <input id="fileFF" name="fileFF" type="file">
          </div>
          <button class="btn" type="submit" id="submitFF">Отправить сообщение</button>
        </form>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="script.js"></script>
</body>

</html>