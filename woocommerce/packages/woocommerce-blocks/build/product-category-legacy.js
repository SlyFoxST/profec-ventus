this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-category"]=function(e){function t(t){for(var o,i,a=t[0],u=t[1],s=t[2],b=0,d=[];b<a.length;b++)i=a[b],Object.prototype.hasOwnProperty.call(n,i)&&n[i]&&d.push(n[i][0]),n[i]=0;for(o in u)Object.prototype.hasOwnProperty.call(u,o)&&(e[o]=u[o]);for(l&&l(t);d.length;)d.shift()();return c.push.apply(c,s||[]),r()}function r(){for(var e,t=0;t<c.length;t++){for(var r=c[t],o=!0,a=1;a<r.length;a++){var u=r[a];0!==n[u]&&(o=!1)}o&&(c.splice(t--,1),e=i(i.s=r[0]))}return e}var o={},n={11:0},c=[];function i(t){if(o[t])return o[t].exports;var r=o[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=o,i.d=function(e,t,r){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)i.d(r,o,function(t){return e[t]}.bind(null,o));return r},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var a=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],u=a.push.bind(a);a.push=t,a=a.slice();for(var s=0;s<a.length;s++)t(a[s]);var l=u;return c.push([603,2,1,0]),r()}({0:function(e,t){!function(){e.exports=this.wp.element}()},1:function(e,t){!function(){e.exports=this.wp.i18n}()},10:function(e,t){!function(){e.exports=this.regeneratorRuntime}()},11:function(e,t){!function(){e.exports=this.moment}()},12:function(e,t,r){"use strict";r.d(t,"d",(function(){return n})),r.d(t,"n",(function(){return c})),r.d(t,"i",(function(){return i})),r.d(t,"k",(function(){return a})),r.d(t,"a",(function(){return u})),r.d(t,"j",(function(){return s})),r.d(t,"m",(function(){return l})),r.d(t,"c",(function(){return b})),r.d(t,"l",(function(){return d})),r.d(t,"b",(function(){return g})),r.d(t,"g",(function(){return p})),r.d(t,"h",(function(){return f})),r.d(t,"e",(function(){return h})),r.d(t,"f",(function(){return O})),r.d(t,"o",(function(){return j}));var o=r(5),n=Object(o.getSetting)("enableReviewRating",!0),c=Object(o.getSetting)("showAvatars",!0),i=Object(o.getSetting)("max_columns",6),a=Object(o.getSetting)("min_columns",1),u=Object(o.getSetting)("default_columns",3),s=Object(o.getSetting)("max_rows",6),l=Object(o.getSetting)("min_rows",1),b=Object(o.getSetting)("default_rows",2),d=Object(o.getSetting)("min_height",500),g=Object(o.getSetting)("default_height",500),p=(Object(o.getSetting)("placeholderImgSrc",""),Object(o.getSetting)("thumbnail_size",300),Object(o.getSetting)("isLargeCatalog")),f=Object(o.getSetting)("limitTags"),h=(Object(o.getSetting)("hasProducts",!0),Object(o.getSetting)("hasTags",!0)),O=Object(o.getSetting)("homeUrl",""),j=(Object(o.getSetting)("productCount",0),Object(o.getSetting)("attributes",[]),Object(o.getSetting)("wcBlocksAssetUrl",""))},13:function(e,t){!function(){e.exports=this.React}()},21:function(e,t){!function(){e.exports=this.wp.editor}()},22:function(e,t){!function(){e.exports=this.wp.compose}()},24:function(e,t){!function(){e.exports=this.wp.escapeHtml}()},25:function(e,t){!function(){e.exports=this.wp.blocks}()},26:function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));var o=r(10),n=r.n(o),c=function(e){var t;return n.a.async((function(r){for(;;)switch(r.prev=r.next){case 0:if("function"!=typeof e.json){r.next=11;break}return r.prev=1,r.next=4,n.a.awrap(e.json());case 4:return t=r.sent,r.abrupt("return",{message:t.message,type:t.type||"api"});case 8:return r.prev=8,r.t0=r.catch(1),r.abrupt("return",{message:r.t0.message,type:"general"});case 11:return r.abrupt("return",{message:e.message,type:e.type||"general"});case 12:case"end":return r.stop()}}),null,null,[[1,8]])}},27:function(e,t,r){"use strict";var o=r(9),n=r.n(o),c=r(8),i=r(7),a=r.n(i),u=r(4),s=r(12),l={root:"/wc/blocks",products:"".concat("/wc/blocks","/products"),categories:"".concat("/wc/blocks","/products/categories")};function b(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function d(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?b(Object(r),!0).forEach((function(t){n()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):b(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}r.d(t,"g",(function(){return g})),r.d(t,"d",(function(){return p})),r.d(t,"e",(function(){return f})),r.d(t,"c",(function(){return h})),r.d(t,"b",(function(){return O})),r.d(t,"f",(function(){return j})),r.d(t,"a",(function(){return m})),r.d(t,"h",(function(){return w}));var g=function(e){var t=e.selected,r=void 0===t?[]:t,o=e.search,n=void 0===o?"":o,i=e.queryArgs,b=function(e){var t=e.selected,r=void 0===t?[]:t,o=e.search,n=void 0===o?"":o,i=e.queryArgs,a=void 0===i?[]:i,u={per_page:s.g?100:-1,catalog_visibility:"any",status:"publish",search:n,orderby:"title",order:"asc"},b=[Object(c.addQueryArgs)(l.products,d({},u,{},a))];return s.g&&r.length&&b.push(Object(c.addQueryArgs)(l.products,{catalog_visibility:"any",status:"publish",include:r})),b}({selected:r,search:n,queryArgs:void 0===i?[]:i});return Promise.all(b.map((function(e){return a()({path:e})}))).then((function(e){return Object(u.uniqBy)(Object(u.flatten)(e),"id").map((function(e){return d({},e,{parent:0})}))})).catch((function(e){throw e}))},p=function(e){return a()({path:"".concat(l.products,"/").concat(e)})},f=function(e){var t=e.selected,r=function(e){var t=e.selected,r=void 0===t?[]:t,o=e.search,n=[Object(c.addQueryArgs)("".concat(l.products,"/tags"),{per_page:s.h?100:-1,orderby:s.h?"count":"name",order:s.h?"desc":"asc",search:o})];return s.h&&r.length&&n.push(Object(c.addQueryArgs)("".concat(l.products,"/tags"),{include:r})),n}({selected:void 0===t?[]:t,search:e.search});return Promise.all(r.map((function(e){return a()({path:e})}))).then((function(e){return Object(u.uniqBy)(Object(u.flatten)(e),"id")}))},h=function(e){return a()({path:"".concat(l.categories,"/").concat(e)})},O=function(e){return a()({path:Object(c.addQueryArgs)("".concat(l.products,"/categories"),d({per_page:-1},e))})},j=function(e){return a()({path:Object(c.addQueryArgs)("".concat(l.products,"/").concat(e,"/variations"),{per_page:-1})})},m=function(){return a()({path:Object(c.addQueryArgs)("".concat(l.products,"/attributes"),{per_page:-1})})},w=function(e){return a()({path:Object(c.addQueryArgs)("".concat(l.products,"/attributes/").concat(e,"/terms"),{per_page:-1})})}},28:function(e,t,r){"use strict";var o=r(0),n=r(1),c=(r(2),r(24));t.a=function(e){var t,r,i,a=e.error;return Object(o.createElement)("div",{className:"wc-block-error-message"},(r=(t=a).message,i=t.type,r?"general"===i?Object(o.createElement)("span",null,Object(n.__)("The following error was returned",'woocommerce'),Object(o.createElement)("br",null),Object(o.createElement)("code",null,Object(c.escapeHTML)(r))):"api"===i?Object(o.createElement)("span",null,Object(n.__)("The following error was returned from the API",'woocommerce'),Object(o.createElement)("br",null),Object(o.createElement)("code",null,Object(c.escapeHTML)(r))):r:Object(n.__)("An unknown error occurred which prevented the block from being updated.",'woocommerce')))}},3:function(e,t){!function(){e.exports=this.wp.components}()},34:function(e,t){!function(){e.exports=this.wp.keycodes}()},37:function(e,t,r){"use strict";r.d(t,"b",(function(){return n}));var o=r(12),n=["woocommerce/product-best-sellers","woocommerce/product-category","woocommerce/product-new","woocommerce/product-on-sale","woocommerce/product-top-rated"];t.a={columns:{type:"number",default:o.a},rows:{type:"number",default:o.c},alignButtons:{type:"boolean",default:!1},categories:{type:"array",default:[]},catOperator:{type:"string",default:"any"},contentVisibility:{type:"object",default:{title:!0,price:!0,rating:!0,button:!0}},isPreview:{type:"boolean",default:!1}}},38:function(e,t,r){"use strict";var o=r(9),n=r.n(o),c=r(0),i=r(1),a=(r(2),r(3));function u(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function s(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?u(Object(r),!0).forEach((function(t){n()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):u(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}t.a=function(e){var t=e.onChange,r=e.settings,o=r.button,n=r.price,u=r.rating,l=r.title;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(a.ToggleControl,{label:Object(i.__)("Product title",'woocommerce'),help:l?Object(i.__)("Product title is visible.",'woocommerce'):Object(i.__)("Product title is hidden.",'woocommerce'),checked:l,onChange:function(){return t(s({},r,{title:!l}))}}),Object(c.createElement)(a.ToggleControl,{label:Object(i.__)("Product price",'woocommerce'),help:n?Object(i.__)("Product price is visible.",'woocommerce'):Object(i.__)("Product price is hidden.",'woocommerce'),checked:n,onChange:function(){return t(s({},r,{price:!n}))}}),Object(c.createElement)(a.ToggleControl,{label:Object(i.__)("Product rating",'woocommerce'),help:u?Object(i.__)("Product rating is visible.",'woocommerce'):Object(i.__)("Product rating is hidden.",'woocommerce'),checked:u,onChange:function(){return t(s({},r,{rating:!u}))}}),Object(c.createElement)(a.ToggleControl,{label:Object(i.__)("Add to Cart button",'woocommerce'),help:o?Object(i.__)("Add to Cart button is visible.",'woocommerce'):Object(i.__)("Add to Cart button is hidden.",'woocommerce'),checked:o,onChange:function(){return t(s({},r,{button:!o}))}}))}},4:function(e,t){!function(){e.exports=this.lodash}()},41:function(e,t,r){"use strict";var o=r(15),n=r.n(o),c=r(0),i=r(1),a=r(4),u=(r(2),r(29)),s=r(3),l=r(10),b=r.n(l),d=r(16),g=r.n(d),p=r(17),f=r.n(p),h=r(18),O=r.n(h),j=r(19),m=r.n(j),w=r(14),y=r.n(w),v=r(20),_=r.n(v),k=r(22),P=r(27),E=r(26),C=Object(k.createHigherOrderComponent)((function(e){return function(t){function r(){var e;return g()(this,r),(e=O()(this,m()(r).apply(this,arguments))).state={error:null,loading:!1,categories:null},e.loadCategories=e.loadCategories.bind(y()(e)),e}return _()(r,t),f()(r,[{key:"componentDidMount",value:function(){this.loadCategories()}},{key:"loadCategories",value:function(){var e=this;this.setState({loading:!0}),Object(P.b)({show_review_count:this.props.showReviewCount||!1}).then((function(t){e.setState({categories:t,loading:!1,error:null})})).catch((function(t){var r;return b.a.async((function(o){for(;;)switch(o.prev=o.next){case 0:return o.next=2,b.a.awrap(Object(E.a)(t));case 2:r=o.sent,e.setState({categories:null,loading:!1,error:r});case 4:case"end":return o.stop()}}))}))}},{key:"render",value:function(){var t=this.state,r=t.error,o=t.loading,i=t.categories;return Object(c.createElement)(e,n()({},this.props,{error:r,isLoading:o,categories:i}))}}]),r}(c.Component)}),"withCategories"),S=r(28),A=(r(92),function(e){var t=e.categories,r=e.error,o=e.isLoading,l=e.onChange,b=e.onOperatorChange,d=e.operator,g=e.selected,p=e.isSingle,f=e.showReviewCount,h={clear:Object(i.__)("Clear all product categories",'woocommerce'),list:Object(i.__)("Product Categories",'woocommerce'),noItems:Object(i.__)("Your store doesn't have any product categories.",'woocommerce'),search:Object(i.__)("Search for product categories",'woocommerce'),selected:function(e){return Object(i.sprintf)(Object(i._n)("%d category selected","%d categories selected",e,'woocommerce'),e)},updated:Object(i.__)("Category search results updated.",'woocommerce')};return r?Object(c.createElement)(S.a,{error:r}):Object(c.createElement)(c.Fragment,null,Object(c.createElement)(u.a,{className:"woocommerce-product-categories",list:t,isLoading:o,selected:g.map((function(e){return Object(a.find)(t,{id:e})})).filter(Boolean),onChange:l,renderItem:function(e){var t=e.item,r=e.search,o=e.depth,a=void 0===o?0:o,s=["woocommerce-product-categories__item"];r.length&&s.push("is-searching"),0===a&&0!==t.parent&&s.push("is-skip-level");var l=t.breadcrumbs.length?"".concat(t.breadcrumbs.join(", "),", ").concat(t.name):t.name,b=f?Object(i.sprintf)(Object(i._n)("%s, has %d review","%s, has %d reviews",t.review_count,'woocommerce'),l,t.review_count):Object(i.sprintf)(Object(i._n)("%s, has %d product","%s, has %d products",t.count,'woocommerce'),l,t.count),d=f?Object(i.sprintf)(Object(i._n)("%d Review","%d Reviews",t.review_count,'woocommerce'),t.review_count):Object(i.sprintf)(Object(i._n)("%d Product","%d Products",t.count,'woocommerce'),t.count);return Object(c.createElement)(u.b,n()({className:s.join(" ")},e,{showCount:!0,countLabel:d,"aria-label":b}))},messages:h,isHierarchical:!0,isSingle:p}),!!b&&Object(c.createElement)("div",{className:g.length<2?"screen-reader-text":""},Object(c.createElement)(s.SelectControl,{className:"woocommerce-product-categories__operator",label:Object(i.__)("Display products matching",'woocommerce'),help:Object(i.__)("Pick at least two categories to use this setting.",'woocommerce'),value:d,onChange:b,options:[{label:Object(i.__)("Any selected categories",'woocommerce'),value:"any"},{label:Object(i.__)("All selected categories",'woocommerce'),value:"all"}]})))});A.defaultProps={operator:"any",isSingle:!1};t.a=C(A)},44:function(e,t){!function(){e.exports=this.ReactDOM}()},45:function(e,t,r){"use strict";var o=r(0),n=r(1),c=r(4),i=(r(2),r(3)),a=r(12);t.a=function(e){var t=e.columns,r=e.rows,u=e.setAttributes,s=e.alignButtons;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(i.RangeControl,{label:Object(n.__)("Columns",'woocommerce'),value:t,onChange:function(e){var t=Object(c.clamp)(e,a.k,a.i);u({columns:Object(c.isNaN)(t)?"":t})},min:a.k,max:a.i}),Object(o.createElement)(i.RangeControl,{label:Object(n.__)("Rows",'woocommerce'),value:r,onChange:function(e){var t=Object(c.clamp)(e,a.m,a.j);u({rows:Object(c.isNaN)(t)?"":t})},min:a.m,max:a.j}),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Align Last Block",'woocommerce'),help:s?Object(n.__)("The last inner block will be aligned vertically.",'woocommerce'):Object(n.__)("The last inner block will follow other content.",'woocommerce'),checked:s,onChange:function(){return u({alignButtons:!s})}}))}},46:function(e,t,r){"use strict";var o=r(0),n=r(6),c=r.n(n),i=r(58),a=r.n(i),u=r(12);r.d(t,"a",(function(){return s}));var s=function(e){return function(t){var r=t.attributes,n=r.align,i=r.contentVisibility,s=c()(n?"align".concat(n):"",{"is-hidden-title":!i.title,"is-hidden-price":!i.price,"is-hidden-rating":!i.rating,"is-hidden-button":!i.button});return Object(o.createElement)(o.RawHTML,{className:s},function(e,t){var r=e.attributes,o=r.attributes,n=r.attrOperator,c=r.categories,i=r.catOperator,s=r.orderby,l=r.products,b=r.columns||u.a,d=r.rows||u.c,g=new Map;switch(g.set("limit",d*b),g.set("columns",b),c&&c.length&&(g.set("category",c.join(",")),i&&"all"===i&&g.set("cat_operator","AND")),o&&o.length&&(g.set("terms",o.map((function(e){return e.id})).join(",")),g.set("attribute",o[0].attr_slug),n&&"all"===n&&g.set("terms_operator","AND")),s&&("price_desc"===s?(g.set("orderby","price"),g.set("order","DESC")):"price_asc"===s?(g.set("orderby","price"),g.set("order","ASC")):"date"===s?(g.set("orderby","date"),g.set("order","DESC")):g.set("orderby",s)),t){case"woocommerce/product-best-sellers":g.set("best_selling","1");break;case"woocommerce/product-top-rated":g.set("orderby","rating");break;case"woocommerce/product-on-sale":g.set("on_sale","1");break;case"woocommerce/product-new":g.set("orderby","date"),g.set("order","DESC");break;case"woocommerce/handpicked-products":if(!l.length)return"";g.set("ids",l.join(",")),g.set("limit",l.length);break;case"woocommerce/product-category":if(!c||!c.length)return"";break;case"woocommerce/products-by-attribute":if(!o||!o.length)return""}var p="[products",f=!0,h=!1,O=void 0;try{for(var j,m=g[Symbol.iterator]();!(f=(j=m.next()).done);f=!0){var w=a()(j.value,2);p+=" "+w[0]+'="'+w[1]+'"'}}catch(e){h=!0,O=e}finally{try{f||null==m.return||m.return()}finally{if(h)throw O}}return p+="]"}(t,e))}}},47:function(e,t){!function(){e.exports=this.wp.viewport}()},5:function(e,t){!function(){e.exports=this.wc.wcSettings}()},52:function(e,t){!function(){e.exports=this.wp.hooks}()},54:function(e,t){!function(){e.exports=this.wp.htmlEntities}()},55:function(e,t){!function(){e.exports=this.wp.date}()},555:function(e,t,r){var o=r(556);"string"==typeof o&&(o=[[e.i,o,""]]);var n={insert:"head",singleton:!1};r(35)(o,n);o.locals&&(e.exports=o.locals)},556:function(e,t,r){},57:function(e,t,r){"use strict";var o=r(0),n=r(1),c=r(3);r(2);t.a=function(e){var t=e.value,r=e.setAttributes;return Object(o.createElement)(c.SelectControl,{label:Object(n.__)("Order products by",'woocommerce'),value:t,options:[{label:Object(n.__)("Newness - newest first",'woocommerce'),value:"date"},{label:Object(n.__)("Price - low to high",'woocommerce'),value:"price_asc"},{label:Object(n.__)("Price - high to low",'woocommerce'),value:"price_desc"},{label:Object(n.__)("Rating - highest first",'woocommerce'),value:"rating"},{label:Object(n.__)("Sales - most first",'woocommerce'),value:"popularity"},{label:Object(n.__)("Title - alphabetical",'woocommerce'),value:"title"},{label:Object(n.__)("Menu Order",'woocommerce'),value:"menu_order"}],onChange:function(e){return r({orderby:e})}})}},603:function(e,t,r){"use strict";r.r(t);var o=r(9),n=r.n(o),c=r(0),i=r(1),a=r(25),u=r(4),s=(r(555),r(16)),l=r.n(s),b=r(17),d=r.n(b),g=r(18),p=r.n(g),f=r(19),h=r.n(f),O=r(14),j=r.n(O),m=r(20),w=r.n(m),y=r(21),v=r(3),_=(r(2),r(38)),k=r(45),P=r(41),E=r(57),C=r(91);function S(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function A(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?S(Object(r),!0).forEach((function(t){n()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):S(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var x=function(e){function t(){var e,r;l()(this,t);for(var o=arguments.length,c=new Array(o),i=0;i<o;i++)c[i]=arguments[i];return r=p()(this,(e=h()(t)).call.apply(e,[this].concat(c))),n()(j()(r),"state",{changedAttributes:{},isEditing:!1}),n()(j()(r),"startEditing",(function(){r.setState({isEditing:!0,changedAttributes:{}})})),n()(j()(r),"stopEditing",(function(){r.setState({isEditing:!1,changedAttributes:{}})})),n()(j()(r),"setChangedAttributes",(function(e){r.setState((function(t){return{changedAttributes:A({},t.changedAttributes,{},e)}}))})),n()(j()(r),"save",(function(){var e=r.state.changedAttributes;(0,r.props.setAttributes)(e),r.stopEditing()})),r}return w()(t,e),d()(t,[{key:"componentDidMount",value:function(){this.props.attributes.categories.length||this.setState({isEditing:!0})}},{key:"getInspectorControls",value:function(){var e=this,t=this.props,r=t.attributes,o=t.setAttributes,n=this.state.isEditing,a=r.columns,u=r.catOperator,s=r.contentVisibility,l=r.orderby,b=r.rows,d=r.alignButtons;return Object(c.createElement)(y.InspectorControls,{key:"inspector"},Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Product Category",'woocommerce'),initialOpen:!r.categories.length&&!n},Object(c.createElement)(P.a,{selected:r.categories,onChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],r=t.map((function(e){return e.id})),n={categories:r};o(n),e.setChangedAttributes(n)},operator:u,onOperatorChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any",r={catOperator:t};o(r),e.setChangedAttributes(r)}})),Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Layout",'woocommerce'),initialOpen:!0},Object(c.createElement)(k.a,{columns:a,rows:b,alignButtons:d,setAttributes:o})),Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Content",'woocommerce'),initialOpen:!0},Object(c.createElement)(_.a,{settings:s,onChange:function(e){return o({contentVisibility:e})}})),Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Order By",'woocommerce'),initialOpen:!1},Object(c.createElement)(E.a,{setAttributes:o,value:l})))}},{key:"renderEditMode",value:function(){var e=this,t=this.props,r=t.attributes,o=t.debouncedSpeak,n=A({},r,{},this.state.changedAttributes);return Object(c.createElement)(v.Placeholder,{icon:"category",label:Object(i.__)("Products by Category",'woocommerce'),className:"wc-block-products-grid wc-block-products-category"},Object(i.__)("Display a grid of products from your selected categories.",'woocommerce'),Object(c.createElement)("div",{className:"wc-block-products-category__selection"},Object(c.createElement)(P.a,{selected:n.categories,onChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],r=t.map((function(e){return e.id}));e.setChangedAttributes({categories:r})},operator:n.catOperator,onOperatorChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return e.setChangedAttributes({catOperator:t})}}),Object(c.createElement)(v.Button,{isDefault:!0,onClick:function(){e.save(),o(Object(i.__)("Showing Products by Category block preview.",'woocommerce'))}},Object(i.__)("Done",'woocommerce')),Object(c.createElement)(v.Button,{className:"wc-block-products-category__cancel-button",isTertiary:!0,onClick:function(){e.stopEditing(),o(Object(i.__)("Showing Products by Category block preview.",'woocommerce'))}},Object(i.__)("Cancel",'woocommerce'))))}},{key:"renderViewMode",value:function(){var e=this.props,t=e.attributes,r=e.name,o=t.categories.length;return Object(c.createElement)(v.Disabled,null,o?Object(c.createElement)(y.ServerSideRender,{block:r,attributes:t,EmptyResponsePlaceholder:function(){return Object(c.createElement)(v.Placeholder,{icon:"category",label:Object(i.__)("Products by Category",'woocommerce'),className:"wc-block-products-grid wc-block-products-category"},Object(i.__)("No products were found that matched your selection.",'woocommerce'))}}):Object(i.__)("Select at least one category to display its products.",'woocommerce'))}},{key:"render",value:function(){var e=this,t=this.state.isEditing;return this.props.attributes.isPreview?C.a:Object(c.createElement)(c.Fragment,null,Object(c.createElement)(y.BlockControls,null,Object(c.createElement)(v.Toolbar,{controls:[{icon:"edit",title:Object(i.__)("Edit"),onClick:function(){return t?e.stopEditing():e.startEditing()},isActive:t}]})),this.getInspectorControls(),t?this.renderEditMode():this.renderViewMode())}}]),t}(c.Component),D=Object(v.withSpokenMessages)(x),B=r(46),M=r(37);function T(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);t&&(o=o.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,o)}return r}function N(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?T(Object(r),!0).forEach((function(t){n()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):T(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}Object(a.registerBlockType)("woocommerce/product-category",{title:Object(i.__)("Products by Category",'woocommerce'),icon:{src:"category",foreground:"#96588a"},category:"woocommerce",keywords:[Object(i.__)("WooCommerce",'woocommerce')],description:Object(i.__)("Display a grid of products from your selected categories.",'woocommerce'),supports:{align:["wide","full"],html:!1},example:{attributes:{isPreview:!0}},attributes:N({},M.a,{editMode:{type:"boolean",default:!0},orderby:{type:"string",default:"date"}}),transforms:{from:[{type:"block",blocks:Object(u.without)(M.b,"woocommerce/product-category"),transform:function(e){return Object(a.createBlock)("woocommerce/product-category",N({},e,{editMode:!1}))}}]},deprecated:[{attributes:N({},M.a,{editMode:{type:"boolean",default:!0},orderby:{type:"string",default:"date"}}),save:Object(B.a)("woocommerce/product-category")}],edit:function(e){return Object(c.createElement)(D,e)},save:function(){return null}})},63:function(e,t){!function(){e.exports=this.wp.dom}()},67:function(e,t){},68:function(e,t){},69:function(e,t){},7:function(e,t){!function(){e.exports=this.wp.apiFetch}()},71:function(e,t){},72:function(e,t){},8:function(e,t){!function(){e.exports=this.wp.url}()},91:function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));var o=r(0),n=r(12),c=Object(o.createElement)("img",{src:n.o+"img/grid.svg",alt:"Grid Preview",width:"230",height:"250",style:{width:"100%"}})}});
