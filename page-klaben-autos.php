<?php
/*
 * KLABEN is no longer part of the current portfolio selection.
 * Keep the old slug tidy by sending visitors back to Werk.
 */
wp_safe_redirect(home_url('/werk/'), 301);
exit;
