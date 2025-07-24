<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>VELVETCHARM</title>
</head>
<body>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f8f8;
}

header {
    background-color: #fff;
    padding: 20px;
    text-align: center;
}

nav {
    margin-top: 10px;
}

main {
    display: flex;
    padding: 20px;
}

aside {
    width: 20%;
    background-color: #fff;
    padding: 15px;
    border-right: 1px solid #ccc;
}

.products {
    width: 80%;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.product {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.product img {
    max-width: 100%;
    height: auto;
}

.discount {
    color: red;
    font-weight: bold;
}

footer {
    text-align: center;
    padding: 20px;
    background-color: #fff;
    position: relative;
    bottom: 0;
    width: 100%;
}

</style>
    <header>
        <h1>VELVETCHARM</h1>
        <nav>
            <input type="text" placeholder="Tìm kiếm...">
            <button>Giỏ hàng</button>
        </nav>
    </header>

    <main>
        <aside>
            <h2>Danh Mục</h2>
            <label><input type="checkbox"> Bông tai</label><br>
            <label><input type="checkbox"> Vòng tay</label><br>
            <label><input type="checkbox"> Nhẫn</label><br>
            <!-- Add more categories -->
        </aside>

        <section class="products">
            <h2>Sản Phẩm Mới</h2>
            <div class="product">
                <img src="path/to/image1.jpg" alt="Sản phẩm 1">
                <p>Khuyên Tai Vàng</p>
                <p>3,000,000 VNĐ</p>
                <p class="discount">-30%</p>
            </div>
            <div class="product">
                <img src="path/to/image2.jpg" alt="Sản phẩm 2">
                <p>Khuyên Tai Vàng Đá Đỏ</p>
                <p>5,000,000 VNĐ</p>
                <p class="discount">-30%</p>
            </div>
            <!-- Add more products -->
        </section>
    </main>

    <footer>
        <p>&copy; 2023 VELVETCHARM. Tất cả quyền được bảo lưu.</p>
    </footer>
</body>
</html>
