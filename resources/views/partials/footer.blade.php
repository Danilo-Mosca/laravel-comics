<footer>
    
    <div class="container-fluid footer-up d-flex align-items-center">
        <div class="container">
            <ul class="container d-flex justify-content-evenly footer-up-ul-class">
                <li class="d-flex align-items-center">
                    <i><img
                            src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                            alt="Digital Comics"></i><span>Digital Comics</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img
                            src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="Digital Comics"></i><span>DC Merchandise</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img
                            src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="Digital Comics"></i><span>Subscription</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img
                            src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                            alt="Digital Comics"></i><span>Comic Shop Locator</span>
                </li>
                <li class="d-flex align-items-center">
                    <i class="d-flex"><img
                            src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                            alt="Digital Comics"></i><span>DC Power Visa</span>
                </li>
            </ul>
        </div>
    </div>

    
    
    <div class="container">
        <div class="row d-flex">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <p>Dc Comics</p>
                <ul>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <p>Shop</p>
                <ul>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <p>DC</p>
                <ul>
                    <li>Terms Of Use</li>
                    <li>Privacy Policy (New)</li>
                    <li>Ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                <p>Sites</p>
                <ul>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC Kids</li>
                    <li>DC Universe</li>
                    <li>DC Power Visa</li>
                </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3 col-lg-5 container-dc-image">
                {{-- Con l'istruzione di seguito per accedere all'immagine da inserire nel layout, affinché Blade la processi, utilizzo la direttiva
         Vite::asset() come di seguito (notiamo come asset sia un metodo statico): --}}
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC Comics" class="dc-image">
            </div>
        </div>
    </div>

    
    
    <div class="container-fluid footer-down d-flex">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="button-footer-down">Sign-Up Now!</button>

            <ul class="d-flex justify-content-between align-items-center button-footer-social">
                <li>Follow Us</li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Youtube"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest"></i></li>
                <li><i><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope"></i></li>
            </ul>
        </div>
    </div>

</footer>
