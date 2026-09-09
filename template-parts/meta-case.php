<?php
/**
 * Shared Meta Vision project case layout.
 *
 * Expected: $case array defined by the page template.
 */

$case = isset($args['case']) && is_array($args['case'])
    ? $args['case']
    : null;

if (!$case) {
    return;
}

$theme_uri = get_template_directory_uri();
$work_url = home_url('/werk/');
$desktop_image = $theme_uri . '/assets/images/' . ltrim($case['desktop_image'], '/');
$mobile_image = !empty($case['mobile_image'])
    ? $theme_uri . '/assets/images/' . ltrim($case['mobile_image'], '/')
    : null;
$live_is_external = false;

if (!empty($case['live_url'])) {
    $site_host = wp_parse_url(home_url('/'), PHP_URL_HOST);
    $live_host = wp_parse_url($case['live_url'], PHP_URL_HOST);
    $live_is_external = $live_host && $site_host && $live_host !== $site_host;
}
?>

<article class="mv-case mv-case--<?php echo esc_attr($case['slug']); ?>">

    <div class="mv-case__atmosphere" aria-hidden="true">
        <span class="mv-case__orbit mv-case__orbit--one"></span>
        <span class="mv-case__orbit mv-case__orbit--two"></span>
        <span class="mv-case__node mv-case__node--one"></span>
        <span class="mv-case__node mv-case__node--two"></span>
    </div>

    <header class="mv-case__hero">

        <div class="mv-case__utility">
            <a href="<?php echo esc_url($work_url); ?>">
                <span aria-hidden="true">←</span>
                Terug naar werk
            </a>

            <p>
                CASE <?php echo esc_html($case['index']); ?> / 05
            </p>
        </div>

        <div class="page-section-label mv-case__label">
            <span><?php echo esc_html($case['label']); ?></span>
            <i aria-hidden="true"></i>
        </div>

        <div class="mv-case__hero-grid">

            <div class="mv-case__heading">
                <p class="mv-case__eyebrow">
                    <?php echo esc_html($case['eyebrow']); ?>
                </p>

                <h1>
                    <?php echo esc_html($case['title']); ?>
                    <em><?php echo esc_html($case['title_accent']); ?></em>
                </h1>
            </div>

            <div class="mv-case__intro-wrap">
                <p class="mv-case__intro">
                    <?php echo esc_html($case['intro']); ?>
                </p>

                <?php if (!empty($case['live_url'])) : ?>
                    <a
                        class="mv-case__live"
                        href="<?php echo esc_url($case['live_url']); ?>"
                        <?php if ($live_is_external) : ?>
                            target="_blank"
                            rel="noopener noreferrer"
                        <?php endif; ?>
                    >
                        <?php echo esc_html($case['live_label']); ?>
                        <?php if ($live_is_external) : ?>
                            <span class="sr-only">(opent in een nieuw tabblad)</span>
                        <?php endif; ?>
                        <span aria-hidden="true">↗</span>
                    </a>
                <?php endif; ?>
            </div>

        </div>

        <ul class="mv-case__tags" aria-label="Projecttechnieken">
            <?php foreach ($case['tags'] as $tag) : ?>
                <li><?php echo esc_html($tag); ?></li>
            <?php endforeach; ?>
        </ul>

    </header>

    <section class="mv-case__showcase" aria-label="Projectpreview">

        <div class="mv-case-browser">
            <div class="mv-case-browser__bar">
                <span class="mv-case-browser__dots" aria-hidden="true">
                    <i></i><i></i><i></i>
                </span>

                <span class="mv-case-browser__address">
                    // <?php echo esc_html($case['browser_label']); ?>
                </span>

                <span class="mv-case-browser__status">
                    <?php echo esc_html($case['status_label']); ?>
                </span>
            </div>

            <div class="mv-case-browser__viewport">
                <img
                    src="<?php echo esc_url($desktop_image); ?>"
                    alt="<?php echo esc_attr($case['desktop_alt']); ?>"
                    loading="eager"
                    decoding="async"
                    fetchpriority="high"
                >
            </div>
        </div>

        <?php if ($mobile_image) : ?>
            <div class="mv-case-phone" aria-label="Mobiele projectpreview">
                <div class="mv-case-phone__notch" aria-hidden="true"></div>
                <img
                    src="<?php echo esc_url($mobile_image); ?>"
                    alt="<?php echo esc_attr($case['mobile_alt']); ?>"
                    loading="lazy"
                    decoding="async"
                >
            </div>
        <?php endif; ?>

        <p class="mv-case__showcase-note" aria-hidden="true">
            <?php echo esc_html($case['annotation']); ?>
        </p>

    </section>

    <section class="mv-case__facts" aria-label="Projectdetails">
        <?php foreach ($case['facts'] as $fact) : ?>
            <div>
                <span><?php echo esc_html($fact['label']); ?></span>
                <strong><?php echo esc_html($fact['value']); ?></strong>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="mv-case__story">
        <div class="mv-case__story-heading">
            <p class="mv-case__eyebrow">// project.log</p>

            <h2>
                Van vraag naar
                <em>digitale ervaring.</em>
            </h2>
        </div>

        <div class="mv-case__chapters">
            <?php foreach ($case['chapters'] as $chapter) : ?>
                <article class="mv-case__chapter">
                    <span class="mv-case__chapter-number">
                        <?php echo esc_html($chapter['number']); ?>
                    </span>

                    <div>
                        <p class="mv-case__chapter-label">
                            <?php echo esc_html($chapter['label']); ?>
                        </p>

                        <h3><?php echo esc_html($chapter['title']); ?></h3>

                        <?php foreach ($chapter['copy'] as $paragraph) : ?>
                            <p><?php echo esc_html($paragraph); ?></p>
                        <?php endforeach; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mv-case__statement">
        <span aria-hidden="true">&lt;/&gt;</span>

        <p><?php echo esc_html($case['statement']); ?></p>
    </section>

    <footer class="mv-case__footer">
        <div>
            <span>// END_CASE</span>
            <p><?php echo esc_html($case['footer_note']); ?></p>
        </div>

        <a href="<?php echo esc_url($work_url); ?>">
            Bekijk alle projecten
            <span aria-hidden="true">→</span>
        </a>
    </footer>

</article>
