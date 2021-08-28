<section class="uk-section uk-section-small uk-section-secondary uk-light uk-padding-remove-bottom uk-container">
    <div class="uk-child-width-1-2@m" uk-grid>
        <div>
            <div class="uk-position-relative uk-visible-toggle uk-light"  tabindex="1" uk-slideshow="animation: push">

                <ul class="uk-slideshow-items">
                    <?php if (!is_null($content['video'])): ?>
                    <li>
                        <video src="<?= $content['video']; ?>" controls playsinline uk-video="automute: true"></video>
                    </li>
                    <?php endif ?>
                    <?php foreach ($content['images'] as $key => $image): ?>
                        <li>
                            <img src="<?= $image ?> alt="" uk-cover>
                        </li>
                    <?php endforeach ?>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
            </div>

            <div class="uk-margin">
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
            </div>
        </div>
        <div>
            <fieldset class="uk-fieldset">
                <legend class="uk-legend"><?= $content['title']; ?></legend>
                <div class="uk-margin">
                    <p><?= $content['description']; ?></p>
                </div>
                
            </fieldset>
            
        </div>
    </div>
    
</section>