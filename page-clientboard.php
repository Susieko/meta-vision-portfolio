<?php
get_header();

$case = array(
    'slug'          => 'clientboard',
    'index'         => '05',
    'label'         => 'CLIENTBOARD',
    'eyebrow'       => 'PROJECT MANAGEMENT / LARAVEL',
    'title'         => 'Client',
    'title_accent'  => 'board',
    'intro'         => 'Een speels client- en projectmanagement-dashboard voor projecten, deadlines, voortgang en feedback — gebouwd als mijn eerste grotere Laravel-applicatie.',
    'live_url'      => 'https://github.com/Susieko/clientboard',
    'live_label'    => 'GitHub',
    'browser_label' => 'github.com/Susieko/clientboard',
    'status_label'  => 'GITHUB',
    'desktop_image' => 'projects/clientboard-preview.png',
    'desktop_alt'   => 'Clientboard projectmanagement dashboard op desktop',
    'mobile_image'  => 'projects/clientboard-mobile.png',
    'mobile_alt'    => 'Clientboard dashboard op mobiel',
    'annotation'    => 'Projecten, klanten en feedback in één rustige workflow.',
    'tags'          => array(
        'Laravel',
        'PHP',
        'Blade',
        'JavaScript',
        'Tailwind CSS',
        'MySQL'
    ),
    'facts'         => array(
        array(
            'label' => 'Project',
            'value' => 'Client dashboard'
        ),
        array(
            'label' => 'Mijn rol',
            'value' => 'UI design + full-stack'
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
            'title'  => 'Een dashboard bouwen dat niet voelt als een standaard adminpanel.',
            'copy'   => array(
                'Clientboard begon als mijn eerste grotere Laravel-project. Ik wilde leren hoe een applicatie met routes, controllers, databasegegevens en CRUD-functionaliteit wordt opgebouwd, maar zonder de interface te laten eindigen als een generiek beheerpaneel.',
                'De uitdaging was daarom dubbel: een bruikbare structuur maken voor klanten en projecten én tegelijk genoeg karakter behouden in de visuele ervaring.',
            ),
        ),
        array(
            'number' => '02',
            'label'  => 'Mijn aanpak',
            'title'  => 'Backendstructuur koppelen aan een speelse interface.',
            'copy'   => array(
                'Ik bouwde de applicatie op met Laravel-routes, controllers, modellen, migrations en Blade-templates. Projecten en klanten kunnen worden toegevoegd, aangepast en verwijderd en gegevens worden opgeslagen in de database.',
                'Aan de voorkant werkte ik met duidelijke projectstatussen, voortgang, deadlines, clientfilters en een detail drawer. De geïllustreerde landschappen geven iedere klant een eigen visuele identiteit zonder de workflow in de weg te zitten.',
            ),
        ),
        array(
            'number' => '03',
            'label'  => 'Het resultaat',
            'title'  => 'Mijn eerste stap van front-end naar een volledige applicatie.',
            'copy'   => array(
                'Het resultaat is een responsive dashboard waarin klanten, projecten, status, voortgang, deadlines en notities binnen één interface samenkomen.',
                'Clientboard gaf me vooral inzicht in hoe een Laravel-applicatie van database tot interface in elkaar zit en hoe front-end interacties verbonden worden met echte backendfunctionaliteit.',
            ),
        ),
    ),
    'statement'     => 'Een managementtool hoeft niet saai te worden zodra er een database achter zit.',
    'footer_note'   => 'Projects under control.',
);

get_template_part(
    'template-parts/meta-case',
    null,
    array('case' => $case)
);
?>

<?php get_footer(); ?>