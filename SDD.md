# Software Design Documentation

## Introduction

### Overview Document
Dokumen ini menjelaskan desain perangkat lunak Helpdesk yang dikembangkan untuk Universitas Muhammadiyah Malang. Helpdesk adalah sistem yang digunakan untuk menerima, melacak, dan menyelesaikan tiket atau permintaan layanan dari pengguna. Software ini bertujuan untuk meningkatkan efisiensi dan kecepatan dalam menangani permintaan layanan dari mahasiswa, staf, dan pengguna lainnya di universitas.

### Scope
Sistem Helpdesk akan mencakup semua proses dan fitur yang diperlukan untuk mendukung layanan helpdesk yang efektif dan efisien di Universitas Muhammadiyah Malang.

## System Description

### Overview

Helpdesk Universitas Muhammadiyah Malang adalah sebuah sistem yang dibuat untuk menerima laporan, saran, kritikan, pertanyaan, dan sebagainya. khususnya untuk seluruh masyarakat Universitas Muhammadiyah Malang secara cepat dan tepat. Selain itu dengan adanya sistem ini diharapkan dapat membuat laporan lebih tertata dengan baik.

### Functions and Features

- Pendaftaran Pengguna : 
Pengguna dapat mendaftar dan membuat akun untuk mengakses sistem Helpdesk.

- Pembuatan Tiket : 
Pengguna dapat membuat tiket bantuan dengan mengisi informasi terkait masalah atau permintaan yang mereka hadapi.

- Pelacakan Tiket : 
Pengguna dapat melacak status dan perkembangan tiket bantuan yang mereka buat.

- Penyelesaian Tiket : 
Teknisi dapat menangani tiket bantuan, menghubungi pengguna untuk memberikan solusi, dan menandai tiket sebagai selesai setelah masalah teratasi.

### Benefits

- Meningkatkan efisiensi dalam menangani tiket bantuan dan memberikan solusi yang cepat kepada pengguna.

- Memungkinkan pengguna untuk melacak status tiket bantuan mereka secara real-time.

- Memiliki basis data tiket bantuan yang dapat digunakan untuk analisis performa dan perbaikan proses helpdesk.

### Scope 

- Sistem Helpdesk hanya tersedia untuk mahasiswa, dosen, dan staf administrasi di Universitas Muhammadiyah Malang.

- Sistem tidak mencakup fitur integrasi dengan sistem lain di luar lingkungan universitas.

## System Requirements

### Hardware Requirements

- Menyediakan kapasitas penyimpanan yang cukup, memori yang memadai, dan kecepatan pemrosesan yang sesuai untuk menangani beban kerja sistem.

- Komputer atau perangkat lain yang dapat mengakses sistem Helpdesk melalui web browser dengan spesifikasi minimum tertentu.

### Software Requirements

- Mendukung sistem operasi yang kompatibel dengan aplikasi web Helpdesk, seperti Windows, Linux, atau macOS.

- Membutuhkan database server yang mendukung sistem manajemen basis data seperti MySQL.

- Kompatibel dengan berbagai browser web umum seperti Google Chrome, Mozilla Firefox, atau Microsoft Edge.

### Network Requirements

- Sistem Helpdesk membutuhkan koneksi internet yang stabil untuk mengaksesnya dari lokasi yang berbeda.

- Memerlukan jaringan internal yang terhubung dengan server dan klien untuk komunikasi data yang lancar.

### Functional Requirements 

- Sistem harus dapat mengelola tiket pengguna yang mencakup pembuatan, pelacakan, pembaruan, dan penyelesaian tiket.

- Mendukung alur kerja yang didefinisikan secara fleksibel untuk menangani permintaan bantuan atau masalah dari pengguna.

- Mencatat dan melacak riwayat aktivitas tiket.

### Security Requirements

- Mengimplementasikan mekanisme otentikasi dan otorisasi yang membatasi akses ke sistem dan data hanya untuk pengguna yang sah.

- Melindungi data pengguna dan informasi sensitif lainnya melalui metode enkripsi dan kebijakan keamanan yang sesuai.

## Architectural Strategies

### Technologies

Kami menggunakan framework laravel dalam pembuatan sistem helpdesk berbasis web service.

### Database

- MySQL

### Programming Language

- PHP

## Closure

### Conclution
Sebagai kesimpulan, dokumen ini memberikan gambaran menyeluruh tentang desain perangkat lunak untuk sistem Helpdesk di Universitas Muhammadiyah Malang. Pertimbangan desain, strategi arsitektur, arsitektur sistem, persyaratan, fungsi dan fitur, serta keuntungan dan nilai tambah telah dibahas secara mendetail. Dengan mengikuti solusi desain yang diusulkan, kami bertujuan untuk menciptakan sistem Helpdesk yang efisien dan mudah digunakan yang memenuhi kebutuhan khusus universitas. Kami yakin bahwa desain ini akan sangat meningkatkan layanan dukungan yang diberikan kepada komunitas universitas dan meningkatkan efisiensi operasional secara keseluruhan. Terima kasih atas perhatian terhadap dokumen desain perangkat lunak ini, dan kami berharap untuk berhasilnya implementasi sistem Helpdesk.