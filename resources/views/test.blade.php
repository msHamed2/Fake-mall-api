<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fake store rest api for your ecommerce or shopping website prototype">
    {{--    <link rel="stylesheet" href="/dist/master.min.css">--}}
    <title>Fake Store API</title>
    {{--    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">--}}
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">--}}
    {{--    <link rel="manifest" href="/site.webmanifest">--}}
    {{--    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">--}}
    {{--    <meta name="msapplication-TileColor" content="#802c6e">--}}
    {{--    <meta name="theme-color" content="#ffffff">--}}
    {{--    <meta property="og:locale" content="fa_IR" />--}}
    {{--    <meta property="og:type" content="website" />--}}
    {{--    <meta property="og:title" content="Fake Store API" />--}}
    {{--    <meta property="og:description" content="Fake store rest api for your ecommerce or shopping website prototype" />--}}
    {{--    <meta property="og:url" content="fakestoreapi.com" />--}}
    {{--    <meta property="og:site_name" content="Fake Store API" />--}}
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
        .intro {
            margin-top: 200px;

        @media only screen and (max-width: 768px) {
            margin-top:

        50px

        ;
        }

        h1 {
            font-size: 2.5em;
        }

        p {
            margin-bottom: 20px;
        }

        div {
            align-items: flex-end;
        }

        .btns {

        @media only screen and (max-width: 992px) {
            display: flex

        ;
            flex-direction: column

        ;
            align-items: flex-start

        ;
        }

        a {
            margin-bottom: 10px;
            width: 200px;
            justify-content: space-between;

        @media only screen and (max-width: 480px) {
            width:

        70%;
            justify-content: space-between

        ;
            font-size:

        0.8em

        ;

            img {
                width: 20px;
            }
        }

        }
        }
        }

        section {
            margin-bottom: 100px;
        }

        .intro-img {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            align-items: flex-end;

        img {

        @media only screen and (max-width: 768px) and (min-width: 480px) {
            width:

        50%;
            display: block

        ;
            margin:

        0 auto

        ;
        }

        }

        }

        .about {
            margin-top: 200px;

        @media only screen and (max-width: 480px) {
            margin-top:

        20px

        ;

            p {
                text-align: left;
            }

        }

        h3 {
            width: 100%;
            font-size: 1.4em;

        @media only screen and (max-width: 480px) {
            font-size:

        1.2em

        ;
            text-align: left

        ;
        }

        }
        }

        footer {
            padding: 20px;
            text-align: center;
            padding: 50px;
            background-color: #f5f5f5;
            position: relative;
            z-index: 10;

        p {
            font-weight: 300;
        }

        a {
            color: #3a3134;
            font-weight: 300;

        &
        .donate {
            color: $ primary;

        img {
            width: 25px;
            margin-bottom: -5px;
        }

        }
        }
        }

        .heart {
            color: #a71e22;
        }

        .loading {
            display: block;
            margin: 10px auto;
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background-color: $ primary;
            animation: loading 0.8s ease infinite alternate;
        }

        @keyframes loading {
            to {
                transform: scale(1.2);
            }
        }

        .list {
            width: 100%;
            margin-top: 20px;

        li {
            width: 50%;
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            text-align: left;

        @media only screen and (max-width: 480px) {
            width:

        100%;
            padding:

        10px

        0;
        }

        a {
            font-size: 1.1em;
        }

        }
        }

        .heading {
            width: 100%;
            color: $ primary;
            font-size: 1.7em;

        svg {
            position: relative;
            bottom: -2px;
        }

        }

        @media only screen and (max-width: 768px) {
            main {
                padding: 30px;
            }
        }


        .logo {

        img {
            width: 50px;
        }


        @media only screen and (max-width: 768px) {
        // position: absolute

        ;
        // left:

        15px

        ;
        // top:

        -5px

        ;
            padding:

        30px

        ;

            img {
                width: 35px;
            }
        }

        }

        aside {
            position: fixed !important;
            left: 0;
            top: 0;
            background-color: #f5f5f5cc;
            height: 100vh;
            overflow: auto;

        ul {
            padding: 40px 30px;

        li {
            margin-bottom: 20px;
        }

        &
        :last-child {
            padding-bottom: 200px;
        }

        }
        }

        #cart {
            margin-top: 100px;
        }

        .auto-overflow {
            height: 100vh;
            overflow: auto;
        }

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
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3819632897977577"
            crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav>
        <button id="menu-icon">
            <span></span>
            <span></span>
        </button>
        <a href="/" class="logo"><img src="/icons/logo.png"></a>
        <ul id="menu">
            <li><a href="/">Home</a></li>
            <li><a href="/docs">Docs</a></li>
            <li><a href="https://github.com/keikaavousi/fake-store-api" target="_blank"
                   rel="noopener noreferrer">GitHub</a></li>
            <li><a target="_blank" href="https://donate.keikaavousi.com">Buy me a coffee</a>
            </li>
        </ul>
    </nav>
    <main>

        <section class="row">
            <div class="col-md-6 intro">
                <h2 class="heading">How to use it</h2>
                <p>
                    fakeStoreApi can be used with any type of shopping project that needs products, carts, and users in
                    JSON
                    format. you can use examples below to check how fakeStoreApi works and feel free to enjoy it in your
                    awesome
                    projects!
                </p>
            </div>
        </section>
        <section class="row">
            <aside class="col-md-2 hidden-xs">
                <ul>

                    <li>
                        <h3><a href="#products">Products</a></h3>
                    </li>
                    <li><a href="#p-all">Get all products</a></li>
                    <li><a href="#p-single">Get a single product</a></li>
                    <li><a href="#p-limit">Limit results</a></li>
                    <li><a href="#p-sort">Sort results</a></li>
                    <li><a href="#p-categories">Get all categories</a></li>
                    <li><a href="#p-category">Get in category</a></li>
                    <li><a href="#p-new">Add new product</a></li>
                    <li><a href="#p-update">Update a product</a></li>
                    <li><a href="#p-delete">Delete a product</a></li>
                </ul>
                <ul>

                    <li>
                        <h3><a href="#cart">Cart</a></h3>
                    </li>
                    <li><a href="#c-all">Get all</a></li>
                    <li><a href="#c-single">Get a single</a></li>
                    <li><a href="#c-limit">Limit results</a></li>
                    <li><a href="#c-sort">Sort results</a></li>
                    <li><a href="#c-date">get in date range</a></li>
                    <li><a href="#c-user-cart">get user cart</a></li>
                    <li><a href="#c-new">Add new cart</a></li>
                    <li><a href="#c-update">Update a cart</a></li>
                    <li><a href="#c-delete">Delete a cart</a></li>
                </ul>
                <ul>

                    <li>
                        <h3><a href="#user">User</a></h3>
                    </li>
                    <li><a href="#u-all">Get all</a></li>
                    <li><a href="#u-single">Get a single</a></li>
                    <li><a href="#u-limit">Limit results</a></li>
                    <li><a href="#u-sort">Sort results</a></li>
                    <li><a href="#u-new">Add</a></li>
                    <li><a href="#u-update">Update</a></li>
                    <li><a href="#u-delete">Delete</a></li>
                </ul>
                <ul>

                    <li>
                        <h3><a href="#auth">Login</a></h3>
                    </li>
                    <li><a href="#a-login">User login</a></li>
                </ul>
            </aside>
            <div class="col-md-12 code-area">
                <h2 class="heading" id="products">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-box">
                        <path
                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                        </path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                    Products
                </h2>
                <h3 id="p-all">Get all products</h3>
                <pre><code>fetch(<span class="c-api">'https://fakestoreapi.com/products'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            [
                {
                    id:1,
                    title:'...',
                    price:'...',
                    category:'...',
                    description:'...',
                    image:'...'
                },
                <span class="c-comment">/*...*/</span>
                {
                    id:30,
                    title:'...',
                    price:'...',
                    category:'...',
                    description:'...',
                    image:'...'
                }
            ]
        </code></pre>
                <h3 id="p-single">Get a single product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/1'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:1,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
        </code></pre>
                <h3 id="p-limit">Limit results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products?limit=5'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:1,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
            <span class="c-comment">/*...*/</span>
            {
                id:5,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
        ]
        </code></pre>
                <h3 id="p-sort">Sort results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products?sort=desc'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>Default value is in ascending mode, you can use with 'desc' or 'asc' as you want.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:30,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
            <span class="c-comment">/*...*/</span>
            {
                id:1,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
        ]
        </code></pre>
                <h3 id="p-categories">Get all categories</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/categories'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            [
            "electronics",
            "jewelery",
            "men's clothing",
            "women's clothing"
            ]
        </code></pre>
                <h3 id="p-category">Get products in a specific category</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/category/jewelery'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>You can also use limit(Number) and sort(asc|desc) as a query string to get your ideal results
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:5,
                title:'...',
                price:'...',
                category:'jewelery',
                description:'...',
                image:'...'
            }
            <span class="c-comment">/*...*/</span>
            {
                id:8,
                title:'...',
                price:'...',
                category:'jewelery',
                description:'...',
                image:'...'
            }
        ]
        </code></pre>
                <h3 id="p-new">Add new product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products'</span>,{
            method:"POST",
            body:JSON.stringify(
                {
                    title: 'test product',
                    price: 13.5,
                    description: 'lorem ipsum set',
                    image: 'https://i.pravatar.cc',
                    category: 'electronic'
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>
                    If you send an object like the code above, it will return you an object with a new id. remember that
                    nothing
                    in real will insert into the database. so if you want to access the new id you will get a 404 error.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:31,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
        </code></pre>
                <h3 id="p-update">Update a product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/7'</span>,{
            method:"PUT",
            body:JSON.stringify(
                {
                    title: 'test product',
                    price: 13.5,
                    description: 'lorem ipsum set',
                    image: 'https://i.pravatar.cc',
                    category: 'electronic'
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/7'</span>,{
                method:"PATCH",
                body:JSON.stringify(
                    {
                        title: 'test product',
                        price: 13.5,
                        description: 'lorem ipsum set',
                        image: 'https://i.pravatar.cc',
                        category: 'electronic'
                    }
                )
            })
                .then(res=>res.json())
                .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>It will return you an object with sent id.
                    remember that nothing in real will update in the database.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:7,
                title:'new title',
                price:'new price',
                category:'new category',
                description:'new description',
                image:'new image url'
            }
        </code></pre>
                <h3 id="p-delete">Delete a product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/products/6'</span>,{
            method:"DELETE"
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>The product will not be deleted on the database. but if you sent data successfully it will return you
                    the fake deleted product.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:6,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
            }
        </code></pre>
                <h2 class="heading margin-top-md" id="cart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                    Cart
                </h2>
                <h3 id="c-all">Get all carts</h3>
                <pre><code>fetch(<span class="c-api">'https://fakestoreapi.com/carts'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            [
                {
                    id:1,
                    userId:1,
                    date:2020-10-10,
                    products:[{productId:2,quantity:4},{productId:1,quantity:10},{productId:5,quantity:2}]
                },
                <span class="c-comment">/*...*/</span>
                {
                    id:20,
                    userId:10,
                    date:2019-10-10,
                    products:[{productId:1,quantity:5},{productId:5,quantity:1}]
                }
            ]
        </code></pre>
                <h3 id="c-single">Get a single cart</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/5'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:5,
                userId:1,
                date:...,
                products:[...]
            }
        </code></pre>
                <h3 id="c-limit">Limit results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts?limit=5'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:1,
                userId:1,
                date:...,
                products:[...]
            },
            <span class="c-comment">/*...*/</span>
            {
                id:5,
                userId:1,
                date:...,
                products:[...]
            }
        ]
        </code></pre>
                <h3 id="c-sort">Sort results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts?sort=desc'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>The default value is in ascending mode, you can use it with 'desc' or 'asc' as you want.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:20,
                userId:1,
                date:...,
                products:[...]
            },
            <span class="c-comment">/*...*/</span>
            {
                id:1,
                userId:1,
                date:...,
                products:[...]
            }
        ]
        </code></pre>
                <h3 id="c-date">Get carts in a date range</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/startdate=2019-12-10&enddate=2020-10-10'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>If you don't add any start date it will fetch from the beginning of time and if you don't add any end date it
                    will fetch until now.
                    You can also use limit(Number) and sort(asc|desc) as a query string to get your ideal results
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
    [
        {
            id:1,
            userId:1,
            date:2019-12-10,
            products:[...]
        },
        <span class="c-comment">/*...*/</span>
        {
            id:4,
            userId:1,
            date:2020-10-10,
            products:[...]
        }
    ]
        </code></pre>
                <h3 id="c-user-cart">Get user carts</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/user/2'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>You can also use date range as query string to get your ideal results
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            [
            {
                id:5,
                userId:2,
                date:2019-10-03,
                products:[...]
            },
            <span class="c-comment">/*...*/</span>
            {
                id:6,
                userId:2,
                date:2020-10-10,
                products:[...]
            }
        ]
        </code></pre>
                <h3 id="c-new">Add a new product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts'</span>,{
            method:"POST",
            body:JSON.stringify(
                {
                    userId:5,
                    date:2020-02-03,
                    products:[{productId:5,quantity:1},{productId:1,quantity:5}]
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>If you send an object like the code above, it will return you an object with a new id.
                    remember that nothing in real will insert into the database. so if you want to access the new id you
                    will get a 404
                    error.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:21
                userId:5,
                date:2020-02-03,
                products:[{productId:5,quantity:1},{productId:1,quantity:5}]
            }
        </code></pre>
                <h3 id="c-update">Update a product</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/7'</span>,{
            method:"PUT",
            body:JSON.stringify(
                {
                    userId:3,
                    date:2019-12-10,
                    products:[{productId:1,quantity:3}]
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/7'</span>,{
                method:"PATCH",
                body:JSON.stringify(
                    {
                        userId:3,
                        date:2019-12-10,
                        products:[{productId:1,quantity:3}]
                    }
                )
            })
                .then(res=>res.json())
                .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>It will return you an object with sent id.
                    remember that nothing in real will update in the database.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:7,
                userId:3,
                date:2019-12-10,
                products:[{productId:1,quantity:3}]
            }
        </code></pre>
                <h3 id="c-delete">Delete a cart</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/carts/6'</span>,{
            method:"DELETE"
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>The cart will not be deleted on the database. but if you sent data successfully it will return you the fake
                    deleted cart.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:6,
                userId:...,
                date:...,
                products:[...]
            }
        </code></pre>
                <h2 class="heading margin-top-md" id="user">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Users
                </h2>
                <h3 id="u-all">Get all users</h3>
                <pre><code>fetch(<span class="c-api">'https://fakestoreapi.com/users'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
    [
        {
            id:1,
            email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                      data-cfemail="dd97b2b5b39dbab0bcb4b1f3beb2b0">[email&#160;protected]</a>',
            username:'johnd',
            password:'m38rmF$',
            name:{
                firstname:'John',
                lastname:'Doe'
            },
            address:{
                city:'kilcoole',
                street:'7835 new road',
                number:3,
                zipcode:'12926-3874',
                geolocation:{
                    lat:'-37.3159',
                    long:'81.1496'
                }
            },
            phone:'1-570-236-7033'
        },
        <span class="c-comment">/*...*/</span>
        {
            id:20,
            email:'...',
            username:'...',
            password:'...',
            name:{
                firstname:'...',
                lastname:'...'
            },
            address:{
                city:'...',
                street:'...',
                number:...,
                zipcode:'...',
                geolocation:{
                    lat:'...',
                    long:'...'
                }
            },
            phone:'...'
        }
    ]
        </code></pre>
                <h3 id="u-single">Get a single user</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users/1'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:1,
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="6e240106002e09030f0702400d0103">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
            }
        </code></pre>
                <h3 id="u-limit">Limit results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users?limit=5'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            [
            {
                id:1,
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="efa5808781af88828e8683c18c8082">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
            },
            <span class="c-comment">/*...*/</span>
            {
                id:5,
                email:'...',
                username:'...',
                password:'...',
                name:{
                    firstname:'...',
                    lastname:'...'
                },
                address:{
                    city:'...',
                    street:'...',
                    number:...,
                    zipcode:'...',
                    geolocation:{
                        lat:'...',
                        long:'...'
                    }
                },
                phone:'...'
            }
        ]
        </code></pre>
                <h3 id="u-sort">Sort results</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users?sort=desc'</span>)
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span> The default value is in ascending mode, you can use it with 'desc' or 'asc' as you want.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:20,
                email:'...',
                username:'...',
                password:'...',
                name:{
                    firstname:'...',
                    lastname:'...'
                },
                address:{
                    city:'...',
                    street:'...',
                    number:...,
                    zipcode:'...',
                    geolocation:{
                        lat:'...',
                        long:'...'
                    }
                },
                phone:'...'
            },
            <span class="c-comment">/*...*/</span>
            {
                id:1,
                email:'...',
                username:'...',
                password:'...',
                name:{
                    firstname:'...',
                    lastname:'...'
                },
                address:{
                    city:'...',
                    street:'...',
                    number:...,
                    zipcode:'...',
                    geolocation:{
                        lat:'...',
                        long:'...'
                    }
                },
                phone:'...'
            }
        ]
        </code></pre>
                <h3 id="u-new">Add a new user</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users'</span>,{
            method:"POST",
            body:JSON.stringify(
                {
                    email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                              data-cfemail="357f5a5d5b755258545c591b565a58">[email&#160;protected]</a>',
                    username:'johnd',
                    password:'m38rmF$',
                    name:{
                        firstname:'John',
                        lastname:'Doe'
                    },
                    address:{
                        city:'kilcoole',
                        street:'7835 new road',
                        number:3,
                        zipcode:'12926-3874',
                        geolocation:{
                            lat:'-37.3159',
                            long:'81.1496'
                        }
                    },
                    phone:'1-570-236-7033'
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>If you send an object like the code above, it will return you an object with a new id.
                    remember that nothing in real will insert into the database. so if you want to access the new id you
                    will
                    get a 404 error.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:21,
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="e2a88d8a8ca2858f838b8ecc818d8f">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
            }
        </code></pre>
                <h3 id="u-update">Update a users</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users/7'</span>,{
            method:"PUT",
            body:JSON.stringify(
                {
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="e4ae8b8c8aa48389858d88ca878b89">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
                }
            )
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users/7'</span>,{
                method:"PATCH",
                body:JSON.stringify(
                    {
                        email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                  data-cfemail="d993b6b1b799beb4b8b0b5f7bab6b4">[email&#160;protected]</a>',
                        username:'johnd',
                        password:'m38rmF$',
                        name:{
                            firstname:'John',
                            lastname:'Doe'
                        },
                        address:{
                            city:'kilcoole',
                            street:'7835 new road',
                            number:3,
                            zipcode:'12926-3874',
                            geolocation:{
                                lat:'-37.3159',
                                long:'81.1496'
                            }
                        },
                        phone:'1-570-236-7033'
                    }
                )
            })
                .then(res=>res.json())
                .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>It will return you an object with sent id. remember that nothing in real will update in the database.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:7,
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="f9b3969197b99e94989095d79a9694">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
            }
        </code></pre>
                <h3 id="u-delete">Delete a user</h3>
                <pre><code>fetch('<span class="c-api">https://fakestoreapi.com/users/6'</span>,{
            method:"DELETE"
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>The user will not be deleted on the database. but if you sent data successfully it will return you
                    the fake deleted user.
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:6,
                email:'<a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="eea4818680ae89838f8782c08d8183">[email&#160;protected]</a>',
                username:'johnd',
                password:'m38rmF$',
                name:{
                    firstname:'John',
                    lastname:'Doe'
                },
                address:{
                    city:'kilcoole',
                    street:'7835 new road',
                    number:3,
                    zipcode:'12926-3874',
                    geolocation:{
                        lat:'-37.3159',
                        long:'81.1496'
                    }
                },
                phone:'1-570-236-7033'
            }
        </code></pre>
                <h2 class="heading margin-top-md" id="auth">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    Login
                </h2>
                <h3 id="a-login">User login</h3>
                <pre><code>fetch(<span class="c-api">'https://fakestoreapi.com/auth/login'</span>,{
            method:'POST',
            body:JSON.stringify({
                username: "mor_2314",
                password: "83r5^_"
            })
        })
            .then(res=>res.json())
            .then(json=>console.log(json))</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        {
            token: "eyJhbGciOiJIUzI1NiIsInR"
        }
        </code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>
                    You can use any of the users' username and password available in users API to get token.
                    any other usernames return error.
                </p>
            </div>
        </section>

        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script>
            let show_btns = document.querySelectorAll(".show-output")
            Array.from(show_btns).forEach(element => {
                element.addEventListener("click", function () {
                    element.nextElementSibling.classList.toggle("block")
                    if (element.nextElementSibling.classList.contains("block")) {
                        element.textContent = "Hide output"
                    } else {
                        element.textContent = "Show output"
                    }

                })
            })
        </script>
    </main>
</div>
<footer>
    <p>Made with <span class="heart">&hearts;</span> by <a target="_blank" rel="noopener noreferrer"
                                                           href="https://keikaavousi.com">MohammadReza Keikavousi</a>
    </p>
    <a href="https://donate.keikaavousi.com" target="_blank" class="donate">
        <img src='/icons/coffee.svg'/>
        Buy me a coffee</a>
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
                top: targetAnchor.offsetTop + 620,
                behavior: 'smooth'
            });

        })
    }

    const close_alert = document.getElementById('close_alert')
    const donate_alert = document.getElementById('donate_alert')
    close_alert.addEventListener('click', () => {
        donate_alert.style.display = 'none'
    })
</script>
</body>
</html>











<p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>If you send an object like the code above, it will return you an object with a new id.
    remember that nothing in real will insert into the database. so if you want to access the new id you
    will get a 404
    error.
</p>
