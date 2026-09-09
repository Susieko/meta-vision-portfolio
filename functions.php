<?php

function susan_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'susan_portfolio_setup');


function susan_portfolio_assets() {

    $theme_version = wp_get_theme()->get('Version');

    $css_file = get_template_directory() .
        '/assets/css/main.css';

    $js_file = get_template_directory() .
        '/assets/js/main.js';

    $css_version = file_exists($css_file)
        ? filemtime($css_file)
        : $theme_version;

    $js_version = file_exists($js_file)
        ? filemtime($js_file)
        : $theme_version;

    wp_enqueue_style(
        'susan-portfolio-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Manrope:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'susan-portfolio-main',
        get_template_directory_uri() .
            '/assets/css/main.css',
        array('susan-portfolio-fonts'),
        $css_version
    );

    wp_enqueue_script(
        'susan-portfolio-main',
        get_template_directory_uri() .
            '/assets/js/main.js',
        array(),
        $js_version,
        array(
            'strategy'  => 'defer',
            'in_footer' => true,
        )
    );
}

add_action(
    'wp_enqueue_scripts',
    'susan_portfolio_assets'
);


/* =========================================================
   SITE IDENTITY AND BASIC SEO
   ========================================================= */

function susan_portfolio_document_title($title) {

    if (is_404()) {
        return 'Pagina niet gevonden - Susan Aben';
    }

    if (is_front_page()) {
        return 'Susan Aben - Creative Designer & Developer';
    }

    if (is_page('werk')) {
        return 'Werk - Susan Aben';
    }

    if (is_page('over-mij')) {
        return 'Over mij - Susan Aben';
    }

    if (is_page('diensten')) {
        return 'Diensten - Susan Aben';
    }

    if (is_page('contact')) {
        return 'Contact - Susan Aben';
    }


    if (is_page('noordgroeit')) {
        return 'NoordgroeiT - Case study door Susan Aben';
    }

    if (is_page('ehbo-petrus-donders')) {
        return 'EHBO Petrus Donders - Case study door Susan Aben';
    }

    if (is_page('cartnip')) {
        return 'Cartnip - WooCommerce case study door Susan Aben';
    }

    if (is_page('meta-vision')) {
        return 'Meta Vision - Portfolio case study door Susan Aben';
    }

    return $title;
}

add_filter(
    'pre_get_document_title',
    'susan_portfolio_document_title'
);


function susan_portfolio_meta_description() {

    if (is_404()) {
        return 'Deze pagina kon niet worden gevonden. Bekijk het portfolio van Susan Aben.';
    }

    if (is_front_page()) {
        return 'Portfolio van Susan Aben, creative designer en developer uit Tilburg.';
    }

    if (is_page('werk')) {
        return 'Een selectie digitale projecten waarin strategie, webdesign en development samenkomen.';
    }

    if (is_page('over-mij')) {
        return 'Maak kennis met Susan Aben: creative designer en developer met aandacht voor karakter, helderheid en gebruiksvriendelijkheid.';
    }

    if (is_page('diensten')) {
        return 'Webdesign, branding en webdevelopment door Susan Aben, met aandacht voor sterke visuele keuzes en gebruiksvriendelijke digitale ervaringen.';
    }

    if (is_page('contact')) {
        return 'Neem contact op met Susan Aben voor webdesign, development of een nieuw digitaal project.';
    }


    if (is_page('noordgroeit')) {
        return 'Bekijk de NoordgroeiT case study: een warm en toegankelijk digitaal platform voor Tilburg-Noord.';
    }

    if (is_page('ehbo-petrus-donders')) {
        return 'Bekijk de redesign-case van de website voor EHBO-vereniging Petrus Donders.';
    }

    if (is_page('cartnip')) {
        return 'Bekijk de Cartnip case study: een WooCommerce webshopconcept waarin webdesign, development en een moderne front-end workflow samenkomen.';
    }

    if (is_page('meta-vision')) {
        return 'Bekijk de Meta Vision case study: het creatieve portfolio van Susan Aben waarin design, development en motion samenkomen.';
    }

    return 'Portfolio van Susan Aben, creative designer en developer uit Tilburg.';
}


