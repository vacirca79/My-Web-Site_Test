window.wp=window.wp||{},window.wp.blockSerializationDefaultParser=function(t){var n={};function r(e){if(n[e])return n[e].exports;var o=n[e]={i:e,l:!1,exports:{}};return t[e].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=t,r.c=n,r.d=function(t,n,e){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,n){if(1&n&&(t=r(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)r.d(e,o,function(n){return t[n]}.bind(null,o));return e},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="",r(r.s=416)}({25:function(t,n,r){"use strict";function e(t,n){(null==n||n>t.length)&&(n=t.length);for(var r=0,e=new Array(n);r<n;r++)e[r]=t[r];return e}r.d(n,"a",(function(){return e}))},30:function(t,n,r){"use strict";r.d(n,"a",(function(){return o}));var e=r(25);function o(t,n){if(t){if("string"==typeof t)return Object(e.a)(t,n);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?Object(e.a)(t,n):void 0}}},39:function(t,n,r){"use strict";function e(t){if(Array.isArray(t))return t}r.d(n,"a",(function(){return e}))},40:function(t,n,r){"use strict";function e(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}r.d(n,"a",(function(){return e}))},416:function(t,n,r){"use strict";r.r(n),r.d(n,"parse",(function(){return s}));var e,o,u,i,c=r(9),a=/<!--\s+(\/)?wp:([a-z][a-z0-9_-]*\/)?([a-z][a-z0-9_-]*)\s+({(?:(?=([^}]+|}+(?=})|(?!}\s+\/?-->)[^])*)\5|[^]*?)}\s+)?(\/)?-->/g;function l(t,n,r,e,o){return{blockName:t,attrs:n,innerBlocks:r,innerHTML:e,innerContent:o}}function f(t){return l(null,{},[],t,[t])}var s=function(t){e=t,o=0,u=[],i=[],a.lastIndex=0;do{}while(p());return u};function p(){var t=function(){var t=a.exec(e);if(null===t)return["no-more-tokens"];var n=t.index,r=Object(c.a)(t,7),o=r[0],u=r[1],i=r[2],l=r[3],f=r[4],s=r[6],p=o.length,b=!!u,d=!!s,v=(i||"core/")+l,h=!!f?function(t){try{return JSON.parse(t)}catch(t){return null}}(f):{};return d?["void-block",v,h,n,p]:b?["block-closer",v,null,n,p]:["block-opener",v,h,n,p]}(),n=Object(c.a)(t,5),r=n[0],s=n[1],p=n[2],h=n[3],y=n[4],k=i.length,O=h>o?o:null;switch(r){case"no-more-tokens":if(0===k)return b(),!1;if(1===k)return v(),!1;for(;0<i.length;)v();return!1;case"void-block":return 0===k?(null!==O&&u.push(f(e.substr(O,h-O))),u.push(l(s,p,[],"",[])),o=h+y,!0):(d(l(s,p,[],"",[]),h,y),o=h+y,!0);case"block-opener":return i.push(function(t,n,r,e,o){return{block:t,tokenStart:n,tokenLength:r,prevOffset:e||n+r,leadingHtmlStart:o}}(l(s,p,[],"",[]),h,y,h+y,O)),o=h+y,!0;case"block-closer":if(0===k)return b(),!1;if(1===k)return v(h),o=h+y,!0;var g=i.pop(),m=e.substr(g.prevOffset,h-g.prevOffset);return g.block.innerHTML+=m,g.block.innerContent.push(m),g.prevOffset=h+y,d(g.block,g.tokenStart,g.tokenLength,h+y),o=h+y,!0;default:return b(),!1}}function b(t){var n=t||e.length-o;0!==n&&u.push(f(e.substr(o,n)))}function d(t,n,r,o){var u=i[i.length-1];u.block.innerBlocks.push(t);var c=e.substr(u.prevOffset,n-u.prevOffset);c&&(u.block.innerHTML+=c,u.block.innerContent.push(c)),u.block.innerContent.push(null),u.prevOffset=o||n+r}function v(t){var n=i.pop(),r=n.block,o=n.leadingHtmlStart,c=n.prevOffset,a=n.tokenStart,l=t?e.substr(c,t-c):e.substr(c);l&&(r.innerHTML+=l,r.innerContent.push(l)),null!==o&&u.push(f(e.substr(o,a-o))),u.push(r)}},9:function(t,n,r){"use strict";r.d(n,"a",(function(){return i}));var e=r(39),o=r(30),u=r(40);function i(t,n){return Object(e.a)(t)||function(t,n){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t)){var r=[],_n=!0,e=!1,o=void 0;try{for(var u,i=t[Symbol.iterator]();!(_n=(u=i.next()).done)&&(r.push(u.value),!n||r.length!==n);_n=!0);}catch(t){e=!0,o=t}finally{try{_n||null==i.return||i.return()}finally{if(e)throw o}}return r}}(t,n)||Object(o.a)(t,n)||Object(u.a)()}}});