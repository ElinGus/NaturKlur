<nav>
    <a role="button" class="navbar-burger is-active" data-target="navMenu" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>

    <div class="navbar-menu" id="navMenu">
      <!-- navbar-start, navbar-end... -->
   
      <div class="navbar-end">
      <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
        ) );
      ?>
    </div>
    </div>
</nav>


