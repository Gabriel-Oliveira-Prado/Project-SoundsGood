<link rel="stylesheet" href="/css/components/_navbar.css">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <img src="/favicon.ico" alt="Logo" class="navbar-logo me-2">SoundsGood
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav custom-nav-links mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                <li class="nav-item"><a class="nav-link" href="/index">Atividades</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Perfil</a></li>
            </ul>
            <a class="btn btn-cta btn-entrar d-none d-lg-inline-block" href="/login">Entrar</a>
        </div>
    </div>
</nav>
<script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.style.top = '-65px';
        } else {
            navbar.style.top = '0';
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
</script>