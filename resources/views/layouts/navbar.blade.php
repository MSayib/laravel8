<ul class="navbar">
    @foreach ($navs as $name => $url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
</ul>
