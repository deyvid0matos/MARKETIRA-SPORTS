<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Falha no Envio</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color:rgb(245, 165, 74);
        }
        .container {
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-weight: 600;
            color: #ef6611e5;
        }
        a {
            text-decoration: none;
            color:rgb(0, 0, 0);
            font-weight: 400;
            margin-top: 10px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo "EMAIL NÃO ENVIADO, TENTE NOVAMENTE!"; ?></h1><BR></BR>
        <a href="javascript:void(0)" onclick="history.go(-1); return false;">Voltar</a>
    </div>
</body>
</html>