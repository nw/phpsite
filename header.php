<html>
    <head>
        <style>
            #container {
                width: 800px;
                margin: 20px auto;
                border: 1px solid black;
                background: white;
            }

            #header {
                height: 100px;
                border-bottom: 1px solid black;
            }

            #menu {
                width: 20%;
                float: left;
                border-right: 1px solid black;
            }

            #content {
                float: left;
                width: calc(80%-1px);
            }

            #footer {
                clear: both;
                width: 100%;
                height: 100px;
                border: 1px solid black;
            }
        </style>
    </head>
    <div id="container">
        <div id="header">
            <h1>Logo</h1>
        </div>
        <?php include "menu.php" ?>
        <div id="content">