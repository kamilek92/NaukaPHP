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




if(!isset($_GET["page"])){
    header("Location: ".SERVER_ADDRESS."start");
}
$mp = new MainPages($_GET["page"]);














// TRANSAKCJE BAZODANOWE - opis:

// BEGIN        - Rozpocznij (transakcję)
// COMMIT       - Zatwierdź (wprowadzone zmiany)
// ROLLBACK     - Wycofaj (zmiany)


//$baza = DatabaseManager::getConnection();
//$baza->query("BEGIN");
//
//$res = $baza->query("SELECT username From users WHERE username = 'Zenek' FOR UPDATE");
//$res = $baza->query("UPDATE users SET password = '". md5("zenek2011")."' WHERE username = 'Zenek' "); // COMMIT NIC NIE WPROWADZI
//
//
//
//
//print_r("<br/> Conn 1 przed: ".$baza->affected_rows."<br/>");
////$baza->query("COMMIT");
////$baza->query("ROLLBACK");
//print_r("<br/> Conn 1 przed: ".$baza->affected_rows."<br/>");
//






echo 'Strona główna';











//foreach($users as $user) {
//    echo "User: {$user['username']} <br />
//         Password: {$user['password]} <br />
//         email: {$user['email']} <br />
//         DOB: {$user['dob']} <br /><br />";
//}


//echo "<pre>";
//
//print_r(DatabaseManager::selectData("users", Array("username", "id"), Array("id" => '2'), ">", "OR"));
//
//echo "</pre>";
//
//
//
//
//echo "<pre>";
//
//print_r(DatabaseManager::updateTable("users", Array("username", "Zenek"), Array("username" => 'zenek3')));
//
//echo "</pre>";



//echo "<pre>";
//
//print_r(DatabaseManager::deleteFrom("users", Array("username", Array("id" => "5")));
//
//echo "</pre>";


//echo "<pre>";
//
//print_r(DatabaseManager::insertIntu("users", Array("username", Array("id" => "5", "password" => "zenek", "mail" => "zenek")));
//
//echo "</pre>";

//
//$SQL = "Select * from user where id = 1  ";
//echo $SQL."<br/>";
//$SQL = substr($SQL, 0, strlen($SQL) - (strlen($OPER)+2));
//echo $SQL ;
//
//
//
//echo "<pre>";
//print_r(DatabaseSQL::SelectUsers("3"));
//echo "</pre>";


/**
 *
 * SQL LIKE '% ..... %'  - taki dowolny aby był string ale pośród wszystkich
 * SELECy ... WHWRE In (1, 2, 5);
 *
 *
 *BIRTHER  SUM (id) BETWEN '....' AND '''....'''
 *
 *
 *
 *
 *
 *SUMSTRING (  ,OD KTÓREGO, ILE ZNAKÓW  )obcina
 *
 *
 *
 *
 *
 *DUŻE  LOWER ( ) - małe litery   UPPER () - duże litery
 *
 *
 *
 *
 * SUBSTROMG(mail, 1, INSTR (mail, @)) wyświetla rzed Małą
 *
 *
 * TRIM (skrajne spacje)
 *
 *
 *
 * TRIM(SUBSTRING(full name, 1, INSERTY(fullname, ""))) - TYLKO ABY ZOSTAŁO IMIE SAME BEZ SPACJI
 *
 *
 *
 *
 * Group By .... HAVING (
 */

//$conn = DatabaseManager::getConnection();
//$conn->query("BEGIN");
//$res = $conn->query("SELECT username FROM users WHERE username = 'Zenek' FOR UPDATE");
//$res = $conn->query("UPDATE users SET password = '".md5("zenek2011")."' WHERE username = 'Zenek'");
//$res = $conn->query("UPDATE users SET password = '".md5("zenek2011")."' WHERE username = 'Ania'");
//$res = $conn->query("UPDATE users SET password = '".md5("zenek2011")."' WHERE username = 'Michał'");
//print_r("<br />CONN 1 - Przed wywołaniem COMMIT: ".$conn->affected_rows."<br />");
////$conn->query("COMMIT");
//$conn->query("ROLLBACK");
//print_r("CONN 1 - Po wywołaniu COMMIT: ".$conn->affected_rows);
//
//
//$conn2 = DatabaseManager::getConnection();
//$conn2->query("BEGIN");
//$res2 = $conn2->query("SELECT username FROM users WHERE username = 'Zenek' FOR UPDATE");
//$res2 = $conn2->query("UPDATE users SET password = '".sha1("zenek20112")."' WHERE username = 'Zenek'");
//print_r("<br />CONN 2 - Przed wywołaniem COMMIT: ".$conn2->affected_rows."<br />");
////$conn2->query("COMMIT");
//$conn->query("ROLLBACK");
//print_r("CONN 2 - Po wywołaniu COMMIT: ".$conn2->affected_rows);

?>