<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Docs</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="/resources/css/app.css">
    <link rel="icon" href="{!! asset('assets/logo.png') !!}"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .hover-a{
            margin-bottom: 20px; text-decoration: none; color: #09f
        }
        .hover-a > a{
           text-decoration: none; color: #09f
        }
        .hover-a > a:hover{
             color: #25cff2;
        }
        div > a {
            text-decoration: none;
        }

        .heading {
            margin-top: 20px;
            font-size: 1.7em;
            width: 100%;
            color: #802c6e;
        }

        .code-area h3 {
            margin-top: 50px;
            font-size: 1.4em;
        }

        .pre {
            width: 100%;
            border-radius: 7px;
            margin-bottom: 20px;
        }

        code {
            overflow-x: auto;
            width: 100%;
            background-color: #f5f5f5;
            padding: 20px;
            display: block;
            line-height: 1.5;
            font-size: 1.1em;
            font-weight: 300;
            letter-spacing: 2px;
        }

        a {
            text-decoration: none;
        }

        .btn-outline {
            border: 1px solid #802c6e;
            border-radius: .25rem;
            padding: 9px 12px 6px;
            background-color: transparent;
            color: #802c6e;
        }

        input, select, textarea, input[type="button"], input[type="submit"], button {
            border: none;
            margin-bottom: 20px;
            padding: 0 10px;
            font-size: 1em;
        }

        button {
            display: inline-block;
            width: auto;
            cursor: pointer;
        }

        .block {
            display: block;
            width: 100%;
        }

        .output-result {
            display: none;
        }
        .logo img {
            width: 50px;
        }

    </style>

