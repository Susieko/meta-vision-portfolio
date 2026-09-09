<?php get_header(); ?>

<section
    class="work-stage"
    data-theme-uri="<?php echo esc_url(
        get_template_directory_uri()
    ); ?>"
    data-site-url="<?php echo esc_url(home_url('/')); ?>"
>

    <!-- BACKGROUND ATMOSPHERE -->
    <div class="work-stage__atmosphere" aria-hidden="true">

        <span class="work-stage__orbit work-stage__orbit--outer"></span>
        <span class="work-stage__orbit work-stage__orbit--inner"></span>

        <span class="work-stage__node work-stage__node--1"></span>
        <span class="work-stage__node work-stage__node--2"></span>
        <span class="work-stage__node work-stage__node--3"></span>

    </div>


    <!-- =====================================================
         PROJECT INFORMATION
         ===================================================== -->
    <div class="work-project">

<div class="page-section-label">
    <span>WERK</span>
    <i aria-hidden="true"></i>
</div>


        <div class="work-project__count">
            <strong>03</strong>
            <span>/ 05</span>
        </div>


        <h1 class="work-project__title" aria-live="polite" aria-atomic="true">
            NoordgroeiT
        </h1>


        <p class="work-project__type">
            Website redesign
        </p>


        <p class="work-project__description">
            Een moderne en toegankelijke website voor Stichting
            NoordgroeiT, die buurtinitiatieven, projecten en bewoners
            samenbrengt in Tilburg-Noord.
        </p>


        <div
            class="work-project__tags"
            aria-label="Gebruikte technieken"
        >
            <span>WordPress</span>
            <span>PHP</span>
            <span>JavaScript</span>
            <span>CSS</span>
            <span>UI / UX</span>
            <span>Responsive</span>
        </div>


        <div class="work-project__actions">

            <a
                class="work-project__case"
                href="<?php echo esc_url(home_url('/noordgroeit/')); ?>"
            >
                <span class="work-project__action-label">Bekijk case</span>
                <span aria-hidden="true">→</span>
            </a>

            <a
                class="work-project__live"
                href="https://noordgroeit.nl"
                target="_blank"
                rel="noopener noreferrer"
                aria-label="Live site (opent in een nieuw tabblad)"
            >
                <span class="work-project__action-label">Live site</span>
                <span aria-hidden="true">↗</span>
            </a>

        </div>


        <div class="work-project__note">
            <span aria-hidden="true"></span>

            <p>
                Hier krijgt<br>
                Noord vorm.
            </p>
        </div>

    </div>


    <!-- =====================================================
         DEVICE SHOWCASE
         ===================================================== -->
    <div class="work-devices">

        <!-- DESKTOP / LAPTOP -->
        <div class="work-laptop">

            <div class="work-laptop__screen">

                <div class="work-laptop__camera" aria-hidden="true"></div>

                <div class="work-laptop__viewport">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/work/noordgroeit-desktop.webp'
                        ); ?>"
                        alt="NoordgroeiT website op desktop"
                        width="1870"
                        height="947"
                        decoding="async"
                        fetchpriority="high"
                    >

                </div>

            </div>


            <div
                class="work-laptop__base"
                aria-hidden="true"
            >
                <span></span>
            </div>

        </div>


        <!-- MOBILE -->
        <div class="work-phone">

            <div class="work-phone__shell">

                <div
                    class="work-phone__notch"
                    aria-hidden="true"
                ></div>

                <div class="work-phone__viewport">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/work/noordgroeit-mobile.webp'
                        ); ?>"
                        alt="NoordgroeiT website op mobiel"
                        width="398"
                        height="857"
                        decoding="async"
                    >

                </div>

            </div>

        </div>


        <div
            class="work-devices__annotation"
            aria-hidden="true"
        >
            <p>
                Desktop &amp; mobile<br>
                geoptimaliseerd
            </p>

            <span>↘</span>
        </div>

    </div>


    <!-- =====================================================
         PROJECT ORBIT
         ===================================================== -->
    <div
        class="work-carousel"
        aria-label="Projectselectie"
        aria-describedby="work-carousel-instructions"
    >

        <p id="work-carousel-instructions" class="sr-only">
            Kies een project. Met de pijltoetsen links en rechts kun je tussen projecten wisselen wanneer een projectknop focus heeft.
        </p>

        <div
            class="work-carousel__curve"
            aria-hidden="true"
        ></div>


        <button
            class="work-carousel__arrow work-carousel__arrow--prev"
            type="button"
            aria-label="Vorig project"
        >
            ‹
        </button>


        <div class="work-carousel__projects">

            <button
                class="work-carousel__item work-carousel__item--1"
                type="button"
                data-project="ehbo"
                aria-pressed="false"
            >

                <span class="work-carousel__thumb">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/work/ehbo-thumb.jpg'
                        ); ?>"
                        alt=""
                        width="74"
                        height="74"
                        loading="lazy"
                        decoding="async"
                    >
                </span>

                <strong>EHBO</strong>
                <small>Website</small>

            </button>


            <button
                class="work-carousel__item work-carousel__item--2"
                type="button"
                data-project="cartnip"
                aria-pressed="false"
            >

                <span class="work-carousel__thumb">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/work/cartnip-thumb.webp'
                        ); ?>"
                        alt=""
                        width="460"
                        height="457"
                        loading="lazy"
                        decoding="async"
                    >
                </span>

                <strong>Cartnip</strong>
                <small>Webshop</small>

            </button>


            <button
                class="
                    work-carousel__item
                    work-carousel__item--3
                    is-active
                "
                type="button"
                data-project="noordgroeit"
                aria-pressed="true"
            >

                <span class="work-carousel__thumb">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/work/noordgroeit-thumb.webp'
                        ); ?>"
                        alt=""
                        width="500"
                        height="500"
                        loading="lazy"
                        decoding="async"
                    >
                </span>

                <strong>NoordgroeiT</strong>
                <small>Website</small>

            </button>


            <button
                class="work-carousel__item work-carousel__item--4"
                type="button"
                data-project="eaa"
                aria-pressed="false"
            >

                <span class="work-carousel__thumb work-carousel__thumb--logo">
                    EAA
                </span>

                <strong>Initiatief EAA</strong>
                <small>Website</small>

            </button>


            <button
                class="work-carousel__item work-carousel__item--5"
                type="button"
                data-project="portfolio"
                aria-pressed="false"
            >

                <span class="work-carousel__thumb work-carousel__thumb--logo">
                    SA
                </span>

                <strong>Portfolio</strong>
                <small>Website</small>

            </button>

        </div>


        <button
            class="work-carousel__arrow work-carousel__arrow--next"
            type="button"
            aria-label="Volgend project"
        >
            ›
        </button>


        <span
            class="work-carousel__active-node"
            aria-hidden="true"
        ></span>

    </div>

</section>

<?php get_footer(); ?>
