{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" data-widget="pushmenu" href="/"><i class="fas fa-bars"></i></a>

      </li>

      <li class="nav-item d-none d-sm-inline-block">

        <a href="/" class="nav-link">Home</a>

      </li>

      <!-- <li class="nav-item d-none d-sm-inline-block">

        <a href="#" class="nav-link">Contact</a>

      </li> -->

    </ul>



    <!-- SEARCH FORM -->

  



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">

      <!-- Messages Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-comments"></i>

          <span class="badge badge-danger navbar-badge">3</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="../../adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  Brad Diesel

                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">Call me whenever you can...</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="../../adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  John Pierce

                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">I got your message bro</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <!-- Message Start -->

            <div class="media">

              <img src="{{asset('adminlte/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">

              <div class="media-body">

                <h3 class="dropdown-item-title">

                  Nora Silvester

                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>

                </h3>

                <p class="text-sm">The subject goes here</p>

                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>

              </div>

            </div>

            <!-- Message End -->

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>

        </div>

      </li>

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

          <i class="far fa-bell"></i>

          <span class="badge badge-warning navbar-badge">15</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <span class="dropdown-item dropdown-header">15 Notifications</span>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-envelope mr-2"></i> 4 new messages

            <span class="float-right text-muted text-sm">3 mins</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-users mr-2"></i> 8 friend requests

            <span class="float-right text-muted text-sm">12 hours</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">

            <i class="fas fa-file mr-2"></i> 3 new reports

            <span class="float-right text-muted text-sm">2 days</span>

          </a>

          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>

        </div>

      </li>

      <li class="nav-item dropdown">



<a class="nav-link" data-toggle="dropdown" href="#">



  <!-- <i class="fas fa-th-large fa-user"></i> -->







  <img src="{{asset('assets/images/users/'.Auth::user()->photo)??asset('adminlte/dist/img/user2-160x160.jpg')}}" width='25' class="img-circle elevation-2" alt="User Image">







      @if(!empty(Auth::user()))

        {{ \Illuminate\Support\Str::limit(Auth::user()->name, $limit = 8, $end = '...') }}

     @else

     <script type="text/javascript">

        window.location = "{{url('/login')}}";//here double curly bracket

    </script>

   

    @endif 



</a>



<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">



 

                                                   

                                                        <a class='dropdown-item' href="my-profile"><img src="{{asset('assets/images/users/'.Auth::user()->photo)}}" width='100' height='100' alt="User Image"></a>

                                                



                                                

                                                        <h4 class='dropdown-item'  style="text-transform: capitalize;">{{Auth::user()->name}}</h4>

                                                        <h5 class='dropdown-item' >@php $us=Auth::user(); @endphp @if(!empty($us->getRoleNames()))

                      @foreach($us->getRoleNames() as $v)

                      <label class="badge badge-success">{{ $v }}</label>

                    @endforeach

                  @endif</h5>

                                             

                                                    <div class="divider"></div>

                                                    <div class='dropdown-item'>

                                                <div class='row'>

                                                        <a class='' style='margin: 3px;' href="{{url('my-profile')}}" data-toggle="tooltip" title="" data-original-title="My Profile"><i class="fa fa-user"></i> Profile</a>

                                                        <a class='' style='margin: 3px;' href="{{url('change-password')}}" data-toggle="tooltip" title="" data-original-title="Change Password"><i class="fa fa-key"></i> Password</a> 

                                                         <a class='' style='margin: 3px;' href="{{ route('logout') }}"



onclick="event.preventDefault();



              document.getElementById('logout').submit();"><i class="fas fa-sign-out-alt"></i>



 {{ __('Logout') }}



</a>

</div>

</div>

                                                   

                                   







                            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">



                                @csrf



                            </form>



 



</li>



    </ul>

  </nav>
  <section id="loading">
    <div id="loading-content"></div>
  </section> --}}




  <li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        @if(Auth::check() && Auth::user()->photo)
            <img src="{{ asset('assets/images/users/' . Auth::user()->photo) }}" width="25" class="img-circle elevation-2" alt="User Image">
        @else
            <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" width="25" class="img-circle elevation-2" alt="Default User Image">
        @endif

        @if(Auth::check())
            {{ \Illuminate\Support\Str::limit(Auth::user()->name, 8, '...') }}
        @else
            <script type="text/javascript">
                window.location = "{{ url('/login') }}";
            </script>
        @endif
    </a>

    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        @if(Auth::check())
            <a class="dropdown-item" href="my-profile">
                <img src="{{ asset('assets/images/users/' . Auth::user()->photo) }}" width="100" height="100" alt="User Image">
            </a>
            <h4 class="dropdown-item" style="text-transform: capitalize;">{{ Auth::user()->name }}</h4>
            <h5 class="dropdown-item">
                @if(!empty(Auth::user()->getRoleNames()))
                    @foreach(Auth::user()->getRoleNames() as $role)
                        <label class="badge badge-success">{{ $role }}</label>
                    @endforeach
                @endif
            </h5>
            <div class="divider"></div>
            <div class="dropdown-item">
                <div class="row">
                    <a class="" style="margin: 3px;" href="{{ url('my-profile') }}" data-toggle="tooltip" title="My Profile"><i class="fa fa-user"></i> Profile</a>
                    <a class="" style="margin: 3px;" href="{{ url('change-password') }}" data-toggle="tooltip" title="Change Password"><i class="fa fa-key"></i> Password</a>
                    <a class="" style="margin: 3px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout').submit();"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
            <form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
        @endif
    </div>
</li>
