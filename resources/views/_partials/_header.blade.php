    <!-- Navigation bar here -->

    <nav class="nav-bar">
        <div class="nav-img-cont  ">
            <img src="/images/logo.jpg" alt="logo" srcset="" />
        </div>
        <div class="nav-links-cont  ">
            <a href=" /">Home</a>
            <a href="/academy">Training Academy</a>
            <a href="/skills">Skill Accelerator</a>
        </div>
        <div class="nav-auth-cont  ">
            <img src="/images/profile.png" alt="" srcset="" />
            <div class="dropdown-content">
                @if (Session::has('email'))
                    <a href="#">Profile</a>
                    <a href="#">Saved</a>
                    <a href="#">Settings</a>
                @else
                    <a href="/auth/login">Login</a>
                @endif

            </div>
        </div>
    </nav>
