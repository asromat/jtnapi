<style>
    .main-page {
        padding-left: 10px;
        padding-right: 10px;
    }

    .post-body p {
        font-size: 18px;
        line-height: 29px;
    margin: 0 0 32px 0;
    font-weight: 400;
    color: #424242;
    }
</style>


<style type='text/css'>
/*<![CDATA[*/
.paralax_div {
  position: relative;
  overflow: visible;
  width: 300px;
  height: 600px;
  margin-right: 20px;
  display: inline-block;
  float: left;
  z-index: 9999;
}
.paralax_div > div {
  overflow: hidden;
  width: 100%;
  height: 100%;
  margin: 0;
  position: absolute;
  top: 0;
  left: 0;
  clip: rect(auto auto auto auto);
}
.paralax_div > div > div {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  margin: 0 auto;
  -moz-transform: translateZ(0);
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}
.paralax_div > div > div > div {
  width: 100%;
  height: 100vh;
  position: relative;
  left: 50%;
  top: 60px;
  border: none;
  -moz-transform: translateX(-50%);
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-content: center;
  align-content: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  background: #ddd;
}
.paralax_div > div > div > div > * {
  margin: 0;
  margin-top: 0;
}
.paralax_div > div > div > div > a {
  width: 100%;
  height: 100vh;
}
.paralax_div img,.paralax_div iframe,.paralax_div ins {
  height: 600px;
  width: 300px;
}
.clear {
  clear: both;
  display: block
}

@media screen and (max-width:640px) {
  .paralax_div {
    width: 100%;
    height: 250px;
    margin: 0 auto;
    float: none;
  }
  .paralax_div > div > div > div {
    left: 50%;
    -moz-transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
  }
  .paralax_div > div > div {
    width: 100%;
    left:0;
    text-align: center;
  }
  .paralax_div img {
    margin: 0 auto;
    width:auto;
    max-width:100%;
    height:auto;
  }
}
@media screen and (max-width:320px) {
  .paralax_div iframe,.parallax_banner ins {
    margin: 0 auto;
    width:100%;
    height:600px;
  }
}
/*]]>*/
</style>

<!-- App Capsule -->
<div id="appCapsule">
    <!-- Main Navbar -->
    <?php $this->view("element/main-nav-bar") ?>
    <!-- ! Main Navbar -->
    <!-- Content -->
    <div class="main-page">
        <div>
            <!-- adsense atas -->
            <div id="google-ads-1"></div>
            <script type="text/javascript">
                /* Calculate the width of available ad space */
                ad = document.getElementById('google-ads-1');

                if (ad.getBoundingClientRect().width) {
                    adWidth = ad.getBoundingClientRect().width; // for modern browsers
                } else {
                    adWidth = ad.offsetWidth; // for old IE
                }

                /* Replace ca-pub-XXX with your AdSense Publisher ID */
                google_ad_client = "ca-pub-9791561448547714";

                /* Replace 1234567890 with the AdSense Ad Slot ID */
                google_ad_slot = "5345222021";

                /* Do not change anything after this line */
                if (adWidth >= 728)
                    google_ad_size = ["728", "90"]; /* Leaderboard 728x90 */
                else if (adWidth >= 468)
                    google_ad_size = ["320", "100"]; /* Banner (468 x 60) */
                else if (adWidth >= 336)
                    google_ad_size = ["336", "280"]; /* Large Rectangle (336 x 280) */
                else if (adWidth >= 300)
                    google_ad_size = ["300", "250"]; /* Medium Rectangle (300 x 250) */
                else if (adWidth >= 250)
                    google_ad_size = ["250", "250"]; /* Square (250 x 250) */
                else if (adWidth >= 200)
                    google_ad_size = ["200", "200"]; /* Small Square (200 x 200) */
                else if (adWidth >= 180)
                    google_ad_size = ["180", "150"]; /* Small Rectangle (180 x 150) */
                else
                    google_ad_size = ["125", "125"]; /* Button (125 x 125) */

                document.write(
                    '<ins class="adsbygoogle" style="display:inline-block;width:' +
                    google_ad_size[0] + 'px;height:' +
                    google_ad_size[1] + 'px" data-ad-client="' +
                    google_ad_client + '" data-ad-slot="' +
                    google_ad_slot + '"></ins>'
                );

                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
            <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
            </script>
            <!-- adsense atas -->

        </div>
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="mt-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">
                                <ion-icon name="home-outline"></ion-icon>
                            </a></li>
                        <li class="breadcrumb-item active" aria-current="page">Baca</li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $kategori ?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="p-2 bg-white rounded shadow-sm">
                    <a href="<?= base_url() ?>/kanal/<?= $kategori ?>"><span class="badge badge-primary bg-tia50000 text-uppercase mb-1"><?= $kategori ?></span></a>
                    <!-- <a href="#" class="d-block text-primary fn-poppins font-italic mt-1">OTT KPK di MA</a> -->
                    <h1><?= $data['news_title'] ?></h1>
                    <div>
                        <p font-size="15px">
                            <b>Penulis</b> : <?= $data['news_writer'] ?> - <b>Editor :</b> <?= $editor ?>
                        </p>
                    </div>
                    <p class="float-right text-muted"><?= $this->fungsi->timeToStr("d - M - Y, h:i", $data['news_datepub']) ?></p>
                    <div class="ss-box ss-circle" data-ss-content="false" data-ss-social="facebook, whatsapp, twitter, telegram"></div>
                </div>
                <div class="bg-white mt-2">
                    <figure class="figure shadow-sm" style="width: 100%; height:auto;" align="center">
                        <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="rounded-top img-fluid" alt="<?= $data['news_caption'] ?>" style="width: auto; height:auto">
                        <figcaption class="figure-caption bg-times text-light text-center p-1 rounded-bottom"><?= $data['news_caption'] ?></figcaption>
                    </figure>
                </div>
                
            <div class="paralax_div">
  <div>
    <div>
      <div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4915864821908051"
     crossorigin="anonymous"></script>
