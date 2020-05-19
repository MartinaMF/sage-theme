<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top lcc-nav-background">
                    <a class="navbar-brand" href="#"><h3> <span class="lcc-brand-f">LIVE CHAT</span> 
                       <br><span class="lcc-brand-s">SOFTWARE</span></h3></a>
                       <div class="separator"></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="feature.html">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Solutions</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Comparison</a>
                          </li>
                  </ul>
                  <ul class="navbar-nav float-right">
                      <div class="vl"></div>
                        <li class="nav-item download">
                          <a class="nav-link" href="#">Download <span class="sr-only">(current)</span></a>
                        </li>
                        <div class="vl"></div>
                        <li class="nav-item gethelp">
                            <a class="nav-link" href="#">Get Help <span class="sr-only">(current)</span></a>
                        </li>
                </ul>
                </div>
              </nav> 
  </div>
</header>
