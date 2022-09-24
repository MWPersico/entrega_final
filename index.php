<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png">
    <title>Entrega Final</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

        body {
            background-color: #787cb4;
            display: flex;
            margin: 0;
            padding: 0;
            font-size: 12px;
            flex-direction: column;
            justify-content: center;
        }

        header {
            display: flex;
            flex-direction: row;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-family: 'Roboto', sans-serif;
            font-size: 3em;
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
        }

        img[alt="PHP"] {
            width: 9%;
            height: .54%;
            margin-left: 5px;
            cursor: pointer;
        }

        h3 {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        #author{
            font-weight:bold;
            font-family:'Franklin Gothic Medium', sans-serif;
            position:absolute;
            bottom:0;
        }

        .links {
            align-self: flex-start;
            margin-left: 5px;
        }

        .links ul {
            list-style-type: none;
            justify-content: center;
            flex-direction: column;
            display: flex;
        }

        .links ul li {
            margin-bottom: 5px;
        }

        .link_btn {
            border-radius: 4px;
            font-size: 2em;
            transition: transform .5s ease;
            cursor: pointer;
        }

        .link_btn:hover {
            transition: background-color .6s ease;
            transition: transform .5s ease;
            font-weight: bold;
            background-color: #9c9797;
            transform: translate(8px);
        }

        @media(min-width:300px) {
            .links ul {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <header>
        <h1>Entregas finais </h1>
        <img onclick="location.href='https:/www.php.net/manual/pt_BR/'"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png"
            alt="PHP">
    </header>

    <div class="links">
        <h3> Conteúdos e seus exercícios: </h3>
        <ul>
            <li><a href="./repeticao/"><button class="link_btn">Repetição</button></a></li>
            <li><a href="./validacao/"><button class="link_btn">Validação</button></a></li>
            <li><a href="./superglobais/"><button class="link_btn">Superglobais</button></a></li>
            <li><a href="./operadores/"><button class="link_btn">Operadores</button></a></li>
            <li><a href="./conceitos/"><button class="link_btn">Conceitos iniciais</button></a></li>
        </ul>
    </div>

    <p style="margin-left:20px; color:white; font-size:2em;"><b>Obs:</b> As páginas com exercícios estão sinalizadas, alguns exercícios estão na mesma página.<br>
       Os códigos são mostrados dentro de cada exercício. ^-^ boa correção!!
    </p>

    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>

</html>