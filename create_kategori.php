<body>
<div class="button2">
    <a href="tabel_kategori.php" class="btn2">BACK</a>
</div> 
<div class="container">
    <h1>Kategori</h1>
        <form action="create_kategori_proses.php" method="POST">
        <table>
            <tr>
                <td>Pulau</td>
                <td><input type="text" name="pulau" required></td>
            </tr>
            <tr>
                <td>Informasi</td>
                <td><input type="text" name="informasi" required></td>
            </tr>
        </table>          
        <h5>Gunakan huruf kapital pada awal kata.</h5>    
            <button type="submit" class="btn">Submit</button>
            <a href="tabel_kategori.php"></a>
        </form>
</div>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #070F2B;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

table {
    margin: 0 auto;
    margin-bottom: 20px;
}

td {
    padding: 10px;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

h5 {
    color: #666;
    font-size: 0.9em;
    margin-bottom: 20px;
}

.btn {
    background-color: #070F2B;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    transition: 0.3s ease;
}

.btn:hover {
    background-color: #070F2B;
}

a{
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    color: #070F2B;
    font-size: 0.9em;
}

a:hover {
    color: #45a049;
}
.button2{
    position:absolute;
    top: 5%;
    left: 5%;
    transform: translate(-50%-50%);
    display: inline-block;
}

.btn2{
    border: 1px solid;
    padding: 5px 20px;
    color: white;
    text-decoration: none;
    transition: 0.6s ease;
    margin: 10px;
}

.btn2:hover{
    background-color: rgba(173, 173, 173, 0.377);
    color: white;
}
</style>