<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">
  

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="<?= base_url(); ?>index.php/register/doRegister" class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="password" placeholder="Email Address">
                </div>
				
                <div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Test Gaya Belajar</h1>
				</div> 
				<div class="form-group">
                   <label> 1. Jika hendak menghadapi ulangan, maka Anda …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" id="option1"  value=1 checked>Membaca catatan yang telah di buat, membuka kembali text book serta memperhatikan diagram atau gambar yang berkaitan dengan materi yang diujikan
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" id="option1"  value=2>Meminta Anda untuk memberinya pertanyaan tentang materi yang dipelajari.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="option1"  value=3>Membuat ringkasan berupa diagram atau gambar (misalnya mind-mapping)
                        </label>
                    </div>
                </div>
                
				<div class="form-group">
                   <label> 2. Jika mendengar musik atau lagu yang ia sukai, biasanya ia akan … …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios1" value=1 checked>Menghayati lagu yang ia dengar (seperti memejamkan mata, melamun dsb).
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios2" value=2>Bergumam mengikuti lagu
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios3" value=3>Bergoyang mengikuti irama lagu
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>3. Jika menghadapi banyak tugas, maka anak Anda akan…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios1" value="option1" checked>Membuat daftar tugas dan menentukan prioritas mana yang ia akan kerjakan terlebih dahulu.
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios2" value="option2">Membicarakannya dengan Anda atau temannya apa yang sebaiknya ia lakukan
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios3" value="option3">Membuat daftar tugas dan kemudian menuliskan cara-cara ia akan menyelesaikan tugas-tugas tersebut.
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>4. Apa bacaan favorit anak Anda…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios1" value="option1" checked>Komik atau buku cerita dengan banyak gambar
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios2" value="option2">Buku-buku misteri dengan banyak percakapan di dalamnya.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios3" value="option3">Buku apa saja yang menarik hatinya. Terutama jika isi buku itu adalah jawaban dari pertanyaan-pertanyaan yang ia cari
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>5. Apa bacaan favorit anak Anda…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios1" value="option1" checked>Komik atau buku cerita dengan banyak gambar
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios2" value="option2">Buku-buku misteri dengan banyak percakapan di dalamnya.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios3" value="option3">Buku apa saja yang menarik hatinya. Terutama jika isi buku itu adalah jawaban dari pertanyaan-pertanyaan yang ia cari
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>6.Jika mengajaknya kesebuah tempat permainan baru, maka ia akan …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios1" value="option1" checked>Melihat-lihat sekeliling terlebih dahulu, mengamati petunjuk permainan, dan barulah ia memilih salah satu permainan.
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios2" value="option2">Bertanya kepada petugas penjaga dan memintanya memberi saran permainan mana yang paling asik untuk dimainkan pertama kali.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios3" value="option3">Langsung mencoba permainan yang dianggapnya paling menarik
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>7.Kegiatan ekstra kurikuler apa yang ia sukai? …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios1" value="option1" checked>Menggambar, membuat prakarya
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios2" value="option2">Musik
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios3" value="option3">Olahraga
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>8.Apa reaksi saat anda bahagia? …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios1" value="option1" checked>Santai dan hanya tersenyum lebar.

                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios2" value="option2">Berteriak kegirangan
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios3" value="option3">Melompat-lompat senang
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>9.Hal apakah yang paling dapat mengganggu konsentrasi anak Anda?</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios1" value="option1" checked>Gambar atau apa saja yang melintas di depannya
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios2" value="option2">Aneka suara
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios3" value="option3">Perasaan lapar,haus atau cemas
                        </label>
                    </div>
                </div>
				<button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
				
					
                </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>
</body>

</html>
