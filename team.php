<?php 
    define("TITLE", "team | pooja's fine dining");

    include('includes/header.php');
    
?>


    <div id="team-members" class="cf">
        <h1>Our Team at pooja's</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid voluptate veniam vel reprehenderit.
        <br>Tempore fugit nemo vel alias ea, recusandae voluptatem qui expedita facere labore quo quam doloribus eos inventore!</p>
        <hr>

        <?php 
           foreach($teamMembers as $member) {
        ?>
            <div class="member">
                <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
                <h2><?php echo $member["name"]; ?></h2>
                <p><?php echo $member["bio"]; ?></p>
           </div>


        <?php 
           }
        ?>
    </div>
    <hr>


<?php include('includes/footer.php'); ?>