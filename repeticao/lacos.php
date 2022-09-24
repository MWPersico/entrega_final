<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
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
    <h1>Estruturas de repetição</h1>
    </header>
    <main>
    <div id="exercicios">
    <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                function exemploFor(){
                    echo "&lt;p class='output bold'>Exemplo com FOR (PAG1)&lt;/p>";
                    for($i=1; $i&lt;10; $i++){
                        echo "&lt;p class='output'>Linha $i&lt;/p>";
                    }
                }

                function exemploBreak(){
                    echo "&lt;p class='output bold'>Exemplo com BREAK (PAG2)&lt;/p>";
                    for($i=1; $i&lt;10; $i++){
                        echo "&lt;p class='output'>Linha $i&lt;/p>";
                        if($i==5){
                            break;
                        }
                    }
                }

                function exemploWhile(){
                    echo "&lt;p class='output bold'&gt;Exemplo com WHILE (PAG3)&lt;/p&gt;";
                    $i = 1;
                    while($i&lt;50){
                        if($i%7==0){
                            echo "&lt;p class='output'&gt;$i é multiplo de 7&lt;/p&gt;";
                        }
                        $i++;
                    }
                }

                function exemploSwitch(){
                    echo "&lt;p class='output bold'&gt;Exemplo com SWITCH (PAG4)&lt;/p&gt;";
                    $dia = "Sábado";
                    switch($dia){
                        case "Domingo":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Segunda":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Terça":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Quarta":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Quinta":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Sexta":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        case "Sábado":
                            echo "&lt;p class='output'&gt;$dia&lt;/p&gt;";
                        break;
                        default:
                            echo "&lt;p class='output'&gt;Dia da semana invalido&lt;/p&gt;";
                    }
                }

                exemploFor();
                exemploBreak();
                exemploWhile();
                exemploSwitch();
            ?&gt;
        </pre>
        </div>

    <h3>Saída:</h3>
    <?php
        function exemploFor(){
            echo "<p class='output bold'>Exemplo com FOR (PAG1)</p>";
            for($i=1; $i<10; $i++){
                echo "<p class='output'>Linha $i</p>";
            }
        }

        function exemploBreak(){
            echo "<p class='output bold'>Exemplo com BREAK (PAG2)</p>";
            for($i=1; $i<10; $i++){
                echo "<p class='output'>Linha $i</p>";
                if($i==5){
                    break;
                }
            }
        }

        function exemploWhile(){
            echo "<p class='output bold'>Exemplo com WHILE (PAG3)</p>";
            $i = 1;
            while($i<50){
                if($i%7==0){
                    echo "<p class='output'>$i é multiplo de 7</p>";
                }
                $i++;
            }
        }

        function exemploSwitch(){
            echo "<p class='output bold'>Exemplo com SWITCH (PAG4)</p>";
            $dia = "Sábado";
            switch($dia){
                case "Domingo":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Segunda":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Terça":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Quarta":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Quinta":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Sexta":
                    echo "<p class='output'>$dia</p>";
                break;
                case "Sábado":
                    echo "<p class='output'>$dia</p>";
                break;
                default:
                    echo "<p class='output'>Dia da semana invalido</p>";
            }
        }
        
        exemploFor();
        exemploBreak();
        exemploWhile();
        exemploSwitch();
    ?>
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>