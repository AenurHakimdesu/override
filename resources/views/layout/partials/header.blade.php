<?php error_reporting(0); ?>
<!-- Loader -->
@if(Route::is(['map-grid','map-list']))
<div id="loader">
    <div class="loader">
        <span></span>
        <span></span>
    </div>
</div>
@endif
<!-- /Loader  -->
<!-- Header -->
<header class="header">
    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="/" class="navbar-brand logo">
                    <img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="/" class="menu-logo">
                        <img src="/assets/img/logo.png" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                {!! menu('main', 'menu.main') !!}
            </div>
            <ul class="nav header-navbar-rht">
                <!-- Kosongan -->
            </ul>

        </nav>
    </div>
</header>
<!-- /Header -->
<div class="main-wrapper"></div>