<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>
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
<body onload="window.location.href='#formu';">
    <button id="back" onclick="javascript:location.href='../'">&#8678</button>

    <header>
    <h1>Funções de validação</h1>
    </header>


    <main>
    <div class="function">
        <h3>Função <b>empty()</b></h3>
        <p>A função <b>empty()</b> verifica se uma variável está vazia ou não.<br>
            Esta função retorna <b>false</b> se a variável existir e não estiver vazia,<br>
            caso contrário, retorna <b>true</b>.</p>
    </div>
    <div class="function">
        <h3>Função <b>isset()</b></h3>
        <p>A função <b>isset()</b> verifica se uma variável está definida, o que<br> 
            significa que ela deve ser declarada e não é <b>NULL</b>.</p>
    </div>
    <div class="function">
        <h3>Função <b>is_numeric()</b></h3>
        <p>A função <b>is_array()</b> verifica se uma variável é um array ou não.<br>
            Esta função retorna <b>true</b> (1) se a variável for um array, <br>
            caso contrário, retorna <b>false/nada</b>.</p>
    </div>

    <form method="post" action="" id="formu">
        <fieldset>
            <legend>Dados pessoais</legend>
            <label for="nome">Digite um valor:</label>
            <input type="text" name="val">
            <button type="submit" name="empty">empty()</button>
            <button type="submit" name="isset">isset()</button>
            <button type="submit" name="isnum">is_numeric()</button>
        </fieldset>    
    </form>

    <div id="exercicios">
    <h3>Saída:</h3>
            <?php  
                //Declarando funções:
                function testeEmpty(){
                    $val = $_POST['val'];
                    if(empty($val)){
                        echo "Por favor, preencha um valor.";
                    }
                }

                function testeIsset(){
                    if(!empty($_POST)){
                        if(isset($_POST['val'])){
                            $val = $_POST['val'];
                            if(!empty($val)){
                                echo "O valor digitado foi: $val.";
                            } else{
                                echo "Por favor, digite o valor.";
                            }
                        } else{
                            echo "O campo não existe.";
                        }
                    } else{
                        echo "O formulário não foi enviado.";
                    }
                }

                function testeIsNumeric(){
                    if($_POST){
                        $x = $_POST['val'];
                        if(!empty($x) && is_numeric($x)){
                            if($x%4 == 0){
                                echo "O número ".$x." é divisível por 4."; 
                            } else{
                                echo "O número ".$x." não é divisível por 4.";
                            }
                        } else{
                            echo "Campo em branco ou inválido";
                        }
                    } else{
                        echo "O formulário não foi enviado.";
                    }
                }
                //Chamando funções:
                if(isset($_POST['empty'])) testeEmpty();
                if(isset($_POST['isset'])) testeIsset();
                if(isset($_POST['isnum'])) testeIsNumeric();
            ?>

        <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
            //Declarando funções:
                function testeEmpty(){
                    $val = $_POST['val'];
                    if(empty($val)){
                        echo "&lt;p class='output'&gt;Por favor, preencha um valor.&lt;/p&gt;";
                    }
                }

                function testeIsset(){
                    if(!empty($_POST)){
                        if(isset($_POST['val'])){
                            $val = $_POST['val'];
                            if(!empty($val)){
                                echo "&lt;p class='output'&gt;O valor digitado foi: $val.&lt;/p&gt;";
                            } else{
                                echo "&lt;p class='output'&gt;Por favor, digite o valor.&lt;/p&gt;";
                            }
                        } else{
                            echo "&lt;p class='output'&gt;O campo não existe.&lt;/p&gt;";
                        }
                    } else{
                        echo "&lt;p class='output'&gt;O formulário não foi enviado.&lt;/p&gt;";
                    }
                }

                function testeIsNumeric(){
                    if($_POST){
                        $x = $_POST['val'];
                        if(!empty($x) && is_numeric($x)){
                            if($x%4 == 0){
                                echo "&lt;p class='output'&gt;O número ".$x." é divisível por 4.&lt;/p&gt;"; 
                            } else{
                                echo "&lt;p class='output'&gt;O número ".$x." não é divisível por 4.&lt;/p&gt;";
                            }
                        } else{
                            echo "&lt;p class='output'&gt;Campo em branco ou inválido.&lt;/p&gt;";
                        }
                    } else{
                        echo "&lt;p class='output'&gt;O formulário não foi enviado.&lt;/p&gt;";
                    }
                }

            //Chamando funções:
                if(isset($_POST['empty'])) testeEmpty();
                if(isset($_POST['isset'])) testeIsset();
                if(isset($_POST['isnum'])) testeIsNumeric();
            ?&gt;
        </pre>
        </div>
        
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>