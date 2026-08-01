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

            <a href="index.html" class="header-brand" aria-label="NiceAdmin home">
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
                                <strong>7</strong>
                                <span>Today</span>
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
                        <a class="nav-link active" href="index.html">
                            <span class="nav-icon"><i class="ph-light ph-squares-four"></i></span>
                            <span class="nav-text">Dashboard</span>
                            <span class="nav-meta">Home</span>
                        </a>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-gauge"></i></span>
                            <span class="nav-text">Dashboards</span>
                            <span class="nav-badge">6</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="dashboard-sales.html"><span class="nav-dot"></span>Sales</a></li>
                            <li><a class="nav-link " href="dashboard-analytics.html"><span class="nav-dot"></span>Analytics</a></li>
                            <li><a class="nav-link " href="dashboard-crm.html"><span class="nav-dot"></span>CRM</a></li>
                            <li><a class="nav-link " href="dashboard-marketing.html"><span class="nav-dot"></span>Marketing</a></li>
                            <li><a class="nav-link " href="dashboard-projects.html"><span class="nav-dot"></span>Projects</a></li>
                            <li><a class="nav-link " href="dashboard-finance.html"><span class="nav-dot"></span>Finance</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-users-three"></i></span>
                            <span class="nav-text">Users</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="users.html"><span class="nav-dot"></span>Users List</a></li>
                            <li><a class="nav-link " href="users-view.html"><span class="nav-dot"></span>User View</a></li>
                            <li><a class="nav-link " href="users-edit.html"><span class="nav-dot"></span>User Edit</a></li>
                            <li><a class="nav-link " href="profile.html"><span class="nav-dot"></span>Profile</a></li>
                            <li class="has-submenu ">
                                <a class="nav-link" href="#" aria-expanded="false">
                                    <span class="nav-dot"></span>Settings
                                    <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                                </a>
                                <ul class="nav-submenu ">
                                    <li><a class="nav-link " href="settings.html"><span class="nav-dot"></span>Account</a></li>
                                    <li><a class="nav-link " href="notifications.html"><span class="nav-dot"></span>Notifications</a></li>
                                    <li><a class="nav-link " href="activity.html"><span class="nav-dot"></span>Activity</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link " href="roles.html"><span class="nav-dot"></span>Roles & Permissions</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-shield-check"></i></span>
                            <span class="nav-text">Authentication</span>
                            <span class="nav-badge">7</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="auth-login.html"><span class="nav-dot"></span>Login</a></li>
                            <li><a class="nav-link " href="auth-register.html"><span class="nav-dot"></span>Register</a></li>
                            <li><a class="nav-link " href="auth-forgot-password.html"><span class="nav-dot"></span>Forgot Password</a></li>
                            <li><a class="nav-link " href="auth-reset-password.html"><span class="nav-dot"></span>Reset Password</a></li>
                            <li><a class="nav-link " href="auth-verify-email.html"><span class="nav-dot"></span>Email Verification</a></li>
                            <li><a class="nav-link " href="auth-two-factor.html"><span class="nav-dot"></span>Two Factor Auth</a></li>
                            <li><a class="nav-link " href="auth-lock-screen.html"><span class="nav-dot"></span>Lock Screen</a></li>
                        </ul>
                    </li>

                    <li class="nav-heading"><span>Productivity Apps</span></li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-calendar.html">
                            <span class="nav-icon"><i class="ph-light ph-calendar-blank"></i></span>
                            <span class="nav-text">Calendar</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-kanban.html">
                            <span class="nav-icon"><i class="ph-light ph-kanban"></i></span>
                            <span class="nav-text">Kanban Board</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-chat.html">
                            <span class="nav-icon"><i class="ph-light ph-chat-circle-dots"></i></span>
                            <span class="nav-text">Chat</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-contacts.html">
                            <span class="nav-icon"><i class="ph-light ph-address-book"></i></span>
                            <span class="nav-text">Contacts</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-file-manager.html">
                            <span class="nav-icon"><i class="ph-light ph-folder-open"></i></span>
                            <span class="nav-text">File Manager</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-email.html">
                            <span class="nav-icon"><i class="ph-light ph-envelope-simple"></i></span>
                            <span class="nav-text">Email</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-todo.html">
                            <span class="nav-icon"><i class="ph-light ph-checks"></i></span>
                            <span class="nav-text">Todo List</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="apps-support.html">
                            <span class="nav-icon"><i class="ph-light ph-headset"></i></span>
                            <span class="nav-text">Support Center</span>
                        </a>
                    </li>

                    <li class="nav-heading"><span>Interface</span></li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-puzzle-piece"></i></span>
                            <span class="nav-text">Components</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="components-alerts.html"><span class="nav-dot"></span>Alerts</a></li>
                            <li><a class="nav-link " href="components-accordion.html"><span class="nav-dot"></span>Accordion</a></li>
                            <li><a class="nav-link " href="components-badges.html"><span class="nav-dot"></span>Badges</a></li>
                            <li><a class="nav-link " href="components-breadcrumbs.html"><span class="nav-dot"></span>Breadcrumbs</a></li>
                            <li><a class="nav-link " href="components-buttons.html"><span class="nav-dot"></span>Buttons</a></li>
                            <li><a class="nav-link " href="components-cards.html"><span class="nav-dot"></span>Cards</a></li>
                            <li><a class="nav-link " href="components-carousel.html"><span class="nav-dot"></span>Carousel</a></li>
                            <li><a class="nav-link " href="components-dropdowns.html"><span class="nav-dot"></span>Dropdowns</a></li>
                            <li><a class="nav-link " href="components-list-group.html"><span class="nav-dot"></span>List Group</a></li>
                            <li><a class="nav-link " href="components-modal.html"><span class="nav-dot"></span>Modal</a></li>
                            <li><a class="nav-link " href="components-nav-tabs.html"><span class="nav-dot"></span>Navs & Tabs</a></li>
                            <li><a class="nav-link " href="components-offcanvas.html"><span class="nav-dot"></span>Offcanvas</a></li>
                            <li><a class="nav-link " href="components-pagination.html"><span class="nav-dot"></span>Pagination</a></li>
                            <li><a class="nav-link " href="components-popovers.html"><span class="nav-dot"></span>Popovers</a></li>
                            <li><a class="nav-link " href="components-progress.html"><span class="nav-dot"></span>Progress</a></li>
                            <li><a class="nav-link " href="components-spinners.html"><span class="nav-dot"></span>Spinners</a></li>
                            <li><a class="nav-link " href="components-toasts.html"><span class="nav-dot"></span>Toasts</a></li>
                            <li><a class="nav-link " href="components-tooltips.html"><span class="nav-dot"></span>Tooltips</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-stack"></i></span>
                            <span class="nav-text">Widgets</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="widgets-cards.html"><span class="nav-dot"></span>Cards</a></li>
                            <li><a class="nav-link " href="widgets-banners.html"><span class="nav-dot"></span>Banners</a></li>
                            <li><a class="nav-link " href="widgets-charts.html"><span class="nav-dot"></span>Charts</a></li>
                            <li><a class="nav-link " href="widgets-apps.html"><span class="nav-dot"></span>Apps</a></li>
                            <li><a class="nav-link " href="widgets-data.html"><span class="nav-dot"></span>Data</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-textbox"></i></span>
                            <span class="nav-text">Forms</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="forms-elements.html"><span class="nav-dot"></span>Form Elements</a></li>
                            <li><a class="nav-link " href="forms-layouts.html"><span class="nav-dot"></span>Form Layouts</a></li>
                            <li><a class="nav-link " href="forms-validation.html"><span class="nav-dot"></span>Validation</a></li>
                            <li><a class="nav-link " href="forms-wizard.html"><span class="nav-dot"></span>Wizard</a></li>
                            <li><a class="nav-link " href="forms-editors.html"><span class="nav-dot"></span>Rich Editors</a></li>
                            <li><a class="nav-link " href="forms-pickers.html"><span class="nav-dot"></span>Date/Time Pickers</a></li>
                            <li><a class="nav-link " href="forms-select.html"><span class="nav-dot"></span>Advanced Select</a></li>
                            <li><a class="nav-link " href="forms-upload.html"><span class="nav-dot"></span>File Upload</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-table"></i></span>
                            <span class="nav-text">Tables</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="tables-basic.html"><span class="nav-dot"></span>Basic Tables</a></li>
                            <li><a class="nav-link " href="tables-datatables.html"><span class="nav-dot"></span>DataTables</a></li>
                            <li><a class="nav-link " href="tables-responsive.html"><span class="nav-dot"></span>Responsive Tables</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-chart-line-up"></i></span>
                            <span class="nav-text">Charts</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="charts-apexcharts.html"><span class="nav-dot"></span>ApexCharts</a></li>
                            <li><a class="nav-link " href="charts-chartjs.html"><span class="nav-dot"></span>Chart.js</a></li>
                            <li><a class="nav-link " href="charts-echarts.html"><span class="nav-dot"></span>ECharts</a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-diamond"></i></span>
                            <span class="nav-text">Icons</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="icons-bootstrap.html"><span class="nav-dot"></span>Bootstrap Icons</a></li>
                            <li><a class="nav-link " href="icons-remixicon.html"><span class="nav-dot"></span>Remix Icons</a></li>
                            <li><a class="nav-link " href="icons-fontawesome.html"><span class="nav-dot"></span>Font Awesome</a></li>
                            <li><a class="nav-link " href="icons-phosphor.html"><span class="nav-dot"></span>Phosphor Icons</a></li>
                            <li><a class="nav-link " href="icons-lucide.html"><span class="nav-dot"></span>Lucide Icons</a></li>
                        </ul>
                    </li>

                    <li class="nav-heading"><span>Utility Pages</span></li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.html">
                            <span class="nav-icon"><i class="ph-light ph-paper-plane-tilt"></i></span>
                            <span class="nav-text">Contact</span>
                        </a>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-receipt"></i></span>
                            <span class="nav-text">Invoices</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="invoice-list.html"><span class="nav-dot"></span>Invoice List</a></li>
                            <li><a class="nav-link " href="invoice.html"><span class="nav-dot"></span>Invoice View</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="pricing.html">
                            <span class="nav-icon"><i class="ph-light ph-tag"></i></span>
                            <span class="nav-text">Pricing</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="faq.html">
                            <span class="nav-icon"><i class="ph-light ph-question"></i></span>
                            <span class="nav-text">FAQ</span>
                        </a>
                    </li>

                    <li class="nav-item has-submenu ">
                        <a class="nav-link" href="#" aria-expanded="false">
                            <span class="nav-icon"><i class="ph-light ph-warning"></i></span>
                            <span class="nav-text">Error Pages</span>
                            <span class="nav-arrow"><i class="bi bi-chevron-right"></i></span>
                        </a>
                        <ul class="nav-submenu ">
                            <li><a class="nav-link " href="error-404.html"><span class="nav-dot"></span>404 Not Found</a></li>
                            <li><a class="nav-link " href="error-403.html"><span class="nav-dot"></span>403 Forbidden</a></li>
                            <li><a class="nav-link " href="error-500.html"><span class="nav-dot"></span>500 Server Error</a></li>
                            <li><a class="nav-link " href="error-maintenance.html"><span class="nav-dot"></span>Maintenance</a></li>
                            <li><a class="nav-link " href="error-coming-soon.html"><span class="nav-dot"></span>Coming Soon</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="timeline.html">
                            <span class="nav-icon"><i class="ph-light ph-clock-counter-clockwise"></i></span>
                            <span class="nav-text">Timeline</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="search-results.html">
                            <span class="nav-icon"><i class="ph-light ph-magnifying-glass"></i></span>
                            <span class="nav-text">Search Results</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="blank.html">
                            <span class="nav-icon"><i class="ph-light ph-file"></i></span>
                            <span class="nav-text">Blank Page</span>
                        </a>
                    </li>

                </ul>
            </nav>

            <!-- Sidebar Footer -->
            <div class="sidebar-footer">
                <div class="sidebar-account">
                    <a href="profile.html" class="sidebar-account-main">
                        <img src="<?= base_url('assets/img/profile-img.webp') ?>" alt="User" class="sidebar-account-avatar">
                        <div class="sidebar-account-meta">
                            <div class="sidebar-account-name">John Doe</div>
                            <div class="sidebar-account-role">Product Admin</div>
                        </div>
                    </a>
                    <div class="sidebar-account-actions">
                        <a href="settings.html" class="sidebar-account-action" title="Settings">
                            <i class="bi bi-gear"></i>
                        </a>
                        <a href="auth-login.html" class="sidebar-account-action sidebar-account-logout" title="Logout">
                            <i class="bi bi-box-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="sidebar-footer-links">
                    <a href="apps-support.html" class="sidebar-footer-link">
                        <i class="ph-light ph-headset"></i>
                        <span>Support Desk</span>
                    </a>
                    <a href="notifications.html" class="sidebar-footer-link">
                        <i class="ph-light ph-bell"></i>
                        <span>Alerts</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay"></div>