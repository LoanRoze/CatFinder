<?php

const AVAILABLE_ROUTES = [
    'lostCat' => [
        'template' => 'lostCatController.php',
        'seo' => [
            'title' => 'Chats Perdus',
            'description' => 'Liste des annonces de chats perdus',
        ],
        'style' => [
            'layouts/lostCat.css',
            'components/cards.css',
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
            'layouts/foundCat.css',
            'components/cards.css',
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
            'layouts/login.css',
            'components/toast.css',
        ],
        'scripts' => [
            'alertManager.js',
        ],
    ],
    'register' => [
        'template' => 'registerController.php',
        'seo' => [
            'title' => 'Créer un compte',
            'description' => 'Page créer un compte',
        ],
        'style' => [
            'layouts/login.css',
            'components/toast.css',
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
            'layouts/postAnnoncement.css',
            'components/toast.css',
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
            'layouts/postLostCat.css',
            'components/toast.css',
        ],
        'scripts' => [
            'alertManager.js',
            'mapManager.js',
            'mapForm.js',
        ],
    ],
    'postLostCat' => [
        'template' => 'postLostCatController.php',
        'seo' => [
            'title' => 'Poster une annonce',
            'description' => 'Poster une annonce de chat perdu',
        ],
        'style' => [
            'layouts/postLostCat.css',
            'components/toast.css'
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
            'layouts/foundCat.css',
            'layouts/lostCat.css',
            'components/toast.css',
            'components/cards.css',
        ],
        'scripts' => [
            'alertManager.js',
        ],
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['lostCat'];