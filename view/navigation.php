[main]
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
  <!-- Brand -->
  <a class="navbar-brand" href="{LINK_URL}index">{LANG:BRAND}</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      {MENU_POINTS}
    </ul>
  </div> 
</nav>

<!--
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{LINK_URL}index">{LANG:BRAND}</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        {MENU_POINTS}
      </ul>
      <ul class="nav navbar-nav navbar-right">
        {MENU_RIGHT_POINTS}
      </ul>
    </div>
  </div>
</nav>
-->

[menu_point]
<li class="nav-item">
  <a class="nav-link {ACTIVE}" href="{LINK}">{TEXT}</a>
</li> 
