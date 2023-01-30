<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="../../../frontend/data.css">
    <link rel="stylesheet" href="../../../frontend/style.css">
    <?php include "index.php"; ?>
</head>
<body>
    <section class="container_page">
        <nav>
            <img src="../../../../assets/logo.png" alt="logo">
            <a href="data.php">Riazzera tutti gli ordini</a>
            <a href="../../../../index.html">Torna alla pagina iniziale</a>
        </nav>
        <div class="container_content">
            <div class="container_piatti">
                
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>

                <!--  -->
                <!--  -->
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>
                <a href="#"><div class="box_piatto">    
                        <div class="img_mask"><img id="piatto1" src="../../../../assets/piatti/cozze.jpeg" alt="pasta cozze"></div>
                        <div class="infoPrezzi">
                            <input type="hidden" value="1">
                            <span class="nome">Pasta con cozze ~ </span>
                            <span class="prezzo">90 €</span>
                        </div>
                    </div>
                </a>
               
                


            </div>
            <div class="container_left">
                <div class="container_tavoli">
                    <p>Tavoli:</p>
                    <div class="nTavolo tavolo1">1</div>
                    <div class="nTavolo tavolo2">2</div>
                    <div class="nTavolo tavolo3">3</div>
                    <div class="nTavolo tavolo4">4</div>
                    <div class="nTavolo tavolo5">5</div>
                </div>
                <div class="container_resoconto">
                    <div class="resoconto_tavolo resoconto_tavolo1 ">
                        <span class="numero_tavolo">Tavolo 1</span>
                        <div class="ordine">
                            <span class="nome_piatto">Pasta con cozze</span>
                            <span class="prezzo_piatto">90</span>
                        </div>
                        <!--  -->
                        <div class="ordine">
                            <span class="nome_piatto">Pasta</span>
                            <span class="prezzo_piatto">90</span>
                        </div>
                        
                        <div class="ordine">
                            <span class="nome_piatto"><?php test(); ?></span>
                            <span class="prezzo_piatto">90</span>
                        </div>
                    </div>

                    <div class="resoconto_tavolo resoconto_tavolo2 hide">--- TAVOLO 2 ---</div>
                    <div class="resoconto_tavolo resoconto_tavolo3 hide">--- TAVOLO 3 ---</div>
                    <div class="resoconto_tavolo resoconto_tavolo4 hide">--- TAVOLO 4 ---</div>
                    <div class="resoconto_tavolo resoconto_tavolo5 hide">--- TAVOLO 5 ---</div>
                    <div class="resoconto">
                        <div class="totale_tavolo">0 €</div>
                        <div class="chiudiPaga_btn">Chiudi il conto e paga</div>
                        <div class="Azzera">Azzera ordini</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>