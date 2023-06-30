<?php
  // Array-ul de mai jos reprezinta meniul din stanga al paginii  si butoanele de navigare intre pagini pentru sectiunea de tutoriale PHP 
  // In el se pot adauga capitole si subcapitole, odata adaugat/sters, schimbarile se vor propaga in toata aplicatia

  // Acest array este folosit in: 
  //    sidenavbar.php pentru a genera meniul lateral
  //    next_previous_buttons.php pentru a genera butoanele de urmatorul si anterior capitol pentru o navigare mai usoara in pagina

  // Structura unui item cu si fara submenu 
  //   [
  //     'label' => 'Home', - Titlul elementului din meniu ce va aparea pe pagina 
  //     'url' => 'tut_PHP.php' - fisierul php catre care vei fi redirectionat
  //   ], 
  //   [
  //     'label' => 'Structuri repetitive', - Titlul elementului din meniu ce apare pe pagina si ascunde celelalte elemente din sub_menu pana se face hover
  //     'url' => 'structuriRepetitive.php', - fisierul php catre care vei fi redirectionat
  //     'sub_menu' => [ - array-ul de submeniuri - lista de submeniuri poate fi extinsa nelimitat.
  //         [
  //             'label' => 'While', - Titlul elementului din sub_menu ce apare pe pagina cand se face hover la elementul de pe acelasi nivel cu 'sub_menu'
  //             'url' => 'while.php' - fisierul php catre care vei fi redirectionat
  //         ],
  //         [
  //             'label' => 'Break / Continue',
  //             'url' => 'break&continue.php'
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
        'url' => 'tut_PHP.php'
    ], 
    [
        'label' => 'Introducere',
        'url' => 'introducere.php'
    ],
    [
        'label' => 'Instalare PHP',
        'url' => 'instalarePHP.php'
    ],
    [
        'label' => 'Sintaxă',
        'url' => 'sintaxa.php'
    ],
    [
        'label' => 'Comentarii',
        'url' => 'comentarii.php'
    ],
    [
        'label' => 'Variabile',
        'url' => 'variabile.php',
    ],
    [
        'label' => 'Domeniul variabilelor',
        'url' => 'domeniulVariabilelor.php',
    ],
    [
        'label' => 'Echo / Print',
        'url' => 'echo&print.php',
    ],
    [
        'label' => 'Tipuri de date',
        'url' => 'tipuriDate.php',
    ],
    [
        'label' => 'Constante',
        'url' => 'constante.php',
    ],
    [
        'label' => 'Operatori',
        'url' => 'operatori.php',
    ],
    [
        'label' => 'If else',
        'url' => 'ifElse.php',
    ],
    [
        'label' => 'Switch',
        'url' => 'switch.php',
    ],
    [
        'label' => 'Structuri Repetitive',
        'url' => 'structuriRepetitive.php',
        'sub_menu' => [
            [
                'label' => 'While',
                'url' => 'while.php'
            ],
            [
                'label' => 'Do While',
                'url' => 'doWhile.php'
            ],
            [
                'label' => 'For',
                'url' => 'for.php'
            ],
            [
                'label' => 'Foreach',
                'url' => 'foreach.php'
            ],
            [
                'label' => 'Break / Continue',
                'url' => 'break&continue.php'
            ]
        ]
    ],
    [
        'label' => 'Funcții',
        'url' => 'functii.php',
    ],
    [
        'label' => 'Array-uri',     
        'url' => 'array.php',
        'sub_menu' => [
            [
                'label' => 'Array Indexat',
                'url' => 'arrayIndexat.php'
            ],
            [
                'label' => 'Array Asociativ',
                'url' => 'arrayAsociativ.php'
            ],
            [
                'label' => 'Array Multidimensional',
                'url' => 'arrayMultidimensional.php'
            ],
            [
                'label' => 'Sortare Array-uri',
                'url' => 'sortareArray.php'
            ],
            [
                'label' => 'Funcții Array-uri',
                'url' => 'functiiArray.php'
            ]
        ]
    ],
    [
        'label' => 'Superglobals',     
        'url' => 'superglobals.php',
        'sub_menu' => [
            [
                'label' => '$GLOBALS',
                'url' => 'superglobals_globals.php'
            ],
            [
                'label' => '$_SERVER',
                'url' => 'superglobals_server.php'
            ],
            [
                'label' => '$_REQUEST',
                'url' => 'superglobals_request.php'
            ],
            [
                'label' => '$_POST',
                'url' => 'superglobals_post.php'
            ],
            [
                'label' => '$_GET',
                'url' => 'superglobals_get.php'
            ]
        ]
    ],
    [
        'label' => 'String',     
        'url' => 'string.php',
        'sub_menu' => [
            [
                'label' => 'Funcții string-uri',
                'url' => 'functiiStringuri.php'
            ],
        ]
    ],
    [
        'label' => 'RegEx',     
        'url' => 'regex.php',
    ],
    [
        'label' => 'Manipulare Formulare',
        'url' => 'manipulareFormulare.php'
    ],
    [
        'label' => 'Validare Formulare',
        'url' => 'validareFormulare.php'
    ],
    [
        'label' => 'Avansat PHP',
        'url' => 'chapterTitle'
    ],
    [
        'label' => 'Dată și oră',
        'url' => 'dataSiOra.php'
    ],
    [
        'label' => 'Includere Fișiere',
        'url' => 'includereFisiere.php'
    ],
    [
        'label' => 'Manipulare Fișiere',
        'url' => 'manipulareFisiere.php'
    ],
    [
        'label' => 'Deschidere Fișiere',
        'url' => 'deschidereFisiere.php'
    ],
    [
        'label' => 'Citire Fișiere',
        'url' => 'citireFisiere.php'
    ],
    [
        'label' => 'Scriere Fișiere',
        'url' => 'scriereFisiere.php'
    ],
    [
        'label' => 'Ștergere Fișiere',
        'url' => 'stergereFisiere.php'
    ],
    [
        'label' => 'Încărcare de Fișiere',
        'url' => 'incarcareFisiere.php'
    ],
    [
        'label' => 'Cookie',
        'url' => 'cookie.php'
    ],
    [
        'label' => 'Session',
        'url' => 'session.php'
    ],
    [
        'label' => 'Filtrare',
        'url' => 'filtrare.php'
    ],
    [
        'label' => 'Filtrare Avansată',
        'url' => 'filtrareAvansata.php'
    ],
    [
        'label' => 'JSON',
        'url' => 'json.php'
    ],
    [
        'label' => 'Excepții',
        'url' => 'exceptii.php'
    ],
    [
        'label' => 'OOP PHP',
        'url' => 'chapterTitle'
    ],
    [
        'label' => 'Concepte OOP',
        'url' => 'concepteOOP.php'
    ],
    [
        'label' => 'Clase/Obiecte',
        'url' => 'clase&obiecte.php'
    ],
    [
        'label' => 'Constructor/Destructor',
        'url' => 'constructor&Destructor.php'
    ],
    [
        'label' => 'Specificatori de access',
        'url' => 'specificatoriAcces.php'
    ],
    [
        'label' => 'Mostenire',
        'url' => 'mostenire.php'
    ],
    [
        'label' => 'Constante de clasă',
        'url' => 'constanteClasa.php'
    ],
    [
        'label' => 'Clase Abstracte',
        'url' => 'claseAbstracte.php'
    ],
    [
        'label' => 'Interfață',
        'url' => 'interfata.php'
    ],
    [
        'label' => 'Traits / Trasaturi',
        'url' => 'traitsOOP.php'
    ],
    [
        'label' => 'Metode Statice',
        'url' => 'metodeStatice.php'
    ],
    [
        'label' => 'Proprietăți Statice',
        'url' => 'proprietatiStatice.php'
    ],
    [
        'label' => 'Namespaces',
        'url' => 'namespaces.php'
    ],
    [
        'label' => 'Iterabili',
        'url' => 'iterables.php'
    ],
    [
        'label' => 'MySQL DB',
        'url' => 'chapterTitle'
    ],
    [
        'label' => 'Bază de Date',
        'url' => 'bazaDeDate.php'
    ],
    [
        'label' => 'Conectare DB',
        'url' => 'conectareDB.php'
    ],
    [
        'label' => 'Creare DB',
        'url' => 'creareDB.php'
    ],
    [
        'label' => 'Creare Tabel',
        'url' => 'creareTabel.php'
    ],
    [
        'label' => 'Inserare Date Tabel',
        'url' => 'inserareTabel.php'
    ],
    [
        'label' => 'Obtine ultimul Id',
        'url' => 'obtineUltimulId.php'
    ],
    [
        'label' => 'Inserare Multipla',
        'url' => 'inserareMultipla.php'
    ],
    [
        'label' => 'Declarații Pregătite',
        'url' => 'declaratiiPregatite.php'
    ],
    [
        'label' => 'Selectare Date',
        'url' => 'selectareDate.php'
    ],
    [
        'label' => 'Clauza Where',
        'url' => 'clauzaWhere.php'
    ],
    [
        'label' => 'Clauza Order By',
        'url' => 'clauzaOrderBy.php'
    ],
    [
        'label' => 'Declarația Delete',
        'url' => 'declaratiaDelete.php'
    ],
    [
        'label' => 'Declarația Update',
        'url' => 'declaratiaUpdate.php'
    ],
    [
        'label' => 'Limitare Date',
        'url' => 'limitareDate.php'
    ],
    [
        'label' => 'Diverse',
        'url' => 'chapterTitle'
    ],
    [
        'label' => 'Products',     
        'url' => '#',
        'sub_menu' => [
            [
                'label' => 'Product 1',
                'url' => '#.'
            ],
            [
                'label' => 'Product 2',
                'url' => '#'
            ],
            [
                'label' => 'Product 3',
                'url' => '#'
            ]
        ]
    ],
    [
        'label' => 'Services',
        'url' => '#',
        'sub_menu' => [
            [
                'label' => 'Service 1',
                'url' => '#'
            ],
            [
                'label' => 'Service 2',
                'url' => '#'
            ],
            [
                'label' => 'Service 3',
                'url' => '#'
            ]
        ]
    ],
    [
        'label' => 'Contact',
        'url' => '/contact'
    ],
];
?>