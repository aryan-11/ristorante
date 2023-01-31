<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data</title>
    <link rel="stylesheet" href="../../../frontend/data.css">
    <link rel="stylesheet" href="../../../frontend/style.css">
    <?php 
          include "index.php";
          $pietanze_csv = getfood();
          $totalTable = 0;
          $tav = $_GET['tav'];
          $nome = $_GET['nome'];
          $prezzo = $_GET['prezzo'];
          $flag = $_GET['flag'];
          $azzera = $_GET['azzera'];
    ?>
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



            <?php foreach ($pietanze_csv as $index => $pietanza) { ?>
                <a href="data.php?tav=<?= $tav; ?>&nome=<?= $pietanza[0]; ?>&prezzo=<?= $pietanza[1]; ?>&flag=1">
                    <div class="box_piatto">
                    <div class="img_mask">
                        <img id="piatto<?= $index + 1; ?>" src="../../../../assets/piatti/<?= $pietanza[2]; ?>" alt="pasta cozze">
                    </div>
                    <div class="infoPrezzi">
                        <input type="hidden" value="<?= $index + 1; ?>">
                        <span class="nome"><?= $pietanza[0]; ?> ~ </span>
                        <span class="prezzo"><?= $pietanza[1]; ?> €</span>
                    </div>
                    </div>
                </a>
            <?php } ?>


            </div>
            <div class="container_left">
                <div class="container_tavoli">
                    <p>Tavoli:</p>
                    <a href="data.php?tav=1&flag=0"><div class="nTavolo tavolo1">1</div></a>
                    <a href="data.php?tav=2&flag=0"><div class="nTavolo tavolo2">2</div></a>
                    <a href="data.php?tav=3&flag=0"><div class="nTavolo tavolo3">3</div></a>
                    <a href="data.php?tav=4&flag=0"><div class="nTavolo tavolo4">4</div></a>
                    <a href="data.php?tav=5&flag=0"><div class="nTavolo tavolo5">5</div></a>
                </div>
                <div class="container_resoconto">
                    <div class="resoconto_tavolo resoconto_tavolo1 ">
                        
                        <?php
                              writeOrder($tav, $nome, $prezzo, $flag);
                              $ordini = readOrder($tav);
                        ?>
                        <span class="numero_tavolo">Tavolo <?php echo $tav; ?></span>
                        <div class="ordini">
                            <?php
                            foreach ($ordini as $ordine) {
                                echo '<div class="ordine">';
                                echo '<span class="nome_piatto">'.$ordine[0].'</span>';
                                echo '<span class="prezzo_piatto">'.$ordine[1].'</span>';
                                echo '</div>';
                                $totalTable += $ordine[1];
                            }
                            ?>
                        </div>
                        <!--  -->
                        
                    </div>


                    <div class="resoconto">
                        <div class="totale_tavolo"><?php echo $totalTable ?> €</div>
                        <div class="chiudiPaga_btn">Chiudi il conto e paga</div>
                        <a class="azzera" href="data.php?azzera=1"><div>Azzera tutti gli ordini</div>
                        <?php 
                            if($azzera == 1) {
                                clearTableOrders();
                                $azzera = 0;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>