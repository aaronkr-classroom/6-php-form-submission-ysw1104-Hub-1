<?php include 'includes/header.php'; ?>

<?php
$submitted = $_GET['sent'] ?? '';

if ($submitted == 'search') {
    $term = $_GET['term'] ?? '';
    echo 'you search for ' .htmlspecialchars($trem);
} else {
?>
<form action="check-for-http-get.php" method="get">
    search for : <input type="search" name="term" />
    <input type="submit" name="sent" value="search" />
</form>
<?php
}
?>

<?php include 'includes/footer.php'; ?>