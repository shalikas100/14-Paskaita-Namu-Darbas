<?php $collumns = $klientai->getCollumns(); ?>
<form method="get" action="index.php">
            <input type="hidden" name="filterCollumn" value="<?php echo (isset($_GET["filterCollumn"]) ? $_GET["filterCollumn"]: "visi"); ?>">    
                    <div class="form-group">
                        <label for="vardas">Rikiavimo stulpelis</label>
                        <select class="form-select" name="sortCollumn">
                            <option value="id">ID</option>
                            <?php foreach($collumns as $key=>$collumn) { ?>
                                <?php if(isset($_GET["sortCollumn"]) && $_GET["sortCollumn"] == $key) { ?>
                                    <option value="<?php echo $key; ?>" selected><?php echo $collumn; ?></option>
                                <?php } else {?>    
                                    <option value="<?php echo $key; ?>"> <?php echo $collumn; ?> </option>
                                <?php } ?>
                            <?php } ?>
                        </select>    
                    </div>
                    <div class="form-group">
                        <label for="pavarde">Rikiavimo tvarka</label>
                        <select class="form-select" name="sortOrder">
                            <option value="ASC" <?php echo (isset($_GET["sortOrder"]) && $_GET["sortOrder"]=="ASC"? "selected": ""); ?>>ASC</option>
                            <option value="DESC" <?php echo (isset($_GET["sortOrder"]) && $_GET["sortOrder"]=="DESC"? "selected": ""); ?>>DESC</option>
                            <option value="RAND" <?php echo (isset($_GET["sortOrder"]) && $_GET["sortOrder"]=="RAND"? "selected": ""); ?>>RAND</option>
                        </select>   
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="sort">Rikiuoti</button>
</form>