<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Website</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <header>
        {{-- topbar --}}
     <div class="topbar">
        <div>
            <p>Bhudiganga-2|Morang|+97798912334343</p>
        </div>
        <div class="links">
           <a href="">Carrer</a>
           <a href="">Blog</a>
           <a href="">Contact Us</a>
        </div>
     </div>
     {{-- navbar --}}
     <div class="navbar">
        <div class="logo">
            <p>MPS</p>
        </div>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/gallery">Gallery</a>
            <a href="/events">Events</a>
            <a href="/facilites">Facilites</a>
        </div>
     </div>
    </header>
@yield('content')
    <footer>
      <div class="about">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Cum voluptatum esse eligendi ullam praesentium. <br> Possimus suscipit autem aut, animi asperiores facilis mollitia consequatur <br> officiis doloribus blanditiis culpa voluptatum provident aperiam.</p>
      </div>
      <div class="quick-links">
        <h2>Quick links</h2>
        <li><a href="">About</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Events</a></li>
        <li><a href="">Facilites</a></li>
        <li><a href="">Contact us</a></li>
      </div>
      <div class="quick-links">
        <h2>Quick links</h2>
        <li><a href="">About</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Events</a></li>
        <li><a href="">Facilites</a></li>
        <li><a href="">Contact us</a></li>
      </div>
    </footer>
 
</body>
</html>