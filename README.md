# MiniShop Laravel - Phiếu 08

## Thông tin

- Môn học: Phát triển ứng dụng Web
- Phiếu: 08 - Migration & Seeder
- Project: MiniShop Laravel
- Database: `minishop_laravel`

---

## Yêu cầu

- PHP >= 8.2
- Composer
- MySQL
- Laravel 12

---

## Cài đặt

Clone project:

```bash
git clone https://github.com/dinhngochuy2909/cse485-ms-08.git
```

Di chuyển vào thư mục:

```bash
cd cse485-ms-08
```

Cài đặt thư viện:

```bash
composer install
```

Tạo file môi trường:

```bash
copy .env.example .env
```

Sinh key:

```bash
php artisan key:generate
```

---

## Cấu hình Database

Sửa file `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=minishop_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Tạo database:

```
minishop_laravel
```

---

## Chạy Migration và Seeder

```bash
php artisan migrate:fresh --seed
```

---

## Chạy Project

```bash
php artisan serve
```

Mở trình duyệt:

```
http://127.0.0.1:8000
```

---

## Kiểm tra dữ liệu

Đếm số bản ghi:

```bash
php artisan tinker --execute="echo App\Models\Category::count().' '.App\Models\Product::count();"
```

Kết quả:

```
3 28
```

---

## Cấu trúc dữ liệu

### Categories

- Ban phim
- Chuot
- Man hinh

### Products

- 8 sản phẩm CORE
- 20 sản phẩm Faker

Tổng:

- 3 Categories
- 28 Products

---

## Công nghệ

- Laravel 12
- MySQL
- Eloquent ORM
- Migration
- Seeder
- Factory
- Faker

---

## Tác giả

- Họ tên: Đinh Ngọc Huy
- MSSV: 2251162033