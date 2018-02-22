<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Snippets</title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/styles/default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.2.3/css/bulma.css"> 
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="nav has-shadow">
  <div class="container">
    <div class="nav-left">
      <a class="nav-item is-brand" href="/">
          <strong>Laravel Snippet Manger</strong>
      </a>
      <a class="nav-item is-tab is-hidden-mobile {{ (Request::is('/') ? 'is-active' : '') }}" href="{{route('home')}}">
        <span class="icon is-small"><i class="fa fa-home"></i></span> &nbsp;<span>Home</span>
      </a>
      <a class="nav-item is-tab is-hidden-mobile  {{ (Request::is('snippets/create') ? 'is-active' : '') }}" href="{{route('snippets.create')}}">
        <span class="icon is-small"><i class="fa fa-pencil"></i></span> &nbsp;<span>create</span>
      </a>
    </div>
    <span id="nav-toggle" class="nav-toggle"  onclick="document.getElementById('nav-menu').classList.toggle('is-active');">
      <span></span>
      <span></span>
      <span></span>
    </span>
    <div class="nav-right nav-menu" id="nav-menu">
      <a class="nav-item is-tab is-hidden-tablet {{ (Request::is('/') ? 'is-active' : '') }}" href="/">
        <span class="icon is-small"><i class="fa fa-home"></i></span> &nbsp;<span>Home</span>
      </a>
      <a class="nav-item is-tab is-hidden-tablet  {{ (Request::is('create') ? 'is-active' : '') }}" href="create">
        <span class="icon is-small"><i class="fa fa-pencil"></i></span> &nbsp;<span>Add</span>
      </a>
        <a class="nav-item is-tab" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
           {{ auth()->user()->name }} | Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
  </div>
</nav>
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    <a href="/">Snippets</a>
                </h1>

                <h2 class="subtitle">
                    A tutorial from the friendly folk at Laracasts.com.
                </h2>

                <p>
                    <a href="/snippets/create" class="button">Create Snippet</a>
                </p>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            {{ $slot }}
        </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    @if (isset($footer))
        {{ $footer }}
    @endif
</body>
</html>