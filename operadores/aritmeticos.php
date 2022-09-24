<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Aritméticos</title>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

            body{
                background-color:#787cb4;
                display:flex;
                margin:0;
                padding:0;
                font-size: 12px;
                font-family: 'Roboto', sans-serif;
                flex-direction:column;
            }

            header{
                display:flex;
                flex-direction:row;
                width:100%;
                justify-content:center;
                align-items:center;
            }

            h1{
                font-size:3em;
                text-align:center;
                font-weight:700;
                margin-bottom:20px;
            }

            main{
                display:flex;
                justify-content:center;
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
                display:flex;
                align-self:flex-start;
                position:fixed;
                bottom:0;
            }
        </style>
</head>
<body>
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>

    <header>
    <h1>Operadores aritméticos</h1>
    </header>

    <main>
    <table class="ws-table-all" style="width:70%;">
    <tbody>
        <tr>
            <th style="width:15%">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Operador</font>
                </font>
            </th>
            <th style="width:20%">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nome</font>
                </font>
            </th>
            <th style="width:20%">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Exemplo</font>
                </font>
            </th>
            <th style="width:35%">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Resultado</font>
                </font>
            </th>
            <th style="width:10%">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Mostre</font>
                </font>
            </th>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">+</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Adição</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x + $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Soma de $x e $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_addition">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">-</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Subtração</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x - $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Diferença de $x e $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                    href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_subtraction">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">*</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Multiplicação</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x * $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Produto de $x e $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                    href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_multiplication">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">/</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Divisão</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x / $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Quociente de $x e $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                    href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_division">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Módulo</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x % $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Restante de $x dividido por $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                    href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_modulus">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
        <tr>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">**</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Exponenciação</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">$x ** $y</font>
                </font>
            </td>
            <td>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Resultado de elevar $x à potência $y</font>
                </font>
            </td>
            <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                    href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_exponentiation">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tente ></font>
                    </font>
                </a></td>
        </tr>
    </tbody>
    </table>
    </main>

    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>