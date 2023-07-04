<!-- 
    Logica unde generam meniul lateral folosind array-ul $menu_items din fisierul sidenavbarArray.php
    Fisierul sidenavbar.css - pentru stilizare a meniului exclusiv.
    
    Structura HTML:
    <nav class="navigation">
        <ul class="mainmenu">
            <li>
              // La <a> de la linia 10 se poate aplica clasa css de "active-item" daca pagina pe care suntem coincide cu elementul iterat, pentru ca utilizatorul sa vada pe ce pagina e din meniu
              <a href="url-ul elementului din meniu">Label-ul elementului din array</a> 
              <ul class="submenu"> - unde este cazul, pentru elementele ce au sub_menu
                 <li>
                     <a href="url-ul elementului din sub_menu">Label-ul elementului din sub_menu</a>
                </li>
              </ul> 
            </li>
            ...
        </ul>
    </nav>
    
    Cum il importam in alte pagini HTML?
      R: Deschideti tag-ul de PHP si folositi: include('sidenavbar.php');
    
    Exemplu de folosiri: introducere.php, variabile.php etc.
-->

<link rel="stylesheet" href="../sidenavbar.css" type="text/css">

<nav class="navigation">
    <ul class="mainmenu">
        <!-- La linia 11 includem fisierul sidenavbarArray.php pentru a putea accesa array-ul $menu_items -->
        <?php
        include 'sidenavbarArray.php'; 
        $current_url = $_SERVER['REQUEST_URI'];
        $current_url_substring = substr($current_url, 1);
        $current_item_id = 'scrollId'; // Variabilă pentru a stoca ID-ul elementului curent
        $index = 0; // Variable to store the index of the current item
        
        // Iterate through $menu_items and generate the menu
        foreach ($menu_items as $key => $item) {
            echo '<li>';
            
            if( '../' . $current_url_substring == $item['url']) {
                // Apply the "active-item" CSS class if the current URL matches the item URL
                echo '<a class="active-item" href="' . $item['url'] . '" id="' . $current_item_id . '">' . $item['label'] . '</a>';
            } else if ($item['url'] === 'chapterTitle') {
                // Apply the "chapter-title" CSS class for chapter title items
                echo '<a class="chapter-title" href="' . $item['url'] . '">' . $item['label'] . '</a>';
            } else {
                // If not on the current URL, do not apply a CSS class
                echo '<a href="' . $item['url'] . '">' . $item['label'] . '</a>';
            }
            
            if (isset($item['sub_menu'])) {
                // Check if the item has a sub-menu, and if so, iterate through it and generate it
                echo '<ul class="submenu">';
                foreach ($item['sub_menu'] as $sub_item) {
                    echo '<li>';
                    if( '../' . $current_url_substring == $sub_item['url']) {
                        echo '<a class="active-item" href="' . $sub_item['url'] . '" id="' . $current_item_id . '">' . $sub_item['label'] . '</a>';
                        // echo '<a class="active-item" href="' . $sub_item['url'] . '">' . $sub_item['label'] . '</a>';

                    } else {
                    echo '<a href="' . $sub_item['url'] . '">' . $sub_item['label'] . '</a>';

                    }
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</nav>

<script>
// Use JavaScript to scroll to the current item based on its ID
document.addEventListener('DOMContentLoaded', function() {
    var currentItem = document.getElementById("<?php echo $current_item_id; ?>");
    if (currentItem) {
        currentItem.scrollIntoView({ 
            behavior: 'smooth',
            block: 'center',
            inline: 'center' 
        });
    } else {
        // If the current item ID is not found, scroll to the top of the sidebar
        document.querySelector('.mainmenu').scrollTop = 0;
    }
});
</script>