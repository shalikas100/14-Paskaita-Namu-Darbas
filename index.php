<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pradininis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php 
            //priklausomai nuo GET kintamojo atvaizduojame skirtingus puslapius

            //$_GET["page"]

            if(isset($_GET["page"])) {
                $page = $_GET["page"];

                if($page == "klientai") {
                    include "pages/klientai.php";
                } else if($page == "kompanijos") {
                    include "pages/kompanijos.php";
                }
            } else {
                include "pages/klientai.php";
            } 
        
        ?>
    </div>
    
</body>
</html>