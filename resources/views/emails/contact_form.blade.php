<!DOCTYPE html>
<html>
<head>
    <title>Контактная форма</title>
</head>
<body>
<h2>Новое сообщение из контактной формы</h2>
<p><strong>E-mail:</strong> {{ $data['email'] }}</p>
<p><strong>Сообщение:</strong> {{ $data['text'] }}</p>
<hr>
<small>Отправлено: {{ now()->format('d.m.Y H:i') }}</small>
</body>
</html>