</head>
<body class="antialiased  position-absolute ">
<div class="container" style="width: 60%">
    <nav class="p-4 d-flex justify-content-between align-items-center">
        <a href="/" class="logo"><img src="{{asset("/assets/logo.png")}}"></a>
        <ul class="position-relative d-flex justify-content-end" style="list-style: none">
            <li class="m-5">
                <a href="" class=" text-decoration-none">docs</a>

            </li>
            <li class="m-5">
                <a href="" class=" text-decoration-none">github</a>

            </li>
            <li class="m-5">
                <a href="" class=" text-decoration-none">who is Mahmoud ?</a>

            </li>
        </ul>
    </nav>
    <main style="min-height: 80vh; padding-top: 30px">
        <section class="row">
            <div class="col-md-10" style="margin-top: 200px">
                <h2 style="width: 100%;color: #802c6e; font-size: 1.7em;">
                    Introduction:</h2>
                <p style="margin-bottom: 20px ; width: 100%;">
                    Welcome to the Mini-Mal Api, the Fake Mini-Mal Api E-Comm api! This documentation should help you familiarise yourself with the resources available and how to consume them with HTTP requests.
                    If you're after a native helper library then I suggest you scroll down and check out what's available.
                    Read through the getting started section before you dive in.
                    Most of your problems should be solved just by reading through it.

                </p>
            </div>

        </section>
        <section class="row">
            <div class="col-md-6" style="margin-top: 200px">
                <h2 style="width: 100%;color: #802c6e; font-size: 1.7em;">
                    how to use this package ?</h2>
                <p style="margin-bottom: 20px">
                    Bas6a-Ecomm can be used with any type of shopping project that needs products, carts, and users in
                    JSON
                    format. you can use examples below to check how Mini-Mal Api E-comm works and feel free to enjoy it in your
                    awesome
                    projects!

                </p>
            </div>

        </section>
        <section class="row">
            <aside class="col-md-2 hidden-xs"
                   style="position: fixed !important; left: 0;
                    top: 0; background-color: #f5f5f5cc;height: 100vh;
                    overflow: auto; box-sizing: border-box;">
                <ul class="nav-li-a" style="   list-style: none;  padding: 40px 30px;">
                    <li class="hover-a">
                        <h3>
                            <a href="#products" style=" color: #09f"> Products</a>
                        </h3>
                    </li>
                    <li class="hover-a" ><a href="#p-all">Get
                            all product</a>
                    </li>
                    <li class="hover-a"><a  href="#p-single">Get
                            a single product</a>
                    </li>
                    <li class="hover-a" ><a  href="#p-limit">Limit results</a></li>
                    <li class="hover-a"><a  href="#p-sort">Sort results</a></li>
                    <li class="hover-a"><a  href="#p-categories">Get all
                            categories</a></li>
                    <li class="hover-a"><a  href="#p-category">Get in category</a>
                    </li>
                    <li class="hover-a"><a  href="#p-new">Add new product</a></li>
                    <li class="hover-a"><a  href="#p-update">Update a product</a></li>
                </ul>

                <ul style=" list-style: none;   padding: 40px 30px;">
                    <li class="hover-a">
                        <h3>
                            <a style=" color: #09f" href="#cart">Cart</a>
                        </h3>
                    </li>
                    <li class="hover-a"><a s href="#c-all">Get all</a></li>
                    <li class="hover-a"><a  href="#c-single">Get a single</a></li>
                    <li class="hover-a"><a  href="#c-limit">Limit results</a></li>
                    <li class="hover-a"><a  href="#c-sort">Sort results</a></li>
                    <li class="hover-a"><a  href="#c-user-cart">get user cart</a></li>
                    <li class="hover-a"><a  href="#c-new">Add new cart</a></li>
                    <li class="hover-a"><a href="#c-update">Update a cart</a></li>

                </ul>

                <ul style=" list-style: none;   padding: 40px 30px;">
                    <li class="hover-a">
                        <h3>
                            <a style=" color: #09f" href="#User">User</a>
                        </h3>
                    </li>
                    <li class="hover-a"><a  href="#u-all">Get all</a></li>
                    <li class="hover-a"><a  href="#u-single">Get a single</a></li>


                </ul>
                <ul style=" list-style: none;   padding: 40px 30px;">
                    <li class="hover-a">
                        <h3>
                            <a style=" color: #09f" href="#auth">Auth</a>
                        </h3>
                    </li>
                    <li class="hover-a"><a  href="#auth">Log In</a></li>


                </ul>

            </aside>



            <div class="col-md-12 code-area">
                <p style="color: #20c997">
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>Use in header  'Accept': 'application/json' in ALL REQUESTS
                    so Try to
                    <code>axios.get(<span class="c-api">'https://bas6a-api.com/api/products',
                        {
  headers: {

    'Accept': 'application/json'
  }
}</span>)
                        .then(function (response) {
                        // handle success
                        console.log(response.data);
                        });

                    </code>
                </p>
                <p style="color: #20c997">
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>Those Api's has a [message , data ,status] so Try to
                    <code>axios.get(<span class="c-api">'https://bas6a-api.com/api/products'</span>)
                        .then(function (response) {
                        // handle success
                        console.log(response.data);
                        console.log(response.status);
                        console.log(response.message);
                        });

                    </code>
                </p>


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


                <h3 id="p-all">Get all product</h3>
                <pre class="pre"><code>axios.get(<span class="c-api">'https://bas6a-api.com/products'</span>)
            .then(function (response) {
                        console.log(response.data);
                        });</code></pre>
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
                    image:'...',
                    rating:'...',
                    count:'...'

                },
                <span class="c-comment">/*...*/</span>
                {
                    id:30,
                    title:'...',
                    price:'...',
                    category:'...',
                    description:'...',
                    image:'...'
                    rating:'...',
                    count:'...'
                }
            ]
        </code></pre>
                <h3 id="p-single">Get a single product</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/products/1'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
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
                rating:'...',
                count:'...'
            }
        </code></pre>
                <h3 id="p-limit">Limit results with pagination</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/products?number=1&page=1'</span>)
                   .then(function (response) {
                        console.log(response.data);
                        });</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
 {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "title": "...",
                "price": "...",
                "description": "...",
                "image": "...",
                "category": "...",
                "rating": "...",
                "count": 5

            }
        ],

        first_page_url: "....",
        from: 1,
        last_page: 2,
        last_page_url: "...",
        next_page_url": "...",
        path: ".../api/products",
        per_page: "1",
        prev_page_url: null,
        to: 1,
        total: 2
  }
        </code></pre>
                <h3 id="p-sort">Sort results</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/products?sort_desc=1&sort=id'</span>)
            .then(function (response) {
                        console.log(response.data);
                        });</code></pre>
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
                rating:'...',
                count:'...'
            }
            <span class="c-comment">/*...*/</span>
            {
                id:1,
                title:'...',
                price:'...',
                category:'...',
                description:'...',
                image:'...'
                rating:'...',
                count:'...'
            }
        ]
        </code></pre>

                <h3 id="p-categories">Get all categories</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/products/categories'</span>)
            .then(function (response) {
                        console.log(response.data);
                        });</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>

     [
        "men's clothing"
             ],

        </code></pre>
                <h3 id="p-category">Get products in a specific category</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/products?where_category=jewelery'</span>)
            .then(function (response) {
                        console.log(response.data);
                        });</code></pre>
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
                rating:'...',
                count:'...'
            }
            <span class="c-comment">/*...*/</span>
            {
                id:8,
                title:'...',
                price:'...',
                category:'jewelery',
                description:'...',
                image:'...'
                rating:'...',
                count:'...'
            }
        ]
        </code></pre>
                <h3 id="p-new">Add new product</h3>
                <pre><code>axios.post('<span class="c-api">https://bas6a-api.com/products'</span>,{

                    title: 'test product',
                    price: 13.5,
                    description: 'lorem ipsum set',
                    image: 'https://i.pravatar.cc',
                    category: 'electronic'

        })
           .then(function (response) {
                        console.log(response.data);})</code></pre>
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
                category:'jewelery',
                description:'...',
                image:'...'
                rating:'...',
                count:'...'
            }
        </code></pre>
                <h3 id="p-update">Update a product</h3>
                <pre><code>axios.post('<span class="c-api">https://bas6a-api.com/products/7'</span>,{
            method:"put",
            data:
                {
                    title: 'test product',
                    price: 13.5,
                    description: 'lorem ipsum set',
                    image: 'https://i.pravatar.cc',
                    category: 'electronic'
                }

        })
           .then(function (response) {
                        console.log(response.data);})</code></pre>

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
                <pre><code>axios.get(<span class="c-api">'https://bas6a-api.com/carts'</span>)
           .then(function (response) {
                        console.log(response.data);})</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
           [
        {
            id: 1,
            user_id: 1,
            cart_products: [
                {
                    id: 8,
                    cart_id: 1,
                    product_id: 1
                }
            ],
            user: {
                id: 1,
                name: "mahmoud hamed",
                email": "mahmoudsu22@gmail.com"
            }
                        }
                <span class="c-comment">/*...*/</span>
              {
            id: 8,
            user_id: 1,
            created_at:"...."
            cart_products: [
                {
                    id: 8,
                    cart_id: 1,
                    product_id: 1
                }
                {
                    id: 2,
                    cart_id: 8,
                    product_id: 3
                }
            ],user: {
                id: 1,
                name: "mahmoud hamed",
                email": "mahmoudsu22@gmail.com"
            }
                        }
            ],

  }
        </code></pre>
                <h3 id="c-single">Get a single cart</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/carts/5'</span>)
           .then(function (response) {
                        console.log(response.data);})</code></pre>
                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span> You can try adding string parameter like "?with_user=1"    here by 1 we mean true
                    ex :<code>axios.get('<span class="c-api">https://bas6a-api.com/carts/5?with_user=1'</span>)
                        .then(function (response) {
                        console.log(response.data);})</code>
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>

            {
                id:5,
                userId:1,
                created_at:...,
                cart_products:[...]
            }
        </code></pre>
                <h3 id="c-limit">Limit results with Pagination</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/carts?number=2&page=1'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        {
         current_page": 2,
          data:[

            {
                id:1,
                user_id:1,
                created_at:...,
                cart_products:[...]
            },

            {
                id:5,
                user_id:1,
                created_at:...,
                cart_products:[...]
            }
                   ]
        first_page_url: "..../api/carts?page=1",
        from: 1,
        last_page: 2,
        last_page_url: ".../api/carts?page=2",
        next_page_url": ".../api/carts?page=2",
        path: ".../api/products",
        per_page: "1",
        prev_page_url: null,
        to: 1,
        total: 2
                   }



        </code></pre>
                <h3 id="c-sort">Sort results</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/carts?sort_desc=1&sort=id'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
        [
            {
                id:20,
                user_id:1,
                created_at:...,
                products:[...]
            },
            <span class="c-comment">/*...*/</span>
            {
                id:1,
                user_id:1,
                created_at:...,
                created_at:[...]
            }
        ]
        </code></pre>

                <h3 id="c-user-cart">Get user carts</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/carts?where_user_id=1'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
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
                user_id:1,
                created_at:2019-10-03,
                products:[...]
            },
            <span class="c-comment">/*...*/</span>
            {
                id:6,
                user_id:1,
                created_at:2020-10-10,
                products:[...]
            }
        ]
        </code></pre>
                <h3 id="c-new">Add a new product</h3>
                <pre><code>axios.post('<span class="c-api">https://bas6a-api.com/carts'</span>,{

                    user_id:5,
                    products:[{product_id:5,quantity:1},{product_id:1,quantity:5}]

        })
            .then(function (response) {
                        console.log(response.data);})</code></pre>

                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:21
                user_id:5,
                created_at:2020-02-03,
                cart_products:[{productId:5,quantity:1},{productId:1,quantity:5}]
            }
        </code></pre>
                <h3 id="c-update">Update a product</h3>
                <pre><code>axios.post('<span class="c-api">https://bas6a-api.com/carts/1?_method=put'</span>,{

                  "products":[
                          {
                            "product_id":1,
                           "quantity":4
                           }
                              ]

        })
            .then(function (response) {
                        console.log(response.data);})</code></pre>

                <p>
