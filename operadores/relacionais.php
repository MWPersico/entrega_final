<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Relacionais</title>
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
                align-items:center;
                flex-direction:column;
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

            #exercicios{
                font-size:2em;
                color:white;
                width:100%;
                display:flex;
                align-items:flex-start;
                flex-direction:column;
                margin-left:20px;
            }

            #exercicios h3{
                font-weight:bold;
                color:black;
                align-self:flex-start;
                margin-left:10px;;
            }

            .code{
                padding:10px;
                display:flex;
                flex-direction:column;
                align-items:flex-start;
                background-color:#15202b;
                border-radius:5px;
                margin-left:50px;
            }

            .code pre{
                text-align:left;
                font-size:.5em;
                margin-left:-70px;
            }

            .output{
                font-size:1em;
                margin-left:50px;
                margin-top:0;
            }
        </style>
</head>
<body>
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>
    <header>
    <h1>Operadores relacionais</h1>
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
                <font style="vertical-align: inherit;">==</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Igual</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x == $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for igual a $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_equal">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">===</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Idêntico</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x === $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for igual a $y e eles forem do mesmo
                    tipo</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_identical">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">!=</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Não igual</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x!= $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x não for igual a $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_equal">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&lt;&gt;</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Não igual</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &lt;&gt; $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x não for igual a $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_equal2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">!==</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Não idênticos</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x !== $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x não for igual a $y ou se não forem do
                    mesmo tipo</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not_identical">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&gt;</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Maior que</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &gt; $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for maior que $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_greater_than">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&lt;</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Menor que</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &lt; $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for menor que $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_less_than">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&gt;=</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Melhor que ou igual a</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &gt;= $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for maior ou igual a $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_greater_than2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&lt;=</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Menos que ou igual a</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &lt;= $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna verdadeiro se $x for menor ou igual a $y</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_less_than2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&lt;=&gt;</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nave espacial</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &lt;=&gt; $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Retorna um inteiro menor, igual ou maior que zero, dependendo se
                    $x for menor, igual ou maior que $y. </font>
                <font style="vertical-align: inherit;">(Introduzido no PHP 7.)</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_spaceship">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>

</tbody>
    </table>

    <h1>Exercício:</h1>
    <div id="exercicios">
        <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                $x = 5;
                if($x>10){
                    echo "&lt;p&gt;O valor é maior que 10.&lt;/p&gt;";
                } else{
                    echo "&lt;p&gt;O valor é menor ou igual a 10.&lt;/p&gt;";
                }
            ?&gt;
        </pre>
        </div>
        <h3>Saída:</h3>
            <?php
                $x = 5;

                if($x>10){
                    echo "<p class='output'>O valor é maior que 10.</p>";
                } else{
                    echo "<p class='output'>O valor é menor ou igual a 10.</p>";
                }
            ?>
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>