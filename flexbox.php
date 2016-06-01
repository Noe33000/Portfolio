<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <style>
            * {
                margin: 0;
                padding: 0;
                text-decoration: none;
            }
            html {
                font-size: 16px;
            }
            body {
                padding:10px 40px;
                font-size: 1.4em;
                font-family: verdana, helvetica, arial, serif;
            }
            h1 {
                color: #345; 
                text-shadow: 1px 1px 2px #aaa; 
                font-size:1.8em;
            }
            h2 {
                color: #678; 
                text-shadow: 1px 1px 2px #aaa; 
                font-size:1.1em;
                padding-bottom: 1rem;
            }
            
            .fruits {
                width: 80%;
                outline: 1px solid #333;
                background: #eee;
                padding: 1rem;
                display: flex;
                
            }
            li {
                color: #fff; 
                padding: 10px; 
                list-style: none; 
            }
            
            li:nth-child(1) {background: tomato}
            li:nth-child(2) {background: orange}
            li:nth-child(3) {background: #800000}
            li:nth-child(4) {background: #FF3399}
            li:nth-child(5) {background: #3399FF}
            
        </style>
        <title>Flexbox CSS</title>
    </head>
    <body>
        <h1>Flex Box Model</h1>
        <h2>display: flex</h2>
        <ul class="fruits">
            <li>Poire</li>
            <li>Pomme</li>
            <li>Orange</li>
            <li>Citron</li>
            <li>Fraise</li>
        </ul>
    </body>
</html>