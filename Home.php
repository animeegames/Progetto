<html>
<header>
    <img class="activator" id="activator" src="//s.svgbox.net/hero-outline.svg?fill=fff#menu-alt-1" alt="">
    <nav>
        <ul>
            <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#bell"></a></li>
            <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#beaker"></a></li>
            <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#chat"></a></li>
            <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#cloud-download"></a></li>
            <li><a href="#"><img src="//s.svgbox.net/hero-outline.svg?fill=805ad5#cog"></a></li>
        </ul>
    </nav>
</header>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/CSSRulePlugin.min.js"></script>
<script src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-a9acf439-3a3d-41f7-bb10-782d36eccb8c" crossorigin=""></script>

<style>
    body {
        margin: 0;
        height: 100vh;
        background: #242831;
        color: white;
        display: grid;
        place-content: center;
    }

    header {
        display: flex;
        position: absolute;
        top: 960px;
        left: 5px;
        zoom: 50%;
    }

        header .activator {
            padding: 1em;
            border-radius: 100%;
            cursor: pointer;
        }

            header .activator:hover {
                background: #1e2129;
            }

    img {
        width: 100%;
        max-width: 45px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav {
        background: #292e38;
        border-radius: 0 5em 5em 0;
        padding: 0.5em;
        clip-path: ellipse(50% 50% at -50% 50%);
    }

        nav ul {
            display: flex;
        }

            nav ul li a {
                display: block;
                padding: 0.5em;
                margin: 0 0.5em;
                border-radius: 50%;
            }

                nav ul li a:hover {
                    background: #323844;
                }

                nav ul li a img {
                    opacity: 0;
                    transform: translateX(-10px);
                }
</style>

<script>
     var card = document.getElementById('activator');
        var tl = gsap.timeline({defaults: {ease: "power2.inOut"}})

        var toggle = false;

        tl.to('.activator', {
            background: '#805ad5',
            'borderRadius': '5em 0 0 5em'
        });
        tl.to('nav', {
            'clipPath': 'ellipse(100% 100% at 50% 50%)'
        }, "-=.5")
        tl.to('nav img', {
            opacity: 1,
            transform: 'translateX(0)',
            stagger: .05
        }, "-=.5")
        tl.pause();

        card.addEventListener('click', () => {
            toggle = !toggle;
            if (toggle ? tl.play() : tl.reverse());
        })
</script>
</html>