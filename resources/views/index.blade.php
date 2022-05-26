<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Mal API</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="/resources/css/app.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160318377-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160318377-2');
    </script>
    <style>
        .alert {
            width: 100%;
            padding: 15px;
            background-color: #802c6e;
            color: #fff;
            text-align: center;
        }

        .alert a {
            color: #fff;
            border-bottom: 1px dashed #fff;
            padding-bottom: 1px;
        }

        .close-alert {
            position: absolute;
            right: 10px;
            top: 10px;
            color: #fff;
            border: none;
            outline: none;
            background-color: transparent;
            font-size: 2em
        }
        .container{
            width: 60%;
            margin-right: auto;
            margin-left: auto;
        }
        nav {
            background-color: transparent;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        nav ul {
            display: flex;
            justify-content: flex-end;
            position: relative;
        }
        button {
            display: inline-block;
            width: auto;
            cursor: pointer;
        }
        .main {
            min-height: 80vh;
            padding-top: 30px;
        }
        .row {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .section {
            margin-bottom: 100px;
        }
        .intro {
            margin-top: 200px;
        }
        .intro-img {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: flex-end;
        }
        .about {
            margin-top: 200px;
        }
        #try {
            margin-top: 100px;
        }
        .about h3 {
            width: 100%;
            font-size: 1.4em;
        }
        .center-align {
            text-align: center;
        }
        .heading {
            width: 100%;
            color: #802c6e;
            font-size: 1.7em;
        }
        .pre {
            width: 100%;
            border-radius: 7px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #802c6e;
            color: #f5f5f5;
            border: 1px solid #802c6e;}

        .list {
            width: 100%;
            margin-top: 20px;
        }
        .list li {
            width: 50%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            text-align: left;
        }
        .ul li {
            list-style: none;
        }
        .list li a {
            font-size: 1.1em;
        }
        a:hover, a:active, a:focus, a {
            text-decoration: none;
        }

        a {
            color: #09f;
        }
        .btn-primary {
            background-color: #802c6e;
            color: #f5f5f5;
            border: 1px solid #802c6e;
        }
        p {
            margin: 10px 0;
        }

        h1, h2, h3, h4, h5, h6, p, label {
            color: #3a3134;
        }
        p {
            line-height: 1.5;
            font-size: 1.1em;
            font-variation-settings: "wght" 200;
        }
        footer {
            padding: 20px;
            text-align: center;
            padding: 50px;
            background-color: #f5f5f5;
            position: relative;
            z-index: 10;
        }
        footer p {
            font-weight: 300;
        }
        p {
            line-height: 1.5;
            font-size: 1.1em;
            font-variation-settings: "wght" 200;
        }
        .heart {
            color: #a71e22;
        }
        footer a {
            color: #3a3134;
            font-weight: 300;
        }

        a:hover, a:active, a:focus, a {
            text-decoration: none;
        }
        footer a.donate {
            color: #802c6e;
        }
        footer a {
            color: #3a3134;
            font-weight: 300;
        }
        nav #menu-icon {
            display: none;
        }
        button {
            display: inline-block;
            width: auto;
            cursor: pointer;
        }
        nav ul {
            display: flex;
            justify-content: flex-end;
            position: relative;
        }
        nav ul li {
            margin: 30px;
        }
        ul li {
            list-style: none;
        }
        nav ul li a {
            text-decoration: none;
            color: #6e6e6e;
            font-size: 0.9em;
        }
        .logo img {
            width: 50px;
        }
        img {
            max-width: 100%;
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3819632897977577" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav>
        <button id="menu-icon">
            <span></span>
            <span></span>
        </button>
        <a href="/" class="logo"><img src="{{asset("/assets/logo.png")}}"></a>
        <ul id="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/docs">Docs</a></li>
            <li><a href="https://github.com/mrbeastmahmoud" target="_blank" rel="noopener noreferrer">GitHub</a></li>
            <li><a target="_blank" href="http://mahmoud-surge-portfolio.surge.sh/">Who is Mahmoud ?</a>
            </li>
        </ul>
    </nav>
    <main>

        <section class="row">
            <div class="col-md-6 intro">
                <h1>Mini-Mal API</h1>
                <p> Mini-Mal rest API for your e-commerce or shopping website prototype</p>
                <div class="btns">
                    <a class="btn btn-large btn-primary" target="_blank" rel="noopener noreferrer" href="https://github.com/mrbeastmahmoud">View on GitHub <img src="{{asset("/assets/github.svg")}}"></a>
                    <a class="btn btn-large btn-secondary" href="/docs">Read Docs <img src="{{asset("/assets/book.svg")}}"></a>
                </div>
            </div>
            <div class="col-md-6 intro-img">
                <img src="{{asset('assets/OIP.jpg')}}" />
            </div>
        </section>

        <section class="row about">
            <h3 class="center-align col-md-12">Get tired of Lorem ipsum data?!</h3>
            <h3 class="center-align col-md-12">Didn't you find any free e-commerce API?!</h3>
            <p class="center-align">
                Mini-Mal API is a free online REST API that you can use whenever you need Pseudo-real data for your e-commerce
                or shopping website without running any server-side code. It's awesome for teaching purposes, sample codes,
                tests, etc.
            </p>
        </section>

        <section id="try" class="row">
            <h2 class="heading">Example Code</h2>
            <pre><code>fetch('https://Mini-Mal.com/api/products/1')
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
            <button id="fetch_btn" class="btn btn-primary">Try it</button>
            <pre id="result"><code></code></pre>
        </section>

        <section class="row">
            <h2 class="heading">Resources</h2>
            <p>There are 4 main resources need in shopping prototypes</p>
            <ul class="list">
                <li><a href="/api/products">Products</a><span>20 products</span></li>
                <li><a href="/api/carts">Cart</a>20 cart item</li>
                <li><a href="/api/users">Users</a>10 users</li>
                <li><a href="">Login Token</a><span class="badge">New!</span></li>
            </ul>
            <a href="/docs" class="btn btn-primary">View Details on Docs</a>
        </section>

        <section class="row">
            <h2 class="heading">Routes</h2>
            <p>All HTTP methods are supported</p>
            <ul class="list">
                <li><span>GET</span><a href="/api/products">/products</a></li>
                <li><span>GET</span><a href="/api/products/1">/products/1</a></li>
                <li><span>GET</span><a href="/api/categories">/categories</a></li>
                <li><span>GET</span><a href="/api/products?where_category=men's clothing">/products?where_category=men's clothing</a></li>
                <li><span>GET</span><a href="/api/carts?where_user_id=1">/carts?where_user_id=1</a></li>
                <li><span>GET</span><a href="/api/products?number=1&page=1">/products?number=1&page=1</a></li>
                <li><span>POST</span>/products</li>
                <li><span>PUT</span>/products/1</li>
                <li><span>PATCH</span>/products/1</li>
            </ul>
            <a href="/docs" class="btn btn-primary">View Details on Docs</a>
        </section>
        <script>
            let wrapper = document.querySelector('#result code')
            let loading = document.createElement('span')
            loading.className = "loading"
           let url= "http://127.0.0.1:8000/api/products/1";
           console.log(url)
            document.getElementById("fetch_btn").addEventListener('click', function () {
                wrapper.appendChild(loading)
                fetch(url, {
                    headers:{
                        "Accept": "application/json"
                    }
                })
                    .then(res => res.json())
                    .then(json => {
                        wrapper.textContent = JSON.stringify(json, undefined, 2)
                    })
            })
        </script>


    </main>
</div>
<footer>
    <p>Made with <span class="heart">&hearts;</span> by <a target="_blank" rel="noopener noreferrer" href="https://keikaavousi.com">Mahmoud Hamed</a></p>

</footer>
<script src="/js/polyfill.min.js"></script>
<script>
    let icon = document.getElementById("menu-icon")
    let menu = document.getElementById("menu")

    document.getElementById("menu-icon").addEventListener('click', function (e) {
        icon.classList.toggle("open")
        menu.classList.toggle("open")
        document.body.classList.toggle("fix")
        document.documentElement.classList.toggle("body-fix")
    })
</script>

<script>
    // let targetAnchor = document.getElementById("try")

    let links = document.querySelectorAll("a[href*='#']")

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function (e) {
            e.preventDefault()

            let hash = links[i].hash
            let targetAnchor = document.querySelector(hash)
            console.log(hash, targetAnchor.offsetTop, window.scrollY)

            window.scrollTo({
                top: targetAnchor.offsetTop ,
                behavior: 'smooth'
            });

        })
    }


</script>
</body>
</html>
