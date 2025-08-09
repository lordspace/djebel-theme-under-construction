<?php
/*
theme_name: Under Construction
theme_uri: https://djebel.com/themes/under_construction
description: Under Construction
version: 1.0.0
tags: sample, theme, blog, site
stable_version: 1.0.0
min_php_ver: 5.6
min_dj_app_ver: 1.0.0
tested_with_dj_app_ver: 1.0.0
author_name: Svetoslav Marinov (Slavi)
company_name: Orbisius
author_uri: https://orbisius.com
text_domain: djebel-app-theme-under-contruction
*/

$page_obj = Dj_App_Page::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_obj->esc_page_title; ?></title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="__theme_url__/css/style.css" />
</head>
<body class="dj-app-default-body">

    <!-- Content Area -->
    <div class="content-area">
        
        <!-- Main Content with Integrated Menu -->
        <main class="dj-app-content">
            <!-- Navigation Menu (now inside content) -->
            <div class="dj-app-integrated-menu">
                <nav class="dj-app-menu-container">
                    [djebel_nav]
                </nav>
            </div>

            <!-- Page Content -->
            <div class="dj-app-page-content">
                [djebel_content]
            </div>
        </main>

        <!-- Footer -->
        <footer class="dj-app-footer">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $page_obj->esc_site_title; ?>. All rights reserved.</p>
        </footer>

    </div>
</body>
</html>
