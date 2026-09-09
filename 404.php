<?php get_header(); ?>

<section class="mv-error">

    <div class="mv-error__atmosphere" aria-hidden="true">
        <span class="mv-error__orbit mv-error__orbit--one"></span>
        <span class="mv-error__orbit mv-error__orbit--two"></span>
        <span class="mv-error__node mv-error__node--one"></span>
        <span class="mv-error__node mv-error__node--two"></span>
    </div>

    <div class="mv-error__shell">

        <div class="page-section-label mv-error__label">
            <span>ERROR / 404</span>
            <i aria-hidden="true"></i>
        </div>

        <div class="mv-error__grid">

            <div class="mv-error__content">
                <p class="mv-error__code" aria-hidden="true">404</p>

                <h1>
                    Signal
                    <em>lost.</em>
                </h1>

                <p class="mv-error__text">
                    Deze route bestaat niet, is verplaatst of is ergens
                    onderweg uit de orbit verdwenen.
                </p>

                <div class="mv-error__actions">
                    <a class="mv-error__primary" href="<?php echo esc_url(home_url('/')); ?>">
                        Terug naar home
                        <span aria-hidden="true">→</span>
                    </a>

                    <a class="mv-error__secondary" href="<?php echo esc_url(home_url('/werk/')); ?>">
                        Bekijk mijn werk
                    </a>
                </div>
            </div>

            <div class="mv-error-terminal" aria-hidden="true">
                <div class="mv-error-terminal__bar">
                    <span><i></i><i></i><i></i></span>
                    <small>// route.check</small>
                    <b>FAILED</b>
                </div>

                <div class="mv-error-terminal__body">
                    <p><span>&gt;</span> locating requested route...</p>
                    <p><span>&gt;</span> status: <strong>NOT_FOUND</strong></p>
                    <p><span>&gt;</span> recovery paths available: 02</p>
                    <p class="mv-error-terminal__cursor"><span>&gt;</span> _</p>
                </div>
            </div>

        </div>

        <p class="mv-error__note" aria-hidden="true">
            Wrong turn. Good website though. :)
        </p>

    </div>

</section>

<?php get_footer(); ?>
