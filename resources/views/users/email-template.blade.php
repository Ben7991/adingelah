<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .header {
        background-color: #333;
        color: #fff;
        padding: 15px;
    }

    .logo {
        width: 150px;
        height: auto;
        float: left;
    }

    .title {
        font-size: 25px;
        font-weight: bold;
        margin-top: 10px;
    }

    .text-green{
        color: #1b998b;
        font-weight: 500;
    }

    .content {
        padding: 20px;
    }

    .footer {
        background-color: #eee;
        padding: 10px;
        text-align: center;
    }
</style>


<body>
<div class="header">
    <h1 class="title">Adingelah </h1>
</div>
<div class="content">
    <p class="title">Dear {{ $user->name }},</p>
    <p>
    <span>Welcome to Adingelah!</span>
    Your account password is <span class="text-green">hea2454</span>.
    Please keep it secure and never share it with anyone
    </p>
</div>
<div class="footer">
    &copy; Adingelah <?php echo date("Y"); ?>. All rights reserved.
</div>
</body>
