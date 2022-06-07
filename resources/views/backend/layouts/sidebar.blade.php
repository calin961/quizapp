<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">

                    <!--Dashboard-->
                    <ul class="widget widget-menu unstyled">
                        <li class="active"><a href="{{url('/')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                        </a></li>
                    </ul>
                    
                    <!--Quiz-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{route('quiz.create')}}"><i class="menu-icon icon-bullhorn"></i>Create quiz</a>
                        </li>
                        <li><a href="{{route('quiz.index')}}"><i class="menu-icon icon-inbox"></i>View quiz</a></li>                        
                    </ul>

                    <!--Question-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{route('question.create')}}"><i class="menu-icon icon-bullhorn"></i>Create question </a>
                        </li>
                        <li><a href="{{route('question.index')}}"><i class="menu-icon icon-inbox"></i>View question</a></li>                        
                    </ul>

                    <!--User-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{route('user.create')}}"><i class="menu-icon icon-bullhorn"></i>Create user </a>
                        </li>
                        <li><a href="{{route('user.index')}}"><i class="menu-icon icon-inbox"></i>View user</a></li>                        
                    </ul>

                    <!--Exam-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{route('user.exam')}}"><i class="menu-icon icon-bullhorn"></i>Assign Exam </a>
                        </li>
                        <li><a href="{{route('view.exam')}}"><i class="menu-icon icon-inbox"></i>View user exam</a></li>                        
                    </ul>

                    <!--Result-->
                    <ul class="widget widget-menu unstyled">
                        <li><a href="{{route('result')}}"><i class="menu-icon icon-bullhorn"></i>View Result</a></li>                      
                    </ul>
                    
                    <!--Logout-->            
                    <ul class="widget widget-menu unstyled">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <i class="icon-inbox"></i> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!--/.sidebar-->
            </div>