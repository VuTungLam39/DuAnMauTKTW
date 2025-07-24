<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>VELVETCHARM - Trang Sức Vàng</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom fonts and styles to match the image */

    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto&display=swap');

    body {
      background-color: #f7f3eb;
      font-family: 'Roboto', sans-serif;
      color: #1f2937;
    }

    /* Header */

    header {
      background: #f7f3eb;
    }
    .nav-link {
      font-size: 14px;
      font-weight: 400;
      line-height: 1.2;
      text-transform: none;
      cursor: pointer;
      color: #1d2333;
      border-bottom: 3px solid transparent;
      transition: border-color 0.3s ease;
    }
    .nav-link:hover {
      border-color: #384369;
      color: #384369;
    }

    .logo-text {
      font-family: 'Playfair Display', serif;
      font-size: 26px;
      font-weight: 700;
      letter-spacing: 0.05em;
      color: #36486b;
      user-select: none;
    }

    .nav-search {
      font-size: 14px;
      color: #666666;
      border: none;
      background: transparent;
      outline: none;
      cursor: pointer;
    }

    /* Hero Section */

    .hero-image {
      position: relative;
      background-image: url('https://placehold.co/1920x700?text=Close-up+photo+of+a+woman+wearing+gold+jewelry+necklace+and+rings+on+hand');
      background-position: center;
      background-size: cover;
      height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .hero-text-wrapper {
      background-color: rgba(255 255 255 / 0.9);
      max-width: 400px;
      padding: 2rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 0 0 3px #ddbb77 inset;
      position: relative;
      font-family: 'Playfair Display', serif;
      text-align: center;
    }
    .hero-text-wrapper::before {
      content: '';
      position: absolute;
      border: 2px solid #ddbb77;
      width: 140px;
      height: 80px;
      top: 15px;
      left: 15px;
      pointer-events: none;
      border-radius: 0.25rem;
    }
    .hero-text {
      font-size: 20px;
      font-weight: 700;
      color: #2c3a6a;
      margin-bottom: 1rem;
      letter-spacing: 0.05em;
    }
    .hero-number {
      font-size: 56px;
      font-weight: 700;
      color: #1d2951;
      margin-bottom: 0.4rem;
      line-height: 1;
    }
    .hero-subtext {
      font-size: 14px;
      font-weight: 400;
      color: #384369;
      max-width: 280px;
      margin: 0 auto;
      font-style: italic;
    }

    /* Categories Section */

    .categories {
      margin-top: 40px;
      display: flex;
      justify-content: center;
      gap: 12px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding: 0 16px;
    }
    .category-card {
      flex: 1 1 140px;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      color: #1d2951;
      cursor: pointer;
      user-select: none;
      border-radius: 0 0 1rem 1rem;
      overflow: hidden;
      transition: transform 0.3s ease;
      box-shadow: 0 0 6px rgb(0 0 0 / 0.1);
    }
    .category-card:hover {
      transform: scale(1.05);
      z-index: 10;
      box-shadow: 0 10px 15px rgb(0 0 0 / 0.15);
    }

    .category-image {
      width: 100%;
      aspect-ratio: 1 / 1.3;
      object-fit: cover;
      transition: filter 0.25s ease;
    }
    .category-title {
      background: #13294b;
      color: white;
      font-size: 14px;
      padding: 0.7rem 0.5rem;
      text-align: center;
      width: 100%;
      user-select: none;
      border-radius: 0 0 12px 12px;
    }

    /* Product list */

    .product-section {
      max-width: 1200px;
      margin: 48px auto;
      padding: 0 16px;
    }
    .product-list {
      display: flex;
      flex-wrap: nowrap;
      gap: 12px;
      overflow-x: auto;
      scrollbar-width: thin;
      scrollbar-color: #999 transparent;
      scroll-padding: 16px;
    }
    .product-list::-webkit-scrollbar {
      height: 6px;
    }
    .product-list::-webkit-scrollbar-thumb {
      background-color: #999;
      border-radius: 3px;
    }
    .product-card {
      flex: 0 0 180px;
      border: 1px solid #ddd;
      background: white;
      border-radius: 6px;
      padding: 12px 8px 12px 8px;
      box-sizing: border-box;
      user-select: none;
      position: relative;
    }
    .product-image {
      width: 100%;
      aspect-ratio: 1 / 1;
      object-fit: contain;
      margin-bottom: 10px;
    }
    .discount-badge {
      position: absolute;
      top: 12px;
      left: 12px;
      background-color: #13294b;
      color: white;
      font-size: 12px;
      padding: 2px 6px;
      font-weight: 600;
      border-radius: 4px;
      user-select: none;
    }
    .product-name {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 4px;
      min-height: 3em;
    }
    .product-code {
      font-size: 11px;
      color: #666;
      margin-bottom: 6px;
      min-height: 1.1em;
    }
    .product-price {
      font-size: 14px;
      font-weight: 700;
      color: #1b2877;
    }

    /* Features alternate background section */

    .feature-section {
      display: flex;
      max-width: 1130px;
      gap: 40px;
      margin: 64px auto;
      padding: 0 16px;
      align-items: center;
      flex-wrap: wrap;
    }
    .feature-image-wrapper {
      flex: 1 1 350px;
      max-width: 400px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 0 12px rgb(0 0 0 / 0.15);
      background: white;
    }
    .feature-image {
      width: 100%;
      height: 100%;
      object-fit: contain;
      display: block;
    }
    .feature-text {
      flex: 1 1 420px;
      font-family: 'Playfair Display', serif;
      color: #2c2a29;
      font-size: 15px;
      line-height: 1.6;
      font-weight: 400;
      letter-spacing: 0.015em;
      text-align: justify;
    }
    .feature-text strong {
      font-weight: 600;
      color: #384369;
    }

    /* Button 'Sản Phẩm Mới' */

    .btn-view-more {
      background-color: #13294b;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: 600;
      font-family: 'Playfair Display', serif;
      padding: 12px 30px;
      margin: 24px auto 40px;
      display: block;
      cursor: pointer;
      transition: background-color 0.3s ease;
      letter-spacing: 0.04em;
      font-size: 16px;
      user-select: none;
    }
    .btn-view-more:hover {
      background-color: #1d375f;
    }

    /* Instagram Follow Section */

    .instagram-section {
      max-width: 1200px;
      margin: 0 auto 64px;
      padding: 0 16px;
      text-align: center;
    }
    .instagram-section h2 {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      font-size: 18px;
      color: #222222;
      margin-bottom: 16px;
    }
    .instagram-images {
      display: flex;
      gap: 10px;
      justify-content: center;
      flex-wrap: nowrap;
      overflow-x: auto;
      scroll-padding: 1rem;
      scrollbar-width: thin;
      scrollbar-color: #aaa transparent;
      user-select: none;
    }
    .instagram-images::-webkit-scrollbar {
      height: 6px;
    }
    .instagram-images::-webkit-scrollbar-thumb {
      background-color: #aaa;
      border-radius: 3px;
    }
    .instagram-images img {
      width: 90px;
      height: 90px;
      object-fit: cover;
      border-radius: 6px;
      cursor: pointer;
      flex-shrink: 0;
      box-shadow: 0 0 10px rgb(0 0 0 / 0.1);
      transition: transform 0.3s ease;
    }
    .instagram-images img:hover {
      transform: scale(1.1);
      z-index: 10;
    }

    /* Testimonial Section */

    .testimonial-section {
      max-width: 1200px;
      margin: 0 auto 64px;
      padding: 0 16px;
      font-family: 'Roboto', sans-serif;
      user-select: none;
    }
    .testimonial-wrapper {
      position: relative;
      display: flex;
      overflow: hidden;
      gap: 24px;
    }
    .testimonial-slide {
      min-width: 300px;
      max-width: 340px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 8px 15px rgb(0 0 0 / 0.1);
      padding: 22px 18px;
      box-sizing: border-box;
      flex-shrink: 0;
      transition: transform 0.4s ease;
      color: #2f2f2f;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .testimonial-photo {
      width: 72px;
      height: 72px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 10px;
      border: 3px solid #13294b;
    }
    .testimonial-text {
      font-style: italic;
      font-size: 14px;
      margin-bottom: 12px;
      line-height: 1.4;
      text-align: center;
      color: #4b4b4b;
    }
    .testimonial-author {
      font-weight: 700;
      font-size: 13px;
      text-align: center;
      color: #13294b;
      user-select: text;
    }
    .testimonial-controls {
      position: absolute;
      bottom: -28px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 24px;
      user-select: none;
    }
    .testimonial-btn {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background-color: #13294b;
      color: white;
      border: none;
      font-size: 18px;
      cursor: pointer;
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
      transition: background-color 0.3s ease;
    }
    .testimonial-btn:hover {
      background-color: #384369;
    }

    /* Footer */

    footer {
      background-color: #f7f3eb;
      padding: 40px 16px 60px;
      font-size: 14px;
      color: #444444;
      user-select: none;
      font-family: 'Roboto', sans-serif;
      max-width: 1200px;
      margin: 0 auto;
    }
    footer a {
      color: #13294b;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    footer a:hover {
      color: #384369;
    }
    .footer-columns {
      display: flex;
      justify-content: space-between;
      gap: 32px;
      flex-wrap: wrap;
      margin-bottom: 30px;
    }
    .footer-column {
      flex: 1 1 220px;
      line-height: 1.5;
      color: #555;
    }
    .footer-column h4 {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 16px;
      color: #1d2951;
      margin-bottom: 12px;
    }
    .footer-column ul {
      list-style: none;
      padding-left: 0;
      margin-top: 0;
    }
    .footer-column ul li {
      margin-bottom: 8px;
    }
    .footer-newsletter {
      margin-top: 15px;
    }
    .newsletter-input-group {
      display: flex;
      margin-top: 8px;
    }
    .newsletter-input {
      flex-grow: 1;
      border: 1px solid #999;
      border-right: none;
      border-radius: 4px 0 0 4px;
      padding: 8px 10px;
      font-size: 14px;
      outline: none;
    }
    .newsletter-submit {
      background-color: #13294b;
      border: none;
      color: white;
      font-weight: 600;
      padding: 8px 14px;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
      font-size: 14px;
    }
    .newsletter-submit:hover {
      background-color: #1d375f;
    }
    .footer-bottom {
      margin-top: 12px;
      font-size: 11px;
      color: #888;
      text-align: center;
      user-select: text;
    }

    /* Utility icons for header */

    svg {
      stroke: #4a4a4a;
      cursor: pointer;
      width: 20px;
      height: 20px;
      transition: stroke 0.3s ease;
    }
    svg:hover {
      stroke: #13294b;
    }

    /* Responsive */

    @media (max-width: 1024px) {
      .categories {
        flex-wrap: wrap;
        justify-content: center;
      }
      .category-card {
        flex: 1 1 130px;
      }
      .product-list {
        overflow-x: auto;
      }
      .testimonial-wrapper {
        justify-content: center;
      }
      footer .footer-columns {
        flex-wrap: wrap;
        gap: 24px;
      }
    }
    @media (max-width: 600px) {
      .feature-section {
        flex-direction: column;
        align-items: center;
      }
      .feature-text {
        text-align: center;
      }
      footer .footer-columns {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
<header class="border-b border-gray-300">
  <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16">
    <div class="flex items-center gap-4">
      <button class="nav-search" aria-label="Tìm kiếm sản phẩm">
        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      </button>
      <span class="text-gray-600 text-sm">Tìm kiếm sản phẩm...</span>
    </div>
    <div class="logo-text">VELVETCHARM</div>
    <nav class="hidden md:flex items-center gap-8 text-center whitespace-nowrap">
      <a href="#" class="nav-link">Trang chủ</a>
      <a href="index.php?act=sanpham" class="nav-link">Sản phẩm</a>
      <a href="#" class="nav-link">Phản hồi</a>
      <a href="#" class="nav-link">Tin tức</a>
      <a href="#" class="nav-link">Về chúng tôi</a>
      <a href="#" class="nav-link">Giỏ hàng</a>
      <a href="#" class="nav-link">Tài khoản</a>
    </nav>
    <div class="hidden md:flex items-center gap-6 text-gray-800">
      <button aria-label="Tài khoản">
        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-3-3.87"></path><path d="M4 21v-2a4 4 0 0 1 3-3.87"></path><circle cx="12" cy="7" r="4"></circle></svg>
      </button>
      <button aria-label="Giỏ hàng">
        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
      </button>
    </div>
  </div>
</header>

<main>
  <!-- Hero Section -->
  <section class="hero-image" role="img" aria-label="Hình nền diễn tả một người phụ nữ đeo trang sức vàng, gồm vòng cổ và nhẫn, phong cách sang trọng và tinh tế">
    <article class="hero-text-wrapper" aria-labelledby="hero-title hero-number hero-desc">
      <h1 id="hero-title" class="hero-text">TRANG SỨC VÀNG</h1>
      <div id="hero-number" class="hero-number">10K+</div>
      <p class="hero-text" style="font-weight: 500; letter-spacing: normal; margin-bottom: 8px;">THẨM MỸ<br/>CHẤT LƯỢNG<br/>Ý NGHĨA</p>
      <p id="hero-desc" class="hero-subtext">Vẻ đẹp vượt thời gian, phương tiện vượt thời gian.</p>
    </article>
  </section>

  <!-- Categories -->
  <section class="categories" aria-label="Danh mục sản phẩm trang sức vàng">
    <div class="category-card" tabindex="0" role="listitem" aria-label="Vòng tay hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Vòng+tay+trang+sức+vàng+trên+tay" alt="Vòng tay vàng đặt trên cánh tay phụ nữ, phong nền trắng đơn giản" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh vòng tay vàng bị lỗi'"/>
      <div class="category-title">Vòng tay</div>
    </div>
    <div class="category-card" tabindex="0" role="listitem" aria-label="Chuỗi hạt hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Chuỗi+hạt+vàng+trang+sức" alt="Chuỗi hạt vàng trên tay phụ nữ chất liệu sáng bóng và đẹp" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh chuỗi hạt vàng bị lỗi'"/>
      <div class="category-title">Chuỗi hạt</div>
    </div>
    <div class="category-card" tabindex="0" role="listitem" aria-label="Khuyên tai vàng hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Khuyên+tai+vàng+trang+sức" alt="Khuyên tai vàng dài được đeo trên cổ người phụ nữ nhìn nghiêng" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng bị lỗi'"/>
      <div class="category-title">Khuyên tai</div>
    </div>
    <div class="category-card" tabindex="0" role="listitem" aria-label="Dây chuyền vàng hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Dây+chuyền+vàng" alt="Dây chuyền vàng đeo trên cổ người phụ nữ với phong nền tối mờ" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh dây chuyền vàng bị lỗi'"/>
      <div class="category-title">Dây chuyền</div>
    </div>
    <div class="category-card" tabindex="0" role="listitem" aria-label="Mặt dây chuyền vàng hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Mặt+dây+chuyền+vàng" alt="Mặt dây chuyền vàng nằm trên phông nền sáng tối mờ với điểm sáng" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh mặt dây chuyền vàng bị lỗi'"/>
      <div class="category-title">Mặt dây chuyền</div>
    </div>
    <div class="category-card" tabindex="0" role="listitem" aria-label="Nhẫn vàng hình ảnh và tên sản phẩm">
      <img src="https://placehold.co/180x235?text=Nhẫn+vàng+trang+sức" alt="Nhẫn vàng đeo trên các ngón tay người phụ nữ, tay đặt nghiêng" class="category-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh nhẫn vàng bị lỗi'"/>
      <div class="category-title">Nhẫn</div>
    </div>
  </section>

  <!-- Trending products -->
    <?php
$productModel = new ProductModel();
$hotProducts = $productModel->getHotProducts(); // Lấy sản phẩm có hot = 1
?>

<section class="product-section" aria-labelledby="trending-title">
  <h3 id="trending-title" class="text-center mb-4 font-semibold text-lg text-gray-900 font-playfair select-none">Xu hướng hiện tại</h3>
  <div class="product-list" role="list">
    
    <?php foreach ($hotProducts as $product): ?>
      <article class="product-card" role="listitem" tabindex="0"
        aria-label="<?= htmlspecialchars($product['name']) ?>, mã sản phẩm <?= $product['id'] ?>, giá <?= number_format($product['price'], 0, ',', '.') ?> đồng, giảm <?= $product['discount'] ?> phần trăm">
        
        <?php if ($product['discount'] > 0): ?>
          <div class="discount-badge">-<?= $product['discount'] ?>%</div>
        <?php endif; ?>

        <img 
          src="<?= htmlspecialchars($product['image']) ?: 'https://placehold.co/180x180?text=No+Image' ?>" 
          alt="<?= htmlspecialchars($product['name']) ?>" 
          class="product-image"
          onerror="this.style.filter='blur(6px)'; this.alt='Hình ảnh bị lỗi';"
        />

        <h4 class="product-name"><?= htmlspecialchars($product['name']) ?></h4>
        <p class="product-code">Mã: <?= $product['id'] ?> | Danh mục: <?= $product['idcategory'] ?></p>
        <p class="product-price"><?= number_format($product['price'], 0, ',', '.') ?> VND</p>
      </article>
    <?php endforeach; ?>

  </div>
</section>



  <!-- Features -->
  <section class="feature-section" aria-label="Ưu điểm đặc biệt của nhẫn vàng Cartier">
    <figure class="feature-image-wrapper">
      <img src="https://placehold.co/400x400?text=Vòng+tay+vàng+Cartier+trên+sách+trắng" alt="Ảnh gần chụp vòng tay vàng Cartier lớn với mắt xích tròn đặt trên một cuốn sách trắng, ánh sáng vàng nâu ấm áp" class="feature-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh vòng tay Cartier bị lỗi'"/>
    </figure>
    <article class="feature-text" aria-labelledby="feature-title" role="region">
      <h4 id="feature-title" class="font-semibold text-xl mb-4 text-gray-900" style="font-family: 'Playfair Display', serif;">Mỗi vết khắc là một lời hứa – vòng tay vàng Cartier cho những điều muốn giữ mãi.</h4>
      <p>
        Là một thương hiệu nổi tiếng toàn cầu và được ưa chuộng bởi giới quý tộc, các nghệ sĩ, vòng tay Cartier với thiết kế tinh tế và chất lượng tuyệt hảo dễ dàng trở thành biểu tượng cho sự sang trọng, quyền lực và tình yêu bền vững.
      </p>
      <p class="mt-4">
        Phải biết đến nghệ thuật hiện đại trong cách thiết kế và bảo quản của hãng trong suốt nhiều thập kỷ, mỗi “dấu ấn” đều là một lời hứa đến người đeo rằng họ sẽ luôn được trân trọng, yêu thương và bảo vệ.
      </p>
      <p class="mt-4">
        Trong mỗi khắc, đều có những câu chuyện và cảm xúc thăng hoa, truyền tải sự tinh tế và nét quyến rũ riêng biệt của bộ sưu tập. Vòng tay Cartier không đơn thuần là trang sức, mà còn là bức thư tình viết bằng ánh sáng dành cho bạn.
      </p>
      <p class="mt-4 font-semibold">
        Đó là mối gắn kết cho một phái đẹp...
      </p>
      <p>
        và là chốn an toàn của bạn trong những ngày bận rộn và mệt mỏi.
      </p>
    </article>
  </section>

  <!-- New products -->
  <section class="product-section" aria-labelledby="new-product-title">
    <h3 id="new-product-title" class="text-center mb-4 font-semibold text-lg text-gray-900 font-playfair select-none">Sản Phẩm Mới</h3>
    <div class="product-list" role="list">
      <article class="product-card" role="listitem" tabIndex="0" aria-label="Khuyên tai vàng, mã sản phẩm M2 G6, giá 3.000.000 đồng, giảm 30 phần trăm">
        <div class="discount-badge">-30%</div>
        <img src="https://placehold.co/180x180?text=Khuyên+tai+vàng" alt="Khuyên tai vàng chữ oval thanh lịch trên nền trắng" class="product-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng bị lỗi'"/>
        <h4 class="product-name">Khuyên Tai Vàng</h4>
        <p class="product-code">M2 G6 | Khuyên Tai</p>
        <p class="product-price">3.000.000 VND</p>
      </article>

      <article class="product-card" role="listitem" tabIndex="0" aria-label="Khuyên tai vàng đính đá màu đỏ, mã 04 GD1, giá 5.000.000 đồng, giảm 30 phần trăm">
        <div class="discount-badge">-30%</div>
        <img src="https://placehold.co/180x180?text=Khuyên+tai+vàng+đá+đỏ" alt="Khuyên tai vàng có đính đá màu đỏ hình giọt nước" class="product-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng đính đá đỏ bị lỗi'"/>
        <h4 class="product-name">Khuyên Tai Vàng Đá Đỏ</h4>
        <p class="product-code">04 GD1 | Khuyên Tai</p>
        <p class="product-price">5.000.000 VND</p>
      </article>

      <article class="product-card" role="listitem" tabIndex="0" aria-label="Khuyên tai vàng kiểu chum M2 G11, giá 4.000.000 đồng, giảm 30 phần trăm">
        <div class="discount-badge">-30%</div>
        <img src="https://placehold.co/180x180?text=Khuyên+tai+vàng+kiểu+chùm" alt="Khuyên tai vàng kiểu chum nhiều hạt bóng sáng sang trọng" class="product-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng kiểu chum bị lỗi'"/>
        <h4 class="product-name">Khuyên Tai Vàng Kiểu Chùm</h4>
        <p class="product-code">M2 G11 | Khuyên Tai</p>
        <p class="product-price">4.000.000 VND</p>
      </article>

      <article class="product-card" role="listitem" tabIndex="0" aria-label="Khuyên tai vàng ai cập M2 G8, giá 3.000.000 đồng, giảm 30 phần trăm">
        <div class="discount-badge">-30%</div>
        <img src="https://placehold.co/180x180?text=Khuyên+tai+vàng+Ai+Cập" alt="Khuyên tai vàng kiểu ai cập hình tượng đồng tiền cổ tròn" class="product-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng ai cập bị lỗi'"/>
        <h4 class="product-name">Khuyên Tai Vàng Ai Cập</h4>
        <p class="product-code">M2 G8 | Khuyên Tai</p>
        <p class="product-price">3.000.000 VND</p>
      </article>

      <article class="product-card" role="listitem" tabIndex="0" aria-label="Khuyên tai vàng đính đá màu đỏ, mã 04 GD1, giá 5.000.000 đồng, giảm 30 phần trăm">
        <div class="discount-badge">-30%</div>
        <img src="https://placehold.co/180x180?text=Khuyên+tai+vàng+đá+đỏ" alt="Khuyên tai vàng có đính đá màu đỏ hình giọt nước" class="product-image" onerror="this.style.filter='blur(6px)';this.alt='Hình ảnh khuyên tai vàng đính đá đỏ bị lỗi'"/>
        <h4 class="product-name">Khuyên Tai Vàng Đá Đỏ</h4>
        <p class="product-code">04 GD1 | Khuyên Tai</p>
        <p class="product-price">5.000.000 VND</p>
      </article>
    </div>

    <button class="btn-view-more" aria-label="Xem thêm sản phẩm mới">XEM THÊM</button>
  </section>

  <!-- Instagram Section -->
  <section class="instagram-section" aria-labelledby="instagram-text">
    <h2 id="instagram-text">Theo dõi chúng tôi trên Instagram</h2>
    <div class="instagram-images" role="list">
      <img src="https://placehold.co/90x90?text=Nhẫn+vàng+hộp+đen" alt="Chiếc hộp đen mở hé có chứa nhẫn vàng tinh tế trên nền trắng" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh hộp nhẫn vàng lỗi'"/>
      <img src="https://placehold.co/90x90?text=Nhẫn+kim+cương+vàng" alt="Nhẫn đính kim cương lớn đặt trên bề mặt trắng tinh" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh nhẫn kim cương lỗi'"/>
      <img src="https://placehold.co/90x90?text=Túi+trắng+trang+sức" alt="Túi trắng đựng trang sức nhỏ bên son môi và bông hoa trắng" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh túi trắng trang sức lỗi'"/>
      <img src="https://placehold.co/90x90?text=Phụ+nữ+đeo+vòng+tay" alt="Cận cảnh người phụ nữ đeo vòng tay trang sức, mặc áo đen" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh vòng tay trên tay người lỗi'"/>
      <img src="https://placehold.co/90x90?text=Giấy+bảo+hành+vàng" alt="Giấy bảo hành vàng, bút và lược vàng đặt trên nền sáng" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh giấy bảo hành lỗi'"/>
      <img src="https://placehold.co/90x90?text=Nhẫn+kim+cương+đẹp" alt="Chiếc nhẫn kim cương sáng bóng đặt trên nền tối" role="listitem" onerror="this.style.filter='blur(6px)';this.alt='Ảnh nhẫn kim cương đẹp lỗi'"/>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonial-section" aria-label="Ý kiến khách hàng">
    <div class="testimonial-wrapper">
      <div class="testimonial-slide" aria-label="Ý kiến của khách hàng Lê Thanh Tâm">
        <img class="testimonial-photo" src="https://placehold.co/72x72?text=Lê+Thanh+Tâm" alt="Ảnh đại diện khách hàng Lê Thanh Tâm, phụ nữ cười mặc áo trắng và đeo kính" onerror="this.style.filter='blur(6px)';this.alt='Ảnh đại diện Lê Thanh Tâm lỗi'"/>
        <p class="testimonial-text">Dịch vụ chăm sóc khách hàng tuyệt đỉnh. Tôi rất hài lòng và gia đình tôi sẽ tiếp tục ủng hộ thương hiệu này.</p>
        <div class="testimonial-author">— Lê Thanh Tâm</div>
      </div>
      <div class="testimonial-slide" aria-label="Ý kiến của khách hàng Vũ Minh Khoa">
        <img class="testimonial-photo" src="https://placehold.co/72x72?text=Vũ+Minh+Khoa" alt="Ảnh đại diện khách hàng Vũ Minh Khoa, nam giới cười trong không gian ngoài trời" onerror="this.style.filter='blur(6px)';this.alt='Ảnh đại diện Vũ Minh Khoa lỗi'"/>
        <p class="testimonial-text">Tôi mua vòng tay làm quà dành tặng mẹ và cảm ơn website đã giúp lựa chọn món quà mang nhiều ý nghĩa. Trải nghiệm rất mượt mà!</p>
        <div class="testimonial-author">— Vũ Minh Khoa</div>
      </div>
      <div class="testimonial-slide" aria-label="Ý kiến của khách hàng Nguyễn Gia Nhật">
        <img class="testimonial-photo" src="https://placehold.co/72x72?text=Nguyễn+Gia+Nhật" alt="Ảnh đại diện khách hàng Nguyễn Gia Nhật, nữ giới mặc áo hoa cười tươi" onerror="this.style.filter='blur(6px)';this.alt='Ảnh đại diện Nguyễn Gia Nhật lỗi'"/>
        <p class="testimonial-text">Mỗi món trang sức đều có câu chuyện riêng. Mình thực sự rất hài lòng với bộ sưu tập sản phẩm và phục vụ chuyên nghiệp.</p>
        <div class="testimonial-author">— Nguyễn Gia Nhật</div>
      </div>
    </div>
  </section>
</main>

<footer>
  <div class="footer-columns" role="contentinfo">
    <section class="footer-column" aria-labelledby="footer-company">
      <h4 id="footer-company">VỀ VELVETCHARM</h4>
      <ul>
        <li><a href="#">Giới thiệu</a></li>
        <li><a href="#">Tuyển dụng</a></li>
        <li><a href="#">Tin tức</a></li>
      </ul>
    </section>

    <section class="footer-column" aria-labelledby="footer-support">
      <h4 id="footer-support">HỖ TRỢ KHÁCH HÀNG</h4>
      <ul>
        <li><a href="#">Hướng dẫn mua hàng</a></li>
        <li><a href="#">Chính sách đổi trả</a></li>
        <li><a href="#">Chính sách bảo hành</a></li>
      </ul>
    </section>

    <section class="footer-column" aria-labelledby="footer-contact">
      <h4 id="footer-contact">LIÊN HỆ</h4>
      <address>
        Địa chỉ: 123 Đường Trang Sức, Quận Hoàn Kiếm, Hà Nội<br/>
        Điện thoại: 0123 456 789<br/>
        Email: support@velvetcharm.vn
      </address>
      <div aria-label="Mạng xã hội">
        <a href="#" aria-label="Facebook"><svg aria-hidden="true" fill="#4267B2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M22.675 0h-21.35C.597 0 0 .597 0 1.337v21.326c0 .74.597 1.337 1.325 1.337h11.49v-9.294h-3.124v-3.622h3.124V8.413c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.793.143v3.24h-1.917c-1.504 0-1.795.715-1.795 1.763v2.309h3.588l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.596 1.324-1.336V1.337c0-.74-.598-1.337-1.326-1.337z"/></svg></a>
        <a href="#" aria-label="Instagram" class="ml-3"><svg aria-hidden="true" fill="#C13584" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5zM18 7.75a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5h-1.5A.75.75 0 0 1 18 7.75zm-6 1.25a4 4 0 1 1 .002 8.002A4 4 0 0 1 12 9z"/></svg></a>
      </div>
    </section>

    <section class="footer-column">
      <h4>Đăng ký nhận tin</h4>
      <form class="footer-newsletter" aria-label="Đăng ký nhận bản tin">
        <div class="newsletter-input-group">
          <input type="email" class="newsletter-input" aria-label="Địa chỉ email" placeholder="Email của bạn" required/>
          <button type="submit" class="newsletter-submit" aria-label="Đăng ký nhận bản tin">Đăng ký</button>
        </div>
      </form>
    </section>
  </div>

  <div class="footer-bottom">
    © 2023 VelvetCharm. Bản quyền thuộc về VelvetCharm.
  </div>
</footer>

<script>
  // JavaScript for testimonial sliding - simple horizontal scroll simulate
  const testimonialWrapper = document.querySelector('.testimonial-wrapper');
  let scrollAmount = 0;
  const scrollMax = testimonialWrapper.scrollWidth - testimonialWrapper.clientWidth;

  // No controls in the image, so no buttons included, but could be extended
</script>
</body>
</html>


</body>
</html>