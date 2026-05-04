 <script>
document.addEventListener('DOMContentLoaded', () => {
    const planCards = document.querySelectorAll('.planCard');
    let selectedPlan = null;
    let selectedPrice = 0;

    planCards.forEach(card => {
        card.addEventListener('click', () => {
            planCards.forEach(c => c.style.border = '2px solid rgba(255,255,255,0.2)');
            card.style.border = '2px solid #F2EB9B';
            selectedPlan = card.dataset.plan;
            selectedPrice = parseInt(card.dataset.price);
        });
    });

    const applyBtn = document.getElementById('applyBtn');
    const overlay = document.getElementById('paymentOverlay');
    const popup = document.getElementById('paymentPopup');
    const closePayment = document.getElementById('closePayment');
    const payerName = document.getElementById('payerName');
    const paymentAmount = document.getElementById('paymentAmount');
    const timerEl = document.getElementById('paymentTimer');
    const submitProofBtn = document.getElementById('submitProofBtn');

    applyBtn.addEventListener('click', () => {
        const name = document.getElementById('fullName').value.trim();
        const phone = document.getElementById('phoneNumber').value.trim();
        const email = document.getElementById('emailAddress').value.trim();
        const country = document.getElementById('country').value;

        if (!name || !phone || !email || !country || !selectedPlan) {
            showChakraToast("Please fill all fields and select a plan!", "error");
            return;
        }

        payerName.textContent = name;
        paymentAmount.textContent = `₦${selectedPrice.toLocaleString()}`;

        overlay.style.display = 'flex';
        setTimeout(() => {
            popup.style.opacity = '1';
            popup.style.transform = 'scale(1)';
        }, 100);

        // Timer
        let t = 300;
        const timer = setInterval(() => {
            const m = Math.floor(t / 60).toString().padStart(2, '0');
            const s = (t % 60).toString().padStart(2, '0');
            timerEl.textContent = `${m}:${s}`;
            if (t-- <= 0) clearInterval(timer);
        }, 1000);
    });

    closePayment.addEventListener('click', () => {
        popup.style.opacity = '0';
        overlay.style.display = 'none';
    });

    document.querySelectorAll('.copyBtn').forEach(btn => {
        btn.addEventListener('click', () => {
            const text = document.getElementById(btn.dataset.copy).textContent;
            navigator.clipboard.writeText(text);
            showChakraToast("Copied successfully!", "success");
        });
    });

    submitProofBtn.addEventListener('click', () => {
        window.open('https://wa.me/+2348142470259?text=hello+I+just+made+my+payment', '_blank');
        overlay.style.display = 'none';
    });
});

// Updated Chakra-style toast function with success/error
function showChakraToast(message, type = "success") {
    const toastId = 'toast-' + Date.now();
    const toast = document.createElement('div');
    toast.id = toastId;

    const bgColor = type === "success" ? "#e6fffa" : "#ffe6e6";
    const borderColor = type === "success" ? "#38a169" : "#e53e3e";
    const textColor = type === "success" ? "#2f855a" : "#c53030";
    const icon = type === "success" ? "✔" : "✖";

    toast.style.cssText = `
        display: flex; 
        align-items: center; 
        background: ${bgColor}; 
        padding: 16px; 
        border-radius: 6px; 
        box-shadow: 0 4px 6px rgba(0,0,0,0.1); 
        margin-bottom: 10px;
        border-left: 4px solid ${borderColor};
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 9999;
        min-width: 250px;
        font-weight: 500;
        color: ${textColor};
    `;

    toast.innerHTML = `<span style='color: ${borderColor}; margin-right: 8px; font-size: 12px;'>${icon}</span>${message}`;

    document.body.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    }, 3000);
}
</script>

                </div>
            </div>
        </div>