<!-- paralax_to_2 -->
<ins class="adsbygoogle"
     style="display:block;width:300px;height:600px"
     data-ad-client="ca-pub-9791561448547714"
     data-ad-slot="5345222021"
     data-ad-format="auto"
     data-full-width-responsive="false"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    </div>
  </div>
<span class="clear"/>
</div>
            
                <div class="blog-post mt-1" style="width: 100%;">
                    <div class="post-body">
                        <?= $data['news_content'] ?>
                    </div>
                    <div class="adbox adbox-responsive mt-4">
                        <!-- Iklan <?= $daerah['site_title'] ?> -->
                        <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads6'] ?>"></script>
                    </div>
                    <div class="adbox adbox-responsive mt-4">
                        <!-- Iklan <?= $daerah['site_title'] ?> -->
                        <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads7'] ?>"></script>
                    </div>
                    <hr>
                    <!-- <h3>Topik</h3> -->
                    <!-- <p>
                        <span class="badge badge-primary">Tag 1</span> <span class="badge badge-primary">Tag
                            2</span> <span class="badge badge-primary">Tag 3</span>
                    </p> -->
                    <div class="row">
                        <!-- <div class="col-2">
                            <img loading="lazy" src="https://lh3.googleusercontent.com/_x0eP5LbSX9BWgkmwRHSJXe8lgn7FyrfyM5P0kNJyiTqcJFHn-WJzCo8P_bs5VnwZw=w300" class="mr-3" alt="Jatim Times Network" width="100px">
                        </div> -->
                        <div class="col-10">
                            <h3>JOIN JATIM TIMES NETWORK</h3>
                            Dapatkan update berita pilihan dan breaking news setiap hari dari JatimTIMES.com. Mari bergabung di Grup Telegram , caranya klik link Telegram JatimTIMES, kemudian join. Anda harus install aplikasi Telegram terlebih dulu di ponsel anda.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <h3>Penulis</h3>
                            <h4><?= $data['news_writer'] ?></h4>
                        </div>
                        <div class="col-6 float-right">
                            <h3>Editor</h3>
                            <h4><?= $editor ?></h4>
                        </div>
                    </div>
                </div>
                <!-- Iklan Bawah Berita -->
                <!--<div class="adbox adbox-responsive mt-4">
                    <img src="https://risetcdn.jatimtimes.com/images/2022/10/11/WhatsApp-Image-2022-10-10-at-20.32.10e16df517bd10d9be.jpg" alt="image">
                </div> -->
                <!-- ! Iklan Bawah Berita -->

                <div class="col-12 col-lg-8 pl-2 pr-2 mt-2">
                    <!-- Slider Headline -->
                    <div class="carousel carousel-full owl-carousel owl-theme">
                        <?php foreach ($headline as $key => $data) {; ?>
                            <div class="item">
                                <div class="card position-relative p-1">
                                    <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" class="card-img-top img-fluid" alt="$data['news_title']" style="max-height: 1200px; width:100%">
                                    <div class="card-body p-1">
                                        <!-- <span class="text-warning fn80 text-uppercase font-weight-bold">Berita</span> -->
                                        <h2 class="mb-0" style="font-size: 18px;"><?= $data['news_title'] ?></h2>
                                        <span class="float-left fn80"><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                        <!-- <span class="float-right fn80">
                                    <ion-icon name="eye-outline"></ion-icon></i> 5.70rb
                                </span> -->
                                    </div>
                                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>" class="stretched-link"></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- * Slider Headline -->


                    <!-- Berita Terkait -->
                    <?php if (!isset($similar['status'])) { ?>
                        <!-- <div class="row mt-2 mb-3">
                    <div class="col-12">
                        <div class="header-large-title mt-5 bg-times-gradient">
                            <h1 class="title">#Berita Terkait</h1>
                        </div>
                        <div class="carousel carousel-multiple owl-carousel owl-theme">
                            <?php foreach ($similar as $key => $data) {; ?>
                            <div class="item">
                                <div class="card position-relative p-1">
                                <img src="<?= $data['news_image_new'] ?>" class="rounded-top img-fluid" alt="Aktivis JCW Apresiasi Keberhasilan KPK RI OTT Hakim Agung" style="width: 100%;">
                                    <div class="card-body p-1">
                                        <p><?= $data['news_title'] ?></p>
                                        <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                    </div>
                                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>" class="stretched-link"></a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div> -->
                    <?php } ?>
                    <!-- * Berita Terkait -->
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <?php if (!isset($satukanal['status'])) { ?>
                    <!-- Satu Kanal -->
                    <div class="header-large-title">
                        <h1 class="title"><?= $kategori ?></h1>
                        <h4 class="subtitle">Artikel terkait di <?= $kategori ?></h4>
                    </div>
                    <div class="card mt-1">
                        <ul class="listview image-listview media">
                            <?php foreach ($satukanal as $key => $data) {; ?>
                                <li>
                                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>">
                                        <div class="item">
                                            <div class="imageWrapper">
                                                <img loading="lazy" src="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "th") ?>" alt="image" class="imaged w100">
                                            </div>
                                            <div class="in">
                                                <div>
                                                    <header class="text-primary fn80 text-uppercase font-weight-bold">
                                                    </header>
                                                    <h3><?= $data['news_title'] ?></h3>
                                                    <div class="text-muted d-block fn60">
                                                        <ion-icon name="time-outline"></ion-icon><?= $this->fungsi->timeAgo($data['news_datepub']) ?></span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
                <!-- * Satu Kanal -->
                <!-- Fokus Berita -->
                <div class="card mt-3">
                    <div class="header-large-title">
                        <h1 class="title">Topik Khusus</h1>
                    </div>
                    <div class="card-body text-left">
                        <a href="<?= base_url() ?>/tag/ferdy-sambo" class="btn btn-outline-primary mr-1 mb-1 font-weight-bold text-uppercase">#FERDY SAMBO</a>
                    </div>
                </div>
                <!-- * Fokus Berita -->
                <!-- Berita Populer -->
                <div class="card mt-2">
                    <div class="header-large-title">
                        <h1 class="title">Headline Berita</h1>
                        <h4 class="subtitle">Wajib Kamu Baca</h4>
                    </div>
                    <div class="card-body text-left">
                        <ul class="listview image-listview media">
                            <li>
                                <?php $no = 1;
                                foreach ($headline as $key => $data) {; ?>
                                    <a href="<?= base_url() ?>baca/<?= $data['news_id'] ?>/<?= $this->fungsi->timeToStr("Ymd", $data['news_datepub']) ?>/<?= $this->fungsi->timeToStr("his", $data['news_datepub']) ?>/<?= $this->fungsi->convertToSlug($data['news_title']) ?>">
                                        <div class="item">
                                            <div class="imageWrapper">
                                                <h1 class="top-text-align" style="font-size: 20px;"><?= $no++ ?></h1>
                                            </div>
                                            <div class="in">
                                                <div>
                                                    <h3><?= $data['news_title'] ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- * Berita Populer -->
                <!-- Iklan -->
                <div class="adbox adbox-responsive mt-4">
                    <script src="https://pasangiklan.jatimtimes.com/amb/ser.php?f=<?= $daerah['ads6'] ?>"></script>
                </div>
                <!-- * Iklan -->
            </div>
        </div>
        <!-- ! Content -->
    </div>
    <!-- * App Sidebar -->
</div>