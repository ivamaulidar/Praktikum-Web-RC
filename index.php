<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minggu 6</title>
        <style>
        form {
            background-color: #EB8219;
            color: rgb(139, 0, 0);
            font-family: arial;
            font-size: 15px;
            text-align: center;
            width: 30%;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }
        tr{
            font-size: 10px;
            color:rgb(110, 0, 0);
        }
        h2{
            font-family: arial;
            text-align: center;
        }
        body{
            background-image: url("foto1.jpg");
        }
        button{
            background-color: #ADEC2F;
        }
    </style>
</head>
<body >
    <section>
    </section>
    <section>
        <div>
            <h2>FORM BELANJA BUAH </h2>
            <form action="praktikum6.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                <label for="">Mangga Rp 15.000 </label>
                <input type="number" id="mangga" onchange="setValue()" name="mangga"> <br>
                <label for="">Jambu Rp 13.000 </label>
                <input type="number" id="jambu" onchange="setValue()" name="jambu"> <br>
                <label for="">Salak Rp 10.000 </label>
                <input type="number" id="salak" onchange="setValue()" name="salak"> <br>
                <label for="">Total Harga Belanja: </label>
                <input type="text" id="total" name="total" readonly> <br>
                <button type="submit" name="">SUBMIT</button>
            </form>
        </div>
    </section>
</body>
<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>