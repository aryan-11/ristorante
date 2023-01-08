<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordini ristorante</title>
    <link rel="stylesheet" href="../../frontend/style.css">
    <link rel="stylesheet" href="../../frontend/ordini.css">
    <!-- <script src="../js/index.js" defer></script> -->
</head>
<body>

    <?php 
        include ("index.php");
    ?>
    <div class="container">
        <nav class="navbar">
            <img src="../../../assets/img/logo.png" alt="logo ristorante" class="logo">
            <!-- <div class="azzera">Azzera ordine</div> -->
            <a href="ordini.php">Azzera ordine</a>
            <a href="../../../index.html" class="link_home">Torna alla pagina iniziale</a>
        </nav>

        <form action="fattura.php" method="post">
            <div class="content">
                <div class="right blocco ">
                    <p>Seleziona un tavolo per iniziare ad ordinare</p>
                </div>
                <div class="right ordini hide">
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_1" value="0" name="cozze" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[0][2] ?>') no-repeat center;">
                        <div class="infoPrezzi" id="<?php echo $mycsvfile[0][0]; ?>">
                            <p><?php echo $mycsvfile[0][0]; ?></p>
                            <p><?php echo $mycsvfile[0][1] ?> €</p>
                            <!-- <input type="text" name="name"> -->
                        </div>
                    </div>
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_2" value="<?php echo $mycsvfile[1][0];?>" name="piatto" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[1][2] ?>') no-repeat center;">
                        <div class="infoPrezzi" id="<?php echo $mycsvfile[1][0]; ?>">
                            <p><?php echo $mycsvfile[1][0]; ?></p>
                            <p><?php echo $mycsvfile[1][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_3" value="<?php echo $mycsvfile[2][0];?>" name="piatto" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[2][2] ?>') no-repeat center;">
                        <div class="infoPrezzi" id="<?php echo $mycsvfile[2][0]; ?>">
                            <p><?php echo $mycsvfile[2][0]; ?></p>
                            <p><?php echo $mycsvfile[2][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_4" value="<?php echo $mycsvfile[3][0];?>" name="piatto" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[3][2] ?>') no-repeat center;">
                        <div class="infoPrezzi" id="<?php echo $mycsvfile[3][0]; ?>">
                            <p><?php echo $mycsvfile[3][0]; ?></p>
                            <p><?php echo $mycsvfile[3][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_5" value="<?php echo $mycsvfile[4][0];?>" name="piatto" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[4][2] ?>') no-repeat center;">
                        <div class="infoPrezzi" id="<?php echo $mycsvfile[4][0]; ?>">
                            <p><?php echo $mycsvfile[4][0]; ?></p>
                            <p><?php echo $mycsvfile[4][1] ?> €</p>
                        </div>
                    </div>
                    <div class="container_piatto_singolo">
                        <input type="button" class="piatto piatto_6" value="<?php echo $mycsvfile[5][0];?>" name="piatto" style = "background: url('../../../assets/img/piatti/<?php echo $mycsvfile[5][2] ?>') no-repeat center;">
                        <div class="infoPrezzi"  id="<?php echo $mycsvfile[5][0]; ?>">
                            <p><?php echo $mycsvfile[5][0]; ?></p>
                            <p><?php echo $mycsvfile[5][1] ?> €</p>
                        </div>
                    </div>


                </div>
                <div class="left">
                    <div class="sezione_tavoli">
                        <h1>TAVOLI</h1>
                        <div class="container_tavoli">
                            <div class="tavoli_numerati tavoli_numerati1">1</div>
                            <div class="tavoli_numerati tavoli_numerati2">2</div>
                            <div class="tavoli_numerati tavoli_numerati3">3</div>
                            <div class="tavoli_numerati tavoli_numerati4">4</div>
                            <div class="tavoli_numerati tavoli_numerati5">5</div>
                            <div class="tavoli_numerati tavoli_numerati6">6</div>
                        </div>
                    </div>
                    <div class="resoconto">
                        <div class="risultati">
                            <p class="resoconto_vuoto">Clicca un tavolo e scegli una pietanza per ordinare</p>
                            
                            <div class="card_ordine card_ordine_1">
                                <p class="nome_tavolo">- Tavolo 1</p>
                                
                            </div>
                            <div class="card_ordine card_ordine_2">
                                <p class="nome_tavolo">- Tavolo 2</p>
                                <!-- <div class="dettaglio_ordine">
                                    <p class="ordine_nome"><?php echo $mycsvfile[2][0];?></p>
                                    <p class="ordine_prezzo"><?php echo $mycsvfile[2][1];?></p>
                                </div>
                                <div class="dettaglio_ordine">
                                    <p class="ordine_nome"><?php echo $mycsvfile[5][0];?></p>
                                    <p class="ordine_prezzo"><?php echo $mycsvfile[5][1];?></p>
                                </div>
                                <div class="dettaglio_ordine">
                                    <p class="ordine_nome"><?php echo $mycsvfile[4][0];?></p>
                                    <p class="ordine_prezzo"><?php echo $mycsvfile[4][1];?></p>
                                </div> -->
                            </div>
                            <div class="card_ordine card_ordine_3">
                                <p class="nome_tavolo">- Tavolo 3</p>
                            </div>
                            <div class="card_ordine card_ordine_4">
                                <p class="nome_tavolo">- Tavolo 4</p>
                            </div>
                            <div class="card_ordine card_ordine_5">
                                <p class="nome_tavolo">- Tavolo 5</p>
                            </div>
                            <div class="card_ordine card_ordine_6">
                                <p class="nome_tavolo">- Tavolo 6</p>
                            </div>
                            
                        </div>
                        <div class="bottoni">
                            <div class="totale">Totale: 0 €</div>
                            <input type="hidden" name="totale" value="testvalue">
                            <input type="submit" value="Chiudi conto e paga" class="submit">
                            <!-- <input type="reset" value="Cancella" class="reset"> -->
                            <div class="reset"><a href="ordini.php" class="reset_btn">Cancella</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="./js/index.js"></script>
</body>
</html>