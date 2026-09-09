<?php
/**
 * Template Name: Diensten
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<section class="services-page">

    <div class="services-page__atmosphere" aria-hidden="true">
        <span class="services-page__orbit services-page__orbit--one"></span>
        <span class="services-page__orbit services-page__orbit--two"></span>
    </div>


    <div class="services-shell">

        <!-- ==================================================
             INTRO
             ================================================== -->

        <header class="services-hero">

            <div class="services-hero__content">

                <div class="page-section-label">
                    <span>DIENSTEN</span>
                    <i aria-hidden="true"></i>
                </div>

                <h1>
                    Meer dan alleen
                    <em>mooie websites</em>
                </h1>

                <p>
                    Ik help ideeën groeien met doordacht design,
                    slimme development en een sterke visuele identiteit.
                </p>

            </div>


            <div class="services-hero__aside">

                <a
                    class="services-contact"
                    href="<?php echo esc_url(
                        home_url('/contact/')
                    ); ?>"
                >
                    <span>Laten we praten</span>

                    <svg
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="M5 12h14"></path>
                        <path d="m14 7 5 5-5 5"></path>
                    </svg>
                </a>

            </div>

        </header>


        <!-- ==================================================
             SERVICES
             ================================================== -->

        <div class="services-list">

            <!-- WEBDESIGN -->

            <article
                class="service-card"
                data-service="webdesign"
            >

                <div class="service-card__image">

                    <img
                        src="<?php echo esc_url(
                            $theme_uri .
                            '/assets/images/services/webdesign.webp'
                        ); ?>"
                        alt=""
                        width="900"
                        height="1200"
                        decoding="async"
                    >

                </div>


                <div class="service-card__body">

                    <div class="service-card__top">

                        <span class="service-card__icon" aria-hidden="true">

                            <svg viewBox="0 0 24 24">
                                <rect
                                    x="3"
                                    y="4"
                                    width="18"
                                    height="13"
                                    rx="1"
                                ></rect>
                                <path d="M8 21h8"></path>
                                <path d="M12 17v4"></path>
                            </svg>

                        </span>

                        <span class="service-card__number" aria-hidden="true">
                            01
                        </span>

                    </div>


                    <h2>Webdesign</h2>

                    <p>
                        Websites die er niet alleen goed uitzien,
                        maar logisch voelen en echt bij je merk passen.
                    </p>


                    <ul class="service-card__tags">
                        <li>UI / UX</li>
                        <li>Responsive</li>
                        <li>Visual design</li>
                    </ul>

                </div>

            </article>


            <!-- BRANDING -->

            <article
                class="service-card"
                data-service="branding"
            >

                <div class="service-card__image">

                    <img
                        src="<?php echo esc_url(
                            $theme_uri .
                            '/assets/images/services/branding.webp'
                        ); ?>"
                        alt=""
                        width="900"
                        height="1200"
                        decoding="async"
                    >

                </div>


                <div class="service-card__body">

                    <div class="service-card__top">

                        <span class="service-card__icon" aria-hidden="true">

                            <svg viewBox="0 0 24 24">
                                <circle
                                    cx="12"
                                    cy="12"
                                    r="8"
                                ></circle>
                                <circle
                                    cx="9"
                                    cy="9"
                                    r="1"
                                ></circle>
                                <circle
                                    cx="15"
                                    cy="8"
                                    r="1"
                                ></circle>
                                <circle
                                    cx="16"
                                    cy="14"
                                    r="1"
                                ></circle>
                                <path d="M7 15c2 1 3 2 4 4"></path>
                            </svg>

                        </span>

                        <span class="service-card__number" aria-hidden="true">
                            02
                        </span>

                    </div>


                    <h2>Branding</h2>

                    <p>
                        Een visuele identiteit die herkenbaar voelt,
                        samenhang creëert en een verhaal vertelt.
                    </p>


                    <ul class="service-card__tags">
                        <li>Logo</li>
                        <li>Huisstijl</li>
                        <li>Visual identity</li>
                    </ul>

                </div>

            </article>


            <!-- DEVELOPMENT -->

            <article
                class="service-card"
                data-service="development"
            >

                <div class="service-card__image">

                    <img
                        src="<?php echo esc_url(
                            $theme_uri .
                            '/assets/images/services/development.webp'
                        ); ?>"
                        alt=""
                        width="900"
                        height="1200"
                        decoding="async"
                    >

                </div>


                <div class="service-card__body">

                    <div class="service-card__top">

                        <span class="service-card__icon" aria-hidden="true">

                            <svg viewBox="0 0 24 24">
                                <path d="m8 5-6 7 6 7"></path>
                                <path d="m16 5 6 7-6 7"></path>
                                <path d="m14 3-4 18"></path>
                            </svg>

                        </span>

                        <span class="service-card__number" aria-hidden="true">
                            03
                        </span>

                    </div>


                    <h2>Webdevelopment</h2>

                    <p>
                        Van ontwerp naar een snelle, stabiele
                        en onderhoudbare website die echt werkt.
                    </p>


                    <ul class="service-card__tags">
                        <li>WordPress</li>
                        <li>PHP</li>
                        <li>JavaScript</li>
                    </ul>

                </div>

            </article>

        </div>


        <!-- ==================================================
             PHILOSOPHY
             ================================================== -->

        <aside class="services-philosophy">

            <span
                class="services-philosophy__mark"
                aria-hidden="true"
            >
                ✦
            </span>


            <div class="services-philosophy__copy">

                <span class="services-philosophy__code">
                    // mijn aanpak
                </span>

                <blockquote>
                    “Design gaat niet alleen over hoe iets eruitziet.
                    Het gaat vooral over hoe het werkt.”
                </blockquote>

            </div>


            <a
                href="<?php echo esc_url(
                    home_url('/contact/')
                ); ?>"
                class="services-philosophy__arrow"
                aria-label="Naar contact"
            >
                →

            </a>

        </aside>

    </div>

</section>

<?php
get_footer();