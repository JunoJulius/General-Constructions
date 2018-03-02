<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>General Constructions</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <style>
            html, body {
                /* background-color: #fff; */
                background-image: url("./images/woodconstruct.jpeg");
                background-repeat: no-repeat;
                background-size: cover;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                overflow-x: hidden;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: -200px;
            }

            .title {
                color: rgb(212, 212, 212);
                padding: 25px;
                border-radius: 5px;
                font-size: 110px;
                font-weight: 700;
                text-shadow: 0px 1px 2px rgb(0, 255, 250);
                background-color: rgba(51, 51, 51, 0.58);
                animation:shadow 3s 1 ease;

                animation-delay: 1s;
                animation-fill-mode: forwards;


            }
            @keyframes shadow {
              0% {
                text-shadow: 0px 0px 2px rgb(0, 255, 250);
              }
                20% {
                  text-shadow: 0px 0px 4px rgb(0, 255, 250);
                }
                  50% {
                    text-shadow: 0px 0px 8px rgb(0, 255, 250);

                  }
                    70% {
                      text-shadow: 0px 0px 16px rgb(0, 255, 250);

                    }
                      100% {
                        text-shadow: 2px 5px 0px rgb(0, 255, 250);

                      }


            }

.links{
  background-color: rgba(51, 51, 51, 0.58);
  padding:10px;
  border-radius: 12px;
}
            .links > a {

                color: #fff;
                padding: 0 25px;
                font-size: 18px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                letter-spacing: 4px;
                border: 0.5px solid white;
                padding:0px 50px 0px 50px;


            }
            .links > a:hover{
              transition: 0.3s;
              color: rgb(0, 255, 250);
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .sidenav {
    height: 100%;
    width: 50;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 80px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    margin-left:250px;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}

}
.serviceWrapper{
              display: flex;
              justify-content: space-around;
}

@media screen and (max-width: 820px) {
  .serviceWrapper
  {
    display:block;

  }
  #main {

      margin-left: 0px;

  }
  .sidenav{
    width:0;
  }
}

.service{
          position: relative;
          background-color: rgba(44, 236, 221, 0.76);
          width: 310px;
          height: 310px;
          border-radius: 10%;
          padding:10px 0px;
}
.service:hover{
  width: 330px;
  height: 330px;
  padding:10px 5px;
  transition: 0.4s;
  cursor:pointer;
  background-color: rgb(179, 255, 253);

}
.serviceImg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    min-width: 95%;
    max-width: 95%;
    max-height: 95%;
    border-radius:10%;
}
        </style>
    </head>
    <body>
      <div id="main">


      @yield('content')



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
</div>
    </body>
</html>
