<?php
//
//echo '<base href="http://eduweb-sources/rozdzial6/">';

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

// Odczytanie wartości z superglobalnej tablicy $_GET[] i wyświetlenie odpowiedniej podstrony
// Ustalamy pewną kolejność:
// * Element "page" oznacza nazwę podstrony do wczytania 
// * Element "app" oznacza nazwę aplikacji (modułu) do odtworzenia do podanej pod/stronie
// * Element "id" oznacza identyfikator dla aplikacji "app" wyświetlanej na pod/stronie "page"




if(isset($_GET["page"])){
    $app = (isset($_GET["app"])) ? $_GET["app"] : null;

    $id = (isset($_GET["id"])) ? $_GET["id"] : null;


    switch ($_GET["page"]){
        case "main":
            echo "<h1>Main</h1>";
            echo "<a href=\"?page=main&app=nazwa_głównej_aplikacji&id=123456\">Przejdź na stronę główną...</a><br />";
            break;
        case "subpage":
            echo "<h2>To jest podstrona strony głównej</h2>";
            echo "<a href=\"?page=main&app=nazwa_głównej_aplikacji&id=123456\">Przejdź na stronę główną...</a><br />";
            break;
        default:
            echo $_GET["page"];
            break;

    }

}


if(isset($app) && $app != null) echo "A to wczytana aplikacja (moduł): ".$app."<br />";
if(isset($id) && $id != null) echo "Tutaj mamy identyfikator aplikacji: ".$id;


//if(isset($_GET['page'])) {
//
//    $app = (isset($_GET['app'])) ? $_GET['app'] : null;
//    $id = (isset($_GET['id'])) ? $_GET['id'] : null;
//
//    switch($_GET['page']) {
//
//        case "main":
//        echo "<h1>To jest strona główna</h1>";
//        echo "<a href=\"subpage/nazwa-aplikacji-postrony,987654/\">Przejdź na podstronę...</a><br />";
//        break;
//
//        case "subpage":
//        echo "<h2>To jest podstrona strony głównej</h2>";
//        echo "<a href=\"?page=main&app=nazwa_głównej_aplikacji&id=123456\">Przejdź na stronę główną...</a><br />";
//        break;
//
//        default;
//        echo $_GET['page']."<br />";
//        break;
//
//    }
//
//} else {
//
//    echo "<h1>To jest strona główna</h1>";
//
//}
//
//if(isset($app) && $app != null) echo "A to wczytana aplikacja (moduł): ".$app."<br />";
//if(isset($id) && $id != null) echo "Tutaj mamy identyfikator aplikacji: ".$id;

?>