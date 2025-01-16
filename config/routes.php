<?php

const AVAILABLE_ROUTES = [
    'lostCat' => [
        'template' => 'lostCatController.php',
        'seo' => [
            'title' => 'Chats Perdus',
            'description' => 'Liste des annonces de chats perdus',
        ],
        'style' => [
            'common-style.css',
            'lostCat.css',
        ],
        'scripts' => [
            'contactpopupManager.js',
        ],
    ],
    'foundCat' => [
        'template' => 'foundCatController.php',
        'seo' => [
            'title' => 'Chats Trouvés',
            'description' => 'Liste de toutes les annonces de chats trouvés',
        ],
        'style' => [
            'common-style.css',
            'foundCat.css'
        ],
        'scripts' => [
            'popupManager.js',
        ],
    ],
    'login' => [
        'template' => 'loginController.php',
        'seo' => [
            'title' => 'Connexion',
            'description' => 'Page connexion',
        ],
        'style' => [
            'common-style.css',
            'login.css',
            'toast.css',
        ],
        'scripts' => [
            'alertManager.js',
            'mapManager.js'
        ],
    ],
    'register' => [
        'template' => 'registerController.php',
        'seo' => [
            'title' => 'Créer un compte',
            'description' => 'Page créer un compte',
        ],
        'style' => [
            'common-style.css',
            'login.css',
            'toast.css',
        ],
        'scripts' => [
            'alertManager.js',
        ],
    ],
    'legal-mentions' => [
        'template' => 'legalMentionsController.php',
        'seo' => [
            'title' => 'Mentions legales',
            'description' => 'Ceci est une description',
        ],
        'style' => [
            'common-style.css',
        ],
        'scripts' => [
        ],
    ],
    'privacy-policy' => [
        'template' => 'privacyPolicyController.php',
        'seo' => [
            'title' => 'Politique de Confidentialité',
            'description' => 'Ceci est une description',
        ],
        'style' => [
            'common-style.css',
        ],
        'scripts' => [
        ],
    ],
    'postAnnoncement' => [
        'template' => 'postAnnoncementController.php',
        'seo' => [
            'title' => 'Publier une annonce',
        ],
        'style' => [
            'common-style.css',
            'postAnnoncement.css',
            'toast.css',
        ],
        'scripts' => [
            'alertManager.js',
        ],
    ],
    'postFoundCat' => [
        'template' => 'postFoundCatController.php',
        'seo' => [
            'title' => 'Poster une annonce',
            'description' => 'Poster une annonce de chat retrouvé',
        ],
        'style' => [
            'common-style.css',
            'postLostCat.css',
            'toast.css',
        ],
        'scripts' => [
            'alertManager.js',
            'uploadfileManager.js',
            'mapManager.js',
        ],
    ],
    'postLostCat' => [
        'template' => 'postLostCatController.php',
        'seo' => [
            'title' => 'Poster une annonce',
            'description' => 'Poster une annonce de chat perdu',
        ],
        'style' => [
            'common-style.css',
            'postLostCat.css',
            'toast.css'
        ],
        'scripts' => [
            'uploadfileManager.js',
            'alertManager.js',
        ],
    ],
    'yourposts' => [
        'template' => 'yourpostsController.php',
        'seo' => [
            'title' => 'Vos Publications',
            'description' => 'Vos publications',
        ],
        'style' => [
            'common-style.css',
            'toast.css',
        ],
        'scripts' => [
            'alertManager.js',
        ],
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['lostCat'];