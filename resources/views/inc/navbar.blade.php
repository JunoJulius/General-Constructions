



            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}



            <span style="cursor:pointer;" onclick="openNav()"><p style="font-size:26pt;"><b>&#9776;<i class="fa fa-arrow-right"></i>  open</b></p></span>



                <div id="mySidenav" class="sidenav">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i style="color:white;" class="fa fa-arrow-left"></i></a>

                  <div style="background-color:white;border-radius:5%;">


                  <a class="navbar-brand" href="{{ url('/') }}" >
                          <img src="../images/planer-logo.png" width="150px">
                  </a>

                </div>

                  <div class="links">
                    <a href="/"><i class="fa fa-home"></i> Home</a>
                    <a href="/about"><i class="fa fa-address-card"></i> About</a>
                    <a href="/service"><i class="fa fa-wrench"></i> Services</a>
                    <a href="/contact"><i class="fa fa-phone"></i> Contact</a>
                    <a href=""><i class="fa fa-car"></i> Other</a>
              </div>


                </div>
