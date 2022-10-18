<?php $cities = $klientai->getCities(); ?>
<form method="get" action="index.php">
            <input type="hidden" name="sortOrder" value="<?php echo (isset($_GET["sortOrder"]) ? $_GET["sortOrder"]: "DESC"); ?>">
            <input type="hidden" name="sortCollumn" value="<?php echo (isset($_GET["sortCollumn"]) ? $_GET["sortCollumn"]: "id"); ?>">                  
                    <div class="form-group">
                        <label for="pavarde">Filtras</label>
                        <select class="form-select" name="filterCollumn">
                            <option value="visi">Visi</option>
                            <?php 
                                foreach($cities as $key=>$city) {
                                    if(isset($_GET["filterCollumn"]) && $city == $_GET["filterCollumn"]) {
                                        echo "<option value='$city' selected>$city</option>";
                                    } else {
                                        echo "<option value='$city'>$city</option>";
                                    }
                                }
                            ?>
                        </select>   
                    </div>
                   
                    <button type="submit" class="btn btn-primary" name="filter">Filtruoti</button>
</form>