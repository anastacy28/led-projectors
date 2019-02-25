<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <title><?php bloginfo( 'name' ); echo " | "; bloginfo ( 'description'); ?> </title>
  <?php wp_head(); ?>
</head>
<body>
  <a href="#" id="popup__toggle" onclick="return false;" class="phone" data-toggle="modal" data-target="#exampleModal">
           <div class="circlephone" style="transform-origin: center;"></div>
           <div class="circle-fill " style="transform-origin: center;"></div>
           <div class="img-circle icon-forwarded" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;"></div></div></a>
  <a href="#" id="to_up_page" class="btn-up">Вверх</a>          
  <header class="header navbar fixed-top">
    <div class="container">
         <div class="row align-items-center">
               <div class="col-md-4 col-sm-4 col-7 center">
                <?php the_custom_logo( $blog_id); ?>
                 <!-- <a href="#" class="navbar-brand"><img class="img-fluid" < <?php the_custom_logo( $blog_id); ?>></a> -->
              </div>
               <div class="col-md-8 col-sm-12 col-12">
                  <ul class="nav flex-end contacts-list">
                      <li class="icon-cellular"><a href="tel:+380686085995">+38 (068) 608-59-95</a></li>
                      <li><button type="button" class="btn btn-orange wow flash" data-toggle="modal" data-target="#exampleModal"> Заказать обратный звонок
                         </button></li>
                  </ul> 
               </div>
          </div> 
    </div>
  </header>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заказать обратный звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php echo do_shortcode('[contact-form-7 id="128" title="Контактная форма 1"]') ?>
                <!-- <div class="input-box">
                             <input style="display:none;" type="text" name="Заявка из раздела" value="Обратный звонок">
                             <input class="form-control" type="text" name="Имя" id="name-visa" placeholder="Имя" >
                             <input class="form-control" type="text" name="Номер телефона" id="phone-visa" placeholder="Номер телефона" required />
                      </div>  -->
      </div>
      <!-- <div class="modal-footer">
        <input type="submit" class="button">Отправить заявку</button>
      </div> -->
    </div>
  </div>
</div><!-- Close Modal -->
 <!-- OrderModal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Заказать товар</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo do_shortcode('[contact-form-7 id="173" title="Заказать прожекторы - orderModal"]' ) ?>
       <!--  <div class="input-box">
                             <input style="display:none;" type="text" name="Заявка из раздела" value="Обратный звонок">
                             <input class="form-control" type="text" name="Имя" id="name-visa" placeholder="Имя" >
                             <input class="form-control" type="tel" name="Номер телефона" id="phone-visa" placeholder="Номер телефона" required />
                             <input class="form-control" type="text" name="Заказ" id="order-visa" placeholder="Введите название товара, количество" >
                      </div> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="button">Отправить заявку</button> -->
      </div>
    </div>
  </div>
