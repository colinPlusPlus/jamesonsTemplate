<?php
/**
 * Created by PhpStorm.
 * User: colinwilliams
 * Date: 14-03-09
 * Time: 12:41 PM
 */
?>
<div class="section-header visible-md visible-lg"> <!-- section header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Remove the .animated class if you don't want things to move -->
                <h1 class="animated slideInLeft">
                    <span>
                        <?php if($this_page=="About"){
                                echo("About Us </span></h1>");
                              }
                              elseif($this_page == "Services"){
                                echo("Our Work </span></h1>");
                              }
                              elseif($this_page == "Contact"){
                                echo("Contact Us </span></h1>");
                              }
                        ?>
            </div>
        </div>
    </div>
</div>