<nav class="nav justify-content-center">
    <li>
        <a class="nav-link {{Request::is('school*') ? 'active' : ''}}" href="{{route('school.index')}}">School</a>
    </li>
    <li>
        <a class="nav-link {{Request::is('student*') ? 'active' : ''}}" href="{{route('student.index')}}">Student</a>
    </li>
</nav>
