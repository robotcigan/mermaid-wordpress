<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package emptyWordpressTheme
 */

get_header(); ?>

    <main>
      <div class="hero offset">
        <header class="main-header">
          <div class="grid grid--container">
            <div class="row row--xs-center">
              <div class="col col--xs-3"><a class="logo" href="/">Русалочка</a></div>
              <div class="col col--xs-9"></div>
            </div>
          </div>
        </header>

        <div class="hero__align">
          <div class="hero__content wow fade">
            <h2 class="hero__subheader">музыкальный спектакль </h2>
            <h1 class="hero__header">&laquo;Удивительная история Русалочки&raquo;</h1><a class="btn btn--primary" href="https://vk.com/away.php?utf=1&amp;to=https%3A%2F%2Fkrd.kassir.ru%2Fteatr%2Fdvorets-iskusstv-premera%2Fudivitelnaya-istoriya-rusalochki_2017-06-01_1800" target="_blank">Купить билет</a>
            <h3 class="hero__time">1 июня 2017 года в 18:00</h3>
          </div>
        </div>
      </div>

      <div class="grid grid--container">
        <div class="about offset fade wow">
          <div class="about__img"><img src="<?php bloginfo("template_directory");?>/img/about.jpg" alt=""></div>
          <div class="about__text">
            <h3 class="h3">О спектакле</h3>
            <p>Музыкальный спектакль «Удивительная история Русалочки» — незабываемое шоу по известной сказке с авторскими костюмами, яркими декорациями, живым вокалом и прекрасной хореографией сможет удивить не только детей, но и взрослых. Более 2 часов музыки и танца, 50 артистов, более 100 костюмов и 20 видео декораций.</p>
            <p>Это яркий мюзикл с участием профессиональных и непрофессиональных артистов, а также людей с дополнительными физическими потребностями — участников международных творческих фестивалей и конкурсов.</p>
          </div>
        </div>

        <div class="news offset fade wow">
          <div class="center">
            <h3 class="h3">Новости</h3>
          </div>
          <div class="row">
            <div class="col col--sm-4">
              <div class="news__item item"><a class="item__img" href=""><img src="img/news/1.jpg" alt=""></a><a class="item__title" href="">Продажа билетов открыта</a>
                <p class="item__anons">Завершились фотосессии артистов спектакля. Зрителей ждет потрясающая по своей красоте программка, в которой каждый сможет увидеть историю&hellip;</p>
              </div>
            </div>
            <div class="col col--sm-4">
              <div class="news__item item"><a class="item__img" href=""><img src="img/news/1.jpg" alt=""></a><a class="item__title" href="">Дорогие друзья, открыта официальная продажа билетов на наш спектакль</a>
                <p class="item__anons">Завершились фотосессии артистов спектакля. Зрителей ждет потрясающая по своей красоте программка, в которой каждый сможет увидеть историю&hellip;</p>
              </div>
            </div>
            <div class="col col--sm-4">
              <div class="news__item item"><a class="item__img" href=""><img src="img/news/1.jpg" alt=""></a><a class="item__title" href="">Дорогие друзья, открыта официальная продажа билетов на наш спектакль</a>
                <p class="item__anons">Завершились фотосессии артистов спектакля. Зрителей ждет потрясающая по своей красоте программка, в которой каждый сможет увидеть историю&hellip;</p>
              </div>
            </div>
          </div>
        </div>

      </div>



      <div class="grid grid--container grid--no-gutters">
        <div class="troupe wow fade offset">
          <div class="center">
            <h3 class="h3">Труппа</h3>
          </div>
          <div class="row row--no-gutters">

            <?php if (have_posts()) : while (have_posts()) : the_post(); $i++; ?>
              <div class="col col--xl-2 col--lg-3 col--md-4 col--sm-4 col--xs-6 col--no-gutters">
                <div class="troupe__item item">
                  <div class="item__img" style="background: url('<?php bloginfo("template_directory");?>/img/troupe/1.jpg');"></div>
                  <div class="item__name"><?php the_title(); ?></div>
                  <div class="item__role">
                    <?php echo get_field('role'); ?>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>

            <?php
              // создаем экземпляр
              $my_posts = new WP_Query;
              // делаем запрос
              $myposts = $my_posts->query( array(
                'post_type' => 'troupe'
              ) );
              // обрабатываем результат
              foreach( $myposts as $post ){
                $photo = get_field('photo');
              ?>
              <!--Разметка вывода кастомного поста-->

              <div class="col col--xl-2 col--lg-3 col--md-4 col--sm-4 col--xs-6 col--no-gutters">
                <div class="troupe__item item">
                  <div class="item__img" style="background: url('<?php echo $photo['url']; ?>');"></div>
                  <div class="item__name">
                    <?php echo $post->post_title; ?>
                  </div>
                  <div class="item__role">
                    <?php echo get_field('role'); ?>
                  </div>
                </div>
              </div>

            <?php
            }
            ?>

            <div class="col col--xl-2 col--lg-3 col--md-4 col--sm-4 col--xs-6 col--no-gutters">
              <div class="troupe__item item">
                <div class="item__img" style="background: url('<?php bloginfo("template_directory");?>/img/troupe/21.jpg');"></div>
                <div class="item__name">Артем Еременко </div>
                <div class="item__role">Моряк</div>
              </div>
            </div>
            <div class="col col--xl-2 col--lg-3 col--md-4 col--sm-4 col--xs-6 col--no-gutters">
              <div class="troupe__item item">
                <div class="item__img" style="background: url('<?php bloginfo("template_directory");?>/img/troupe/22.jpg');"></div>
                <div class="item__name">Игорь Атабеков </div>
                <div class="item__role">Моряк</div>
              </div>
            </div>
            <div class="col col--xl-2 col--lg-3 col--md-4 col--sm-4 col--xs-6 col--no-gutters">
              <div class="troupe__item item">
                <div class="item__img" style="background: url('<?php bloginfo("template_directory");?>/img/troupe/23.jpg');"></div>
                <div class="item__name">Хор «Легенда»</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wow fade offset">
        <div class="center">
          <h3 class="h3">Организатор</h3>
        </div>
        <div class="grid grid--container">
          <div class="row">
            <div class="col col--sm-8 col--sm-offset-2">
              <div class="organisator"><img src="<?php bloginfo("template_directory");?>/img/organisator.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="wow fade">
        <div class="center">
          <h3 class="h3">творческая группа</h3>
        </div>
        <div class="team slider offset">

          <?php
            // создаем экземпляр
            $my_posts = new WP_Query;
            // делаем запрос
            $myposts = $my_posts->query( array(
              'post_type' => 'team'
            ) );
            // обрабатываем результат
            foreach( $myposts as $post ){
              $photo = get_field('photo');
            ?>
            <!--Разметка вывода кастомного поста-->
            <div class="team__slide">
              <div class="team__img" style="background-image: url('<?php echo $photo['url'] ?>');"></div>
              <div class="team__name">
                <?php echo $post->post_title; ?>
              </div>
              <div class="team__position">
                <?php echo $post->role; ?>
              </div>
              <div class="team__link">
                <a href="<?php echo $post->team_link ?>" target="_blank">
                  <?php echo $post->team_link ?>
                </a>
              </div>
            </div>

          <?php
          }
          ?>

          <div class="team__slide">
            <div class="team__img" style="background-image: url('<?php bloginfo("template_directory");?>/img/team/11.jpg');"></div>
            <div class="team__name">Факультет архитектуры и дизайна КубГУ </div>
            <div class="team__position">Костюмеры, художники по костюмам </div>
            <div class="team__link"><a href="https://kubsu.ru/ru/fad" target="_blank">https://kubsu.ru/ru/fad</a></div>
          </div>
          <div class="team__slide">
            <div class="team__img" style="background-image: url('<?php bloginfo("template_directory");?>/img/team/12.jpg');"></div>
            <div class="team__name">Татьяна Алексеенко </div>
            <div class="team__position">Графический дизайнер </div>
            <div class="team__link"><a href="https://vk.com/id2699025" target="_blank">https://vk.com/id2699025</a></div>
          </div>
        </div>
      </div>
      <div class="offset wow fade">
        <div class="center">
          <h3 class="h3">Партнеры проекта</h3>
        </div>
        <div class="partners slider">
          <div class="partner">
            <div class="partner__img"><img src="<?php bloginfo("template_directory");?>/img/partners/1.jpg" alt=""></div>
          </div>
          <div class="partner">
            <div class="partner__img"><img src="<?php bloginfo("template_directory");?>/img/partners/2.jpg" alt=""></div>
          </div>
          <div class="partner">
            <div class="partner__img"><img src="<?php bloginfo("template_directory");?>/img/partners/3.jpg" alt=""></div>
          </div>
          <div class="partner">
            <div class="partner__img"><img src="<?php bloginfo("template_directory");?>/img/partners/4.jpg" alt=""></div>
          </div>
          <div class="partner">
            <div class="partner__img"><img src="<?php bloginfo("template_directory");?>/img/partners/5.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>
