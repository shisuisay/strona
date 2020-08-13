<?php 
$emailContent = 'Wiadomosć od ' . $_POST['name'] . ': ' . $_POST['message'];
mail('makuchdawid93@gmail.com', 'Zgłoszenie o wizyte', $emailContent);
header("Location: index.php?mail=true");
exit;
?>