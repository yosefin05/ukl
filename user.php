<!DOCTYPE html>
<html>
    <head>
        <title>RUMAH ADAT</title>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php"><img src="newlogo.png" width='90px'></a>
            </div>
            <div class="main">
                <ul>
                    <li><a href="roemahku.php">Rumah</a></li> 
                    <li><a href="pesan.php">Beli Tiket</a></li>              
                </ul>
            </div>
            <div class="title">
                <h1>RUMAH ADAT INDONESIA</h1>
            </div>
            </div>
        </header>
    </body>
    <footer>
        &copy; 2024 Rumah Adat Indonesia | Yosefin KT
    </footer>
</html>

<style>
*{
    margin:0;
    padding:0;
    font-family: sans-serif;
    font-size: 17px;
}
header{
    background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bg.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.logo{
    position:fixed;
    left:20px;
    top:10px;
}
ul{
    float:right;
    list-style-type: none;
    margin-top: 25px;
}
ul li{
    display: inline-block;
}
ul li a{
    text-decoration: none;
    color: white;
    padding: 15px 20px;
    border: 1px solid;
    transition: 0.6s;
    margin: 10px;
}
ul li a:hover{
    background-color:rgba(173, 173, 173, 0.377);
    color: white;
}
.main{
    max-width: 1200px;
    margin: auto; 
}
.title {
position: absolute;
text-align: center;
top: 43%;
left:27%;
transform: translate(-50%-50%);
}
.title h1{
    font-family: poppins;
    color: white;
    font-size: 50px;
}
.button {
    text-align: center;
    margin-top: 20px;
}
.btn1, .btn2 {
    border: 1px solid white;
    padding: 5px 15px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    margin: 10px;
    display: inline-block;
}
.btn1:hover, .btn2:hover {
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}
footer {
    background-color: #070F2B;
    color: white;
    text-align: center;
    padding: 10px;
}
</style>
