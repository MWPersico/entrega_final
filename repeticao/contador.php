<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3schools30.css">
    <title>Contador</title>
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
                width:90%;
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
    <h1>Contador entre números</h1>
    </header>

    <main>
        <form method="post" action="">
            <input type="number" placeholder="primeiro valor" name="num1">
            <input type="number" placeholder="segundo valor" name="num2">
            <button type="submit" name="submit">Calcular</button>    
        </form>
    <div id="exercicios">
        <h3>Saída:</h3>
        <?php
            if(ISSET($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $larger = $num1 > $num2 ? $num1 : $num2;
                $smaller = $num1 < $num2 ? $num1 : $num2;
                $difference = $larger - $smaller;
                echo "<p class='output' style='width:80%;'>";
                for($i=$smaller+1; $i<$larger; $i++){
                    echo $i." ";
                }
                echo "</p>";
            }
        ?>
        <h3>Código PHP:</h3>      
        <div class="code">
        <pre>
            &lt;?php
                if(ISSET($_POST['submit'])){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $larger = $num1 > $num2 ? $num1 : $num2;
                    $smaller = $num1 < $num2 ? $num1 : $num2;
                    $difference = $larger - $smaller;
                    echo "&lt;p class='output' style='width:80%;'&gt;";
                    for($i=$smaller+1; $i<$larger; $i++){
                        echo $i." ";
                    }
                    echo "&lt;/p&gt;";
                }
            ?&gt;
        </pre>
        </div>
    </div>
    </main>
    <span id="author">Por: Marcos Pérsico. MED-1.</span>
</body>
</html>