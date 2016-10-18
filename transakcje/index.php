<?php

/*
*
*   TEN PLIK KORZYSTA ZE STATYCZNEJ METODY KLASY DatabaseManager.class.php
*
*/

require_once("config.php");

/**
 * @author Mateusz Manaj
 * @company Eduweb.pl™ 2011 ©
 * @email mateusz@eduweb.pl
 * --------------------------------------------------
 * All rights reserved! | Wszystkie Prawa Zastrzeżone!
 *
 */

// TRANSAKCJE BAZODANOWE - opis:

// BEGIN        - Rozpocznij (transakcję)
// COMMIT       - Zatwierdź (wprowadzone zmiany)
// ROLLBACK     - Wycofaj (zmiany)



$conn = DatabaseManager::getConnection();
$conn->query("BEGIN");
$res = $conn->query("SELECT username FROM users WHERE username = 'Zenek' FOR UPDATE");
$res = $conn->query("UPDATE users SET password = '".md5("zenek2011")."' WHERE username = 'Zenek'");
print_r("<br />CONN 1 - Przed wywołaniem COMMIT: ".$conn->affected_rows."<br />");
//$conn->query("COMMIT");
$conn->query("ROLLBACK");
print_r("CONN 1 - Po wywołaniu COMMIT: ".$conn->affected_rows);


$conn2 = DatabaseManager::getConnection();
$conn2->query("BEGIN");
$res2 = $conn2->query("SELECT username FROM users WHERE username = 'Zenek' FOR UPDATE");
$res2 = $conn2->query("UPDATE users SET password = '".sha1("zenek2011")."' WHERE username = 'Zenek'");
print_r("<br />CONN 2 - Przed wywołaniem COMMIT: ".$conn2->affected_rows."<br />");
$conn2->query("COMMIT");
//$conn->query("ROLLBACK");
print_r("CONN 2 - Po wywołaniu COMMIT: ".$conn2->affected_rows);

?>