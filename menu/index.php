<?PHP
require_once("./include/membersite_config.php");

?>
<div class="contain-to-grid sticky">
<nav class="top-bar">
  <ul class="title-area">
    <!-- Title Area -->
   
	<li class="name">
      <h1 style="color:#fff; ">Welcome back <?= $fgmembersite->UserFullName(); ?>!</h1>
    </li>
    
	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Left Nav Section -->
    <ul class="left">
	  <li class="divider"></li>
      <li class="has-dropdown active"><a href="#">Main Item 3</a>

        <ul class="dropdown">
          <li class="has-dropdown"><a href="#">Dropdown Level 1a</a>

            <ul class="dropdown">
              <li><label>Dropdown Level 2 Label</label></li>
              <li><a href="#">Dropdown Level 2a</a></li>
              <li><a href="#">Dropdown Level 2b</a></li>
              <li class="has-dropdown"><a href="#">Dropdown Level 2c</a>

                <ul class="dropdown">
                  <li><label>Dropdown Level 3 Label</label></li>
                  <li><a href="#">Dropdown Level 3a</a></li>
                  <li><a href="#">Dropdown Level 3b</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Dropdown Level 3c</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown Level 2d</a></li>
              <li><a href="#">Dropdown Level 2e</a></li>
              <li><a href="#">Dropdown Level 2f</a></li>
            </ul>
          </li>
          <li><a href="#">Dropdown Level 1b</a></li>
          <li><a href="#">Dropdown Level 1c</a></li>
          <li class="divider"></li>
          <li><a href="#">Dropdown Level 1d</a></li>
          <li><a href="#">Dropdown Level 1e</a></li>
          <li><a href="#">Dropdown Level 1f</a></li>
          <li class="divider"></li>
          <li><a href="#">See all &rarr;</a></li>
        </ul>
      </li>
      <li class="divider"></li>
    </ul>

    <!-- Right Nav Section -->
    <ul class="right">
      <li class="divider hide-for-small"></li>
      <li class="divider"></li>
      <li class="has-form">
        <form>
          <div class="row collapse">
            <div class="small-8 columns">
              <input type="text">
            </div>
            <div class="small-4 columns">
              <a href="#" class="alert button">Search</a>
            </div>
          </div>
        </form>
      </li>
	   <li class="divider"></li>
       <li class="divider show-for-small"></li>
      
	  <li class="has-dropdown active">
	  <a href="#">
	   <img  src="/img/settings.jpg" alt="" height="42" width="42"  > 
	  </a>

        <ul class="dropdown">
			<li>
			   <a href='change-pwd.php'>Change password</a>
			</li>
			<li>
			   <a href='accountSettings.php'>Account settings</a>
			</li>
			
			<li>
			   <a  href='logout.php'>Logout</a>
			</li>
	  	</ul>  
	  </li>
    </ul>
  </section>
</nav>
</div>