<?php
// Verifica modo manutenção
$statusPath = __DIR__ . '/status.json';
if (file_exists($statusPath)) {
    $data = json_decode(file_get_contents($statusPath), true);
    if (is_array($data) && !empty($data['maintenance'])) {
        http_response_code(503);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site em Manutenção - Thais Nail Designer</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8e1e7 0%, #e8c4c4 100%);
            color: #5a3d3d;
        }
        .container {
            text-align: center;
            padding: 40px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        .icon { font-size: 80px; margin-bottom: 20px; }
        h1 { font-size: 28px; margin-bottom: 15px; color: #c77d8e; }
        p { font-size: 16px; line-height: 1.6; opacity: 0.8; }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon"></div>
        <h1>Estamos em Manutenção</h1>
        <p>Nosso site está passando por melhorias.<br>Voltaremos em breve!</p>
        <p style="margin-top: 20px;"><strong>Thais Nail Designer</strong></p>
    </div>
</body>
</html>
<?php
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thais Nail Designer</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 50px;
            background: linear-gradient(135deg, #fce4ec 0%, #f8bbd9 100%);
        }
        h1 { color: #c2185b; }
    </style>
</head>
<body>
    <h1> Thais Nail Designer</h1>
    <p>Bem-vindo ao nosso site!</p>
    <p>Site funcionando normalmente.</p>
</body>
</html>
