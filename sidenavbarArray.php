<?php
  // Array-ul de mai jos reprezinta meniul din stanga al paginii  si butoanele de navigare intre pagini pentru sectiunea de tutoriale PHP 
  // In el se pot adauga capitole si subcapitole, odata adaugat/sters, schimbarile se vor propaga in toata aplicatia

  // Acest array este folosit in: 
  //    sidenavbar.php pentru a genera meniul lateral
  //    next_previous_buttons.php pentru a genera butoanele de urmatorul si anterior capitol pentru o navigare mai usoara in pagina

  // Structura unui item cu si fara submenu 
  //   [
  //     'label' => 'Home', - Titlul elementului din meniu ce va aparea pe pagina 
  //      'url' => '../php_Docs/tut_PHP.php' - fisierul php catre care vei fi redirectionat
  //   ], 
  //   [
  //     'label' => 'Structuri repetitive', - Titlul elementului din meniu ce apare pe pagina si ascunde celelalte elemente din sub_menu pana se face hover
  //      'url' => '../php_Docs/structuriRepetitive.php', - fisierul php catre care vei fi redirectionat
  //     'sub_menu' => [ - array-ul de submeniuri - lista de submeniuri poate fi extinsa nelimitat.
  //         [
  //             'label' => 'While', - Titlul elementului din sub_menu ce apare pe pagina cand se face hover la elementul de pe acelasi nivel cu 'sub_menu'
  //              'url' => '../php_Docs/while.php' - fisierul php catre care vei fi redirectionat
  //         ],
  //         [
  //             'label' => 'Break / Continue',
  //              'url' => '../php_Docs/break&continue.php'
  //         ]
  //     ]
  // ],

  // Nota: elementele care au url='chapterTitle' sunt titlu de capitol pentru a putea separa meniul pe capitole
  // Acestea au o clasa de css aplicata pentru a putea fi manipulate dupa nevoie.

  $menu_items = [
    [
        'label' => 'Tutorial PHP',
        'url' => 'chapterTitle'
    ],
    [
        'label' => 'Home',
        'url' => '../php.php'
    ], 
    [
        'label' => 'Introducere',
        'url' => '../php_Docs/introducere.php'
    ],
    [
        'label' => 'Instalare PHP',
        'url' => '../php_Docs/instalarePHP.php'
    ],
    [
        'label' => 'Sintaxă',
        'url' => '../php_Docs/sintaxa.php'
    ],
    [
        'label' => 'Comentarii',
          'url' => '../php_Docs/comentarii.php'
    ],
    [
        'label' => 'Variabile',
         'url' => '../php_Docs/variabile.php',
    ],
    [
        'label' => 'Domeniul variabilelor',
         'url' => '../php_Docs/domeniulVariabilelor.php',
    ],
    [
        'label' => 'Echo / Print',
         'url' => '../php_Docs/echo&print.php',
    ],
    [
        'label' => 'Tipuri de date',
         'url' => '../php_Docs/tipuriDate.php',
    ],
    [
        'label' => 'Constante',
         'url' => '../php_Docs/constante.php',
    ],
    [
        'label' => 'Operatori',
         'url' => '../php_Docs/operatori.php',
    ],
    [
        'label' => 'If else',
         'url' => '../php_Docs/ifElse.php',
    ],
    [
        'label' => 'Switch',
         'url' => '../php_Docs/switch.php',
    ],
    [
        'label' => 'Structuri Repetitive',
         'url' => '../php_Docs/structuriRepetitive.php',
        'sub_menu' => [
            [
                'label' => 'While',
                 'url' => '../php_Docs/while.php'
            ],
            [
                'label' => 'Do While',
                 'url' => '../php_Docs/doWhile.php'
            ],
            [
                'label' => 'For',
                 'url' => '../php_Docs/for.php'
            ],
            [
                'label' => 'Foreach',
                 'url' => '../php_Docs/foreach.php'
            ],
            [
                'label' => 'Break / Continue',
                 'url' => '../php_Docs/break&continue.php'
            ]
        ]
    ],
    [
        'label' => 'Funcții',
         'url' => '../php_Docs/functii.php',
    ],
    [
        'label' => 'Array-uri',     
         'url' => '../php_Docs/array.php',
        'sub_menu' => [
            [
                'label' => 'Array Indexat',
                 'url' => '../php_Docs/arrayIndexat.php'
            ],
            [
                'label' => 'Array Asociativ',
                 'url' => '../php_Docs/arrayAsociativ.php'
            ],
            [
                'label' => 'Array Multidimensional',
                 'url' => '../php_Docs/arrayMultidimensional.php'
            ],
            [
                'label' => 'Sortare Array-uri',
                 'url' => '../php_Docs/sortareArray.php'
            ],
            [
                'label' => 'Funcții Array-uri',
                 'url' => '../php_Docs/functiiArray.php'
            ]
        ]
    ],
    [
        'label' => 'Superglobals',     
         'url' => '../php_Docs/superglobals.php',
        'sub_menu' => [
            [
                'label' => '$GLOBALS',
                 'url' => '../php_Docs/superglobals_globals.php'
            ],
            [
                'label' => '$_SERVER',
                 'url' => '../php_Docs/superglobals_server.php'
            ],
            [
                'label' => '$_REQUEST',
                 'url' => '../php_Docs/superglobals_request.php'
            ],
            [
                'label' => '$_POST',
                 'url' => '../php_Docs/superglobals_post.php'
            ],
            [
                'label' => '$_GET',
                 'url' => '../php_Docs/superglobals_get.php'
            ]
        ]
    ],
    [
        'label' => 'String',     
         'url' => '../php_Docs/string.php',
        'sub_menu' => [
            [
                'label' => 'Funcții string-uri',
                 'url' => '../php_Docs/functiiStringuri.php'
            ],
        ]
    ],
    [
        'label' => 'RegEx',     
         'url' => '../php_Docs/regex.php',
    ],
    [
        'label' => 'Manipulare Formulare',
         'url' => '../php_Docs/manipulareFormulare.php'
    ],
    [
        'label' => 'Validare Formulare',
         'url' => '../php_Docs/validareFormulare.php'
    ],
    [
        'label' => 'Avansat PHP',
         'url' => 'chapterTitle'
    ],
    [
        'label' => 'Dată și oră',
         'url' => '../php_Docs/dataSiOra.php'
    ],
    [
        'label' => 'Includere Fișiere',
         'url' => '../php_Docs/includereFisiere.php'
    ],
    [
        'label' => 'Manipulare Fișiere',
         'url' => '../php_Docs/manipulareFisiere.php'
    ],
    [
        'label' => 'Deschidere Fișiere',
         'url' => '../php_Docs/deschidereFisiere.php'
    ],
    [
        'label' => 'Citire Fișiere',
         'url' => '../php_Docs/citireFisiere.php'
    ],
    [
        'label' => 'Scriere Fișiere',
         'url' => '../php_Docs/scriereFisiere.php'
    ],
    [
        'label' => 'Ștergere Fișiere',
         'url' => '../php_Docs/stergereFisiere.php'
    ],
    [
        'label' => 'Încărcare de Fișiere',
         'url' => '../php_Docs/incarcareFisiere.php'
    ],
    [
        'label' => 'Cookie',
         'url' => '../php_Docs/cookie.php'
    ],
    [
        'label' => 'Session',
         'url' => '../php_Docs/session.php'
    ],
    [
        'label' => 'Filtrare',
         'url' => '../php_Docs/filtrare.php'
    ],
    [
        'label' => 'Filtrare Avansată',
         'url' => '../php_Docs/filtrareAvansata.php'
    ],
    [
        'label' => 'JSON',
         'url' => '../php_Docs/json.php'
    ],
    [
        'label' => 'Excepții',
         'url' => '../php_Docs/exceptii.php'
    ],
    [
        'label' => 'OOP PHP',
         'url' => 'chapterTitle'
    ],
    [
        'label' => 'Concepte OOP',
         'url' => '../php_Docs/concepteOOP.php'
    ],
    [
        'label' => 'Clase/Obiecte',
         'url' => '../php_Docs/clase&obiecte.php'
    ],
    [
        'label' => 'Constructor/Destructor',
         'url' => '../php_Docs/constructor&Destructor.php'
    ],
    [
        'label' => 'Specificatori de access',
         'url' => '../php_Docs/specificatoriAcces.php'
    ],
    [
        'label' => 'Moștenire',
         'url' => '../php_Docs/mostenire.php'
    ],
    [
        'label' => 'Constante de clasă',
         'url' => '../php_Docs/constanteClasa.php'
    ],
    [
        'label' => 'Clase Abstracte',
         'url' => '../php_Docs/claseAbstracte.php'
    ],
    [
        'label' => 'Interfață',
         'url' => '../php_Docs/interfata.php'
    ],
    [
        'label' => 'Traits / Trăsături',
         'url' => '../php_Docs/traitsOOP.php'
    ],
    [
        'label' => 'Metode Statice',
         'url' => '../php_Docs/metodeStatice.php'
    ],
    [
        'label' => 'Proprietăți Statice',
         'url' => '../php_Docs/proprietatiStatice.php'
    ],
    [
        'label' => 'Namespaces',
         'url' => '../php_Docs/namespaces.php'
    ],
    [
        'label' => 'Iterabili',
         'url' => '../php_Docs/iterables.php'
    ],
    [
        'label' => 'MySQL DB',
         'url' => 'chapterTitle'
    ],
    [
        'label' => 'Bază de Date',
         'url' => '../php_Docs/bazaDeDate.php'
    ],
    [
        'label' => 'Conectare DB',
         'url' => '../php_Docs/conectareDB.php'
    ],
    [
        'label' => 'Creare DB',
         'url' => '../php_Docs/creareDB.php'
    ],
    [
        'label' => 'Creare Tabel',
         'url' => '../php_Docs/creareTabel.php'
    ],
    [
        'label' => 'Inserare Date Tabel',
         'url' => '../php_Docs/inserareTabel.php'
    ],
    [
        'label' => 'Obține ultimul Id',
         'url' => '../php_Docs/obtineUltimulId.php'
    ],
    [
        'label' => 'Inserare Multiplă',
         'url' => '../php_Docs/inserareMultipla.php'
    ],
    [
        'label' => 'Declarații Pregătite',
         'url' => '../php_Docs/declaratiiPregatite.php'
    ],
    [
        'label' => 'Selectare Date',
         'url' => '../php_Docs/selectareDate.php'
    ],
    [
        'label' => 'Clauza Where',
         'url' => '../php_Docs/clauzaWhere.php'
    ],
    [
        'label' => 'Clauza Order By',
         'url' => '../php_Docs/clauzaOrderBy.php'
    ],
    [
        'label' => 'Declarația Delete',
         'url' => '../php_Docs/declaratiaDelete.php'
    ],
    [
        'label' => 'Declarația Update',
         'url' => '../php_Docs/declaratiaUpdate.php'
    ],
    [
        'label' => 'Limitare Date',
         'url' => '../php_Docs/limitareDate.php'
    ],
];
?>