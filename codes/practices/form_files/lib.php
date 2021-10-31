<?php

function display_header() {
    echo <<<HTML_FRAGMENT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forms</title>
        <style>
            body {
                height: 100vh;
                width: 100vw;

                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            form {            
                display: flex;
                flex-direction: column;
                align-content: center;    
                padding: 40px;
                width:300px;                                
                background-color: #FAF0E6;
            }

            .field {
                display: flex;                
                padding: 12px 0 12px 8px;            
                margin: 20px 0;       
                border-radius: 8px;     
                outline: none;
            }
            .btn {
                display: flex;
                cursor: pointer;
                padding: 12px 18px;
                margin-top: 10px;
                border-radius: 8px;     
                outline: none;
                color: #ffffff;
                background-color: #333333;
                justify-content: center;
                text-align: center;
            }

            .error {
                color: red;                
                padding: 10px;
        </style>
    </head>    
    <body>
    HTML_FRAGMENT;
}

function display_footer() {
    echo <<<HTML_FRAGMENT
    </body>
    </html>
    HTML_FRAGMENT;
}

?>
