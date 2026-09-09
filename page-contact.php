<?php
get_header();

$contact_email = antispambot(
    susan_portfolio_contact_recipient()
);
?>

<article class="contact-page contact-compose">

    <!-- =====================================================
         ATMOSPHERE
         ===================================================== -->

    <div
        class="contact-compose__atmosphere"
        aria-hidden="true"
    >
        <span class="contact-compose__orbit contact-compose__orbit--one"></span>
        <span class="contact-compose__orbit contact-compose__orbit--two"></span>
        <span class="contact-compose__node contact-compose__node--one"></span>
        <span class="contact-compose__node contact-compose__node--two"></span>
    </div>


    <div class="contact-compose__shell">

        <!-- =================================================
             LEFT - INTRO
             ================================================= -->

        <section class="contact-page__intro contact-compose__intro">

            <div class="page-section-label">
                <span>CONTACT</span>
                <i aria-hidden="true"></i>
            </div>


            <h1>
                Heb je een idee?
                <em>Let’s make it real</em>
            </h1>


            <p class="contact-page__text">
                Groot plan, kleine vraag of iets ertussenin?
                Vertel me waar je aan denkt en dan kijken we
                samen wat we ervan kunnen maken.
            </p>


            <!-- =============================================
                 CONTACT DETAILS
                 ============================================= -->

            <div class="contact-page__details contact-compose__details">

                <div class="contact-detail">

                    <span
                        class="contact-detail__icon"
                        aria-hidden="true"
                    >
                        <svg viewBox="0 0 24 24">
                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            ></rect>

                            <path d="m4 7 8 6 8-6"></path>
                        </svg>
                    </span>


                    <div>
                        <span class="contact-detail__label">
                            E-mail
                        </span>

                        <a
                            href="mailto:<?php
                                echo esc_attr($contact_email);
                            ?>"
                        >
                            <?php
                                echo esc_html($contact_email);
                            ?>
                        </a>
                    </div>

                </div>


                <div class="contact-detail">

                    <span
                        class="contact-detail__icon"
                        aria-hidden="true"
                    >
                        <svg viewBox="0 0 24 24">
                            <path
                                d="
                                    M20 10
                                    c0 5-8 11-8 11
                                    S4 15 4 10
                                    a8 8 0 1 1 16 0Z
                                "
                            ></path>

                            <circle
                                cx="12"
                                cy="10"
                                r="2.5"
                            ></circle>
                        </svg>
                    </span>


                    <div>
                        <span class="contact-detail__label">
                            Locatie
                        </span>

                        <p>
                            Tilburg, Nederland
                        </p>
                    </div>

                </div>


                <div class="contact-detail">

                    <span
                        class="contact-detail__icon"
                        aria-hidden="true"
                    >
                        <svg viewBox="0 0 24 24">
                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            ></circle>

                            <path d="M12 7v5l3 2"></path>
                        </svg>
                    </span>


                    <div>
                        <span class="contact-detail__label">
                            Reactietijd
                        </span>

                        <p>
                            Binnen 1-2 werkdagen
                        </p>
                    </div>

                </div>

            </div>


            <!-- =============================================
                 AVAILABILITY
                 ============================================= -->

            <div class="contact-compose__availability">

                <span
                    class="contact-compose__availability-dot"
                    aria-hidden="true"
                ></span>

                <span>
                    Beschikbaar voor nieuwe projecten
                </span>

            </div>


            <!-- =============================================
                 LITTLE ANNOTATION
                 ============================================= -->

            <p
                class="contact-compose__note"
                aria-hidden="true"
            >
                No scary contact forms,<br>
                promise. :)
            </p>

        </section>


        <!-- =================================================
             RIGHT - MESSAGE WINDOW
             ================================================= -->

        <section
            class="contact-page__form-area contact-compose__form-area"
            aria-labelledby="contact-form-heading"
        >

            <div class="contact-compose__window">

                <!-- =========================================
                     WINDOW BAR
                     ========================================= -->

                <header class="contact-compose__window-bar">

                    <div
                        class="contact-compose__window-dots"
                        aria-hidden="true"
                    >
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>


                    <h2
                        id="contact-form-heading"
                        class="contact-compose__window-title"
                    >
                        <span aria-hidden="true">// message.compose</span>
                        <span class="sr-only">Stuur een bericht</span>
                    </h2>


                    <span
                        class="contact-compose__window-status"
                        aria-hidden="true"
                    >
                        ready
                    </span>

                </header>


                <!-- =========================================
                     STATUS MESSAGE
                     ========================================= -->

                <div
                    id="contact-form-status"
                    class="contact-message"
                    role="status"
                    aria-live="polite"
                    data-no-translation
                    hidden
                ></div>


                <!-- =========================================
                     FORM
                     ========================================= -->

                <form
                    id="portfolio-contact-form"
                    class="contact-form contact-compose__form"
                    action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"
                    method="POST"
                >

                    <input
                        type="hidden"
                        name="action"
                        value="susan_portfolio_send_contact"
                    >

                    <?php
                    wp_nonce_field(
                        'susan_portfolio_contact',
                        'contact_nonce',
                        true,
                        false
                    );
                    ?>


                    <!-- =====================================
                         NAME
                         ===================================== -->

                    <div class="contact-form__field">

                        <label for="contact-name">
                            Naam
                        </label>

                        <input
                            id="contact-name"
                            name="name"
                            type="text"
                            autocomplete="name"
                            placeholder="Jouw naam"
                            required
                        >

                    </div>


                    <!-- =====================================
                         EMAIL
                         ===================================== -->

                    <div class="contact-form__field">

                        <label for="contact-email">
                            E-mailadres
                        </label>

                        <input
                            id="contact-email"
                            name="email"
                            type="email"
                            autocomplete="email"
                            placeholder="jouw@email.nl"
                            required
                        >

                    </div>


                    <!-- =====================================
                         PROJECT
                         ===================================== -->

                    <div class="contact-form__field">

                        <label for="contact-project">
                            Waar kan ik mee helpen?
                        </label>

                        <select
                            id="contact-project"
                            name="project"
                            required
                        >

                            <option
                                value=""
                                selected
                                disabled
                            >
                                Kies een onderwerp
                            </option>

                            <option value="New website">
                                Nieuwe website
                            </option>

                            <option value="Website redesign">
                                Website redesign
                            </option>

                            <option value="Visual identity">
                                Visuele identiteit &amp; logo
                            </option>

                            <option value="WordPress support">
                                WordPress hulp
                            </option>

                            <option value="Collaboration">
                                Samenwerking
                            </option>

                            <option value="Something else">
                                Iets anders
                            </option>

                        </select>

                    </div>


                    <!-- =====================================
                         MESSAGE
                         ===================================== -->

                    <div class="contact-form__field contact-form__field--message">

                        <label for="contact-message">
                            Bericht
                        </label>

                        <textarea
                            id="contact-message"
                            name="message"
                            rows="5"
                            placeholder="Vertel me meer over je idee..."
                            required
                        ></textarea>

                    </div>


                    <!-- =====================================
                         HONEYPOT
                         ===================================== -->

                    <div
                        class="contact-form__honeypot"
                        hidden
                    >

                        <label for="contact-botcheck">
                            Laat dit veld leeg
                        </label>

                        <input
                            id="contact-botcheck"
                            name="botcheck"
                            type="checkbox"
                            tabindex="-1"
                            autocomplete="off"
                        >

                    </div>


                    <!-- =====================================
                         FOOTER
                         ===================================== -->

                    <div class="contact-compose__form-footer">

                        <p class="contact-form__privacy">
                            Door het formulier te versturen ga je akkoord
                            met de verwerking van je gegevens zoals beschreven
                            in de

                            <a
                                href="<?php
                                    echo esc_url(
                                        home_url('/privacy/')
                                    );
                                ?>"
                            >
                                privacyverklaring
                            </a>.
                        </p>


                        <button
                            type="submit"
                            class="contact-form__submit"
                            data-no-translation
                        >

                            <span class="submit-text submit-text--nl">
                                Bericht sturen
                            </span>

                            <span class="submit-text submit-text--en">
                                Send message
                            </span>

                            <span
                                class="contact-form__submit-arrow"
                                aria-hidden="true"
                            >
                                →
                            </span>

                        </button>

                    </div>

                </form>

            </div>


            <!-- =============================================
                 SIDE MICRO COPY
                 ============================================= -->

            <div
                class="contact-compose__microcopy"
                aria-hidden="true"
            >
                <span>//</span>

                <p>
                    GOOD IDEAS<br>
                    DESERVE<br>
                    GREAT<br>
                    CONVERSATIONS
                </p>
            </div>

        </section>

    </div>

</article>

<?php
get_footer();
?>
