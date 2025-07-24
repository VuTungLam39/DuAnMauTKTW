<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>VELVETCHARM - Trang Sản Phẩm</title>
<style>
  /* Reset & base */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f8f1e6;
    color: #222222;
    line-height: 1.4;
    font-size: 15px;
    user-select: none;
  }
  a {
    color: inherit;
    text-decoration: none;
    cursor: pointer;
  }
  ul {
    list-style: none;
  }
  input,
  select,
  button {
    font-family: inherit;
    font-size: inherit;
    outline-offset: 2px;
  }

  /* Container */
  .container {
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Header top bar */
  header {
    background-color: #1a1a1a;
    height: 40px;
    display: flex;
    align-items: center;
    padding: 0 12px;
    color: rgba(255 255 255 / 0.75);
    font-size: 13px;
    font-weight: 500;
  }
  header .search-inline {
    display: flex;
    align-items: center;
    gap: 5px;
    flex-grow: 1;
  }
  header .search-inline svg {
    fill: rgba(255 255 255 / 0.75);
  }
  header .search-inline input[type="text"] {
    background: transparent;
    border: none;
    color: rgba(255 255 255 / 0.75);
    font-size: 13px;
    width: 180px;
  }
  header .search-inline input::placeholder {
    color: rgba(255 255 255 / 0.5);
    font-style: italic;
  }

  /* Header main navigation */
  .main-header {
    background: #fcf4de;
    border-bottom: 1px solid #d6b77f;
    padding: 16px 0 8px 0;
  }
  .main-header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .logo {
    font-family: Georgia, "Times New Roman", Times, serif;
    font-weight: 700;
    font-size: 36px;
    color: #13294b;
    position: relative;
    letter-spacing: 0.03em;
  }
  .logo .orange-box {
    position: absolute;
    top: 13px;
    left: 92px;
    width: 21px;
    height: 13px;
    border: 1.5px solid #d08120;
    border-radius: 1.5px;
    box-sizing: content-box;
  }

  /* Navigation links below logo */
  nav.main-nav {
    margin-top: 12px;
  }
  nav.main-nav ul {
    display: flex;
    gap: 28px;
    padding-left: 10px;
    font-weight: 600;
    font-size: 14px;
    color: #3a352e;
  }
  nav.main-nav ul li {
    white-space: nowrap;
  }
  nav.main-nav ul li:hover {
    text-decoration: underline;
    cursor: pointer;
  }

  /* Header navigation icons right */
  .header-icons {
    display: flex;
    gap: 20px;
    align-items: center;
    color: #3a352e;
  }
  .header-icons svg {
    width: 17px;
    height: 17px;
    stroke: #3a352e;
    stroke-width: 1.3;
    cursor: pointer;
    transition: stroke 0.3s ease;
  }
  .header-icons svg:hover {
    stroke: #d08120;
  }
  .header-icons .cart {
    position: relative;
  }
  .header-icons .cart-count {
    position: absolute;
    top: -6px;
    right: -10px;
    background: #3a352e;
    color: white;
    font-size: 11px;
    font-weight: 600;
    padding: 0 5px;
    border-radius: 9px;
    user-select: none;
  }


  /* Main content area: sidebar + products */
  main {
    display: flex;
    gap: 40px;
    padding: 24px 10px 120px 10px;
    min-height: 830px;
  }
  /* Sidebar */
  aside.sidebar {
    flex: 0 0 260px;
    color: #292929;
  }
  aside.sidebar h2 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 18px;
  }
  .breadcrumb {
    font-size: 13px;
    margin-bottom: 24px;
    color: #4b4746;
    font-weight: 600;
  }
  .breadcrumb span {
    opacity: 0.9;
  }
  .breadcrumb span.seperator {
    margin: 0 6px;
  }

  /* Filters section */
  .filters-section {
    font-size: 14px;
  }
  .filter-group {
    margin-bottom: 28px;
  }
  .filter-group legend {
    font-weight: 600;
    margin-bottom: 10px;
    border-bottom: 1px solid #b9af91;
    padding-bottom: 5px;
    color: #373737;
  }
  .filter-list {
    margin-left: 8px;
  }

  /* Checkbox style */
  .checkbox-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #6b6659;
    margin-bottom: 8px;
    cursor: pointer;
    user-select: none;
  }
  .checkbox-label input[type="checkbox"] {
    width: 14px;
    height: 14px;
    cursor: pointer;
    accent-color:#3b4571;
  }
  /* Color swatches filter */
  .color-swatch-list {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding-left: 7px;
    margin-top: 6px;
  }
  .color-swatch {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    border: 1px solid #c0ba9d;
    cursor: pointer;
    box-sizing: border-box;
    transition: border-color 0.2s ease;
  }
  .color-swatch:hover {
    border-color: #3b4571;
  }

  .color-swatch.selected {
    border-color: #3b4571;
    box-shadow: 0 0 6px #3b4571;
  }

  /* Show more text for filters */
  .show-more {
    font-size: 13px;
    color: #b9af91;
    cursor: pointer;
    user-select: none;
    font-weight: 600;
  }

  /* Product List Section */
  section.products-section {
    flex-grow: 1;
  }
  .products-top-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-weight: 600;
    font-size: 14px;
    color: #2a2a2a;
    margin-bottom: 18px;
  }
  .products-top-bar .view-mode {
    display: flex;
    gap: 9px;
  }
  .products-top-bar .view-mode button {
    width: 22px;
    height: 22px;
    border: 1.5px solid #c4bda7;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .products-top-bar .view-mode button svg {
    stroke: #555;
    stroke-width: 1.5;
  }
  .products-top-bar .view-mode button.selected {
    border-color: #3b4571;
  }
  .products-top-bar .sort-select select {
    font-size: 14px;
    font-weight: 600;
    padding: 5px 9px;
    border: 1.5px solid #d4caaf;
    border-radius: 3px;
    cursor: pointer;
    background: white;
    color: #555;
  }

  /* Product grid */
  .product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(185px, 1fr));
    gap: 18px 12px;
  }
  .product-card {
    border: 1.2px solid #22222260;
    background: #fff;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
    min-height: 320px;
    position: relative;
  }
  .product-card .sale-badge {
    position: absolute;
    top: 3px;
    left: 3px;
    background-color: #1f3596;
    color: white;
    font-weight: 700;
    font-size: 12px;
    padding: 3px 9px 4px 9px;
    user-select: none;
    z-index: 3;
  }
  .product-image-container {
    flex-grow: 1;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    background: white;
  }
  .product-image-container img {
    max-width: 120px;
    max-height: 120px;
    object-fit: contain;
  }
  .product-info {
    padding: 9px 12px 10px 12px;
  }
  .product-info .title {
    font-weight: 600;
    color: #232323;
    font-size: 14px;
    margin-bottom: 3px;
    min-height: 38px;
  }
  .product-info .category {
    font-size: 12px;
    color: #474747;
    margin-bottom: 5px;
  }
  .product-info .price {
    font-weight: 700;
    color: #1f3596;
    font-size: 15px;
    user-select: none;
  }

  /* Footer section */
  footer {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    background: #f8f1e6;
    color: #332f23;
    font-size: 13px;
    line-height: 1.4;
    max-width: 1200px;
    margin: 40px auto 0 auto;
    padding: 42px 10px 42px 10px;
    user-select: none;
  }
  footer .footer-top {
    display: flex;
    justify-content: space-between;
    margin-bottom: 42px;
    flex-wrap: wrap;
    gap: 12px;
  }
  footer .footer-col {
    flex: 1 1 180px;
    min-width: 180px;
  }
  footer .footer-col h3 {
    font-weight: 700;
    font-size: 13px;
    margin-bottom: 18px;
    color: #6c6151;
  }
  footer .footer-col ul li {
    margin-bottom: 11px;
    color: #6c6151;
    cursor: pointer;
  }
  footer .footer-col ul li:hover {
    text-decoration: underline;
  }
  footer .social-icons {
    display: flex;
    gap: 14px;
  }
  footer .social-icons svg {
    stroke: #6c6151;
    cursor: pointer;
    width: 18px;
    height: 18px;
  }
  footer .footer-icons {
    display: flex;
    gap: 18px;
    margin-top: 20px;
  }
  footer .footer-icons svg {
    stroke: #3b4571;
    width: 36px;
    height: 36px;
  }
  footer .newsletter {
    flex: 0 0 310px;
  }
  footer .newsletter label {
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 8px;
    display: block;
    color: #3b4571;
  }
  footer .newsletter input[type="email"] {
    width: 100%;
    height: 32px;
    font-size: 14px;
    padding-left: 10px;
    border: 1.5px solid #949586;
    border-radius: 1px;
    box-sizing: border-box;
  }
  footer .newsletter button {
    width: 100%;
    margin-top: 7px;
    background-color: #1c2b5c;
    border: none;
    color: white;
    font-weight: 700;
    cursor: pointer;
    text-transform: uppercase;
    padding: 6px 8px;
    border-radius: 1px;
    letter-spacing: 0.08em;
  }

  /* Footer bottom text */
  footer .footer-bottom {
    border-top: 1px solid #d6b77f;
    color: #a49e94;
    font-size: 12px;
    text-align: center;
    padding-top: 18px;
  }

