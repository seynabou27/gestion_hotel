
 <?php
          $a=$categorie['tarif_unit'];
          $b=$prestation['prix_unit'] ;

        function calcul($a, $b){
        $add = $a+$b;
     
        return array($add);
      }
     ?>








<header class="bui-header bui-header--logo-large bui-u-hidden-print ">
<nav class="bui-header__bar">
<div class="bui-header__main">
<div class="bui-header__logo">
<span aria-label="Booking.com réservations d'hôtels en ligne">
<svg class="bk-icon -logos-booking-logo-inv" height="24" width="144" viewBox="0 0 252 42" role="presentation" aria-hidden="true" focusable="false">
<path d="M15.592 22.92C15.591 20.283 13.924 18.652 11.348 18.652H7.738C6.58 18.815 6.055 19.518 6.055 20.877V26.783L11.348 26.79C13.966 26.79 15.591 25.629 15.592 22.92ZM6.055 13.391H10.819C13.496 13.391 14.449 11.689 14.449 9.911C14.449 7.576 13.057 6.181 10.735 6.181H8.025C6.671 6.268 6.055 6.966 6.055 8.428V13.391ZM21.815 23.351C21.815 28.956 17.536 32.87 10.912 32.87H0V4.87C0.02 3.085 1.872 1.285 3.64 1.218H10.777C16.737 1.218 20.587 4.222 20.587 9.202C20.587 12.462 18.959 14.346 17.988 15.183L17.152 15.9L18.109 16.441C20.432 17.751 21.815 20.333 21.815 23.351V23.351ZM148.135 20.675C148.135 15.58 145.385 14.986 143.325 14.986C139.165 14.986 138.845 19.175 138.845 20.459C138.845 23.376 140.105 26.49 143.665 26.49C145.705 26.49 148.135 25.48 148.135 20.675V20.675ZM154.045 9.738L154.025 30.732C154.025 38.739 148.045 41.584 142.505 41.584C139.815 41.584 136.845 40.858 134.555 39.639L134.105 39.4L134.835 37.53L135.345 36.243C135.905 34.855 136.715 34.509 138.095 34.928C139.155 35.312 140.735 35.739 142.475 35.739C146.045 35.739 148.015 34.05 148.015 30.994V30.356L147.505 30.732C146.215 31.72 144.575 32.205 142.505 32.205C136.445 32.205 132.215 27.445 132.215 20.63C132.215 13.811 136.305 9.228 142.385 9.228C145.445 9.228 147.325 10.309 148.375 11.221L148.675 11.482L148.855 11.132C149.325 10.23 150.275 9.738 151.515 9.738H154.045V9.738ZM67.707 21.184C67.707 17.473 65.411 14.877 62.137 14.877C58.877 14.877 56.608 17.473 56.608 21.184C56.608 24.898 58.878 27.496 62.138 27.496C65.464 27.496 67.708 24.958 67.708 21.184H67.707ZM74.088 21.184C74.088 28.054 69.052 33.04 62.138 33.04C55.234 33.04 50.228 28.054 50.228 21.184C50.228 14.318 55.234 9.331 62.138 9.331C69.052 9.331 74.088 14.318 74.088 21.184ZM105.445 32.677V13.281C105.445 10.941 104.335 9.806 102.025 9.806L99.465 9.796L99.485 27.5H99.465L99.485 32.87H105.445V32.677ZM122.505 9.278C119.175 9.278 117.055 10.765 115.865 12.018L115.465 12.423L115.325 11.873C114.975 10.529 113.795 9.788 112.025 9.788H109.165L109.185 32.683H115.225V22.131C115.225 21.099 115.365 20.205 115.635 19.387C116.355 16.914 117.995 15.378 120.525 15.378C122.555 15.378 123.725 16.453 123.725 19.232V29.203C123.725 31.573 125.195 32.683 127.555 32.683H129.785V18.261C129.785 12.475 127.825 9.278 122.505 9.278V9.278ZM91.436 21.777C91.1964 21.3119 90.8928 20.8827 90.534 20.502L90.326 20.281L90.546 20.069C90.862 19.734 91.186 19.338 91.497 18.878L97.584 9.795H90.195L85.622 16.899C85.363 17.28 84.84 17.472 84.058 17.472H82.48V4.045C82.48 1.36 80.642 0 78.84 0H76.414L76.42 32.691H82.48V23.183H83.63C84.375 23.183 84.883 23.269 85.118 23.675L88.729 30.518C89.736 32.375 90.743 32.691 92.635 32.691H97.651L93.915 26.488L91.436 21.777ZM41.648 21.184C41.648 17.473 39.358 14.877 36.079 14.877C32.819 14.877 30.553 17.473 30.553 21.184C30.553 24.898 32.819 27.496 36.079 27.496C39.405 27.496 41.649 24.958 41.649 21.184H41.648ZM48.028 21.184C48.028 28.054 43.002 33.04 36.079 33.04C29.182 33.04 24.177 28.054 24.177 21.184C24.177 14.318 29.182 9.331 36.079 9.331C43.002 9.331 48.027 14.318 48.027 21.184H48.028ZM98.764 3.81C98.764 1.704 100.464 0 102.544 0C104.634 0 106.334 1.704 106.334 3.81C106.334 5.911 104.634 7.617 102.544 7.617C100.464 7.617 98.764 5.911 98.764 3.81Z" fill="white"></path>
<path d="M187.08 25.067C187.06 25.088 184.38 27.915 180.87 27.915C177.66 27.915 174.42 25.941 174.42 21.538C174.42 17.73 176.93 15.071 180.53 15.071C181.7 15.071 183.02 15.492 183.23 16.198L183.26 16.318C183.74 17.919 185.19 18.001 185.47 18.001L188.88 18.005V15.021C188.88 11.085 183.89 9.65698 180.53 9.65698C173.35 9.65698 168.14 14.674 168.14 21.584C168.14 28.489 173.29 33.502 180.4 33.502C186.56 33.502 189.91 29.434 189.94 29.391L190.12 29.172L187.43 24.685L187.08 25.067ZM244.43 9.65698C241.73 9.65698 239.25 10.927 237.58 13.05L237.11 13.651L236.74 12.979C235.53 10.776 233.46 9.65698 230.57 9.65698C227.55 9.65698 225.53 11.35 224.58 12.358L223.97 13.024L223.73 12.144C223.39 10.877 222.26 10.178 220.56 10.178H218.06L218.04 32.984H224.01V22.917C224.01 22.036 224.12 21.163 224.34 20.248C224.93 17.816 226.56 15.202 229.3 15.462C230.99 15.626 231.81 16.936 231.81 19.466V32.984H237.44V22.917C237.44 21.813 237.55 20.99 237.79 20.162C238.3 17.842 240.37 15.459 243.02 15.459C244.93 15.459 245.93 16.545 245.93 19.466V29.649C245.93 31.954 247.28 32.984 249.57 32.984H251.99L252 18.424C252 12.607 249.45 9.65698 244.43 9.65698V9.65698ZM203.66 10.043C196.76 10.043 191.35 15.031 191.35 21.898C191.35 28.765 196.76 33.754 203.66 33.754C210.58 33.754 215.61 28.765 215.61 21.898C215.61 15.031 210.58 10.043 203.66 10.043V10.043ZM158.31 29.446C158.31 27.34 160 25.636 162.09 25.636C164.18 25.636 165.88 27.34 165.88 29.446C165.88 31.548 164.18 33.254 162.09 33.254C160 33.254 158.31 31.548 158.31 29.446ZM203.66 28.209C200.4 28.209 198.13 25.611 198.13 21.898C198.13 18.186 200.4 15.59 203.66 15.59C206.93 15.59 209.23 18.186 209.23 21.898C209.23 25.671 206.99 28.209 203.66 28.209Z" fill="#0896FF"></path>
</svg>
</span>
</div>
</div>

