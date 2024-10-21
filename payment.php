<!DOCTYPE html>
<html>
<head>
    <title>Rare Fairy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #010f1c;
            font-family: "Jost", sans-serif;
            ;
        }

        body {
            background: #efefef;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            width: 100%;
        }

        section {
            max-width: 95%;
            max-height: 90vh;
            width: 600px;
            background: #fff;
            padding: 40px;
            overflow-y: auto;
            border-top: 10px solid  #ff3399;
            ;

        }

        .flex {
            display: flex;
            flex-direction: column;
        }

        .flex input {
            border: none;
            outline: none;
            padding: 0px 20px;
            height: 50px;
            width: 100%;
            border: 1px solid #e8e8e8;
        }

        .m10 {
            margin-top: 10px;

        }

        .m20 {
            margin-top: 20px;
        }

        button {
            width: 200px;
            border: none;
            outline: none;
            cursor: pointer;
            height: 50px;
            background: #ff3399;
            color: #fff;
            padding: 0px 20px;

        }

        input:focus {
            border: 1px solid #ff3399;
        }

        button:hover {
            background: #ff66b3;
        }

        .get_qr {

            height: 200px;
            width: 200px;
            border: 1px solid #999;
            background: #efefef;
        }

        .qr_code {
            width: 100%;
            height: 100%;
            display: none;
        }

        p {
            color: #7a7a7a;
            font-size: 16px;
            line-height: 24px
        }

        .im {
            max-width: 100%;
            width: 300px;
        }
    </style>

</head>

<body>
    <section>
        <h1>Rare Fairy</h1>

            <p>Scan the QR Code with any UPI App and pay the amount then download the source code.</p>
            <center><img src="./img/qr1.png" class="im m10"></center>

            <a href="index.html"><button class="m20">Continue</button></a>
        </div>
    </section>
</body>

</html>