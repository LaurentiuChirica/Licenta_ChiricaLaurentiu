<link rel="stylesheet" href="sidenavbar.css" type="text/css">

<nav class="navigation">
    <ul class="mainmenu">
        <?php
        include 'sidenavbarArray.php'; 
        
        $current_url = $_SERVER['REQUEST_URI'];
        $current_url_substring = substr($current_url, 1);
        
        foreach ($menu_items as $item) {
            echo '<li>';
            if( $current_url_substring == $item['url']) {
                echo '<a class="active-item" href="' . $item['url'] . '">' . $item['label'] . '</a>';
            } else {
                echo '<a class href="' . $item['url'] . '">' . $item['label'] . '</a>';
            }
            if (isset($item['sub_menu'])) {
                echo '<ul class="submenu">';
                foreach ($item['sub_menu'] as $sub_item) {
                    echo '<li>';
                    echo '<a "href="' . $sub_item['url'] . '">' . $sub_item['label'] . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</nav>
