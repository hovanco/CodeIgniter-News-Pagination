<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>1.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/news_homepage_view.css'); ?>">

  </link>

<body>
  <header>
    <nav class="navbar">
      <div class="navbar-content" id="navbar-content">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>index.php/user_controller">HomePage<span></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>index.php/news_controller">News<span></span></a>
          </li>
          <?php foreach ($categories as $key => $category) : ?>
          <li class="nav-item">
            <a class="nav-link"
              href="<?= base_url() ?>index.php/news_controller/getPostsByCategoryID/<?= $category['id'] ?>">
              <?= $category['name'] ?></a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </nav>
  </header>

  <section class="content">
    <div class="content__main-news">
      <div class="mean-news">
        <a href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $news_array[0]['id'] ?>">
          <img class="main-image" src="<?= $news_array[0]['image'] ?>">
        </a>
        <a class="title-post-main"
          href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $news_array[0]['id'] ?>"><?= $news_array[0]['title'] ?></a>
      </div>

      <div class="related-news">
        <?php foreach ($news_array as $key => $main) :
					if ($key < 1 || $key >= 4) {
						continue;
					} 
				?>
        <div class="list-item">
          <a href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $main['id'] ?>">
            <img class="image-item" src="<?= $main['image'] ?>">
          </a>
          <a href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $main['id'] ?>"
            class="title-item"><?= $main['title'] ?></a>
        </div>
        <?php endforeach ?>
      </div>
      <hr style="margin-top: 14px;" />
    </div>

    <div class="content__read-more">
      <?php foreach ($news_array as $key => $read_alot) :
          if ($key < 4 || $key >= 11) continue; ?>
      <div class="recent-news">
        <a href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $read_alot['id'] ?>">
          <img src="<?= $read_alot['image'] ?>">
        </a>
        <a class="recent-news__title"
          href="<?= base_url() ?>./index.php/news_controller/newsDetails/<?= $read_alot['id'] ?>"><?= $read_alot['title'] ?>
          <p class="recent-news__created-at"><?= $read_alot['created_at'] ?></p>
        </a>
      </div>
      <?php endforeach ?>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>M???i nh???t</h4>
          <ul>
            <li><a href="#">Th???i s???</a></li>
            <li><a href="#">G??c nh??n</a></li>
            <li><a href="#">Th??? gi???i</a></li>
            <li><a href="#">Kinh doanh</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Xem nhi???u</h4>
          <ul>
            <li><a href="#">Th??? thao</a></li>
            <li><a href="#">Ph??p lu???t</a></li>
            <li><a href="#">Gi??o d???c</a></li>
            <li><a href="#">S???c kh???e</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Tin n??ng</h4>
          <ul>
            <li><a href="#">S??? h??a</a></li>
            <li><a href="#">Xe</a></li>
            <li><a href="#">T??m s???</a></li>
            <li><a href="#">H??i</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Quan t??m</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
