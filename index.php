<!DOCTYPE html>

<html>


    <head>
        <title>DESPLIEGUE DE APLICACIONES WEB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap&" rel="stylesheet">



        <style>
            body {
                background: gainsboro;


            }

            h1 {

                text-align: center;

                color: black;
                font-family: 'Hachi Maru Pop', cursive;
                text-shadow: 4px 4px 4px #777,
                    8px 8px 8px #145;


            }


            footer {
                background-color: grey;
                position: fixed;
                width: 100%;
                height: 5vh;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                bottom: 0;
                left: 0px;
            }


            .icono_cv {
                position: absolute;
                top: 25px;
                left: 100px;
            }

            .icono_link {
                position: absolute;
                top: 25px;
                right: 200px;
            }
        </style>

    </head>

    <body>

        <div class="contenedor">
            <h1>DESPLIEGUE DE APLICACIONES WEB</h1  
        </div>

        <footer>

            <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
                <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="curriculum vitae" class="icono_cv" />
            </a>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;" onmouseout="this.width = 39; this.height = 39;" width="39" title="inicio" />
            </a>
            
            © Alejandro Otálvaro Marulanda

            <a href="https://github.com/alexotalvaro" target="_blank" style="text-decoration: none">
                <img src="/doc/git.png" alt="git" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="GIT" />
            </a>

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>
        </footer>
    </body>


</html>