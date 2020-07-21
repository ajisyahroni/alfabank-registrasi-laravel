<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <a class="{{request()->is('admin/dashboard') ? 'active' : ''}}" href="{{ route('admin.dashboard') }}">Dashboard</a>
    <a class="{{request()->is('admin/inbox') ? 'active' : ''}}" href="{{ route('admin.inbox') }}">Inbox <span class="badge badge-danger">5</span></a>
    <a class="{{request()->is('admin/sertifikasi') ? 'active' : ''}}" href="{{ route('admin.sertifikasi') }}">Sertifikasi</a>
    <a class="{{request()->is('admin/program-kursus') ? 'active' : ''}}" href="{{ route('admin.program-kursus') }}">Program Kursus</a>
    <a href="{{route('admin.logout')}}">Keluar</a>
</div>