
<?php
if (!isset($_GET['products'])) {
    header("HTTP/1.0 404 Not Found");
    include("404.php"); // Gantilah "404.php" dengan halaman 404 yang sesuai
    exit();
} else {
    $brand = $_GET['products'];
    $valid_brands = file("https://akunproasia.net/amp/brand_list.txt", FILE_IGNORE_NEW_LINES); 
  

    if (!in_array($brand, $valid_brands)) {
        header("HTTP/1.0 404 Not Found");
        include("404.php"); // Gantilah "404.php" dengan halaman 404 yang sesuai
        exit();
    } else {
        // Aksi jika $brand sesuai dengan salah satu nilai dalam file
        $amp = "https://akunproasia.net/amp/?products=$brand";
        $favicon = "https://productssikembali.shop/image/icon.png";
        $banner = "https://s13.gifyu.com/images/SjIWT.webp";
        $title = "$brand ✅ Bandar Bos Slot Online Terpercaya 2024.";
        $description = "$brand ialah bandar judi slot online terpercaya dan tergacor mudah maxwin hari ini dengan banyak metode deposit yang lengkap dan proses transaksi yang sangat cepat di proses, nikmati minimum bet hanya dengan 100rupiah saja $brand";
        $direct = "https://pub-899faf00cd7948a7bf012bf361322b0d.r2.dev/index.html";
        $googleanalytic = "G-KODE";
        $base_url = "https://akunproasia.net/tunnel/?products=";
        $link = $base_url . $brand;
    }
}
?>
<!doctype html>
<html amp lang="id">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" href="<?= $banner;?>" as="image">
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $favicon;?>" type="image/x-icon">
    <link rel="canonical" href="<?= $link;?>">
    <link rel="amphtml" href="<?= $amp;?>">
    <title><?= $title;?></title>
	<meta name="title" content="<?= $title;?>">
    <meta name="description" content="<?= $description;?>">
    <meta name="keywords" content="<?=$brand;?>"/>
    <meta name="rating" content="general" />
    <meta name="geo.region" content="ID" />
    <meta name="googlebot" content="index, follow" />
    <meta name="geo.country" content="ID" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="language" content="ID" />
    <meta name="distribution" content="global" />
    <meta name="geo.placename" content="DKI Jakarta" />
    <meta name="author" content="<?= $brand;?>" />
    <meta name="publisher" content="<?= $brand;?>" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow">
    <meta name="msnbot" content="index,follow">
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <style amp-custom>*{box-sizing:border-box;margin:0;padding:0}:focus{outline:0}::-webkit-scrollbar{display:none}a,a:after,a:hover,a:visited{text-decoration:none;color:#7fffd4}html{max-width:500px;margin:0 auto;background:#820303}body{color:#050505;font-family:'Noto Sans',arial,sans-serif}h1{color:#000;text-transform:uppercase;letter-spacing:2px;font-size:18px}h2{color:#000;text-transform:uppercase;letter-spacing:2px;font-size:15px}p{color: #000;}a{color:#2b2b2b;text-transform:uppercase}.atas{display:grid;min-height:100vh}.atasbox{margin:auto;text-align:center}.ataslink{display:inline-grid;margin:.88rem 0}.ataslink a{padding:.5rem 3.8rem;background:#33333388;margin-bottom:.5rem;border-radius:.38rem;box-shadow:0 -1px #ccb38a88;letter-spacing:1px}.ataslink a.btn1{color:#eee;background-image:linear-gradient(to right,#6a2f03,#3250bd);box-shadow:none;font-weight:700}.imghero{box-shadow:inset 0 0 0 8px #888;border-radius:8px}</style>
</head>
<body>
        <div class=atas>
            <div class=atasbox>
            <h1><span><?= $title;?></h1> 
            <br>
                <div>
                    <amp-img class=imghero height=300 width=300 alt="<?= $brand;?>" src="<?= $banner;?>"></amp-img>
                </div>
					</header>
                    <br>
	<section id="home" class="top_banner_bg secondary-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top_banner">
					</div>
					<div class="col-md-6">
						<div class="present">
                            <div class=ataslink>
                    <a href='<?= $direct;?>' class=btn1>Join Ke Situs <?= $brand;?></a>
                    <a style="color: white;" href='<?= $direct;?>' target=_blank rel="noopener noreferrer nofollow">Daftar</a>
                    <a style="color: white;" href='<?= $direct;?>' target=_blank rel="noopener noreferrer nofollow">Login</a>
					</div>
            </div>
        </div>
        <footer style="text-align: center;">
            <p>2023 &copy; <a href="<?= $link;?>"><?= $brand;?></a> OFFICIAL SITES.</p>
        </footer>
    <amp-analytics type="gtag" data-credentials="include">
	<script type="application/json">
	{
	  "vars" : {
		"gtag_id": "<?= $googleanalytic;?>",
		"config" : {
		  "<?= $googleanalytic;?>": { "groups": "default" }
		}
	  }
	}
	</script>
	</amp-analytics>
</body>
</html>