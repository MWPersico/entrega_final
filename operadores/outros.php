<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Outros</title>
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
                flex-direction:column;
                align-items:center;
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
    <main>
        <h1>Operadores de atribui????o</h1>
    <table class="ws-table-all" style="width:70%;">
    <tbody>
    <tr>
        <th style="width:15%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Atribui????o</font>
            </font>
        </th>
        <th style="width:20%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Igual a...</font>
            </font>
        </th>
        <th style="width:55%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Descri????o</font>
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
                <font style="vertical-align: inherit;">x = y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O operando esquerdo ?? definido com o valor da express??o ?? direita
                </font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_set">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x += y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = x + y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Adi????o</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_addition2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x -= y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = x - y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Subtra????o</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_subtraction2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x *= y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = x * y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Multiplica????o</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_multiplication2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x /= y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = x/y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Divis??o</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_division2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x %= y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">x = x % y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">M??dulo</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_modulus2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
</tbody>
    </table>

    <h1>Operadores de incremento/decremento</h1>

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
        <th style="width:55%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Descri????o</font>
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
                <font style="vertical-align: inherit;">++$x</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Pr??-incremento</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Incrementa $x em um, ent??o retorna $x</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_pre_incr">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x++</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">P??s-incremento</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna $x e incrementa $x em um</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_post_incr">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">--$x</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Pr??-decremento</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Decrementa $x em um, ent??o retorna $x</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_pre_decr">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x--</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">P??s-decremento</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna $x, ent??o decrementa $x em um</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_post_decr">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
</tbody>
    </table>

    <h1>Operadores de atribui????o condicional</h1>
    <table class="ws-table-all" style="width:70%;">
    <tbody>
    <tr>
        <th style="width:15%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Operador</font>
            </font>
        </th>
        <th style="width:22%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nome</font>
            </font>
        </th>
        <th style="width:15%">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Exemplo</font>
            </font>
        </th>
        <th style="width:38%">
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
                <font style="vertical-align: inherit;">?:</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Tern??rio</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x = </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">exp1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> ? </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr2</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> : </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr3</font>
                </font>
            </em>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna o valor de $ x. </font>
            </font><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O valor de $x ?? </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr2</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> se </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    = TRUE. </font>
            </font><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O valor de $x ?? </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr3</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> se </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> = FALSE</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_ternary">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">??</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Aglutina????o nula</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x = </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">exp1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> ?? </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr2</font>
                </font>
            </em>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna o valor de $ x. </font>
            </font><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">O valor de $x ?? </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> se </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">
                    existir e n??o for NULL. </font>
            </font><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Se </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr1</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> n??o existir ou for NULL, o valor de $x ser??
                </font>
            </font><em>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">expr2</font>
                </font>
            </em>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;"> . </font>
            </font><br>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">(Introduzido no PHP 7.)</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_null_coalescing">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
</tbody>
    </table>
    </main>
    <span id="author">Por: Marcos P??rsico. MED-1.</span>
</body>
</html>
