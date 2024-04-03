<!DOCTYPE html>
<html>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWjT+T0qfrbM+BzxQvThuokKF/+DSuIcOPu/dTPy7yGtT++WLv" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" link rel=https://cdn.lineicons.com/4.0/lineicons.css rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <x-navbar-profile>

        </x-navbar-profile>
        <style>
            body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
            "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background-color: rgb(22, 20, 24);
            color: #eee;
            user-select: none;
            }

            code {
            font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
                monospace;
            }

            .nft{
            user-select:none;
            max-width: 300px;
            margin: 5rem auto;
            border: 1px solid #ffffff22;
            background-color: #282c34;
            background: linear-gradient(0deg, rgba(40,44,52,1) 0%, rgba(17,0,32,.5) 100%);
            box-shadow: 0 7px 20px 5px #00000088;
            border-radius: .7rem;
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            overflow: hidden;
            transition: .5s all;
            hr{
                width: 100%;
                border: none;
                border-bottom: 1px solid #88888855;
                margin-top: 0;
            }
            ins{
                text-decoration: none;
            }
            .main{
                display: flex;
                flex-direction: column;
                width: 90%;
                padding: 1rem;
                .tokenImage{
                border-radius: .5rem;
                max-width: 100%;
                height: 250px;
                object-fit: cover;
                }
                .description{
                margin: .5rem 0;
                color: #a89ec9;
                }
                .tokenInfo{
                display: flex;
                justify-content: space-between;
                align-items: center;
                .price{
                    display: flex;
                    align-items: center;
                    color: #ee83e5;
                    font-weight: 700;
                    ins{
                    margin-left: -.3rem;
                    margin-right: .5rem;
                    }
                }
                .duration{
                    display: flex;
                    align-items: center;
                    color: #a89ec9;
                    margin-right: .2rem;
                    ins{
                    margin: .5rem;
                    margin-bottom: .4rem;
                    }
                }
                }
                .creator{
                display: flex;
                align-items: center;
                margin-top: .2rem;
                margin-bottom: -.3rem;
                ins{
                    color: #a89ec9;
                    text-decoration: none;
                }
                .wrapper{
                    display: flex;
                    align-items: center;
                    border: 1px solid #ffffff22;
                    padding: .3rem;
                    margin: 0;
                    margin-right: .5rem;
                    border-radius: 100%;
                    box-shadow: inset 0 0 0 4px #000000aa;
                    img{
                    border-radius: 100%;
                    border: 1px solid #ffffff22;
                    width: 2rem;
                    height: 2rem;
                    object-fit: cover;
                    margin: 0;
                    }
                }
                }
            }
            ::before{
                position: fixed;
                content: "";
                box-shadow: 0 0 100px 40px #ffffff08;
                top: -10%;
                left: -100%;
                transform: rotate(-45deg);
                height: 60rem;
                transition: .7s all;
            }
            &:hover{
                border: 1px solid #ffffff44;
                box-shadow: 0 7px 50px 10px #000000aa;
                transform: scale(1.015);
                filter: brightness(1.3);
                ::before{
                filter: brightness(.5);
                top: -100%;
                left: 200%;
                }
            }
            }

            .bg{
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            h1{
                font-size: 20rem;
                filter: opacity(0.5);
            }
            }
        </style>
    </head>

    <body class="row row-cols">
    @yield('menu')
      
    </body>

</html>