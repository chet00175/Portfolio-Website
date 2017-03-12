<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">SmartPortfolios</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('/about') ? "active" : "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('/browse') ? "active" : "" }}"><a href="/browse">Browse Portfolios</a></li>
      <li class="{{ Request::is('/profile') ? "active" : "" }}"><a href="/profile">Profile</a></li>
    </ul>
  </div>
</nav>