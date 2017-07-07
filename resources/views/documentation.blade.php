@extends('layouts.starter')

@section('stylesheet')
<link rel="stylesheet" href="css/doc.css">
@endsection

@section('content')

<section id="introduction">
  <h2 class="page-header">Introduction</h2>
  <p class="lead">
    <b>AdminLTE</b> is a popular open source WebApp template for admin dashboards and control panels.
    It is a responsive HTML template that is based on the CSS framework Bootstrap 3.
    It utilizes all of the Bootstrap components in its design and re-styles many
    commonly used plugins to create a consistent design that can be used as a user
    interface for backend applications. AdminLTE is based on a modular design, which
    allows it to be easily customized and built upon. This documentation will guide you through
    installing the template and exploring the various components that are bundled with the template.
  </p>
</section><!-- /#introduction -->

<!-- ============================================================= -->

<section id="advice">
  <h2 class="page-header">A Word of Advice</h2>
  <p class="lead">
    Before you go to see your new awesome theme, here are few tips on how to familiarize yourself with it:
  </p>

  <ul>
    <li><b>AdminLTE is based on <a href="http://getbootstrap.com/" target="_blank">Bootstrap 3</a>.</b> If you are unfamiliar with Bootstrap, visit their website and read through the documentation. All of Bootstrap components have been modified to fit the style of AdminLTE and provide a consistent look throughout the template. This way, we guarantee you will get the best of AdminLTE.</li>
    <li><b>Go through the pages that are bundled with the theme.</b> Most of the template example pages contain quick tips on how to create or use a component which can be really helpful when you need to create something on the fly.</li>
    <li><b>Documentation.</b> We are trying our best to make your experience with AdminLTE be smooth. One way to achieve that is to provide documentation and support. If you think that something is missing from the documentation, please do not hesitate to create an issue to tell us about it.</li>
    <li><b>Built with <a href="http://lesscss.org/" target="_blank">LESS</a>.</b> This theme uses the LESS compiler to make it easier to customize and use. LESS is easy to learn if you know CSS or SASS. It is not necessary to learn LESS but it will benefit you a lot in the future.</li>
    <li><b>Hosted on <a href="https://github.com/almasaeed2010/AdminLTE/" target="_blank">GitHub</a>.</b> Visit our GitHub repository to view issues, make requests, or contribute to the project.</li>
  </ul>
  <p>
    <b>Note:</b> LESS files are better commented than the compiled CSS file.
  </p>
</section>

<!-- ============================================================= -->

<section id="layout">
  <h2 class="page-header"><a href="#layout">Layout</a></h2>
  <p class="lead">The layout consists of four major parts:</p>
  <ul>
    <li>Wrapper <code>.wrapper</code>. A div that wraps the whole site.</li>
    <li>Main Header <code>.main-header</code>. Contains the logo and navbar.</li>
    <li>Sidebar <code>.sidebar-wrapper</code>. Contains the user panel and sidebar menu.</li>
    <li>Content <code>.content-wrapper</code>. Contains the page header and content.</li>
  </ul>
  <div class="callout callout-danger lead">
    <h4>Tip!</h4>
    <p>The <a href="../starter.html">starter page</a> is a good place to start building your app if you'd like to start from scratch.</p>
  </div>

  <h3>Layout Options</h3>
  <p class="lead">AdminLTE 2.0 provides a set of options to apply to your main layout. Each one of these classes can be added
    to the body tag to get the desired goal.</p>
  <ul>
    <li><b>Fixed:</b> use the class <code>.fixed</code> to get a fixed header and sidebar.</li>
    <li><b>Collapsed Sidebar:</b> use the class <code>.sidebar-collapse</code> to have a collapsed sidebar upon loading.</li>
    <li><b>Boxed Layout:</b> use the class <code>.layout-boxed</code> to get a boxed layout that stretches only to 1250px.</li>
    <li><b>Top Navigation</b> use the class <code>.layout-top-nav</code> to remove the sidebar and have your links at the top navbar.</li>
  </ul>
  <p><b>Note:</b> you cannot use both layout-boxed and fixed at the same time. Anything else can be mixed together.</p>

@endsection

@section('plugin')

@endsection

@section('script')
<script src="js/doc.js"></script>

@endsection
