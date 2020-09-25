<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div id="app">
            @section('sidebar')
                Halooo! Ini Adalah Master Sidebar
            @show

            <main class="py-4">
                @yield('content')
            </main>

            <main class="py-4">
                <p align=center> Hello gays! Perkenalkan, nama saya Vilda Nur Amalia. Saya kuliah di Politeknik Negeri Malang. Saya mengambil jurusan Teknologi Informasi Prodi D-III Manajemen Informatika. Salam kenal ya! Semangattt!</p>
            </main>

            <main class="py-4">
                <br><br><br><br><br>
                <p align=center>ABOUT : </p>
                @section('about')
                @show
            </main>
        </div>
    </body>
</html>