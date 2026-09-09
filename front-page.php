<?php get_header(); ?>

<section class="meta-hero">

    <div
        class="meta-hero__background"
        aria-hidden="true"
    ></div>


    <!-- =====================================================
         META VISION SYSTEM
         ===================================================== -->
    <div
        class="meta-vision"
        aria-hidden="true"
    >

    <!-- META VISION MICRO OBJECTS -->

<div
    class="meta-orbit-token meta-orbit-token--code"
    data-orbit-angle="15"
    aria-hidden="true"
>
    &lt;/&gt;
</div>

<div
    class="meta-orbit-token meta-orbit-token--braces"
    data-orbit-angle="75"
    aria-hidden="true"
>
    { }
</div>

<div
    class="meta-orbit-token meta-orbit-token--type"
    data-orbit-angle="195"
    aria-hidden="true"
>
    Aa
</div>

<div
    class="meta-orbit-token meta-orbit-token--cursor"
    data-orbit-angle="260"
    aria-hidden="true"
>
    ↗
</div>

        <div class="meta-vision__track"></div>


        <!-- 01 - BROWSER / WIREFRAME -->
        <div
    class="meta-card meta-card--browser"
    data-orbit-angle="290"
>

            <div class="meta-card__bar">

                <div class="meta-card__dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <span>
                    Meta Vision
                </span>

            </div>

            <div class="browser-ui">

                <div class="browser-ui__nav"></div>

                <div class="browser-ui__layout">

                    <div class="browser-ui__copy">

                        <span></span>
                        <span></span>
                        <span></span>

                        <div class="browser-ui__button"></div>

                    </div>

                    <div class="browser-ui__image"></div>

                </div>

                <div class="browser-ui__cards">

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

            </div>

        </div>


        <!-- 02 - CODE -->
        <div
    class="meta-card meta-card--code"
    data-orbit-angle="345"
>

            <div class="meta-card__bar">

                <div class="meta-card__dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <span>
                    hero.css
                </span>

            </div>

            <div class="meta-code">

                <div>
                    <b>.creative-dev</b> {
                </div>

                <div>
                    &nbsp;&nbsp;display:
                    <em>grid</em>;
                </div>

                <div>
                    &nbsp;&nbsp;perspective:
                    <strong>1200px</strong>;
                </div>

                <div>
                    &nbsp;&nbsp;overflow:
                    <em>visible</em>;
                </div>

                <div>
                    }
                </div>

            </div>

        </div>


        <!-- 03 - ANALYTICS -->
        <div
    class="meta-card meta-card--analytics"
    data-orbit-angle="40"
>

            <div class="meta-card__label">
                interaction
            </div>

            <svg
                class="analytics-chart"
                viewBox="0 0 260 110"
                aria-hidden="true"
            >
                <path
                    class="analytics-chart__grid"
                    d="
                        M0 25 H260
                        M0 55 H260
                        M0 85 H260
                    "
                />

                <path
                    class="analytics-chart__line"
                    d="
                        M5 83
                        C34 74 42 45 70 52
                        S108 91 137 62
                        S173 33 194 49
                        S223 28 255 18
                    "
                />

                <circle cx="70" cy="52" r="4"></circle>
                <circle cx="137" cy="62" r="4"></circle>
                <circle cx="194" cy="49" r="4"></circle>
                <circle cx="255" cy="18" r="4"></circle>
            </svg>

            <div class="analytics-stats">

                <span>
                    <b>99</b>
                    performance
                </span>

                <span>
                    <b>100%</b>
                    responsive
                </span>

            </div>

        </div>


        <!-- 04 - DESIGN SYSTEM -->
        <div
    class="meta-card meta-card--design"
    data-orbit-angle="110"
>

            <div class="meta-card__label">
                design system
            </div>

            <div class="design-colors">

                <span></span>
                <span></span>
                <span></span>
                <span></span>

            </div>

            <div class="design-type">

                <strong>Aa</strong>

                <div>
                    <span>Display / 64</span>
                    <span>Body / 16</span>
                    <span>Label / 12</span>
                </div>

            </div>

        </div>


        <!-- 05 - TERMINAL -->
        <div
    class="meta-card meta-card--terminal"
    data-orbit-angle="165"
>

            <div class="meta-card__bar">

                <div class="meta-card__dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <span>
                    terminal
                </span>

            </div>

            <div class="terminal-lines">

                <p>
                    <span>›</span>
                    npm run build
                </p>

                <p>
                    ✓ compiling styles
                </p>

                <p>
                    ✓ interactions loaded
                </p>

                <p>
                    ✓ ready to create
                    <i></i>
                </p>

            </div>

        </div>


        <!-- 06 - COMPONENTS -->
        <div
    class="meta-card meta-card--components"
    data-orbit-angle="225"
>

            <div class="meta-card__label">
                components
            </div>

            <div class="component-demo">

                <div class="component-demo__top">

                    <span></span>

                    <div>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>

                </div>

                <div class="component-demo__body">

                    <span></span>
                    <span></span>
                    <span></span>

                </div>

                <span class="component-demo__fake-button">
                    Explore
                </span>

            </div>

        </div>


        <!-- little system nodes -->
        <span class="meta-node meta-node--1"></span>
        <span class="meta-node meta-node--2"></span>
        <span class="meta-node meta-node--3"></span>
        <span class="meta-node meta-node--4"></span>

    </div>


    <!-- =====================================================
         PORTRAIT
         ===================================================== -->
    <div class="meta-hero__portrait">

        <img
            src="<?php
                echo esc_url(
                    get_template_directory_uri()
                    . '/assets/images/susan-hero.webp'
                );
            ?>"
            alt=""
            width="1448"
            height="1086"
            decoding="async"
            fetchpriority="high"
        >

    </div>


    <!-- =====================================================
         HERO CONTENT
         ===================================================== -->
    <div class="meta-hero__content">

        <p class="meta-hero__eyebrow">
            Hallo, ik ben
        </p>

        <h1 class="meta-hero__title">
            Susan
            <span>Aben</span>
        </h1>

        <p class="meta-hero__role">
            Creative Designer
            <span>&amp;</span>
            Developer
        </p>

<div class="meta-hero__availability">
    <span class="meta-hero__availability-dot" aria-hidden="true"></span>
    Open voor projecten
</div>

<div class="meta-hero__tags" aria-label="Vaardigheden">
    <span>HTML</span>
    <span>CSS</span>
    <span>JavaScript</span>
    <span>WordPress</span>
    <span>PHP</span>
    <span>Git</span>
</div>
        <a
            class="meta-hero__cta"
            href="<?php
                echo esc_url(
                    home_url('/werk/')
                );
            ?>"
        >
            Bekijk projecten

            <span aria-hidden="true">
                →
            </span>
        </a>

    </div>

</section>

<?php get_footer(); ?>
