<div class="header">
    <h1 class="title">Adingelah </h1>
</div>
<div class="content">
    <p class="title">Dear {{ $user->name }},</p>
    <p>
    <span>Welcome to Adingelah!</span>
    Your account password is <span class="text-green">{{ $password }}</span>.
    Please keep it secure and never share it with anyone
    </p>
</div>
<div class="footer">
    &copy; Adingelah <?php echo date("Y"); ?>. All rights reserved.
</div>
