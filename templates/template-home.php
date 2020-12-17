<?php
/*
 * Template Name: Home Page
 */
get_header('home'); ?>

<main class="site-main">
    <div class="site-container">
        <section class="main-offer">
            <div class="container main-offer__container">
            <div class="main-offer__content wow fadeInLeft">
                    <h1 class="main-offer__title">
                        <?php the_field('first_title'); ?>
                    </h1>
                    <div class="main-offer__text">
                        <?php the_field('first_text'); ?>
                    </div>
                    <div class="main-offer__buttons">
                        <a href="#" class="button main-offer__button">Call us</a>
                        <span><?php the_field('first_buttons_text'); ?></span>
                        <a href="#" class="button main-offer__button">Message us</a>
                    </div>
                </div>
                <div class="main-offer__logo wow fadeInUp">
                    <img src="<?php the_field('first_logo'); ?>" alt="">
                </div>
            </div>
        </section><!-- /.main-offer -->

        <section class="support">
            <div class="container support__container">
                <div class="support__content wow fadeInRight" data-wow-offset="150">
                    <h2 class="support__title">Support<br> survivors today</h2>
                    <div class="support__text">
                        <p>Your contributions make a difference. Explore the ways you can help us stand up to domestic violence.</p>
                    </div>
                    <div class="support__buttons">
                        <a href="make-a-difference.html" class="button support__button">Get involved</a>
                    </div>
                </div>
                <div class="support__logo wow fadeInUp" data-wow-offset="150">
                    <img src="/wp-content/themes/havenhills/dist/img/base/img-2.png" alt="">
                </div>
            </div>
        </section><!-- /.support -->

        <section class="covid-19">
            <div class="container covid-19__container wow fadeInUp" data-wow-offset="150">
                <h2 class="covid-19__title">Changes due to covid-19</h2>
                <div class="covid-19__content">
                    <div class="covid-19__text">
                        <ul>
                            <li>Our crisis and transitional shelters remain open.</li>
                            <li>Our staff is working remotely.</li>
                            <li>Our weekly support groups are now teleconferencing.</li>
                            <li>Case management support is now offered over the phone.</li>
                        </ul>
                    </div>
                    <div class="covid-19__buttons">
                        <a href="#" class="button covid-19__button">Read more</a>
                    </div>
                </div>
            </div>
        </section><!-- /.covid-19 -->

        <section class="site-cards">
            <h2 class="visually-hidden">Site cards</h2>
            <div class="container site-cards__container">
                <a href="article-2.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-1.jpg" alt="">
                    </div>
                    <div class="site-card__title">Learn about domestic violence</div>
                </a>
                <a href="/our-impact.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0.15s">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-2.jpg" alt="">
                    </div>
                    <div class="site-card__title">Our impact</div>
                </a>
                <a href="/blog.html" class="site-cards__card site-card wow fadeIn" data-wow-delay="0.30s">
                    <div class="site-card__logo">
                        <img src="/wp-content/themes/havenhills/dist/img/base/site-card-3.jpg" alt="">
                    </div>
                    <div class="site-card__title">Blog</div>
                </a>
            </div>
        </section>

        <section class="newsletter" id="newsletter">
            <div class="newsletter__main">
                <div class="container wow fadeInUp" data-wow-offset="150">
                    <div class="newsletter__top">
                        <h2 class="newsletter__title">Newsletter</h2>
                        <div class="newsletter__text">
                            <p>Haven Hills offers shelter from domestic violence. </p>
                            <p>Learn how to help us stand up to domestic violence by subscribing to our newsletter today.</p>
                        </div>
                    </div>
                    <form action="#" class="form newsletter__form">
                        <ul class="form__fields-list fields-list">
                            <li class="fields-list__item">
                                <input type="text" name="name" id="newsletter-name">
                                <label for="newsletter-name">Name</label>
                            </li>
                            <li class="fields-list__item">
                                <input type="text" name="lastname" id="newsletter-lastname">
                                <label for="newsletter-lastname">Last Name</label>
                            </li>
                            <li class="fields-list__item">
                                <input type="email" name="email" id="newsletter-email">
                                <label for="newsletter-email">Email</label>
                            </li>
                        </ul>
                        <button type="submit" class="button">Get involved</button>
                    </form>
                </div>
            </div>
            <div class="newsletter__bottom">
                Lifting up survivors
            </div>
        </section>
    </div>
</main><!-- / .site-main -->

<?php get_footer(); ?>