<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Arquivos</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code&display=swap');

        * {
            box-sizing: border-box;
            font-family: 'Fira Code', monospace;
        }

        body {
            background-color: #1e1e2f;
            color: #ffffff;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        form {
            background-color: #2e2e3e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #61dafb;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin: 8px 0 4px;
            font-size: 14px;
            color: #aaa;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 16px;
            background-color: #1c1c2b;
            border: 1px solid #444;
            color: #fff;
            border-radius: 5px;
        }

        input[type="text"]::placeholder,
        textarea::placeholder {
            color: #888;
        }

        textarea {
            min-height: 120px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #61dafb;
            border: none;
            color: #1e1e2f;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #21a1f1;
        }

        select {
            appearance: none;
            background-color: #1c1c2b;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="logic.php" method="post">
        <h1>Manipulador de Arquivos</h1>

        <label for="filename">Nome do arquivo</label>
        <input type="text" name="filename" id="filename" placeholder="ex: dados.txt" required>

        <label for="options">Selecione uma operação</label>
        <select name="options" id="options">
            <option value="vizualizar">Visualizar</option>
            <option value="criar">Criar</option>
            <option value="deletar">Deletar</option>
            <option value="atualizar">Atualizar</option>
        </select>

        <label for="text">Conteúdo (opcional)</label>
        <textarea name="text" id="text" placeholder="Digite o conteúdo aqui, se necessário."></textarea>

        <button type="submit">Executar</button>
    </form>
</body>
</html>
