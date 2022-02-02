<?php
include_once __DIR__ . '/db.php';

if (isset($_GET['album']) !== false) {
    $album = $_GET['album'];
    if ($album === 'all') {
        header('Content-Type: application/json');
        echo json_encode($cards);
    }
}
