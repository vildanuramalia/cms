@extends('layouts.parent')

<!-- yang atas masih 1 folder, g usah di tambahin 'layouts' -->

@section('sidebar')
    @parent
    <p>Sidebar Halaman Home</p><br><br><br><br>
@endsection

<!-- @section('content')
    <p align=center>Halooo! Ini adalah konten yang ada pada bodynya ya : </p>
@endsection -->

@section('content', 'Halo guys disini')

@section('about')
    <p style="text-align: center;">Saya adalah ikan</p>
@endsection