</style>
</head>
<body>
  <header>
    <div class="container">
      <div class="search-inline">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7" /><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
        <input type="text" placeholder="Bạn đang tìm kiếm điều gì?" />
      </div>
    </div>
  </header>
  <div class="main-header">
    <div class="container">
      <h1 class="logo">VELVET<span class="orange-box"></span>CHARM</h1>
      <div class="header-icons" aria-label="User and Cart Icons">
        <svg role="img" aria-label="User Account Icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" viewBox="0 0 24 24" stroke="currentColor"><path d="M20 21v-2a4 4 0 0 0-3-3.87" /><path d="M4 21v-2a4 4 0 0 1 3-3.87" /><circle cx="12" cy="7" r="4" /></svg>
        <svg role="img" aria-label="Wishlist Icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" viewBox="0 0 24 24" stroke="currentColor"><path d="M20.44 4.56a5.5 5.5 0 0 0-7.78 0l-1.08 1.09-1.08-1.09a5.5 5.5 0 0 0-7.78 7.77L12 21.23l8.86-8.9a5.48 5.48 0 0 0 .2-7.77z" /></svg>
        <div class="cart" role="img" aria-label="Cart Icon with 0 items">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.3" viewBox="0 0 24 24" stroke="currentColor" >
            <circle cx="9" cy="21" r="1"/>
            <circle cx="20" cy="21" r="1"/>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
          </svg>
          <div class="cart-count" aria-live="polite" aria-atomic="true">0</div>
        </div>
      </div>
    </div>
    <nav class="main-nav">
      <div class="container">
        <ul>
          <li>Thương hiệu</li>
          <li>Bộ sưu tập</li>
          <li>Khuyên tai</li>
          <li>Vòng cổ</li>
          <li>Nhẫn</li>
          <li>Vòng tay</li>
          <li>Quà tặng</li>
          <li>Cá nhân hóa</li>
        </ul>
      </div>
    </nav>
  </div>
  <main class="container" role="main">
    <aside class="sidebar" aria-label="Bộ lọc tìm kiếm">
      <nav aria-label="Breadcrumb" class="breadcrumb">
        <span>Trang chủ /</span> <span>Khuyên Tai</span><span class="seperator">/</span><span>Bộ Lọc Tìm Kiếm</span>
      </nav>
      <section class="filters-section">
        <form aria-label="Lọc danh mục sản phẩm">
          <fieldset class="filter-group" aria-describedby="f-danhmuc-desc">
            <legend>DANH MỤC</legend>
            <div id="f-danhmuc-desc" class="visually-hidden">Chọn danh mục sản phẩm</div>
            <label class="checkbox-label" for="dm-daychuyen">
              <input type="checkbox" id="dm-daychuyen" name="category" value="day-chuyen" />
              DÂY CHUYỀN (60)
            </label>
            <label class="checkbox-label" for="dm-vongtay">
              <input type="checkbox" id="dm-vongtay" name="category" value="vong-tay" />
              VÒNG TAY (22)
            </label>
            <label class="checkbox-label" for="dm-khuyentai">
              <input type="checkbox" id="dm-khuyentai" name="category" value="khuyen-tai" checked />
              KHUYÊN TAI (51)
            </label>
            <label class="checkbox-label" for="dm-lacchan">
              <input type="checkbox" id="dm-lacchan" name="category" value="lac-chan" />
              LẮC CHÂN (40)
            </label>
            <label class="checkbox-label" for="dm-dongho">
              <input type="checkbox" id="dm-dongho" name="category" value="dong-ho" />
              ĐỒNG HỒ (30)
            </label>
            <p class="show-more">HIỂN THỊ THÊM</p>
          </fieldset>

          <fieldset class="filter-group" aria-describedby="f-mucgia-desc">
            <legend>Mức Giá</legend>
            <div id="f-mucgia-desc" class="visually-hidden">Chọn phạm vi giá của sản phẩm</div>
            <label class="checkbox-label" for="price-under8">
              <input type="checkbox" id="price-under8" name="price" value="under-8" />
              DƯỚI 8.000.000 VNĐ (40)
            </label>
            <label class="checkbox-label" for="price-7to8">
              <input type="checkbox" id="price-7to8" name="price" value="7to8" />
              7.000.000–8.000.000 VNĐ (30)
            </label>
            <label class="checkbox-label" for="price-5to7" >
              <input type="checkbox" id="price-5to7" name="price" value="5to7" checked />
              5.000.000–7.000.000 VNĐ (20)
            </label>
            <label class="checkbox-label" for="price-3to5">
              <input type="checkbox" id="price-3to5" name="price" value="3to5" />
              3.000.000–5.000.000 VNĐ (10)
            </label>
            <label class="checkbox-label" for="price-under3">
              <input type="checkbox" id="price-under3" name="price" value="under3" />
              DƯỚI 3.000.000 VNĐ (10)
            </label>
          </fieldset>

          <fieldset class="filter-group" aria-describedby="f-thuonghieu-desc">
            <legend>THƯƠNG HIỆU</legend>
            <div id="f-thuonghieu-desc" class="visually-hidden">Chọn thương hiệu sản phẩm</div>
            <label class="checkbox-label" for="brand-pnj">
              <input type="checkbox" id="brand-pnj" name="brand" value="pnj" />
              PNJ
            </label>
            <label class="checkbox-label" for="brand-doji">
              <input type="checkbox" id="brand-doji" name="brand" value="doji" />
              DOJI
            </label>
            <label class="checkbox-label" for="brand-scj" >
              <input type="checkbox" id="brand-scj" name="brand" value="scj" checked />
              SCJ
            </label>
            <label class="checkbox-label" for="brand-lucy">
              <input type="checkbox" id="brand-lucy" name="brand" value="lucy" />
              LUCY
            </label>
            <label class="checkbox-label" for="brand-has">
              <input type="checkbox" id="brand-has" name="brand" value="has" />
              H.A.S
            </label>
            <label class="checkbox-label" for="brand-leuleu">
              <input type="checkbox" id="brand-leuleu" name="brand" value="leuleu" />
              LEULEU
            </label>
            <p class="show-more">HIỂN THỊ THÊM</p>
          </fieldset>

          <fieldset class="filter-group" aria-describedby="f-mausac-desc">
            <legend>Màu Sắc</legend>
            <div id="f-mausac-desc" class="visually-hidden">Chọn màu sắc sản phẩm</div>
            <div class="color-swatch-list" aria-label="Chọn màu sắc">
              <span class="color-swatch" title="Màu đen" style="background-color:#2c211a" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu trắng" style="background-color:#e7e3d0" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu kem" style="background-color:#dcd7c9" tabindex="0" role="checkbox" aria-checked="true"></span>
              <span class="color-swatch selected" title="Màu xanh" style="background-color:#223055" tabindex="0" role="checkbox" aria-checked="true"></span>
              <span class="color-swatch" title="Màu tím" style="background-color:#5a5a5a" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu đỏ" style="background-color:#7b211a" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu vàng" style="background-color:#fccb4e" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu hồng" style="background-color:#c8a7a2" tabindex="0" role="checkbox" aria-checked="false"></span>
              <span class="color-swatch" title="Màu xanh nước biển" style="background-color:#208a9c" tabindex="0" role="checkbox" aria-checked="false"></span>
            </div>
          </fieldset>

          <fieldset class="filter-group" aria-describedby="f-kichco-desc">
            <legend>Kích Cỡ</legend>
            <div id="f-kichco-desc" class="visually-hidden">Chọn kích cỡ sản phẩm</div>
            <label class="checkbox-label" for="size-xxs">
              <input type="checkbox" id="size-xxs" name="size" value="xxs" />
              XXS (49)
            </label>
            <label class="checkbox-label" for="size-xs">
              <input type="checkbox" id="size-xs" name="size" value="xs" />
              XS (40)
            </label>
            <label class="checkbox-label" for="size-s" >
              <input type="checkbox" id="size-s" name="size" value="s" checked />
              S (30)
            </label>
            <label class="checkbox-label" for="size-32">
              <input type="checkbox" id="size-32" name="size" value="32" />
              32 (20)
            </label>
            <label class="checkbox-label" for="size-m">
              <input type="checkbox" id="size-m" name="size" value="m" />
              M (10)
            </label>
            <p class="show-more">HIỂN THỊ THÊM</p>
          </fieldset>
        </form>
      </section>
    </aside>

    <section class="products-section" aria-label="Danh sách sản phẩm">
      <div class="products-top-bar">
        <div>51 SẢN PHẨM TÌM THẤY</div>
        <div class="view-and-sort">
          <div class="view-mode" aria-label="Chế độ hiển thị sản phẩm">
            <button title="Chế độ lưới" class="selected" aria-pressed="true" aria-label="Chế độ lưới"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></button>
            <button title="Chế độ danh sách" aria-pressed="false" aria-label="Chế độ danh sách"><svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24"><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="18" y2="18"/></svg></button>
          </div>
          <div class="sort-select">
            <label for="sort-by" class="visually-hidden">Sắp xếp theo</label>
            <select id="sort-by" name="sort-by" aria-label="Sắp xếp sản phẩm theo giá">
              <option value="price-desc">GIÁ (CAO ĐẾN THẤP)</option>
              <option value="price-asc" selected>GIÁ (THẤP ĐẾN CAO)</option>
              <option value="name-asc">TÊN (A-Z)</option>
              <option value="name-desc">TÊN (Z-A)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="product-grid">
        <!-- Product Cards x 12 with same content with image placeholders -->
        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7bfa201d-28d6-4efd-b22c-0d277e9fb47b.png" alt="Khuyên tai bằng vàng có các chi tiết và hoa văn tinh xảo màu vàng và bạc" onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/81aad6e4-2c18-4f63-9412-5485ab7c8072.png';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Đá Đỏ giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1b6f4e70-efe4-4ed9-b4a3-1a0e0addd60e.png" alt="Khuyên tai vàng đính đá đỏ sắc nét hình lục giác với phần đính kim cương bên trên" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Đá Đỏ</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">5.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Kiểu Chùm giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/bbf76681-3723-4e6c-8b36-11dcf28c5158.png" alt="Khuyên tai vàng với kiểu chùm dài thanh mảnh và hình cầu nhỏ dang thả xuống" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Kiểu Chùm</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">4.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Ai Cập giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/eef7df28-3210-4203-9794-6d5cbb916288.png" alt="Dây chuyền vàng Ai Cập truyền thống với các đồng tiền vàng treo giữa dây đeo" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Ai Cập</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>

        <!-- Repeat the above 4 product cards twice more for total 12 -->
        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a0d3b03b-39bc-420a-802f-ebcedc29fbc5.png" alt="Khuyên tai bằng vàng có các chi tiết và hoa văn tinh xảo màu vàng và bạc" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Đá Đỏ giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7720ed5e-1987-4a82-9cf9-8ed981729de1.png" alt="Khuyên tai vàng đính đá đỏ sắc nét hình lục giác với phần đính kim cương bên trên" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Đá Đỏ</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">5.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Kiểu Chùm giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ef98cf42-9283-4545-b7b3-2431e4fcf8c8.png" alt="Khuyên tai vàng với kiểu chùm dài thanh mảnh và hình cầu nhỏ dang thả xuống" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Kiểu Chùm</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">4.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Ai Cập giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/40b8baf2-39ba-494a-a934-e15993a360c2.png" alt="Dây chuyền vàng Ai Cập truyền thống với các đồng tiền vàng treo giữa dây đeo" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Ai Cập</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/541adc1d-febb-4e8a-8ce0-3daac550ba21.png" alt="Khuyên tai bằng vàng có các chi tiết và hoa văn tinh xảo màu vàng và bạc" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Đá Đỏ giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/a4d80b67-1bd6-49cf-9731-caaaeeddc957.png" alt="Khuyên tai vàng đính đá đỏ sắc nét hình lục giác với phần đính kim cương bên trên" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Đá Đỏ</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">5.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Kiểu Chùm giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9f75e379-944b-49db-b0ef-b0e4e0b42c0d.png" alt="Khuyên tai vàng với kiểu chùm dài thanh mảnh và hình cầu nhỏ dang thả xuống" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Kiểu Chùm</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">4.000.000 VNĐ</div>
          </div>
        </article>

        <article class="product-card" role="article" aria-label="Khuyên Tai Vàng Ai Cập giảm 30 phần trăm">
          <div class="sale-badge">-30%</div>
          <div class="product-image-container">
            <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/42321422-6b8c-4df4-b167-2c2511b00521.png" alt="Dây chuyền vàng Ai Cập truyền thống với các đồng tiền vàng treo giữa dây đeo" onerror="this.onerror=null;this.src='https://placehold.co/160x160?text=Image+Unavailable';" />
          </div>
          <div class="product-info">
            <div class="title">Khuyên Tai Vàng Ai Cập</div>
            <div class="category">Nữ Giới | Khuyên Tai</div>
            <div class="price">3.000.000 VNĐ</div>
          </div>
        </article>
      </div>
    </section>
  </main>
  <footer>
    <div class="footer-top">
      <section class="footer-col" aria-labelledby="footer-muasan-label">
        <h3 id="footer-muasan-label">MUA SẮM ONLINE</h3>
        <ul>
          <li>Nam Giới</li>
          <li>Nữ Giới</li>
          <li>Trẻ</li>
          <li>Sản Phẩm Làm Đẹp</li>
          <li>Quà Tặng</li>
        </ul>
      </section>
      <section class="footer-col" aria-labelledby="footer-chinhsach-label">
        <h3 id="footer-chinhsach-label">CHÍNH SÁCH KHÁCH HÀNG</h3>
        <ul>
          <li>Liên Hệ Chúng Tôi</li>
          <li>FAQ</li>
          <li>Điều Khoản Sử Dụng</li>
          <li>Đổi Trả</li>
          <li>Chính Sách Bảo Mật</li>
          <li>Giải Quyết Khiếu Nại</li>
        </ul>
      </section>
      <section class="footer-col" aria-labelledby="footer-mxh-label">
        <h3 id="footer-mxh-label">MẠNG XÃ HỘI</h3>
        <div class="social-icons" role="list">
          <a href="#" aria-label="Facebook"><svg stroke="currentColor" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
          <a href="#" aria-label="Twitter"><svg stroke="currentColor" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14.86 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
          <a href="#" aria-label="YouTube"><svg stroke="currentColor" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-2C18.88 4 12 4 12 4s-6.88 0-8.59.42a2.78 2.78 0 0 0-1.95 2A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58 2.78 2.78 0 0 0 1.95 2C5.12 20 12 20 12 20s6.88 0 8.59-.42a2.78 2.78 0 0 0 1.95-2A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg></a>
          <a href="#" aria-label="Instagram"><svg stroke="currentColor" fill="none" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/></svg></a>
        </div>
        <div class="footer-icons">
          <svg aria-label="100% xuất xứ nguyên bản cho tất cả sản phẩm" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.4" stroke="#3b4571" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24"><path d="M9.67 17a6 6 0 1 1 4.6-10.1M9.67 17a6 6 0 0 0 5.56-8.77"/></svg>
          <svg aria-label="Đổi trả trong vòng 30 ngày" xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="1.4" stroke="#3b4571" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24"><polyline points="17 1 21 5 17 9"/><line x1="13" y1="5" x2="21" y2="5"/><path d="M20.49 10.62A9.82 9.82 0 0 1 12 21a9.97 9.97 0 0 1-5.88-1.81" /></svg>
        </div>
      </section>
      <section class="footer-col newsletter" aria-labelledby="footer-newsletter-label">
        <h3 id="footer-newsletter-label">THAM GIA VỚI CHÚNG TÔI</h3>
        <p>ĐĂNG KÝ NHẬN BẢN TIN CỦA CHÚNG TÔI</p>
        <form>
          <input type="email" placeholder="ĐỊA CHỈ EMAIL" aria-label="Nhập địa chỉ email để nhận bản tin" required />
          <button type="submit">ĐĂNG KÍ</button>
        </form>
      </section>
    </div>
    <div class="footer-bottom" aria-label="Footer lower text">
      <p>Nếu Có Bất Kì Thắc Mắc Nào, Hãy <strong>Liên Hệ Chúng Tôi Qua HOTLINE 190077481</strong></p>
      <p>© 2023All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>

