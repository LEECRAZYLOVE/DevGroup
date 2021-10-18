<?php
$db = new PDO('mysql:host=1192.168.0.111;dbname=tcgstore;charset=utf8mb4', 'Guest', '@DevGroup3');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['term'])) {
    $search_for = $_GET['term'];

    $select = $db->prepare("SELECT `item` FROM `tcg` WHERE `item` LIKE ? LIMIT 50;");
    $select->execute(array("%$search_for%"));
    $data = $select->fetchAll();

    $items = array();
    foreach ($data as $an_item) {
        $items[] = $an_item['item'];
    }
    echo json_encode($items);
}