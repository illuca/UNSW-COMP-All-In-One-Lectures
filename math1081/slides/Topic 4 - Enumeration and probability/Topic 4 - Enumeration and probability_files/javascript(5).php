$(function(){var breadcrumbItems=$('.page-header-breadcrumb .breadcrumb-item').length
if(!$('body').hasClass('mobiletheme')&&!$('body').hasClass('tablettheme')&&breadcrumbItems>5){$('.page-header-breadcrumb .breadcrumb-item').each(function(index,item){if(index>breadcrumbItems-4){return!1}
var $this=$(item).find('a')
if($this.length===0){return}
var width=$this.width()+1
$this.addClass('breadcrumb-item-hover')
$this.on('mouseenter',function(){$this.css('max-width',width)})
$this.on('mouseleave',function(){$this.css('max-width','')})})}
for(const banner of document.querySelectorAll('.header-top-iframe')){const $banner=$(banner)
const $parent=$banner.closest('.unsw-banner')
if($parent.length>0||(typeof $banner.attr('height')==='undefined'&&typeof $banner.attr('width')==='undefined')){iFrameResize({checkOrigin:!1,onResized:function({iframe,height,width,type}){if(height==='0'&&$parent.hasClass('show')){var bsCollapseInterval=setInterval(function(){if(typeof $.fn.collapse!=='undefined'){$($parent[0]).collapse('hide')
clearInterval(bsCollapseInterval)}},100)}}},`#${$banner.attr('id')}`)}}
for(const pdlCheckbox of document.querySelectorAll('#page-mod-assign-mod #id_assignfeedback_poodll_enabled, #page-mod-assign-mod #id_assignsubmission_onlinepoodll_enabled')){const $checkbox=$(pdlCheckbox)
const $parent=$checkbox.closest('label')
$parent.addClass('d-none')}
if(navigator.userAgent.match(/(iPad|iPhone|iPod touch)/i)){$('#page-mod-turnitintooltwo-mod #fitem_id_reportgenspeed select').each(function(index,item){item.appendChild(document.createElement('optgroup'))})}
if($('.unsw-login-blocks [id="block-region-side-pre"] .block_rss_client').length>0){$('.unsw-login-blocks [id="block-region-side-pre"] .block_rss_client .list').slick({adaptiveHeight:!0,dots:!0,infinite:!1,mobileFirst:!0,nextArrow:'<button class="btn slick-arrow slick-arrow-next unsw-btn-outline" type="button"><i aria-hidden="true" class="fa fa-chevron-right"></i><span class="sr-only">Next</span></button>',prevArrow:'<button class="btn slick-arrow slick-arrow-prev unsw-btn-outline" type="button"><i aria-hidden="true" class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></button>',slidesToShow:2})}
var $navdrawer=$('#nav-drawer')
var sessionStorageSupport=!0
if(typeof Storage!==' undefined'){try{sessionStorage.setItem('unsw-moodle-test','true')
sessionStorage.removeItem('unsw-moodle-test')}catch{sessionStorageSupport=!1}}else{sessionStorageSupport=!1}
if(sessionStorageSupport&&sessionStorage.getItem('unsw-navdrawer-hide')){$('[data-toggle="navdrawer"]').addClass('toggled')
$('#nav-drawer').addClass('desktop-hide')}
$('[data-toggle="navdrawer"]').on('click',function(){if(window.innerWidth>991){$('[data-toggle="navdrawer"]').toggleClass('toggled')
$navdrawer.toggleClass('desktop-hide')
if(sessionStorageSupport){if($navdrawer.hasClass('desktop-hide')){sessionStorage.setItem('unsw-navdrawer-hide',!0)}else if(sessionStorage.getItem('unsw-navdrawer-hide')){sessionStorage.removeItem('unsw-navdrawer-hide')}}}else{$navdrawer.toggleClass('mobile-show')}})
var bsModalInterval=setInterval(function(){if(typeof $.fn.modal!=='undefined'){$('#unsw-drawer-block').on('hidden.bs.modal',function(){if($('.show.unsw-drawer').length===0){$('body').removeClass('unsw-drawer-open')}
if(document.getElementById('header-top-iframe')){document.getElementById('header-top-iframe').iFrameResizer.resize()}})
$('#unsw-drawer-block').on('hide.bs.modal',function(){$('body').removeClass('unsw-drawer-block-open')})
$('#unsw-drawer-block').on('show.bs.modal',function(){if($('#unsw-drawer-nav').hasClass('show')&&window.innerWidth<768){$('#unsw-drawer-nav').modal('hide')}
$('body').addClass('unsw-drawer-open unsw-drawer-block-open')})
$('#unsw-drawer-block').on('shown.bs.modal',function(){if(document.getElementById('header-top-iframe')){document.getElementById('header-top-iframe').iFrameResizer.resize()}})
$('#unsw-drawer-nav').on('hidden.bs.modal',function(){if($('.show.unsw-drawer').length===0){$('body').removeClass('unsw-drawer-open')}
if(document.getElementById('header-top-iframe')){document.getElementById('header-top-iframe').iFrameResizer.resize()}})
$('#unsw-drawer-nav').on('hide.bs.modal',function(){$('body').removeClass('unsw-drawer-nav-open')})
$('#unsw-drawer-nav').on('show.bs.modal',function(){if($('#unsw-drawer-block').hasClass('show')&&window.innerWidth<768){$('#unsw-drawer-block').modal('hide')}
$('body').addClass('unsw-drawer-open unsw-drawer-nav-open')})
$('#unsw-drawer-nav').on('shown.bs.modal',function(){if(document.getElementById('header-top-iframe')){document.getElementById('header-top-iframe').iFrameResizer.resize()}})
clearInterval(bsModalInterval)}},100)
$('[data-passwordunmask="unmask"]').on('click',function(e){var parentWrapper=$(e.currentTarget).closest('[data-passwordunmask="wrapper"]')
var passwordIcon=$(e.currentTarget).find('.icon')
var passwordInput=$('#'+parentWrapper.attr('data-passwordunmaskid'))
setTimeout(function(){var passwordInputType=passwordInput.attr('type')
if(passwordInputType==='hidden'){var passwordDisplay=parentWrapper.find('[data-passwordunmask="displayvalue"]')
if(passwordDisplay.find('span').length===0){passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash')}else{passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye')}}else if(passwordInputType==='password'){passwordIcon.removeClass('fa-eye-slash').addClass('fa-eye')}else if(passwordInputType==='text'){passwordIcon.removeClass('fa-eye').addClass('fa-eye-slash')}},100)})
var $bd=$('body')
$('.theatre-control-off').on('click',function(){$bd.removeClass('theatre-on')
sessionStorage.setItem('theatre','off')})
$('.theatre-control-on').on('click',function(){$bd.addClass('theatre-on')
sessionStorage.setItem('theatre','on')})
if(sessionStorage.getItem('theatre')==='on'){$bd.addClass('theatre-on')}})