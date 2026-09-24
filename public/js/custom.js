/* ═══════════════════════════════════════════
   CUSTOM JAVASCRIPT FOR JAC OLIVOL
   Standalone multi-page version
═══════════════════════════════════════════ */

/* ── MOBILE NAV ── */
function initMobileNav() {
    const mobToggle = document.getElementById('mobToggle');
    if (!mobToggle) return;

    mobToggle.addEventListener('click', () => {
        const m = document.getElementById('mobMenu');
        m.style.display = m.style.display === 'none' ? 'block' : 'none';
    });

    document.querySelectorAll('.mob-item[data-dd="1"]').forEach(item => {
        item.querySelector('.mob-link').addEventListener('click', e => {
            e.preventDefault();
            item.classList.toggle('open');
        });
    });
}

/* ── NAVBAR SCROLL ── */
function initNavbarScroll() {
    const mainNav = document.getElementById('mainNav');
    if (!mainNav) return;

    window.addEventListener('scroll', () => {
        mainNav.classList.toggle('scrolled', window.scrollY > 30);
    }, { passive: true });
}

/* ── SCROLL REVEAL ── */
let revealObs;

function observeReveals() {
    if (revealObs) revealObs.disconnect();
    revealObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('in');
                revealObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

    document.querySelectorAll('.reveal, .reveal-l, .reveal-r').forEach(el => {
        if (!el.classList.contains('in')) {
            revealObs.observe(el);
        }
    });
}

/* ── HERO ZOOM ── */
function triggerHeroZoom() {
    const bg = document.querySelector('.page-hero-bg');
    if (bg) {
        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                bg.classList.add('zoomed');
            });
        });
    }
}

/* ── BRAND DIRECTORY FILTER (instant, no page reload) ── */
function initBrandFilter() {
    const main = document.getElementById('brandMain');
    if (!main) return;

    const checks = document.querySelectorAll('.bf-check');
    const clearBtn = document.getElementById('bfClear');
    const catBlocks = document.querySelectorAll('.bd-cat-block');
    const emptyState = document.getElementById('bdEmpty');

    function applyFilter() {
        const checkedVals = Array.from(checks).filter(c => c.checked).map(c => c.value);
        let visibleCount = 0;

        catBlocks.forEach(block => {
            const cat = block.getAttribute('data-cat');
            const catAllowed = checkedVals.length === 0 || checkedVals.includes(cat);

            block.querySelectorAll('.bd-tile').forEach(tile => {
                tile.classList.toggle('bd-hidden', !catAllowed);
            });

            block.classList.toggle('bd-hidden', !catAllowed);
            if (catAllowed) visibleCount++;
        });

        emptyState.classList.toggle('show', visibleCount === 0);
    }

    checks.forEach(c => c.addEventListener('change', applyFilter));
    if (clearBtn) clearBtn.addEventListener('click', () => {
        checks.forEach(c => c.checked = false);
        applyFilter();
    });
}

/* ── BRAND TILE TAP-TO-REVEAL (touch devices, since CSS :hover needs 2 taps) ── */
function initBrandTileTouch() {
    const tiles = document.querySelectorAll('.bd-tile');
    if (!tiles.length) return;
    const isTouch = window.matchMedia('(hover: none)').matches;
    if (!isTouch) return;

    tiles.forEach(tile => {
        tile.addEventListener('click', function (e) {
            if (!this.classList.contains('bd-active')) {
                e.preventDefault();
                tiles.forEach(t => t.classList.remove('bd-active'));
                this.classList.add('bd-active');
            }
        });
    });

    document.addEventListener('click', e => {
        if (!e.target.closest('.bd-tile')) {
            tiles.forEach(t => t.classList.remove('bd-active'));
        }
    });
}

/* ── INIT ── */
document.addEventListener('DOMContentLoaded', () => {
    initMobileNav();
    initNavbarScroll();
    observeReveals();
    setTimeout(observeReveals, 300);
    triggerHeroZoom();
    initBrandFilter();
    initBrandTileTouch();
});
