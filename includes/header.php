
     <header>
        <div class="menu-row">
          <div class="main">

          <form method="get" action="http://google.com" id="menu-search" class="fr">
            <input type="text" onblur="if(this.value==&#39;&#39;)this.value=&#39;Search...&#39;;" onfocus="if(this.value==&#39;Search...&#39;)this.value=&#39;&#39;;" value="Search..." name="s">
          </form>

          <!--<form id = "shop-button" >
            <input type = "submit" value = "Globest Shop" >
          </form>-->

            <div class="title-wrapper clearfix">
    
              <div id="title" class="fl">
                <h1>
                  <a id = "logo" href="#"><img src = "css/images/logo.png"></a>
                  <!--<span id="tagline">Weight Management Center</span>-->
                </h1>
              </div>
            </div>

            

            <nav>
              <ul id = "main-menu" class="menu wrapper">
                <li><a class="<?php if(isset($homeActive))echo $homeActive; ?>" href="index.php">Home</a></li>
                <li><a class="<?php if(isset($whatActive))echo $whatActive; ?>" href="what_we_are.php">Who We Are</a></li>
                <li><a class="<?php if(isset($manageActive))echo $manageActive; ?>" href="weight_management.php">Manage Your Weight</a>
                </li>
                <li>
                  <a class="<?php if(isset($servicesActive))echo $servicesActive; ?>" >Services<span> »</span> </a>
                  <ul >
                    <li><a class="<?php if(isset($obesityActive))echo $obesityActive; ?>" href="weight_management.php">Obesity</a></li>
                    <li><a class="<?php if(isset($foodsActive))echo $foodsActive; ?>"  href="nutrition1.php">Health Foods</a></li>
                    <li><a class="<?php if(isset($gymActive))echo $gymActive; ?>" href="exercise.php">Gym and Fitness</a></li>
                    <li><a class="<?php if(isset($shopActive))echo $shopActive; ?>" href="#">Globest Shop</a></li>
                    
                  </ul>
                </li>
               
                <li><a href="contacts.php">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="row-bot"></div>
      </header>