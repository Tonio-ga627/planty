<?php
function include_style_file() {
    // Inclure le fichier CSS principal
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'include_style_file');

// * Test pour bouton Contact Form 7 NR *//
function enqueue_child_theme_styles() {
    // Inclure le style du thème enfant
    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css', array('main-css'), wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');

// Ajouter une classe au bouton Envoyer du formulaire de Contact Form 7
function ajouter_classe_bouton_contact_form() {
    ?>
    <script type="text/javascript">
        document.addEventListener('wpcf7submit', function(event) {
            if ('envoyer' === event.detail.contactFormId) {
                var boutonEnvoyer = document.querySelector('.wpcf7-submit');
                if (boutonEnvoyer) {
                    boutonEnvoyer.classList.add('bouton1');
                }
            }
        }, false);
    </script>
    <?php
}
add_action('wp_footer', 'ajouter_classe_bouton_contact_form');

function modifier_texte_bouton_envoyer() {
    return 'Envoyer';
}
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<input[^>]+value="Envoyer"[^>]+>/','<input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit" />', $content);
    return $content;
});
add_filter('wpcf7_submit', 'modifier_texte_bouton_envoyer');

// Supprimer l'élément de menu "Admin" s'il existe déjà
function supprimer_menu_admin_existante($items, $args) {
    $items = preg_replace('/<li.*?admin.*?<\/li>/', '', $items);
    return $items;
}
add_filter('wp_nav_menu_items', 'supprimer_menu_admin_existante', 10, 2);

// Fonction pour personnaliser le menu admin
function personnaliser_menu_admin($items, $args) {
    // Ajouter la vérification pour l'emplacement du menu et l'état de connexion de l'utilisateur
    if ($args->theme_location == 'menu-1' && is_user_logged_in()) {
        // Ajouter le lien "Admin" en deuxième position
        $items_array = explode('</li>', $items);
        
        // Insérer le lien "Admin" après le premier élément du tableau
        array_splice($items_array, 1, 0, '<li><a href="' . admin_url() . '">Admin</a></li>');
        
        // Reconstruire la chaîne HTML
        $items = implode('</li>', $items_array);
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'personnaliser_menu_admin', 10, 2);
?>
