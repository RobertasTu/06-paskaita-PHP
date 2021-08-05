<?php 


// header("Location: index.php");


//ar egzistuoja du cookie prisijungti ir teises
//jeigu susikursime forma, kurioje yra tik mygtukas
//paspaudus mygtuka istrinami cookies(prisijungti ir teises)
//nukreipimas i pradini langa
if(isset($_COOKIE['prisijungti']) && isset($_COOKIE['teises']))
{
    //$_COOKIE['teises']) == 3
    echo "Sveikas atvykes ".($_COOKIE['prisijungti']); 
    //cia ideti forma
    echo "<form action='manopaskyra.php' method='get'>

    <button type='submit' name='atsijungti'>Atsijungti</button>
    </form>";

    if(isset($_GET['atsijungti'])) {
        echo 'Paspaustas atsijungimo mygtukas';
        //funkcija kuri istrina sausainiuka - jos tiesiog nera
        //cookie mes turime nustatyti jo galiojimo laika i praeiti

        setcookie("prisijungti",  '', time() - 3600, "/");
        setcookie("teises",  '', time() - 3600, "/");
        header('Location: index.php');


    }


} else {
    header('Location: index.php');
}

?>

