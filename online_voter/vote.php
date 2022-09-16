<?php include("./includes/header.php") ?>
<?php
ini_set('display_errors', 1);
include 'configd.php';
database_conection();
session_start();

if ($_SESSION['user_login']===1) 
{?>
<form action="vote_rec.php" method="POST">
    <div class="vote_home">
        <div class="vote_menu">
            <div class="vote_headline">
                <h1>Who will be the Leader</h1>
            </div>
            <div class="candidates_phase">
                <div class="candidate">
                    <div class="candidate_img">
                        <img class="can_img" src="./img/modi.jpeg">
                    </div>
                    <div class="can_name">
                        <h1>Narendra Modi</h1>
                    </div>
                    <div class="can_vote_btn">
                        <button class="vote_btn" name="candi" value="vote1">vote</button>
                    </div>
                </div>
                <div class="candidate">
                    <div class="candidate_img">
                        <img class="can_img" src="./img/rahull.jpg">
                    </div>
                    <div class="can_name">
                        <h1>Rahul Gandhi</h1>
                    </div>
                    <div class="can_vote_btn">
                        <button class="vote_btn" name="candi" value="vote2">vote</button>
                    </div>
                </div>
                <div class="candidate">
                    <div class="candidate_img">
                        <img class="can_img" src="./img/Raj.jpg">
                    </div>
                    <div class="can_name">
                        <h1>Raj Thakare</h1>
                    </div>
                    <div class="can_vote_btn">
                        <button class="vote_btn" name="candi" value="vote3">vote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include("./includes/footer.php") ?>
<?php
} 
else
{
    echo '<script type="text/javascript">
       alert("need to login again");
       window.location= "Index.php"; 
        </script>';
}
?>
