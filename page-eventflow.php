<?php
get_header();

$case = array(
    'slug'          => 'eventflow',
    'index'         => '04',
    'label'         => 'EVENTFLOW',
    'eyebrow'       => 'EVENT DISCOVERY / REACT',
    'title'         => 'Event',
    'title_accent'  => 'Flow',
    'intro'         => 'Een responsive event discovery app voor conventions, fantasy fairs, gaming, cosplay en collectibles — ontworpen als volgende stap van websites naar applicatie-interfaces.',
    'live_url'      => 'https://eventflow-gamma-eight.vercel.app/',
    'live_label'    => 'Live demo',
    'browser_label' => 'EventFlow · live demo',
    'status_label'  => 'LIVE DEMO',
    'desktop_image' => 'projects/eventflow-preview.png',
    'desktop_alt'   => 'EventFlow event discovery app op desktop',
    'mobile_image'  => 'projects/eventflow-mobile.png',
    'mobile_alt'    => 'EventFlow event discovery app op mobiel',
    'annotation'    => 'Ontdekken, filteren en bewaren zonder de interface zwaar te maken.',
    'tags'          => array(
        'React',
        'TypeScript',
        'Tailwind CSS',
        'Vite',
        'Motion',
        'Responsive'
    ),
    'facts'         => array(
        array(
            'label' => 'Project',
            'value' => 'Event discovery app'
        ),
        array(
            'label' => 'Mijn rol',
            'value' => 'UI design + front-end'
        ),
        array(
            'label' => 'Jaar',
            'value' => '2026'
        ),
        array(
            'label' => 'Status',
            'value' => 'Portfolio project'
        ),
    ),
    'chapters'      => array(
        array(
            'number' => '01',
            'label'  => 'De uitdaging',
            'title'  => 'Van losse events naar een interface die uitnodigt om te ontdekken.',
            'copy'   => array(
                'EventFlow begon als een project om verder te gaan dan traditionele websites en meer ervaring op te doen met application-style interfaces in React.',
                'De uitdaging was om zoeken, filteren, bewaren en eventinformatie samen te brengen zonder dat de interface druk of technisch aanvoelde.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Mijn aanpak',
            'title'  => 'Componenten bouwen zonder de visuele ervaring kwijt te raken.',
            'copy'   => array(
                'Ik heb de interface opgebouwd uit herbruikbare React-componenten en TypeScript gebruikt om data en component props duidelijk te structureren.',
                'Naast de technische opbouw lag de focus op responsive gedrag, loading states, micro-interacties en kleine details die de app prettiger laten aanvoelen tijdens gebruik.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'Het resultaat',
            'title'  => 'Een moderne front-end app met meer diepte dan een oefenproject.',
            'copy'   => array(
                'Het resultaat is een responsive event discovery app waarin gebruikers events kunnen zoeken, filteren, bekijken en bewaren binnen één consistente interface.',
                'Voor mij was EventFlow vooral een belangrijke stap richting modern component-based front-end development met React, TypeScript en Tailwind CSS.',
            ),
        ),
    ),
    'statement'     => 'Een goede interface laat de techniek op de achtergrond verdwijnen en maakt ontdekken vanzelfsprekend.',
    'footer_note'   => 'Find your next adventure.',
);

get_template_part(
    'template-parts/meta-case',
    null,
    array('case' => $case)
);
?>

<?php get_footer(); ?>