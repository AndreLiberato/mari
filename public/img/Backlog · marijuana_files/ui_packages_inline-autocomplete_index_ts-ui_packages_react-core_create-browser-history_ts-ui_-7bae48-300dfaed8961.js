"use strict";(globalThis.webpackChunk=globalThis.webpackChunk||[]).push([["ui_packages_inline-autocomplete_index_ts-ui_packages_react-core_create-browser-history_ts-ui_-7bae48"],{34232:(e,t,r)=>{r.d(t,{n:()=>i});var n=r(85893),o=r(67294),a=r(87487);function i({children:e,appName:t,category:r,metadata:i}){let l=(0,o.useMemo)(()=>({appName:t,category:r,metadata:i}),[t,r,i]);return(0,n.jsx)(a.f.Provider,{value:l,children:e})}try{i.displayName||(i.displayName="AnalyticsProvider")}catch{}},87487:(e,t,r)=>{r.d(t,{f:()=>o});var n=r(67294);let o=(0,n.createContext)(null)},39762:(e,t,r)=>{r.d(t,{F:()=>L});var n=r(85893),o=r(67294);let a=(e,t,r)=>{let n=t[1]-t[0];return e<t[0]?e:e<t[1]?t[0]+r:e+(r-n)},i=(e,t)=>({...e,nativeEvent:e,target:t,currentTarget:t,preventDefault:()=>e.preventDefault(),isDefaultPrevented:()=>e.defaultPrevented,isPropagationStopped:()=>!1,persist:()=>({})}),l=({inputRef:e,fallbackEventHandler:t})=>(0,o.useCallback)((r,n,o)=>{let l=e.current;if(!l)return;l.focus();let s=n??[l.selectionStart??l.value.length,l.selectionEnd??l.value.length],c=void 0===o?a(l.selectionStart??l.value.length,s,r.length):Array.isArray(o)?o[0]:o,d=Array.isArray(o)?o[1]:c,u=!1;try{if(document.activeElement!==l)throw Error("Input must be focused to use execCommand");l.setSelectionRange(s[0],s[1]),u=""===r?document.execCommand("delete",!1):document.execCommand("insertText",!1,r),l.setSelectionRange(c,d)}catch(e){u=!1}if(!u){let n=l.value.slice(0,s[0])+r+l.value.slice(s[1]),o=new InputEvent("input",{bubbles:!1});e.current.value=n,e.current.setSelectionRange(c,d),e.current.dispatchEvent(o),t(i(o,e.current))}},[e,t]);var s=r(17626);let c=new Set([" ","\n"]),d=new Set([".","\n"]),u=e=>/\s/.test(e),p=(e,t,r)=>{for(let n=r-1,o="",a=e;n>=0&&a.length>0;n--){let e=t[n]??"";for(let r of(c.has(e)&&(a=a.filter(e=>e.multiWord)),d.has(e)&&(a=a.filter(e=>!e.multiWord)),a.filter(t=>e===t.triggerChar))){let e=t[n-1],i=t[0];if((!e||u(e))&&i&&!u(i))return{trigger:r,query:o};a=a.filter(e=>e!==r)}o=e+o}return null},h=e=>"string"==typeof e?e:e.value,f=e=>"string"==typeof e?e:e.key??e.value,m=(...e)=>t=>{for(let r of[...e].reverse())t.isDefaultPrevented()||r?.(t)};var g=r(26408),y=r(31171),v=r(42483),b=r(41905),x=r(10160);let C=({isOpen:e,listElement:t,inputElement:r,onCommit:n,options:a,tabInsertsSuggestions:i=!1,defaultFirstOption:l=!1})=>{let s=(0,o.useId)(),c=`combobox-${s}__option`,d=(0,o.useRef)(e),[u,p]=(0,o.useState)(null),h=(0,o.useCallback)(()=>[...t?.querySelectorAll("[role=option]")??[]],[t]),f=(0,o.useCallback)(e=>{let t=e.target.getAttribute("data-combobox-list-index"),r=null!==t?parseInt(t,10):NaN,o=a[r];o&&n({nativeEvent:e,option:o})},[a,n]),m=(0,o.useCallback)(e=>e.preventDefault(),[]);(0,o.useEffect)(function(){if(r&&t){t.getAttribute("role")||t.setAttribute("role","listbox");let e=new x.Z(r,t,{tabInsertsSuggestions:i,defaultFirstOption:l});return p(e),()=>{e.destroy(),p(null)}}},[r,t,i,l]),(0,o.useEffect)(function(){let t=d.current;d.current=e&&null!==u,e!==t&&u&&(e?u.start():u.stop())},[e,u]),(0,o.useEffect)(function(){return t?.addEventListener("combobox-commit",f),()=>t?.removeEventListener("combobox-commit",f)},[f,t]),(0,o.useLayoutEffect)(()=>{let e=h();for(let[t,r]of e.entries())(!r.id||r.id.startsWith(c))&&(r.id=`${c}-${t}`),r.setAttribute("data-combobox-list-index",t.toString()),r.addEventListener("mousedown",m),r.removeAttribute("data-combobox-option-default");return u?.clearSelection(),()=>{for(let t of e)t.removeEventListener("mousedown",m)}},[h,c,a,u,m])};var S=r(74121),N=r(52516),T=r(8677),E=r(69848);let w=()=>(0,n.jsx)(v.Z,{sx:{display:"flex",justifyContent:"center",py:2},children:(0,n.jsx)(S.Z,{size:"small"})}),j=({suggestion:e})=>{let t=h(e),r={id:t,children:t,role:"option",sx:{"&[aria-selected]":{backgroundColor:"actionListItem.default.activeBg"},"&[data-combobox-option-default]:not([aria-selected])":{backgroundColor:"actionListItem.default.selectedBg"}}};return"string"==typeof e?(0,n.jsx)(N.S.Item,{...r}):e.render(r)},I=({suggestions:e,portalName:t,triggerCharCoords:r,onClose:a,onCommit:i,inputRef:l,visible:s,tabInsertsSuggestions:c,defaultPlacement:d})=>{let u=(0,o.useRef)(null),[p,m]=(0,o.useState)(null),g=(0,o.useCallback)(({option:e})=>{i(h(e))},[i]);C({isOpen:s&&"loading"!==e,listElement:p,inputElement:l.current,onCommit:g,options:Array.isArray(e)?e:[],tabInsertsSuggestions:c,defaultFirstOption:!0});let[y,v]=(0,o.useState)(0);return(0,E.Z)(function(){let e=u.current?.offsetHeight??0,t=r.top+r.height,n=t+e>window.innerHeight,o=r.top-e,a=o<0,i={below:n&&!a?o:t,above:a&&!n?t:o}[d],l=Number.isNaN(i)?0:i;v(l)},[r.top,r.height,e,s,d]),s?(0,n.jsx)(T.Z,{onEscape:a,onClickOutside:a,returnFocusRef:l,preventFocusOnOpen:!0,portalContainerName:t,sx:{position:"fixed"},top:y,left:r.left,ref:u,children:(0,n.jsx)(N.S,{ref:m,children:"loading"===e?(0,n.jsx)(w,{}):e?.map(e=>n.jsx(j,{suggestion:e},f(e)))})}):(0,n.jsx)(n.Fragment,{})};I.displayName="SuggestionList";try{w.displayName||(w.displayName="LoadingIndicator")}catch{}try{j.displayName||(j.displayName="SuggestionListItem")}catch{}let R=e=>{try{return e.selectionStart}catch(e){if(e instanceof TypeError)return null;throw e}},k=()=>{},L=({triggers:e,suggestions:t,onShowSuggestions:r,onHideSuggestions:a,onSelectSuggestion:i,sx:c,children:d,tabInsertsSuggestions:u=!1,suggestionsPlacement:f="below",...x})=>{let C=(0,g.op)(x),S=(0,o.useRef)(null);(0,y.z)(d.ref??k,S);let N=function(e,t){if(o.Children.only(e),t.current&&!(t.current instanceof HTMLInputElement)&&!(t.current instanceof HTMLTextAreaElement))throw TypeError("AutocompleteTextarea child must be a component that forwards a ref and props to an <input> or <textarea> element.");return e}(d,S),T=l({inputRef:S,fallbackEventHandler:N.props.onChange??k}),E=(0,o.useRef)(null),w=null!==t&&t.length>0,j=S.current&&E.current&&w?(0,s.ab)(S.current,(R(S.current)??0)-E.current.query.length):{top:0,left:0,height:0},L=(0,o.cloneElement)(N,{...C,onBlur:m(N.props.onBlur,()=>{a()}),onKeyDown:m(N.props.onKeyDown,e=>{w&&"Escape"===e.key&&(a(),e.stopPropagation())}),onChange:m(N.props.onChange,t=>{let n=R(t.currentTarget);if(null===n){a();return}E.current=p(e,t.currentTarget.value,n),E.current?r(E.current):a()}),ref:S}),P=w?"loading"===t?"Loading autocomplete suggestions\u2026":`${t.length} autocomplete ${1===t.length?"suggestion":"suggestions"} available; "${h(t[0])}" is highlighted. Press ${u?"Enter or Tab":"Enter"} to insert.`:"";return(0,n.jsxs)(v.Z,{sx:{display:"inline-block","& > *":{width:"100%"},...c,position:"relative"},children:[L,(0,n.jsx)(I,{suggestions:t,inputRef:S,onCommit:e=>{if(!S.current||!E.current)return;let{query:t,trigger:r}=E.current;i?.({suggestion:e,trigger:r,query:t});let n=R(S.current)??0,o=t.length+r.triggerChar.length,l=n-o,s=r.keepTriggerCharOnCommit??!0,c=s?r.triggerChar:"",d=`${c}${e} `;T(d,[l,l+o]),a()},onClose:a,triggerCharCoords:j,visible:w,tabInsertsSuggestions:u,defaultPlacement:f}),(0,n.jsx)(b.h,{children:(0,n.jsx)("span",{"aria-live":"assertive","aria-atomic":!0,style:{clipPath:"circle(0)",position:"absolute"},children:P})})]})};try{L.displayName||(L.displayName="InlineAutocomplete")}catch{}},17626:(e,t,r)=>{r.d(t,{Qr:()=>o,ab:()=>i});let n=["direction","boxSizing","width","height","overflowX","overflowY","borderTopWidth","borderRightWidth","borderBottomWidth","borderLeftWidth","borderStyle","paddingTop","paddingRight","paddingBottom","paddingLeft","fontStyle","fontVariant","fontWeight","fontStretch","fontSize","fontSizeAdjust","lineHeight","fontFamily","textAlign","textTransform","textIndent","textDecoration","letterSpacing","wordSpacing","tabSize","MozTabSize"];function o(e,t){let r="mozInnerScreenX"in window,o=document.createElement("div");o.id="input-textarea-caret-position-mirror-div",document.body.appendChild(o);let a=o.style,i=window.getComputedStyle(e),l=isNaN(parseInt(i.lineHeight))?1.2*parseInt(i.fontSize):parseInt(i.lineHeight),s=e instanceof HTMLInputElement;for(let t of(a.whiteSpace=s?"nowrap":"pre-wrap",a.wordWrap=s?"":"break-word",a.position="absolute",n))if(s&&"lineHeight"===t){if("border-box"===i.boxSizing){let e=parseInt(i.height),t=parseInt(i.paddingTop)+parseInt(i.paddingBottom)+parseInt(i.borderTopWidth)+parseInt(i.borderBottomWidth),r=t+l;e>r?a.lineHeight=`${e-t}px`:e===r?a.lineHeight=i.lineHeight:a.lineHeight="0"}else a.lineHeight=i.height}else if(s||"width"!==t||"border-box"!==i.boxSizing)a[t]=i[t];else{let t=parseFloat(i.borderLeftWidth)+parseFloat(i.borderRightWidth),n=r?parseFloat(i.width)-t:e.clientWidth+t;a.width=`${n}px`}r?e.scrollHeight>parseInt(i.height)&&(a.overflowY="scroll"):a.overflow="hidden",o.textContent=e.value.substring(0,t),s&&(o.textContent=o.textContent.replace(/\s/g,"\xa0"));let c=document.createElement("span");c.textContent=s?".":e.value.substring(t)||".",o.appendChild(c);let d={top:c.offsetTop+parseInt(i.borderTopWidth),left:c.offsetLeft+parseInt(i.borderLeftWidth),height:l};return document.body.removeChild(o),d}let a=(e,t)=>{let{height:r,top:n,left:a}=o(e,t);return{height:r,top:n-e.scrollTop,left:a-e.scrollLeft}},i=(e,t)=>{let{top:r,left:n,height:o}=a(e,t),{top:i,left:l}=e.getBoundingClientRect();return{height:o,top:i+r,left:l+n}}},65722:(e,t,r)=>{r.d(t,{Z:()=>n});let n=()=>void 0},45055:(e,t,r)=>{r.d(t,{I:()=>o});var n=r(67294);let o=(0,n.createContext)(null)},59112:(e,t,r)=>{r.d(t,{l:()=>o});var n=r(12599);function o(e={}){let t;let r=(0,n.lX)({...e,v5Compat:!0}),o=[],a=!1;function i(e){if(o.length>0)for(let t of o)t({retry(){e()}});else e()}return r.listen(e=>{if(a){a=!1;return}if(e.action===n.aU.Pop&&o.length&&null!==e.delta&&o.length>0){let t=e.delta;for(let e of(a=!0,r.go(-1*t),o))e({retry(){r.go(t)}})}else t?.(e)}),{get action(){return r.action},get location(){return r.location},createHref:e=>r.createHref(e),createURL:e=>r.createURL(e),encodeLocation:e=>r.encodeLocation(e),push(e,t){i(()=>r.push(e,t))},replace(e,t){i(()=>r.replace(e,t))},go(e){i(()=>r.go(e))},listen(e){if(t)throw Error("A history only accepts one active listener");return t=e,()=>{t=void 0}},block:e=>(o.push(e),()=>{o=o.filter(t=>t!==e)})}}},51145:(e,t,r)=>{r.d(t,{Z:()=>s});var n=r(44544);let{getItem:o,setItem:a,removeItem:i}=(0,n.Z)("localStorage"),l="REACT_PROFILING_ENABLED",s={enable:()=>a(l,"true"),disable:()=>i(l),isEnabled:()=>!!o(l)}},87634:(e,t,r)=>{r.d(t,{sS:()=>f,F1:()=>g,V6:()=>m});var n=r(85893),o=r(85529),a=r(70697),i=r(41905),l=r(67294);let s={info:"",success:"Toast--success",error:"Toast--error"},c={info:(0,n.jsx)(o.InfoIcon,{}),success:(0,n.jsx)(o.CheckIcon,{}),error:(0,n.jsx)(o.StopIcon,{})},d=({message:e,timeToLive:t,icon:r,type:o="info",role:d="log"})=>{let[u,p]=l.useState(!0),{safeSetTimeout:h}=(0,a.Z)();return(0,l.useEffect)(()=>{t&&h(()=>p(!1),t-300)},[h,t]),(0,n.jsx)(i.h,{children:(0,n.jsx)("div",{className:"p-1 position-fixed bottom-0 left-0 mb-3 ml-3",children:(0,n.jsxs)("div",{className:`Toast ${s[o]} ${u?"Toast--animateIn":"Toast--animateOut"}`,id:"ui-app-toast","data-testid":`ui-app-toast-${o}`,role:d,children:[(0,n.jsx)("span",{className:"Toast-icon",children:r||c[o]}),(0,n.jsx)("span",{className:"Toast-content",children:e})]})})})};try{d.displayName||(d.displayName="Toast")}catch{}var u=r(65722);let p=(0,l.createContext)({addToast:u.Z,addPersistedToast:u.Z,clearPersistedToast:u.Z}),h=(0,l.createContext)({toasts:[],persistedToast:null});function f({children:e}){let[t,r]=(0,l.useState)([]),[o,i]=(0,l.useState)(null),{safeSetTimeout:s}=(0,a.Z)(),c=(0,l.useCallback)(function(e){r([...t,e]),s(()=>r(t.slice(1)),5e3)},[t,s]),d=(0,l.useCallback)(function(e){i(e)},[i]),u=(0,l.useCallback)(function(){i(null)},[i]),f=(0,l.useMemo)(()=>({addToast:c,addPersistedToast:d,clearPersistedToast:u}),[d,c,u]),m=(0,l.useMemo)(()=>({toasts:t,persistedToast:o}),[t,o]);return(0,n.jsx)(p.Provider,{value:f,children:(0,n.jsx)(h.Provider,{value:m,children:e})})}function m(){return(0,l.useContext)(p)}try{p.displayName||(p.displayName="ToastContext")}catch{}try{h.displayName||(h.displayName="InternalToastsContext")}catch{}try{f.displayName||(f.displayName="ToastContextProvider")}catch{}function g(){let{toasts:e,persistedToast:t}=(0,l.useContext)(h);return(0,n.jsxs)(n.Fragment,{children:[e.map((e,t)=>(0,n.jsx)(d,{message:e.message,icon:e.icon,timeToLive:5e3,type:e.type,role:e.role},t)),t&&(0,n.jsx)(d,{message:t.message,icon:t.icon,type:t.type,role:t.role})]})}try{g.displayName||(g.displayName="Toasts")}catch{}},78249:(e,t,r)=>{r.d(t,{g:()=>a});var n=r(67294),o=r(86283);function a(e,t){o.Qg&&(0,n.useLayoutEffect)(e,t)}},58989:(e,t,r)=>{r.d(t,{i:()=>i});var n=r(85893),o=r(67294),a=r(45055);function i({routes:e,history:t,children:r}){let i=(0,o.useMemo)(()=>({routes:e,history:t}),[e,t]);return(0,n.jsx)(a.I.Provider,{value:i,children:r})}try{i.displayName||(i.displayName="AppContextProvider")}catch{}},1343:(e,t,r)=>{let n;r.d(t,{R:()=>f});var o=r(85893),a=r(98224),i=r(8386),l=r(67294);let s=globalThis.document;function c(e){let t=e.colorMode;return{colorMode:function(e){switch(e){case"light":return"day";case"dark":return"night";default:return"auto"}}(t),dayScheme:e.lightTheme,nightScheme:e.darkTheme}}let d=s?function(){let{documentElement:e}=s,[t,r]=(0,l.useState)(()=>c(e.dataset));return(0,l.useEffect)(()=>{let t=new MutationObserver(()=>r(c(e.dataset)));return t.observe(e,{attributes:!0,attributeFilter:["data-color-mode","data-light-theme","data-dark-theme"]}),()=>t.disconnect()},[e]),t}:function(){return c(n||{})};var u=r(87634),p=r(34232);let h={};function f({appName:e,children:t,wasServerRendered:r}){let{colorMode:n,dayScheme:l,nightScheme:s}=d();return(0,o.jsx)(a.DJ,{wasServerRendered:r,children:(0,o.jsx)(p.n,{appName:e,category:"",metadata:h,children:(0,o.jsx)(i.ZP,{colorMode:n,dayScheme:l,nightScheme:s,preventSSRMismatch:!0,children:(0,o.jsx)(u.sS,{children:t})})})})}try{f.displayName||(f.displayName="BaseProviders")}catch{}},77617:(e,t,r)=>{r.d(t,{P:()=>l});var n=r(85893),o=r(87634),a=r(67294);function i(){let{addToast:e}=(0,o.V6)();return(0,a.useEffect)(()=>{e({type:"error",message:"SSR failed, see console for error details"})},[]),null}try{i.displayName||(i.displayName="SSRErrorToast")}catch{}function l({ssrError:e}){return(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(o.F1,{}),e&&(0,n.jsx)(i,{})]})}try{l.displayName||(l.displayName="CommonElements")}catch{}},98224:(e,t,r)=>{r.d(t,{DJ:()=>c,i$:()=>n,kb:()=>s});var n,o=r(85893),a=r(67294),i=r(86283),l=r(78249);!function(e){e.ServerRender="ServerRender",e.ClientHydrate="ClientHydrate",e.ClientRender="ClientRender"}(n||(n={}));let s=(0,a.createContext)("ClientRender");function c({wasServerRendered:e,children:t}){let[r,n]=(0,a.useState)(()=>i.W6?"ServerRender":e?"ClientHydrate":"ClientRender");return(0,l.g)(()=>{"ClientRender"!==r&&n("ClientRender")},[r]),(0,o.jsx)(s.Provider,{value:r,children:t})}try{s.displayName||(s.displayName="RenderPhaseContext")}catch{}try{c.displayName||(c.displayName="RenderPhaseProvider")}catch{}}}]);
//# sourceMappingURL=ui_packages_inline-autocomplete_index_ts-ui_packages_react-core_create-browser-history_ts-ui_-7bae48-6e9e0613e6c2.js.map