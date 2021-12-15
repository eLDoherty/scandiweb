<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scandiweb</title>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/app.css">
</head>
<body>
    <div class="container">
        <header class="header-home">
            <nav class="navbar">
                <div class="navbar-left">
                    <h2>Product List</h2>
                </div>
                <div class="navbar-right">
                    <button class="add-button" onclick="window.location.href='<?php echo BASEURL; ?>/addproduct';">ADD</button>
                    <button type="submit" class="mass-delete-button" form="form-mass-delete">MASS DELETE</button>
                </div>
            </nav>
        </header>
    </div>