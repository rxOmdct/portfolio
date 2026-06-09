(function () {
    'use strict';

    /* --- Menu mobile --------------------------------------- */
    const toggle = document.querySelector('.nav-toggle');
    const nav    = document.querySelector('.main-nav');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', open);
        });
        nav.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                nav.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', false);
            });
        });
    }

    /* --- Photo d'accueil : repli si l'image est absente ---- */
    const heroImg = document.querySelector('.hero-photo img');
    if (heroImg) {
        heroImg.addEventListener('error', () => {
            const ph = document.createElement('div');
            ph.className = 'hero-photo-placeholder';
            ph.textContent = 'photo.jpg';
            heroImg.replaceWith(ph);
        });
    }

    /* --- Formulaire de contact (statique, via client mail) - */
    const form = document.querySelector('form[data-contact]');
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const to      = form.dataset.contact;
            const name    = (form.elements.name ? form.elements.name.value : '').trim();
            const email   = (form.elements.email ? form.elements.email.value : '').trim();
            const message = (form.elements.message ? form.elements.message.value : '').trim();

            const subject = 'Contact portfolio — ' + (name || 'sans nom');
            const body    =
                'Nom : ' + name + '\n' +
                'Email : ' + email + '\n\n' +
                message;

            window.location.href =
                'mailto:' + to +
                '?subject=' + encodeURIComponent(subject) +
                '&body=' + encodeURIComponent(body);
        });
    }
})();
