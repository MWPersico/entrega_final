<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceitos</title>
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

            .function h3{
                font-size:2.2em;
                font-weight:500;
                text-align:center;
            }

            .function p{
                font-size:1.8em;
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
                margin-top:20px;
            }

            form{
                display:flex;
                flex-direction:column;
                gap:10px;
                width:40%;
                align-items:center;
            }

            form fieldset{
                width:100%;
                border-radius:5px;
                border:5px solid #6600ff4d;
                box-shadow:2px 4px 10px #9a64ea;
                display:flex;
                flex-direction:column;
                align-items:center;
                gap:8px;
            }

            form fieldset legend{
                font-weight:bold;
                color: #6600ff4d;
                font-size:1.3em;
                padding:0px 5px;
            }

            form label{
                font-size:.9em;
                font-weight:bold;
                margin-bottom:-8px
            }

            form input{
                width:100%;
                border-radius:5px;
            }

            form button{
                width:80%;
                border-radius:5px;
                cursor: pointer;
                transition:.3s linear;
                justify-self:center;
            }

            form button:hover{
                background-color:#808080;
                transition:.3s linear;
                font-weight:bold;
            }
        </style>
</head>
<body>
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>

    <header>
    <h1>Conceitos - Testes iniciais</h1>
    </header>
    <main>
    <div id="exercicios">
    <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
            function exemploEscopo(){
            $a = 1;
            function teste(){
                echo "&lt;p class='output bold'&gt;Exemplo de escopo&lt;/p&gt;";
                $a = 2;
                echo $a;
            }
            teste();
            }
        
            function exemploFuncao(){
                function minhaFuncao(){
                    echo "&lt;p class='output bold'&gt;Exemplo de escopo&lt;/p&gt;";
                    $texto = "Olá, estrelinhas!";
                    echo "O texto passado para a função foi:".$texto;
                }
                minhaFuncao();
            }
        
            function exemploParametro(){
                function minhaFuncao1($texto){
                    echo "&lt;p class='output bold'&gt;Exemplo de parâmetro&lt;/p&gt;";
                    echo "O texto passado para a função foi:".$texto;
                }
                minhaFuncao1("Olá, estrelinhas!");
            }
        
            function exemploRetorno(){
                function minhaFuncao2($texto){
                    echo "&lt;p class='output bold'&gt;Exemplo de retorno&lt;/p&gt;";
                    $nome = "Marquim";
                    $mensagem = "$texto., meu nome é $nome";
                    return $mensagem;
                }
                echo minhaFuncao2("Olá, estrelonas");
            }
        
            function exemploVariavel(){
                echo "&lt;p class='output bold'&gt;Exemplo de parâmetro&lt;/p&gt;";
                $nome = "Marquim";
                $idade = "17";
                $genero = "Masculino";
            
                echo "&lt;p class='output'&gt;$nome&lt;/p&gt;";
                echo "&lt;p class='output'&gt;$idade&lt;/p&gt;";
                echo "&lt;p class='output'&gt;$genero&lt;/p&gt;";
            }
        
            exemploEscopo();
            exemploFuncao();
            exemploParametro();
            exemploRetorno();
            exemploVariavel();
            ?&gt;
        </pre>
        </div>

    <h3>Saída:</h3>
    <?php

        function exemploEscopo(){
            $a = 1;
            function teste(){
                echo "<p class='output bold'>Exemplo de escopo</p>";
                $a = 2;
                echo $a;
            }
            teste();
        }

        function exemploFuncao(){
            function minhaFuncao(){
                echo "<p class='output bold'>Exemplo de escopo</p>";
                $texto = "Olá, estrelinhas!";
                echo "O texto passado para a função foi:".$texto;
            }
            minhaFuncao();
        }

        function exemploParametro(){
            function minhaFuncao1($texto){
                echo "<p class='output bold'>Exemplo de parâmetro</p>";
                echo "O texto passado para a função foi:".$texto;
            }
            minhaFuncao1("Olá, estrelinhas!");
        }

        function exemploRetorno(){
            function minhaFuncao2($texto){
                echo "<p class='output bold'>Exemplo de retorno</p>";
                $nome = "Marquim";
                $mensagem = "$texto., meu nome é $nome";
                return $mensagem;
            }
            echo minhaFuncao2("Olá, estrelonas");
        }

        function exemploVariavel(){
            echo "<p class='output bold'>Exemplo de parâmetro</p>";
            $nome = "Marquim";
            $idade = "17";
            $genero = "Masculino";

            echo "<p class='output'>$nome</p>";
            echo "<p class='output'>$idade</p>";
            echo "<p class='output'>$genero</p>";
        }

        exemploEscopo();
        exemploFuncao();
        exemploParametro();
        exemploRetorno();
        exemploVariavel();
    ?>
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>