<section class="uk-section uk-section-small uk-section-secondary uk-light uk-padding-remove-bottom uk-padding-remove-top uk-container">
    <div class="" uk-grid>
        <div class="uk-width-2-3@m">
            <div class="uk-position-relative uk-visible-toggle uk-light"  tabindex="1" uk-slideshow="animation: push">

                <ul class="uk-slideshow-items">
                    <?php if (!is_null($content['video'])): ?>
                    <li>
                        <video src="<?= $content['video']; ?>"  uk-cover controls playsinline uk-video="automute: true"></video>
                    </li>
                    <?php endif ?>
                    <?php foreach ($content['images'] as $key => $image): ?>
                        <li>
                            <img src="<?= $image ?>" alt="" uk-cover>
                        </li>
                    <?php endforeach ?>
                </ul>
            
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
            
            </div>
            <legend class="uk-legend uk-margin-top"><?= $content['title']; ?></legend>

            <!--
            <div class="uk-margin">
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
                    <a class="uk-button uk-button-default" href="https://drive.google.com/u/0/uc?export=download&confirm=HXcQ&id=<?= $content['download']; ?>">Скачать</a>
            </div>
                    -->
            <div class="uk-margin-top uk-margin-bottom padding-remove uk-hidden@m">
                <div class="uk-flex-middle uk-margin-bottom" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-border-circle" width="70" height="70" src="https://placepic.ru/wp-content/uploads/2018/01/art-krasivyie-kartinki-Putin-politika-1331294.jpeg">
                    </div>
                    <div class="uk-width-expand">
                        <h3 class="uk-card-title uk-margin-remove-bottom">Putin007</h3>
                        <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                    </div>
                </div>

                <div class="uk-button-group uk-width-1-1 padding-remove">
                    <button class="uk-button uk-button-default uk-width-expand">Скачать</button>
                    <div class="uk-inline">
                        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
                        <div class="uk-background-secondary uk-light" uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                            <ul class="uk-nav uk-dropdown-nav ">
                                <li><a href="#">Windows</a></li>
                                <li><a href="#">Linux</a></li>
                                <li><a href="#">Android</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="uk-margin">
                <p><?= $content['description']; ?></p>
            </div>

            <div class="uk-slider-container-offset" uk-slider>

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                <?php foreach ($recommendation as $key => $value): ?>
                    <li>
                        

                        <a href="./<?= $value['id']; ?>" style="text-decoration: none;">
                            <div class="uk-card uk-card-default uk-border-rounded uk-card-secondary">
                                <div class="uk-card-media-top" style="padding: 0px;">
                                    <img class="uk-border-rounded" src="<?= $value['poster']; ?>" alt="img" style="min-width: 100%; max-width: 100%;">
                                </div>
                            </div>
                        </a>
                        
                </li>
                <?php endforeach ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

<ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>



            <form>
                <fieldset class="uk-fieldset">
            
                    <legend class="uk-legend">Комментарии</legend>

            
                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" placeholder="" style="resize: vertical; min-height: 50px;"></textarea>
                    </div>
                    <div class="uk-margin">
                        <button class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Отправить</button>
                    </div>
                </fieldset>
            </form>

            <ul class="uk-comment-list">
                <?php for ($i = 0; $i < 5; $i++): ?>
                <li>
                    <article class="uk-comment uk-visible-toggle" tabindex="-1">
                        <header class="uk-comment-header uk-position-relative">
                            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-comment-avatar uk-border-rounded" src="https://pixelbox.ru/wp-content/uploads/2021/04/cats-ava-steam-5.jpg" width="80" height="80" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
                                    <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset" href="#">12 days ago</a></p>
                                </div>
                            </div>
                            <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a class="uk-link-muted" href="#">Reply</a></div>
                        </header>
                        <div class="uk-comment-body">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                        </div>
                    </article>
                </li>
                <?php endfor; ?>
            </ul>
            
        </div>
        <div class="uk-width-1-3">
            <!-- style="z-index: 0;" uk-sticky="offset: 90; bottom: true; media: @m; "-->
            <fieldset class="uk-fieldset"  >
                

                <div class="uk-card uk-card-secondary uk-width-1-1@m uk-visible@m" >
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-auto">
                                <img class="uk-border-circle" width="70" height="70" src="https://placepic.ru/wp-content/uploads/2018/01/art-krasivyie-kartinki-Putin-politika-1331294.jpeg">
                            </div>
                            <div class="uk-width-expand">
                                <h3 class="uk-card-title uk-margin-remove-bottom">Putin007</h3>
                                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body">
                        <ul class="uk-list">
                            <li>ОС: Windows 7 SP1 or newer</li>
                            <li>Процессор: Intel i5-4590 / AMD Ryzen 1500X</li>
                            <li>Оперативная память: 6 GB ОЗУ</li>
                            <li>Видеокарта: GeForce GTX 970/1060 or Radeon RX 480</li>
                            <li></li>
                        </ul>

                    </div>
                    <div class="uk-card-footer">
                        
                            <div class="uk-button-group uk-width-1-1">
                                <button class="uk-button uk-button-default uk-width-expand">Скачать</button>
                                <div class="uk-inline">
                                    <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
                                    <div class="uk-background-secondary uk-light" uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
                                        <ul class="uk-nav uk-dropdown-nav ">
                                            <li><a href="#">Windows</a></li>
                                            <li><a href="#">Linux</a></li>
                                            <li><a href="#">Android</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </fieldset>
            
        </div>

    </div>
    
    
</section>