</div><!-- Close orderModal -->
 <div class="section">
  <div class="container">
    <div class="heading-main">
      <div class="heading-main__text">
          <p><?php the_field('main_title'); ?></p>
      </div>
    </div>
   <div class="main-content"> 
        <div class="sidebar"> 
            <ul class="sidebar__list">  
                <li class="monodionie icon-right button-inverse wow bounceInLeft"><a href="#monodiodnie" data-target="anchor"><span class="upper"><?php the_field('button_1'); ?></span><span class="strike"><?php the_field('button_prise_strike_1'); ?></span><span><?php the_field('button_prise_1'); ?></span></a>
                   <span class="monodiodnie-hover">
                       <span class="monodiodnie-hover__content">
                             <span class="monodiodnie-hover__content-image">
                                     <img src="<?php echo bloginfo('template_url'); ?>/assets/images/10w.png" alt="LED-projectors">
                             </span>
                             <span class="monodiodnie-hover__content-description">
                                 <span class="upper">Монодиодные</span> ЛЕД прожекторы содержат <span class="upper">один</span> элемент свечения. Более устойчивы к перепадам напряжения. Количество люминов на 1 Ватт - 90.
                             </span>
                       </span> 
                   </span>
                </li> 
                <li class="mnogodiodnie icon-right button-inverse wow bounceInLeft"><a href="#mnogodiodnie" data-target="anchor"><span class="upper"><?php the_field('button_2'); ?></span><span class="strike"><?php the_field('button_prise_strike_2'); ?></span><span><?php the_field('button_prise_2'); ?></span></a>
                   <span class="mnogodiodnie-hover">
                       <span class="mnogodiodnie-hover__content">
                             <span class="mnogodiodnie-hover__content-image">
                                     <img src="<?php echo bloginfo('template_url'); ?>/assets/images/Smd100w.png" alt="LED-projectors">
                             </span>
                             <span class="mnogodiodnie-hover__content-description">
                               <span class="upper">Многодиодные</span> ЛЕД прожекторы содержат от 18 элементов свечения. Количество люминов на 1 Ватт - 100. 
                             </span>
                       </span> 
                   </span>

                </li>
            </ul>
        </div>
         <div class="baner-holder wow bounceInRight" style="background-image: url(<?php the_field('banner_background'); ?>);">
           <div class="baner-holder__body">
               <div class="baner-holder__body__left">
                 <div class="baner-holder__text">
                  <div class="baner-holder__text-title">
                           <?php the_field('banner_title'); ?> 
                  </div>
               
                  <div class="baner-holder__text-description">
                           <?php the_field('banner_subtitle'); ?>
                  </div>
                </div>
                </div>
                <div class="baner-holder__body__right">
                  <div class="baner-holder__image"> 
                        <img src=<?php the_field('banner_img'); ?>>

                  </div> 
                  </div>
                  </div>
          </div>  
  </div>
 </div>
 <div class="heading">
  <div class="heading__body">
    Акция закончится через:
    </div>
    <div class="arrow-top"></div>
  </div>
  </div>
  <div class="section-orange">
    <div class="container">
      <div class="timer-box"> 
           <div id="countbox"></div>
    </div>
   </div>
  </div>
   <div class="section">  
      <a class="button-animat button_modal button-animat text-center center" href="#" data-toggle="modal" data-target="#orderModal" style="color: #fff">Закажите прямо сейчас!</p></a>
     <div class="containr">
        <div class="heading-product wow shake">
           <div class="heading-product__content" id="monodiodnie">
            <hr>
            <div class="title wow bounceInLeft">Монодиодные прожекторы <span class="red">со скидкой.</span><p>От 3 шт + по оптовой цене</p></div>
            <hr>
           </div>
        </div>
          <div class="cards-list clearfix">
        <?php 
            // параметры по умолчанию
            $args = array(
              'numberposts' => 40,
              'category_name'    => 'mono',
              'order'       => 'ASC',
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );
            
            $posts = get_posts( $args );
            
            foreach($posts as $post){ setup_postdata($post);
                // формат вывода
              ?>
           <!-- html разметка open-->
                  <div class="card-product"><!--open first card-product-->
                <div class="card-product-image">
                 <div class="double-sl-container">
                  <?php 
                       if (has_post_thumbnail() ) {
                          the_post_thumbnail(); 
                       } else {
                        echo "<img src=" . get_template_directory_uri() . "/assets/images/no-photo.jpg' . 'alt=''>";
                       }
                        ?>
              </div><!--double-sl-container close-->
            </div><!--card-product image close-->
           <div class="card-product__content">
                <div class="card-product__content-title"><?php the_title(); ?></div>
                    <ul class="feature" > 
                          <li class="prise-for-one">Цена за 1 шт: <span class="strike"><?php the_field('prise_for1_cross'); ?></span><?php the_field('prise_for1'); ?>грн</li>
                          <li class="prise-for-three">Цена за 3 шт: <span class="strike"><?php the_field('prise_for3_cross'); ?></span><?php the_field('prise_for3'); ?>грн</li>
                          <li class="value-card">Эквивалент лампы накаливания:<span class="value-card__feature"><?php the_field('watt'); ?>Вт</span></li>
                          <li class="value-card">Цвет свечения: <?php the_field('color_light'); ?>К</li>
                          <li class="value-card">Напряжение:<?php the_field('voltage'); ?></li>
                          <li class="value-card">Поток света:<?php the_field('light_flow'); ?>lm</li>
                          <li class="value-card">Гарантия:<?php the_field('guarantee'); ?> год</li>
                    </ul>
                </div>
              <a class="button_modal button-animat" href="#" data-toggle="modal" data-target="#orderModal">Заказать прожекторы</a>
           </div>  <!--cards-product close -->

            <!-- html разметка close-->
           <?php   
            }
            
            wp_reset_postdata(); // сброс
           ?>    
          </div><!--cards-list close--> 
     </div>  <!--container close--> 
  <!--section close monodiodnie-->
     <div class="containr">
        <div class="heading-product">
           <div class="heading-product__content" id="mnogodiodnie">
              <hr>
                <div class="title wow bounceInLeft">Многодиодные прожекторы <span class="red">со скидкой.</span><p>От 3 шт + по оптовой цене</p></div>
                <hr>  
           </div>
        </div>
         <div class="cards-list clearfix">
           <?php 
            // параметры по умолчанию
            $args = array(
              'numberposts' => 40,
              'category_name'    => 'mnogo',
              'order'       => 'DESC',
              'meta_key'    => '',
              'meta_value'  =>'',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );
            
            $posts = get_posts( $args );
            
            foreach($posts as $post){ setup_postdata($post);
                // формат вывода
              ?>
           <!-- html разметка open-->
              <div class="card-product"><!--open first card-product-->
                <div class="card-product-image">
                 <div class="double-sl-container">
                    <?php 
                       if (has_post_thumbnail() ) {
                          the_post_thumbnail(); 
                       } else {
                        echo "<img src=" . get_template_directory_uri() . "/assets/images/no-photo.jpg' . 'alt=''>";
                       }
                        ?>
              </div><!--double-sl-container close-->
            </div><!--card-product image close-->
           <div class="card-product__content">
                <div class="card-product__content-title"><?php the_title(); ?></div>
                    <ul class="feature" > 
                          <li class="prise-for-one">Цена за 1 шт: <span class="strike"><?php the_field('prise_for1_cross'); ?></span><?php the_field('prise_for1'); ?>грн</li>
                          <li class="prise-for-three">Цена за 3 шт: <span class="strike"><?php the_field('prise_for3_cross'); ?></span><?php the_field('prise_for3'); ?>грн</li>
                          <li class="value-card">Эквивалент лампы накаливания:<span class="value-card__feature"><?php the_field('watt'); ?>Вт</span></li>
                          <li class="value-card">Цвет свечения: <?php the_field('color_light'); ?>К</li>
                          <li class="value-card">Напряжение: <?php the_field('voltage'); ?></li>
                          <li class="value-card">Поток света:<?php the_field('light_flow'); ?>lm</li>
                          <li class="value-card">Гарантия: <?php the_field('guarantee'); ?> год</li>
                    </ul>
                </div>
              <a class="button_modal button-animat" href="#" data-toggle="modal" data-target="#orderModal">Заказать прожекторы</a>
           </div><!--cards-product close-->
             <?php   
            }
            
            wp_reset_postdata(); // сброс
           ?>    
          </div><!--cards-list close--> 
     </div>  <!--container close--> 
   </div>
