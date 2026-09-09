<?php get_header(); ?>

<section class="about-workspace">

    <div
        class="about-workspace__atmosphere"
        aria-hidden="true"
    >
        <span></span>
        <span></span>
        <span></span>
    </div>


    <!-- =====================================================
         PAGE HEADER
         ===================================================== -->

    <header class="about-workspace__header">

        <div>

<div class="page-section-label">
    <span>OVER MIJ</span>
    <i aria-hidden="true"></i>
</div>

<h1>
    Een kijkje in mijn
    <em>creative workspace</em>
</h1>

        </div>

        <p class="about-workspace__intro">
            Design, development, nieuwsgierigheid en een hoop
            experimenteren. Dit is ongeveer wat er gebeurt
            wanneer je mijn hoofd omzet naar een interface.
        </p>

    </header>


    <!-- =====================================================
         FOLDERS
         ===================================================== -->

    <nav
        class="about-folders"
        aria-label="Over mij onderdelen"
    >

<button
    class="about-folder"
    type="button"
    data-window="about"
    aria-controls="about-window-about"
    aria-pressed="false"
>
            <span aria-hidden="true">□</span>
            <strong>about.txt</strong>
        </button>


<button
    class="about-folder"
    type="button"
    data-window="skills"
    data-section="design"
    aria-controls="about-window-skills"
    aria-pressed="false"
>
            <span aria-hidden="true">◇</span>
            <strong>design/</strong>
        </button>


<button
    class="about-folder"
    type="button"
    data-window="skills"
    data-section="development"
    aria-controls="about-window-skills"
    aria-pressed="false"
>
            <span aria-hidden="true">&lt;/&gt;</span>
            <strong>development/</strong>
        </button>


        <button
            class="about-folder"
            type="button"
            data-window="experience"
            aria-controls="about-window-experience"
            aria-pressed="false"
        >
            <span aria-hidden="true">▣</span>
            <strong>experience/</strong>
        </button>


        <button
            class="about-folder"
            type="button"
            data-window="learning"
            aria-controls="about-window-learning"
            aria-pressed="false"
        >
            <span aria-hidden="true">+</span>
            <strong>currently-learning/</strong>
        </button>


        <button
            class="about-folder"
            type="button"
            data-window="outside"
            aria-controls="about-window-outside"
            aria-pressed="false"
        >
            <span aria-hidden="true">✦</span>
            <strong>outside-the-browser/</strong>
        </button>

    </nav>


    <!-- =====================================================
         WORKSPACE
         ===================================================== -->

    <div class="about-desktop">


        <!-- ABOUT.TXT -->
<article
    id="about-window-about"
    class="about-window about-window--about"
    data-about-window="about"
    aria-labelledby="about-window-about-title"
>

            <header class="about-window__bar">

                <h2 class="about-window__title" id="about-window-about-title">
                    <span aria-hidden="true">□ &nbsp;</span>about.txt
                </h2>

                <div aria-hidden="true">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

            </header>


            <div class="about-window__about">

                <figure class="about-window__portrait">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/about/susan-about.webp'
                        ); ?>"
                        alt="Portret van Susan Aben"
                        width="1100"
                        height="1100"
                        decoding="async"
                    >

                    <figcaption>
                        Hi, ik ben Susan ♡
                    </figcaption>

                </figure>


 <div class="about-window__text">

    <div class="about-code-line">
        <span aria-hidden="true">01</span>
        <code>// about.txt</code>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">02</span>
        <p>Hi! Ik ben Susan Aben.</p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">03</span>
        <p></p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">04</span>
        <p>
            Een creative designer &amp; developer
            met een liefde voor digitale ervaringen
            die niet alleen mooi zijn, maar ook
            betekenisvol werken.
        </p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">05</span>
        <p></p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">06</span>
        <p>
            Ik zit het liefst precies tussen ontwerp
            en code in: bedenken hoe iets eruitziet,
            hoe het beweegt en vervolgens uitzoeken
            hoe ik het echt kan bouwen.
        </p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">07</span>
        <p></p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">08</span>
        <p>
            Nieuwsgierigheid is eigenlijk de rode draad.
            Als ik iets interessant vind, wil ik begrijpen
            hoe het werkt - en meestal ook proberen het
            zelf te maken.
        </p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">09</span>
        <p></p>
    </div>

    <div class="about-code-line">
        <span aria-hidden="true">10</span>
        <p>
            Momenteel werk ik vooral aan een sterkere
            technische basis, betere codekwaliteit en het
            helder uitleggen van de keuzes die ik maak.
        </p>
    </div>

