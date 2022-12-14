<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Bhaskara</title>
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
                margin-bottom:0;
                align-self:center;
            }

            form{
                display:flex;
                flex-direction:column;
                gap:10px;
                width:30%;
                align-items:center;
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
    <h1>Bhaskara com interface</h1>
    </header>

    <main>
        <form method="get" action="">
            <input type="number" name="a" placeholder="Digite o valor de 'a'" required>    
            <input type="number" name="b" placeholder="Digite o valor de 'b'" required>
            <input type="number" name="c" placeholder="Digite o valor de 'c'" required>
            <button type="submit" name="calc">Calcular</button>    
        </form>
    <div id="exercicios">
        <h3>Sa??da:</h3>
        <?php
            if(isset($_GET['calc'])){
                $a = $_GET['a'];
                $b = $_GET['b'];
                $c = $_GET['c'];

                $delta = ($b*$b)-(4*$a*$c);

                if($delta>=0){
                    $x1 = (-$b + sqrt($delta))/(2*$a);
                    $x2 = (-$b - sqrt($delta))/(2*$a);
                    echo "<p class='output'>O valor de delta ?? $delta</p>";
                    echo "<p class='output'>O valor de x1 ?? ".round($x1, 3)."</p>";
                    echo "<p class='output'>O valor de x2 ?? ".round($x2, 3)."</p>";
                }else{
                    echo "<p class='output'>[delta menor que zero] A qeua????o n??o possui valores reais.</p>";
                }
            }
        ?>
        <h3>C??digo PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                if(isset($_GET['calc'])){
                    $a = $_GET['a'];
                    $b = $_GET['b'];
                    $c = $_GET['c'];

                    $delta = ($b*$b)-(4*$a*$c);
                    $x1 = (-$b + sqrt($delta))/(2*$a);
                    $x2 = (-$b - sqrt($delta))/(2*$a);

                    if($delta>=0){
                        echo "&lt;p class='output'&gt;O valor de delta ?? $delta&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;O valor de x1 ?? ".round($x1, 3)."&lt;/p&gt;";
                        echo "&lt;p class='output'&gt;O valor de x2 ?? ".round($x2, 3)."&lt;/p&gt;";
                    }else{
                        echo "&lt;p class='output'&gt;[delta menor que zero] A qeua????o n??o possui valores reais.&lt;/p&gt;";
                    }
                }
            ?&gt;
        </pre>
        </div>
    </div>
    </main>
    <span id="author">Por: Marcos P??rsico. MED-1.</span>
</body>
</html>