# devsecops-lab

Repo latihan **Bengkel DevSecOps 4 hari**. Dua app Kedai Bengkel yang **sengaja tidak selamat**:

| Track | Folder | Teknologi |
|---|---|---|
| A | `aspnet-app/` | ASP.NET Core (.NET 10), SQLite |
| B | `laravel-app/` | PHP Laravel, SQLite |

Pilih **satu** track. Track satu lagi ialah cabaran tambahan.

> **Amaran.** Kedua-dua app mengandungi kelemahan yang sebenar. Jalankan hanya pada laptop anda sendiri
> dan jangan sekali-kali deploy ke internet. Semua kata laluan, kunci dan token dalam repo ini adalah **palsu**
> dan dijana khas untuk latihan. Jangan guna nilai sebenar.

## Struktur

```
devsecops-lab/
├── aspnet-app/     Track A: app, Dockerfile
├── laravel-app/    Track B: app, Dockerfile
├── k8s/            Manifest Kubernetes (sasaran latihan IaC)
└── terraform/      Konfigurasi Terraform (sasaran latihan IaC, jangan apply)
```

## Jalankan app (Track A)

Anda tidak perlu memasang .NET. Semua berjalan dalam Docker:

```bash
cd aspnet-app
docker build -t aspnet-app:latest .
docker run --rm -p 8080:8080 aspnet-app:latest
```

Buka <http://localhost:8080>.

## Jalankan app (Track B)

Anda tidak perlu memasang PHP atau Composer. Semua berjalan dalam Docker:

```bash
cd laravel-app
docker build -t laravel-app:latest .
docker run --rm -p 8081:8080 laravel-app:latest
```

Buka <http://localhost:8081>. Binaan pertama mengambil masa beberapa minit kerana Composer memuat turun dependency.

## Apa yang akan anda lakukan

| Hari | Latihan pada repo ini |
|---|---|
| 1 | Cari secret dalam kod dan git history |
| 2 | Imbas kod (SAST) dan dependency (SCA), baiki kelemahan |
| 3 | Imbas Dockerfile, `k8s/` dan `terraform/` (IaC), hantar image ke Harbor, DAST |
| 4 | Satukan semuanya dalam pipeline CI dengan quality gate |

Arahan langkah demi langkah ada dalam tutorial bengkel.
