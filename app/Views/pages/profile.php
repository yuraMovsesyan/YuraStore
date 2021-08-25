<section class="uk-section uk-section-small uk-section-secondary uk-light uk-padding-remove-bottom uk-container">
<div class="uk-container">
        <div class="uk-grid-medium uk-grid " uk-grid="">
                <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column uk-first-column ">
                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container uk-sticky uk-background-secondary"
                        uk-sticky="offset: 90; bottom: true; media: @m; " style="">
                                <div class="uk-card-header ">
                                        <div class="uk-grid-small uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                                                <section class="uk-first-column ">
                                                        <div class="uk-width-1-3 uk-width-1-4@s uk-width-1-2@m uk-margin-auto uk-visible-toggle uk-position-relative uk-border-circle uk-overflow-hidden uk-light">
                                                                <img class="uk-width-1-1" src="<?= $avatar ?>">
                                                                <a class="uk-link-reset uk-overlay-primary uk-position-cover uk-hidden-hover"
                                                                href="#"><div class="uk-position-center"><span uk-icon="icon: camera; ratio: 1.25;" class="uk-icon"><svg width="25" height="25" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <circle fill="none" stroke="#000" stroke-width="1.1" cx="10" cy="10.8" r="3.8"></circle> <path fill="none" stroke="#000" d="M1,4.5 C0.7,4.5 0.5,4.7 0.5,5 L0.5,17 C0.5,17.3 0.7,17.5 1,17.5 L19,17.5 C19.3,17.5 19.5,17.3 19.5,17 L19.5,5 C19.5,4.7 19.3,4.5 19,4.5 L13.5,4.5 L13.5,2.9 C13.5,2.6 13.3,2.5 13,2.5 L7,2.5 C6.7,2.5 6.5,2.6 6.5,2.9 L6.5,4.5 L1,4.5 L1,4.5 Z"></path></svg></span></div></a>
                                                        </div>
                                                </section>
                                                <div class="uk-text-center uk-grid-margin uk-first-column">
                                                        <div class="uk-h4 uk-margin-remove">
                                                                <?= $name; ?>
                                                        </div>
                                                        <div class="uk-text-meta">
                                                                        <?= $social_network.": ".$social_id; ?>
                                                        </div>
                                                </div>
                                                <div class="uk-grid-margin uk-first-column">
                                                        <div class="uk-grid-small uk-flex-center uk-grid" uk-grid="">
                                                                <div class="uk-first-column">
                                                                        <a class="uk-button uk-button-default uk-button-small uk-text-left" uk-tooltip="title: Tools; pos: top-left" href="<?php echo base_url().'/tools'; ?>"><span class="uk-margin-xsmall-right uk-icon uk-tila" uk-icon="server"></span></a>
                                                                </div>
                                                                <div>
                                                                        <a class="uk-button uk-button-default uk-button-small" href="<?php echo base_url().'/exit'; ?>" uk-tooltip="title: Log out; pos: top-left">
                                                                                <span uk-icon="icon: sign-out; ratio: .75;" class="uk-icon">
                                                                                        <svg width="15" height="15" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                                <polygon points="13.1 13.4 12.5 12.8 15.28 10 8 10 8 9 15.28 9 12.5 6.2 13.1 5.62 17 9.5">
                                                                                                </polygon>
                                                                                                <polygon points="13 2 3 2 3 17 13 17 13 16 4 16 4 3 13 3">
                                                                                                </polygon>
                                                                                        </svg>
                                                                                </span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="uk-card uk-card-secondary uk-card-body">
                                        <ul class="uk-nav-secondary uk-nav-parent-icon" uk-nav>
                                                <li class="uk-active"><a href="#">Active</a></li>
                                                <li class="uk-parent">
                                                <a href="#">Parent</a>
                                                <ul class="uk-nav-sub">
                                                        <li><a href="#">Sub item</a></li>
                                                        <li><a href="#">Sub item</a></li>
                                                </ul>
                                                </li>
                                                <li class="uk-parent">
                                                <a href="#">Parent</a>
                                                <ul class="uk-nav-sub">
                                                        <li><a href="#">Sub item</a></li>
                                                        <li><a href="#">Sub item</a></li>
                                                </ul>
                                                </li>
                                                <li class="uk-nav-header">Header</li>
                                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                                                <hr />
                                                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                                        </ul>
                                </div>
                        </div>
                        <div class="uk-sticky-placeholder" style="height: 357px; margin: 0px;"
                        hidden="">
                        </div>
                </div>
                <div class="uk-width-1-1 uk-width-expand@m">
                        <div class="uk-card uk-card-default uk-card-small tm-ignore-container uk-background-secondary">
                                <header class="uk-card-header">
                                        <h1 class="uk-h2">
                                                Settings
                                        </h1>
                                </header>
                                <div class="uk-card-body">
                                        <form class="uk-form-stacked">
                                                <div class="uk-grid-medium uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                                                        <fieldset class="uk-fieldset uk-first-column">
                                                                <legend class="uk-h4">
                                                                        Email
                                                                </legend>
                                                                <div class="uk-grid-small uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                                                                        <?php  if (!is_null($email)): ?>
                                                                                <div class="uk-first-column">
                                                                                        <label>
                                                                                                <div class="uk-form-label">
                                                                                                        Current Email
                                                                                                </div>
                                                                                                <input class="uk-input " type="email" value="<?= $email; ?>"
                                                                                                disabled="">
                                                                                        </label>
                                                                                </div>
                                                                        <?php endif; ?>
                                                                        <div class="uk-grid-margin uk-first-column">
                                                                                <label>
                                                                                        <div class="uk-form-label">
                                                                                                New Email
                                                                                        </div>
                                                                                        <input class="uk-input" type="email">
                                                                                </label>
                                                                        </div>
                                                                        <div class="uk-grid-margin uk-first-column uk-background-secondary">
                                                                                <button class="uk-button uk-button-default uk-button-small" title="Log out">
                                                                                SAVE
                                                                                </button>
                                                                        </div>
                                                                </div>
                                                        </fieldset>
                                                        <fieldset class="uk-fieldset uk-grid-margin uk-first-column">
                                                                <legend class="uk-h4">
                                                                        Password
                                                                </legend>
                                                                <div class="uk-grid-small uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
                                                                        <div class="uk-first-column">
                                                                                <label>
                                                                                        <div class="uk-form-label">
                                                                                                Current Password
                                                                                        </div>
                                                                                        <input class="uk-input " type="password">
                                                                                </label>
                                                                        </div>
                                                                        <div class="uk-grid-margin uk-first-column">
                                                                                <label>
                                                                                        <div class="uk-form-label">
                                                                                                New Password
                                                                                        </div>
                                                                                        <input class="uk-input " type="password">
                                                                                </label>
                                                                        </div>
                                                                        <div class="uk-grid-margin uk-first-column">
                                                                                <label>
                                                                                        <div class="uk-form-label">
                                                                                                Confirm Password
                                                                                        </div>
                                                                                        <input class="uk-input " type="password">
                                                                                </label>
                                                                        </div>
                                                                        <div class="uk-grid-margin uk-first-column">
                                                                                <button class="uk-button uk-button-default uk-button-small" title="Log out">
                                                                                        SAVE
                                                                                </button>
                                                                        </div>
                                                                </div>
                                                        </fieldset>
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </div>
</div>
</section>