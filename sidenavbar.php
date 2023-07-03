<!-- 
    Logica unde generam meniul lateral folosint array-ul $menu_items din fisierul sidenavbarArray.php
    Fisierul sidenavbar.css - pentru stilizare a meniului exclusiv.
    
    Structura html:
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
    
    Cum il importam in alte pagini html?
      R: Deschideti tag-ul de php si folositi: include('sidenavbar.php');
    
    Ex de folosiri: introducere.php, variabile.php etc.
-->

<link rel="stylesheet" href='../sidenavbar.css' type="text/css">

<nav class="navigation">
    <ul class="mainmenu">
        <!-- La linia 11 includem fisierul sidenavbarArray.php pentru a putea accesa array-ul $menu_items -->
        <?php
        include 'sidenavbarArray.php'; 
        // $current_url - url-ul curent pe care suntem*pagina*
        $current_url = $_SERVER['REQUEST_URI'];
        $current_url_substring = substr($current_url, 1);
        // iteram prin $menu_item si generam cu echo meniul
        foreach ($menu_items as $item) {

            echo '<li>';
            if( '../' . $current_url_substring == $item['url']) {
                // aici aplicam clasa css de "active-item" daca url-ul pe care suntem coincide cu cel din elementul iterat la acest moment
                // class css "active-item" face ca elementul din meniu sa fie evidentiat cu o culoare mai inchisa pentru a putea vedea usor pe ce pagina sutem
                echo '<a class="active-item" href="' . $item['url'] . '">' . $item['label'] . '</a>';
            } else if($item['url'] === 'chapterTitle'){
                // Aceasta clasa de chapter title se aplica doar pentru elementele ce ar trebui sa fie titlu de capitol
                // Elementele din meniu care se vor vrea sa fie titlu de capitol o sa aiba url-ul de chapterTitle
                echo '<a class="chapter-title" href="' . $item['url'] . '">' . $item['label'] . '</a>';
            } else {
                // Daca nu suntem pe acel url, nu se aplica clasa css
                echo '<a class href="' . $item['url'] . '">' . $item['label'] . '</a>';
            }
            if (isset($item['sub_menu'])) { // aici verificam daca elementul din array contine "sub_menu" si daca da, iteram prin el si-l generam
                echo '<ul class="submenu">';
                foreach ($item['sub_menu'] as $sub_item) {
                    echo '<li>';
                    echo '<a href="' . $sub_item['url'] . '">' . $sub_item['label'] . '</a>';
                    echo '</li>';
                }
                echo '</ul>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</nav>
