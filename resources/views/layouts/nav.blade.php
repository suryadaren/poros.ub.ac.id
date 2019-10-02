 <!-- Main Navigation================================================== -->
 <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="{{route('home')}}"><img src="/front/img/logo.png" alt="Logo POROS"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('home')}}#tf-home" class="scroll">Home</a></li>
            <li><a href="{{route('home')}}#tf-department" class="scroll">Department</a></li>
            <li><a href="{{route('home')}}#tf-division" class="scroll">Division</a></li>
            <li><a href="{{route('home')}}#tf-member" class="scroll">Member</a></li>
            <li><a href="{{route('home')}}#tf-product" class="scroll">Product</a></li>
            <li><a href="{{route('home')}}#tf-blog" class="scroll">Blog</a></li>
            <li><a href="{{route('home')}}#tf-contact" class="scroll">Contact</a></li>
            @if(auth()->check())
            <li><a href="{{route('login')}}" class="glyphicon glyphicon-log-in"></a></li>
            @else
            <li><a href="{{route('logout')}}/logout" class="glyphicon glyphicon-log-out" style="color: #14e648;"></a></li>
            @endif
        </ul>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
::before