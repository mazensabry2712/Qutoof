(() => {
  const root = document.documentElement;
  const header = document.querySelector('.site-header');
  const langButton = document.getElementById('langSwitch');
  const menuButton = document.getElementById('menuBtn');
  const stored = localStorage.getItem('qutoof-language');
  let language = stored === 'en' ? 'en' : 'ar';

  const applyLanguage = (next) => {
    language = next;
    localStorage.setItem('qutoof-language', language);
    root.lang = language;
    root.dir = language === 'ar' ? 'rtl' : 'ltr';
    document.title = language === 'ar'
      ? 'قطوف للصناعات الغذائية | Qutoof Food Industries'
      : 'Qutoof Food Industries | Dates Production & Packaging';
    if (langButton) langButton.textContent = language === 'ar' ? 'EN' : 'عربي';

    document.querySelectorAll('[data-ar][data-en]').forEach((el) => {
      el.innerHTML = language === 'ar' ? el.dataset.ar : el.dataset.en;
    });

    document.querySelectorAll('[data-placeholder-ar][data-placeholder-en]').forEach((el) => {
      el.placeholder = language === 'ar' ? el.dataset.placeholderAr : el.dataset.placeholderEn;
    });

    header?.classList.remove('open');
    menuButton?.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('no-scroll');
  };

  langButton?.addEventListener('click', () => applyLanguage(language === 'ar' ? 'en' : 'ar'));

  menuButton?.addEventListener('click', () => {
    const open = header.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(open));
    document.body.classList.toggle('no-scroll', open);
  });

  document.querySelectorAll('.nav-links a').forEach((link) => {
    link.addEventListener('click', () => {
      header?.classList.remove('open');
      menuButton?.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('no-scroll');
    });
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) entry.target.classList.add('is-visible');
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.reveal').forEach((el) => observer.observe(el));
  window.addEventListener('scroll', () => header?.classList.toggle('scrolled', window.scrollY > 8), { passive: true });

  const year = document.getElementById('year');
  if (year) year.textContent = new Date().getFullYear();

  applyLanguage(language);
})();
