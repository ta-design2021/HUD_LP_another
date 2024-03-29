<?php

  session_start();

  if(isset($_SESSION['name'])) {

    $name = $_SESSION['name'];
    $companyName = $_SESSION['companyName'];
    $department = $_SESSION['department'];
    $email = $_SESSION['email'];
    $tel = $_SESSION['tel'];
    $num = $_SESSION['num'];
    $inquiry = $_SESSION['inquiry'];

  }

  $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(48));
  $token = htmlspecialchars($_SESSION['token'], ENT_QUOTES);

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>株式会社HHUUDD_Web制作サイト - 確認画面 -</title>
    <meta name="description" content="株式会社HHUUDD_Web制作サイトです。ホームページ、LP、ECサイト・CMSのカスタマイズ、リニューアル等を承っております。まずは気軽にご相談ください。">
    <meta name="keywords" content="株式会社HHUUDD、HUD、ヒュード、株式会社HHUUDD_Web制作サイト、Web制作、ホームページ、ECサイト、CMSカスタマイズ、LP、SERVICE PAGE、サービスページ">

    <!-- CSS -->
    <!-- 各ブラウザーのデフォルトCSSをリセット -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- これから指定していくCSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Validation CDN利用-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Validation-Engine/2.6.4/validationEngine.jquery.min.css">

    <!-- FontAwesome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b4de523845.js" crossorigin="anonymous"></script>

    <!-- ファビコン -->
    <link rel="icon" type="image/png" href="../img/favicon.png">

    <!-- viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
    <header id="header">
      <h1 class="site-logo">
        <a href="../index.html"><img src="../img/logo-hhuudd-white.png" alt="株式会社HHUUDDロゴ"></a>
      </h1>

      <nav id="nav">
        <a href="../index.html"><img  class="nav-logo" src="../img/logo-hhuudd-white.png"></a>
        <ul class="nav-menu">
          <li class="nav-item"><a href="index.html">HOME</a></li>
          <li class="nav-item"><a href="service.html">SERVICE</a></li>
        </ul>
        <a  class="nav-btn" href="index.php">お問い合わせ</a>
      </nav>

      <!-- ヘッダーお問い合わせ -->
      <div class="header-contact-btn">
        <a class="contact-btn" href="index.php">
          <ul class="nav-menu">
            <li class="nav-item">
              お問い合わせ
            </li>
            <li class="nav-item">
              <span class="circle"></span>
            </li>
            <li class="nav-item">
              <span class="arrow"></span>
            </li>
          </ul>
        </a>
      </div>

      <!-- ハンバーガーボタン -->
      <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>

    <main id="main">
      <div class="hero">
        <picture>
          <img class="hero-img" src="../img/contact_visu.jpg" height="315" width="1280" alt="お問い合わせ">
        </picture>
        <div class="hero-txt">
          <h2 class="page-title">CONFIRM</h2>
          <p class="hero-desc">確認画面</p>
        </div>
      </div>

      <div class="contact-lead">
        <p class="contact2">
          <span>
            入力内容にお間違いがないかご確認ください。
          </span>
        </p>
      </div>

      <section class="contact-wrapper">
        <div class="contact-container">
          <div class="contact-inner">
            <form id="form" action="commit.php" method="post">
              <input type="hidden" name="token" value="<?php echo $token ?>">
              <dl class="form-area">
                <div class="contact-form-group inputfield">
                  <dt>
                    <label for="input-name" class="contact-form-title">
                      <span class="required">お名前</span>
                    </label>
                  </dt>
                  <dd class="form-flex">
                    <?php echo $name; ?>
                  </dd>
                </div>

                <div class="contact-form-group inputfield">
                  <dt>
                    <label for="input-company" class="contact-form-title">
                      会社名
                    </label>
                  </dt>
                  <dd>
                    <?php echo $companyName; ?>
                  </dd>
                </div>

                <div class="contact-form-group">
                  <dt>
                    <label for="input-department" class="contact-form-title">
                      部署名
                    </label>
                  </dt>
                  <dd>
                    <?php echo $department; ?>
                  </dd>
                </div>

                <div class="contact-form-group inputfield">
                  <dt>
                    <label for="input-email" class="contact-form-title">
                      <span class="required">メールアドレス</span>
                    </label>
                  </dt>
                  <dd>
                    <?php echo $email; ?>
                  </dd>
                </div>

                <div class="contact-form-group inputfield">
                  <dt>
                    <label for="input-tel" class="contact-form-title">
                      <span class="required">電話番号(ハイフン無し)</span>
                    </label>
                  </dt>
                  <dd>
                  <?php echo $tel; ?>
                  </dd>
                </div>

                <div class="contact-form-group inputfield">
                  <dt>
                    <label class="contact-form-title">
                      <span class="required">お問い合わせ種別</span>
                    </label>
                  </dt>
                  <dd>
                    <?php echo $num; ?>
                  </dd>
                </div>

                <div class="contact-form-group inputfield">
                  <dt>
                    <label for="input-inquiry" class="contact-form-title">
                      <span class="required">お問い合わせ内容</span>
                    </label>
                  </dt>
                  <dd>
                    <?php echo nl2br($inquiry); ?>
                  </dd>
                </div>
              </dl>

              <!-- 送信・戻るボタン -->
              <div class="contact-sec-btn">
                <div class="backandsendbox">
                  <button class="submit-btn right-arrow" type="submit">送信</button>
                  <a class="submit-btn back-btn" href="index.php?action=edit">戻る</a>
                </div>
              </div>

            </form>
          </div> <!-- /.contact-innner-->
        </div> <!-- /.contact-container-->
      </section> <!-- /.contact-wrapper-->
    </main>

    <footer id="footer">
      <div class="footer-container">
        <h1 class="site-logo">
          <a href="index.html"><img src="../img/logo-hhuudd-white.png" alt="株式会社HHUUDDロゴ"></a>
        </h1>

        <div class="footer-item">
          <ul>
            <li>
              <div class="ly_inner">
                <a href="https://hhuudd.com/">会社概要</a>
              </div>
            </li>
            <li>
              <div class="ly_inner" id="menu2">
                <div class="md_textblock">
                  <!-- モーダル（ポップアップ）ボタン -->
                  <p class="js_modalBtnWrap">
                    <a href="" class="js_modalBtnCont" data-modal-btn="modal02">Privacy Policy
                    </a>
                  </p>
                  <!-- //モーダル（ポップアップ）ボタン -->
                </div> <!-- /.md_textblock -->
                <!-- モーダル（ポップアップ）の内容 -->
                <div class="js_modalWrap" data-modal-cont="modal02">
                  <div class="js_modalBG"></div>
                  <div class="js_modalContInner">
                    <span class="js_modalClose"></span>
                    <div class="js_modalCont">
                      <h3>個人情報保護方針</h3>
                      <p>
                        株式会社HHUUDD（以下、弊社）は、弊社サイト（ https://hhuudd.com/ 以下「当サイト」といいます）において提供するサービス（メルマガオンライン登録・お問い合せの受付等）の円滑な運営に必要な範囲で、個人情報を取り扱っております。<br>
                        弊社またはその代理人が管理･運営する当サイトにおけるプライバシーポリシーを次のとおり定め、皆様に安心してご利用頂けるよう、管理・運営に努めます。<br>
                        弊社は、当サイトを通じて皆様の個人情報をご提供頂いたときは、これを本プライバシーポリシーに従って取扱います。但し、個人情報をご提供頂く特定のウェブページにおいて、本プライバシーポリシーと異なる定めをした場合には、本プライバシーポリシーに優先して適用されるものとします。
                      </p>
                      <p>
                        個人情報の取り扱い<br>
                        本プライバシーポリシーにおいて『個人情報』とは、弊社がインターネットを通じ、当サイトにおいて皆様からご提供頂く氏名、住所、電話番号、電子メールアドレス等、個人を識別できる情報あるいは皆様各個人の固有の情報を意味します。
                      </p>
                      <p>
                        収集する情報の範囲<br>
                        弊社へのメニュー・サービス等に関するお問い合わせ受付の際に返信が必要な場合、個人情報の記入をお願いしております。<br>
                        各種お問い合せの受付を「info@hhuudd.com」のメールアドレスで行なう場合は、必要に応じて個人情報の記入をお願いすることがあります。また、差出人のメールアドレスが受信者側に表示されます。
                      </p>
                      <p>
                        個人情報の利用目的<br>
                        皆様からのお問合せを頂いた際、適した情報提供を通知する場合に利用します。
                      </p>
                      <p>
                        リンク先における個人情報の保護<br>
                        弊社は、当サイトからリンクするウェブサイトにおける個人情報の安全確保については責任を負うことはできません。<br>
                        リンク先の個人情報保護につきましては、当該リンク先におけるプライバシーポリシー等を皆様ご自身でご確認頂きますようお願い致します。
                      </p>
                      <p>
                        個人情報の管理<br>
                        皆様にご提供頂いた個人情報は、次の場合を除き第三者に開示致しません。<br>
                        ・皆様の同意がある場合<br>
                        ・個人情報に関する機密保持契約を締結している業務委託会社に対して、皆様に明示した利用目的の達成に必要な範囲で個人情報の取扱いを委託する場合<br>
                        ・統計的なデータとして、皆様個人を識別できない状態に加工した場合（例：ウェブサイトの年齢別利用状況を公表する場合等）<br>
                        ・公的機関(警察、裁判所等)からの要請により、提供に応じなければならない場合
                      </p>
                      <p>
                        お問い合わせ対応口<br>
                        本プライバシーポリシーに関するお問い合せにつきましては、下記までご連絡下さい。なお、下記のお問い合せ先では、お客様がご提供された個人情報に関するお問い合せには、直ちには対応できない場合がございますので、予めご了承下さい。<br>
                        お問合せ先：info@hhuudd.com<br>
                      </p>
                      <p>
                        その他<br>
                        本プライバシーポリシーは、予告なく変更されることがあります。
                      </p>
                      <p>
                        2020年2月5日<br>
                        株式会社HHUUDD
                      </p>
                    </div> <!-- /.js_modalCont -->
                  </div> <!-- /.js_modalContInner -->
                </div> <!-- /.js_modalWrap -->
                <!-- //モーダル（ポップアップ）の内容 -->
              </div> <!-- /.ly_inner /#menu2-->
            </li>
            <li>
              <div class="ly_inner" id="menu3">
                <div class="md_textblock">
                  <p class="js_modalBtnWrap">
                    <a href="" class="js_modalBtnCont" data-modal-btn="modal03">Term of use
                    </a>
                  </p>
                </div> <!-- /.md_textblock -->
                <div class="js_modalWrap" data-modal-cont="modal03">
                  <div class="js_modalBG"></div>
                  <div class="js_modalContInner">
                    <span class="js_modalClose"></span>
                    <div class="js_modalCont">
                      <h3>情報セキュリティ方針</h3>
                      <p>
                        当社は、業務上取り扱う顧客等の情報資産および当社の情報資産を各種脅威から守り、企業としての社会的使命を果たすため、情報セキュリティポリシーとして本基本方針および情報セキュリティ基本規程、個人情報保護規程その他の関連規程・規則を定め、以下の取組みを実施いたします。
                      </p>
                      <br>
                      <p>
                        １．当社は、業務上取り扱う顧客等の情報資産のセキュリティ対策には万全を期すものとし、紛失、破壊、改ざんおよび漏えい等のリスク未然防止につねに最優先にて取り組むものとする。
                      </p>
                      <p>
                        ２．当社は、当社の情報資産についても、それを最大限有効に活用しつつ、その重要度に応じた適切なセキュリティ対策を実施する。
                      </p>
                      <p>
                        ３．当社は、情報セキュリティに関する組織として社内に「情報セキュリティ管理委員会」を設置するほか、部門単位に情報セキュリティ管理の責任者および担当者を置き、全社的な組織体制により情報資産のセキュリティ対策を実施・運用・推進する。
                      </p>
                      <p>
                        ４．当社は、役員・社員等（パートタイマーを含む。）に対する情報セキュリティに関する教育・啓蒙を継続的に実施し、情報セキュリティポリシーの周知徹底に努める。情報資産を取り扱うすべての役員・社員等は、情報セキュリティポリシーを遵守し、そこに定められた義務と責任を果たすものとする。
                      </p>
                      <p>
                        ５．当社は、技術の進歩や業務環境の変化等も考慮のうえ、情報資産のリスク評価を多方面から継続的に実施し、それを情報セキュリティポリシーおよびそれに基づく各種施策に反映させることにより、情報セキュリティの維持・向上を図るものとする。
                      </p>
                      <p>
                        ６．当社は、情報セキュリティに関する各種運用の状況等について定期的に監査を実施し、必要に応じた適切な是正措置を講じることにより、情報セキュリティの確保に努めるものとする。
                      </p>
                      <p>
                        ７．当社は、インターネット社会の秩序を守るとともに、その健全なる発展のために貢献する。
                      </p>
                      <p>
                        ８．当社は、情報セキュリティに関連する法令、その他の規範を遵守する。
                      </p>
                    </div> <!-- /.js_modalCont -->
                  </div> <!-- /.js_modalContInner -->
                </div> <!-- /.js_modalWrap -->
              </div> <!-- /.ly_inner /#menu3-->
            </li>
          </ul>
        </div>
      </div> <!-- /.footer-container wrapper -->
      <p class="copy">
        &copy; Copyright © 2020 hhuudd all right reserved.
      </p>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Validation -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

    <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>


    <!-- js -->
    <script src="js/script.js"></script>
  </body>

</html>
