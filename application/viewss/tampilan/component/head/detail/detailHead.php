<link rel="canonical" href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
<link rel="amphtml" href=<?php urlToAmp(current_url())?>>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $data['news_title'] ?> - Jatimtimes</title>
<meta property="og:title" content="<?= str_replace('"','&quot;',$data['news_title']) ?>" />
<meta property="og:description" content="Berita terkini tentang <?= $data['news_title'] ?> - <?= $daerah['site_title']?>" />
<meta property="og:url" content="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
<meta property="og:site_name" content="Jatim TIMES" />
<meta property="og:image" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>" />
<meta property="og:image:secure_url" itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="315" />
<meta itemprop="name" content="<?= $data['news_title'] ?>">
<meta itemprop="description" content="Berita terkini tentang <?= $data['news_title'] ?> - <?= $daerah['site_title']?>">
<meta itemprop="image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>">
<meta name="description" content="Berita terkini tentang <?= $data['news_title'] ?> - <?= $daerah['site_title']?>">
<meta name="copyright" content="Jatim TIMES">
<meta name="robots" content="index,follow">
<meta name="googlebot-news" content="index,follow" />
<meta name="googlebot" content="index,follow" />
<meta name="city" content="Jawa Timur">
<meta name="country" content="Indonesia">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@JatimTIMES">
<meta name="twitter:title" content="<?= $data['news_title'] ?>">
<meta name="twitter:description" content="Berita terkini tentang <?= $data['news_title'] ?> - Jatimtimes">
<meta name="twitter:creator" content="@JatimTIMES">
<meta name="twitter:image" content="<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WL9N0YP0G4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WL9N0YP0G4');
</script>

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "headline": "<?= $data['news_title'] ?>",
  "url": "<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>",
  "datePublished": "<?= $this->fungsi->timeToStr("Y-m-d", $data['news_datepub']) ?>",
  "image": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>",
  "thumbnailUrl" : "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>"
}
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "ImageObject",
        "contentUrl": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>",
"license": "https://www.jatimtimes.com/Redaksi",
      "acquireLicensePage": "https://www.jatimtimes.com/Redaksi",
      "creditText": "PT Jatim Times Network",
"creator": {
        "@type": "Person",
        "name": "Redaksi JTN"
       },
      "copyrightNotice": "jatimtimes.com"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "headline": "<?= $data['news_title'] ?>",
        "url": "<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>",
        "datePublished": "<?= $this->fungsi->timeToStr("d - M - Y, h:i",$data['news_datepub']) ?>",
        "image": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>",
        "thumbnailUrl": "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>"
    }
</script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NewsArticle",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"
        },
        "headline": "<?= $data['news_title'] ?> - <?= $daerah['site_title']?>",
        "image": [
            "<?= $this->fungsi->imageThumbnail($data['news_image_new'], "md") ?>"
        ],
        "datePublished": "<?= $this->fungsi->timeToStr("Y-m-d",$data['news_datepub']) ?>",
        "dateModified": "<?= $this->fungsi->timeToStr("Y-m-d",$data['news_datepub']) ?>",
        "author": {
            "@type": "Person",
            "name": "<?= $data['news_writer'] ?>",
            "url": "https://jatimtimes.com"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Jatim Times Network",
            "logo": {
                "@type": "ImageObject",
                "url": "https://cdnstatic.jatimtimes.com/logo/new/jatim.png"
            }
        }, 
"description": "Berita Terkini Jatimtimes -  <?= $data['news_title'] ?>. Berita Jawa Timur Terbaru."
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://jatimtimes.com"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Hukum dan Kriminalitas",
            "item": "https://jatimtimes.com/kanal/hukum%20dan%20kriminalitas"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Ekonomi",
            "item": "https://jatimtimes.com/kanal/ekonomi"
        }]
    }
</script>