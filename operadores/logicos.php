<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Lógicos</title>
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
                margin-bottom:10px;
            }

            .bold{
                font-weight:bold;
                margin-left:30px;
            }
        </style>
</head>
<body>
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>

    <header>
    <h1>Operadores lógicos</h1>
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
                <font style="vertical-align: inherit;">e</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">E</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x e $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x e $y forem verdadeiros</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_and">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">ou</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Ou</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x ou $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x ou $y for verdadeiro</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_or">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">xor</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Xor</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x x ou $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x ou $y for verdadeiro, mas não ambos</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_xor">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">&amp;&amp;</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">E</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x &amp;&amp; $y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x e $y forem verdadeiros</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_and2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">||</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Ou</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">$x || </font>
                <font style="vertical-align: inherit;">$y</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x ou $y for verdadeiro</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_or2">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
    <tr>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">!</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Não</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">!$x</font>
            </font>
        </td>
        <td>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Verdadeiro se $x não for verdadeiro</font>
            </font>
        </td>
        <td><a target="_blank" class="w3-btn btnsmall" style="padding-top:2px;padding-bottom:2px;"
                href="https://www.w3schools.com/php/phptryit.asp?filename=tryphp_oper_not">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tente ></font>
                </font>
            </a></td>
    </tr>
</tbody>
    </table>
    <div id="exercicios">
        <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                //Declarando funções:
                function exemploAnd($x){
                    echo "&lt;p class='output bold'&gt;Exemplo com AND - &&&lt;/p&gt;";
                    if($x>0 && $x<10){
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;A variável está entre 1 e 9&lt;/p&gt;";
                    } else{
                        echo "&lt;p class='output'&gt;O valor é menor que 1 ou maior que 9&lt;/p&gt;";
                    }
                }

                function exemploOr($x){
                    echo "&lt;p class='output bold'&gt;Exemplo com OR - ||&lt;/p&gt;";
                    if($x<10 || $x>20){
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;A variável está entre 10 e 20&lt;/p&gt;";
                    } else{
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;O valor é menor que 10&lt;/p&gt;";
                    }
                }

                function exemploXor($x){
                    echo "&lt;p class='output bold'&gt;Exemplo com XOR&lt;/p&gt;";
                    if($x<10 XOR $x>20){
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;A variável está entre 10 e 20&lt;/p&gt;";
                    } else{
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;A variável é maior que 20&lt;/p&gt;";
                    }
                }

                function exemploNot($x){
                    echo "&lt;p class='output bold'&gt;Exemplo com NOT - !&lt;/p&gt;";
                    if(!($x<50)){
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;O teste é $x<50&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;Saída invertida se resposta final for FALSE&lt;/p&gt;";
                    } else{
                        echo "&lt;p class='output'&gt;A variável é $x&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;O teste é $x<50&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;Saída invertida se resposta final for TRUE&lt;/p&gt;";
                    }
                }

                //Chamando funções:
                exemploAnd(5);
                exemploOr(15);
                exemploXor(25);
                exemploNot(30);
            ?&gt;
        </pre>
        </div>
        <h3>Saída:</h3>
            <?php
                //Declarando funções:
                function exemploAnd($x){
                    echo "<p class='output bold'>Exemplo com AND - &&</p>";
                    if($x>0 && $x<10){
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>A variável está entre 1 e 9</p>";
                    } else{
                        echo "<p class='output'>O valor é menor que 1 ou maior que 9</p>";
                    }
                }

                function exemploOr($x){
                    echo "<p class='output bold'>Exemplo com OR - ||</p>";
                    if($x<10 || $x>20){
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>A variável está entre 10 e 20</p>";
                    } else{
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>O valor é menor que 10</p>";
                    }
                }

                function exemploXor($x){
                    echo "<p class='output bold'>Exemplo com XOR</p>";
                    if($x<10 XOR $x>20){
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>A variável está entre 10 e 20</p>";
                    } else{
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>A variável é maior que 20</p>";
                    }
                }

                function exemploNot($x){
                    echo "<p class='output bold'>Exemplo com NOT - !</p>";
                    if(!($x<50)){
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>O teste é $x<50</p>";
                        echo "<p class='output'>Saída invertida se resposta final for FALSE</p>";
                    } else{
                        echo "<p class='output'>A variável é $x</p>";
                        echo "<p class='output'>O teste é $x<50</p>";
                        echo "<p class='output'>Saída invertida se resposta final for TRUE</p>";
                    }
                }

                //Chamando funções:
                exemploAnd(5);
                exemploOr(15);
                exemploXor(25);
                exemploNot(30);
            ?>
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>