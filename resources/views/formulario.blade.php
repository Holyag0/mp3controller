<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<form class="form" method="post" action="C:\laravel\crud\resources\views\uploads.blade.php">
        <input type="text" name="nome" placeholder="Nome"><br>
        <input type="password" name="senha" placeholder="senha"><br>
        <input type="email" name="email" placeholder="E-mail"><br>
        <label >
                <input type="checkbox" name="concordo" value="sim">
                CONCORDO
        </label>
        <hr>
    <LABel>
            <br><input type="radio" name="sexo" value="F">  Femenino
    </LABel>
    <label >
            <input type="radio" name="sexo" value="M"> Masculino
    </label><br>
    <hr>
<select name="estado">
                    <option value="">escolha o estado</option>
                    <option value="GO">GOIÁS</option>
                    <option value="CE">ceará</option>
                    <option value="RJ">rio de janeiro</option><br>
</select>
<hr>
<BR></BR><textarea name="descrição" placeholder="descrição" cols="30" rows="10"></textarea><BR></BR>
<button type="submit">enviar</button><br>
</form>
<hr>

</body>
</html>
