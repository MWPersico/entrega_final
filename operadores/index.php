<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        
            body{
                background-color:#787cb4;
                display:flex;
                margin:0;
                padding:0;
                font-size: 12px;
                flex-direction:column;
                justify-content:center;
            }

            header{
                display:flex;
                flex-direction:row;
                width:100%;
                justify-content:center;
                align-items:center;
            }

            h1{
                font-family: 'Roboto', sans-serif;
                font-size:3em;
                text-align:center;
                font-weight:700;
                margin-bottom:20px;
            }

            img[alt="PHP"]{
                width:9%;
                height:.54%;
                margin-left:5px;
                cursor: pointer;

            }

            h3{
                font-family:'Roboto', sans-serif;
                font-weight:300;
                font-size:2.5em;
                margin-bottom:10px;
            }

            #back{
                background-color:transparent;
                border:none;
                position:absolute;
                left:0;
                top:0;
                font-size:2em;
                cursor:pointer;
                transition:.3s linear;
                font-weight:bold;
            }
        
            #back:hover{
                color:purple;
                transform:translate(3px);
                transition:.3s linear;
            }
        
            #author{
                font-weight:bold;
                font-family:'Franklin Gothic Medium', sans-serif;
                position:absolute;
                bottom:0;
            }

            .links{
                align-self:flex-start;
                margin-left:5px;
            }

            .links ul{
                list-style-type:none;
                justify-content:center;
                flex-direction:column;
                display:flex;
            }

            .links ul li{
                margin-bottom:5px;
            }

            .link_btn{
                border-radius:4px;
                cursor: pointer;
                font-size:2em;
                transition: transform .5s ease;
            }

            .link_btn:hover{
                transition:background-color .6s ease;
                transition: transform .5s ease;
                font-weight:bold;
                background-color:#9c9797;
                transform:translate(8px);
            }

            @media(min-width:300px){
                .links ul{
                    justify-content:center;
                }
            }
        </style>
</head>
<body>
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>
    <header>
    <h1>Operadores em </h1>
    <img onclick="location.href='https:/www.php.net/manual/pt_BR/language.operators.php'"
    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png" alt="PHP">
    </header>

    <div class="links">
        <h3>Tipos de operadores:</h3>
        <ul>
            <li><a href="aritmeticos.php"><button class="link_btn">Operadores Aritméticos</button></a></li>
            <li><a href="logicos.php"><button class="link_btn">Operadores Lógicos</button></a> <= Exercício</li>
            <li><a href="relacionais.php"><button class="link_btn">Operadores Relacionais</button></a> <= Exercício</li>
            <li><a href="outros.php"><button class="link_btn">Outros Operadores</button></a></li>
            <li><a href="bhaskara.php"><button class="link_btn">Bhaskara sem interface</button></a> <= Exercício</li>
        </ul>
    </div>

    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>