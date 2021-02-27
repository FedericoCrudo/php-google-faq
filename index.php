<?php include("php/db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/framework.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <title>Document</title>

</head>
<body>
       <header>
            <div class="header-top ">
                <div class="img ">
                    <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
                  <a href="" class="m_left10 text_color">Privacy e termini</a> 
                </div>
                <div class="account">
                    <img class="m_right_20 " src="img/icons8-menu-cerchiato-60.png" alt="">
                    <img class="user" src="https://lh3.googleusercontent.com/-Wh-iKdeJPbU/Uk3JQBAKExI/AAAAAAAAAK4/zz7rkWqnm14ubaIwmCNFxIwgeuM-5_mJQCEwYBhgLKtQDAL1OcqyI4DaNhI_kUqwkJdqyWIl42o8FADs9F16w_OuqWqEHKZnJMv7n0Cwfbb0fUQKuQahz0zixp-PVhMy-vLl-aZV8IZNq_6UqtPGS_34VofcaXOe8yV_OT9BfB_0aWVVze7Bdmu7c-GPmxIh_gGkhIGRAd-1VXcOIG8Y2rTu3BB94pBZ5X3PaC24yiOUgYtNMLKoxb3I-jG-WFTnDWpM7sZOaN0FYoqkctrItMKPI_85duiXLSiYvnlvN3GrbkMq8aifQI5II8tlznTI7VkpzuJ_u5_rfdZN4Xptvg4_4UXjj79xRA8bTO_vEnf9TfYUNlAvopfMgnhZldKsX56bBi3mKcWynpY-NYi1VbbQirTds_gtmQHrW6EKFxGskYdR04jg38eD69vcDUh4JzcfnHIzisfOZXi9kAFVNJN1LKHIuIGmJLOa6LKFSvvEJy8Y_yGczjpIXq3YhkFAuTQFxwBmlL_HNB4ZcIF_kgrsRT7Dqt5_7CAqzD2VwTKBr1JxnHog3AGKkGSVazxIA76D7V9DnzProFrzgvMNyaQhKXhHMNq4MNaar5RqmQCUEGr0h0MNyAAsW2FKxx2axqus4M3aDLO289yZc9x-UkcAUT9LSMLqb5IEG/w140-h140-p/Lighthouse.jpg" alt="">
                </div>
            </div>
            <div class="header-bottom">
                <ul>
                    <li><a href="">Introduzione</a></li>
                    <li><a href="">Norme sulla privacy</a></li>
                    <li><a href="">Termini di servizio</a></li>
                    <li><a href="">Tecnologie</a></li>
                    <li class="border_check"><a class="color_blue"href="">Domante frequenti</a></li>
                </ul>
            </div>       
       </header>
       <main>
           <div class="questions">
                <div class="container">
                    
                        <?php
                         foreach($faqs as $faq){?>
                        <div class="faq">
                            <h2 class="text_color"><?php echo $faq["questions"] ?></h2>
                                <ul>
                                <?php
                                foreach($faq["answer"] as $name){?>
                                    <li><?php echo $name ?></li>
                                <?php }?> 
                                </ul>
                        </div>
                       <?php } ?>

                </div>
           </div>
       </main>
       <footer>
           <div class="container">
                <div class="wrapp">
                      <ul>
                          <li><a href="">Google</a></li>
                          <li><a href="">Tutto su Google</a></li>
                          <li><a href="">Privacy</a></li>
                          <li><a href="">Termini</a></li>
                      </ul> 
                      <div class="languagess">
                                    <select name="" id="">
                                    <option value="italiano">Italiano</option>

                                    </select>
                      </div>             
                </div>
           </div>
       </footer>
</body>
</html>