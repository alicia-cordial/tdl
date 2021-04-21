
<?php
if(!isset($_SESSION)){
    session_start();
}

include '../includes/database.php';
$user = $_SESSION['user'];


$q = $db->prepare('SELECT * FROM tasks  WHERE id_user = ? ORDER BY id DESC');
$q->execute(array($user));
$count = $q->rowCount();


if ($count > 0) {
    while ($row = $q->fetch()) {

        ?>

        <ul class="collection with-header">
            <li class="collection-item"><div>
                    <span class="text_date"><?php echo $row['date']; ?></span><br>
                    <span class="text_title"><?php echo $row['title']; ?></span>
                    <button class="secondary-content"><i id="removeBtnDone" class="material-icons" data-id="<?php echo $row['id']; ?>">clear</i></button>
                </div></li></ul>


        <?php
    }
} else {
    echo "<li><span class='text'>Aucune tâche accompli pour le moment ! </span></li>";
}

?>