<?php
/**
 * Created by PhpStorm.
 * User: colinwilliams
 * Date: 14-03-09
 * Time: 10:37 AM
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
            <a class="navbar-brand logo-nav" href="index.php" style="padding-top: 10px;">
                <img src="img/LOGO.png" style="height: 70px;" >
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($this_page=="Home")
                    echo " class=\"active\""; ?>>
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                </li>
                <li <?php if ($this_page=="About")
                    echo " class=\"active\""; ?>>
                    <a href="about.php"><i class="fa fa-cog"></i> About</a>
                </li>
                <li <?php if ($this_page=="Services")
                    echo " class=\"active\""; ?>>
                    <a href="services.php"><i class="fa fa-briefcase"></i> Services</a>
                </li>
                <li <?php if ($this_page=="Contact")
                    echo " class=\"active\""; ?>>
                    <a href="contact.php"><i class="fa fa-user"></i> Contact</a>
                </li>
            </ul>
        </div>

        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>