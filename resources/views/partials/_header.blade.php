<nav>
    <div class="logo">
        <div class="spinner">
            <span></span>   
        </div>
        <div class="text">
            <span style="color: white;">MATTHEW</span>
            <span style="color: rgba(255,255,255,.7);">FORTIER</span>
        </div>
    </div>
    <div class="links">
        <ul>
            <a href="/blog">
                <li class="link">
                    <span></span>
                    <span>Blog</span>
                </li>
            </a>
            <a href="/blog">
                <li class="link">
                    <span></span>
                    <span>Portfolio</span>
                </li>
            </a>
            <a href="/blog">
                <li class="link">
                    <span></span>
                    <span>Resume</span>
                </li>
            </a>
            <a href="/about">
                <li class="link">
                    <span></span>
                    <span>About Me</span>
                </li>
            </a>
            <a href="/contact">
                <li class="link">
                    <span></span>
                    <span>Contact</span>
                </li>
            </a>
        </ul>
    </div>
    <div class="menu-icon">
        <span></span>
        <div class="menu-icon-middle">
            <span></span>
            <span></span>    
        </div>
        <span></span>
    </div>
</nav>
<div class="mobile-links">
    <ul>
        <li>Blog</li>
        <li>Portfolio</li>
        <li>Resume</li>
        <li>About Me</li>
        <li>Contact</li>
    </ul>
</div>

@section('scripts')
    <script>
        $(".menu-icon").click(function(){
            $(this).toggleClass("active");
            $('.mobile-links').toggleClass("active");
        });
    </script>
@endsection