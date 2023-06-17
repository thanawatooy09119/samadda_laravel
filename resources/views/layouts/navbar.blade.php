<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">
        {{-- <a class="navbar-brand" href="/">LOGO SAMADDA</a> --}}
		<img src="{{ asset('/img/samadda.png')}}" alt="" class="navbar-logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">สมัดดาผ้าทอมือ</a>
                </li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
					  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  สินค้าทั้งหมด
					</a>
					<div class="dropdown-menu" aria-labelledby="productsDropdown">
					  <a class="dropdown-item" href="/category1">Category 1</a>
					  <a class="dropdown-item" href="/category2">Category 2</a>
					  <a class="dropdown-item" href="/category3">Category 3</a>
					</div>
				  </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">ข่าวประชาสัมพันธ์</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="/contact">วิธีการสั่งซื้อ</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="/contact">ติดต่อเรา</a>
                </li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button"
					  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  สวัสดีคุณ 
					</a>
					<div class="dropdown-menu" aria-labelledby="productsDropdown">
					  <a class="dropdown-item" href="/history">ประวัติการสั่งซื้อ</a>
					  <a class="dropdown-item" href="/setting">ตั้งค่าบัญชีผู้ใช้</a>
					  <a class="dropdown-item" href="/logout">ออกจากระบบ</a>
					</div>
				  </li>
            </ul>
        </div>
    </div>
	
</nav>