</div><script>
    (function() {
        var on = addEventListener
          , off = removeEventListener
          , $ = function(q) {
            return document.querySelector(q)
        }
          , $$ = function(q) {
            return document.querySelectorAll(q)
        }
          , $body = document.body
          , $inner = $('.inner')
          , client = (function() {
            var o = {
                browser: 'other',
                browserVersion: 0,
                os: 'other',
                osVersion: 0,
                mobile: false,
                canUse: null,
                flags: {
                    lsdUnits: false,
                },
            }, ua = navigator.userAgent, a, i;
            a = [['firefox', /Firefox\/([0-9\.]+)/, null], ['edge', /Edge\/([0-9\.]+)/, null], ['safari', /Version\/([0-9\.]+).+Safari/, null], ['chrome', /Chrome\/([0-9\.]+)/, null], ['chrome', /CriOS\/([0-9\.]+)/, null], ['ie', /Trident\/.+rv:([0-9]+)/, null], ['safari', /iPhone OS ([0-9_]+)/, function(v) {
                return v.replace('_', '.').replace('_', '');
            }
            ]];
            for (i = 0; i < a.length; i++) {
                if (ua.match(a[i][1])) {
                    o.browser = a[i][0];
                    o.browserVersion = parseFloat(a[i][2] ? (a[i][2])(RegExp.$1) : RegExp.$1);
                    break;
                }
            }
            a = [['ios', /([0-9_]+) like Mac OS X/, function(v) {
                return v.replace('_', '.').replace('_', '');
            }
            ], ['ios', /CPU like Mac OS X/, function(v) {
                return 0
            }
            ], ['ios', /iPad; CPU/, function(v) {
                return 0
            }
            ], ['android', /Android ([0-9\.]+)/, null], ['mac', /Macintosh.+Mac OS X ([0-9_]+)/, function(v) {
                return v.replace('_', '.').replace('_', '');
            }
            ], ['windows', /Windows NT ([0-9\.]+)/, null], ['undefined', /Undefined/, null]];
            for (i = 0; i < a.length; i++) {
                if (ua.match(a[i][1])) {
                    o.os = a[i][0];
                    o.osVersion = parseFloat(a[i][2] ? (a[i][2])(RegExp.$1) : RegExp.$1);
                    break;
                }
            }
            if (o.os == 'mac' && ('ontouchstart'in window) && ((screen.width == 1024 && screen.height == 1366) || (screen.width == 834 && screen.height == 1112) || (screen.width == 810 && screen.height == 1080) || (screen.width == 768 && screen.height == 1024)))
                o.os = 'ios';
            o.mobile = (o.os == 'android' || o.os == 'ios');
            var _canUse = document.createElement('div');
            o.canUse = function(property, value) {
                var style;
                style = _canUse.style;
                if (!(property in style))
                    return false;
                if (typeof value !== 'undefined') {
                    style[property] = value;
                    if (style[property] == '')
                        return false;
                }
                return true;
            }
            ;
            o.flags.lsdUnits = o.canUse('width', '100dvw');
            return o;
        }())
          , ready = {
            list: [],
            add: function(f) {
                this.list.push(f);
            },
            run: function() {
                this.list.forEach( (f) => {
                    f();
                }
                );
            },
        }
          , trigger = function(t) {
            dispatchEvent(new Event(t));
        }
          , cssRules = function(selectorText) {
            var ss = document.styleSheets, a = [], f = function(s) {
                var r = s.cssRules, i;
                for (i = 0; i < r.length; i++) {
                    if (r[i]instanceof CSSMediaRule && matchMedia(r[i].conditionText).matches)
                        (f)(r[i]);
                    else if (r[i]instanceof CSSStyleRule && r[i].selectorText == selectorText)
                        a.push(r[i]);
                }
            }, x, i;
            for (i = 0; i < ss.length; i++)
                f(ss[i]);
            return a;
        }
          , escapeHtml = function(s) {
            if (s === '' || s === null || s === undefined)
                return '';
            var a = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#39;',
            };
            s = s.replace(/[&<>"']/g, function(x) {
                return a[x];
            });
            return s;
        }
          , thisHash = function() {
            var h = location.hash ? location.hash.substring(1) : null, a;
            if (!h)
                return null;
            if (h.match(/\?/)) {
                a = h.split('?');
                h = a[0];
                history.replaceState(undefined, undefined, '#' + h);
                window.location.search = a[1];
            }
            if (h.length > 0 && !h.match(/^[a-zA-Z]/))
                h = 'x' + h;
            if (typeof h == 'string')
                h = h.toLowerCase();
            return h;
        }
          , scrollToElement = function(e, style, duration) {
            var y, cy, dy, start, easing, offset, f;
            if (!e)
                y = 0;
            else {
                offset = (e.dataset.scrollOffset ? parseInt(e.dataset.scrollOffset) : 0) * parseFloat(getComputedStyle(document.documentElement).fontSize);
                switch (e.dataset.scrollBehavior ? e.dataset.scrollBehavior : 'default') {
                case 'default':
                default:
                    y = e.offsetTop + offset;
                    break;
                case 'center':
                    if (e.offsetHeight < window.innerHeight)
                        y = e.offsetTop - ((window.innerHeight - e.offsetHeight) / 2) + offset;
                    else
                        y = e.offsetTop - offset;
                    break;
                case 'previous':
                    if (e.previousElementSibling)
                        y = e.previousElementSibling.offsetTop + e.previousElementSibling.offsetHeight + offset;
                    else
                        y = e.offsetTop + offset;
                    break;
                }
            }
            if (!style)
                style = 'smooth';
            if (!duration)
                duration = 750;
            if (style == 'instant') {
                window.scrollTo(0, y);
                return;
            }
            start = Date.now();
            cy = window.scrollY;
            dy = y - cy;
            switch (style) {
            case 'linear':
                easing = function(t) {
                    return t
                }
                ;
                break;
            case 'smooth':
                easing = function(t) {
                    return t < .5 ? 4 * t * t * t : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1
                }
                ;
                break;
            }
            f = function() {
                var t = Date.now() - start;
                if (t >= duration)
                    window.scroll(0, y);
                else {
                    window.scroll(0, cy + (dy * easing(t / duration)));
                    requestAnimationFrame(f);
                }
            }
            ;
            f();
        }
          , scrollToTop = function() {
            scrollToElement(null);
        }
          , loadElements = function(parent) {
            var a, e, x, i;
            $body.dispatchEvent(new CustomEvent('startComponents',{
                detail: {
                    parent: parent
                }
            }));
            a = parent.querySelectorAll('iframe[data-src]:not([data-src=""])');
            for (i = 0; i < a.length; i++) {
                a[i].contentWindow.location.replace(a[i].dataset.src);
                a[i].dataset.initialSrc = a[i].dataset.src;
                a[i].dataset.src = '';
            }
            a = parent.querySelectorAll('video[autoplay]');
            for (i = 0; i < a.length; i++) {
                if (a[i].paused)
                    a[i].play();
            }
            e = parent.querySelector('[data-autofocus="1"]');
            x = e ? e.tagName : null;
            switch (x) {
            case 'FORM':
                e = e.querySelector('.field input, .field select, .field textarea');
                if (e)
                    e.focus();
                break;
            default:
                break;
            }
            a = parent.querySelectorAll('unloaded-script');
            for (i = 0; i < a.length; i++) {
                x = document.createElement('script');
                x.setAttribute('data-loaded', '');
                if (a[i].getAttribute('src'))
                    x.setAttribute('src', a[i].getAttribute('src'));
                if (a[i].textContent)
                    x.textContent = a[i].textContent;
                a[i].replaceWith(x);
            }
            x = new Event('loadelements');
            a = parent.querySelectorAll('[data-unloaded]');
            a.forEach( (element) => {
                element.removeAttribute('data-unloaded');
                element.dispatchEvent(x);
            }
            );
        }
          , unloadElements = function(parent) {
            var a, e, x, i;
            $body.dispatchEvent(new CustomEvent('stopComponents',{
                detail: {
                    parent: parent
                }
            }));
            a = parent.querySelectorAll('iframe[data-src=""]');
            for (i = 0; i < a.length; i++) {
                if (a[i].dataset.srcUnload === '0')
                    continue;
                if ('initialSrc'in a[i].dataset)
                    a[i].dataset.src = a[i].dataset.initialSrc;
                else
                    a[i].dataset.src = a[i].src;
                a[i].contentWindow.location.replace('about:blank');
            }
            a = parent.querySelectorAll('video');
            for (i = 0; i < a.length; i++) {
                if (!a[i].paused)
                    a[i].pause();
            }
            e = $(':focus');
            if (e)
                e.blur();
        };
        window._scrollToTop = scrollToTop;
        var thisUrl = function() {
            return window.location.href.replace(window.location.search, '').replace(/#$/, '');
        };
        var getVar = function(name) {
            var a = window.location.search.substring(1).split('&'), b, k;
            for (k in a) {
                b = a[k].split('=');
                if (b[0] == name)
                    return b[1];
            }
            return null;
        };
        var errors = {
            handle: function(handler) {
                window.onerror = function(message, url, line, column, error) {
                    (handler)(error.message);
                    return true;
                }
                ;
            },
            unhandle: function() {
                window.onerror = null;
            }
        };
        loadElements(document.body);
        var style, sheet, rule;
        style = document.createElement('style');
        style.appendChild(document.createTextNode(''));
        document.head.appendChild(style);
        sheet = style.sheet;
        if (client.mobile) {
            (function() {
                if (client.flags.lsdUnits) {
                    document.documentElement.style.setProperty('--viewport-height', '100svh');
                    document.documentElement.style.setProperty('--background-height', '100lvh');
                } else {
                    var f = function() {
                        document.documentElement.style.setProperty('--viewport-height', window.innerHeight + 'px');
                        document.documentElement.style.setProperty('--background-height', (window.innerHeight + 250) + 'px');
                    };
                    on('load', f);
                    on('orientationchange', function() {
                        setTimeout(function() {
                            (f)();
                        }, 100);
                    });
                }
            }
            )();
        }
        if (client.os == 'android') {
            (function() {
                sheet.insertRule('body::after { }', 0);
                rule = sheet.cssRules[0];
                var f = function() {
                    rule.style.cssText = 'height: ' + (Math.max(screen.width, screen.height)) + 'px';
                };
                on('load', f);
                on('orientationchange', f);
                on('touchmove', f);
            }
            )();
            $body.classList.add('touch');
        } else if (client.os == 'ios') {
            if (client.osVersion <= 11)
                (function() {
                    sheet.insertRule('body::after { }', 0);
                    rule = sheet.cssRules[0];
                    rule.style.cssText = '-webkit-transform: scale(1.0)';
                }
                )();
            if (client.osVersion <= 11)
                (function() {
                    sheet.insertRule('body.ios-focus-fix::before { }', 0);
                    rule = sheet.cssRules[0];
                    rule.style.cssText = 'height: calc(100% + 60px)';
                    on('focus', function(event) {
                        $body.classList.add('ios-focus-fix');
                    }, true);
                    on('blur', function(event) {
                        $body.classList.remove('ios-focus-fix');
                    }, true);
                }
                )();
            $body.classList.add('touch');
        }
        ready.run();
    }
    )();
</script>
</body></html>