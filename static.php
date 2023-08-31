<?php 


class Siswa {

    public static $list_jenjang = ['SD','SMP', 'SMA'];

    private static $totalSiswa = 0;

    public static function count(){

        return self::$totalSiswa;
    } 

    public static function mendaftar($jumlah_siswa){

        return self::$totalSiswa += $jumlah_siswa;
    }

   
}



class SiswaMondok extends Siswa {

    public static $asrama = 'Abu Bakar';


}

SiswaMondok::$list_jenjang[] = "Alumni";

$list_jenjang = Siswa::$list_jenjang;

echo "Awal Tahun:" . SiswaMondok::count() . "</br>";

SiswaMondok::mendaftar(2);



foreach ($list_jenjang as $jenjang) {
   echo $jenjang . '</br>';
}


echo "Akhir Tahun:" .  SiswaMondok::count();


