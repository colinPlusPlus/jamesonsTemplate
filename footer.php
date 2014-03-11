<?php
/**
 * Created by PhpStorm.
 * User: colinwilliams
 * Date: 14-03-09
 * Time: 11:13 AM
 */
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>Contact Us</h3>
                <hr>
                <p>Jameson Pro Builder Inc</p>
                <ul class="list-inline">
                    <li>
                        <span>Pickering, Ontario Canada</span>
                    </li>
                    </li>
                        <span class="pull-right">P:  (905)999-5457</span>
                    </li>
                </ul>
                <ul class="list-inline">
                    <li>
                        <span>Barrie, Ontario Canada</span>
                    </li>
                    </li>
                        <span class="pull-right">P:  (705)790-9033</span>
                    </li>
                </ul>

            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Go Social</h3>
                <hr>
                <p>Stay in touch with us:</p>
                <ul class="list-inline">
                    <li><a href="https://www.facebook.com/JamesonProBuildersInc"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                    <li><a href="http://ca.linkedin.com/pub/james-ward/58/83a/a3a/"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                    <li><a href=" http://www.pinterest.com/jamesonpro/"><i class="fa fa-pinterest-square fa-3x"></i></a></li>
                </ul>                </div>
            <div class="col-md-4 col-sm-4">
                <h3>We Now Accept</h3>
                <hr>
                <p></p>
                <ul class="list-inline pull-right" >
                    <li><img src="img/interac.png" style="height: 50px; width: 50px;" ></li>
                    <li><img src="img/visa.png" style="height: 40px; width: 60px; background-color: #ffffff"></li>
                    <li><img src="img/mastercard.png" style="height: 40px; width: 60px;"></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div style = "background-color:#23232a; color: white; height: 50px; padding-top: 10px;">
    <div class="container">
        <ul class="list-inline">
            <li><small>Copyright &copy; Jameson Pro Builders Inc. 2014</small></li>
            <li class="pull-right"><small>Site Designed By: Main Street Creative Co.</small></li>
        </ul>
    </div>
</div>
<?php
    if ($this_page == "Home"){
        echo('<script src="js/jquery-1.10.2.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/parallax/js/jquery.stellar.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function() {

                $("#myCarousel").carousel({
                interval: 4000
            });

            $(window).stellar();

            //
            $(".container").each(function(){
                var highestBox = 0;

                $(this).find(".orange-back").each(function(){
                    if($(this).height() > highestBox){
                        highestBox = $(this).height();
                    }
                });

                $(this).find(".orange-back").height(highestBox);
            });

        });
    </script>');
    }
    elseif ($this_page == "Services"){
        echo('<script src="js/jquery-1.10.2.js"></script>
            <script src="js/bootstrap.js"></script>
            <script src="js/blueimp-gallery.min.js"></script>
            <script type="text/javascript">
                document.getElementById("links").onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,

                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName("a");
                blueimp.Gallery(links, options);
                };
            </script>');
    }
    else{
        echo('<script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>');
    }
?>
</body>
</html>