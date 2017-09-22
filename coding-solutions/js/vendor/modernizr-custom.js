/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-csspointerevents-cssvhunit-forcetouch-touchevents-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function o(){var e,n,t,o,i,s,a;for(var u in g)if(g.hasOwnProperty(u)){if(e=[],n=g[u],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(o=r(n.fn,"function")?n.fn():n.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?Modernizr[a[0]]=o:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=o),y.push((o?"":"no-")+a.join("-"))}}function i(e){var n=_.className,t=Modernizr._config.classPrefix||"";if(S&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),S?_.className.baseVal=n:_.className=n)}function s(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):S?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function a(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function u(){var e=n.body;return e||(e=s(S?"svg":"body"),e.fake=!0),e}function f(e,t,r,o){var i,a,f,l,c="modernizr",p=s("div"),d=u();if(parseInt(r,10))for(;r--;)f=s("div"),f.id=o?o[r]:c+(r+1),p.appendChild(f);return i=s("style"),i.type="text/css",i.id="s"+c,(d.fake?d:p).appendChild(i),d.appendChild(p),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(n.createTextNode(e)),p.id=c,d.fake&&(d.style.background="",d.style.overflow="hidden",l=_.style.overflow,_.style.overflow="hidden",_.appendChild(d)),a=t(p,e),d.fake?(d.parentNode.removeChild(d),_.style.overflow=l,_.offsetHeight):p.parentNode.removeChild(p),!!a}function l(e,n){return!!~(""+e).indexOf(n)}function c(e,n){return function(){return e.apply(n,arguments)}}function p(e,n,t){var o;for(var i in e)if(e[i]in n)return t===!1?e[i]:(o=n[e[i]],r(o,"function")?c(o,t||n):o);return!1}function d(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function v(n,r){var o=n.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(d(n[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+d(n[o])+":"+r+")");return i=i.join(" or "),f("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function m(e,n,o,i){function u(){c&&(delete A.style,delete A.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var f=v(e,o);if(!r(f,"undefined"))return f}for(var c,p,d,m,h,y=["modernizr","tspan","samp"];!A.style&&y.length;)c=!0,A.modElem=s(y.shift()),A.style=A.modElem.style;for(d=e.length,p=0;d>p;p++)if(m=e[p],h=A.style[m],l(m,"-")&&(m=a(m)),A.style[m]!==t){if(i||r(o,"undefined"))return u(),"pfx"==n?m:!0;try{A.style[m]=o}catch(g){}if(A.style[m]!=h)return u(),"pfx"==n?m:!0}return u(),!1}function h(e,n,t,o,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+T.join(s+" ")+s).split(" ");return r(n,"string")||r(n,"undefined")?m(a,n,o,i):(a=(e+" "+O.join(s+" ")+s).split(" "),p(a,n,t))}var y=[],g=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){g.push({name:e,fn:n,options:t})},addAsyncTest:function(e){g.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var _=n.documentElement,S="svg"===_.nodeName.toLowerCase(),E=C._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];C._prefixes=E,Modernizr.addTest("csspointerevents",function(){var e=s("a").style;return e.cssText="pointer-events:auto","auto"===e.pointerEvents});var w=function(){function e(e,n){var o;return e?(n&&"string"!=typeof n||(n=s(n||"div")),e="on"+e,o=e in n,!o&&r&&(n.setAttribute||(n=s("div")),n.setAttribute(e,""),o="function"==typeof n[e],n[e]!==t&&(n[e]=t),n.removeAttribute(e)),o):!1}var r=!("onblur"in n.documentElement);return e}();C.hasEvent=w;var x=C.testStyles=f;Modernizr.addTest("touchevents",function(){var t;if("ontouchstart"in e||e.DocumentTouch&&n instanceof DocumentTouch)t=!0;else{var r=["@media (",E.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");x(r,function(e){t=9===e.offsetTop})}return t}),x("#modernizr { height: 50vh; }",function(n){var t=parseInt(e.innerHeight/2,10),r=parseInt((e.getComputedStyle?getComputedStyle(n,null):n.currentStyle).height,10);Modernizr.addTest("cssvhunit",r==t)});var b="Moz O ms Webkit",T=C._config.usePrefixes?b.split(" "):[];C._cssomPrefixes=T;var z=function(n){var r,o=E.length,i=e.CSSRule;if("undefined"==typeof i)return t;if(!n)return!1;if(n=n.replace(/^@/,""),r=n.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+n;for(var s=0;o>s;s++){var a=E[s],u=a.toUpperCase()+"_"+r;if(u in i)return"@-"+a.toLowerCase()+"-"+n}return!1};C.atRule=z;var O=C._config.usePrefixes?b.toLowerCase().split(" "):[];C._domPrefixes=O;var N={elem:s("modernizr")};Modernizr._q.push(function(){delete N.elem});var A={style:N.elem.style};Modernizr._q.unshift(function(){delete A.style}),C.testAllProps=h;var P=C.prefixed=function(e,n,t){return 0===e.indexOf("@")?z(e):(-1!=e.indexOf("-")&&(e=a(e)),n?h(e,n,t):h(e,"pfx"))};Modernizr.addTest("forcetouch",function(){return w(P("mouseforcewillbegin",e,!1),e)?MouseEvent.WEBKIT_FORCE_AT_MOUSE_DOWN&&MouseEvent.WEBKIT_FORCE_AT_FORCE_MOUSE_DOWN:!1}),o(),i(y),delete C.addTest,delete C.addAsyncTest;for(var j=0;j<Modernizr._q.length;j++)Modernizr._q[j]();e.Modernizr=Modernizr}(window,document);