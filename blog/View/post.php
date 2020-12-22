
<?php require 'inc/header.php' ?>

         <?php if (empty($this->oPost)): ?>

         <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">               
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?=ROOT_URL?>assets/img/slide/slide-1.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>The post can't be be found!</h2>
          </div>
        </div>
      </div>
      </div>
  </section><!-- End Hero -->

       <?php else: ?>

        <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?=htmlspecialchars($this->oPost->title)?></h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->


  <main id="main">

<section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-10 entries">
                    <article class="entry" data-aos="fade-up">
                       
                        <div class="entry-meta">
                            <ul>
                              <li class="d-flex align-items-center"><i class="icofont-user"></i>Admin</li>
                              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><time datetime="<?=$this->oPost->createdDate?>"><?=$this->oPost->createdDate?></time></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                              <?=nl2br($this->oPost->body)?>
                            </p>

                            <?php 
                                $oPost = $this->oPost;
                                require 'inc/control_buttons.php';
                            ?>

                        </div>
                      </article>
                  <?php endif ?>

                  </div><!-- End blog entries list -->
        </div>

      </div>
    </section><!-- End Blog Section -->
                
                <?php require 'inc/footer.php' ?>
