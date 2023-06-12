<!-- 
  Fisierul pentru generarea butoanelor de nagivare intre pagini.

  Se foloseste array-ul $menu_items pentru a itera prin el si genera butoane ce contin titlul paginilor si url-ul lor

  Elementele cu url-ul="chapterTitle" vor fi excluse din aceste butoane deoarece reprezinta titluri de capitol

  Fisierul next_previous_buttons.css este folosit exclusiv pentru stilizarea butoanelor, odata modificat acolo se vor propaga in toate cazurile folosite
 -->
<link rel="stylesheet" href="next_previous_buttons.css" type="text/css">

<?php
  include 'sidenavbarArray.php';
  $current_url = $_SERVER['REQUEST_URI'];
  $current_url_substring = substr($current_url, 1);
  $prev_page = '';
  $next_page = '';
  
  $flattened_menu = flattenMenuItems($menu_items); // Funcție pentru liniarizarea array-ului
  
  foreach ($flattened_menu as $index => $item) {
    if ($item['url'] === $current_url_substring) {
        // A găsit pagina curentă, deci setează paginile anterioare și următoare, dacă acestea există
        if (isset($flattened_menu[$index - 1])) {
            $prev_page = $flattened_menu[$index - 1];
        }
        if (isset($flattened_menu[$index + 1])) {
            $next_page = $flattened_menu[$index + 1];
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

  // Funcție pentru liniarizarea array-ului multidimensional - aceasta functie a fost folosita pentru a aduce toate elementele pe acelasi nivel
  // Rezolva problema in care suntem pe o pagina dintr-un submeniu, si butonul ar trebui sa indice urmatorul element care este in afara array-ul de submeniu
  function flattenMenuItems($items) {
    $flattened = [];

    foreach ($items as $item) {
        if (isset($item['url']) && $item['url'] !== "chapterTitle") {
            $flattened[] = $item;
        }
        
        if (isset($item['sub_menu'])) {
            $flattened = array_merge($flattened, flattenMenuItems($item['sub_menu']));
        }
    }

    return $flattened;
}

?>
