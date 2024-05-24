
    <nav class='animated bounceInDown bg-dark'>
        <ul>
           
                <li class='sub-menu'><a href='#'>Cutie Postala<div class='fa fa-caret-down right'></div></a>
                    <ul>
                        <li><a href="{{ route('mesaje-trimise') }}">Trimise</a></li>
                        <li><a href="{{  route('mesaje-primite')}} ">Mesaje primite</a></li>

                    </ul>
                </li>
          
                <li class='sub-menu'><a href="{{ route('show-users')}}">Echipa</a>

            </li>
          
            <li><a href="{{  route('calendar')}}">Calendar</a></li>
         
            
            <li><a href="{{route('logout')}}">Logout</a></li>
        </ul>
    </nav>

  
