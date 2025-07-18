

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
    background-color: #2e2e3e;
    color: #ffffff;
    border-radius: 8px;
    max-width: 800px;
    width: 100%;
    padding: 20px;
    margin-top: 40px;
    overflow-y: auto;
    max-height: 500px;
    display: flex;
    align-items: center;
    justify-content: start;
    flex-direction: row;
    flex-wrap: wrap;
    text-align: center;
}

.terminal-line {
    color: #61dafb;
    margin-bottom: 2px;
    white-space: pre-wrap;
    border-radius: 4px;
    font-size: 14px;
}

</style>

</head>
<body>
    
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['filename'] ?? '';
    $options = $_POST['options'] ?? '';
    $text = $_POST['text'] ?? '';

    if($options === "vizualizar") {

        $myfile = fopen($input, "r") or die("Arquivo não encontrado!");
        while(!feof($myfile)) {
           echo "<div class='terminal-line'>" . htmlspecialchars(fgets($myfile)) . "<br>" . "</div>";
    }
        fclose($myfile);
       // header('location: vizualizar.php');
    }
    elseif($options === "criar") {
        $myfile3 = fopen($input, "w") or die("Arquivo foi pro carai");
        fwrite($myfile3, $text);
        fclose($myfile3);
        header('location: index.php');
    }
    elseif($options === "deletar") {
        unlink($input);
        header('location: index.php');
    }
    elseif($options === "atualizar") {
        $myfile2 = fopen($input, "a") or die("Arquivo não encontrado!");
        fwrite($myfile2, $text);
        fclose($myfile2);
        header('location: index.php');
    }
}

?>