<hr>
<section class="page-section portfolio" id="portfolio">
<div class="container">
<form action="<?= base_url('index.php/auth/proses_login')?>" method="post">    
<div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpid">
        <small id="helpid" class="text-muted">Masukan Username anda</small>
</div>

    <div class="container">
<form action="<?= base_url('auth/proses_login')?>" method="post">    
<div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpid">
        <small id="helpid" class="text-muted">Masukan Password anda</small>
</div>
    <button type="submit" class="btn btn-dark">Login</button>
</form>
</div>
</section>