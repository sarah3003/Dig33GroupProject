<?php
// Display Header
function echo_header(){
    
    
    
}    
    
    
// Display Footer
function echo_footer(){
    // This function displays the footer section where ever it is called, eliminating the need to manually update the footer on every page.
    // Indented for readability
    echo "<footer>";
        echo "<div class=\"footer\">";
            echo "<div class=\"socialButtons\">";
                echo "<!-- Add font awesome icons -->";
                echo "<a href=\"#\" class=\"fa fa-facebook\"></a>";
                echo "<a href=\"#\" class=\"fa fa-twitter\"></a>";
                echo "<a href=\"#\" class=\"fa fa-instagram\"></a>";
                echo "<a href=\"#\" class=\"fa fa-pinterest\"></a>";
                echo "<a href=\"#\" class=\"fa fa-snapchat-ghost\"></a>";
                echo "<a href=\"#\" class=\"fa fa-linkedin\"></a>";
                echo "<a href=\"#\" class=\"fa fa-youtube\"></a>";
            echo "</div>"; 
            echo "<div class=\"copyright\">";
                echo "<p>&copy; This website has been created as part of an assignment in an approved course of study for Curtin University and contains 
                      copyright material not created by the author. All copyright material used remains copyright of the respective owners and has been 
                      used here pursuant to Section 40 of the Copyright Act 1968 (Commonwealth of Australia). No part of this work may be reproduced 
                      without consent of the original copyright owners. See code comments for references.</p>";   
            echo "</div>";              
        echo "</div> <!-- Copyright included for external resources -->";
    echo "</footer>";
}


?>
