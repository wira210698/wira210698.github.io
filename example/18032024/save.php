<?php
include 'db.php';

if (isset($_POST['nama']) && isset($_POST['ucapan']) && isset($_POST['hadir'])){
    
    $nama = $_POST['nama'];
    $ucapan = $_POST['ucapan'];
    $hadir = $_POST['hadir'];
   
    
    $sql = "INSERT INTO tb_comments (nama, ucapan, kehadiran) VALUES ('$nama', '$ucapan', '$hadir')";
   
    if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
        // var_dump('true',$nama,$ucapan);
        // return true;
    } 
    else {
        // var_dump('true',$nama,$ucapan);
        // return true;
        echo json_encode(array("statusCode"=>201));
    }
    mysqli_close($conn);
?>

<?php
    
    $sql = "SELECT * FROM tb_comments WHERE id = $comment_id";
    
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) // using prepared staement
    {
        ?>

    <div id="comment-<?php echo $row["id"];?>" class="comment-row">
	<div class="nama"><?php echo $row["nama"];?></div>
	<div class="ucapan" id="msgdiv"><?php echo $row["ucapan"];?></div>
    <div class="hadir"><?php echo $row["kehadiran"];?></div>

</div>

<?php
    }
}
?>