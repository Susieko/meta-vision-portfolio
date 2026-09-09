<?php get_header(); ?>

<section class="privacy-page">

    <header class="privacy-page__header">

        <p class="privacy-page__eyebrow">
            Privacy &amp; persoonsgegevens
        </p>

        <h1>
            Jouw gegevens.<br>
            <span>Helder geregeld.</span>
        </h1>

        <p class="privacy-page__intro">
            Wanneer je contact met mij opneemt, vertrouw je mij
            enkele persoonsgegevens toe. Hieronder lees je welke
            gegevens ik gebruik, waarom en hoe ik ermee omga.
        </p>

    </header>

    <div class="privacy-page__content">

        <section>
            <span class="privacy-page__number">01</span>

            <div>
                <h2>Wie verwerkt je gegevens?</h2>

                <p>
                    Deze website en het contactformulier worden
                    beheerd door Susan Aben, creative designer en
                    developer uit Tilburg.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">02</span>

            <div>
                <h2>Welke gegevens verzamel ik?</h2>

                <p>
                    Via het contactformulier kan ik je naam,
                    e-mailadres, onderwerp en bericht ontvangen.
                    Ik vraag alleen om informatie die nodig is om
                    je vraag te beantwoorden.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">03</span>

            <div>
                <h2>Waarvoor gebruik ik deze gegevens?</h2>

                <p>
                    Ik gebruik je gegevens uitsluitend om contact
                    met je op te nemen, je vraag te beantwoorden
                    of een mogelijk project met je te bespreken.
                    Je gegevens worden niet verkocht of gebruikt
                    voor ongewenste reclame.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">04</span>

            <div>
                <h2>Hoe lang bewaar ik je gegevens?</h2>

                <p>
                    Contactberichten worden niet langer bewaard
                    dan nodig is voor de communicatie. Berichten
                    die niet tot een samenwerking leiden, worden
                    in principe binnen twaalf maanden verwijderd.
                </p>

                <p>
                    Wanneer er een opdracht ontstaat, kunnen
                    bepaalde gegevens langer worden bewaard als
                    dat noodzakelijk is voor administratie of een
                    wettelijke bewaarplicht.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">05</span>

            <div>
                <h2>Delen met anderen</h2>

                <p>
                    Het contactformulier wordt door WordPress verwerkt
                    en via de mailvoorziening van mijn hosting naar mijn
                    e-mailadres gestuurd. Daardoor kunnen mijn hosting-
                    en e-mailprovider gegevens verwerken die technisch
                    nodig zijn om je bericht af te leveren. Daarnaast
                    kunnen dienstverleners voor lettertypen gegevens
                    verwerken die nodig zijn om de website goed te laten
                    functioneren. Je gegevens worden niet voor andere
                    doeleinden gedeeld.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">06</span>

            <div>
                <h2>Cookies</h2>

                <p>
                    Deze website gebruikt geen advertentie- of
                    trackingcookies. Functionele cookies kunnen worden
                    gebruikt door WordPress en de taalwisselaar om de
                    website correct te laten werken en je taalvoorkeur
                    te onthouden.
                </p>
            </div>
        </section>

        <section>
            <span class="privacy-page__number">07</span>

            <div>
                <h2>Jouw rechten en contact</h2>

                <p>
                    Je kunt vragen welke persoonsgegevens ik van je
                    heb, of verzoeken om correctie of verwijdering.
                    Stuur daarvoor een e-mail naar:
                </p>
<?php
$privacy_email = antispambot('Lily-SA@hotmail.com');
?>

<a
    class="privacy-page__email"
    href="mailto:<?php echo esc_attr($privacy_email); ?>"
>
    <?php echo esc_html($privacy_email); ?>
</a>
            </div>
        </section>

    </div>

    <footer class="privacy-page__footer">
        Laatst bijgewerkt · 8 september 2026
    </footer>

</section>

<?php get_footer(); ?>