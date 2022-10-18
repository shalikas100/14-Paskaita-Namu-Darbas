<?php 

trait Filter {
    public function filter($data, $filter ) {

        //stulpelio pavadinimas pagal kuri filtruojam

        $filterCollumn = "visi";
    
        if(isset($_GET["filterCollumn"])) {
            $filterCollumn = $_GET["filterCollumn"];
        }
    
        $data=array_filter($data,function($oneData) use($filterCollumn, $filter) {
            if($filterCollumn == "visi") {
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