/*
 * The Typekit service used to deliver this font or fonts for use on websites
 * is provided by Adobe and is subject to these Terms of Use
 * http://www.adobe.com/products/eulas/tou_typekit. For font license
 * information, see the list below.
 *
 * canada-type-gibson:
 *   - http://typekit.com/eulas/0000000000000000000156a0
 *   - http://typekit.com/eulas/00000000000000000001569b
 *   - http://typekit.com/eulas/00000000000000000001569d
 *   - http://typekit.com/eulas/00000000000000000001569e
 *
 * © 2009-2016 Adobe Systems Incorporated. All Rights Reserved.
 */
if (!window.Typekit) window.Typekit = {};
window.Typekit.config = {
    "a": "782381",
    "c": [".tk-canada-type-gibson", "\"canada-type-gibson\",sans-serif"],
    "dl": "AAAAdAAAAArcIWFTsmwcgBPtn1IAB4DF",
    "f": "//use.typekit.net/c/eaa1df/1w;canada-type-gibson,7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191,cQm:W:i4,cQg:W:n3,cQj:W:n4,cQk:W:n6/{format}{/extras*}",
    "fc": [{
        "id": 24351,
        "family": "canada-type-gibson",
        "src": "{scheme}://{hostname}/af/5fc63e/0000000000000000000156a0/27/{format}{?primer,subset_id,fvd}",
        "descriptors": {
            "weight": "400",
            "style": "italic",
            "primer": "7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191"
        }
    }, {
        "id": 24352,
        "family": "canada-type-gibson",
        "src": "{scheme}://{hostname}/af/517add/00000000000000000001569b/27/{format}{?primer,subset_id,fvd}",
        "descriptors": {
            "weight": "300",
            "style": "normal",
            "primer": "7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191"
        }
    }, {
        "id": 24354,
        "family": "canada-type-gibson",
        "src": "{scheme}://{hostname}/af/f323ac/00000000000000000001569d/27/{format}{?primer,subset_id,fvd}",
        "descriptors": {
            "weight": "400",
            "style": "normal",
            "primer": "7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191"
        }
    }, {
        "id": 24355,
        "family": "canada-type-gibson",
        "src": "{scheme}://{hostname}/af/7c3105/00000000000000000001569e/27/{format}{?primer,subset_id,fvd}",
        "descriptors": {
            "weight": "600",
            "style": "normal",
            "primer": "7cdcb44be4a7db8877ffa5c0007b8dd865b3bbc383831fe2ea177f62257a9191"
        }
    }],
    "fi": [24351, 24352, 24354, 24355],
    "fn": ["canada-type-gibson", ["i4", "n3", "n4", "n6"]],
    "hn": "use.typekit.net",
    "ht": "tk",
    "js": "1.18.4",
    "kt": "czo4vtc",
    "l": "typekit",
    "p": "p.typekit.net",
    "ps": 1,
    "type": "configurable"
};
/*{"k":"1.18.4","auto_updating":true,"last_published":"2016-05-24 14:56:02 UTC"}*/
;
(function(window, document, undefined) {
    if (!document.querySelector) {
        document.documentElement.className += " wf-inactive";
        return;
    }

    function aa(a, b, c) {
        return a.call.apply(a.bind, arguments)
    }

    function ba(a, b, c) {
        if (!a) throw Error();
        if (2 < arguments.length) {
            var d = Array.prototype.slice.call(arguments, 2);
            return function() {
                var c = Array.prototype.slice.call(arguments);
                Array.prototype.unshift.apply(c, d);
                return a.apply(b, c)
            }
        }
        return function() {
            return a.apply(b, arguments)
        }
    }

    function h(a, b, c) {
        h = Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? aa : ba;
        return h.apply(null, arguments)
    }
    var k = Date.now || function() {
            return +new Date
        };

    function l(a, b, c, d) {
        this.b = null != a ? a : null;
        this.g = null != b ? b : null;
        this.m = null != c ? c : null;
        this.u = null != d ? d : null
    }
    var ca = /^([0-9]+)(?:[\._-]([0-9]+))?(?:[\._-]([0-9]+))?(?:[\._+-]?(.*))?$/;

    function m(a, b) {
        return a.b > b.b || a.b === b.b && a.g > b.g || a.b === b.b && a.g === b.g && a.m > b.m ? 1 : a.b < b.b || a.b === b.b && a.g < b.g || a.b === b.b && a.g === b.g && a.m < b.m ? -1 : 0
    }

    function p(a, b) {
        return -1 === m(a, b)
    }

    function q(a, b) {
        return !m(a, b) || 1 === m(a, b)
    }

    function da(a, b) {
        return !m(a, b) || -1 === m(a, b)
    }

    function r(a, b) {
        return !m(a, b)
    }
    l.prototype.toString = function() {
        return [this.b, this.g || "", this.m || "", this.u || ""].join("")
    };

    function t(a) {
        a = ca.exec(a);
        var b = null,
            c = null,
            d = null,
            e = null;
        a && (null !== a[1] && a[1] && (b = parseInt(a[1], 10)), null !== a[2] && a[2] && (c = parseInt(a[2], 10)), null !== a[3] && a[3] && (d = parseInt(a[3], 10)), null !== a[4] && a[4] && (/^[0-9]+$/.test(a[4]) ? e = parseInt(a[4], 10) : e = a[4]));
        return new l(b, c, d, e)
    };

    function ea(a) {
        return "Safari" === a.getName() && "AppleWebKit" === a.H || "Unknown" === a.getName() && "AppleWebKit" === a.H && ("iPhone" === a.v || "iPad" === a.v || "iPod" === a.v)
    }

    function fa(a) {
        return "Safari" === a.getName() && "AppleWebKit" === a.H && q(a.G, new l(602, 1))
    }

    function ga(a) {
        return "Chrome" === a.getName() && q(a.C, new l(6)) && da(a.C, new l(35))
    }

    function ha(a) {
        return "Chrome" === a.getName() && q(a.C, new l(36))
    }

    function ia(a) {
        return "BuiltinBrowser" === a.getName()
    };

    function ja() {
        this.N = this.R = this.J = this.O = this.P = !0
    };

    function ka(a) {
        this.g = a || "-"
    }
    ka.prototype.b = function(a) {
        for (var b = [], c = 0; c < arguments.length; c++) b.push(arguments[c].replace(/[\W_]+/g, "").toLowerCase());
        return b.join(this.g)
    };

    function la() {
        var a = [{
            name: "font-family",
            value: u.c[v + 1]
        }];
        this.g = [u.c[v]];
        this.b = a
    }

    function ma(a) {
        for (var b = a.g.join(","), c = [], d = 0; d < a.b.length; d++) {
            var e = a.b[d];
            c.push(e.name + ":" + e.value + ";")
        }
        return b + "{" + c.join("") + "}"
    };

    function w(a, b) {
        return (a & 65535) * b + (((a >>> 16) * b & 65535) << 16)
    };

    function na(a, b) {
        this.b = b || Array(Math.ceil(a / 32));
        if (!b)
            for (var c = 0; c < this.b.length; c++) this.b[c] = 0
    }
    na.prototype.set = function(a) {
        if (Math.floor(a / 32 + 1) > this.b.length) throw Error("Index is out of bounds.");
        var b = Math.floor(a / 32);
        this.b[b] |= 1 << a - 32 * b
    };
    na.prototype.has = function(a) {
        if (Math.floor(a / 32 + 1) > this.b.length) throw Error("Index is out of bounds.");
        var b = Math.floor(a / 32);
        return !!(this.b[b] & 1 << a - 32 * b)
    };

    function oa(a, b, c) {
        this.b = a;
        this.m = b;
        this.g = new na(a, c)
    }
    var pa = [2449897292, 4218179547, 2675077685, 1031960064, 1478620578, 1386343184, 3194259988, 2656050674, 3012733295, 2193273665];
    oa.prototype.has = function(a) {
        if ("string" !== typeof a && "number" !== typeof a) throw Error("Value should be a string or number.");
        for (var b = "number" === typeof a, c = 0; c < this.m; c++) {
            var d;
            if (b) d = w(a & 4294967295, 3432918353), d = d << 15 | d >>> 17, d = w(d, 461845907), d ^= pa[c] || 0, d = d << 13 | d >>> 19, d = w(d, 5) + 3864292196, d ^= 4, d ^= d >>> 16, d = w(d, 2246822507), d ^= d >>> 13, d = w(d, 3266489909), d ^= d >>> 16, d = (d >>> 0) % this.b;
            else {
                d = pa[c] || 0;
                var e, f, g = a.length % 4,
                    n = a.length - g;
                for (f = 0; f < n; f += 4) e = (a.charCodeAt(f + 0) & 4294967295) << 0 | (a.charCodeAt(f + 1) &
                    4294967295) << 8 | (a.charCodeAt(f + 2) & 4294967295) << 16 | (a.charCodeAt(f + 3) & 4294967295) << 24, e = w(e, 3432918353), e = e << 15 | e >>> 17, e = w(e, 461845907), d ^= e, d = d << 13 | d >>> 19, d = w(d, 5) + 3864292196;
                e = 0;
                switch (g) {
                    case 3:
                        e ^= (a.charCodeAt(f + 2) & 4294967295) << 16;
                    case 2:
                        e ^= (a.charCodeAt(f + 1) & 4294967295) << 8;
                    case 1:
                        e ^= (a.charCodeAt(f + 0) & 4294967295) << 0, e = w(e, 3432918353), e = e << 15 | e >>> 17, e = w(e, 461845907), d ^= e
                }
                d ^= a.length;
                d = w(d ^ d >>> 16, 2246822507);
                d = w(d ^ d >>> 13, 3266489909);
                d = ((d ^ d >>> 16) >>> 0) % this.b
            }
            if (!this.g.has(d)) return !1
        }
        return !0
    };

    function qa(a) {
        if (window.atob) a = window.atob(a);
        else {
            a = a.replace(/=+$/, "");
            if (1 == a.length % 4) throw Error("'atob' failed: The string to be decoded is not correctly encoded.");
            for (var b = 0, c, d, e = 0, f = ""; d = a.charAt(e++); ~d && (c = b % 4 ? 64 * c + d : d, b++ % 4) ? f += String.fromCharCode(255 & c >> (-2 * b & 6)) : 0) d = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(d);
            a = f
        }
        c = [];
        for (b = 0; b < a.length; b += 4) c.push(a.charCodeAt(b) << 24 | a.charCodeAt(b + 1) << 16 | a.charCodeAt(b + 2) << 8 | a.charCodeAt(b + 3) << 0);
        a = c.shift();
        b =
            c.shift();
        this.b = new oa(a, b, c)
    }
    qa.prototype.has = function(a) {
        if ("" === a) return !0;
        for (a = a.split("."); a.length;) {
            var b = a.join("."),
                c = "*." + b;
            if (this.b.has(b) || this.b.has(c) || this.b.has(encodeURIComponent(b)) || this.b.has(encodeURIComponent(c))) return !0;
            a.shift()
        }
        return !1
    };

    function ra(a, b, c, d) {
        b = a.b.createElement(b);
        if (c)
            for (var e in c) c.hasOwnProperty(e) && ("style" == e ? b.style.cssText = c[e] : b.setAttribute(e, c[e]));
        d && b.appendChild(a.b.createTextNode(d));
        return b
    }

    function sa(a, b, c) {
        a = a.b.getElementsByTagName(b)[0];
        a || (a = document.documentElement);
        a.insertBefore(c, a.lastChild)
    }

    function ta(a, b) {
        a.b.body ? b() : a.b.addEventListener ? a.b.addEventListener("DOMContentLoaded", b) : a.b.attachEvent("onreadystatechange", function() {
            "interactive" != a.b.readyState && "complete" != a.b.readyState || b()
        })
    }

    function x(a) {
        a.parentNode && a.parentNode.removeChild(a)
    }

    function y(a, b, c) {
        b = b || [];
        c = c || [];
        for (var d = a.className.split(/\s+/), e = 0; e < b.length; e += 1) {
            for (var f = !1, g = 0; g < d.length; g += 1)
                if (b[e] === d[g]) {
                    f = !0;
                    break
                }
            f || d.push(b[e])
        }
        b = [];
        for (e = 0; e < d.length; e += 1) {
            f = !1;
            for (g = 0; g < c.length; g += 1)
                if (d[e] === c[g]) {
                    f = !0;
                    break
                }
            f || b.push(d[e])
        }
        a.className = b.join(" ").replace(/\s+/g, " ").replace(/^\s+|\s+$/, "")
    }

    function ua(a, b) {
        for (var c = a.className.split(/\s+/), d = 0, e = c.length; d < e; d++)
            if (c[d] == b) return !0;
        return !1
    }

    function A(a, b) {
        var c = ra(a, "style");
        c.setAttribute("type", "text/css");
        c.styleSheet ? (sa(a, "head", c), c.styleSheet.cssText = b) : (c.appendChild(document.createTextNode(b)), sa(a, "head", c))
    }

    function va(a, b, c) {
        var d = a.b.getElementsByTagName("head")[0];
        if (d) {
            var e = ra(a, "script", {
                    src: b
                }),
                f = !1;
            e.onload = e.onreadystatechange = function() {
                f || this.readyState && "loaded" != this.readyState && "complete" != this.readyState || (f = !0, c && c(null), e.onload = e.onreadystatechange = null, "HEAD" == e.parentNode.tagName && d.removeChild(e))
            };
            d.appendChild(e);
            setTimeout(function() {
                f || (f = !0, c && c(Error("Script load timeout")))
            }, 5E3)
        }
    };

    function wa(a, b, c) {
        this.g = a.g.document.documentElement;
        this.u = b;
        this.w = c;
        this.b = new ka("-");
        this.A = !1 !== b.events;
        this.m = !1 !== b.classes
    }

    function B(a) {
        if (a.m) {
            var b = ua(a.g, a.b.b("wf", "active")),
                c = [],
                d = [a.b.b("wf", "loading")];
            b || c.push(a.b.b("wf", "inactive"));
            y(a.g, c, d)
        }
        C(a, "inactive")
    }

    function C(a, b, c) {
        if (a.A && a.u[b]) try {
            if (c) a.u[b](c.b, D(c));
            else a.u[b]()
        } catch (d) {
            console.error('Typekit: Error in "' + b + '" callback', d)
        }
        if (a.w[b])
            if (c) a.w[b](c.b, D(c));
            else a.w[b]()
    };

    function xa(a, b, c) {
        c = c || {};
        this.b = a;
        this.g = b;
        this.weight = c.weight || "400";
        this.style = c.style || "normal";
        this.L = c.primer || void 0;
        this.M = c.subset_id || void 0
    }

    function ya(a) {
        return ("tk-" + a.b).slice(0, 26) + "-" + D(a)
    }

    function E(a, b) {
        return new xa(b, a.g, {
            weight: a.weight,
            style: a.style,
            L: a.L,
            M: a.M
        })
    }

    function D(a) {
        return a.style.charAt(0) + a.weight.charAt(0)
    };
    var za = {
        Y: "a",
        ca: "d",
        X: "i",
        Z: "j",
        W: "k",
        ba: "l",
        NONE: "x"
    };

    function Aa(a) {
        this.b = a
    }

    function Ba(a, b) {
        return a.b.replace(/\{([^\{\}]+)\}/g, function(a, d) {
            if ("?" == d.charAt(0)) {
                for (var e = d.slice(1).split(","), f = [], g = 0; g < e.length; g++) b[e[g]] && f.push(e[g] + "=" + encodeURIComponent(b[e[g]]));
                return f.length ? "?" + f.join("&") : ""
            }
            return encodeURIComponent(b[d] || "")
        })
    };

    function Ca() {
        this.b = []
    }

    function Da(a, b) {
        for (var c = 0; c < b.length; c++) a.b.push(b[c])
    }

    function Ea(a, b) {
        for (var c = 0; c < a.b.length; c++) b(a.b[c], c, a)
    }

    function Fa(a, b) {
        if ("i" === b) {
            var c = {},
                d = new Ca;
            Ea(a, function(a) {
                c[a.b] || (c[a.b] = {});
                c[a.b][a.weight] || (c[a.b][a.weight] = []);
                c[a.b][a.weight].push(a)
            });
            for (var e in c) {
                for (var f = [400, 300, 200, 100, 500, 600, 700, 800, 900], g = 0; g < f.length; g++) {
                    var n = f[g];
                    if (c[e][n]) {
                        Da(d, c[e][n]);
                        break
                    }
                }
                f = [700, 800, 900, 600, 500, 400, 300, 200, 100];
                for (g = 0; g < f.length; g++) {
                    var z = f[g];
                    if (c[e][z] && n !== z) {
                        Da(d, c[e][z]);
                        break
                    }
                }
            }
            Ea(a, function(a) {
                a = E(a, a.b.replace(/(-1|-2)$/, "").slice(0, 28) + "-" + D(a));
                d.b.push(a)
            });
            return d
        }
        return "x" ===
        b ? new Ca : a
    }

    function Ga(a, b, c) {
        for (var d = [], e = 0; e < b.length; e++) {
            var f = b[e],
                g = Ba(new Aa(a.g), {
                    scheme: "https",
                    hostname: c,
                    format: f,
                    primer: a.L,
                    subset_id: a.M,
                    fvd: D(a),
                    extension: Ia(f)
                });
            "i" === f ? d.push("url(" + g + ")") : d.push("url(" + g + ') format("' + Ja(f) + '")')
        }
        return d.join(",")
    }

    function Ka(a, b, c, d) {
        if ("x" === b) return "";
        var e = [];
        e.push("font-family:" + (d ? ya(a) : a.b));
        b = "k" === b ? Ga(a, ["l", "d", "j"], c) : Ga(a, [b], c);
        e.push("src:" + b);
        e.push("font-weight:" + a.weight);
        e.push("font-style:" + a.style);
        return "@font-face{" + e.join(";") + ";}"
    }

    function Ja(a) {
        switch (a) {
            case "d":
                return "woff";
            case "i":
                return "eot";
            case "l":
                return "woff2";
            default:
                return "opentype"
        }
    }

    function Ia(a) {
        switch (a) {
            case "d":
                return "woff";
            case "i":
                return "eot";
            case "l":
                return "woff2";
            default:
                return "otf"
        }
    }

    function La(a, b, c, d) {
        var e = [];
        Ea(a, function(a) {
            e.push(Ka(a, b, c, d))
        });
        return e.join("")
    };

    function Ma(a, b) {
        this.g = a;
        this.m = b;
        this.b = ra(this.g, "span", {
            "aria-hidden": "true"
        }, this.m)
    }

    function Na(a) {
        sa(a.g, "body", a.b)
    }

    function Oa(a) {
        return "display:block !important;position:absolute !important;top:-9999px !important;left:-9999px !important;font-size:300px !important;width:auto !important;height:auto !important;line-height:normal !important;margin:0 !important;padding:0 !important;font-variant:normal !important;white-space:nowrap !important;font-family:" + a.b + " !important;font-weight:" + a.weight + " !important;font-style:" + a.style + " !important;"
    };

    function Pa(a, b, c, d, e, f, g, n) {
        this.I = a;
        this.U = b;
        this.B = c;
        this.b = d;
        this.D = g || "BESbswy";
        this.g = {};
        this.V = e || 3E3;
        this.T = n;
        this.F = f || null;
        this.m = new Ma(this.B, this.D);
        this.u = new Ma(this.B, this.D);
        this.w = new Ma(this.B, this.D);
        this.A = new Ma(this.B, this.D);
        a = this.T ? ya(this.b) : this.b.b;
        this.m.b.style.cssText = Oa(E(this.b, a + ",serif"));
        this.u.b.style.cssText = Oa(E(this.b, a + ",sans-serif"));
        this.w.b.style.cssText = Oa(E(this.b, "serif"));
        this.A.b.style.cssText = Oa(E(this.b, "sans-serif"));
        Na(this.m);
        Na(this.u);
        Na(this.w);
        Na(this.A)
    }
    var Qa = {
            aa: "serif",
            $: "sans-serif"
        },
        Ra = null;

    function Sa() {
        if (null === Ra) {
            var a = /AppleWebKit\/([0-9]+)(?:\.([0-9]+))/.exec(window.navigator.userAgent);
            Ra = !!a && (536 > parseInt(a[1], 10) || 536 === parseInt(a[1], 10) && 11 >= parseInt(a[2], 10))
        }
        return Ra
    }
    Pa.prototype.start = function() {
        this.g.serif = this.w.b.offsetWidth;
        this.g["sans-serif"] = this.A.b.offsetWidth;
        this.S = k();
        Ta(this)
    };

    function Ua(a, b, c) {
        for (var d in Qa)
            if (Qa.hasOwnProperty(d) && b === a.g[Qa[d]] && c === a.g[Qa[d]]) return !0;
        return !1
    }

    function Ta(a) {
        var b = a.m.b.offsetWidth,
            c = a.u.b.offsetWidth,
            d;
        (d = b === a.g.serif && c === a.g["sans-serif"]) || (d = Sa() && Ua(a, b, c));
        d ? k() - a.S >= a.V ? Sa() && Ua(a, b, c) && (!a.F || a.F.hasOwnProperty(a.b.b)) ? Va(a, a.I) : Va(a, a.U) : Wa(a) : Va(a, a.I)
    }

    function Wa(a) {
        setTimeout(h(function() {
            Ta(this)
        }, a), 50)
    }

    function Va(a, b) {
        setTimeout(h(function() {
            x(this.m.b);
            x(this.u.b);
            x(this.w.b);
            x(this.A.b);
            b(this.b)
        }, a), 0)
    };

    function Xa(a, b, c, d, e, f, g) {
        this.m = a;
        this.B = b;
        this.b = d;
        this.w = c;
        this.g = e || 3E3;
        this.A = f || void 0;
        this.u = g
    }
    Xa.prototype.start = function() {
        var a = this.w.g.document,
            b = this,
            c = k(),
            d = new Promise(function(d, e) {
                function n() {
                    k() - c >= b.g ? e() : a.fonts.load(b.b.style + " " + b.b.weight + " 300px " + (b.u ? ya(b.b) : b.b.b), b.A).then(function(a) {
                        1 <= a.length ? d() : setTimeout(n, 25)
                    }, function() {
                        e()
                    })
                }
                n()
            }),
            e = new Promise(function(a, c) {
                setTimeout(c, b.g)
            });
        Promise.race([e, d]).then(function() {
            b.m(b.b)
        }, function() {
            b.B(b.b)
        })
    };

    function Ya(a, b, c, d) {
        this.D = a;
        this.b = b;
        this.g = 0;
        this.A = this.w = !1;
        this.F = c;
        this.B = d
    }
    var Za = null;

    function $a(a, b, c) {
        var d = {},
            e = b.b.length;
        if (!e && c) B(a.b);
        else {
            a.g += e;
            c && (a.w = c);
            var f = [];
            Ea(b, function(b) {
                var c = a.b;
                c.m && y(c.g, [c.b.b("wf", b.b, D(b), "loading")]);
                C(c, "fontloading", b);
                c = null;
                if (null === Za)
                    if (window.FontFace) {
                        var e = /Gecko.*Firefox\/(\d+)/.exec(window.navigator.userAgent);
                        Za = e ? 42 < parseInt(e[1], 10) : !0
                    } else Za = !1;
                Za ? c = new Xa(h(a.m, a), h(a.u, a), a.D, b, a.F, "BESbswy\ue000\ue001\ue002\ue003\ue004\ue005\ue006", a.B) : c = new Pa(h(a.m, a), h(a.u, a), a.D, b, a.F, d, "BESbswy\ue000\ue001\ue002\ue003\ue004\ue005\ue006",
                    a.B);
                f.push(c)
            });
            for (b = 0; b < f.length; b++) f[b].start()
        }
    }
    Ya.prototype.m = function(a) {
        var b = this.b;
        b.m && y(b.g, [b.b.b("wf", a.b, D(a), "active")], [b.b.b("wf", a.b, D(a), "loading"), b.b.b("wf", a.b, D(a), "inactive")]);
        C(b, "fontactive", a);
        this.A = !0;
        ab(this)
    };
    Ya.prototype.u = function(a) {
        var b = this.b;
        if (b.m) {
            var c = ua(b.g, b.b.b("wf", a.b, D(a), "active")),
                d = [],
                e = [b.b.b("wf", a.b, D(a), "loading")];
            c || d.push(b.b.b("wf", a.b, D(a), "inactive"));
            y(b.g, d, e)
        }
        C(b, "fontinactive", a);
        ab(this)
    };

    function ab(a) {
        !--a.g && a.w && (a.A ? (a = a.b, a.m && y(a.g, [a.b.b("wf", "active")], [a.b.b("wf", "loading"), a.b.b("wf", "inactive")]), C(a, "active")) : B(a.b))
    };

    function F(a) {
        return "Windows" === a.v
    }

    function bb(a) {
        return F(a) && q(a.o, new l(6, 1))
    }

    function G(a) {
        return F(a) && r(a.o, new l(5, 1)) || F(a) && r(a.o, new l(5, 2)) || F(a) && r(a.o, new l(6, 0)) || bb(a)
    }

    function H(a) {
        return "Macintosh" === a.v && q(a.o, new l(10, 4)) && p(a.o, new l(10, 12)) || null === a.o.b
    }

    function I(a) {
        return "Macintosh" === a.v && q(a.o, new l(10, 12))
    }

    function cb(a, b) {
        return b.P && ("iPhone" === a.v || "iPod" === a.v) || b.O && "iPad" === a.v
    }

    function db(a, b) {
        return cb(a, b) && q(a.o, new l(4, 2)) && p(a.o, new l(5))
    }

    function eb(a, b) {
        return cb(a, b) && q(a.o, new l(5)) && p(a.o, new l(10))
    }

    function J(a, b) {
        return b.J && "Android" === a.v
    }

    function fb(a, b) {
        return J(a, b) && q(a.o, new l(2, 2)) && p(a.o, new l(3, 1))
    }

    function gb(a, b) {
        return J(a, b) && q(a.o, new l(3, 1)) && p(a.o, new l(4, 1))
    }

    function K(a) {
        return "Linux" === a.v || "Ubuntu" === a.v
    };
    var hb = {
        a: function(a, b) {
            return "Safari" === a.getName() && "AppleWebKit" === a.H && q(a.G, new l(525, 13)) && p(a.G, new l(534, 50)) && (G(a) || "Macintosh" === a.v && (q(a.o, new l(10, 4)) || null === a.o.b)) || ia(a) && (fb(a, b) || J(a, b) && q(a.o, new l(4, 1))) || b.J && "Silk" === a.getName() && p(a.C, new l(2)) && (fb(a, b) || H(a) || I(a)) || b.J && "Silk" === a.getName() && q(a.C, new l(2)) && J(a, b) && q(a.o, new l(4, 1)) || ea(a) && db(a, b) || ga(a) && db(a, b) || ha(a) && db(a, b) || "AdobeAIR" === a.getName() && q(a.C, new l(2, 5)) && (F(a) && null === a.o.b || K(a) || H(a) || I(a))
        },
        d: function(a,
                    b) {
            return ga(a) && (G(a) || K(a) || H(a) || I(a) || J(a, b) || "CrOS" === a.v || "CrKey" === a.v || eb(a, b)) || ha(a) && eb(a, b) || "Gecko" === a.H && 1 === m(a.G, new l(1, 9, 1)) && da(a.G, new l(38)) && (G(a) || K(a) || H(a) || I(a) || J(a, b)) || "Safari" === a.getName() && "AppleWebKit" === a.H && q(a.G, new l(534, 50)) && p(a.G, new l(602)) && (G(a) || H(a) || I(a)) || fa(a) && H(a) || ea(a) && eb(a, b) || "Opera" === a.getName() && q(a.C, new l(11, 10)) && da(a.C, new l(22)) && (G(a) || K(a) || H(a) || I(a) || J(a, b)) || "MSIE" === a.getName() && 9 <= a.K && (bb(a) || F(a) && r(a.o, new l(6, 0))) || "Edge" ===
                a.getName() && bb(a) || "MSIE" === a.getName() && b.R && "Windows Phone" === a.v && q(a.o, new l(8)) || ia(a) && (b.N && "BlackBerry" === a.v && q(a.o, new l(10)) || K(a))
        },
        j: function(a, b) {
            return ia(a) && gb(a, b) || b.J && "Silk" === a.getName() && q(a.C, new l(2)) && (gb(a, b) || K(a))
        },
        i: function(a) {
            return "MSIE" === a.getName() && q(a.C, new l(6, 0)) && (void 0 === a.K || 9 > a.K) && G(a)
        },
        l: function(a, b) {
            return ha(a) && (G(a) || K(a) || H(a) || I(a) || J(a, b) || "CrOS" === a.v || "CrKey" === a.v) || "Gecko" === a.H && q(a.G, new l(39)) && (G(a) || K(a) || H(a) || I(a) || J(a, b)) || fa(a) &&
                I(a) || ea(a) && cb(a, b) && q(a.o, new l(10)) || "Opera" === a.getName() && q(a.C, new l(23)) && (G(a) || K(a) || H(a) || I(a) || J(a, b))
        },
        x: function() {
            return !1
        }
    };

    function ib(a, b) {
        this.b = a;
        this.g = "x";
        this.A = this.I = null;
        this.m = [];
        this.w = b;
        this.u = this.D = null;
        this.B = new Ca
    }
    ib.prototype.supportsConfiguredBrowser = function() {
        return "x" !== this.g
    };
    ib.prototype.init = function() {
        if (0 < this.m.length) {
            for (var a = [], b = 0; b < this.m.length; b++) a.push(ma(this.m[b]));
            A(this.b, a.join(""))
        }
    };
    ib.prototype.load = function(a, b, c) {
        var d = this;
        c = c || {};
        a = c.timeout;
        var e = !!c.async,
            f = Fa(this.B, this.g);
        c = new wa(this.b, c, {
            active: function() {
                if (e) {
                    var a = La(f, d.g, d.w, !1);
                    A(d.b, a)
                }
                if (d.F) {
                    var a = d.F,
                        b = d.b,
                        c = new Aa("{scheme}://{hostname}/p.gif{?s,k,app,ht,h,f,a,js,_}"),
                        g = (window.__adobewebfontsappname__ || a.app || "").toString().substr(0, 20),
                        b = 'hellomind.com',
                        n = [],
                        Q = [];
                    window.Typekit ? (window.Typekit.fonts || (window.Typekit.fonts = []), Q = window.Typekit.fonts) : window.TypekitPreview &&
                    (window.TypekitPreview.fonts || (window.TypekitPreview.fonts = []), Q = window.TypekitPreview.fonts);
                    for (var R = 0; R < a.b.length; R++) {
                        for (var lb = !1, Ha = 0; Ha < Q.length; Ha++)
                            if (a.b[R] === Q[Ha]) {
                                lb = !0;
                                break
                            }
                        lb || (n.push(a.b[R]), Q.push(a.b[R]))
                    }
                    n.length && jb(Ba(c, {
                        scheme: "https",
                        hostname: a.A,
                        s: a.u,
                        k: a.w,
                        app: g,
                        ht: a.m,
                        h: b,
                        f: n.join("."),
                        a: a.g,
                        js: a.version,
                        _: (+new Date).toString()
                    }))
                }
            },
            inactive: function() {
                if (e) {
                    var a = La(f, d.g, d.w, !1);
                    A(d.b, a)
                }
            }
        });
        if (this.u) {
            var g = 'hellomind.com';
            if (!this.u.has(g)) {
                console.error('Typekit: the domain "' +
                    g + '" isn\'t in the list of published domains for kit "' + this.D + '".');
                B(c);
                return
            }
        }
        if (f.b.length) {
            g = La(f, this.g, this.w, e);
            A(this.b, g);
            var n = new Ya(this.b, c, a, e);
            ta(d.b, function() {
                $a(n, f, b)
            })
        } else B(c)
    };

    function kb(a, b) {
        this.u = a;
        this.g = b;
        this.b = []
    }
    kb.prototype.m = function(a) {
        this.b.push(a)
    };
    kb.prototype.load = function(a, b) {
        var c = a,
            d = b || {};
        "string" == typeof c ? c = [c] : c && c.length || (d = c || {}, c = []);
        if (c.length)
            for (var e = this, f = c.length, g = 0; g < c.length; g++) mb(this, c[g], function() {
                --f || nb(e, d)
            });
        else nb(this, d)
    };

    function mb(a, b, c) {
        b = Ba(a.u, {
            id: b
        });
        va(a.g, b, c)
    }

    function nb(a, b) {
        if (a.b.length) {
            for (var c = new wa(a.g, b, {}), d = !1, e = 0; e < a.b.length; e++) a.b[e].init(), d = d || a.b[e].supportsConfiguredBrowser();
            if (d)
                for (c.m && y(c.g, [c.b.b("wf", "loading")]), C(c, "loading"), c = 0; c < a.b.length; c++) d = a.b[c], d.supportsConfiguredBrowser() && d.load(null, c == a.b.length - 1, b);
            else B(c);
            a.b = []
        }
    };

    function jb(a) {
        var b = new Image(1, 1),
            c = !1;
        b.src = a;
        b.onload = function() {
            c = !0;
            b.onload = null
        };
        setTimeout(function() {
            c || (b.src = "about:blank", b.onload = null)
        }, 3E3)
    };

    function M(a, b, c, d, e, f, g) {
        this.b = a;
        this.C = b;
        this.H = c;
        this.G = d;
        this.v = e;
        this.o = f;
        this.K = g
    }
    M.prototype.getName = function() {
        return this.b
    };
    var ob = new M("Unknown", new l, "Unknown", new l, "Unknown", new l, void 0);

    function N(a) {
        var b = O(a.b, /(iPod|iPad|iPhone|Android|Windows Phone|BB\d{2}|BlackBerry)/, 1);
        if ("" !== b) return /BB\d{2}/.test(b) && (b = "BlackBerry"), b;
        a = O(a.b, /(Linux|Mac_PowerPC|Macintosh|Windows|CrOS|PlayStation|CrKey)/, 1);
        return "" !== a ? ("Mac_PowerPC" == a ? a = "Macintosh" : "PlayStation" == a && (a = "Linux"), a) : "Unknown"
    }

    function P(a) {
        var b = O(a.b, /(OS X|Windows NT|Android) ([^;)]+)/, 2);
        if (b || (b = O(a.b, /Windows Phone( OS)? ([^;)]+)/, 2)) || (b = O(a.b, /(iPhone )?OS ([\d_]+)/, 2))) return b;
        if (b = O(a.b, /(?:Linux|CrOS|CrKey) ([^;)]+)/, 1))
            for (var b = b.split(/\s/), c = 0; c < b.length; c += 1)
                if (/^[\d\._]+$/.test(b[c])) return b[c];
        return (a = O(a.b, /(BB\d{2}|BlackBerry).*?Version\/([^\s]*)/, 2)) ? a : "Unknown"
    }

    function pb() {
        var a = S,
            b = "Unknown",
            c = t(O(a.b, /Presto\/([\d\w\.]+)/, 1)),
            d = t(P(a)),
            e = T(a.g);
        null !== c.b ? b = "Presto" : (-1 != a.b.indexOf("Gecko") && (b = "Gecko"), c = t(O(a.b, /rv:([^\)]+)/, 1)));
        if (-1 != a.b.indexOf("Opera Mini/")) {
            var f = t(O(a.b, /Opera Mini\/([\d\.]+)/, 1));
            return new M("OperaMini", f, b, c, N(a), d, e)
        }
        if (-1 != a.b.indexOf("Version/") && (f = t(O(a.b, /Version\/([\d\.]+)/, 1)), null !== f.b)) return new M("Opera", f, b, c, N(a), d, e);
        f = t(O(a.b, /Opera[\/ ]([\d\.]+)/, 1));
        return null !== f.b ? new M("Opera", f, b, c, N(a), d, e) : new M("Opera",
            new l, b, c, N(a), d, e)
    }

    function qb() {
        var a = S,
            b = N(a),
            c = t(P(a)),
            d = t(O(a.b, /AppleWeb(?:K|k)it\/([\d\.\+]+)/, 1)),
            e = "Unknown",
            f;
        f = "Unknown";
        /OPR\/[\d.]+/.test(a.b) ? e = "Opera" : -1 != a.b.indexOf("Chrome") || -1 != a.b.indexOf("CrMo") || -1 != a.b.indexOf("CriOS") ? e = "Chrome" : /Silk\/\d/.test(a.b) ? e = "Silk" : "BlackBerry" == b || "Android" == b ? e = "BuiltinBrowser" : -1 != a.b.indexOf("PhantomJS") ? e = "PhantomJS" : -1 != a.b.indexOf("Safari") ? e = "Safari" : -1 != a.b.indexOf("AdobeAIR") ? e = "AdobeAIR" : -1 != a.b.indexOf("PlayStation") && (e = "BuiltinBrowser");
        "BuiltinBrowser" ==
        e ? f = "Unknown" : "Silk" == e ? f = O(a.b, /Silk\/([\d\._]+)/, 1) : "Chrome" == e ? f = O(a.b, /(Chrome|CrMo|CriOS)\/([\d\.]+)/, 2) : -1 != a.b.indexOf("Version/") ? f = O(a.b, /Version\/([\d\.\w]+)/, 1) : "AdobeAIR" == e ? f = O(a.b, /AdobeAIR\/([\d\.]+)/, 1) : "Opera" == e ? f = O(a.b, /OPR\/([\d.]+)/, 1) : "PhantomJS" == e && (f = O(a.b, /PhantomJS\/([\d.]+)/, 1));
        f = t(f);
        return new M(e, f, "AppleWebKit", d, b, c, T(a.g))
    }

    function O(a, b, c) {
        return (a = a.match(b)) && a[c] ? a[c] : ""
    }

    function T(a) {
        if (a.documentMode) return a.documentMode
    };
    var rb, S = new function() {
            var a = document;
            this.b = navigator.userAgent;
            this.g = a
        },
        sb;
    if (-1 != S.b.indexOf("MSIE") || -1 != S.b.indexOf("Trident/")) {
        var U = S,
            tb = N(U),
            ub = t(P(U)),
            vb, wb, xb, yb = O(U.b, /Trident\/([\d\w\.]+)/, 1),
            zb = T(U.g);
        vb = -1 != U.b.indexOf("MSIE") ? t(O(U.b, /MSIE ([\d\w\.]+)/, 1)) : t(O(U.b, /rv:([\d\w\.]+)/, 1));
        "" !== yb ? (wb = "Trident", xb = t(yb)) : (wb = "Unknown", xb = new l);
        sb = new M("MSIE", vb, wb, xb, tb, ub, zb)
    } else {
        var Ab;
        if (-1 != S.b.indexOf("Edge/")) {
            var Bb = S,
                Cb = N(Bb),
                Db = t(P(Bb)),
                Eb = t(O(Bb.b, /Edge\/([\d\w\.]+)/, 1));
            Ab = new M("Edge", Eb, "Edge", Eb, Cb, Db, T(Bb.g))
        } else {
            var Fb;
            if (-1 != S.b.indexOf("Opera")) Fb =
                pb();
            else {
                var Gb;
                if (/OPR\/[\d.]+/.test(S.b)) Gb = qb();
                else {
                    var Hb;
                    if (/AppleWeb(K|k)it/.test(S.b)) Hb = qb();
                    else {
                        var Ib;
                        if (-1 != S.b.indexOf("Gecko")) {
                            var V = S,
                                Jb = "Unknown",
                                Kb = new l,
                                Lb = t(P(V)); - 1 != V.b.indexOf("Firefox") ? (Jb = "Firefox", Kb = t(O(V.b, /Firefox\/([\d\w\.]+)/, 1))) : -1 != V.b.indexOf("Mozilla") && (Jb = "Mozilla");
                            var Mb = t(O(V.b, /rv:([^\)]+)/, 1));
                            Ib = new M(Jb, Kb, "Gecko", Mb, N(V), Lb, T(V.g))
                        } else Ib = ob;
                        Hb = Ib
                    }
                    Gb = Hb
                }
                Fb = Gb
            }
            Ab = Fb
        }
        sb = Ab
    }
    rb = sb;
    var Nb = new function() {
        var a = window;
        this.g = this.m = a;
        this.b = this.g.document
    };
    window.Typekit || (window.Typekit = {});
    if (!window.Typekit.load) {
        var Ob = new kb(new Aa("//" + (window.Typekit.config || {}).hn + "/{id}.js"), Nb);
        window.Typekit.load = function() {
            Ob.load.apply(Ob, arguments)
        };
        window.Typekit.addKit = function() {
            Ob.m.apply(Ob, arguments)
        }
    }
    var W, X, u = window.Typekit.config || {};
    X = new ib(Nb, u.hn);
    X.F = new function() {
        var a = u.ps,
            b = u.ht,
            c = u.fi,
            d = u.a,
            e = u.kt,
            f = u.js,
            g = u.l;
        this.A = u.p;
        this.u = a;
        this.m = b;
        this.b = c || [];
        this.g = d || null;
        this.w = e || null;
        this.version = f || null;
        this.app = g || null
    };
    W = new ja;
    W.P = !u.si;
    W.O = !u.st;
    W.J = !u.sa;
    W.R = !u.sw;
    W.N = !u.sb;
    X.A = W;
    if (u.fc)
        for (var Pb = u.fc, Y = 0; Y < Pb.length; Y++) X.B.b.push(new xa(Pb[Y].family, Pb[Y].src, Pb[Y].descriptors));
    if (u.dl) {
        var Qb = u.dl;
        try {
            X.u = new qa(Qb)
        } catch (a) {}
    }
    u.kt && (X.D = u.kt);
    if (u.c)
        for (var v = 0; v < u.c.length; v += 2) X.m.push(new la);
    X.I = rb;
    var Rb;
    a: {
        var Sb = X.I,
            Tb = new ja,
            Ub = X.A || Tb,
            Vb;
        for (Vb in za) {
            var Z = za[Vb];
            if (hb[Z] && hb[Z](Sb, Ub)) {
                Rb = Z;
                break a
            }
        }
        for (Vb in za)
            if (Z = za[Vb], hb[Z] && hb[Z](Sb, Tb)) {
                Rb = "x";
                break a
            }
        Rb = "k"
    }
    X.g = Rb;
    window.Typekit.addKit(X);
    if (1 === Math.round(30 * Math.random())) {
        var Wb = window.Typekit.load,
            Xb = [];
        window.Typekit.load = function(a) {
            a = a || {};
            var b = a.active || function() {},
                c = a.fontactive || function() {},
                d = (new Date).getTime();
            a.active = function() {
                b();
                var a = JSON.stringify({
                    fonts: Xb,
                    augmentations: [],
                    font_loading: window.FontFace ? "native" : "non-native",
                    active_duration: (new Date).getTime() - d,
                    javascript_version: u.js,
                    kit_type: "configurable"
                });
                if (!window.XDomainRequest) {
                    var c = new XMLHttpRequest;
                    c.open("POST", "https://performance.typekit.net/");
                    c.send(a)
                }
            };
            a.fontactive = function(a, b) {
                var g, n;
                c(a, b);
                a: {
                    g = b.charAt(0);n = b.charAt(1);
                    /[1-9]/.test(n) || (n = 4);g = "i" === g ? "italic" : "o" === g ? "oblique" : "normal";n += "00";
                    for (var z = u.fc, L = 0; L < z.length; L++)
                        if (z[L].family === a && z[L].descriptors.weight === n && z[L].descriptors.style === g) {
                            g = z[L].id;
                            break a
                        }
                    g = 0
                }
                Xb.push({
                    id: g,
                    duration: (new Date).getTime() - d,
                    dynamic: !1
                })
            };
            Wb(a)
        }
    }
    if (window.WebFont) try {
        window.Typekit.load()
    } catch (a) {};
}(this, document));