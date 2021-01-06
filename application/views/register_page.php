<br />
<form action="<?= base_url(); ?>index.php/register/doRegister" method="post">
    <h2>Registration</h2>
    <hr />
    <!-- show error messages if the form validation fails -->
    <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
            <?=$this->session->flashdata('errors'); ?>
        </div>
    <?php } ?>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" required class="form-control" id="name">
    </div>
 
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" required class="form-control" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password" required class="form-control" id="pwd">
    </div>
	<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Test Gaya Belajar</h1>
				</div> 
				<div class="form-group">
                   <label> 1. Jika hendak menghadapi ulangan, maka Anda …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" id="option1" name="option1" value="A">Membaca catatan yang telah di buat, membuka kembali text book serta memperhatikan diagram atau gambar yang berkaitan dengan materi yang diujikan
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" id="option1" name="option1" value="B">Meminta teman anda untuk memberinya pertanyaan tentang materi yang dipelajari.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="option1" name="option1" value="C">Membuat ringkasan berupa diagram atau gambar (misalnya mind-mapping)
                        </label>
                    </div>
                </div>
                
				<div class="form-group">
                   <label> 2. Jika mendengar musik atau lagu yang Anda sukai, biasanya Anda akan … …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios1" value="A" >Menghayati lagu yang ia dengar (seperti memejamkan mata, melamun dsb).
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios2" value="B">Bergumam mengikuti lagu
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option2" id="optionsRadios3" value="C">Bergoyang mengikuti irama lagu
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>3. Jika menghadapi banyak tugas, maka Anda akan…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios1" value="A">Membuat daftar tugas dan menentukan prioritas mana yang Anda akan kerjakan terlebih dahulu.
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios2" value="B">Membicarakannya dengan rekan Anda apa yang sebaiknya Anda lakukan
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option3" id="optionsRadios3" value="C">Membuat daftar tugas dan kemudian menuliskan cara-cara Anda akan menyelesaikan tugas-tugas tersebut.
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>4. Apa bacaan favorit Anda…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios1" value="A">Buku-buku dengan banyak gambar
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios2" value="B">Buku-buku dengan banyak percakapan di dalamnya.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option4" id="optionsRadios3" value="C">Buku apa saja yang menarik hati Anda. Terutama jika isi buku itu adalah jawaban dari pertanyaan-pertanyaan yang Anda cari
                        </label>
                    </div>
                </div>
							
				<div class="form-group">
                   <label>5. Model belajar apa yang paling anda sukai…</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios1" value="A">Melihat guru saat menjelaskan materi
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios2" value="B">Mendengar guru saat menjelaskan materi.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option5" id="optionsRadios3" value="C">Mempraktekan apa yang dilakukan oleh guru.
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>6.Jika berada disebuah tempat wisata baru, maka Anda akan …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios1" value="A">Melihat-lihat sekeliling terlebih dahulu, mengamati petunjuk wahana, dan barulah Anda memilih salah satu wahana.
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios2" value="B">Bertanya kepada orang lain dan memintanya memberi saran whana mana yang paling asik untuk pertama kali.
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option6" id="optionsRadios3" value="C">Langsung mencoba permainan yang Anda anggap paling menarik
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>7.Kegiatan ekstra kurikuler apa yang Anda sukai? …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios1" value="A">Menggambar, membuat prakarya
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios2" value="B">Musik
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option7" id="optionsRadios3" value="C">Olahraga
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>8.Apa reaksi saat Anda bahagia? …</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios1" value="A">Santai dan hanya tersenyum lebar.
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios2" value="B">Berteriak kegirangan
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option8" id="optionsRadios3" value="C">Melompat-lompat senang
                        </label>
                    </div>
                </div>
				
				<div class="form-group">
                   <label>9.Hal apakah yang paling dapat mengganggu konsentrasi Anda?</label>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios1" value="A">Apa saja yang melintas di depannya
                        </label>
                    </div>
                   <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios2" value="B">Aneka suara
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="option9" id="optionsRadios3" value="C">Perasaan lapar,haus atau cemas
                        </label>
                    </div>
                </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <span class="float-right"><a href="<?= base_url() . 'index.php/login'; ?>" class="btn btn-primary">Login</a></span>
</form>