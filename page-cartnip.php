<?php
get_header();

$case = array(
    'slug'          => 'cartnip',
    'index'         => '02',
    'label'         => 'CARTNIP',
    'eyebrow'       => 'WOOCOMMERCE / CONCEPT PROJECT',
    'title'         => 'Cart',
    'title_accent'  => 'nip',
    'intro'         => 'Een speels WooCommerce-concept waarin kattenwelzijn, e-commerce en een serieuzere front-end workflow samenkomen.',
    'live_url'      => 'https://cartnip.mr-lily.workers.dev/',
    'live_label'    => 'Live demo',
    'browser_label' => 'cartnip / demo',
    'status_label'  => 'DEMO',
    'desktop_image' => 'work/cartnip-desktop.webp',
    'desktop_alt'   => 'Cartnip webshop op desktop',
    'mobile_image'  => 'work/cartnip-mobile.webp',
    'mobile_alt'    => 'Cartnip webshop op mobiel',
    'annotation'    => 'Approved by management. 🐾',
    'tags'          => array('WordPress', 'WooCommerce', 'SCSS', 'JavaScript', 'Git', 'UI / UX'),
    'facts'         => array(
        array('label' => 'Project', 'value' => 'WooCommerce concept'),
        array('label' => 'Mijn rol', 'value' => 'Branding + build'),
        array('label' => 'Jaar', 'value' => '2026'),
        array('label' => 'Status', 'value' => 'Portfolio demo'),
    ),
    'chapters'      => array(
        array(
            'number' => '01',
            'label'  => 'Het doel',
            'title'  => 'Een leerproject dat als echt merk moest voelen.',
            'copy'   => array(
                'Cartnip begon als manier om WooCommerce beter te leren. In plaats van een kale oefenshop heb ik er een volledig concept van gemaakt met een eigen identiteit, inhoud en duidelijke productcategorieën.',
                'Het uitgangspunt werd kattenwelzijn. De shop verkoopt niet alleen producten, maar legt ook uit waarom spelen, krabben, slapen en passende voeding belangrijk zijn.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Development',
            'title'  => 'Van losse CSS naar een bewustere workflow.',
            'copy'   => array(
                'Binnen het custom WordPress theme werkte ik met WooCommerce, PHP, JavaScript en SCSS. Git en GitHub werden onderdeel van de normale workflow.',
                'Met npm, Node.js en Gulp automatiseerde ik het compileren van SCSS. Daardoor werd Cartnip ook een oefening in projectstructuur, versiebeheer en beter onderhoudbare front-end code.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'Het resultaat',
            'title'  => 'Een webshop die meer laat zien dan een productgrid.',
            'copy'   => array(
                'De uiteindelijke demo combineert e-commerce met editorial content en een speelse visuele stijl. Desktop en mobiel zijn als één ervaring ontworpen.',
                'Voor mij laat het project vooral groei zien: van visueel bouwen naar bewuster nadenken over tooling, structuur en hoe een webshop technisch in elkaar zit.',
            ),
        ),
    ),
    'statement'     => 'Een portfolio-project mag speels zijn en tegelijk serieus laten zien hoe je technisch groeit.',
    'footer_note'   => 'Built for cats. Tested by management.',
);

get_template_part('template-parts/meta-case', null, array('case' => $case));
?>
<?php get_footer(); ?>
