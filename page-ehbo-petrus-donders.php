<?php
get_header();

$case = array(
    'slug'          => 'ehbo',
    'index'         => '01',
    'label'         => 'EHBO PETRUS DONDERS',
    'eyebrow'       => 'WEBSITE REDESIGN / VERENIGING',
    'title'         => 'EHBO Petrus',
    'title_accent'  => 'Donders',
    'intro'         => 'Een heldere en toegankelijke redesign voor een EHBO-vereniging met veel informatie, opleidingen en praktische formulieren.',
    'live_url'      => 'https://ehbo-petrus-donders.mr-lily.workers.dev/',
    'live_label'    => 'Live demo',
    'browser_label' => 'ehbo-petrus-donders / preview',
    'status_label'  => 'DEMO',
    'desktop_image' => 'work/ehbo-desktop.webp',
    'desktop_alt'   => 'Nieuwe EHBO Petrus Donders website op desktop',
    'mobile_image'  => 'work/ehbo-mobile.webp',
    'mobile_alt'    => 'Nieuwe EHBO Petrus Donders website op mobiel',
    'annotation'    => 'Helder wanneer het ertoe doet.',
    'tags'          => array('WordPress', 'PHP', 'JavaScript', 'CSS', 'Responsive', 'UX / UI'),
    'facts'         => array(
        array('label' => 'Project', 'value' => 'Website redesign'),
        array('label' => 'Mijn rol', 'value' => 'Structuur + development'),
        array('label' => 'Jaar', 'value' => '2026'),
        array('label' => 'Status', 'value' => 'Demo / in ontwikkeling'),
    ),
    'chapters'      => array(
        array(
            'number' => '01',
            'label'  => 'De uitdaging',
            'title'  => 'Veel praktische informatie moest sneller vindbaar.',
            'copy'   => array(
                'De vereniging biedt opleidingen, hercertificering, oefenavonden, hulpverlening en informatie voor leden. Op de bestaande website kostte het te veel moeite om snel bij de juiste informatie te komen.',
                'De doelgroep is breed, dus leesbaarheid, duidelijke navigatie en voorspelbare interactie waren belangrijker dan visuele trucjes.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Mijn aanpak',
            'title'  => 'Een rustige structuur met herkenbare EHBO-identiteit.',
            'copy'   => array(
                'Ik heb de navigatie opnieuw geordend en de belangrijkste routes rond informatie, opleidingen en hulpverlening duidelijker gemaakt. Grote fotografie en rustige secties houden de pagina overzichtelijk.',
                'De bestaande blauwe, rode en gele herkenning is teruggebracht in een modernere interface, met grotere tekst en duidelijke formulieren voor concrete acties.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'Het resultaat',
            'title'  => 'Een moderne basis voor een vereniging met geschiedenis.',
            'copy'   => array(
                'De redesign voelt actueler zonder de vereniging onherkenbaar te maken. Op desktop en mobiel blijven de belangrijkste taken snel bereikbaar.',
                'De nieuwe versie staat momenteel als demo klaar. Daarom linkt dit portfolio bewust niet naar de oude productiewebsite.',
            ),
        ),
    ),
    'statement'     => 'Toegankelijk ontwerp begint niet bij minder inhoud, maar bij betere keuzes over wat iemand als eerste nodig heeft.',
    'footer_note'   => '97 jaar ervaring, klaar voor vandaag.',
);

get_template_part('template-parts/meta-case', null, array('case' => $case));
?>
<?php get_footer(); ?>