<!-- <div class="popup-callback" id="popup1">
     <div class="form">         
           <form id="form" method="POST">
                   <h3>Подать заявку </h3>
                      <div class="input-box">
                             <input style="display:none;" type="text" name="Заявка из раздела" value="Обратный звонок">
                             <input class="form-control" type="text" name="Имя" id="name-visa" placeholder="Имя" >
                             <input class="form-control" type="text" name="Номер телефона" id="phone-visa" placeholder="Номер телефона" required />
                      </div> 
                         <div class="button-box">
                              <button class="button" type="submit">Отправить заявку</button>
                         </div>
                      <div class="close-popup">
                         <a class="icon-radio-button" href="javascript:PopUpHide()"></a> </div>
            </form>  
      </div>
    </div> -->
<!-- <div class="popup__overlay">
    <div class="popup">
     <div class="popup__close">X</div>
         <div class="form"> 
        <h3>Заказать обратный звонок</h3>
          <form id="form2" method="POST">
            <div class="input-box">
                        <input style="display:none;" type="text" name="Заявка из раздела" value="Обратный звонок">
                        <input class="form-control" type="text" name="Имя" id="name-visa2" placeholder="Имя" >
                        <input class="form-control" type="text" name="Номер телефона" id="phone-visa2" placeholder="Номер телефона" required />
                </div>        
                         <div class="button-box">
                        <button class="button-blue center" type="submit">Отправить заявку</button>
                      </div>
            </form>       
        </div>          
    </div> 
   </div> -->
   <div id="bg_popup">
       <div id="popup">
          <p>Сейчас на сайте находится 89 человек</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_second">
       <div id="popup_2">
          <p>Анатолий Алешко +380639546*** сделал заказ на 3шт 100W Монодиодный прожектор - На складе осталось 862 шт.</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_second').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_third">
       <div id="popup_3">
          <p>Андрей Глущенко +380674128*** оставил заявку на обратный звонок.</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_third').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_forth">
       <div id="popup_4">
          <p>Сергей Калина +38068369**** сделал заказ на 4шт 120W Многодиодный прожектор – на складе осталось 762 шт.</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_forth').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_fifth">
       <div id="popup_5">
          <p>Сейчас на сайте находится 45 человек </p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_fifth').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_sixth">
       <div id="popup_6">
          <p>Владислав Тарасенко +38068569**** сделал заказ на 6шт 20W Многодиодный прожектор – на складе осталось 420 шт.</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_sixth').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_seventh">
       <div id="popup_7">
          <p>Сейчас на сайте находится 93 человек </p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_seventh').style.display='none'; return false;">X</a>
       </div>
    </div>
    <div id="bg_popup_eighth">
       <div id="popup_8">
          <p>Николай Горковенко +38068528**** сделал заказ на 3шт 10W монодиодный прожектор – на складе осталось 519 шт.</p>
          <a class="close" href="#" title="Закрыть" onclick="document.getElementById('bg_popup_eighth').style.display='none'; return false;">X</a>
       </div>
    </div>  
 <footer class="header navbar">
    <div class="container">
         <div class="row align-items-center">
               <div class="col-md-4 col-sm-4 col-7 center">
                <?php the_custom_logo( $blog_id); ?>
                 <!-- <a href="#" class="navbar-brand"><img class="img-fluid" < <?php the_custom_logo( $blog_id); ?>></a> -->
              </div>
               <div class="col-md-8 col-sm-12 col-12">
                  <ul class="nav flex-end contacts-list">
                      <li class="icon-cellular"><a href="tel:+380686085995">+38 (068) 608-59-95</a></li>
                      <li><button type="button" class="btn btn-orange wow flash" data-toggle="modal" data-target="#exampleModal"> Заказать обратный звонок
                         </button></li>
                  </ul> 
               </div>
          </div> 
    </div>
  </footer>
  <?php wp_footer(); ?>
 
<script>
// $(window).ready(function(){
// p = $('.popup__overlay')
// $('#popup__toggle').click(function() {
//     p.css('display', 'block')
// })
// p.click(function(event) {
//     e = event || window.event
//     if (e.target == this) {
//         $(p).css('display', 'none')
//     }
// })
$('.popup__close').click(function() {
    p.css('display', 'none')
})
});
</script>
</body>
</html>
