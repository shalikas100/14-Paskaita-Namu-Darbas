<?php include "../classes/Kompanijos-class.php";?>
<?php $kompanijos = new Kompanijos(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompanijos</title>
</head>
<body>
    <?php $tipai = $kompanijos->gautiTipa(); ?>
    

        <form method="get" action="kompanijos.php" >
            <label for="kompanijoTipas">Kompanijos tipas</label>
            <select name="kompanijosTipas" id="tipas">
                <option value="tipas">Tipas</option>
            <?php 
                foreach($tipai as $key=>$tipas) {
                if(isset($_GET["kompanijosTipas"]) && $tipas == $_GET["kompanijosTipas"]) {
                        echo "<option value='$tipas' selected>$tipas</option>";
                    } else {
                    echo "<option value='$tipas'>$tipas</option>";
                     }
                }
                            ?>
            </select>

            <button type="submit" name="filter">Filtruoti</button>
        </form>


 
    <h1>Klientai</h1>
    <div class = "container table">
            <table>
                <tr>
                     <th>ID</th>
                     <th>Pavadinimas</th>
                     <th>Tipas</th>
                     <th>Aprasymas</th>
                     <th>Miestas</th>
                </tr>
                <?php foreach($kompanijos->GautiKlientus() as $key => $kompanija) { ?>
                <tr>
                    <td> <?php echo $key; ?></td>
                    <td> <?php echo $kompanija["pavadinimas"]; ?></td>
                    <td> <?php echo $kompanija["tipas"]; ?></td>
                    <td> <?php echo $kompanija["aprasymas"]; ?></td>
                    <td> <?php echo $kompanija["miestas"]; ?></td>

                 </tr>
                
                <?php }; ?>

            </table>

    </div>
    
</body>
</html>