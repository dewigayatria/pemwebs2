<?php
class NilaiMahasiswa{
    public $nama;
    public $mata_kuliah;
    public $nilai_uas;
    public $nilai_uts;
    public $nilai_tugas;
    public const PRESENTASI_UTS = 0.25;
    public const PRESENTASI_UAS = 0.3;
    public const PRESENTASI_TUGAS = 0.45;

    /**
     * konstanta untuk nilai kriteria ketuntasan minimal (KKM)
     */
    public const KKM = 60;

    public function getNilaiAkhir(){
        $nilai_akhir = self::PRESENTASI_UTS * $this->nilai_uts 
                        + self::PRESENTASI_UAS * $this->nilai_uas 
                        + self::PRESENTASI_TUGAS * $this->nilai_tugas;
        return $nilai_akhir;
    }

    public function kelulusan(){
        if($this->getNilaiAkhir() >= self::KKM){
        return "lulus";
    }else{
        return "tidak lulus";
    }
    }
}
?>