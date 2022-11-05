<div class="sampul sampul_belum_pencet" id="awal" onclick="KeatasSampeIlang()">
    <!-- <img id="background-1" src="asset/sampul/background-.png" alt="" srcset=""> -->
    <!-- <img id="background-2" src="asset/sampul/background-.png" alt="" srcset=""> -->
    <div class="background-1"></div>
    <div class="background-2"></div>

    <div class="kata-kata">
        <div class="margin-top"></div>

        <div class="">
            <p>Kepada yth<br />bapak/ibu/saudara/i </p>
        </div>
        <div class="tamu">
            <p>
                <?php if (isset($_GET['to'])) {
                    echo $_GET['to'];
                } else {
                    echo "di Tempat";
                }
                ?>
            </p>
        </div>
        <p class="undang">Kami mengundang anda<br />dalam acara pernikahan</p>
        <br><br>
        <h1 class="nama">Icha & Yasir</h1>
    </div>
</div>