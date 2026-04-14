<?php include 'includes/header.php'; ?>

<?php
$submitted = $_POST['sent'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $term = $_POST['term'] ?? '';
    echo 'you search for ' . htmlspecialchars($term);
} else {
?>
<form action="check-for-http-post.php" method="post">
    search for : <input type="search" name="term" placeholder="검색..." />
    <input type="submit" name="sent" value="search" />
</form>
<?php
}
?>

<?php include 'includes/footer.php'; ?>