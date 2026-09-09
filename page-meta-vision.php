<?php
/*
Template Name: Meta Vision Case
*/

get_header();

$case = array(
    'slug'          => 'meta-vision',
    'index'         => '05',
    'label'         => 'META VISION',
    'eyebrow'       => 'CREATIVE PORTFOLIO / PERSONAL PROJECT',
    'title'         => 'Meta',
    'title_accent'  => 'Vision',
    'intro'         => 'Mijn eigen digitale speeltuin: een portfolio dat design, development, motion en mijn richting als creative front-end developer samenbrengt.',
    'live_url'      => home_url('/'),
    'live_label'    => 'Live site',
    'browser_label' => 'susan-aben / portfolio',
    'status_label'  => 'YOU ARE HERE',
    'desktop_image' => 'work/portfolio-desktop.webp',
    'desktop_alt'   => 'Meta Vision portfolio op desktop',
    'mobile_image'  => 'work/portfolio-mobile.webp',
    'mobile_alt'    => 'Meta Vision portfolio op mobiel',
    'annotation'    => 'Design. Develop. Create.',
    'tags'          => array('WordPress', 'PHP', 'JavaScript', 'CSS', 'Motion', 'Creative Frontend'),
    'facts'         => array(
        array('label' => 'Project', 'value' => 'Persoonlijk portfolio'),
        array('label' => 'Mijn rol', 'value' => 'Alles'),
        array('label' => 'Jaar', 'value' => '2026'),
        array('label' => 'Status', 'value' => 'Live + evolving'),
    ),
    'chapters'      => array(
        array(
            'number' => '01',
            'label'  => 'De richting',
            'title'  => 'Geen digitaal CV, maar een ervaring die bij mij past.',
            'copy'   => array(
                'Tijdens het bouwen van mijn portfolio werd steeds duidelijker dat mijn kracht niet alleen in code of alleen in design ligt. Ik wil juist werken op het punt waar visuele richting, interactie en development elkaar raken.',
                'Meta Vision werd daarom geen standaard portfolio-grid, maar een eigen systeem met een donkere interface, orbitale beweging, editorial typografie en kleine technische details.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Het systeem',
            'title'  => 'Elke pagina krijgt een eigen rol binnen dezelfde wereld.',
            'copy'   => array(
                'De homepage is bewust filmisch en compact. Werk draait om een project-orbit, Over mij gebruikt een creatieve workspace, Diensten is editorial en Contact blijft juist rustig en direct.',
                'Alles is gebouwd als custom WordPress theme met PHP, JavaScript en CSS. Motion wordt teruggeschakeld wanneer iemand reduced motion gebruikt.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'De polish',
            'title'  => 'Het ontwerp moest ook buiten een grote desktop overeind blijven.',
            'copy'   => array(
                'Na de desktopversie heb ik de code opgeschoond, zware afbeeldingen sterk geoptimaliseerd en de volledige site opnieuw opgebouwd voor tablet en mobiel.',
                'De laatste fase draaide om toegankelijkheid, performance en Lighthouse-tests. Met een performance-score van 99 en 100 voor accessibility, best practices en SEO is het portfolio ook technisch netjes afgerond.',
            ),
        ),
    ),
    'statement'     => 'Meta Vision is niet het eindpunt van mijn stijl. Het is een momentopname van de developer en designer die ik nu aan het worden ben.',
    'footer_note'   => 'The portfolio inside the portfolio.',
);

get_template_part('template-parts/meta-case', null, array('case' => $case));
?>
<?php get_footer(); ?>
