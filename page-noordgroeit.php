<?php
get_header();

$case = array(
    'slug'          => 'noordgroeit',
    'index'         => '03',
    'label'         => 'NOORDGROEIT',
    'eyebrow'       => 'COMMUNITY PLATFORM / WORDPRESS',
    'title'         => 'Noord',
    'title_accent'  => 'groeiT',
    'intro'         => 'Een warm en toegankelijk platform voor bewoners, vrijwilligers en organisaties die samen bouwen aan Tilburg-Noord.',
    'live_url'      => 'https://noordgroeit.nl/',
    'live_label'    => 'Live site',
    'browser_label' => 'noordgroeit.nl',
    'status_label'  => 'LIVE',
    'desktop_image' => 'work/noordgroeit-desktop.webp',
    'desktop_alt'   => 'NoordgroeiT website op desktop',
    'mobile_image'  => 'work/noordgroeit-mobile.webp',
    'mobile_alt'    => 'NoordgroeiT website op mobiel',
    'annotation'    => 'Rust, structuur en ruimte voor de wijk.',
    'tags'          => array('WordPress', 'PHP', 'JavaScript', 'CSS', 'UI / UX', 'Responsive'),
    'facts'         => array(
        array('label' => 'Project', 'value' => 'Communityplatform'),
        array('label' => 'Mijn rol', 'value' => 'Design + development'),
        array('label' => 'Jaar', 'value' => '2026'),
        array('label' => 'Status', 'value' => 'Actief project'),
    ),
    'chapters'      => array(
        array(
            'number' => '01',
            'label'  => 'De uitdaging',
            'title'  => 'Veel initiatieven, één duidelijke ingang.',
            'copy'   => array(
                'NoordgroeiT heeft veel verschillende verhalen, activiteiten en manieren om mee te doen. De uitdaging was om die hoeveelheid informatie overzichtelijk te maken voor een brede doelgroep.',
                'Daarbij moesten NoordgroeiT en NoordbuiTen steeds meer als één digitale omgeving gaan voelen, zonder de herkenbaarheid van het initiatief kwijt te raken.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Mijn aanpak',
            'title'  => 'Eerst structuur, daarna karakter.',
            'copy'   => array(
                'Ik heb de informatiearchitectuur vereenvoudigd, duidelijke routes gemaakt en de belangrijkste onderdelen sneller bereikbaar gemaakt. Daarna kreeg de website een rustige groene visuele richting met veel echte fotografie.',
                'De WordPress-opbouw maakt het mogelijk om nieuws, activiteiten, projecten en praktische informatie verder uit te breiden zonder dat de site onrustig wordt.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'Het resultaat',
            'title'  => 'Een website die de wijk ruimte geeft.',
            'copy'   => array(
                'Het resultaat is een toegankelijk platform dat rustiger leest, beter navigeert en ruimte laat voor de mensen en initiatieven achter NoordgroeiT.',
                'Het project blijft actief in ontwikkeling. Nieuwe onderdelen worden toegevoegd terwijl de visuele en technische basis consistent blijft.',
            ),
        ),
    ),
    'statement'     => 'Een buurtwebsite hoeft niet druk te zijn om levendig te voelen. De mensen en projecten mogen het verhaal dragen.',
    'footer_note'   => 'Hier krijgt Noord vorm.',
);

get_template_part('template-parts/meta-case', null, array('case' => $case));
?>
<?php get_footer(); ?>