</div>

            </div>

        </article>


        <!-- SKILLS -->

        <article
            id="about-window-skills"
            class="
                about-window
                about-window--skills
            "
            data-about-window="skills"
            aria-labelledby="about-window-skills-title"
        >

            <header class="about-window__bar">

                <h2 class="about-window__title" id="about-window-skills-title">
                    <span aria-hidden="true">◇ &nbsp;</span>skills/
                </h2>

                <div aria-hidden="true">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

            </header>


            <div class="about-skills">

                <section data-skill-section="design">

                    <h3>
                        <span aria-hidden="true">◇ </span>Design
                    </h3>

                    <ul>
                        <li>
                            <span>UI / UX</span>
                            <span class="sr-only">Vaardigheidsniveau: 88 procent</span>
                            <i style="--level: 88%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Visual design</span>
                            <span class="sr-only">Vaardigheidsniveau: 86 procent</span>
                            <i style="--level: 86%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Illustration</span>
                            <span class="sr-only">Vaardigheidsniveau: 72 procent</span>
                            <i style="--level: 72%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Branding</span>
                            <span class="sr-only">Vaardigheidsniveau: 67 procent</span>
                            <i style="--level: 67%;" aria-hidden="true"></i>
                        </li>

                    </ul>

                </section>


                <section data-skill-section="development">

                    <h3>
                        <span aria-hidden="true">&lt;/&gt; </span>Development
                    </h3>

                    <ul>

                        <li>
                            <span>HTML / CSS</span>
                            <span class="sr-only">Vaardigheidsniveau: 92 procent</span>
                            <i style="--level: 92%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>JavaScript</span>
                            <span class="sr-only">Vaardigheidsniveau: 73 procent</span>
                            <i style="--level: 73%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>WordPress</span>
                            <span class="sr-only">Vaardigheidsniveau: 58 procent</span>
                            <i style="--level: 58%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>PHP</span>
                            <span class="sr-only">Vaardigheidsniveau: 63 procent</span>
                            <i style="--level: 63%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Git</span>
                            <span class="sr-only">Vaardigheidsniveau: 68 procent</span>
                            <i style="--level: 68%;" aria-hidden="true"></i>
                        </li>

                    </ul>

                </section>


                <section data-skill-section="creative">

                    <h3>
                        <span aria-hidden="true">✦ </span>Creative extras
                    </h3>

                    <ul>

                        <li>
                            <span>Pixel art</span>
                            <span class="sr-only">Vaardigheidsniveau: 78 procent</span>
                            <i style="--level: 78%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Interactive concepts</span>
                            <span class="sr-only">Vaardigheidsniveau: 84 procent</span>
                            <i style="--level: 84%;" aria-hidden="true"></i>
                        </li>

                        <li>
                            <span>Creative coding</span>
                            <span class="sr-only">Vaardigheidsniveau: 63 procent</span>
                            <i style="--level: 63%;" aria-hidden="true"></i>
                        </li>

                    </ul>

                </section>

            </div>

        </article>


        <!-- CURRENTLY LEARNING -->

        <article
            id="about-window-learning"
            class="
                about-window
                about-window--learning
            "
            data-about-window="learning"
            aria-labelledby="about-window-learning-title"
        >

            <header class="about-window__bar">

                <h2 class="about-window__title" id="about-window-learning-title">
                    <span aria-hidden="true">+ &nbsp;</span>currently-learning/
                </h2>

                <div aria-hidden="true">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

            </header>


<div class="about-learning-current">

    <p class="about-learning-current__intro">
        Waar mijn aandacht op dit moment vooral naartoe gaat:
    </p>


    <article class="about-learning-focus">

        <span class="about-learning-focus__number" aria-hidden="true">
            01
        </span>

        <div class="about-learning-focus__content">

            <span class="about-learning-focus__eyebrow">
                CURRENT FOCUS
            </span>

            <h3>
                Interview prep
            </h3>

            <p>
                Mijn technische basis verdiepen én leren
                om mijn keuzes helder uit te leggen.
            </p>

            <ul class="about-learning-focus__tags">
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
                <li>Git</li>
                <li>SCSS</li>
                <li>Responsive</li>
            </ul>

        </div>

    </article>


    <article class="about-learning-focus">

        <span class="about-learning-focus__number" aria-hidden="true">
            02
        </span>

        <div class="about-learning-focus__content">

            <span class="about-learning-focus__eyebrow">
                IMPROVING
            </span>

            <h3>
                Code quality &amp; feedback
            </h3>

            <p>
                Niet alleen code schrijven die werkt,
                maar code die logisch, leesbaar en
                begrijpelijk is voor anderen.
            </p>

            <ul class="about-learning-focus__tags">
                <li>GitHub</li>
                <li>Readability</li>
                <li>Structure</li>
                <li>Feedback</li>
                <li>Problem solving</li>
            </ul>

        </div>

    </article>

