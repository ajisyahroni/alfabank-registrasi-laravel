

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a class="{{request()->is('user/dashboard') ? 'active' : ''}}" href="{{ route('user.dashboard') }}">Dashboard</a>
        <a class="{{request()->is('user/sertifikat') ? 'active' : ''}}" href="{{ route('user.sertifikat') }}">Sertifikat</a>
        <a class="{{request()->is('user/pengaturan') ? 'active' : ''}}" href="{{ route('user.pengaturan') }}">Pengaturan</a>
        <a href="{{ route('user.logout') }}">Keluar</a> 
    </div>