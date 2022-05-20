<head>
  <style>
  /*
  =====
  DEPENDENCES
  =====
  */

  .r-link{
      display: var(--rLinkDisplay, inline-flex) !important;
  }
  
  .r-link[href]{
    color: var(--rLinkColor) !important;
    text-decoration: var(--rLinkTextDecoration, none) !important;
  }
  
  .r-list{
    padding-left: var(--rListPaddingLeft, 0) !important;
    margin-top: var(--rListMarginTop, 0) !important;
    margin-bottom: var(--rListMarginBottom, 0) !important;
    list-style: var(--rListListStyle, none) !important;
  }
  
  
  /*
  =====
  CORE STYLES
  =====
  */
  
  .menu{
    --rLinkColor: var(--menuLinkColor, currentColor);
  }
  
  .menu__link{
    display: var(--menuLinkDisplay, block);
  }
  
  /* 
  focus state 
  */
  
  .menu__link:focus{
    outline: var(--menuLinkOutlineWidth, 2px) solid var(--menuLinkOutlineColor, currentColor);
    outline-offset: var(--menuLinkOutlineOffset);
  }
  
  /* 
  fading siblings
  */
  
  .menu:hover .menu__link:not(:hover){
    --rLinkColor: var(--menuLinkColorUnactive, rgb(226, 226, 226));
  }

  /*
  =====
  PRESENTATION STYLES
  =====
  */
  
  .menu{
    background-color: var(--menuBackgroundColor, #f0f0f0);
    box-shadow: var(--menuBoxShadow, 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24));
  }
  
  .menu__list{
    display: flex;  
  }
  
  .menu__link{
    padding: var(--menuLinkPadding, 1.5rem 2.5rem);
    font-weight: 700;
    text-transform: uppercase;
  }
  
  /* 
  =====
  TEXT UNDERLINED
  =====
  */
  
  .text-underlined{
    position: relative;
    overflow: hidden;
  
    will-change: color;
    transition: color .25s ease-out;  
  }
  
  .text-underlined::before, 
  .text-underlined::after{
    content: "";
    width: 0;
    height: 3px;
    background-color: var(--textUnderlinedLineColor, currentColor);
  
    will-change: width;
    transition: width .1s ease-out;
  
    position: absolute;
    bottom: 0;
  }
  
  .text-underlined::before{
    left: 50%;
    transform: translateX(-50%); 
  }
  
  .text-underlined::after{
    right: 50%;
    transform: translateX(50%); 
  }
  
  .text-underlined:hover::before, 
  .text-underlined:hover::after{
    width: 100%;
    transition-duration: .2s;
  }
  
  /*
  =====
  SETTINGS
  =====
  */
  
  .page__custom-settings{
    --menuBackgroundColor: rgb(44, 47, 44);
    --menuLinkColor: rgb(93, 117, 253);
    --menuLinkColorUnactive: rgb(226, 226, 226);
    --menuLinkOutlineOffset: -.5rem; 
  }
  
  /*
  =====
  DEMO
  =====
  */
  
  body{
    font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
    margin: 0;
    min-height: 100vh;
    display: flex;  
    flex-direction: column;
  }
  
  .page{
    box-sizing: border-box;
    width: 100%;
    margin: 0px;
    position: relative;
  }
  
  .page__menu:nth-child(n+2){
    margin-top: 3rem;
  }
  
  
  .substack{
    border:1px solid #EEE; 
    background-color: #fff;
    width: 100%;
    max-width: 480px;
    height: 280px;
    margin: 1rem auto;;
  }
  
  .linktr{
    display: flex;
    justify-content: flex-end;
    padding: 2rem;
    text-align: center;
  }
  
  .linktr__goal{
    background-color: rgb(209, 246, 255);
    color: rgb(93, 117, 253);
    box-shadow: rgb(93, 117, 253 / 24%) 0px 2px 8px 0px;
    border-radius: 2rem;
    padding: .75rem 1.5rem;
  }
  
  .r-link{
      --uirLinkDisplay: var(--rLinkDisplay, inline-flex);
      --uirLinkTextColor: var(--rLinkTextColor);
      --uirLinkTextDecoration: var(--rLinkTextDecoration, none);
  
      display: var(--uirLinkDisplay) !important;
      color: var(--uirLinkTextColor) !important;
      text-decoration: var(--uirLinkTextDecoration) !important;
  }
  </style>
</head>

<div class="page">
  <nav class="page__menu page__custom-settings menu">
    <ul class="menu__list r-list">
      <li class="menu__group"><a href="{{  url('/') }}"  class="menu__link r-link text-underlined">Logo</a></li>
      <li class="menu__group"><a href="{{  url('/') }}"  class="menu__link r-link text-underlined">Homepage</a></li>
      <li class="menu__group"><a href="#0" class="menu__link r-link text-underlined">Books</a></li>
    </ul>
  </nav>
</div>
