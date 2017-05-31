<?php
    require 'db/data.php';
    require 'db/visits.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>

    <meta charset="utf-8">

    <title>Ойка | Яркие праздники для детей любого возраста в Киеве от студии Ойка</title>

    <meta name="description" content="Праздники и шоу-программы для детей от опытной команды актеров студии Ойка. Создаем семейную историю вместе!">
    <meta name="keywords" content="праздники для детей, праздники для детей в Киеве, детские праздники Киев, праздники для детей любого возраста">

    <meta property="og:description" content="Праздники и шоу-программы для детей от опытной команды актеров студии Ойка. Создаем семейную историю вместе!" />

    <meta property="og:image" content="http://oyka.com.ua/lp/img/og.jpg" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />

    <meta property="og:site_name" content="Ойка"/>
    <meta property="og:title" content="Яркие праздники для детей любого возраста в Киеве от студии Ойка" />
    <meta property="og:url" content="http://oyka.com.ua/lp/"/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- RESET -->
    <style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}*{box-sizing:border-box}html,body{margin:0;width:100%}.container{max-width:1200px;margin:0 auto}a,button,img,input{-webkit-transition:all .5s;transition:all .5s}button,button:active,button:focus,input,input:active,input:focus,textarea,textarea:active,textarea:focus{outline:none}button,button:hover,a,a:hover{text-decoration:none;cursor:pointer}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:before,.clearfix:after,.container:before,.container:after{content:'.';display:block;overflow:hidden;visibility:hidden;font-size:0;line-height:0;width:0;height:0}.clearfix:after,.container:after{clear:both}.left{float:left}.right{float:right}.tl{text-align:left}.tr{text-align:right}.tc{text-align:center}.flex{display:-webkit-box;display:flex;-webkit-box-align:center;align-items:center;-webkit-box-pack:center;justify-content:center}a,button,input,textarea{text-decoration:none;outline:0;border:0;-webkit-transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease;transition:color .4s ease,background-color .4s ease,background-image .4s ease,border-color .4s ease}a:focus,button:focus,input:focus,textarea:focus{outline:0}input,textarea{-webkit-box-sizing:border-box;box-sizing:border-box}textarea{resize:none}button:hover,a:hover{cursor:pointer}</style>

    <!-- GRID -->
    <style>:before,:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-1,.col-sm-1,.col-md-1,.col-lg-1,.col-2,.col-sm-2,.col-md-2,.col-lg-2,.col-3,.col-sm-3,.col-md-3,.col-lg-3,.col-4,.col-sm-4,.col-md-4,.col-lg-4,.col-5,.col-sm-5,.col-md-5,.col-lg-5,.col-6,.col-sm-6,.col-md-6,.col-lg-6,.col-7,.col-sm-7,.col-md-7,.col-lg-7,.col-8,.col-sm-8,.col-md-8,.col-lg-8,.col-9,.col-sm-9,.col-md-9,.col-lg-9,.col-10,.col-sm-10,.col-md-10,.col-lg-10,.col-11,.col-sm-11,.col-md-11,.col-lg-11,.col-12,.col-sm-12,.col-md-12,.col-lg-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12{float:left}.col-12{width:100%}.col-11{width:91.66666667%}.col-10{width:83.33333333%}.col-9{width:75%}.col-8{width:66.66666667%}.col-7{width:58.33333333%}.col-6{width:50%}.col-5{width:41.66666667%}.col-4{width:33.33333333%}.col-3{width:25%}.col-2{width:16.66666667%}.col-1{width:8.33333333%}.col-pull-12{right:100%}.col-pull-11{right:91.66666667%}.col-pull-10{right:83.33333333%}.col-pull-9{right:75%}.col-pull-8{right:66.66666667%}.col-pull-7{right:58.33333333%}.col-pull-6{right:50%}.col-pull-5{right:41.66666667%}.col-pull-4{right:33.33333333%}.col-pull-3{right:25%}.col-pull-2{right:16.66666667%}.col-pull-1{right:8.33333333%}.col-pull-0{right:auto}.col-push-12{left:100%}.col-push-11{left:91.66666667%}.col-push-10{left:83.33333333%}.col-push-9{left:75%}.col-push-8{left:66.66666667%}.col-push-7{left:58.33333333%}.col-push-6{left:50%}.col-push-5{left:41.66666667%}.col-push-4{left:33.33333333%}.col-push-3{left:25%}.col-push-2{left:16.66666667%}.col-push-1{left:8.33333333%}.col-push-0{left:auto}.col-offset-12{margin-left:100%}.col-offset-11{margin-left:91.66666667%}.col-offset-10{margin-left:83.33333333%}.col-offset-9{margin-left:75%}.col-offset-8{margin-left:66.66666667%}.col-offset-7{margin-left:58.33333333%}.col-offset-6{margin-left:50%}.col-offset-5{margin-left:41.66666667%}.col-offset-4{margin-left:33.33333333%}.col-offset-3{margin-left:25%}.col-offset-2{margin-left:16.66666667%}.col-offset-1{margin-left:8.33333333%}.col-offset-0{margin-left:0}.clearfix:before,.clearfix:after,.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.container-fluid:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}</style>

    <!-- FONTS+HEADER -->
    <style>@font-face{font-family:"Blogger Sans-Bold";font-style:normal;font-weight:400;src:url("fonts/BloggerSans-Bold.woff2") format("woff2"),url("fonts/BloggerSans-Bold.woff") format("woff")}@font-face{font-family:"Blogger Sans";font-style:normal;font-weight:400;src:url("fonts/BloggerSans.woff2") format("woff2"),url("fonts/BloggerSans.woff") format("woff")}@font-face{font-family:"RFKrabuler-Regular";font-style:normal;font-weight:400;src:url(fonts/RFKrabuler-Regular.woff2) format("woff2"),url(fonts/RFKrabuler-Regular.woff) format("woff")}</style>

    <!-- Load CSS, CSS Localstorage & WebFonts Main Function -->
    <script>!function(a){"use strict";function b(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function c(b,c){return a.localStorage&&localStorage[b+"_content"]&&localStorage[b+"_file"]===c}function d(b,d){if(a.localStorage&&a.XMLHttpRequest)c(b,d)?f(localStorage[b+"_content"]):e(b,d);else{var h=g.createElement("link");h.href=d,h.id=b,h.rel="stylesheet",h.type="text/css",g.getElementsByTagName("head")[0].appendChild(h),g.cookie=b}}function e(a,b){var c=new XMLHttpRequest;c.open("GET",b,!0),c.onreadystatechange=function(){4===c.readyState&&200===c.status&&(f(c.responseText),localStorage[a+"_content"]=c.responseText,localStorage[a+"_file"]=b)},c.send()}function f(a){var b=g.createElement("style");b.setAttribute("type","text/css"),g.getElementsByTagName("head")[0].appendChild(b),b.styleSheet?b.styleSheet.cssText=a:b.innerHTML=a}var g=a.document;a.loadCSS=function(a,b,c){var d,e=g.createElement("link");if(b)d=b;else{var f;f=g.querySelectorAll?g.querySelectorAll("style,link[rel=stylesheet],script"):(g.body||g.getElementsByTagName("head")[0]).childNodes,d=f[f.length-1]}var h=g.styleSheets;e.rel="stylesheet",e.href=a,e.media="only x",d.parentNode.insertBefore(e,b?d:d.nextSibling);var i=function(a){for(var b=e.href,c=h.length;c--;)if(h[c].href===b)return a();setTimeout(function(){i(a)})};return e.onloadcssdefined=i,i(function(){e.media=c||"all"}),e},a.loadLocalStorageCSS=function(e,f){c(e,f)||g.cookie.indexOf(e)>-1?d(e,f):b(a,"load",function(){d(e,f)})}}(this);</script>

<!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="stylesheet" href="css/header.css">
    <!-- Load CSS Start -->
    <script>loadCSS( "css/main.css?ver=1.0.0", false, "all" );</script>
    <!-- Load CSS End -->

    <!-- Load CSS Compiled without JS -->
    <noscript>
        <link rel="stylesheet" href="css/main.css">
    </noscript>

</head>
<body data-img="img/land.jpg">
<div class="main_wrap">

<div class="bar-long"></div>
<div id="scrollup"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.054 286.054"><path d="M143.027 0C64.04 0 0 64.04 0 143.027c0 78.996 64.04 143.027 143.027 143.027s143.027-64.03 143.027-143.027C286.054 64.05 222.014 0 143.027 0zm0 259.236c-64.183 0-116.21-52.026-116.21-116.21s52.027-116.2 116.21-116.2 116.21 52.018 116.21 116.2-52.027 116.21-116.21 116.21zm51.677-125.148h-24.86V89.392c0-4.934-3.996-8.94-8.94-8.94H125.15c-4.934 0-8.94 4.006-8.94 8.94v44.696H91.342c-9.698 0-13.667 6.463-8.822 14.338l51.686 51.096c4.845 7.884 12.783 7.884 17.637 0l51.678-51.096c4.863-7.875.894-14.338-8.814-14.338z"/></svg></div>



<div id="sec_01">
<div id="nav">
    <div class="wrapper">
      <svg class="svg" id="menu" viewBox="0 0 800 600">
        <path class="path" d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
        <path class="path" d="M300,320 L540,320" id="middle"></path>
        <path class="path" d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
      </svg>
    </div>
    <div class="inner">

        <ul>
           <li><a href="#sec_05" class="scroll">О компании</a></li>
           <li><a href="#sec_07" class="scroll">Выбрать праздник</a></li>
           <li><a href="#sec_11" class="scroll">Отзывы</a></li>
           <li><a href="#sec_06" class="scroll">Галерея</a></li>
        </ul>

        <div class="phones_block_menu">
            <a class="call_back md-trigger" data-modal="modal_callback"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><defs><style>.cls-cb-1{fill:#e9274f;}.cls-cb-2{fill:#ff2a56;}.cls-cba-1{fill:#3bb6f8;fill-rule:evenodd;}</style></defs><path class="cls-cb-1" d="M28.8 4.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 7.9 28.8 4.5Z"/><path class="cls-cb-2" d="M28.8 1.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 4.9 28.8 1.5Z"/><path class="cls-cba-1" d="M163.35,152s-25.24-8.27-28.5,14.39,18.09,24.12,25.21,22.78,16.28-14.51,16.44-20.39S173.47,155.43,163.35,152Z" transform="translate(-134.51 -150.5)"/></svg><span><img src="img/phone.png" alt=""></span></a>

            <a href="tel:+380981629007" class="tel">+380 (98) 162-90-07</a>
            <div class="clear"></div>
        </div>
        <ul class="social">
            <li><a target="_blank" href="https://www.facebook.com/oyka.studio/?ref=aymt_homepage_panel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 26"><title>icon_fb</title><path d="M375,578.5h-3.36c-3.77,0-6.21,2.51-6.21,6.4v3H362a.53.53,0,0,0-.53.53v4.27a.53.53,0,0,0,.53.53h3.38V604a.53.53,0,0,0,.53.53h4.4a.53.53,0,0,0,.53-.53V593.18h3.95a.53.53,0,0,0,.53-.53v-4.27a.53.53,0,0,0-.53-.53h-3.95v-2.5c0-1.2.29-1.81,1.84-1.81H375a.53.53,0,0,0,.53-.53v-4A.53.53,0,0,0,375,578.5Z" transform="translate(-361.5 -578.5)"/></svg></a></li>
            <li><a target="_blank" href="https://vk.com/club58496230"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 24.02"><title>icon_vk</title><path d="M410.29,831.18a2.91,2.91,0,0,0-.14-.27,21.57,21.57,0,0,0-4-4.84l0,0,0,0,0,0h0a24.58,24.58,0,0,1-1.69-1.8,1.76,1.76,0,0,1-.29-1.78,16.69,16.69,0,0,1,1.87-2.87l1.35-1.86q3.6-5,3.12-6.44l-.12-.22a1.21,1.21,0,0,0-.65-.36,3.13,3.13,0,0,0-1.33-.06l-6,0a.75.75,0,0,0-.42,0l-.27.07-.1.05-.08.07a1,1,0,0,0-.23.23,1.54,1.54,0,0,0-.21.38,36.5,36.5,0,0,1-2.23,4.93q-.77,1.36-1.42,2.36a11.23,11.23,0,0,1-1.08,1.47,7.7,7.7,0,0,1-.79.76c-.24.19-.42.27-.54.24l-.35-.09a1.43,1.43,0,0,1-.47-.54,2.48,2.48,0,0,1-.24-.85q-.06-.51-.07-.89c0-.25,0-.6,0-1.05s0-.76,0-.92q0-.83,0-1.81t.05-1.54c0-.38,0-.78,0-1.2a5.32,5.32,0,0,0-.07-1,3.56,3.56,0,0,0-.22-.7,1.16,1.16,0,0,0-.43-.53,2.32,2.32,0,0,0-.7-.3,13.15,13.15,0,0,0-2.81-.29q-3.87,0-5,.53a2.82,2.82,0,0,0-.79.66c-.25.32-.28.5-.1.53a2.52,2.52,0,0,1,1.77.94l.13.26a4.33,4.33,0,0,1,.29,1,10.65,10.65,0,0,1,.19,1.6,17.94,17.94,0,0,1,0,2.74q-.1,1.14-.2,1.77a3.68,3.68,0,0,1-.28,1,4.37,4.37,0,0,1-.25.48.38.38,0,0,1-.1.11,1.52,1.52,0,0,1-.56.11,1.29,1.29,0,0,1-.71-.31,5.15,5.15,0,0,1-.86-.84,11.24,11.24,0,0,1-1-1.5q-.56-1-1.17-2.28l-.33-.63q-.31-.61-.85-1.79t-1-2.27a1.44,1.44,0,0,0-.5-.7l-.1-.07a1.45,1.45,0,0,0-.33-.18,2,2,0,0,0-.48-.14l-5.71,0a1.4,1.4,0,0,0-1.19.42l-.08.13a.74.74,0,0,0-.06.35,1.83,1.83,0,0,0,.13.59q1.25,3.09,2.72,6t2.55,4.62q1.08,1.75,2.21,3.31t1.49,2c.24.29.43.51.57.66l.52.53a12.49,12.49,0,0,0,1.47,1.26,25.28,25.28,0,0,0,2.14,1.45A11.27,11.27,0,0,0,387,833a9,9,0,0,0,3,.36h2.4a1.62,1.62,0,0,0,1.1-.48l.08-.11a1.5,1.5,0,0,0,.16-.41,2.33,2.33,0,0,0,.07-.6,7.58,7.58,0,0,1,.14-1.7,4.63,4.63,0,0,1,.35-1.14,2.82,2.82,0,0,1,.45-.65,1.79,1.79,0,0,1,.35-.32l.17-.08a1.28,1.28,0,0,1,1.18.34,7,7,0,0,1,1.27,1.27q.59.76,1.43,1.7a10,10,0,0,0,1.46,1.4l.42.26a5,5,0,0,0,1.08.48,2.22,2.22,0,0,0,1.17.11l5.33-.09a2.33,2.33,0,0,0,1.23-.27,1.07,1.07,0,0,0,.52-.6,1.78,1.78,0,0,0,0-.75A2.88,2.88,0,0,0,410.29,831.18Z" transform="translate(-370.5 -809.49)"/></svg></a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCUUty6yOevhy7A-t68eno_Q"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 24"><title>icon_youtube</title><path d="M339.17,818.56c-1.23-1.46-3.49-2.06-7.82-2.06H315.65c-4.43,0-6.73.64-8,2.19s-1.19,3.76-1.19,6.85v5.9c0,6,1.41,9,9.15,9h15.71c3.75,0,5.83-.53,7.18-1.82s2-3.49,2-7.23v-5.9C340.5,822.28,340.41,820,339.17,818.56Zm-10.85,10.76-7.13,3.74a1.1,1.1,0,0,1-.51.12,1.08,1.08,0,0,1-.57-.16,1.1,1.1,0,0,1-.53-.94v-7.45a1.1,1.1,0,0,1,1.6-1l7.13,3.72a1.1,1.1,0,0,1,0,2Z" transform="translate(-306.5 -816.5)"/></svg></a></li>
            <li><a target="_blank" href="https://www.instagram.com/oyka_studio/ "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>icon_inst</title><path d="M312.08,867h17.84a3,3,0,0,1,3.08,3.08v17.84a3,3,0,0,1-3.08,3.08H312.08a3,3,0,0,1-3.08-3.08V870.08a3,3,0,0,1,3.08-3.08Zm14.4,2.67a1.08,1.08,0,0,0-1.08,1.08v2.59a1.08,1.08,0,0,0,1.08,1.08h2.71a1.08,1.08,0,0,0,1.08-1.08v-2.59a1.08,1.08,0,0,0-1.08-1.08Zm3.8,7.48h-2.11a7,7,0,0,1,.31,2.06,7.46,7.46,0,0,1-14.92,0,7,7,0,0,1,.31-2.06h-2.2v10.14a1,1,0,0,0,1,1h16.71a1,1,0,0,0,1-1V877.15ZM321,874.28a4.67,4.67,0,1,0,4.82,4.67A4.75,4.75,0,0,0,321,874.28Z" transform="translate(-309 -867)"/></svg></a></li>
        </ul>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-12 top">
                <img src="img/logo.png" alt="Ойка" class="logo">

                <div class="phones_block">
                    <a href="tel:+380981629007" class="tel">+380 (98) 162-90-07</a>

                    <a class="call_back md-trigger" data-modal="modal_callback"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><defs><style>.cls-cb-1{fill:#e9274f;}.cls-cb-2{fill:#ff2a56;}.cls-cba-1{fill:#3bb6f8;fill-rule:evenodd;}</style></defs><path class="cls-cb-1" d="M28.8 4.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 7.9 28.8 4.5Z"/><path class="cls-cb-2" d="M28.8 1.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 4.9 28.8 1.5Z"/><path class="cls-cba-1" d="M163.35,152s-25.24-8.27-28.5,14.39,18.09,24.12,25.21,22.78,16.28-14.51,16.44-20.39S173.47,155.43,163.35,152Z" transform="translate(-134.51 -150.5)"/></svg><span><img src="img/phone.png" alt=""></span></a>
                    <div class="clear"></div>
                </div>

                <ul class="menu text--desc">
                   <li><a href="#sec_05" class="scroll">О компании</a></li>
                   <li><a href="#sec_07" class="scroll">Выбрать праздник</a></li>
                   <li><a href="#sec_11" class="scroll">Отзывы</a></li>
                   <li><a href="#sec_06" class="scroll">Галерея</a></li>
                </ul>

                <div class="clear"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="content_block">
                    <h1 class="text--title red">Яркие детские <br> праздники в Киеве</h1>
                    <p class="underheader text--desc">После которых дети не захотят отпускать героев</p>
                    <a href="#sec_02_anch" class="scroll btn flex"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Узнать больше</span></a>
                </div>
                <!-- <img src="img/bl1_blue_baloon.png" alt="Шарик" class="sec_01-img"> -->
                <div class="counter">
                    <p class="counter_title text--title">Праздников <br> уже проведено</p>
                    <p class="counter_cur text--title">1 275</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_02">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <h2 id="sec_02_anch" class="text--title header">Получите <br> индивидуальную консультацию </h2>
                <p class="description text--desc">и узнайте, какой праздник мы можем <br> организовать для вашего ребенка</p>

                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>

                    <!-- Hidden DB Fields -->
                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"  name="orderType" value="Zayavka_consult">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>">

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>
                    
                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Получите индивидуальную консультацию'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                   <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                    <input type="hidden" name="form_type" value="firstForm_consult"> 
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

<!--                     <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="email" class="form-control">

                    </span> -->


                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>

                    <div class="clear"></div>
                </form>

                <img src="img/sec_02-img-1.png" alt="Тучка" class="cloud-1">
                <img src="img/sec_02-img-2.png" alt="Тучка" class="cloud-2">
                <img src="img/sec_02-img-3.png" alt="Тучка" class="cloud-3">
                <img src="img/sec_02-img-4.png" alt="Тучка" class="cloud-4">
                <img src="img/sec_02-img-5.png" alt="Тучка" class="cloud-5">
                <img src="img/sec_02-img-6.png" alt="Тучка" class="cloud-6">

            </div>
        </div>
    </div>
</div>


<div id="sec_03">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2 class="header text--title"><span>Почему на детских праздниках <br> часто бывает очень скучно? </span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="sec_03-slider">
                    <div class="slide">
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>«Я справлюсь сам»</span></p>
                            <p class="text">Часто родителям просто не хватает опыта и свободного времени, чтобы создать безупречный праздник с первой же попытки. <br> В итоге вы нервничаете, артисты ведут себя неестественно, <br> все идет не так, а вечеринка разочаровывает гостей.</p>
                        </div>
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>Это не так-то просто</span></p>
                            <p class="text">Организация праздника кажется обычным делом, но за этой простотой скрываются сотни деталей. Вам придется постоянно решать непредвиденные трудности, следить, чтобы все было хорошо...Это изматывает, и праздник из веселого аттракциона превращается в настоящее испытание.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>Неискренность и наигранность</span></p>
                            <p class="text">Ребенок видит фальшь, и если окружающий его праздник выглядит как картонные декорации, то он это почувствует. Магии нет, и все происходящее кажется скучным. </p>
                        </div>
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>Шаблонный сценарий</span></p>
                            <p class="text">Часто праздник похож на утренник в детском саду: шаблонные заготовки, которые не меняются годами, уставшие актеры местного ТЮЗа в затертых костюмах...Никакого творчества.</p>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>Неаккуратная организация</span></p>
                            <p class="text">Не всем хватает опыта, чтобы контролировать ситуацию на 100%: о чем договариваться с ресторанами, диджеями, прокатчиками оборудования и декораторами. В итоге половина шоу отменяется, звуковое оборудование оказывается неисправно, а декорации выглядит не так, как ожидалось.</p>
                        </div>
                        <div class="item">
                            <p class="text--title title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.9 55.99"><defs><style>.cls-s3-1{fill:#fed325;fill-rule:evenodd;}</style></defs><path class="cls-s3-1" d="M182.18,90.74c7.62.86,11.72,6.81,16.26,12.52,4.22,6,8.87,11.75,10.5,18.63,3.59,15-16.31,25.74-30.25,24.65-12.93-.66-32-11.94-35.91-24.83-1.57-6.82,2.8-13.66,11.4-20.08C162.44,95.45,174.94,89.71,182.18,90.74Z" transform="translate(-142.45 -90.62)"/></svg><span>Непрофессиональные артисты</span></p>
                            <p class="text">Наигрыш и любительский подход к работе часто “убивают” весь праздник. Дети никогда не поверят таким актерам: будут относиться к ним с недоверием и опаской. Артисты-любители часто оказываются непунктуальными, безответственными и просто не умеют обращаться с малышами.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img class="sec_img" src="img/sec_03-img.png" alt="">
            </div>
        </div>
    </div>
</div>

<div id="sec_04">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class=" tc text--title header">Живые эмоции, <br> которые нельзя подделать...</h2>
                <div class="ytwrap">
                    <div class="youtube" id="ABBD3QE3RDI">
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.98 78.02"><defs><style>.cls-ytp-1{fill:#e9274f;}.cls-ytp-2{fill:#ff2a56;}.cls-yta-1{fill:#3bb6f8;}</style></defs><path class="cls-ytp-1" d="M179,191.51l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.74l51-31.57c4.19-2.45,3.46-5.33,3.46-5.33S183.18,194,179,191.51Z" transform="translate(-117.53 -156.48)"/><path class="cls-ytp-2" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/><path class="cls-yta-1" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_05">
    <div class="container">
        <div class="row">
            <div class="col-9">
                <h2 class="header text--title"><span>Команда молодых профессионалов, <br> которые любят деток всем сердцем</span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg></h2>
            </div>
            <div class="col-2">
                <img src="img/bl5_baloon.png" alt="Шарик" class="baloon-1">
            </div>
        </div>
        <div class="row">
            <div class="col-5 slider_col">
                <div class="slider_05">
                    <div class="slide">
                        <img src="img/sec_05-img-2.png" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="img/sec_05-img-1.png" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="img/sec_05-img-3.png" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="img/sec_05-img-4.png" alt="Image">
                    </div>
                    <div class="slide">
                        <img src="img/sec_05-img-5.png" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-6 col-offset-1">
                <div class="item item_big">
                    <p class="title_header text--title">Более 6 лет опыта</p>
                    <p class="text">Команда «Ойки» начала свою работу еще в мае <br> 2011 года. Каждый день мы растем, развиваемся <br> и создаем новые впечатления для тысяч деток.</p>
                </div>
            </div>
        </div>
        <div class="row second_row">
            <div class="col-xs col-4">
                <div class="item">
                    <p class="text--title title">Школа детских праздников</p>
                    <p class="text">Команда «Ойки» собирает людей, которые искренне любят деток и хотят создавать <br> для них незабываемые праздники. Мы обучаем ТОПовым техникам игромастерства <br> и создаем настоящих артистов.</p>
                </div>
            </div>
            <div class="col-xs col-5">
                <div class="item--margined item">
                    <p class="text--title title">Оригинальный досуг</p>
                    <p class="text">Кроме обычных аниматоров, диджея и конкурсов, <br> в арсенале «Ойки» есть бумажное, неоновое, химическое шоу, шоу мыльных пузырей, песочная анимация и еще 12 дополнительных услуг для действительно незабываемого праздника.</p>
                </div>
            </div>
            <div class="col-3">
                <img src="img/bl5_img1.png" alt="Детский праздник от студии Ойка" class="sec_img-1">
            </div>
        </div>
        <div class="row">
            <div class="col-xs col-4">
                <img src="img/bl5_img3.png" alt="Детский праздник от студии Ойка" class="sec_img-2">
            </div>
            <div class="col-xs col-5">
                <div class="item item--margined">
                    <p class="text--title title">Более 50 авторских программ</p>
                    <p class="text">Мы постоянно создаем новые программы <br> для деток с разными интересами. При создании сценария обязательно учитываются возрастные особенности ребенка. Важно, чтобы ему было интересно и весело с первой и до последней минуты праздника.</p>
                </div>
            </div>
            <div class="col-3">
                <img src="img/bl5_baloon.png" alt="Шарик" class="baloon-2">
            </div>
        </div>
    </div>
</div>

<div id="sec_06">
    <div class="container">
        <div class="col-12 tc">
            <h2 class="text--title header" >Более 700 деток</h2>
            <p class="description text--desc text--bold"> каждый месяц получают свой <br> заряд позитива и праздничного настроения</p>
        </div>
    </div>
    <div class="clients-grid js-clients-grid">
        <div class="clients-grid__inner">
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/1.png" data-lightbox="set-gallery-1"><img src="img/img-1.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/2.png" data-lightbox="set-gallery-1"><img src="img/img-2.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/3.png" data-lightbox="set-gallery-1"><img src="img/img-3.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/4.png" data-lightbox="set-gallery-1"><img src="img/img-4.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/5.png" data-lightbox="set-gallery-1"><img src="img/img-5.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/6.png" data-lightbox="set-gallery-1"><img src="img/img-6.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/7.png" data-lightbox="set-gallery-1"><img src="img/img-7.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/8.png" data-lightbox="set-gallery-1"><img src="img/img-8.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/9.png" data-lightbox="set-gallery-1"><img src="img/img-9.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/10.png" data-lightbox="set-gallery-1"><img src="img/img-10.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/11.png" data-lightbox="set-gallery-1"><img src="img/img-11.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/12.png" data-lightbox="set-gallery-1"><img src="img/img-12.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/13.png" data-lightbox="set-gallery-1"><img src="img/img-13.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/14.png" data-lightbox="set-gallery-1"><img src="img/img-14.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/15.png" data-lightbox="set-gallery-1"><img src="img/img-15.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/16.png" data-lightbox="set-gallery-1"><img src="img/img-16.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="clients-grid__column">
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/17.png" data-lightbox="set-gallery-1"><img src="img/img-17.png" alt=""></a>
                    </div>
                </div>
                <div class="clients-grid__item-container">
                    <div class="clients-grid__item">
                        <a href="img/big/18.png" data-lightbox="set-gallery-1"><img src="img/img-18.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tc">
        <a class="btn flex md-trigger" data-modal="modal_politics_four"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Смотреть все фото</span></a>
    </div>
</div>

<div id="sec_07">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <h2 class="text--title header header_main">Подарите своему ребенку <br> незабываемый праздник</h2>
            </div>
        </div>
        <div class="row item_row">
            <div class="col-5">
                <p class="text--title header tc red">Забава</p>
                <img class="sec_img simg-1" src="img/sec_07-img-1.png" alt="Праздник для детей от студии Ойка">
            </div>
            <div class="col-3">
                <ul class="list_item">
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Анимационная программа <br> с любимыми персонажами (50+ программ на выбор)</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Общая длительность 3 часа</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Шоу мыльных пузырей <br> или химии</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Мастер-класс на выбор</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Элементы костюмов на детей</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Твистинг</li>
                </ul>
                <a class="btn flex md-trigger" data-modal="modal_callback_p1"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Заказать за 4850 грн</span></a>
            </div>
            <div class="col-4">
                <ul class="list_item">
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Транспортные расходы команды</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Аквагрим</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Диджей</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Флеш-тату</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Оригинальная встреча</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Комплименты для всех гостей</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Бумажное шоу</li>
                    <li class="closed"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><defs><style>.cls-cr-1{fill:none;stroke:#ff2a56;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-cr-1" d="M126.5,199.5l9,9" transform="translate(-125 -198)"/><path class="cls-cr-1" d="M135.37,199.63l-8.74,8.74" transform="translate(-125 -198)"/></svg>Тематическая фотозона</li>
                </ul>
            </div>
            <div class="col-12 mobile">
                <a class="mobile btn flex md-trigger" data-modal="modal_callback_p1"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Заказать за 4850 грн</span></a>
            </div>
        </div>
        <div class="row item_row second_row">
            <div class="col-5">
                <p class="text--title header tc red">Сказка</p>
                <img class="sec_img simg-2" src="img/sec_07-img-2.png" alt="Праздник для детей от студии Ойка">
            </div>
            <div class="col-3">
                <ul class="list_item">
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Анимационная программа с любимыми персонажами (50+ программ на выбор)</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Общая длительность 3 часа</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Шоу мыльных пузырей или химии</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Мастер-класс на выбор</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Элементы костюмов на детей</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg>Твистинг</li>
                </ul>
                <a class="btn flex md-trigger" data-modal="modal_callback_p2"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Заказать за 8750 грн</span></a>
            </div>
            <div class="col-4">
                <ul class="list_item">
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Транспортные расходы команды</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Аквагрим</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Диджей</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Флеш-тату</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Оригинальная встреча</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 9"><defs><style>.cls-ok-1{fill:none;stroke:#fed325;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px;fill-rule:evenodd;}</style></defs><path class="cls-ok-1" d="M123,190.6l2.29,2.4,5.71-6" transform="translate(-121.5 -185.5)"/></svg> Комплименты для всех гостей</li>
                    <li><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 11"><defs><style>.cls-ph-1{fill:#A830DD;}</style></defs><path class="cls-ph-1" d="M137.53,201.69a1.5,1.5,0,0,0-1.13-.5H135l-.32-.9a1.22,1.22,0,0,0-.43-.56,1.07,1.07,0,0,0-.65-.23h-3.2a1.07,1.07,0,0,0-.65.23,1.22,1.22,0,0,0-.43.56l-.32.9h-1.4a1.5,1.5,0,0,0-1.13.5,1.68,1.68,0,0,0-.47,1.2v5.92a1.68,1.68,0,0,0,.47,1.2,1.5,1.5,0,0,0,1.13.5h8.8a1.5,1.5,0,0,0,1.13-.5,1.68,1.68,0,0,0,.47-1.2v-5.92A1.68,1.68,0,0,0,137.53,201.69ZM134,207.94a2.69,2.69,0,0,1-4,0,3.07,3.07,0,0,1,0-4.18,2.69,2.69,0,0,1,4,0,3.07,3.07,0,0,1,0,4.18Zm-2-3.68a1.41,1.41,0,0,0-1.06.47,1.65,1.65,0,0,0,0,2.25,1.44,1.44,0,0,0,2.13,0,1.65,1.65,0,0,0,0-2.25A1.41,1.41,0,0,0,132,204.25Z" transform="translate(-126 -199.5)"/></svg>Тематическая фотозона</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.99 12.01"><defs><style>.cls-pr-1{fill:#A830DD;}</style></defs><path class="cls-pr-1" d="M145.38,219.1l-11,6c-.45.25-.44.61,0,.8l1.41.58a1.76,1.76,0,0,0,1.6-.24l6.13-5c.4-.33.45-.28.1.11l-4.84,5.35a.61.61,0,0,0,.23,1l.17.07,1.73.71,1.56.66.86.37h0s.11-.42.25-.93l2.38-9C146.09,219.07,145.83,218.85,145.38,219.1Zm-6.56,9.25-1.08-.46c-.47-.2-.7,0-.51.52,0,0,1,2.5,1,2.59s1-1.48,1-1.48A.78.78,0,0,0,138.82,228.35Z" transform="translate(-134 -219)"/></svg>Бумажное шоу</li>
                </ul>
            </div>
            <div class="col-12 mobile">
                <a class="btn mobile flex md-trigger" data-modal="modal_callback_p2"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Заказать за 8750 грн</span></a>
            </div>
        </div>
        <div class="row item_row_last item_row">
            <div class="col-12">
                <div class="item tc">
                    <p class="text--title header red">Магия</p>
                    <p class="text">Уникальный праздник, который создается <br> командой “Ойка”, исходя из Ваших пожеланий, <br> возможностей и интересов ребенка. </p>
                    <a class="btn flex md-trigger" data-modal="modal_callback_p3"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 66"><defs><style>.cls-btnm-1{fill:#e81f49;}.cls-btnm-1,.cls-btnm-2{fill-rule:evenodd;}.cls-btnm-2{fill:#ff2a56;}</style></defs><path class="cls-btnm-1" d="M74.95,165s-64.39-.08-59.7,34.76C18.81,226.25,60.62,229,85.74,226c17.92-2.15,77.26-8.74,118.35-5.22,41.7,3.57,113.11,5.32,134.61.58s35.73-10.53,36.3-22.09c-.28-16.28-11.5-34.94-73.44-32.31s-59.44,4.15-135.85,1.43C132.51,167.23,74.95,165,74.95,165Z" transform="translate(-15 -161)"/><path class="cls-btnm-2" d="M74.95,161s-64.39-.08-59.7,34.76C18.81,222.23,60.62,225,85.74,222c17.92-2.15,77.26-8.74,118.35-5.22,41.7,3.57,113.11,5.32,134.61.58s35.73-10.53,36.3-22.09c-.28-16.27-11.5-34.94-73.44-32.31s-59.44,4.15-135.85,1.43C132.51,163.21,74.95,161,74.95,161Z" transform="translate(-15 -161)"/></svg><span>Рассчитать индивидуально</span></a>

                    <a class="btn  mobile flex md-trigger" data-modal="modal_callback_p3"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 360 66"><defs><style>.cls-btnm-1{fill:#e81f49;}.cls-btnm-1,.cls-btnm-2{fill-rule:evenodd;}.cls-btnm-2{fill:#ff2a56;}</style></defs><path class="cls-btnm-1" d="M74.95,165s-64.39-.08-59.7,34.76C18.81,226.25,60.62,229,85.74,226c17.92-2.15,77.26-8.74,118.35-5.22,41.7,3.57,113.11,5.32,134.61.58s35.73-10.53,36.3-22.09c-.28-16.28-11.5-34.94-73.44-32.31s-59.44,4.15-135.85,1.43C132.51,167.23,74.95,165,74.95,165Z" transform="translate(-15 -161)"/><path class="cls-btnm-2" d="M74.95,161s-64.39-.08-59.7,34.76C18.81,222.23,60.62,225,85.74,222c17.92-2.15,77.26-8.74,118.35-5.22,41.7,3.57,113.11,5.32,134.61.58s35.73-10.53,36.3-22.09c-.28-16.27-11.5-34.94-73.44-32.31s-59.44,4.15-135.85,1.43C132.51,163.21,74.95,161,74.95,161Z" transform="translate(-15 -161)"/></svg><span>Рассчитать индивидуально</span></a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>


<div id="sec_08">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <h2 class="text--title header">Вам кажется, что это <br> слишком дорогое <br> удовольствие?</h2>
                <p class="text">Задумайтесь: сколько средств уходит на ваш досуг, гаджеты, посиделки с друзьями. Так ли это важно? Ведь все это пройдет, забудется, сольется с рутиной. </p>
                <p class="text">А ваш ребенок запомнит такой праздник на всю <br> свою жизнь. Вы можете вместе создать семейные воспоминания на долгие годы и вложить <br> свои силы в самого близкого человека. </p>
            </div>
            <div class="col-7">
                <img src="img/sec_08-img.png" class="sec_img" alt="Лучший детский праздник">
            </div>
        </div>
    </div>
</div>


<div id="sec_09">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text--title header">Оставьте заявку на любую программу <br> сейчас и получите световую открыточку <br> для ребенка в подарок!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">


            <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>

                    <!-- Hidden DB Fields -->
                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"  name="orderType" value="Zayavka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>
                    
                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Заявка на любую программу - Световая открыточка в подарок!'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                     <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                    <input type="hidden" name="form_type" value="secondForm_present"> 
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="Email" class="form-control">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>

                    <div class="clear"></div>
                </form>

                <div class="item">
                    <p class="text--title title_header">Праздников <br> уже проведено</p>
                    <div class="counter"><span class="text--title counter_current">1234</span> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.96 127"><defs><style>.cls-coun-1{fill:#ff2a56;fill-rule:evenodd;}</style></defs><path class="cls-coun-1" d="M208.42,126.32c33.28,1.95,63.43,11.66,83.22,24.58,18.45,13.55,31.36,28.92,33.63,45.86,4.7,34-71.19,56.62-132.12,55.74-110.38,0-139.58-27-156.85-56.16-6.86-15.43-8.15-41.58,29.4-56.09C101.84,126.29,176.81,124,208.42,126.32Z" transform="translate(-32.51 -125.53)"/></svg></div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_10">
    <div class="container">
        <div class="row">
            <div class="col-offset-7 col-5">
                <div class="item">
                    <p class="text--title title">Мы гарантируем, что дети <br> не захотят вот так просто <br> отпускать любимых героев.</p>
                    <p class="text">Если Ваш ребенок останется равнодушен <br> к их уходу — мы не возьмем с Вас деньги <br> за работу артистов!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_11">
    <div class="container">
        <div class="row">
            <div class="col-12 tc">
                <h2 class="text--title header">Праздник, который вы вспомните <br> с теплом и улыбкой...</h2>
            </div>
        </div>
        <div class="row slider_11">
            <div class="slide clearfix">
                <div class="col-6">
                    <div class="youtube youtube-1" id="QbRgK1bhjBc">
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.98 78.02"><defs><style>.cls-ytp-1{fill:#e9274f;}.cls-ytp-2{fill:#ff2a56;}.cls-yta-1{fill:#3bb6f8;}</style></defs><path class="cls-ytp-1" d="M179,191.51l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.74l51-31.57c4.19-2.45,3.46-5.33,3.46-5.33S183.18,194,179,191.51Z" transform="translate(-117.53 -156.48)"/><path class="cls-ytp-2" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/><path class="cls-yta-1" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/></svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="name text--title">Мама Аня&nbsp;</p>
                        <div class="dialog flex"><p class="text">Каждый год мы даже не думаем, где отмечать — мы просто приходим сюда, потому что здесь всегда весело и нравится детям.</p></div>
                    </div>
                </div>
            </div>

            <div class="slide clearfix">
                <div class="col-6">
                    <div class="youtube youtube-2" id="KIecfrfKAoc">
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.98 78.02"><defs><style>.cls-ytp-1{fill:#e9274f;}.cls-ytp-2{fill:#ff2a56;}.cls-yta-1{fill:#3bb6f8;}</style></defs><path class="cls-ytp-1" d="M179,191.51l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.74l51-31.57c4.19-2.45,3.46-5.33,3.46-5.33S183.18,194,179,191.51Z" transform="translate(-117.53 -156.48)"/><path class="cls-ytp-2" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/><path class="cls-yta-1" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/></svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="name text--title">Папа Александр</p>
                        <div class="dialog flex"><p class="text">Очень классный праздник. Детям очень понравился, все рады и счастливы. Рекомендую сюжет "Алиса в стране чудес"!</p></div>
                    </div>
                </div>
            </div>

            <div class="slide clearfix">
                <div class="col-6">
                    <div class="youtube youtube-3" id="f_y5f152eVI">
                        <svg class="play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.98 78.02"><defs><style>.cls-ytp-1{fill:#e9274f;}.cls-ytp-2{fill:#ff2a56;}.cls-yta-1{fill:#3bb6f8;}</style></defs><path class="cls-ytp-1" d="M179,191.51l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.74l51-31.57c4.19-2.45,3.46-5.33,3.46-5.33S183.18,194,179,191.51Z" transform="translate(-117.53 -156.48)"/><path class="cls-ytp-2" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/><path class="cls-yta-1" d="M179,188.79l-51-31.57c-1.51-.88-3.38-.74-4.8-.74-5.66,0-5.63,4.29-5.63,5.38v64.53c0,.92,0,5.38,5.63,5.38,1.41,0,3.29.15,4.8-.73l51-31.57c4.19-2.45,3.46-5.34,3.46-5.34S183.18,191.24,179,188.79Z" transform="translate(-117.53 -156.48)"/></svg>
                    </div>
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="name text--title">Катя, Олеся и Анастасия</p>
                        <div class="dialog flex"><p class="text">Вы крутые! Спасибо большое. Отдельное спасибо за классные дипломы.</p></div>
                    </div>
                </div>
            </div>

            <div class="slide clearfix">
                <div class="col-6">
                    <img src="img/testiomonial-2.png" alt="">
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="name text--title">Константин Магалецкий</p>
                        <div class="dialog flex">
                            <p class="text">Детский праздник - просто супер! Всем советую! " Мне 75 лет и это лучший день рождения на котором я была"- сказала моя Мама :)</p>
                        </div>
                        <a target="_blank" href="https://www.facebook.com/konstantin.luganskiy?fref=ts" class="facebook">Facebook</a>
                    </div>
                </div>
            </div>

            <div class="slide clearfix">
                <div class="col-6">
                    <img src="img/testiomonial-1.png" alt="">
                </div>
                <div class="col-6">
                    <div class="item">
                        <p class="name text--title">Александра Говоруха</p>
                        <div class="dialog flex">
                            <p class="text">Я впервые доверила празднование детского ДР профессионалам. Было все: красиво украшенный стол, танцы и игры, аниматоры в образах любимых героев. Спасибо, Вера Стеценко, за твой бизнес, который сделал сегодня счастливым 7 детей и как минимум 1 маму.</p>
                        </div>
                        <a target="_blank" href="https://www.facebook.com/Alexa.govoruha?fref=ts" class="facebook">Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="sec_12">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="text--title header"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>Всего 5 простых шагов</span></h2>
                <p class="description text--desc text--bold">отделяют вас от яркого праздника, <br> который ваш ребенок будет восторженно <br> вспоминать еще очень долго</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 col-offset-7">
                <div class="item item-1">
                    <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>01</span></p>
                    <p class="text--title title">Заявка и консультация</p>
                    <p class="text">Вы оставляете заявку на проведение праздника. Мы общаемся, узнаем интересах ребенка и его гостей, чтобы создать действительно яркий ивент</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-offset-2">
                <div class="item item-2">
                    <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>02</span></p>
                    <p class="text--title title">Предварительная работа</p>
                    <p class="text">На основе ваших пожеланий, мы бронируем <br> дату, артистов и обсуждаем общую <br> концепцию праздника</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 col-offset-7">
                <div class="item item-3">
                    <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>03</span></p>
                    <p class="text--title title">Предоплата</p>
                    <p class="text">Вы вносите предоплату любым <br> удобным вам способом, и команда <br> начинает подготовку. Мы делаем все, <br> чтобы вечеринка была незабываемой</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="item item-4">
                    <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>04</span></p>
                    <p class="text--title title">Ожидание праздника</p>
                    <p class="text">Мы сделаем ожидание наполненным <br> и ярким: будем отправлять письма <br> и открытки от любимых героев, отправим приглашения всем гостям и подарим вам календарь ожидания. Вы вместе сможете отсчитывать деньки до Того Самого Дня. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-offset-6">
                <div class="item item-5">
                    <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>05</span></p>
                    <p class="text--title title">Проведение мероприятия</p>
                    <p class="text">Ребенок будет светиться от счастья <br> и восторженно повторять, что герои настоящие. Этот день пройдет безупречно: все, что вам нужно — приехать на место праздника и принести <br> с собой хорошее настроение.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-5 col-offset-1 off">
                <div class="item item-6">
                    <p class="step_number"><img src="img/sec_12-img.png" alt="Простые шаги праздника"></p>
                    <p class="text--title title">Приятное послевкусие</p>
                    <p class="text">И даже после праздника, ребенок будет вспоминать его с улыбкой, радоваться и наслаждаться шлейфом из положительных эмоций и искреннего “А помнишь?”</p>
                </div>
            </div>
        </div>
        <div class="row mobile">
            <div class="col-12">
                <div class="slider_12_mobile">
                    <div class="item">
                        <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>01</span></p>
                        <p class="text--title title">Заявка и консультация</p>
                        <p class="text">Вы оставляете заявку на проведение праздника. Мы общаемся, узнаем интересах ребенка и его гостей, чтобы создать действительно яркий ивент</p>
                    </div>
                    <div class="item">
                        <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>02</span></p>
                        <p class="text--title title">Предварительная работа</p>
                        <p class="text">На основе ваших пожеланий, мы бронируем <br> дату, артистов и обсуждаем общую <br> концепцию праздника</p>
                    </div>
                    <div class="item">
                        <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>03</span></p>
                        <p class="text--title title">Предоплата</p>
                        <p class="text">Вы вносите предоплату любым <br> удобным вам способом, и команда <br> начинает подготовку. Мы делаем все, <br> чтобы вечеринка была незабываемой</p>
                    </div>
                    <div class="item">
                        <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>04</span></p>
                        <p class="text--title title">Ожидание праздника</p>
                        <p class="text">Мы сделаем ожидание наполненным <br> и ярким: будем отправлять письма <br> и открытки от любимых героев, отправим приглашения всем гостям и подарим вам календарь ожидания. Вы вместе сможете отсчитывать деньки до Того Самого Дня. </p>
                    </div>
                    <div class="item">
                        <p class="step_number"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218 223.5"><defs><style>.cls-s2h-1{fill:#fed325;}.cls-s2h-1,.cls-s2h-2{fill-rule:evenodd;}.cls-s2h-2{fill:none;stroke:#fff;stroke-miterlimit:10;opacity:0.5;}</style></defs><path class="cls-s2h-1" d="M184,78.7c56.49,0,102.28,45.57,102.28,101.78S240.53,282.26,184,282.26,81.76,236.7,81.76,180.48,127.56,78.7,184,78.7Z" transform="translate(-81.26 -78.7)"/><path class="cls-s2h-2" d="M190.26,85.8c59.92,0,108.5,48.33,108.5,108s-48.58,108-108.5,108-108.5-48.33-108.5-108S130.34,85.8,190.26,85.8Z" transform="translate(-81.26 -78.7)"/></svg><span>05</span></p>
                        <p class="text--title title">Проведение мероприятия</p>
                        <p class="text">Ребенок будет светиться от счастья <br> и восторженно повторять, что герои настоящие. Этот день пройдет безупречно: все, что вам нужно — приехать на место праздника и принести <br> с собой хорошее настроение.</p>
                    </div>
                    <div class="item">
                        <p class="step_number"><img src="img/sec_12-img.png" alt="Простые шаги праздника"></p>
                        <p class="text--title title">Приятное послевкусие</p>
                        <p class="text">И даже после праздника, ребенок будет вспоминать его с улыбкой, радоваться и наслаждаться шлейфом из положительных эмоций и искреннего “А помнишь?”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec_13">
    <div class="container">
        <div class="row">
            <div class="tc col-12">
                <h2 class="text--title header">Если у вас остались <br> вопросы, то задайте их</h2>
                <p class="description text--desc">в форме ниже, и менеджер «Ойки» свяжется <br> с вами как можно быстрее</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 tc">


               <form  method="POST"  name=WebToLeads2437335000000630115 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>

                    <!-- Hidden DB Fields -->
                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"  name="orderType" value="Vopros">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e229341782f1f3e430da412d928247fa3a7cf0'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>
                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Задать вопрос'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                     <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                    <input type="hidden" name="form_type" value="questionForm"> 
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="Email" class="form-control">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field textarea_field">
                        <textarea name="Description" required="" placeholder="Ваш вопрос" class="form-control"></textarea>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.3 97.53"><defs><style>.cls-ta-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-ta-1" d="M308.12,724.5s-46.53-.25-48.42,29.16c-2.12,32.85,6.13,71.43,57.18,67,14.59-1.26,62.66-7.33,96-4.38,33.82,3,91.41,2.47,109.18.49,35.58-4,29-53.84,29.44-63.53-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C354.81,726.35,308.12,724.5,308.12,724.5Z" transform="translate(-258.9 -724)"/></svg>
                    </span>


                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Задать вопрос</span></button>

                    <div class="clear"></div>
                </form>

                <img src="img/sec_02-img-1.png" alt="Тучка" class="cloud-1">
                <img src="img/sec_02-img-2.png" alt="Тучка" class="cloud-2">
                <img src="img/sec_02-img-3.png" alt="Тучка" class="cloud-3">
                <img src="img/sec_02-img-4.png" alt="Тучка" class="cloud-4">
                <img src="img/sec_02-img-5.png" alt="Тучка" class="cloud-5">
                <img src="img/sec_02-img-6.png" alt="Тучка" class="cloud-6">
            </div>
        </div>
    </div>
</div>

<div id="sec_14">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="img/logo.png" alt="Ойка" class="logo">

                <div class="phones_block">
                    <a href="tel:+380981629007" class="tel">+380 (98) 162-90-07</a>

                    <a class="call_back md-trigger" data-modal="modal_callback"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42"><defs><style>.cls-cb-1{fill:#e9274f;}.cls-cb-2{fill:#ff2a56;}.cls-cba-1{fill:#3bb6f8;fill-rule:evenodd;}</style></defs><path class="cls-cb-1" d="M28.8 4.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 7.9 28.8 4.5Z"/><path class="cls-cb-2" d="M28.8 1.5s-25.2-8.3-28.5 14.4 18.1 24.1 25.2 22.8 16.3-14.5 16.4-20.4S39 4.9 28.8 1.5Z"/><path class="cls-cba-1" d="M163.35,152s-25.24-8.27-28.5,14.39,18.09,24.12,25.21,22.78,16.28-14.51,16.44-20.39S173.47,155.43,163.35,152Z" transform="translate(-134.51 -150.5)"/></svg><span><img src="img/phone.png" alt=""></span></a>
                    <div class="clear"></div>
                </div>

                <ul class="social">
                    <li><a target="_blank" href="https://www.facebook.com/oyka.studio/?ref=aymt_homepage_panel"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 26"><title>icon_fb</title><path d="M375,578.5h-3.36c-3.77,0-6.21,2.51-6.21,6.4v3H362a.53.53,0,0,0-.53.53v4.27a.53.53,0,0,0,.53.53h3.38V604a.53.53,0,0,0,.53.53h4.4a.53.53,0,0,0,.53-.53V593.18h3.95a.53.53,0,0,0,.53-.53v-4.27a.53.53,0,0,0-.53-.53h-3.95v-2.5c0-1.2.29-1.81,1.84-1.81H375a.53.53,0,0,0,.53-.53v-4A.53.53,0,0,0,375,578.5Z" transform="translate(-361.5 -578.5)"/></svg></a></li>
                    <li><a target="_blank" href="https://vk.com/club58496230"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 24.02"><title>icon_vk</title><path d="M410.29,831.18a2.91,2.91,0,0,0-.14-.27,21.57,21.57,0,0,0-4-4.84l0,0,0,0,0,0h0a24.58,24.58,0,0,1-1.69-1.8,1.76,1.76,0,0,1-.29-1.78,16.69,16.69,0,0,1,1.87-2.87l1.35-1.86q3.6-5,3.12-6.44l-.12-.22a1.21,1.21,0,0,0-.65-.36,3.13,3.13,0,0,0-1.33-.06l-6,0a.75.75,0,0,0-.42,0l-.27.07-.1.05-.08.07a1,1,0,0,0-.23.23,1.54,1.54,0,0,0-.21.38,36.5,36.5,0,0,1-2.23,4.93q-.77,1.36-1.42,2.36a11.23,11.23,0,0,1-1.08,1.47,7.7,7.7,0,0,1-.79.76c-.24.19-.42.27-.54.24l-.35-.09a1.43,1.43,0,0,1-.47-.54,2.48,2.48,0,0,1-.24-.85q-.06-.51-.07-.89c0-.25,0-.6,0-1.05s0-.76,0-.92q0-.83,0-1.81t.05-1.54c0-.38,0-.78,0-1.2a5.32,5.32,0,0,0-.07-1,3.56,3.56,0,0,0-.22-.7,1.16,1.16,0,0,0-.43-.53,2.32,2.32,0,0,0-.7-.3,13.15,13.15,0,0,0-2.81-.29q-3.87,0-5,.53a2.82,2.82,0,0,0-.79.66c-.25.32-.28.5-.1.53a2.52,2.52,0,0,1,1.77.94l.13.26a4.33,4.33,0,0,1,.29,1,10.65,10.65,0,0,1,.19,1.6,17.94,17.94,0,0,1,0,2.74q-.1,1.14-.2,1.77a3.68,3.68,0,0,1-.28,1,4.37,4.37,0,0,1-.25.48.38.38,0,0,1-.1.11,1.52,1.52,0,0,1-.56.11,1.29,1.29,0,0,1-.71-.31,5.15,5.15,0,0,1-.86-.84,11.24,11.24,0,0,1-1-1.5q-.56-1-1.17-2.28l-.33-.63q-.31-.61-.85-1.79t-1-2.27a1.44,1.44,0,0,0-.5-.7l-.1-.07a1.45,1.45,0,0,0-.33-.18,2,2,0,0,0-.48-.14l-5.71,0a1.4,1.4,0,0,0-1.19.42l-.08.13a.74.74,0,0,0-.06.35,1.83,1.83,0,0,0,.13.59q1.25,3.09,2.72,6t2.55,4.62q1.08,1.75,2.21,3.31t1.49,2c.24.29.43.51.57.66l.52.53a12.49,12.49,0,0,0,1.47,1.26,25.28,25.28,0,0,0,2.14,1.45A11.27,11.27,0,0,0,387,833a9,9,0,0,0,3,.36h2.4a1.62,1.62,0,0,0,1.1-.48l.08-.11a1.5,1.5,0,0,0,.16-.41,2.33,2.33,0,0,0,.07-.6,7.58,7.58,0,0,1,.14-1.7,4.63,4.63,0,0,1,.35-1.14,2.82,2.82,0,0,1,.45-.65,1.79,1.79,0,0,1,.35-.32l.17-.08a1.28,1.28,0,0,1,1.18.34,7,7,0,0,1,1.27,1.27q.59.76,1.43,1.7a10,10,0,0,0,1.46,1.4l.42.26a5,5,0,0,0,1.08.48,2.22,2.22,0,0,0,1.17.11l5.33-.09a2.33,2.33,0,0,0,1.23-.27,1.07,1.07,0,0,0,.52-.6,1.78,1.78,0,0,0,0-.75A2.88,2.88,0,0,0,410.29,831.18Z" transform="translate(-370.5 -809.49)"/></svg></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/channel/UCUUty6yOevhy7A-t68eno_Q"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 24"><title>icon_youtube</title><path d="M339.17,818.56c-1.23-1.46-3.49-2.06-7.82-2.06H315.65c-4.43,0-6.73.64-8,2.19s-1.19,3.76-1.19,6.85v5.9c0,6,1.41,9,9.15,9h15.71c3.75,0,5.83-.53,7.18-1.82s2-3.49,2-7.23v-5.9C340.5,822.28,340.41,820,339.17,818.56Zm-10.85,10.76-7.13,3.74a1.1,1.1,0,0,1-.51.12,1.08,1.08,0,0,1-.57-.16,1.1,1.1,0,0,1-.53-.94v-7.45a1.1,1.1,0,0,1,1.6-1l7.13,3.72a1.1,1.1,0,0,1,0,2Z" transform="translate(-306.5 -816.5)"/></svg></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/oyka_studio/ "><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>icon_inst</title><path d="M312.08,867h17.84a3,3,0,0,1,3.08,3.08v17.84a3,3,0,0,1-3.08,3.08H312.08a3,3,0,0,1-3.08-3.08V870.08a3,3,0,0,1,3.08-3.08Zm14.4,2.67a1.08,1.08,0,0,0-1.08,1.08v2.59a1.08,1.08,0,0,0,1.08,1.08h2.71a1.08,1.08,0,0,0,1.08-1.08v-2.59a1.08,1.08,0,0,0-1.08-1.08Zm3.8,7.48h-2.11a7,7,0,0,1,.31,2.06,7.46,7.46,0,0,1-14.92,0,7,7,0,0,1,.31-2.06h-2.2v10.14a1,1,0,0,0,1,1h16.71a1,1,0,0,0,1-1V877.15ZM321,874.28a4.67,4.67,0,1,0,4.82,4.67A4.75,4.75,0,0,0,321,874.28Z" transform="translate(-309 -867)"/></svg></a></li>
                </ul>


            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="politics">
                    <a class="md-trigger" data-modal="modal_politics_one">Политика  конфиденциальности</a>
                    <a class="md-trigger" data-modal="modal_politics_two">Отказ от  ответственности</a>
                    <a class="md-trigger" data-modal="modal_politics_three">Согласие с  рассылкой</a>
                </div>
            </div>
            <div class="col-2">
                <a class="logo_rezart" target="_blank" href="http://rezart.agency/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="200 200 600 392"><path d="M216.8 247.3c150.2 0 147.2 0 156.1 0 50.4 0 100.2 42.1 100.4 102.3 0.1 56.2-43.8 91.1-72.4 98 0.9 0 38.4 66.8 38.4 66.8l172.2-291.2 179.5 305.3c5.4 9.9 8.8 15.6 11.3 22.7 5.3 15.3-8.8 25.6-18.7 25.7 -9.7 0.1-14.6-3.6-24.4-8.9l-108.1-62 -39.9-74.4 108.4 63L610.6 310.8c0 0-139.3 237.5-144 244.6 -8.1 12.1-13.4 21.6-28.4 21.6 -14.6 0-21.4-9.6-29-21.3 -1.7-3.4-89.8-148.9-89.8-148.9 32.1 0.1 28.9 0.1 54.8 0.1 21.1 0 54-18.6 54-55.7 0-22.2-17.1-56.4-57.9-56.4 -45.2 0-126.3 0-126.3 0L216.8 247.3z"/><path d="M217.1 351l47.7 83.4 -0.3 119.8c0 0 0.5 22.5-24.2 22.9 -0.3-0.3-23.7 1.8-23.7-22.2C216.7 530.8 217.1 351 217.1 351z"/><path d="M264.9 434.4l-0.1 119c0 0 0.4 23.3-24.3 23.7"/></svg></a>
                <a class="footer-fire" target="_blank" href="http://willcatchfire.com/"></a>
            </div>
        </div>
    </div>
</footer>


<div class="hidden">
    <div class="md-modal md-effect-1" id="modal_callback">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title">Обратный звонок</h2>
                <p class="h2_desc text--desc description">Оставьте заявку и мы вам перезвоним в ближайшее время</p>
            </div>
            <div>


                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>
                    <!-- Hidden DB Fields -->

                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"  name="orderType" value="CallBack">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Обратный звонок'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru"> 
                    <input type="hidden" name="form_type" value="popUp_callback">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>


                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-1" id="modal_callback_cons">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title">Заявка на консультацию</h2>
                <p class="h2_desc text--desc description">Оставьте заявку и мы вам перезвоним в ближайшее время</p>
            </div>
            <div>

                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>
                    <!-- Hidden DB Fields -->

                    <input type="hidden"  name="registrationType" value="default_registration">
                    <input type="hidden"  name="orderType" value="Zayavka_consult">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Заявка на консультацию'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru"> 
                    <input type="hidden" name="form_type" value="popUp_consult">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>


                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-1" id="modal_callback_p1">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title">Заказать пакет «Забава»</h2>
                <p class="h2_desc text--desc description">Оставьте заявку и мы вам перезвоним в ближайшее время</p>
            </div>
            <div>


                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>

                     <input type="hidden"  name="registrationType" value="zabava">
                    <input type="hidden"  name="orderType" value="Zayavka_zabava">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                     <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                     <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                     <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                     <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                     <input type='text' style='display:none;'  name='Last Name' value='_'/>
                     <input type='text' style='display:none;'  name='LEADCF1' value='Забава - 4850грн.'/>  
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                     <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru"> 
                    
                    <input type="hidden" name="form_type" value="popUp_zabava ">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="Email" class="form-control">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>


                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-1" id="modal_callback_p2">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title">Заказать пакет «Сказка»</h2>
                <p class="h2_desc text--desc description">Оставьте заявку и мы вам перезвоним в ближайшее время</p>
            </div>
            <div>

 
                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>
                    <!-- Hidden DB Fields -->

                    <input type="hidden"  name="registrationType" value="skazka">
                    <input type="hidden"  name="orderType" value="Zayavka_skazka">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Сказка - 8750грн.'/> 
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru"> 
                    <input type="hidden" name="form_type" value="popUp_skazka">
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="Email" class="form-control">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <button type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>


                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-1" id="modal_callback_p3">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title">Заказать пакет «Магия»</h2>
                <p class="h2_desc text--desc description">Оставьте заявку и мы вам перезвоним в ближайшее время</p>
            </div>
            <div>

                <form  method="POST"  name=WebToLeads2437335000000606067 class="form-inline db-form" action="javascript:void(null); return checkMandatory()" accept-charset='UTF-8'>
                    <!-- Hidden DB Fields -->

                    <input type="hidden"  name="registrationType" value="magiya">
                    <input type="hidden"  name="orderType" value="Zayavka_magiya">
                    <input type="hidden" name="page_url" value="<?php echo $data['page_url']; ?>">
                    <input type="hidden" name="user_agent" value="<?php echo $user_agent; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $data['utm_source']; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo $data['utm_campaign']; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $data['utm_medium']; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo $data['utm_term']; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo $data['utm_content']; ?>">
                    <input type="hidden" name="ref" value="<?php echo $data['ref']; ?>">
                    <input type="hidden" name="ip_address" value="<?php echo $data['ip_address']; ?>">
                    <input type="hidden" name="city" value="">
                    <input type="hidden" name="name" value="">
                    <input type="hidden" name="client_id" value="<?php echo $data['client_id']; ?>">
                    <input type="hidden" name="utmcsr" value="<?php echo $data['utmcsr']; ?>">
                    <input type="hidden" name="utmccn" value="<?php echo $data['utmccn']; ?>">
                    <input type="hidden" name="utmcmd" value="<?php echo $data['utmcmd']; ?>">
                    <input type="hidden" name="click_id" value="<?php echo $data['click_id']; ?>">
                    <input type="hidden" name="affiliate_id" value="<?php echo $data['affiliate_id']; ?>"> 

                    <!-- Zoho -->
                    <input type='text' style='display:none;' name='xnQsjsdp' value='35bdf9c4d51215ec6bdd977bcc1b854ff69d926894f09a1a3a725aa0016e4fd8'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='cfbe9d007ebae16767227dd644e22934ae2c1c34a1198c47470478e0ed337758'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;'  name='Last Name' value='_'/>
                    <input type='text' style='display:none;'  name='LEADCF1' value='Магия'/>
                    <!-- Zoho -->

                    <!-- END Hidden DB Fields -->

                    <!-- Hidden Required Fields -->
                    <input type="hidden" name="project_name" value="Oyka">
                    <input type="hidden" name="admin_email" value="alien_202@mail.ru">
                    <input type="hidden" name="form_type" value="popUp_magiya"> 
                    <!-- END Hidden Required Fields -->

                    <span class="field">
                        <input type="text" class="form-control" name="First Name" required=""  placeholder="Ваше имя " />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <span class="field">
                        <input type="email" required="" placeholder="Ваш E-Mail" name="Email" class="form-control">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>


                    <span class="field">
                        <input placeholder="Ваш телефон" type="tel" class="form-control" name="Phone" required="">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.99 53"><defs><style>.cls-in-1{fill:none;stroke-miterlimit:10;fill-rule:evenodd;}</style></defs><path class="cls-in-1" d="M297.12,688.5s-52.23-.07-48.42,29.16c2.89,22.21,36.8,24.56,57.18,22,14.54-1.81,62.66-7.33,96-4.38,33.82,3,91.74,4.46,109.18.49s29-8.83,29.44-18.53c-.23-13.66-9.33-29.31-59.56-27.11s-48.21,3.48-110.19,1.2C343.81,690.35,297.12,688.5,297.12,688.5Z" transform="translate(-248 -688)"/></svg>
                    </span>

                    <button name="send" type="submit" class="btn" ><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 293.99 66"><defs><style>.cls-btna-1{fill:#3bb6f8;fill-rule:evenodd;}.cls-btn-1{fill:#e81f49;}.cls-btn-1,.cls-btn-2{fill-rule:evenodd;}.cls-btn-2{fill:#ff2a56;}</style></defs><path class="cls-btn-1" d="M105,154s-52.58-.08-48.76,34.75C59.11,215.25,93.26,218,113.77,215c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58S349.54,199.86,350,188.3c-.23-16.27-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,156.23,105,154,105,154Z" transform="translate(-56 -150)"/><path class="cls-btn-2" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/><path class="cls-btna-1" d="M105,150s-52.58-.08-48.76,34.76C59.11,211.23,93.26,214,113.77,211c14.64-2.15,63.09-8.74,96.65-5.22,34.05,3.57,92.37,5.32,109.93.58s29.18-10.53,29.64-22.09c-.23-16.28-9.39-34.94-60-32.31s-48.54,4.15-110.94,1.43C152,152.21,105,150,105,150Z" transform="translate(-56 -150)"/></svg><span>Получить консультацию</span></button>


                    <div class="clear"></div>


                </form>

                <div class="md_bottom">
                    <p class="tc t_small"><i class="fa fa-lock"></i>  *Ваши данные никогда не будут переданы 3-м лицам</p>
                </div>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_four">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>

            <div class="titlebox">
                <h2 class="text--title title tc">Галерея</h2>
            </div>

            <div class="md_content">
                <a href="img/gallery/big/1.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-1.png" alt=""></a>
                <a href="img/gallery/big/2.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-2.png" alt=""></a>
                <a href="img/gallery/big/3.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-3.png" alt=""></a>
                <a href="img/gallery/big/4.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-4.png" alt=""></a>
                <a href="img/gallery/big/5.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-5.png" alt=""></a>
                <a href="img/gallery/big/6.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-6.png" alt=""></a>
                <a href="img/gallery/big/7.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-7.png" alt=""></a>
                <a href="img/gallery/big/8.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-8.png" alt=""></a>
                <a href="img/gallery/big/9.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-9.png" alt=""></a>
                <a href="img/gallery/big/10.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-10.png" alt=""></a>
                <a href="img/gallery/big/11.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-11.png" alt=""></a>
                <a href="img/gallery/big/12.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-12.png" alt=""></a>
                <a href="img/gallery/big/13.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-14.png" alt=""></a>
                <a href="img/gallery/big/15.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-15.png" alt=""></a>
                <a href="img/gallery/big/16.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-16.png" alt=""></a>
                <a href="img/gallery/big/17.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-17.png" alt=""></a>
                <a href="img/gallery/big/18.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-18.png" alt=""></a>
                <a href="img/gallery/big/19.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-19.png" alt=""></a>
                <a href="img/gallery/big/20.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-20.png" alt=""></a>
                <a href="img/gallery/big/21.jpg" data-lightbox="set-gallery-2"><img src="img/gallery/img-21.png" alt=""></a>
            </div>
        </div>
    </div>


    <div class="md-modal md-effect-8 md_large" id="modal_politics_one">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title tc">Политика конфиденциальности</h2>
            </div>
            <div class="md_content tl">
                <p>Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.</p>
                <p>Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в «Согласии с рассылкой»</p>
                <p><strong>Какие данные собираются на сайте</strong></p>
                <p>При добровольной регистрации на получение рассылки вы отправляете свое Имя и E-mail через форму регистрации.</p>
                <p><strong>С какой целью собираются эти данные</strong></p>
                <p>Имя используется для обращения лично к вам, а ваш e-mail для отправки вам писем рассылок, новостей, полезных материалов, коммерческих предложений.</p>
                <p>Ваши имя и e-mail не передаются третьим лицам, ни при каких условиях кроме случаев, связанных с исполнением требований законодательства.</p>
                <p>Вы можете отказаться от получения писем рассылки и удалить из базы данных свои контактные данные в любой момент, кликнув на ссылку для отписки, присутствующую в каждом письме.</p>
                <p><strong>Как эти данные используются</strong></p>
                <p>При помощи этих данных собирается информация о действиях посетителей на сайте с целью улучшения его содержания, улучшения функциональных возможностей сайта и, как следствие, создания качественного контента и сервисов для посетителей.</p>
                <p>Вы можете в любой момент изменить настройки своего браузера так, чтобы браузер блокировал все файлы или оповещал об отправке этих файлов. Учтите при этом, что некоторые функции и сервисы не смогут работать должным образом.</p>
                <p><strong>Как эти данные защищаются</strong></p>
                <p>Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет.</p>
                <p>Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями.</p>
                <p>Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее.</p>
                <p>Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете. Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.</p>
                <p>В случае изменения данной политики конфиденциальности вы сможете прочитать об этих изменениях на этой странице или, в особых случаях, получить уведомление на свой e-mail.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-8 md_large" id="modal_politics_two">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title tc">Отказ от ответственности</h2>
            </div>
            <div class="md_content tl">
                <p><strong>В соответствии с действующим законодательством</strong>, Администрация отказывается от каких-либо заверений и гарантий, предоставление которых может иным образом подразумеваться, и отказывается от ответственности в отношении Сайта, Содержимого и их использования.</p>
                <p>Ни при каких обстоятельствах Администрация Сайта не будет нести ответственности ни перед какой стороной за какой-либо прямой, непрямой, особый или иной косвенный ущерб в результате любого использования информации на этом Сайте или на любом другом сайте, на который имеется гиперссылка с нашего cайта, возникновение зависимости, снижения продуктивности, увольнения или прерывания трудовой активности, а равно и отчисления из учебных учреждений, за любую упущенную выгоду, приостановку хозяйственной деятельности, потерю программ или данных в Ваших информационных системах или иным образом, возникшие в связи с доступом, использованием или невозможностью использования Сайта, Содержимого или какого-либо связанного интернет-сайта, или неработоспособностью, ошибкой, упущением, перебоем, дефектом, простоем в работе или задержкой в передаче, компьютерным вирусом или системным сбоем, даже если администрация будет явно поставлена в известность о возможности такого ущерба.</p>
                <p>Пользователь соглашается с тем, что все возможные споры будут разрешаться по нормам права.</p>
                <p>Пользователь соглашается с тем, что нормы и законы о защите прав потребителей не могут быть применимы к использованию им Сайта, поскольку он не оказывает возмездных услуг.</p>
                <p>Используя данный Сайт, Вы выражаете свое согласие с «Отказом от ответственности» и установленными Правилами и принимаете всю ответственность, которая может быть на Вас возложена.</p>
            </div>
        </div>
    </div>

    <div class="md-modal md-effect-8 md_large" id="modal_politics_three">
        <div class="md-content">
            <span class="btn_close_modal">
                <a class="md-close"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" ><style>.a{fill:#424242;}</style><path d="M26 0C11.7 0 0 11.7 0 26s11.7 26 26 26 26-11.7 26-26S40.3 0 26 0zM26 50C12.8 50 2 39.2 2 26S12.8 2 26 2s24 10.8 24 24S39.2 50 26 50z" class="a"/><path d="M35.7 16.3c-0.4-0.4-1-0.4-1.4 0L26 24.6l-8.3-8.3c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4L24.6 26l-8.3 8.3c-0.4 0.4-0.4 1 0 1.4C16.5 35.9 16.7 36 17 36s0.5-0.1 0.7-0.3L26 27.4l8.3 8.3C34.5 35.9 34.7 36 35 36s0.5-0.1 0.7-0.3c0.4-0.4 0.4-1 0-1.4L27.4 26l8.3-8.3C36.1 17.3 36.1 16.7 35.7 16.3z" class="a"/></svg></a>
            </span>
            <div class="titlebox">
                <h2 class="text--title title tc">Согласие с рассылкой</h2>
            </div>
            <div class="md_content tl">
                <p>Заполняя форму на нашем сайте — вы соглашаетесь с нашей политикой конфиденциальности. Также вы соглашаетесь с тем, что мы имеем право разглашать ваши личные данные в следующих случаях:</p>
                <p><strong>1) С Вашего согласия:</strong>&nbsp;Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.</p>
                <p><strong>2) Компаниям, работающим от нашего лица:</strong>&nbsp;Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг.</p>
                <p><strong>3) Дочерним и совместным предприятиям:</strong>&nbsp;Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.</p>
                <p><strong>4) На совместно позиционируемых или партнерских страницах:</strong>&nbsp;Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению товара на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному уведомлению о конфиденциальности, с которым Вы можете ознакомиться перед предоставлением информации о себе.</p>
                <p><strong>5) При передаче контроля над предприятием:</strong>&nbsp;Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.</p>
                <p><strong>6)  При проведении мероприятий: </strong> Заполняя анкету участника на како-либо событие Компании, мы можем делиться Вашими данными с другими участниками. Это делается для удобства коммуникации между участниками мероприятия. Эти данные не будут переданы лицам, которые не являются участниками мероприятия, и которые не соответствуют пунктам в разделе «Согласие с рассылкой». </p>
                <p><strong>7) Правоохранительным органам:</strong>&nbsp;Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий.</p>
                <p>Вся личная информация, которая передана Вами для регистрации на нашем сайте, может быть в любой момент изменена либо полностью удалена из нашей базы по Вашему запросу. Для этого Вам необходимо связаться с нами любым удобным для Вас способом, использую контактную информацию, размещенную в специальном разделе нашего сайта.</p>
                <p>Если Вы захотите отказаться от получения писем нашей регулярной рассылки, вы можете это сделать в любой момент с помощью специальной ссылки, которая размещается в конце каждого письма.</p>
            </div>
        </div>
    </div>
    <div class="md-modal md-effect-4" id="modal_callback_ok">

        <div class="md-content">
                <h2>Ваше сообщение успешно отправлено.</h2>
                <div class="cb tc">
                    <a class="md-close btn flex" style="margin:0 auto;"><span>Вернуться на сайт</span></a>
                </div>
            </div>
        </div>
        <a id="call_ok" class="md-trigger hidden" data-modal="modal_callback_ok"></a>
    <div class="md-overlay"></div>
  </div>
    <!-- All modals end -->



        <!--[if lt IE 9]>
        <script src="libs/html5shiv/es5-shim.min.js"></script>
        <script src="libs/html5shiv/html5shiv.min.js"></script>
        <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
        <script src="libs/respond/respond.min.js"></script>
        <![endif]-->

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Load Scripts Start -->
    <script>var scr = {"scripts":[
        // {"src" : "http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU", "async" : false},
        {"src" : "js/libs.js", "async" : false},
        {"src" : "js/common.js", "async" : false}
        ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
    </script>

    <script type="text/javascript">
    (function(d, w, s) {
    var widgetHash = '4183gc277tj5bwanrlth', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
    gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
    })(document, window, 'script');
    </script>
    <!-- Load Scripts End -->


    </div>
</body>
</html>
