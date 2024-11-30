<?php

class SidebarButton {
    public $selectedClass = "bg-white text-[#4A68FF]"; // Kelas untuk tombol aktif
    public $defaultClass = "text-white"; // Kelas default untuk tombol yang tidak aktif
    
    // Fungsi untuk mendapatkan kelas berdasarkan URL saat ini
    public function getClass($pageName) {
        // Membandingkan nama halaman dengan URL saat ini
        return ($_SERVER['REQUEST_URI'] == $pageName) ? $this->selectedClass : $this->defaultClass;
    }
}
?>
