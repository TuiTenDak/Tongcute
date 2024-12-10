<?php 
include 'model/service.php';

if (isset($_GET["a"])) {
    $a = $_GET["a"];

    switch ($a) {
        case 'detail':
            include 'modules/service/detail.php';
            break;
        case 'edit':
            include 'modules/service/edit.php';
            break;
        case 'delete':
            include 'modules/service/delete.php';
            break;
        case 'booking-service':
            include 'modules/service/process_booking.php';
            break;
        default:
            include 'modules/service/list.php';
    }
} else {
    include 'modules/service/list.php';
}
?>