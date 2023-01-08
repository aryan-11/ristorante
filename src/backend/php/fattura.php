<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fattura ristorante</title>
    <link rel="stylesheet" href="../../frontend/style.css">
    <link rel="stylesheet" href="../../frontend/fattura.css">
</head>
<body>
    <?php 
        echo $_POST['cozze'];
    ?>
    <div class="container">
        <nav class="navbar">
            <img src="../../../assets/img/logo.png" alt="logo ristorante" class="logo">
            <a href="../../../index.html" class="link_home">Torna alla pagina iniziale</a>
        </nav>
        <section class="content">
            <p class="grazie">Grazie per aver ordinato da noi! Ecco il resoconto del tuo ordine, per scaricare la fattura premi il tasto in basso</p>
            <div class="fattura"></div>
            <div class="btn">Clicca per scaricare la fattura</div>
        </section>
    </div>
</body>
</html>