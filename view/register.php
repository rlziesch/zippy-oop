<?php include('header.php') ?>



<?php
    if ($firstname) { ?>
    <Br>
        <h2>Thank you for registering, <?php echo $userid ?>!</h2>
        
        <p>Return to vehicle list <a href=".">here</a>.</p>
        <br>


   <?php } else {  ?>
    <section>
    <div style="max-width:50%;">
        <h2> Register </h2>
        <form action="." method="get">
            <input type="hidden" name="action" value="register">

            <label>Submit your first name.</label>
            <input type="text" name="firstname" id="firstname" > <br>

            <button type="submit" value="add_name" class="button blue button-slim" style="max-width:50%;">Click Here</button>
            <br><br>
        </form>
    </div>
    </section>

    <?php } ?>    




<?php include('footer.php') ?>