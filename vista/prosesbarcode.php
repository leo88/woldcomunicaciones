 <?php
 include('bar128.php');
 echo '<div style="border:3px double #ababab; padding:20px;margin:5px auto;width:100px;">';
 echo bar128(stripslashes($_POST['bar']));
 echo '</div>';
 echo '<button style="texk-align: center" onclick="goBack()">atras</button>';
 ?>


<script>
function goBack() {
    window.history.back();
}
</script>