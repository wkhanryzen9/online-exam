<?php

session_start();
if($_SESSION==null){
    echo "<script>
    alert('First Login to the page!')
    window.location.href='index.php'
    </script>";
}
$stu = $_SESSION['student'];

?>

<?php include 'Components/head.php'; ?>
<?php include 'Components/stu_header.php'; ?>
    
    <div style="border:2px solid white;background-color:#1e272e;color:white;margin:20px 200px;text-align:left;border-radius:40px;padding:2px 20px;" behavior="alternate" scrollamount="10">
        <h1 style="text-align:center">Give Your Feedback</h1>

        <form method="post">
            <table width="60%" cellpadding="5" cellspacing="0">
                <tr>
                    <th>Enter Your Subject</th>
                    <th><input type="text" name="subject" class="maininput"></th>
                </tr>
                <tr>
                    <th>Enter Your Message</th>
                    <th><input type="text" name="message" class="maininput"></th>
                </tr>

                <tr>
                    <th colspan="2">
                        <input type="submit" name="submit" class="btnclass">
                        <input type="reset" class="btnclass">
                    </th>
                    
                </tr>

                

            </table>
        </form>
        <br><br>
    </div>
    <?php include 'Components/footer.php'; ?>
</body>
</html>


<?php

if(isset($_POST['submit'])){
    $s = $_POST['subject'];
    $m = $_POST['message'];

    $d = date('d-m-y');
    $sql = "insert into stu_feedback values('$stu', '$s', '$m', '$d')";
    require 'conn.php';
    mysqli_query($conn, $sql);
    header('location: Student.php');
}

?>