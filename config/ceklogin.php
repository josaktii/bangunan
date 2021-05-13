<?php
if ($_POST['pass']=='admin') {
    header('Location: ../admin');
}elseif ($_POST['pass']=='owner') {
    header('Location: ../pemilik');
}else {
    header('Location: ../kasir');
}
?>