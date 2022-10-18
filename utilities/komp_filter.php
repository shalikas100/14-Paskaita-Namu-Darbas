<?php 

trait Filter {
    public function filter($data, $filter ) {

        //stulpelio pavadinimas pagal kuri filtruojam

        $filterCollumn = "tipas";
    
        if(isset($_GET["kompanijosTipas"])) {
            $filterCollumn = $_GET["kompanijosTipas"];
        }
    
        $data=array_filter($data,function($oneData) use($filterCollumn, $filter) {
            if($filterCollumn == "tipas") {
                return true;
            } else if ($oneData[$filter] == $filterCollumn) {
                return true;
            } else {
                return false;
            }
        });
        //filtruojame duomenis pagal miesta
        return $data;
    }
}