</div>

        </article>


        <!-- OUTSIDE THE BROWSER -->

<article
    id="about-window-outside"
    class="
        about-window
        about-window--outside
    "
    data-about-window="outside"
    aria-labelledby="about-window-outside-title"
>

    <header class="about-window__bar">

        <h2 class="about-window__title" id="about-window-outside-title">
            <span aria-hidden="true">✦ &nbsp;</span>outside-the-browser/
        </h2>

        <div
            class="about-window__controls"
            aria-hidden="true"
        >
            <i></i>
            <i></i>
            <i></i>
        </div>

    </header>


    <div class="about-outside">

        <article class="about-outside__card">

            <div class="about-outside__image">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/about/diva.webp'
                    ); ?>"
                    alt="Diva de kat"
                    width="1200"
                    height="1600"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div class="about-outside__content">
                <h3>Diva ♡</h3>
                <p>
                    Mijn grote knuffel
                    en creative buddy.
                </p>
            </div>

        </article>


        <article class="about-outside__card">

            <div class="about-outside__image">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/about/opal.webp'
                    ); ?>"
                    alt="Opal de kat"
                    width="1200"
                    height="1600"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div class="about-outside__content">
                <h3>Opal ♡</h3>
                <p>
                    Nieuwste aanwinst
                    en bron van chaos
                    (en inspiratie).
                </p>
            </div>

        </article>


        <article class="about-outside__card">

            <div class="about-outside__image">
                <picture>
                    <source
                        media="(prefers-reduced-motion: reduce)"
                        srcset="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/about/pixel-art-static.webp'
                        ); ?>"
                    >
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/about/pixel-art.gif'
                        ); ?>"
                        alt="Pixel art voorbeeld"
                        width="168"
                        height="148"
                        loading="lazy"
                        decoding="async"
                    >
                </picture>
            </div>

            <div class="about-outside__content">
                <h3>Pixel art</h3>
                <p>
                    Kleine werelden,
                    grote mogelijkheden.
                </p>
            </div>

        </article>


        <article class="about-outside__card">

            <div class="about-outside__image">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/about/illustration.webp'
                    ); ?>"
                    alt="Illustratie voorbeeld"
                    width="522"
                    height="539"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div class="about-outside__content">
                <h3>Illustratie</h3>
                <p>
                    Verhalen in beeld.
                </p>
            </div>

        </article>


        <article class="about-outside__card">

            <div class="about-outside__image">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                        . '/assets/images/about/tiny-games.png'
                    ); ?>"
                    alt="Tiny games voorbeeld"
                    width="128"
                    height="192"
                    loading="lazy"
                    decoding="async"
                >
            </div>

            <div class="about-outside__content">
                <h3>Tiny games</h3>
                <p>
                    Spelen, experimenteren
                    en ideeën tot leven brengen.
                </p>
            </div>

        </article>

    </div>

</article>


        <!-- EXPERIENCE -->

        <article
            id="about-window-experience"
            class="
                about-window
                about-window--experience
            "
            data-about-window="experience"
            aria-labelledby="about-window-experience-title"
        >

            <header class="about-window__bar">

                <h2 class="about-window__title" id="about-window-experience-title">
                    <span aria-hidden="true">▣ &nbsp;</span>experience/
                </h2>

                <div aria-hidden="true">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

            </header>


 <div class="about-experience">

    <article class="about-experience__item">

        <span class="about-experience__number" aria-hidden="true">
            01
        </span>

        <div>

            <h3>
                Real-world web projects
            </h3>

            <p>
                Websites ontwerpen en bouwen voor echte
                organisaties, initiatieven en projecten.
            </p>

            <span class="about-experience__meta">
                WordPress · PHP · JavaScript · CSS
            </span>

        </div>

    </article>


    <article class="about-experience__item">

        <span class="about-experience__number" aria-hidden="true">
            02
        </span>

        <div>

            <h3>
                Design + frontend
            </h3>

            <p>
                Van visuele richting en UI tot responsive
                interfaces en interactieve details.
            </p>

            <span class="about-experience__meta">
                UI/UX · visual design · responsive · motion
            </span>

        </div>

    </article>


    <article class="about-experience__item">

        <span class="about-experience__number" aria-hidden="true">
            03
        </span>

        <div>

            <h3>
                From brief to build
            </h3>

            <p>
                Wensen begrijpen, structureren, ontwerpen,
                bouwen, feedback verwerken en verder verbeteren.
            </p>

            <span class="about-experience__meta">
                communication · iteration · problem solving
            </span>

        </div>

    </article>

</div>

        </article>

    </div>

</section>

<?php get_footer(); ?>