function susan_portfolio_head_metadata() {

    $description = susan_portfolio_meta_description();
    $title       = wp_get_document_title();
    $url         = is_singular()
        ? get_permalink()
        : home_url('/');

    $image = get_template_directory_uri() .
        '/assets/images/social-preview.jpg';

    $favicon = get_template_directory_uri() .
        '/assets/images/favicon.svg';

    $favicon_32 = get_template_directory_uri() .
        '/assets/images/favicon-32.png';

    $apple_touch_icon = get_template_directory_uri() .
        '/assets/images/apple-touch-icon.png';

    echo '<meta name="description" content="' .
        esc_attr($description) .
        '">' . "\n";

    echo '<meta name="theme-color" content="#020B12">' . "\n";

    if (! has_site_icon()) {
        echo '<link rel="icon" type="image/svg+xml" href="' .
            esc_url($favicon) .
            '">' . "\n";

        echo '<link rel="icon" type="image/png" sizes="32x32" href="' .
            esc_url($favicon_32) .
            '">' . "\n";

        echo '<link rel="apple-touch-icon" sizes="180x180" href="' .
            esc_url($apple_touch_icon) .
            '">' . "\n";
    }

    echo '<meta property="og:locale" content="nl_NL">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";

    echo '<meta property="og:title" content="' .
        esc_attr($title) .
        '">' . "\n";

    echo '<meta property="og:description" content="' .
        esc_attr($description) .
        '">' . "\n";

    echo '<meta property="og:url" content="' .
        esc_url($url) .
        '">' . "\n";

    echo '<meta property="og:site_name" content="Susan Aben Portfolio">' .
        "\n";

    echo '<meta property="og:image" content="' .
        esc_url($image) .
        '">' . "\n";

    echo '<meta property="og:image:width" content="1200">' . "\n";
    echo '<meta property="og:image:height" content="630">' . "\n";
    echo '<meta property="og:image:type" content="image/jpeg">' . "\n";
    echo '<meta property="og:image:alt" content="Susan Aben creative designer and developer portfolio">' . "\n";

    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' .
        esc_attr($title) .
        '">' . "\n";
    echo '<meta name="twitter:description" content="' .
        esc_attr($description) .
        '">' . "\n";
    echo '<meta name="twitter:image" content="' .
        esc_url($image) .
        '">' . "\n";
}

add_action(
    'wp_head',
    'susan_portfolio_head_metadata',
    4
);

/* =========================================================
   PERFORMANCE
   ========================================================= */

/* Connect to Google Fonts earlier */

function susan_portfolio_resource_hints(
    $urls,
    $relation_type
) {

    if ('preconnect' === $relation_type) {

        $urls[] = 'https://fonts.googleapis.com';

        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }

    return $urls;
}

add_filter(
    'wp_resource_hints',
    'susan_portfolio_resource_hints',
    10,
    2
);


/* Preload the important homepage portrait */

function susan_portfolio_preload_hero() {

    if (! is_front_page()) {
        return;
    }

    $hero = get_template_directory_uri() .
        '/assets/images/susan-hero.webp';

    echo '<link rel="preload" as="image" href="' .
        esc_url($hero) .
        '" fetchpriority="high">' .
        "\n";
}

add_action(
    'wp_head',
    'susan_portfolio_preload_hero',
    1
);


/* Remove WordPress emoji assets when they are not needed */

function susan_portfolio_disable_emojis() {

    remove_action(
        'wp_head',
        'print_emoji_detection_script',
        7
    );

    remove_action(
        'wp_print_styles',
        'print_emoji_styles'
    );

    remove_action(
        'admin_print_scripts',
        'print_emoji_detection_script'
    );

    remove_action(
        'admin_print_styles',
        'print_emoji_styles'
    );

    remove_filter(
        'the_content_feed',
        'wp_staticize_emoji'
    );

    remove_filter(
        'comment_text_rss',
        'wp_staticize_emoji'
    );

    remove_filter(
        'wp_mail',
        'wp_staticize_emoji_for_email'
    );
}

add_action(
    'init',
    'susan_portfolio_disable_emojis'
);

/* =========================================================
   STRUCTURED DATA
   ========================================================= */

function susan_portfolio_structured_data() {

    $home_url  = home_url('/');
    $person_id = trailingslashit($home_url) . '#susan-aben';
    $website_id = trailingslashit($home_url) . '#website';

    $portrait = get_template_directory_uri() .
        '/assets/images/about/susan-about.webp';

    $schema = array(
        '@context' => 'https://schema.org',

        '@graph' => array(

            array(
                '@type' => 'Person',
                '@id'   => $person_id,

                'name'     => 'Susan Aben',
                'url'      => $home_url,
                'image'    => $portrait,
                'jobTitle' => 'Creative Designer & Developer',

                'address' => array(
                    '@type'           => 'PostalAddress',
                    'addressLocality' => 'Tilburg',
                    'addressCountry'  => 'NL',
                ),

                'knowsAbout' => array(
                    'Webdesign',
                    'WordPress development',
                    'UX/UI design',
                    'Digital strategy',
                    'Frontend development',
                    'Toegankelijke websites',
                ),

                'knowsLanguage' => array(
                    'Nederlands',
                    'Engels',
                ),
            ),

            array(
                '@type' => 'WebSite',
                '@id'   => $website_id,

                'url'        => $home_url,
                'name'       => 'Susan Aben Portfolio',
                'inLanguage' => 'nl-NL',

                'creator' => array(
                    '@id' => $person_id,
                ),
            ),
        ),
    );

    echo '<script type="application/ld+json">' .
        wp_json_encode(
            $schema,
            JSON_UNESCAPED_SLASHES |
            JSON_UNESCAPED_UNICODE
        ) .
        '</script>' .
        "\n";
}

add_action(
    'wp_head',
    'susan_portfolio_structured_data',
    30
);



/* =========================================================
   CONTACT FORM - WORDPRESS NATIVE MAIL
   ========================================================= */

