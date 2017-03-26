<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="localDashboard by sirmarbug">
    <meta name="author" content="Mariusz Bugajski">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="assets/img/l.ico" type="image/x-icon" />
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center header">Dashboard</h1>
        </div>
        <div class="row">
            <div class="projekty text-center">
                Projekty
            </div>
            
            <div class="space">
            
            <div class="col-lg-2 col-md-2 col-sm-12 text-center">
                <div class="file">
                    <a href="./phpmyadmin" class="text-center">
                        <img src="assets/img/baza.png" alt="folder" class="img-responsive animacja"/>
                        PhpMyAdmin
                    </a>
                </div>
            </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12 text-center">
                <div class="file">
                    <a href="./Mariusz/" class="text-center">
                        <img src="assets/img/katalogi.png" alt="folder" class="img-responsive animacja"/>
                        Mariusz
                    </a>
                </div>
            </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12 text-center">
                <div class="file">
                    <a href="./Student/" class="text-center">
                        <img src="assets/img/katalogi.png" alt="folder" class="img-responsive animacja"/>
                        Student
                    </a>
                </div>
            </div>
        <?
        $dir = "./";
        $ilosc = 3;
        if (is_dir($dir)){
            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){
                    if(is_dir($dir.$file)){
                        if($file == "." || $file == "assets" || $file == ".." || $file == "Zlecenia" || $file == "Playground" || $file == "Mariusz" || $file == "Student"){
                        }else{
                            if($ilosc == 6){
                                echo'<div class="row">';
                                $ilosc = 0;
                            }
                            if($ilosc == 0){
                                echo'<div class="space">';
                            }
                            echo'<div class="col-lg-2 col-md-2 col-sm-12 text-center">
                            <div class="file">
                                <a href="'.$dir . $file .'" class="text-center">
                                <img src="assets/img/katalogi.png" alt="folder" class="img-responsive animacja">'.$file.'
                                </a>
                            </div>
                            </div>';
                            $ilosc++;
                            if($ilosc == 6){
                                echo '</div></div>';
                            }
                        }
                    }
                }
                closedir($dh);
                if($ilosc != 6){
                    echo '</div></div>';
                }
            }
        }
    ?>  
            <div class="row">
            <div class="naglowek text-center">
                Zlecenia
            </div>
        <?
        $dir = "./Zlecenia/";
        $ilosc = 0;
        if (is_dir($dir)){
            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){
                    if(is_dir($dir.$file)){
                        if($file == "." || $file == "assets" || $file == ".."){
                        }else{
                            if($ilosc == 6){
                                echo'<div class="row">';
                                $ilosc = 0;
                            }
                            if($ilosc == 0){
                                echo'<div class="space">';
                            }
                            echo'<div class="col-lg-2 col-md-2 col-sm-12 text-center">
                            <div class="file">
                                <a href="'.$dir . $file .'" class="text-center">
                                <img src="assets/img/katalogi.png" alt="folder" class="img-responsive animacja">'.$file.'
                                </a>
                            </div>
                            </div>';
                            $ilosc++;
                            if($ilosc == 6){
                                echo '</div></div>';
                            }
                        }
                    }
                }
                closedir($dh);
                if($ilosc != 6){
                    echo '</div></div>';
                }
            }
        }
    ?> 
                
                        <div class="row">
            <div class="naglowek text-center">
                Playground
            </div>
        <?
        $dir = "./Playground/";
        $ilosc = 0;
        if (is_dir($dir)){
            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){
                    if(is_dir($dir.$file)){
                        if($file == "." || $file == "assets" || $file == ".."){
                        }else{
                            if($ilosc == 6){
                                echo'<div class="row">';
                                $ilosc = 0;
                            }
                            if($ilosc == 0){
                                echo'<div class="space">';
                            }
                            echo'<div class="col-lg-2 col-md-2 col-sm-12 text-center">
                            <div class="file">
                                <a href="'.$dir . $file .'" class="text-center">
                                <img src="assets/img/katalogi.png" alt="folder" class="img-responsive animacja">'.$file.'
                                </a>
                            </div>
                            </div>';
                            $ilosc++;
                            if($ilosc == 6){
                                echo '</div></div>';
                            }
                        }
                    }
                }
                closedir($dh);
                if($ilosc != 6){
                    echo '</div></div>';
                }
            }
        }
    ?>          
    </div>
    
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/jquery.js"></script>
</body>
</html>