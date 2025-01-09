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
            'lostCat.css'
        ],
        'scripts' => [
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
        ],
        'scripts' => [
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
        ],
        'scripts' => [
            'mapManager.js'
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
    'postFoundCat' => [
        'template' => 'postFoundCatController.php',
        'seo' => [
            'title' => 'Poster une annonce',
            'description' => 'Poster une annonce de chat retrouvé',
        ],
        'style' => [
            'common-style.css',
        ],
        'scripts' => [
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
        ],
        'scripts' => [
        ],
    ],
    'deleteFoundCat' => [
        'template' => 'deleteFoundCatController.php',
        'seo' => [
            'title' => 'Supprimer un post',
            'description' => 'Supprimer un post de chat trouvé',
        ],
        'style' => [
            'common-style.css'
        ],
        'scripts' => [
        ],
    ],
    'deleteLostCat' => [
        'template' => 'deleteLostCatController.php',
        'seo' => [
            'title' => 'Supprimer un post',
            'description' => 'Supprimer un post de chat perdu',
        ],
        'style' => [
            'common-style.css'
        ],
        'scripts' => [
        ],
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['lostCat'];