<div class="bui-group bui-button-group bui-group--inline bui-group--align-end bui-group--vertical-align-middle">
<div class="bui-group__item">
<button class="bui-button bui-button--light bui-button--large" data-modal-size="960" data-modal-close-aria-label="Ferme la liste des devises" data-modal-aria-label="Sélectionnez votre devise" data-modal-arrow-navigation="true" data-bui-component="Modal.HeaderAsync,Tooltip" data-modal-header-async-type="currencyDesktop" data-tooltip-position="bottom" type="button" data-tooltip-text="Choisissez votre devise">
<span class="bui-button__text">
<span aria-hidden="true">
XOF
</span>
<span class="bui-u-sr-only">
Choisissez votre devise.
Votre devise actuelle est celle-ci&nbsp;: Franc CFA (BCEAO).
</span>
</span>
</button>
</div>
<div class="bui-group__item">
<button class="bui-button bui-button--light bui-button--large" data-modal-id="language-selection" data-modal-size="960" data-modal-close-aria-label="Ferme la liste des langues" data-modal-aria-label="Sélectionnez votre langue" data-modal-arrow-navigation="true" data-bui-component="Modal,Tooltip" data-tooltip-position="bottom" type="button" data-tooltip-text="Choisissez votre langue">
<span class="bui-button__text">
<div class="bui-avatar bui-avatar--small" aria-hidden="true">
<img class="bui-avatar__image" src="
https://cf.bstatic.com/static/img/flags/new/48-squared/fr/c48bc65c9dc57035fa983df37e9732c0f0a2663f.png
" alt="">
</div>
<span class="bui-u-sr-only">
Choisissez votre langue.
Votre langue actuelle est celle-ci&nbsp;: Français.
</span>
</span>
</button>
<template id="language-selection" style="display: none !important;">
<div class="bui-modal__header">
<h2 class="bui-modal__title">
Sélectionnez votre langue
</h2>
<div class="bui-modal__header-slot">
<div class="bui-group bui-group--large">
<div class="bui-group__item">
<div class="bui-group">
<div class="bui-group__item">
<h3 class="bui-f-font-strong">
Nous vous conseillons
</h3>
</div>
<div class="bui-group__item">
<div class="bui-traveller-header__selection-list">
<ul class="bui-group bui-group--small">
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.en-gb.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=en-gb&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="en-gb" hreflang="en-gb">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/gb/daba79fdd4066d133e8bf59070fd6819b951c403.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="en-gb">
English (UK)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=en-us&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="en-us" hreflang="en-us">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/us/fa2b2a0e643c840152ba856a8bb081c7ded40efa.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="en-us">
English (US)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.de.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=de&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="de" hreflang="de">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/de/668350ee17050ec21845c27503ae960695f341a9.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="de">
Deutsch
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.it.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=it&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="it" hreflang="it">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/it/b8db3771480bd0c7971b9f94cad3640c89521882.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="it">
Italiano
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.es.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=es&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="es" hreflang="es">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/es/b3bd4690290a78b1303198dd6576bdab8d7f9a80.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="es">
Español
</div>
</div>
</a>
</li>
</ul>
</div>
</ul>
</div>
</div>
</div>
</div>
<div class="bui-group__item">
<div class="bui-group">
<div class="bui-group__item">
<h3 class="bui-f-font-strong">
Toutes les langues
</h3>
</div>
<div class="bui-group__item">
<div class="bui-traveller-header__selection-list">
<div class="bui-group bui-group--small">
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.en-gb.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=en-gb&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="en-gb" hreflang="en-gb">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/gb/daba79fdd4066d133e8bf59070fd6819b951c403.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="en-gb">
English (UK)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=en-us&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="en-us" hreflang="en-us">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/us/fa2b2a0e643c840152ba856a8bb081c7ded40efa.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="en-us">
English (US)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.de.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=de&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="de" hreflang="de">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/de/668350ee17050ec21845c27503ae960695f341a9.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="de">
Deutsch
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.nl.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=nl&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="nl" hreflang="nl">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/nl/65e3bcc466c4026a08bdb2671799ca26c3228d19.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="nl">
Nederlands
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small bui-list-item--active" href="/index.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=fr&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="fr" hreflang="fr">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/fr/c48bc65c9dc57035fa983df37e9732c0f0a2663f.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="fr">
Français
</div>
<div class="bui-inline-container__end">
<span aria-hidden="true" class="bui-icon bui-icon--large">
<svg class="bk-icon -streamline-checkmark" height="20" width="20" viewBox="0 0 128 128" role="presentation" aria-hidden="true" focusable="false"><path d="M56.33 100a4 4 0 0 1-2.82-1.16L20.68 66.12a4 4 0 1 1 5.64-5.65l29.57 29.46 45.42-60.33a4 4 0 1 1 6.38 4.8l-48.17 64a4 4 0 0 1-2.91 1.6z"></path></svg>
</span>
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.es.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=es&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="es" hreflang="es">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/es/b3bd4690290a78b1303198dd6576bdab8d7f9a80.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="es">
Español
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.es-ar.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=es-ar&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="es-ar" hreflang="es-ar">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ar/9cce2b91336709016282f06432a8b6366069e0c2.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="es-ar">
Español (AR)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.es-mx.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=es-mx&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="es-mx" hreflang="es-mx">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/mx/f3a3f562a0185d68fb04b2ec01db2062ca6bdb76.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="es-mx">
Español (MX)
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ca.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ca&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ca" hreflang="ca">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/catalonia/8578246a75d8b9dceaacb174072d0c6acafcc2df.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ca">
Català
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.it.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=it&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="it" hreflang="it">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/it/b8db3771480bd0c7971b9f94cad3640c89521882.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="it">
Italiano
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.pt-pt.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=pt-pt&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="pt-pt" hreflang="pt-pt">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/pt/6542345c7408e3bd0d4c2e8f38d4396bba9b0e69.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="pt-pt">
Português (PT)
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.pt-br.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=pt-br&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="pt-br" hreflang="pt-br">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/br/0cf5e55d996fdcf96a2d31733addf5c10bad1f74.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="pt-br">
Português (BR)
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.no.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=no&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="no" hreflang="no">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/no/827be8d24af5667778b4bc651fe03f738a812b60.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="no">
Norsk
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.fi.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=fi&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="fi" hreflang="fi">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/fi/465d3b73ff07d1d696cb5dd26fbb91097c175e1b.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="fi">
Suomi
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.sv.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=sv&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="sv" hreflang="sv">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/se/5e126775c25a54a24956ddcc72c8bbcaeed20872.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="sv">
Svenska
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.da.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=da&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="da" hreflang="da">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/dk/744575dd4e87590a543b7c8cbacaef6c3de4e4d2.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="da">
Dansk
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.cs.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=cs&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="cs" hreflang="cs">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/cz/32002e60fead55ce886ff9827dfcf4af8cf4e277.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="cs">
Čeština
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.hu.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=hu&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="hu" hreflang="hu">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/hu/fc7cb24c5c7cb9de74a74fad271d6838daabc4cb.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="hu">
Magyar
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ro.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ro&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ro" hreflang="ro">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ro/2d67b91f7beb87bd9286975da3e6dadc70d9c64b.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ro">
Română
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ja.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ja&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ja" hreflang="ja">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/jp/9bf7e50bc6dc66599aeede9189ca16de461c60b6.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ja">
日本語
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.zh-cn.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=zh-cn&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="zh-cn" hreflang="zh-cn">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/cn/5a221730f540facc62563bfa6192ce155a9f677e.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="zh-cn">
简体中文
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.zh-tw.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=zh-tw&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="zh-tw" hreflang="zh-tw">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/z4/ced4751e6ac2cbb9884a5878fff59a4e24c3e386.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="zh-tw">
繁體中文
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.pl.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=pl&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="pl" hreflang="pl">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/pl/4d6b6e962b0b049a03924fc618b959395d60ae39.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="pl">
Polski
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.el.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=el&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="el" hreflang="el">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/gr/e0e42a97a7b860fc9be71954262902f2a4e94aa6.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="el">
Ελληνικά
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ru.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ru&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ru" hreflang="ru">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ru/2277320023a64803843c36ca6aa48ad77523dd0d.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ru">
Русский
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.tr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=tr&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="tr" hreflang="tr">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/tr/f7ad0cb74f4ea5e7193cb6029c7f977e9786cfa2.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="tr">
Türkçe
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.bg.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=bg&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="bg" hreflang="bg">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/bg/540f2da5fee31b7385af127619ab5ca4fc3783b5.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="bg">
Български
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ar.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ar&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ar" hreflang="ar">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/sa/44ab510f37755d1d9d4c4dfa9b1f25bed9b2a95c.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ar">
العربية
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ko.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ko&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ko" hreflang="ko">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/kr/4cb76b458a73ca4c1de034c7623475278d363ce6.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ko">
한국어
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.he.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=he&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="he" hreflang="he">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/il/fc1907ccd86aa051f7fbe22649d1e31ac6aee016.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="he">
עברית
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.lv.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=lv&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="lv" hreflang="lv">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/lv/393103a26c1d5f1fbd7d9674732bbdfc42296399.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="lv">
Latviski
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.uk.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=uk&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="uk" hreflang="uk">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ua/2ea50f1c1fb480c4557a5578f71657fc3152c3a1.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="uk">
Українська
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.id.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=id&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="id" hreflang="id">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/id/e7d3d00965d8c994a72807b43b21c648250cf906.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="id">
Bahasa Indonesia
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.ms.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=ms&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="ms" hreflang="ms">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/my/6d811cf6127cea0a957ca0243546a03339fa19ac.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="ms">
Bahasa Malaysia
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.th.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=th&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="th" hreflang="th">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/th/53a76d6856962953d739d07ac61f04adee50a3d1.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="th">
ภาษาไทย
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.et.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=et&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="et" hreflang="et">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ee/509074558f4fe7c71ceed57584dec0382274dd16.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="et">
Eesti
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.hr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=hr&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="hr" hreflang="hr">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/hr/e7a46f4dad977aecafa6a3680972e0c137a1bc41.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="hr">
Hrvatski
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.lt.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=lt&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="lt" hreflang="lt">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/lt/5bb712a60a82b7e075deba5b102aa36348bbb255.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="lt">
Lietuvių
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.sk.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=sk&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="sk" hreflang="sk">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/sk/29e3667f5aca74c157af9225d5a97a74a41e52ef.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="sk">
Slovenčina
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.sr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=sr&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="sr" hreflang="sr">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/rs/c1bc4fc1d782713cfec17a071dadca6b755a233e.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="sr">
Srpski
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.sl.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=sl&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="sl" hreflang="sl">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/si/f0619cdd45548522566c6d72a660ddc011906184.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="sl">
Slovenščina
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.vi.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=vi&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="vi" hreflang="vi">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/vn/90b17da2aafaebce7b0c34189747e1e10dba8041.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="vi">
Tiếng Việt
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.tl.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=tl&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="tl" hreflang="tl">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/ph/7048127466891462116ee2774154585fb5607aba.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="tl">
Filipino
</div>
</div>
</a>
</li>
<li class="bui-grid__column bui-grid__column-3">
<a class="bui-list-item bui-list-item--size-small " href="/index.is.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9&amp;lang=is&amp;sb_price_type=total&amp;soz=1&amp;lang_click=other;cdl=fr;lang_changed=1" data-lang="is" hreflang="is">
<div class="bui-inline-container bui-inline-container--align">
<div class="bui-inline-container__start">
<div class="bui-avatar bui-avatar--small bui-traveller-header__language">
<img class="bui-avatar__image" src="https://cf.bstatic.com/static/img/flags/new/48-squared/is/7d644655f895f8e346b964dc18cf5b6608a98d52.png" alt="">
</div>
</div>
<div class="bui-inline-container__main" lang="is">
Íslenska
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="bui-group__item">
<ul class="bui-grid bui-grid--size-small">
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</template>
</div>
<div class="bui-group__item">
<a class="bui-button bui-button--light bui-button--large" data-bui-component="Tooltip" data-tooltip-position="bottom" href="https://secure.booking.com/help.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;sid=0f8270cb40f1ff8bb5129494b9c2a1b9" data-ga-track="click|Click|Action: index|hc_entrypoint_top_header" data-tooltip-text="Contacter le Service Clients">
<span class="bui-button__icon">
<span aria-hidden="true" class="bui-icon bui-icon--large">
<svg class="bk-icon -streamline-question_mark_circle" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M9.75 9a2.25 2.25 0 1 1 3 2.122 2.25 2.25 0 0 0-1.5 2.122v1.006a.75.75 0 0 0 1.5 0v-1.006c0-.318.2-.602.5-.708A3.75 3.75 0 1 0 8.25 9a.75.75 0 1 0 1.5 0zM12 16.5a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zM22.5 12c0 5.799-4.701 10.5-10.5 10.5S1.5 17.799 1.5 12 6.201 1.5 12 1.5 22.5 6.201 22.5 12zm1.5 0c0-6.627-5.373-12-12-12S0 5.373 0 12s5.373 12 12 12 12-5.373 12-12z"></path></svg>
</span>
<span class="bui-u-sr-only">
Obtenez de l'aide concernant votre réservation
</span>
</span>
</a>
</div>
<div class="bui-group__item">
<svg class="bk-icon -streamline-property_add" height="24" style="display:none;" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M8.25 19h-3a.75.75 0 0 1-.75-.75v-7.5a.75.75 0 0 0-1.5 0v7.5a2.25 2.25 0 0 0 2.25 2.25h3a.75.75 0 0 0 0-1.5zM1.234 9.823l8.782-7.43a.75.75 0 0 1 .969 0l7.279 6.159a.75.75 0 1 0 .968-1.146l-7.279-6.159a2.25 2.25 0 0 0-2.906 0L.265 8.678a.75.75 0 1 0 .968 1.146zM15.75 2.5h3L18 1.75v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0 0 1.5zm6.75 14.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zm-2.25 3.75h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5z"></path></svg>
<a class="bui-button bui-button--light bui-traveller-header__product-action" href="https://join.booking.com/?lang=fr&amp;utm_source=topbar&amp;utm_medium=frontend&amp;amp;label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;amp;aid=304142" target="_blank" style="position: relative">
<span class="bui-button__text">
Ajoutez votre établissement
</span>
</a>
</div>
<div class="bui-group__item">
<a class="bui-button bui-button--secondary js-header-login-link" href="https://account.booking.com/auth/oauth2?bkng_action=index&amp;client_id=vO1Kblk7xX9tUn2cpZLS&amp;dt=1632583847&amp;aid=304142&amp;state=UqIDKDKGqXSZLk_2TC0BdsHYuL5_6rdZQkBtlYDNmH9aljdDfslXkBKiLbAlH5oD3MnUyhMg1ClmeoeLCosBFnWGa_S4bUnrbRdsX5CnmxcvZPLKBV5vT7fRs00_DzUk7hLleVR_2xj3zeZyxX4DTt2FaEO-Xbwj1kvbUZhuq9-yW9rffKDbxycAh8hyUkwgsFjJZHpM1hfbsvOxYaoxS2qHVi-5aMJPEOjKPGX2mfN7XdQzSvcNX8X3wkVMq63rIcU3VniXGDkPdRFx7Xx22CcPbYvPVoAMifNjmCjUx9xOJ6AFx1VKqz4m-VF5Cp82569fV677UdJNmWnUl8xUrH75iu1zlMfQxUMWoC2K7IB1Vd2POZvi7kOKHilb6h8a3AF9UYgmJZwpjAX6g7zZbFxtglU7UXqo_SnQjA0op3es80-8LHeAJkMcrkx8WbzfL-xm1NFG6BTN27IlIB08go-6Zbsaswtgt8LY9wRsy9gdMp0Y2SXGQGRJK2UwdFr6viuKT3rfYG6kiKJE9dyjmV6zAEGrTcDqdALwT077H55WyS5hfA&amp;redirect_uri=https%3A%2F%2Fsecure.booking.com%2Flogin.html%3Fop%3Doauth_return&amp;response_type=code&amp;prompt=register&amp;lang=fr" data-google-track="Click/Action: index/header_logged_out_link_box">
<span class="bui-button__text">
S'inscrire
</span>
</a>
</div>
<div class="bui-group__item">
<svg class="bk-icon -streamline-account_create" height="24" style="display:none;" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M22.5 17.25a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0zm1.5 0a6.75 6.75 0 1 0-13.5 0 6.75 6.75 0 0 0 13.5 0zm-7.5-3v6a.75.75 0 0 0 1.5 0v-6a.75.75 0 0 0-1.5 0zM14.25 18h6a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5zM1.5 17.25a6.003 6.003 0 0 1 8.356-5.518.75.75 0 0 0 .588-1.38A7.504 7.504 0 0 0 0 17.25a.75.75 0 0 0 1.5 0zm9.375-12.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0zm1.5 0a4.875 4.875 0 1 0-9.75 0 4.875 4.875 0 0 0 9.75 0z"></path></svg>
<a class="bui-button bui-button--secondary js-header-login-link" href="https://account.booking.com/auth/oauth2?response_type=code&amp;lang=fr&amp;state=UqIDKDKGqXSZLk8tPv0Gt0fjVhUZd9SIwEW_S1NfGO3YGKn1EawFdhMnqj8yHPYmyYfbecX9AoqsiFGou_fOWIsM3LpC3So22EOfkxmdh2pcjZt7Zy7I5Ygiz6kQo3YQ8Opx-D5E8rfmByqdko9u5hHrJzAVDuvSknmo8uQ0h_OX1txN_V9xyaIuYcsP7NhgbJEE_d6zjFYgPQmFMP77SDFOE7-TrOKDKWkqbnyiCmMd3MrEd18GI8NBnN8XjrBD3PwbwMK92Ui66_jhdXZTIstx5zwjRb7-h4eoo_hE1mndW6JIkaH7MyBZGQyNiPqZytHV_hUIJ8ExeoM3LL4h7_3ATCy8Nopev6mLUso-QPqzHCoNm7CKDCOo99E0LoIPdEpTxiwutr4jqA0iweuDV9gNQbYBSU_Lq92aJP0hzctJP7mlePTfB7mRvkvThCHBFzp9kkixpfkepAeNOJq8brW_mlk-D-fh_tEjgPKY46PIrAD4MAA2RyJc9bDuOdMPRwW4sOnHiP0_rvC0YroiUMxGjBnke3LIo_TX0m1-U9UHWhDYwg&amp;redirect_uri=https%3A%2F%2Fsecure.booking.com%2Flogin.html%3Fop%3Doauth_return&amp;client_id=vO1Kblk7xX9tUn2cpZLS&amp;aid=304142&amp;dt=1632583847&amp;bkng_action=index" data-google-track="Click/Action: index/header_logged_out_link_box">
<span class="bui-button__text">
Se connecter
</span>
</a>
</div>
</div>
</nav>
<nav class="bui-tab bui-header__tab bui-tab--borderless bui-tab--light">
<ul class="bui-tab__nav">
<li class="bui-tab__item">
<a aria-current="page" class="bui-tab__link bui-tab__link--selected" href="/index.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ;sid=0f8270cb40f1ff8bb5129494b9c2a1b9" data-et-click="
goal:xpb_accommodation goal:xpb_total_clicks
" data-ga-track="click|Product Expansion|accommodation|booking (index)">
<span aria-hidden="true" class="bui-icon bui-tab__icon bui-icon--medium">
<svg class="bk-icon -streamline-bed" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M2.75 12h18.5c.69 0 1.25.56 1.25 1.25V18l.75-.75H.75l.75.75v-4.75c0-.69.56-1.25 1.25-1.25zm0-1.5A2.75 2.75 0 0 0 0 13.25V18c0 .414.336.75.75.75h22.5A.75.75 0 0 0 24 18v-4.75a2.75 2.75 0 0 0-2.75-2.75H2.75zM0 18v3a.75.75 0 0 0 1.5 0v-3A.75.75 0 0 0 0 18zm22.5 0v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0zm-.75-6.75V4.5a2.25 2.25 0 0 0-2.25-2.25h-15A2.25 2.25 0 0 0 2.25 4.5v6.75a.75.75 0 0 0 1.5 0V4.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 0 1.5 0zm-13.25-3h7a.25.25 0 0 1 .25.25v2.75l.75-.75h-9l.75.75V8.5a.25.25 0 0 1 .25-.25zm0-1.5A1.75 1.75 0 0 0 6.75 8.5v2.75c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75V8.5a1.75 1.75 0 0 0-1.75-1.75h-7z"></path></svg>
</span><!--
--><span class="bui-tab__text">
Hébergements
</span>
</a>
</li>
<li class="bui-tab__item">
<a class="bui-tab__link" rel="nofollow" href="https://booking.com/pxgo?lang=fr&amp;aid=304142&amp;url=https%3A%2F%2Fbooking.kayak.com%2Fin%3Fbdclc%3Dfr-fr%26p%3Dsearchbox_link%26mc%3DXOF%26a%3Dbdc%252Fsearchbox%26sid%3D0f8270cb40f1ff8bb5129494b9c2a1b9&amp;label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ&amp;token=UmFuZG9tSVYkc2RlIyh9YXOod6xipXL6soRo1-Fn2uYo1eh955BEp-7yL8f2J20VOtZzDyKk130djs3vWs7n2YhzNCrCRC7Q1oPSXjZxOgM6imWvPh8Pm5-ssVg2fG0eKIWeSAdVljRXN0SI8my2fivRoJvHaJh0B1L4tyXd6UWy6YrekmmUdHxJwsVafe7cdhimxztbeuW0Yuc11Yt7txoQNAxRqkYTUw6b4l6vWua1jj20-x34Xxd7ByIlYVHvs4w3LA2TXnOmn1r621Rc8W4DVzbnEyIvmk3avWXa6yy8L0Fk-sRp7GVMK2pTMKRA2Rv31h1VxqGcu8Fe-lPIuouUetkqx5YH3bLeiNem-ajduCanh9MTuTYt4UOXcWDzF3zaibqKulIq9PGWiXCvysNfOL-iTe-TtL5YVOWM5mSXceEMogneRV2qUZx3KOSFU0Yd2r4djJ5N3czdwQ72TKfh4a92on2XNPQ7tOUzWBT1kCGVchdf3bEZQzeOB9bR" data-decider-header="flights" data-et-click="
goal:xpb_flights goal:xpb_total_clicks
" data-ga-track="click|Product Expansion|flights|kayak (index)">
<span aria-hidden="true" class="bui-icon bui-tab__icon bui-icon--medium">
<svg class="bk-icon -streamline-transport_airplane" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M20.505 7.5l-15.266.022.672.415-1.1-2.2a.75.75 0 0 0-.638-.414l-2.293-.1C.82 5.228-.003 6.06.003 7.083c.002.243.051.484.146.709l2.072 4.68a2.947 2.947 0 0 0 2.701 1.778h4.043l-.676-1.075-2.484 5.168A1.831 1.831 0 0 0 7.449 21h2.099a1.85 1.85 0 0 0 1.419-.664l5.165-6.363-.582.277h4.956c1.82.09 3.399-1.341 3.49-3.198l.004-.134a3.426 3.426 0 0 0-3.44-3.419l-.074.001zm.02 1.5h.042a1.924 1.924 0 0 1 1.933 1.914l-.002.065a1.866 1.866 0 0 1-1.955 1.772l-4.993-.001a.75.75 0 0 0-.582.277l-5.16 6.355a.346.346 0 0 1-.26.118h-2.1a.336.336 0 0 1-.3-.49l2.493-5.185a.75.75 0 0 0-.676-1.075H4.924a1.45 1.45 0 0 1-1.328-.878l-2.07-4.676a.35.35 0 0 1 .326-.474l2.255.1-.638-.415 1.1 2.2a.75.75 0 0 0 .672.415L20.507 9zM16.323 7.76l-2.992-4.02A1.851 1.851 0 0 0 11.85 3H9.783a1.85 1.85 0 0 0-1.654 2.672l1.439 2.91a.75.75 0 0 0 1.344-.664L9.472 5.007a.351.351 0 0 1 .312-.507h2.066a.35.35 0 0 1 .279.14l2.99 4.017a.75.75 0 1 0 1.203-.896z"></path></svg>
</span><!--
--><span class="bui-tab__text">
Vols
</span>
</a>
</li>
<li class="bui-tab__item">
<a class="bui-tab__link" href="/cars/index.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ;sid=0f8270cb40f1ff8bb5129494b9c2a1b9" data-decider-header="bookinggo" data-et-click="
goal:xpb_rentalcars goal:xpb_total_clicks
" data-ga-track="click|Product Expansion|cars|rentalcars (index)">
<span aria-hidden="true" class="bui-icon bui-tab__icon bui-icon--medium">
<svg class="bk-icon -streamline-transport_car" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M21.684 9.443l-1.7-3.79c-.42-1.128-1.542-1.905-2.794-1.903H6.809a2.999 2.999 0 0 0-2.811 1.947L2.316 9.443a.75.75 0 1 0 1.368.614l1.7-3.79c.238-.63.798-1.018 1.424-1.017h10.383a1.5 1.5 0 0 1 1.407.973l1.718 3.834a.75.75 0 1 0 1.368-.614zM.75 16.468V18a2.25 2.25 0 0 0 4.5 0v-1.5a.75.75 0 0 0-1.5 0V18a.75.75 0 0 1-1.5 0v-1.532a.75.75 0 0 0-1.5 0zm21 0V18a.75.75 0 0 1-1.5 0v-1.5a.75.75 0 0 0-1.5 0V18a2.25 2.25 0 0 0 4.5 0v-1.532a.75.75 0 0 0-1.5 0zM19.875 13.5a.375.375 0 0 1-.375-.375.75.75 0 0 0 1.5 0c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5zm.375-.375a.375.375 0 0 1-.375.375.75.75 0 0 0 0-1.5c-.621 0-1.125.504-1.125 1.125a.75.75 0 0 0 1.5 0zm-.375-.375c.207 0 .375.168.375.375a.75.75 0 0 0-1.5 0c0 .621.504 1.125 1.125 1.125a.75.75 0 0 0 0-1.5zm-.375.375c0-.207.168-.375.375-.375a.75.75 0 0 0 0 1.5c.621 0 1.125-.504 1.125-1.125a.75.75 0 0 0-1.5 0zM4.125 12C3.504 12 3 12.504 3 13.125a.75.75 0 0 0 1.5 0 .375.375 0 0 1-.375.375.75.75 0 0 0 0-1.5zm1.125 1.125c0-.621-.504-1.125-1.125-1.125a.75.75 0 0 0 0 1.5.375.375 0 0 1-.375-.375.75.75 0 0 0 1.5 0zM4.125 14.25c.621 0 1.125-.504 1.125-1.125a.75.75 0 0 0-1.5 0c0-.207.168-.375.375-.375a.75.75 0 0 0 0 1.5zM3 13.125c0 .621.504 1.125 1.125 1.125a.75.75 0 0 0 0-1.5c.207 0 .375.168.375.375a.75.75 0 0 0-1.5 0zM2.75 10.5h18.5c.69 0 1.25.56 1.25 1.25v3.75a.25.25 0 0 1-.25.25H1.75a.25.25 0 0 1-.25-.25v-3.75c0-.69.56-1.25 1.25-1.25zm0-1.5A2.75 2.75 0 0 0 0 11.75v3.75c0 .966.784 1.75 1.75 1.75h20.5A1.75 1.75 0 0 0 24 15.5v-3.75A2.75 2.75 0 0 0 21.25 9H2.75z"></path></svg>
</span><!--
--><span class="bui-tab__text">
Voitures de location
</span>
</a>
</li>
<li class="bui-tab__item">
<a class="bui-tab__link" href="/attractions/index.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ;sid=0f8270cb40f1ff8bb5129494b9c2a1b9" data-et-click="
goal:xpb_total_clicks
" data-decider-header="attractions" data-ga-track="click|Product Expansion|attractions|booking (index)">
<span aria-hidden="true" class="bui-icon bui-tab__icon bui-icon--medium">
<svg class="bk-icon -streamline-attractions" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M13.5 3a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zM15 3a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM6 7.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM21 15a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-9-3.75a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zM6 15a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm1.5 0a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm10.066 1.277a7.5 7.5 0 0 1-3.077 2.05.75.75 0 0 0 .498 1.415 9 9 0 0 0 3.693-2.46.75.75 0 1 0-1.114-1.005zm1.798-6.466c.177.922.183 1.869.015 2.792a.75.75 0 1 0 1.476.268c.2-1.106.194-2.24-.019-3.344a.75.75 0 1 0-1.472.284zm-5.337-5.784a7.5 7.5 0 0 1 3.54 2.196.75.75 0 0 0 1.113-1.004 9.002 9.002 0 0 0-4.247-2.636.75.75 0 1 0-.406 1.444zM6.434 6.223a7.5 7.5 0 0 1 3.539-2.196.75.75 0 1 0-.406-1.444A9.001 9.001 0 0 0 5.32 5.219a.75.75 0 0 0 1.114 1.004zM4.636 12.69a7.602 7.602 0 0 1 0-2.878.75.75 0 1 0-1.472-.284 9.102 9.102 0 0 0 0 3.446.75.75 0 0 0 1.472-.284zm4.876 5.639a7.517 7.517 0 0 1-3.035-2.005.75.75 0 0 0-1.106 1.014 9.017 9.017 0 0 0 3.641 2.405.75.75 0 1 0 .5-1.414zM7.31 21.872A1.5 1.5 0 0 0 8.672 24h6.656a1.5 1.5 0 0 0 1.362-2.128l-3.314-8.217c-.361-.785-1.252-1.114-2.005-.767a1.5 1.5 0 0 0-.733.734l-3.343 8.283zm1.377.595l3.328-8.25-.015.033 3.313 8.217.015.033H8.672z"></path></svg>
</span><!--
--><span class="bui-tab__text">
Attractions
</span>
</a>
</li>
<li class="bui-tab__item">
<a class="bui-tab__link" href="/taxi/index.fr.html?label=gen173nr-1DCAEoggI46AdIM1gEaNABiAEBmAENuAEZyAEM2AED6AEBiAIBqAIDuAKngb2KBsACAdICJDQxZmE2OGYzLTc0ZTQtNDVmNi05NjE3LTkwYjlkMjIyZWMyNNgCBOACAQ;sid=0f8270cb40f1ff8bb5129494b9c2a1b9" data-decider-header="rideways" data-et-click="
goal:xpb_rideways
goal:xpb_total_clicks
customGoal:cQDJGZaTaTaBYWEIFaKBGO:4
" data-ga-track="click|Product Expansion|airport_taxis|rideways (index)">
<span aria-hidden="true" class="bui-icon bui-tab__icon bui-icon--medium">
<svg class="bk-icon -streamline-taxi_sign" height="24" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M21.75 15.5V8a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zm-16.5 0V8a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zM3 8.75h3a.75.75 0 0 0 0-1.5H3a.75.75 0 0 0 0 1.5zm6.75 6.75v-6a.75.75 0 0 1 1.5 0v6a.75.75 0 0 0 1.5 0v-6a2.25 2.25 0 0 0-4.5 0v6a.75.75 0 0 0 1.5 0zM9 13.25h3a.75.75 0 0 0 0-1.5H9a.75.75 0 0 0 0 1.5zm5.304-4.971l3 7.5a.75.75 0 0 0 1.392-.557l-3-7.5a.75.75 0 0 0-1.392.557zm3-.558l-3 7.5a.75.75 0 0 0 1.392.557l3-7.5a.75.75 0 0 0-1.392-.557zM.75 5h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zm0 15h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5z"></path></svg>
</span><!--
--><span class="bui-tab__text">
Taxis aéroport
</span>
</a>
</li>
</ul>
</nav>
</header>