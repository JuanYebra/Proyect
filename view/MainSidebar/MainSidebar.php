<div class="content-header content-header-fullrow px-15" style="height:120px;">
    <!-- Mini Mode -->
    <div class="content-header-section sidebar-mini-visible-b">
        <!-- Logo -->
        <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
            <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
        </span>
        <!-- END Logo -->
    </div>
    <!-- END Mini Mode -->

    <!-- Normal Mode -->
    <div class="content-header-section text-center align-parent sidebar-mini-hidden">
        <!-- Close Sidebar, Visible only on mobile screens -->
        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-times text-danger"></i>
        </button>
        <!-- END Close Sidebar -->

        <!-- Logo -->
        <div class="content-header-item" >
        <img  src="../../public/img/logo.png" alt="" height="100" width="200">

            <!--<p style="font-size:30px; font-weight:600;">Dostop</p>
                <span class="font-size-xl text-dual-primary-dark" >Dostop</span>-->
            </a>
        </div>
        <!-- END Logo -->
    </div>
    <!-- END Normal Mode -->
</div>

<div class="content-side content-side-full content-side-user px-10 align-parent" style="height:100px">
    
    <!-- Visible only in mini mode -->
    <div class="sidebar-mini-visible-b align-v animated fadeIn">
        <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
    </div>
    <!-- END Visible only in mini mode -->

    <!-- Visible only in normal mode -->
    <div class="sidebar-mini-hidden-b text-center">
        <!--<a class="img-link" href="be_pages_generic_profile.html">-->
        <?php
                if($_SESSION["rol_id"]==1){
                    ?>
                    <p style="font-size: 20px; font-weight:600; color: #3AEE03;">Administrador</p>
                    <?php
                }elseif($_SESSION["rol_id"]==2){
                    ?>
                    <p style="font-size: 20px; font-weight:600; color: #3AEE03">Usuario</p>
                    <?php
                }
            ?>
            <!--<img class="img-avatar" src="../../public/assets/img/avatars/avatar15.jpg" alt="">-->
        <!--</a>-->
        <ul class="list-inline mt-10">
            <li class="list-inline-item">
                <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="*"><?php echo $_SESSION["usu_nom"] ." ". $_SESSION["usu_ape"]?></a>
            </li>
            <li class="list-inline-item">
                <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                    <i class="si si-drop"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="link-effect text-dual-primary-dark" href="../Logout/logout.php">
                    <i class="si si-logout"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- END Visible only in normal mode -->
</div>