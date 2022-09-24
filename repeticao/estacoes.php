<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estações</title>
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

            form select{
                border-radius:5px;
                width:60%;
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
    <h1>Estações do ano</h1>
    </header>


    <main>
    <form method="post" action="" id="formu">
        <fieldset>
            <legend>Dados pessoais</legend>
            <label for="nome">Selecione uma estação:</label>
            <select name="estacao">
                <option value="" selected="true" disabled="disabled" >Estações do ano</option>
                <option value="primavera" style="background-color:#7cae0e">Primavera</option>
                <option value="verao" style="background-color:#efda2e">Verão</option>
                <option value="outono" style="background-color:#e99926">Outono</option>
                <option value="inverno" style="background-color:#bdcce6">Inverno</option>
            </select>
            <button type="submit" name="submit">Submeter</button>
        </fieldset>    
    </form>

    <div id="exercicios">
    <h3>Saída:</h3>
    <?php
        if(ISSET($_POST['submit'])){
            $estacao = $_POST['estacao'] ?? "Insira uma estação";
            switch($estacao){
                case 'primavera':
                    echo "<p class='output'>A Primavera vai começar no dia 22 de Setembro de 2022.</p>";
                    break;
                case 'verao':
                    echo "<p class='output'>O Verão vai começar no dia 21 de Dezembro de 2022.</p>";
                    break;
                case 'outono':
                    echo "<p class='output'>O Outono começou no dia 20 de Março de 2022.</p>";
                    break;
                case 'inverno':
                    echo "<p class='output'>O Inverno começou no dia 21 de junho de 2022.</p>";
                    break;
                default:
                    echo $estacao;
            }
        }
    ?>

        <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                if(ISSET($_POST['submit'])){
                    $estacao = $_POST['estacao'] ?? "Insira uma estação";
                    switch($estacao){
                        case 'primavera':
                            echo "&lt;p class='output'>A Primavera vai começar no dia 22 de Setembro de 2022.&lt;/p&gt;";
                            break;
                        case 'verao':
                            echo "&lt;p class='output'&gt;O Verão vai começar no dia 21 de Dezembro de 2022.&lt;/p&gt;";
                            break;
                        case 'outono':
                            echo "&lt;p class='output'&gt;O Outono começou no dia 20 de Março de 2022.&lt;/p&gt;";
                            break;
                        case 'inverno':
                            echo "&lt;p class='output'&gt;O Inverno começou no dia 21 de junho de 2022.&lt;/p&gt;";
                            break;
                        default:
                            echo $estacao;
                    }
                }
            ?&gt;
        </pre>
        </div>
        
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>
