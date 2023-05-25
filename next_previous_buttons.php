<link rel="stylesheet" href="next_previous_buttons.css" type="text/css">

<?php
  include 'sidenavbarArray.php'; 
  $previous="Pagina anterioara";
  $next="Pagina urmatoare";
  $current_url = $_SERVER['REQUEST_URI'];
  $current_url_substring = substr($current_url, 1);
  $prev_page = '';
  $next_page = '';
  
  foreach ($menu_items as $index => $item) {
    if ($item['url'] === $current_url_substring) {
        // Found the current page, so set the previous and next pages if they exist
        if (isset($menu_items[$index - 1])) {
            $prev_page = $menu_items[$index - 1];
        }
        if (isset($menu_items[$index + 1])) {
            $next_page = $menu_items[$index + 1];
        }
        break;
    }
  }

  if ($prev_page != null) {
    echo '<a class="next-previous-button" href="' . $prev_page['url'] . '"><img class="left-arrow" src="images/next-previous-arrow.png">' . $prev_page['label'] . '</a>';
  }

  if ($next_page) {
    echo '<a class="next-previous-button" href="' . $next_page['url'] . '">' . $next_page['label'] . '<img class="right-arrow" src="images/next-previous-arrow.png"></a>';
  }
?>
