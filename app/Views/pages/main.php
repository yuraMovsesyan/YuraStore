<section class="uk-position-relative uk-visible-toggle uk-light uk-slideshow" uk-slideshow="min-height: 300; max-height: 400;">
        <ul class="uk-slideshow-items" style="height: 400px;">
                <li style="background-color: rgb(11, 10, 18);" class="">
                        <a href="#"><figure class="uk-container uk-height-1-1"><img src="https://yura.store/img/927025.png" alt="New Macbook" width="1200" height="600" uk-cover="" class="uk-cover" style="width: 1200px; height: 600px;"></figure></a>
                </li>
                <li style="background-color: rgb(206, 7, 30); transform: translateX(0px);"
                class="uk-active uk-transition-active">
                        <a href="#"><figure class="uk-container uk-height-1-1"><img src="https://yura.store/img/926829.png" alt="iPhone" width="1200" height="600" uk-cover="" class="uk-cover" style="width: 1200px; height: 600px;"></figure></a>
                </li>
                <li style="background-color: rgb(31, 32, 36);" class="">
                        <a href="#"><figure class="uk-container uk-height-1-1"><img src="https://yura.store/img/1030210.png" alt="iPad" width="1200" height="600" uk-cover="" class="uk-cover" style="width: 1200px; height: 600px;"></figure></a>
                </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-previous uk-icon uk-slidenav"
        href="#" uk-slideshow-item="previous" uk-slidenav-previous=""><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-next uk-icon uk-slidenav"
        href="#" uk-slideshow-item="next" uk-slidenav-next=""><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
        <div class="uk-position-bottom-center uk-position-small">
                <ul class="uk-slideshow-nav uk-dotnav">
                        <li uk-slideshow-item="0" class="">
                                <a href="#"></a>
                        </li>
                        <li uk-slideshow-item="1" class="uk-active">
                                <a href="#"></a>
                        </li>
                        <li uk-slideshow-item="2" class="">
                                <a href="#"></a>
                        </li>
                </ul>
        </div>
</section>


<section class="uk-section uk-section-small uk-section-secondary uk-light uk-padding-remove-bottom uk-container">
    <div uk-filter="target: .js-filter">

        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-expand">
    
                <div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
                    <div>
                        <ul class="uk-subnav uk-subnav-pill" uk-margin>
                            <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-subnav uk-subnav-pill" uk-margin>
                            <li uk-filter-control="[data-platform='Android']"><a href="#">Android</a></li>
                            <li uk-filter-control="[data-platform='Windows']"><a href="#">Windows</a></li>
                            <li uk-filter-control="[data-platform='Linux']"><a href="#">Linux</a></li></li>
                        </ul>
                    </div>
                </div>
    
            </div>
            <div class="uk-width-auto uk-text-nowrap">
    
    
                <span class="uk-active" uk-filter-control="sort: data-name"><a class="uk-icon-link" href="#" uk-icon="icon: arrow-down"></a></span>
                <span uk-filter-control="sort: data-name; order: desc"><a class="uk-icon-link" href="#" uk-icon="icon: arrow-up"></a></span>
    
            </div>
        </div>
    
        <ul class="js-filter  uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-child-width-1-5@xl " uk-grid="masonry: true">
            <?php foreach ($content as $key => $value): ?>
                <li data-platform="Android" data-name="<?= $value['title']; ?>">
                    

                    <a href="./<?= $value['id']; ?>" style="text-decoration: none;">
                        <div class="uk-card uk-card-default uk-border-rounded uk-card-secondary">
                            <div class="uk-card-media-top" style="padding: 0px;">
                                <img class="uk-border-rounded" src="<?= $value['images']; ?>" alt="img" style="min-width: 100%; max-width: 100%;">
                            </div>
                            <div class="uk-card-body">
                                <h3 class="uk-card-title"><?= $value['title']; ?></h3>
                                <!--<p><?= $value['description']; ?></p>-->
                            </div>
                        </div>
                    </a>
                    
                </li>
            <?php endforeach ?>
        </ul>
    
    </div>
</section>