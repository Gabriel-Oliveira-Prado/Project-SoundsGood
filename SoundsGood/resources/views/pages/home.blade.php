{{-- 1. Estende o layout principal. Todo o conteúdo desta página será inserido nele. --}}
@extends('layouts.app')

{{-- 2. Define o título específico para a Home Page. --}}
@section('title', 'SoundsGood - Encontre Paz e Tranquilidade')

{{-- 3. Empurra estilos CSS que são EXCLUSIVOS para esta página. --}}
@push('styles')
    {{-- A função asset() gera a URL correta para os arquivos na pasta 'public'. --}}
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/pages/_home.css">
@endpush

{{-- 4. Define a seção de conteúdo principal que será injetada no @yield('content') do layout. --}}
@section('content')

    {{-- Seção Hero: A primeira coisa que o usuário vê. --}}
    <section class="hero-section" id="inicio">
        <div class="container">
            <div class="row align-items-center min-vh-100">
                <div class="col-lg-6">
                    <h1 class="hero-title">Encontre Paz e Tranquilidade com Sons Curados</h1>
                    <p class="hero-subtitle">Descubra uma coleção de sons naturais e musicais especialmente selecionados para aliviar a ansiedade e promover bem-estar mental.</p>
                    <a href="/index" class="btn btn-hero btn-lg">
                        Explorar SoundsGood <i class="fas fa-arrow-right ms-2"></i>
                        <i class="sound-particle sound-1 fas fa-music"></i>
                        <i class="sound-particle sound-2 fas fa-volume-up"></i>
                        <i class="sound-particle sound-3 fas fa-headphones"></i>
                        <i class="sound-particle sound-4 fas fa-wave-square"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="celestial-equalizer">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cosmic-rift"></div>

    {{-- Seção Sobre: Explica o que é a plataforma. --}}
    <section id="sobre" class="section-about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 reveal">
                    <div class="section-header mb-5 ">
                        <h2 class="section-title">O que é SoundsGood?</h2>
                        <p class="section-subtitle">SoundsGood é uma plataforma dedicada a oferecer sons terapêuticos e ambientes sonoros que ajudam a reduzir a ansiedade, melhorar o foco e promover um estado de bem-estar profundo. Nossos sons são cuidadosamente selecionados por especialistas em terapia sonora.</p>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-4 mb-4">
                            <div class="feature-item ">
                                <div class="feature-icon"><i class="fas fa-heart"></i></div>
                                <h4>Terapêutico</h4>
                                <p>Sons baseados em pesquisa científica para reduzir ansiedade e estresse do dia a dia.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="feature-item ">
                                <div class="feature-icon"><i class="fas fa-spa"></i></div>
                                <h4>Natureza Pura</h4>
                                <p>Ambientes sonoros naturais como chuva, floresta e oceano para uma experiência imersiva.</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="feature-item ">
                                <div class="feature-icon"><i class="fas fa-moon"></i></div>
                                <h4>Sempre Disponível</h4>
                                <p>Acesse nossos sons a qualquer hora, em qualquer lugar, para encontrar paz quando precisar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cosmic-rift"></div>

    {{-- Seção Showcase: Demonstração da plataforma. --}}
    <section id="beneficios" class="section-showcase">
        <div class="container reveal">
            <div class="section-header mb-5">
                <h2 class="section-title">Explore a Plataforma</h2>
                <p class="section-subtitle">Veja como funciona a interface intuitiva do SoundsGood e descubra uma experiência única de bem-estar.</p>
            </div>
            <div class="showcase-container">
                <div class="showcase-content">
                    <div class="showcase-text ">
                        <h3>Sua Jornada para a Tranquilidade</h3>
                        <p>O SoundsGood oferece uma experiência imersiva com categorias curadas, sons premium e um design pensado para sua paz mental. Navegue por diferentes ambientes sonoros e encontre o que funciona melhor para você.</p>
                        <div class="showcase-features">
                            <div class="feature-list ">
                                <h4>Categorias Principais</h4>
                                <ul>
                                    <li>Sons da Natureza</li>
                                    <li>Meditação Guiada</li>
                                    <li>Música Relaxante</li>
                                    <li>Ambientes Urbanos</li>
                                </ul>
                            </div>
                            <div class="feature-list ">
                                <h4>Recursos</h4>
                                <ul>
                                    <li>Reprodução Contínua</li>
                                    <li>Temporizador Personalizável</li>
                                    <li>Favoritos e Playlists</li>
                                    <li>Modo Offline</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="showcase-mockup ">
                        <div class="mockup-frame">
                            <div class="mockup-body p-4">
                                <h2 class="mockup-section-title fs-5 fw-bold mb-3">Respiração Guiada</h2>
                                <div class="breathing-section d-flex align-items-center mb-4">
                                    <div class="breathing-circle flex-shrink-0"></div>
                                    <div class="breathing-controls flex-grow-1 ms-3">
                                        <button class="btn btn-primary w-100 mb-2 btn-mockup-primary">Iniciar Respiração</button>
                                        <div class="btn-group w-100 mb-2" role="group" aria-label="Controles de Velocidade">
                                            <button type="button" class="btn btn-outline-secondary btn-sm btn-mockup-speed">Lento</button>
                                            <button type="button" class="btn btn-secondary btn-sm btn-mockup-speed active">Médio</button>
                                            <button type="button" class="btn btn-outline-secondary btn-sm btn-mockup-speed">Rápido</button>
                                        </div>
                                        <div class="audio-info d-flex justify-content-between align-items-center text-muted small">
                                            <span>Inspire... Expire...</span>
                                            <i class="fas fa-volume-up"></i>
                                        </div>
                                    </div>
                                </div>

                                <h2 class="mockup-section-title fs-5 fw-bold mb-3">Sons Calmantes</h2>
                                <div class="calm-sounds-section">
                                    <div class="volume-control d-flex align-items-center mb-3 text-primary">
                                        <i class="fas fa-volume-up me-2"></i>
                                        <span class="mockup-label fw-normal text-dark">Volume</span>
                                    </div>
                                    <div class="row g-2 sound-items">
                                        <div class="col-4">
                                            <button class="btn btn-light w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-sound">
                                                <i class="fas fa-cloud-showers-heavy mb-1 fs-5"></i>
                                                <span class="small">Chuva suave</span>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-light w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-sound">
                                                <i class="fas fa-water mb-1 fs-5"></i>
                                                <span class="small">Mar</span>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-light w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-sound">
                                                <i class="fas fa-fire mb-1 fs-5"></i>
                                                <span class="small">Fogueira</span>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-light w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-sound">
                                                <i class="fas fa-tree mb-1 fs-5"></i>
                                                <span class="small">Floresta</span>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-light w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-sound">
                                                <i class="fas fa-leaf mb-1 fs-5"></i>
                                                <span class="small">Ambiente tranquilo</span>
                                            </button>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center py-3 btn-mockup-add">
                                                <span class="small">Adicionar meu som</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cosmic-rift"></div>

    {{-- Seção de Planos: Apresenta as opções de acesso. --}}
    <section id="planos" class="section-pricing">
        <div class="container reveal">
            <div class="section-header mb-5">
                <h2 class="section-title">Planos</h2>
                <p class="section-subtitle">Escolha o plano perfeito para sua jornada de bem-estar e tranquilidade.</p>
            </div>
            <div class="pricing-grid">
                
                <div class="pricing-card " data-plan="gratuito">
                    <div class="pricing-header">
                        <h3 class="pricing-name">Sem Login</h3>
                        <p class="pricing-description">Acesso limitado</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency"></span>
                        <span class="amount">Grátis</span>
                        <span class="period"></span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Acesso a algumas atividades</li>
                        <li><i class="fas fa-check"></i> Funcionalidades limitadas</li>
                        <li class="disabled"><i class="fas fa-times"></i> Não salva seu progresso</li>
                        <li class="disabled"><i class="fas fa-times"></i> Não permite criar playlists</li>
                        <li class="disabled"><i class="fas fa-times"></i> Recursos restritos</li>
                    </ul>
                    <a href="/index" class="btn btn-pricing-secondary">Explorar</a>
                </div>

                <div class="pricing-card" data-plan="premium">
                    <div class="pricing-badge">Popular</div>
                    <div class="pricing-header">
                        <h3 class="pricing-name">Com Login</h3>
                        <p class="pricing-description">Acesso completo e gratuito</p>
                    </div>
                    <div class="pricing-price">
                        <span class="currency"></span>
                        <span class="amount">Grátis</span>
                        <span class="period"></span>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Acesso a todas as atividades</li>
                        <li><i class="fas fa-check"></i> Salve seu progresso</li>
                        <li><i class="fas fa-check"></i> Sem anúncios</li>
                        <li><i class="fas fa-check"></i> Crie e salve playlists</li>
                        <li><i class="fas fa-check"></i> Playlists personalizadas</li>
                    </ul>
                    <a href="/login" class="btn btn-pricing-primary">Fazer Login</a>
                </div>
            </div>
        </div>
    </section>

@endsection

{{-- 5.scripts JS --}}
@push('scripts')
    <script>
        document.querySelectorAll('.pricing-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.pricing-card').forEach(c => {
                    c.classList.remove('active');
                });
                this.classList.add('active');
            });
        });

        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);

        document.addEventListener("DOMContentLoaded", function() {
            reveal();
        });


    </script>
@endpush
