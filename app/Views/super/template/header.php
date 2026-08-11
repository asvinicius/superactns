<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if (isset($title)) {
            echo $title;
        }
        ?>
    </title>
    <meta name="description" content="NiceAdmin - Bootstrap Admin Template">
    <meta name="keywords" content="admin, dashboard, bootstrap">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts - Nunito Sans + Poppins + JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Nunito+Sans:wght@400;500;600;700;800&family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/phosphor-icons/phosphor-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/lucide-icons/lucide.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/simple-datatables/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/quill/quill.snow.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/quill/quill.bubble.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/choices.js/choices.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/flatpickr/flatpickr.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin - Bootstrap Admin Template
    * Template URL: https://bootstrapmade.com/flex-admin-bootstrap-template/
    * Updated: Jun 09 2026 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="header-left">
            <button class="sidebar-toggle" title="Toggle Sidebar" aria-label="Toggle sidebar">
                <span class="menu-lines" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <a href="<?= base_url() ?>" class="header-brand" aria-label="NiceAdmin home">
                <span class="header-logo">
                    <img src="<?= base_url('assets/img/logo.webp') ?>" alt="NiceAdmin">
                </span>
                <span class="header-context">
                    <strong class="header-context-title">Gerenciador</strong>
                </span>
            </a>
        </div>
        <div class="header-right">
            <div class="header-actions-desktop">
                <div class="header-action-wrap dropdown notification-dropdown">
                    <button class="header-action dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" title="Notifications">
                        <i class="bi bi-bell"></i>
                        <span class="header-badge">4</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end notification-menu">
                        <div class="notification-header">
                            <div>
                                <h6>Notifications</h6>
                                <span>4 unread</span>
                            </div>
                            <a href="#" data-notification-action="mark-all-read">Mark all read</a>
                        </div>
                        <div class="notification-summary">
                            <a href="activity.html" class="notification-summary-item">
                                <strong>XX</strong>
                                <span>Lero lero</span>
                            </a>
                            <a href="notifications.html" class="notification-summary-item">
                                <strong>23</strong>
                                <span>This week</span>
                            </a>
                            <a href="roles.html" class="notification-summary-item">
                                <strong>3</strong>
                                <span>Approvals</span>
                            </a>
                        </div>
                        <div class="notification-list">
                            <div class="notification-item unread">
                                <span class="notification-dot"></span>
                                <div class="notification-icon info"><i class="bi bi-rocket-takeoff"></i></div>
                                <div class="notification-content">
                                    <div class="notification-title">Deploy ready</div>
                                    <div class="notification-text">Sprint release passed QA validation.</div>
                                    <span class="notification-time">5m ago</span>
                                </div>
                            </div>
                            <div class="notification-item unread">
                                <span class="notification-dot"></span>
                                <img src="<?= base_url('assets/img/avatars/avatar-2.webp') ?>" alt="" class="notification-avatar">
                                <div class="notification-content">
                                    <div class="notification-title">Mia sent feedback</div>
                                    <div class="notification-text">Please review updated dashboard spacing.</div>
                                    <span class="notification-time">21m ago</span>
                                </div>
                            </div>
                            <div class="notification-item unread">
                                <span class="notification-dot"></span>
                                <div class="notification-icon warning"><i class="bi bi-exclamation-triangle"></i></div>
                                <div class="notification-content">
                                    <div class="notification-title">Storage alert</div>
                                    <div class="notification-text">Media bucket reached 81% usage.</div>
                                    <span class="notification-time">58m ago</span>
                                </div>
                            </div>
                            <div class="notification-item unread">
                                <span class="notification-dot"></span>
                                <div class="notification-icon success"><i class="bi bi-check2-circle"></i></div>
                                <div class="notification-content">
                                    <div class="notification-title">Payment received</div>
                                    <div class="notification-text">Invoice #INV-3921 settled successfully.</div>
                                    <span class="notification-time">2h ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="notification-footer">
                            <a href="notifications.html">Open notification center <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="header-action-wrap dropdown user-dropdown">
                    <button class="dropdown-toggle user-trigger" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?= base_url('assets/img/profile-img.webp') ?>" alt="User" class="user-avatar">
                        <div class="user-brief">
                            <span class="user-name"><?= session()->get('super_name') ?>
                            </span>
                            <span class="user-role">Super</span>
                        </div>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end user-menu">
                        <div class="user-menu-header">
                            <img src="<?= base_url('assets/img/profile-img.webp') ?>" alt="User" class="user-menu-avatar">
                            <div class="user-menu-info">
                                <div class="user-menu-name"><?= session()->get('super_name') ?></div>
                            </div>
                        </div>
                        <div class="user-menu-footer">
                            <a class="user-menu-logout" href="<?= base_url('login/signout') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sair</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-actions-mobile">
                <button class="header-action search-toggle" title="Search">
                    <i class="bi bi-search"></i>
                </button>

                <button class="header-action mobile-menu-toggle" title="More">
                    <i class="bi bi-three-dots"></i>
                </button>
            </div>
        </div>
    </header>

    <div class="mobile-search">
        <form class="search-form" action="search-results.html" method="GET">
            <input type="search" name="q" placeholder="Search..." autocomplete="off">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <div class="mobile-header-menu">
        <div class="mobile-header-menu-content">
            <button class="mobile-menu-item theme-toggle" title="Toggle Theme">
                <i class="ph-light ph-moon-stars theme-icon-dark"></i>
                <i class="ph-light ph-sun theme-icon-light"></i>
                <span class="mobile-menu-label">Theme</span>
            </button>

            <a href="notifications.html" class="mobile-menu-item">
                <i class="bi bi-bell"></i>
                <span class="badge">4</span>
                <span class="mobile-menu-label">Alerts</span>
            </a>

            <a href="apps-chat.html" class="mobile-menu-item">
                <i class="bi bi-chat-left-text"></i>
                <span class="mobile-menu-label">Messages</span>
            </a>

            <a href="apps-calendar.html" class="mobile-menu-item">
                <i class="bi bi-calendar3"></i>
                <span class="mobile-menu-label">Calendar</span>
            </a>

            <a href="profile.html" class="mobile-menu-item">
                <i class="bi bi-person"></i>
                <span class="mobile-menu-label">Profile</span>
            </a>

            <a href="settings.html" class="mobile-menu-item">
                <i class="bi bi-sliders"></i>
                <span class="mobile-menu-label">Settings</span>
            </a>

            <a href="auth-login.html" class="mobile-menu-item mobile-menu-item-danger">
                <i class="bi bi-box-arrow-right"></i>
                <span class="mobile-menu-label">Sign Out</span>
            </a>
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-shell">
            <button class="sidebar-close" type="button" aria-label="Close sidebar">
                <i class="bi bi-x-lg"></i>
            </button>

            <!-- Sidebar Navigation -->
            <nav class="sidebar-nav">
                <ul class="nav-menu">

                    <li class="nav-item">
                        <a class="nav-link <?php if ($info['pageid'] == 1) { echo "active";} ?>" href="<?= base_url() ?>">
                            <span class="nav-icon"><i class="ph-light ph-squares-four"></i></span>
                            <span class="nav-text">Dashboard</span>
                            <span class="nav-meta">Início</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($info['pageid'] == 2) { echo "active";} ?>" href="<?= base_url() ?>">
                            <span class="nav-icon"><i class="ph-light ph-users"></i></span>
                            <span class="nav-text">Administradores</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($info['pageid'] == 3) { echo "active";} ?>" href="<?= base_url() ?>">
                            <span class="nav-icon"><i class="ph-light ph-trophy"></i></span>
                            <span class="nav-text">Ligas</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($info['pageid'] == 4) { echo "active";} ?>" href="<?= base_url('backup') ?>">
                            <span class="nav-icon"><i class="ph-light ph-database"></i></span>
                            <span class="nav-text">Backups</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($info['pageid'] == 5) { echo "active";} ?>" href="<?= base_url() ?>">
                            <span class="nav-icon"><i class="ph-light ph-arrow-clockwise"></i></span>
                            <span class="nav-text">Atualizações</span>
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                    <div class="alert alert-<?php if ($info['status']['market_status'] == 1) {
                                            echo "success";
                                        } else {
                                            echo "danger";
                                        } ?>" role="alert">
                        Mercado 
                            <?php if ($info['status']['market_status'] == 1) {
                                echo "Aberto";
                            } else {
                                echo "Fechado";
                            } ?>
                    </div>
            </div>
        </div>
    </aside>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay"></div>