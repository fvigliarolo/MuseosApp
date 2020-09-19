    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo media();?>/images/user_icon.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Juan Lumaca</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">

        <li>
          <a class="app-menu__item" href="<?php echo base_url(); ?>/dashboard">
            <i class="app-menu__icon fa fa-dashboard"></i>
              <span class="app-menu__label">Dashboard</span>
          </a>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
          <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
              <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/admin_roles"><i class="icon fa fa-circle-o"></i>Administradores</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/dashboard"><i class="icon fa fa-circle-o"> Guias</i></a></li>
           </ul>
        </li>
        
        <li><a class="app-menu__item" href="<?php echo base_url(); ?>/exposiciones"><i class="app-menu__icon fa fa-university" aria-hidden="true"></i><span class="app-menu__label">Exposiciones</span></a></li>

        <li><a class="app-menu__item" href="<?php echo base_url(); ?>/talleres"><i class="app-menu__icon fa fa-paint-brush" aria-hidden="true"></i><span class="app-menu__label">Talleres</span></a></li>

        <li><a class="app-menu__item" href="<?php echo base_url(); ?>/logout"><i class="app-menu__icon fa fa-ticket" aria-hidden="true"></i><span class="app-menu__label">Visitas</span></a></li>

        <li><a class="app-menu__item" href="<?php echo base_url(); ?>/logout"><i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i><span class="app-menu__label">Cerrar sesion</span></a></li>
        
        
          
    </aside>