<span class="tips">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
     stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap">
<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
</svg>
</span>Note : if you put quantity of a product as 0 it will delete the product from the Cart
                </p>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
            {
                id:7,
                user_id:3,
                created_at:2019-12-10,
                products:[{productId:1,quantity:3}]
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
                <pre><code>axios.get(<span class="c-api">'https://bas6a-api.com/users'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
    [
        {
            id:1,
            email:'mahmoudsu22@gmail.com',
            name:'mahmoud hamed',
            password:'m38rmF$',
            address:{
                id:1,
                city:'Dubai',
                street:'7835 new road',
                zipcode:'12926-3874',
                lat:'-37.3159',
                long:'81.1496'

            }
        },
        <span class="c-comment">/*...*/</span>
        {
            {
            id:1,
            email:'....',
            name:'...',
            password:'...',
            address:{
                id:1,
                city:'..',
                street:'...',
                zipcode:'....',
                lat:'...',
                long:'...'

            }

        }
    ]
        </code></pre>
                <h3 id="u-single">Get a single user</h3>
                <pre><code>axios.get('<span class="c-api">https://bas6a-api.com/users/1'</span>)
            .then(function (response) {
                        console.log(response.data);})</code></pre>
                <button class="show-output btn btn-outline">Show output</button>
                <pre class="output-result"><code>
            <span class="c-comment">//output</span>
             {
            id:1,
            email:'mahmoudsu22@gmail.com',
            name:'mahmoud hamed',
            password:'m38rmF$',
            address:{
                id:1,
                city:'Dubai',
                street:'7835 new road',
                zipcode:'12926-3874',
                lat:'-37.3159',
                long:'81.1496'

            }
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
                <pre><code>axios.post(<span class="c-api">'https://bas6a-api.com/auth/login'</span>,{

                email: "mahmoudsu22@gmail.com",
                password: "123123"

        })
           .then(function (response) {
                        console.log(response.data);})</code></pre>
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

        <script>
            let show_btns = document.querySelectorAll(".show-output")
            Array.from(show_btns).forEach(element => {
                element.addEventListener("click", function () {
                    element.nextElementSibling.classList.toggle("block")

                    if (element.nextElementSibling.classList.contains("block")) {
                        element.nextElementSibling.classList.remove('output-result')

                        element.textContent = "Hide output"
                    } else {
                        element.textContent = "Show output"
                        element.nextElementSibling.classList.toggle("output-result")

                        element.nextElementSibling.classList.remove('block')

                    }

                })
            })
        </script>
    </main>


</div>
</div>
<script>
    // let targetAnchor = document.getElementById("try")

    let links = document.querySelectorAll("a[href*='#']")

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function (e) {
            e.preventDefault()

            let hash = links[i].hash
            let targetAnchor = document.querySelector(hash)
            console.log(hash, targetAnchor)

            window.scrollTo({
                top: targetAnchor.offsetTop,
                behavior: 'smooth'
            });

        })
    }


    })
</script>

</body>
</html>
