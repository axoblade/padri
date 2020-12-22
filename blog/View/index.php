
<?php require 'inc/header.php' ?>

<?php if (empty($this->oPosts)): ?>

<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?=ROOT_URL?>assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sorry, our Blog is empty for now, try again later</span></h2> 
          </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <?php else: ?>

    <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?=ROOT_URL?>assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Welcome to our Blog</span></h2>
              <p>Discover the lateset compilations of studies carried out by experts in Economic Research</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  <main id="main">


<section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-10 entries">

            <?php foreach ($this->oPosts as $oPost): ?>

            <article class="entry" data-aos="fade-up">

              <h2 class="entry-title">
                <a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i>Admin</li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time datetime="<?=$oPost->createdDate?>"><?=$oPost->createdDate?></time></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= nl2br(mb_strimwidth($oPost->body, 0, 300, '...'))?>
                </p>
                <div class="read-more">
                  <a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>">Read more</a>
                </div>

                <?php require 'inc/control_buttons.php' ?>


              </div>
          </article>
            <?php endforeach ?>
          <?php endif ?>
           <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>-->

          </div><!-- End blog entries list -->
        </div>

      </div>
    </section><!-- End Blog Section -->

<?php require 'inc/footer.php' ?>
