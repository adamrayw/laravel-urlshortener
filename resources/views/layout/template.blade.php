<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://kit.fontawesome.com/6678200964.js" crossorigin="anonymous"></script> -->
    <title>@yield('title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');

        * {

            margin: 0;
            padding: 0;
            box-sizing: content-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        header {
            background-color: white;
            padding: 12px 16px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-top h1 {
            margin-bottom: 4px;
            color: rgb(111, 195, 223);

        }

        @media only screen and (max-width: 600px) {
            header {
                flex-direction: column;
            }

            .header-top h1 {
                margin-bottom: 4px;
                color: rgb(111, 195, 223);
                text-align: center;
            }

            .header-top {
                margin-bottom: 18px;
            }

            .form-container h1,
            .form-container p {
                font-size: 1em;
            }

            .about {
                font-size: 16px;
            }

            .link {
                width: 100px;
                overflow: auto;
            }

            .link {
                width: 100%;
                overflow: auto;
                white-space: nowrap;
            }
        }

        .link {
            white-space: nowrap;
        }

        li {
            display: inline;
            word-wrap: normal;
        }

        li a {
            font-size: 16px;
            margin: 0 10px 0 10px;
            text-decoration: none;
            padding: 4px 8px;
            color: gray;
            transition: .3s all;
        }

        li a:hover {
            /* background-color: lightblue; */
            padding: 4px 8px;
            color: rgb(111, 195, 223);
            border-bottom: 1px solid lightblue;
            transition: .3s all;

        }



        h1 {
            color: rgb(111, 195, 223)
        }

        p {
            color: rgb(134, 132, 132);
            ;
            font-weight: 400;

        }

        .header-container {
            padding: 0 10px;

        }

        .header {
            max-width: 600px;
            margin: 40px auto;
            padding: 40px 20px;
            border-radius: 8px;
            background-color: rgb(111, 195, 223);
            box-shadow: rgb(143, 214, 238) 0px 8px 24px;
            text-align: center;
        }

        .header-title h1 {
            font-size: 2.4em;
            margin-bottom: 26px;
            color: white;
        }

        input[type=text],
        textarea {
            text-align: center;
            border: 1px solid white;
            padding: 10px;
            color: gray;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            background-color: rgb(255, 255, 255);
            transition: .6s all;
        }

        input:focus,
        textarea:focus {
            border: 1px solid lightblue;
            background-color: white;
            color: rgb(111, 195, 223);
            border-radius: 8;
            transition: .6s all;
        }

        ::placeholder {
            color: rgb(111, 195, 223);
        }

        .short-btn button {
            border: 0px;
            display: inline-block;
            font-size: 14px;
            margin-top: 16px;
            padding: 8px 16px;
            color: rgb(111, 195, 223);
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            background-color: white;
            transition: .3s all;
        }

        .short-btn button:hover {
            background-color: rgb(207, 207, 207);
            transition: .3s all;
        }

        /* about */

        .about {
            font-size: 18px;
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
            padding: 0 20px;
        }

        .about-title {
            margin-bottom: 20px;
            max-width: 400px;
            margin: 0 auto 20px auto;
            border-bottom: 1px solid rgb(218, 216, 216);
        }

        #shortku {
            font-weight: bold;
            color: rgb(111, 195, 223);
        }

        .form {
            max-width: 600px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .form-container {
            padding: 0 10px;
            text-align: center;
            background-color: rgb(111, 195, 223);
            box-shadow: rgb(143, 214, 238) 0px 8px 24px;
            border-radius: 8px;
        }

        .form-container h1 {
            font-size: 28px;
            margin: 16px 0 0 0;
            display: inline-block;
            color: white;
        }

        .form-container p {
            font-size: 16px;
            margin: 10px 0 16px 0;
            display: inline-block;
            color: white;
        }

        .form-contact {
            margin: 0px auto;
            padding: 20px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .input {
            margin-bottom: 20px;
        }

        .submit-btn a {
            display: inline-block;
            font-size: 14px;
            margin: 0px 0 16px 0;
            padding: 8px 16px;
            color: rgb(111, 195, 223);
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            background-color: white;
            transition: .3s all;
        }

        .submit-btn a:hover {
            background-color: rgb(207, 207, 207);
            transition: .3s all;
        }

        footer {
            text-align: center;
            font-size: 10px;
            padding: 6px;
        }

        .latest {
            max-width: 600px;
            margin: 40px auto;
            padding: 40px 20px;
            border-radius: 8px;
            background-color: rgb(111, 195, 223);
            box-shadow: rgb(143, 214, 238) 0px 8px 24px;
            text-align: left;
        }

        .latest h1 {
            color: white;
            margin-bottom: 6px;
        }

        .data {
            height: 200px;
            overflow: auto;
        }

        .latest hr {
            border: 1px solid white;
            color: white;
            margin-bottom: 16px;
        }

        .data>a {
            display: block;
            color: white;
            text-decoration: none;
            margin-bottom: 6px;
        }
    </style>
</head>

<body>
    <nav>
        <header>
            <div class="header-top">
                <h1>Shortku</h1>
                <p>Short your link simply</p>
            </div>
            <div class="link">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pages/contact">Contact</a></li>
                    <li><a href="/pages/about">About</a></li>
                    <!-- <li><a href="/pages/about">Find</a></li> -->
                </ol>
            </div>
        </header>
    </nav>
    @yield('content')
    <footer>
        <div>
            <p>Copyright &copy; 2021 Adam Ray</p>
        </div>
    </footer>
</body>

</html>