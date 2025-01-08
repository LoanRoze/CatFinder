<?php

const AVAILABLE_ROUTES = [
    'lostCat' => [
        'template' => 'lostCatController.php',
        'seo' => [
            'title' => 'Chats Perdus',
            'description' => 'Liste des annonces de chats perdus',
        ],
        'style' => [
            '',
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
            '',
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
            '',
        ],
        'scripts' => [
        ],
    ],
    'legal-mentions' => [
        'template' => 'legalMentionsController.php',
        'seo' => [
            'title' => 'Mentions legales',
            'description' => 'Ceci est une description',
        ],
        'style' => [
            'legal-mentions.css',
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
            'privacy-policy.css',
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
            '',
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
            '',
            '',
        ],
        'scripts' => [
            ''
        ],
    ],
    'deleteFoundCat' => [
        'template' => 'deleteFoundCatController.php',
        'seo' => [
            'title' => 'Supprimer un post',
            'description' => 'Supprimer un post de chat trouvé',
        ],
        'style' => [
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
        ],
        'scripts' => [
        ],
    ],
];

const DEFAULT_ROUTE = AVAILABLE_ROUTES['lostCat'];
