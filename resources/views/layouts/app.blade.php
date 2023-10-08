<html>
    <head>
        <title>SIAK - @yield('title')//</title>
    </head>
 <head>
 <title>SIAK - @yield('title')</title>
 <style>
    body {
        margin: 0;
        padding: 0;
    }
 
    nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        display: inline-block;
    }
    
    nav a:hover {
        background-color: red;
    }
 
    .fixed-header,
    .fixed-footer {
        width: 100%;
        position: fixed;
        background: #333;
        padding: 5px;
        color: #fff;
    }
 
    .fixed-header {
    top: 0;
    }
    
    .fixed-footer {
    bottom: 0;
    text-align: center;
    }
    
 
    .content {
    width: 100%;
    padding-top: 60px;
    padding-bottom: 50px;
    }
    
    .content p {
    line-height: 100px;
    padding: 10px;
    }
    
 </style>
 </head>
 <body>
    <div class="fixed-header">
        <a href="/">Home</a>
        <a href="/Profil">Profil</a>
        <a href="/mahasiswa">Mahasiswa</a>
        <a href= "/matakuliah">Matakuliah</a>
    </div>
    <div class="content">
            @yield('content')
    </div>
    <div class="fixed-footer">
        Copyright &copy; 2021
    </div>
</body>
</html>
