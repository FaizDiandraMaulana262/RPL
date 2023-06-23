<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container">
            <a class="navbar-brand" href="/">Helpdesk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/knowledge">Knowledge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/ticket">Open Ticket</a>
                    </li>
                    @guest
                    @else
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/yourTicket/{{auth()->user()->id}}">Your Ticket</a>
                    </li>
                    @endguest
                </ul>
                @guest
                    <div class="btn btn-primary">
                        <a class="nav-link" href="/login">Login</a>
                    </div>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">{{ auth()->user()->nama }}</button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                @if (auth()->user()->role == 'Admin')
                                    <li>
                                        <a class="btn dropdown-item" href="/admin/ticket">All Ticket</a>
                                    </li>
                                @endif
                                <li>
                                    <form action="{{ url('/logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        <button class="dropdown-item" href="">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @endguest
            </div>
        </div>
    </nav>
</div>