function susan_portfolio_contact_recipient() {

    $email = apply_filters(
        'susan_portfolio_contact_recipient',
        'Lily-SA@hotmail.com'
    );

    return sanitize_email($email);
}


function susan_portfolio_handle_contact_form() {

    if (
        ! isset($_SERVER['REQUEST_METHOD']) ||
        'POST' !== strtoupper(
            sanitize_text_field(
                wp_unslash($_SERVER['REQUEST_METHOD'])
            )
        )
    ) {
        wp_send_json_error(
            array(
                'message' => 'Invalid request method.',
            ),
            405
        );
    }

    $nonce = isset($_POST['contact_nonce'])
        ? sanitize_text_field(
            wp_unslash($_POST['contact_nonce'])
        )
        : '';

    if (
        ! wp_verify_nonce(
            $nonce,
            'susan_portfolio_contact'
        )
    ) {
        wp_send_json_error(
            array(
                'message' => 'Security check failed.',
            ),
            403
        );
    }

    /* Honeypot: real visitors leave this empty. */
    if (! empty($_POST['botcheck'])) {
        wp_send_json_success();
    }

    $name = isset($_POST['name'])
        ? sanitize_text_field(
            wp_unslash($_POST['name'])
        )
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(
            wp_unslash($_POST['email'])
        )
        : '';

    $project = isset($_POST['project'])
        ? sanitize_text_field(
            wp_unslash($_POST['project'])
        )
        : '';

    $message = isset($_POST['message'])
        ? sanitize_textarea_field(
            wp_unslash($_POST['message'])
        )
        : '';

    if (
        '' === $name ||
        ! is_email($email) ||
        '' === $project ||
        '' === $message
    ) {
        wp_send_json_error(
            array(
                'message' => 'Please complete all required fields.',
            ),
            422
        );
    }

    if (
        strlen($name) > 120 ||
        strlen($email) > 254 ||
        strlen($project) > 120 ||
        strlen($message) > 6000
    ) {
        wp_send_json_error(
            array(
                'message' => 'One or more fields are too long.',
            ),
            422
        );
    }

    $allowed_projects = array(
        'New website',
        'Website redesign',
        'Visual identity',
        'WordPress support',
        'Collaboration',
        'Something else',
    );

    if (! in_array($project, $allowed_projects, true)) {
        wp_send_json_error(
            array(
                'message' => 'Invalid project type.',
            ),
            422
        );
    }

    $recipient = susan_portfolio_contact_recipient();

    if (! is_email($recipient)) {
        wp_send_json_error(
            array(
                'message' => 'Contact recipient is not configured.',
            ),
            500
        );
    }

    $subject = sprintf(
        'Portfolio enquiry: %s - %s',
        $project,
        $name
    );

    $body = implode(
        "\n",
        array(
            'Nieuw bericht via het portfolio',
            '',
            'Naam: ' . $name,
            'E-mail: ' . $email,
            'Onderwerp: ' . $project,
            '',
            'Bericht:',
            $message,
        )
    );

    $headers = array(
        sprintf(
            'Reply-To: %s <%s>',
            $name,
            $email
        ),
    );

    $sent = wp_mail(
        $recipient,
        $subject,
        $body,
        $headers
    );

    if (! $sent) {
        wp_send_json_error(
            array(
                'message' => 'WordPress could not send the message.',
            ),
            500
        );
    }

    wp_send_json_success(
        array(
            'message' => 'Message sent.',
        )
    );
}

add_action(
    'wp_ajax_susan_portfolio_send_contact',
    'susan_portfolio_handle_contact_form'
);

add_action(
    'wp_ajax_nopriv_susan_portfolio_send_contact',
    'susan_portfolio_handle_contact_form'
);


/* =========================================================
   LIGHTWEIGHT SECURITY HARDENING
   ========================================================= */

/* Safe browser security headers */

function susan_portfolio_security_headers($headers) {

    $headers['X-Content-Type-Options'] = 'nosniff';

    $headers['X-Frame-Options'] = 'SAMEORIGIN';

    $headers['Referrer-Policy'] =
        'strict-origin-when-cross-origin';

    $headers['Permissions-Policy'] =
        'camera=(), microphone=(), geolocation=()';

    unset($headers['X-Pingback']);

    return $headers;
}

add_filter(
    'wp_headers',
    'susan_portfolio_security_headers'
);


/* Remove the visible WordPress version generator */

remove_action(
    'wp_head',
    'wp_generator'
);

add_filter(
    'the_generator',
    '__return_empty_string'
);


/*
 * This portfolio does not use the WordPress mobile app,
 * Jetpack remote publishing or other XML-RPC publishing.
 */

add_filter(
    'xmlrpc_enabled',
    '__return_false'
);


/* Disable unused pingback methods */

function susan_portfolio_disable_pingbacks($methods) {

    unset($methods['pingback.ping']);
    unset($methods['pingback.extensions.getPingbacks']);

    return $methods;
}

add_filter(
    'xmlrpc_methods',
    'susan_portfolio_disable_pingbacks'
);

