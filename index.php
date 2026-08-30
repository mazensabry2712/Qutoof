<?php
$status = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name !== '' && filter_var($email, FILTER_VALIDATE_EMAIL) && $message !== '') {
        $to = 'info@qutoof.com';
        $subject = 'Qutoof Website Contact — ' . $name;
        $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}";
        $headers = "From: {$email}\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8\r\n";
        $sent = @mail($to, $subject, $body, $headers);
        $status = $sent ? 'success' : 'fallback';
    } else {
        $status = 'error';
    }
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="قطوف Qutoof — نبني حضورًا رقميًا يليق بالعلامات الطموحة.">
  <meta name="theme-color" content="#0b5138">
  <title>قطوف Qutoof | هوية وحلول تصنع الفرق</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="page-noise"></div>
  <header class="site-header" id="top">
    <div class="container nav-wrap">
      <a class="brand" href="#top" aria-label="Qutoof home">
        <img src="img/Gemini_Generated_Image_rrc7jcrrc7jcrrc7-removebg-preview.png" alt="Qutoof">
        <span>Qutoof</span>
      </a>
      <nav class="nav-links" aria-label="Main navigation">
        <a href="#about" data-i18n="nav.about">من نحن</a>
        <a href="#services" data-i18n="nav.services">خدماتنا</a>
        <a href="#approach" data-i18n="nav.approach">منهجيتنا</a>
        <a href="#work" data-i18n="nav.work">أعمالنا</a>
        <a href="#contact" data-i18n="nav.contact">تواصل معنا</a>
      </nav>
      <div class="nav-actions">
        <button class="lang-switch" id="langSwitch" type="button" aria-label="Switch language">EN</button>
        <a class="btn btn-small" href="#contact" data-i18n="nav.cta">ابدأ مشروعك</a>
        <button class="menu-btn" id="menuBtn" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span></button>
      </div>
    </div>
  </header>

  <main>
    <section class="hero section-pad">
      <div class="hero-orb orb-a"></div><div class="hero-orb orb-b"></div>
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <div class="eyebrow"><span></span><span data-i18n="hero.eyebrow">نصنع قيمة تُرى وتُذكر</span></div>
          <h1 data-i18n="hero.title">قطوف، حيث تتحول <em>الفكرة</em> إلى حضور يصنع فرقًا.</h1>
          <p data-i18n="hero.text">نعمل مع العلامات والشركات الطموحة لبناء حضور واضح، جذاب، ومتناسق من أول انطباع إلى كل نقطة تواصل مع العميل.</p>
          <div class="hero-actions">
            <a class="btn" href="#contact" data-i18n="hero.primary">تحدث معنا</a>
            <a class="text-link" href="#work"><span data-i18n="hero.secondary">اكتشف أعمالنا</span><span>↗</span></a>
          </div>
          <div class="hero-trust">
            <div class="trust-item"><strong>01</strong><span data-i18n="hero.trust1">تفكير استراتيجي</span></div>
            <div class="trust-item"><strong>02</strong><span data-i18n="hero.trust2">تنفيذ متقن</span></div>
            <div class="trust-item"><strong>03</strong><span data-i18n="hero.trust3">نتائج قابلة للنمو</span></div>
          </div>
        </div>
        <div class="hero-art reveal reveal-delay">
          <div class="art-card main-card">
            <div class="art-top"><span>QUTOOT / 01</span><span>EST.</span></div>
            <div class="logo-stage"><img src="img/Gemini_Generated_Image_rrc7jcrrc7jcrrc7-removebg-preview.png" alt="Qutoof logo"></div>
            <div class="art-bottom"><div><small data-i18n="hero.cardLabel">علامة تتجذر</small><strong data-i18n="hero.cardTitle">وتنمو بثقة.</strong></div><div class="arrow-chip">↗</div></div>
          </div>
          <div class="floating-card stats-card"><span data-i18n="hero.floatLabel">وضوح</span><strong>+360°</strong><small data-i18n="hero.floatSub">رؤية متكاملة للعلامة</small></div>
          <div class="floating-card quote-card"><span>“</span><p data-i18n="hero.quote">كل تفصيلة محسوبة لتخدم الصورة الأكبر.</p></div>
        </div>
      </div>
    </section>

    <section class="marquee-strip" aria-hidden="true">
      <div class="marquee-track"><span>BRAND • DIGITAL • STRATEGY • EXPERIENCE • GROWTH • </span><span>BRAND • DIGITAL • STRATEGY • EXPERIENCE • GROWTH • </span></div>
    </section>

    <section class="section-pad about" id="about">
      <div class="container two-col">
        <div class="section-intro reveal"><div class="section-kicker" data-i18n="about.kicker">عن قطوف</div><h2 data-i18n="about.title">لسنا مجرد منفذين، نحن شريك يفهم أين تريد أن تصل.</h2></div>
        <div class="section-copy reveal reveal-delay"><p data-i18n="about.text1">في قطوف نؤمن أن العلامة القوية تبدأ بفكرة واضحة، ثم تُترجم إلى تجربة متسقة يشعر بها العميل في كل مكان. نربط الاستراتيجية بالتصميم والتنفيذ لنصنع حضورًا له شخصية وهدف.</p><p data-i18n="about.text2">نضع البساطة، الجودة، والمرونة في صميم عملنا؛ لأن أفضل الحلول ليست الأكثر تعقيدًا، بل الأكثر تأثيرًا.</p><a class="text-link dark" href="#services"><span data-i18n="about.link">تعرّف على ما نقدمه</span><span>→</span></a></div>
      </div>
    </section>

    <section class="section-pad services" id="services">
      <div class="container">
        <div class="section-head reveal"><div><div class="section-kicker" data-i18n="services.kicker">خدماتنا</div><h2 data-i18n="services.title">من الفكرة إلى التفاصيل.</h2></div><p data-i18n="services.intro">مجموعة خدمات مترابطة تبني حضورًا متماسكًا وتساعدك على التحرك بثقة.</p></div>
        <div class="service-grid">
          <article class="service-card reveal"><span class="service-num">01</span><div class="icon-box">✦</div><h3 data-i18n="services.s1.title">استراتيجية العلامة</h3><p data-i18n="services.s1.text">تموضع واضح، شخصية مميزة، ورسائل تضع علامتك في المكان الصحيح.</p><a href="#contact" data-i18n="services.more">استكشف الخدمة ↗</a></article>
          <article class="service-card featured reveal reveal-delay"><span class="service-num">02</span><div class="icon-box">◫</div><h3 data-i18n="services.s2.title">الهوية البصرية</h3><p data-i18n="services.s2.text">نحوّل شخصية العلامة إلى نظام بصري متكامل يمكنه النمو على كل قناة.</p><a href="#contact" data-i18n="services.more">استكشف الخدمة ↗</a></article>
          <article class="service-card reveal reveal-delay-2"><span class="service-num">03</span><div class="icon-box">⌁</div><h3 data-i18n="services.s3.title">التجارب الرقمية</h3><p data-i18n="services.s3.text">مواقع ومنتجات رقمية سريعة، واضحة، ومصممة لتقود المستخدم نحو الخطوة التالية.</p><a href="#contact" data-i18n="services.more">استكشف الخدمة ↗</a></article>
          <article class="service-card reveal"><span class="service-num">04</span><div class="icon-box">↗</div><h3 data-i18n="services.s4.title">المحتوى والتواصل</h3><p data-i18n="services.s4.text">لغة بصرية ولفظية موحدة تساعدك على الظهور بثبات وبصوت يمكن تمييزه.</p><a href="#contact" data-i18n="services.more">استكشف الخدمة ↗</a></article>
        </div>
      </div>
    </section>

    <section class="section-pad approach" id="approach">
      <div class="container approach-grid">
        <div class="approach-sticky reveal"><div class="section-kicker" data-i18n="approach.kicker">منهجيتنا</div><h2 data-i18n="approach.title">نبدأ من <em>لماذا</em>، ونبني كل شيء حوله.</h2><p data-i18n="approach.text">عملية مرنة تجمع التفكير العميق بالتنفيذ السريع، مع مساحة حقيقية للتجربة والتحسين.</p></div>
        <div class="steps">
          <div class="step reveal"><span>01</span><div><h3 data-i18n="steps.s1.title">نفهم</h3><p data-i18n="steps.s1.text">نستمع، نبحث، ونحدد التحدي الحقيقي خلف الطلب.</p></div></div>
          <div class="step reveal"><span>02</span><div><h3 data-i18n="steps.s2.title">نخطط</h3><p data-i18n="steps.s2.text">نضع اتجاهًا واضحًا وأولويات يمكن تنفيذها وقياسها.</p></div></div>
          <div class="step reveal"><span>03</span><div><h3 data-i18n="steps.s3.title">نبني</h3><p data-i18n="steps.s3.text">نحوّل الاستراتيجية إلى تصميم، محتوى، وتجربة متكاملة.</p></div></div>
          <div class="step reveal"><span>04</span><div><h3 data-i18n="steps.s4.title">نطور</h3><p data-i18n="steps.s4.text">نختبر، نحلل، ونحسن ما يلزم حتى تظل العلامة مواكبة لنموك.</p></div></div>
        </div>
      </div>
    </section>

    <section class="section-pad work" id="work">
      <div class="container">
        <div class="section-head reveal"><div><div class="section-kicker" data-i18n="work.kicker">أعمال مختارة</div><h2 data-i18n="work.title">أفكار تستحق أن تُرى.</h2></div><a class="text-link dark" href="#contact"><span data-i18n="work.cta">مشروعك القادم</span><span>↗</span></a></div>
        <div class="work-grid">
          <article class="project project-1 reveal"><div class="project-visual"><div class="project-mark">Q</div><span>01 / BRAND</span></div><div class="project-meta"><div><small data-i18n="work.p1.tag">هوية & تموضع</small><h3 data-i18n="work.p1.title">علامة تولد من الوضوح</h3></div><span>↗</span></div></article>
          <article class="project project-2 reveal reveal-delay"><div class="project-visual"><div class="project-lines"></div><span>02 / DIGITAL</span></div><div class="project-meta"><div><small data-i18n="work.p2.tag">تجربة رقمية</small><h3 data-i18n="work.p2.title">واجهة تجعل الخطوة التالية أسهل</h3></div><span>↗</span></div></article>
          <article class="project project-3 reveal"><div class="project-visual"><div class="project-orbit"></div><span>03 / CAMPAIGN</span></div><div class="project-meta"><div><small data-i18n="work.p3.tag">تواصل & محتوى</small><h3 data-i18n="work.p3.title">قصة تخلق مساحة للعلامة</h3></div><span>↗</span></div></article>
        </div>
      </div>
    </section>

    <section class="section-pad quote-section">
      <div class="container quote-panel reveal"><span class="quote-icon">“</span><blockquote data-i18n="quote.text">العلامة الجيدة تُعرَف من شكلها، والعلامة القوية تُعرَف من أثرها.</blockquote><div class="quote-line"></div><span data-i18n="quote.caption">فلسفة قطوف في كل مشروع</span></div>
    </section>

    <section class="section-pad contact" id="contact">
      <div class="container contact-grid">
        <div class="contact-copy reveal"><div class="section-kicker" data-i18n="contact.kicker">لنتحدث</div><h2 data-i18n="contact.title">لديك فكرة؟ <em>خلّينا نكبرها.</em></h2><p data-i18n="contact.text">اكتب لنا عن مشروعك، وسنبدأ من حيث أنت لنحدد أفضل طريق للوصول إلى النتيجة التي تبحث عنها.</p><div class="contact-details"><a href="mailto:info@qutoof.com">info@qutoof.com</a><a href="tel:+200000000000">+20 000 000 0000</a></div></div>
        <form class="contact-form reveal reveal-delay" method="post" action="#contact" novalidate>
          <?php if ($status === 'success'): ?><div class="form-alert success" data-i18n="form.success">تم إرسال رسالتك بنجاح.</div><?php elseif ($status === 'fallback'): ?><div class="form-alert" data-i18n="form.fallback">استلمنا بياناتك، لكن خادم البريد يحتاج إلى الإعداد قبل الإرسال الفعلي. يمكنك التواصل معنا عبر البريد مباشرة.</div><?php elseif ($status === 'error'): ?><div class="form-alert error" data-i18n="form.error">راجع البيانات المطلوبة ثم حاول مرة أخرى.</div><?php endif; ?>
          <div class="field-row"><label><span data-i18n="form.name">الاسم</span><input type="text" name="name" required placeholder="اسمك" data-i18n-placeholder="form.namePh"></label><label><span data-i18n="form.email">البريد الإلكتروني</span><input type="email" name="email" required placeholder="name@example.com"></label></div>
          <label><span data-i18n="form.phone">رقم الهاتف</span><input type="tel" name="phone" placeholder="+20 ..."></label>
          <label><span data-i18n="form.message">حدثنا عن مشروعك</span><textarea name="message" rows="5" required placeholder="ما الذي تريد بناءه؟" data-i18n-placeholder="form.messagePh"></textarea></label>
          <button class="btn submit-btn" type="submit"><span data-i18n="form.submit">إرسال الرسالة</span><span>↗</span></button>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-top"><a class="brand footer-brand" href="#top"><img src="img/Gemini_Generated_Image_rrc7jcrrc7jcrrc7-removebg-preview.png" alt="Qutoof"><span>Qutoof</span></a><p data-i18n="footer.tagline">هوية أوضح. تجربة أفضل. نمو أذكى.</p><div class="footer-links"><a href="#about" data-i18n="nav.about">من نحن</a><a href="#services" data-i18n="nav.services">خدماتنا</a><a href="#work" data-i18n="nav.work">أعمالنا</a><a href="#contact" data-i18n="nav.contact">تواصل معنا</a></div></div>
    <div class="container footer-bottom"><span>© <span id="year"></span> Qutoof. <span data-i18n="footer.rights">جميع الحقوق محفوظة.</span></span><span data-i18n="footer.made">صُنع بعناية.</span></div>
  </footer>

  <script src="assets/js/app.js"></script>
</body>
</html>