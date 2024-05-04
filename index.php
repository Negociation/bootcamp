<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu Portifolio - Marcos França</title>
        <link rel="stylesheet" href="./style/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <style>
            body{
                height: 100vh;
                overflow: hidden;
            }

            #box{
                background-color: #ffffffbf;
                padding: 5px;
                border: 1px solid #93909082;
                border-radius: 4px;
                display: flex;
                flex-direction: row;
                min-width: 350px;
                min-height: 500px;
            }

            .flex-divided{
                flex: 1;
            }

            .flex-center{
                display: flex;
                align-items: center;
                justify-content: center;
            }

            #foto{
                width: 200px;
                height: 200px;
            }

            .rounded{
                border-radius: 50%;
            }

            #left,#right{
                padding: 10px;
            }

            #right{
                min-width: 350px;
            }

            #right h1{
                text-align: center;
                font-family: Noto Sans;
            }

            #about{
                font-family: Noto Sans;
            }
        </style>
    </head>
    <body class="flex-center">
        <div id="box">
            <div id="left" class="flex-divided flex-center">
                <img id="foto" class="rounded" src="./img/foto.jpg" alt="foto pessoal">
            </div>
            <div id="right" class="flex-divided">
                <h1>Sobre Mim...</h1>
                <div id="about">
                    Meu nome é marcos, tenho 27 anos...
                </div>
            </div>
        </div>
    </body>
</html>