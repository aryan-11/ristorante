<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordini ristorante</title>
    <link rel="stylesheet" href="../frontend/style.css">
    <link rel="stylesheet" href="../frontend/ordini.css">
    <script src="../backend/js/index.js" defer></script>
</head>
<body>

    <?php 
        include ("index.php");
    ?>
    <div class="container">
        <nav class="navbar">
            <img src="../../assets/img/logo.png" alt="logo ristorante" class="logo">
            <div class="azzera">Azzera ordine</div>
            <a href="../../index.html" class="link_home">Torna alla pagina iniziale</a>
        </nav>

        <form action="ordini.php" method="post">
            <div class="content">
                <div class="right">
                    <div class="container_piatto_singolo pasta_e_cozze">
                        <input type="button" class="piatto piatto_1" value="Pizza Margherita;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[0][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[0][0]; ?></p>
                            <p><?php echo $mycsvfile[0][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo Lasagna">
                        <input type="button" class="piatto piatto_2" value="Lasagna;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[1][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[1][0]; ?></p>
                            <p><?php echo $mycsvfile[1][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo pasta_e_cozze">
                        <input type="button" class="piatto piatto_3" value="Pizza Margherita;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[2][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[2][0]; ?></p>
                            <p><?php echo $mycsvfile[2][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo pasta_e_cozze">
                        <input type="button" class="piatto piatto_4" value="Pizza Margherita;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[3][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[3][0]; ?></p>
                            <p><?php echo $mycsvfile[3][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo pasta_e_cozze">
                        <input type="button" class="piatto piatto_5" value="Pizza Margherita;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[4][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[4][0]; ?></p>
                            <p><?php echo $mycsvfile[4][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo pasta_e_cozze">
                        <input type="button" class="piatto piatto_6" value="Pizza Margherita;16;" name="piatto" style = "background: url('../../assets/img/piatti/<?php echo $mycsvfile[5][2] ?>') no-repeat center;">
                        <div class="infoPrezzi">
                            <p><?php echo $mycsvfile[5][0]; ?></p>
                            <p><?php echo $mycsvfile[5][1] ?> €</p>
                        </div>
                    </div>


                </div>
                <div class="left">
                    <div class="sezione_tavoli">
                        <h1>TAVOLI</h1>
                        <div class="container_tavoli">
                            <div class="tavoli_numerati 1">
                                1
                            </div>
                            <div class="tavoli_numerati 2">
                                2
                            </div>
                            <div class="tavoli_numerati 3">
                                3
                            </div>
                            <div class="tavoli_numerati 4">
                                4
                            </div>
                            <div class="tavoli_numerati 5">
                                5
                            </div>
                            <div class="tavoli_numerati 6">
                                6
                            </div>
                        </div>
                    </div>
                    <div class="resoconto">
                        <div class="risultati">

                        </div>
                        <div class="bottoni">
                            <button>totale</button>
                            <button><a href="./fattura.html">Chiudi conto e paga</a></button>
                            <button>cancella</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>