<!DOCTYPE html>
<html lang="en" data-bs-theme="light">



<body>
    @extends('layouts.sidebaranalisis')
    @section('content')
        <div class="dashboard-content px-3 pt-3">
            <div class="text" style="font-size: 40px">Analisis Data</div>
            <div class="row">
                {{-- Sesi Lift In / Lif Off Start --}}
                <div class="row mb-2 border-bottom">
                    <h3 class="h3 d-inline">Lift On / Lift Off
                        <span id="loloHideShow">
                            <i class="animate-icon fa-solid fa-chevron-down"></i>
                        </span>
                    </h3>
                </div>
                <section id="liftInLiftOff" class="mb-4 animate-icon" style="width: 100%">
                    <div class="row p-2 sub-menu h-100">
                        <div id="lolo-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                                    <div class="row w-100 m-0">
                                        <div class="input-group px-0">
                                            <input type="text" id="lolo_month_select" name="lolo_month_select"
                                                class="form-control rounded-start-3" placeholder="Pilih Bulan"
                                                value="">
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.458374" width="70" height="70" rx="35" fill="#E1F5FE" />
                                        <path
                                            d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z"
                                            fill="#039BE5" />
                                        <path
                                            d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z"
                                            stroke="#039BE5" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Order</p>
                                        <h3 id="loloTotalOrder" class="h3 mb-0 text-primary">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9" />
                                        <path
                                            d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z"
                                            fill="#43A047" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Finish Order</p>
                                        <h3 id="loloFinishOrder" class="h3 mb-0 text-success">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.291687" width="70" height="70" rx="35" fill="#FFEBEE" />
                                        <path
                                            d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z"
                                            fill="#E53935" />
                                        <path
                                            d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z"
                                            fill="#E53935" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Pending Order</p>
                                        <h3 id="loloPendingOrder" class="h3 mb-0 text-danger">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.208313" width="70" height="70" rx="35" fill="#EDE7F6" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.3581 25.9356H28.8182V29.0265H19.5455V19.7402H22.6364V23.241C26.0937 19.6155 30.0339 18.2083 35 18.2083C44.3888 18.2083 52 25.8195 52 35.2083C52 44.5972 44.3888 52.2083 35 52.2083C25.6112 52.2083 18 44.5972 18 35.2083H21.0909C21.0909 42.8901 27.3182 49.1174 35 49.1174C42.6818 49.1174 48.9091 42.8901 48.9091 35.2083C48.9091 27.5265 42.6818 21.2992 35 21.2992C30.6097 21.2992 27.3417 22.5223 24.3581 25.9356ZM36.5455 33.6629H42.7273V36.7538H33.4545V25.9356H36.5455V33.6629Z"
                                            fill="#5E35B1" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Service Time</p>
                                        <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">2</h3>
                                        <p class="fs-6 fw-normal d-inline">/hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="lolo-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row p-2 shadow rounded-3 h-100">
                                <div class="col col-lg-85 col-md-12 col-sm-12 col-12 pt-3">
                                    <div class="graph-container text-primaryDark w-100">
                                        <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order
                                        </h3>
                                        <div id="totalOrderVsDowntime">

                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-35 col-md-12 col-sm-12 col-12">
                                    <div class="row justify-content-between mt-0 me-0 mb-1 ms-0 p-0">
                                        <div class="input-group px-0">
                                            <select name="lolo_year_select" id="lolo_year_select"
                                                class="form-control rounded-start-3">
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                            </select>
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between w-110 gx-2 mt-2">
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#E1F5FE" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#0D6EFD" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M30.7028 34.8915L33.0547 37.3492L35.8652 34.1507L39.0285 37.3845L44.5555 30.4582L42.721 29L38.8404 33.8332L35.7476 30.6816L33.0547 33.8684L30.8087 31.5165L26.34 35.9499L28.0099 37.6197L30.7028 34.8915ZM25.999 39.4895V41.1358H44.8142V39.4895H25.999Z"
                                                        fill="#0D6EFD" />
                                                </svg>
                                                <div class="card-body ps-1 pe-0">
                                                    <p class="card-text m-0 fs-7">Average Total Order</p>
                                                    <h3 id="loloTotalOrder" class="h3 mb-0 text-primary">53.6</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#E8F5E9" />
                                                    <path
                                                        d="M43.7179 30.5295L35.7751 38.4724L31.5389 34.2362L25.1846 40.5905M38.9522 30H44.1945V35.2952"
                                                        stroke="#198754" stroke-width="2.1181" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#198754" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="card-body ps-1 pe-0">
                                                    <p class="card-text m-0 fs-7">Highest Total Order</p>
                                                    <h3 id="loloFinishOrder" class="h3 mb-0 text-success">123</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#FFEBEE" />
                                                    <path
                                                        d="M36.3371 39.4806C36.3371 38.8441 36.8532 38.328 37.4897 38.328H40.0746L35.4806 33.7339L32.6073 36.6073C32.3911 36.8234 32.098 36.9448 31.7923 36.9448C31.4866 36.9448 31.1934 36.8234 30.9772 36.6073L25.3376 30.9676C24.8875 30.5175 24.8875 29.7877 25.3376 29.3376C25.7877 28.8875 26.5175 28.8875 26.9676 29.3376L31.7923 34.1623L34.6656 31.2889C34.8817 31.0727 35.1749 30.9513 35.4806 30.9513C35.7863 30.9513 36.0795 31.0727 36.2956 31.2889L41.7047 36.698V34.1131C41.7047 34.0335 41.7128 33.9558 41.7281 33.8808C41.8356 33.3556 42.3003 32.9605 42.8573 32.9605C43.4939 32.9605 44.0099 33.4765 44.0099 34.1131V39.4806C44.0099 40.1172 43.4939 40.6332 42.8573 40.6332H37.4897C36.8532 40.6332 36.3371 40.1172 36.3371 39.4806Z"
                                                        fill="#DC3545" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#DC3545" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="card-body ps-2 pe-0">
                                                    <p class="card-text m-0 fs-7">Lowest Total Order</p>
                                                    <h3 id="loloPendingOrder" class="h3 mb-0 text-danger">51</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#EDE7F6" />
                                                    <path
                                                        d="M35 24.5806C31.3669 24.5806 28.4194 27.5282 28.4194 31.1613C28.4194 34.7944 31.3669 37.7419 35 37.7419C38.6331 37.7419 41.5806 34.7944 41.5806 31.1613C41.5806 27.5282 38.6331 24.5806 35 24.5806ZM35 34.4516C33.1835 34.4516 31.7097 32.9778 31.7097 31.1613C31.7097 29.3448 33.1835 27.871 35 27.871C36.8165 27.871 38.2903 29.3448 38.2903 31.1613C38.2903 32.9778 36.8165 34.4516 35 34.4516ZM35 18C25.6089 18 18 25.6089 18 35C18 44.3911 25.6089 52 35 52C44.3911 52 52 44.3911 52 35C52 25.6089 44.3911 18 35 18ZM35 48.7097C31.5931 48.7097 28.481 47.4552 26.0819 45.3919C27.1032 43.8153 28.8512 42.746 30.8528 42.6843C32.2786 43.123 33.6359 43.3423 35 43.3423C36.3641 43.3423 37.7214 43.1298 39.1472 42.6843C41.1488 42.7528 42.8968 43.8153 43.9181 45.3919C41.519 47.4552 38.4069 48.7097 35 48.7097ZM46.1528 42.9448C44.4802 40.7923 41.896 39.3871 38.9484 39.3871C38.2492 39.3871 37.1661 40.0452 35 40.0452C32.8407 40.0452 31.7508 39.3871 31.0516 39.3871C28.1109 39.3871 25.5266 40.7923 23.8472 42.9448C22.2431 40.7032 21.2903 37.9613 21.2903 35C21.2903 27.4391 27.4391 21.2903 35 21.2903C42.5609 21.2903 48.7097 27.4391 48.7097 35C48.7097 37.9613 47.7569 40.7032 46.1528 42.9448Z"
                                                        fill="#673AB7" />
                                                </svg>
                                                <div class="card-body ps-2 pe-0">
                                                    <p class="card-text m-0 fs-7">Total Manpower</p>
                                                    <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">3</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Lift In / Lift Off Ends --}}


                {{-- Sesi Storage Yard Starts --}}
                <div class="row mb-2 align-items-start border-bottom">
                    <div class="col col-lg-9 col-md-9 col-sm-8 col-7">
                        <h3 class="h3">Storage Yard
                            <span id="syHideShow">
                                <i class="animate-icon fa-solid fa-chevron-down"></i>
                            </span>
                        </h3>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50">
                        <select id="syCategory" class="form-select" aria-label="Default select example">
                            <option selected value="TEUs">TEUs</option>
                            <option value="dimensions">Dimensions</option>
                            <option value="volume">Volume</option>
                        </select>
                    </div>
                </div>
                <section id="storageYard" class="mb-4" style="width: 100%; height: 450px">
                    <div class="row p-2 sub-menu h-100">
                        <div id="storageYard-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-success p47">
                                        <span>47%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-success"></div>
                                            <div class="value-bar value-bar-success"></div>
                                        </div>
                                    </div>
                                    <div class="col-9 card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-success">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TEUs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-primary over50 p53">
                                        <span>53%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-primary"></div>
                                            <div class="value-bar value-bar-primary"></div>
                                        </div>
                                    </div>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-primary">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TUEs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-warning over50 p100">
                                        <span>100%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-warning"></div>
                                            <div class="value-bar value-bar-warning"></div>
                                        </div>
                                    </div>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-warning">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TUEs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="70" height="70" rx="35" fill="#EDE7F6" />
                                        <path
                                            d="M21.7876 33.1124C23.8698 33.1124 25.5627 31.4195 25.5627 29.3373C25.5627 27.2551 23.8698 25.5623 21.7876 25.5623C19.7054 25.5623 18.0125 27.2551 18.0125 29.3373C18.0125 31.4195 19.7054 33.1124 21.7876 33.1124ZM48.2132 33.1124C50.2954 33.1124 51.9883 31.4195 51.9883 29.3373C51.9883 27.2551 50.2954 25.5623 48.2132 25.5623C46.131 25.5623 44.4381 27.2551 44.4381 29.3373C44.4381 31.4195 46.131 33.1124 48.2132 33.1124ZM50.1008 35H46.3257C45.2875 35 44.3497 35.4188 43.6654 36.0971C46.0426 37.4007 47.7295 39.7542 48.0953 42.5501H51.9883C53.0324 42.5501 53.8759 41.7066 53.8759 40.6626V38.7751C53.8759 36.6929 52.183 35 50.1008 35ZM35.0004 35C38.6516 35 41.6068 32.0448 41.6068 28.3936C41.6068 24.7424 38.6516 21.7872 35.0004 21.7872C31.3492 21.7872 28.394 24.7424 28.394 28.3936C28.394 32.0448 31.3492 35 35.0004 35ZM39.5305 36.8875H39.041C37.814 37.4774 36.4515 37.8313 35.0004 37.8313C33.5494 37.8313 32.1927 37.4774 30.9599 36.8875H30.4703C26.7188 36.8875 23.6752 39.9312 23.6752 43.6827V45.3815C23.6752 46.9446 24.9434 48.2128 26.5065 48.2128H43.4944C45.0575 48.2128 46.3257 46.9446 46.3257 45.3815V43.6827C46.3257 39.9312 43.282 36.8875 39.5305 36.8875ZM26.3354 36.0971C25.6512 35.4188 24.7133 35 23.6752 35H19.9001C17.8179 35 16.125 36.6929 16.125 38.7751V40.6626C16.125 41.7066 16.9685 42.5501 18.0125 42.5501H21.8997C22.2713 39.7542 23.9583 37.4007 26.3354 36.0971Z"
                                            fill="#673AB7" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Customer</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-purple">103</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="storageYard-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row pt-0 px-3 shadow rounded-3 h-100">
                                <div class="col col-lg-5 col-md-12 col-sm-12 col-12 pt-3">
                                    <div class="graph-container text-primaryDark w-100">
                                        <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total TEUs
                                        </h3>
                                        <div id="LuasStorageYard">

                                        </div>
                                    </div>
                                </div>
                                <div id="storageYardTable" class="col-lg-7 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                                    <div class="row rounded-3 h-100 px-3">
                                        <div class="row pt-3 mt-0 me-0 mb-3 ms-0 p-0">
                                            <h3 class="h3 col col-lg-7 col-md-7 col-sm-12 col-12 text-start fw-bold">
                                                Duration
                                            </h3>
                                        </div>
                                        <div class="graph-container m-0 px-0 row text-primaryDark border rounded-3 overflow-hidden"
                                            style="border-color: #9DB2BF !important">
                                            <table id="storageYardTableSort"
                                                class="table table-fix-head table-responsive table-primaryDark table-striped table-hover responsive  w-100"
                                                data-order='[[ 1, "asc" ]]'>
                                                <thead class="align-middle text-center">
                                                    <tr>
                                                        <th scope="col">Owner</th>
                                                        <th scope="col">Masuk</th>
                                                        <th scope="col">Keluar</th>
                                                        <th scope="col">Total (hari)</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="overflow-auto">
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">1/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">ZZZZZ</td>
                                                        <td class="text-center">99/09/2023</td>
                                                        <td class="text-center">99/09/2023</td>
                                                        <td class="text-center">99</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Storage Yard Ends --}}


                {{-- Sesi Storage Warehouse Start --}}
                <div class="row mb-2 align-items-start border-bottom">
                    <div class="col col-lg-9 col-md-9 col-sm-8 col-7">
                        <h3 class="h3">Storage Warehouse
                            <span id="swHideShow">
                                <i class="animate-icon fa-solid fa-chevron-down"></i>
                            </span>
                        </h3>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50">
                        <select id="swCategory" class="form-select" aria-label="Default select example">
                            <option selected value="dimensions">Dimensions</option>
                            <option value="volume">Volume</option>
                        </select>
                    </div>
                </div>
                <section id="storageWarehouse" class="mb-4" style="width: 100%; height: 450px">
                    <div class="row p-2 sub-menu h-100">
                        <div id="storageWarehouse-left"
                            class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-success p47">
                                        <span>47%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-success"></div>
                                            <div class="value-bar value-bar-success"></div>
                                        </div>
                                    </div>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-success">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TEUs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-primary over50 p53">
                                        <span>53%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-primary"></div>
                                            <div class="value-bar value-bar-primary"></div>
                                        </div>
                                    </div>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-primary">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TUEs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <div class="progress-circle progress-circle-warning over50 p100">
                                        <span>100%</span>
                                        <div class="left-half-clipper">
                                            <div class="first50-bar-warning"></div>
                                            <div class="value-bar value-bar-warning"></div>
                                        </div>
                                    </div>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Remains</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-warning">103</h3>
                                        <p class="fs-6 fw-normal d-inline">TUEs</p>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="70" height="70" rx="35" fill="#EDE7F6" />
                                        <path
                                            d="M21.7876 33.1124C23.8698 33.1124 25.5627 31.4195 25.5627 29.3373C25.5627 27.2551 23.8698 25.5623 21.7876 25.5623C19.7054 25.5623 18.0125 27.2551 18.0125 29.3373C18.0125 31.4195 19.7054 33.1124 21.7876 33.1124ZM48.2132 33.1124C50.2954 33.1124 51.9883 31.4195 51.9883 29.3373C51.9883 27.2551 50.2954 25.5623 48.2132 25.5623C46.131 25.5623 44.4381 27.2551 44.4381 29.3373C44.4381 31.4195 46.131 33.1124 48.2132 33.1124ZM50.1008 35H46.3257C45.2875 35 44.3497 35.4188 43.6654 36.0971C46.0426 37.4007 47.7295 39.7542 48.0953 42.5501H51.9883C53.0324 42.5501 53.8759 41.7066 53.8759 40.6626V38.7751C53.8759 36.6929 52.183 35 50.1008 35ZM35.0004 35C38.6516 35 41.6068 32.0448 41.6068 28.3936C41.6068 24.7424 38.6516 21.7872 35.0004 21.7872C31.3492 21.7872 28.394 24.7424 28.394 28.3936C28.394 32.0448 31.3492 35 35.0004 35ZM39.5305 36.8875H39.041C37.814 37.4774 36.4515 37.8313 35.0004 37.8313C33.5494 37.8313 32.1927 37.4774 30.9599 36.8875H30.4703C26.7188 36.8875 23.6752 39.9312 23.6752 43.6827V45.3815C23.6752 46.9446 24.9434 48.2128 26.5065 48.2128H43.4944C45.0575 48.2128 46.3257 46.9446 46.3257 45.3815V43.6827C46.3257 39.9312 43.282 36.8875 39.5305 36.8875ZM26.3354 36.0971C25.6512 35.4188 24.7133 35 23.6752 35H19.9001C17.8179 35 16.125 36.6929 16.125 38.7751V40.6626C16.125 41.7066 16.9685 42.5501 18.0125 42.5501H21.8997C22.2713 39.7542 23.9583 37.4007 26.3354 36.0971Z"
                                            fill="#673AB7" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Customer</p>
                                        <h3 id="swTotalOrder" class="h3 mb-0 d-inline text-purple">103</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="storageWarehouse-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row pt-0 px-3 shadow rounded-3 h-100">
                                <div class="col col-lg-5 col-md-12 col-sm-12 col-12 pt-3">
                                    <div class="graph-container text-primaryDark w-100">
                                        <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total
                                            Dimensions
                                        </h3>
                                        <div id="LuasStorageWarehouse">

                                        </div>
                                    </div>
                                </div>
                                <div id="storageWarehouseTable"
                                    class="col-lg-7 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                                    <div class="row rounded-3 h-100 px-3">
                                        <div class="row pt-3 mt-0 me-0 mb-3 ms-0 p-0">
                                            <h3 class="h3 col col-lg-7 col-md-7 col-sm-12 col-12 text-start fw-bold">
                                                Duration
                                            </h3>
                                        </div>
                                        <div class="graph-container m-0 px-0 row text-primaryDark border rounded-3 overflow-hidden"
                                            style="border-color: #9DB2BF !important">
                                            <table id="storageWarehouseTableSort"
                                                class="table table-fix-head table-responsive table-primaryDark table-striped table-hover responsive  w-100"
                                                data-order='[[ 1, "asc" ]]'>
                                                <thead class="align-middle text-center">
                                                    <tr>
                                                        <th scope="col">Owner</th>
                                                        <th scope="col">Masuk</th>
                                                        <th scope="col">Keluar</th>
                                                        <th scope="col">Total (hari)</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="overflow-auto">
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">1/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">PT Suka Maju</td>
                                                        <td class="text-center">14/09/2023</td>
                                                        <td class="text-center">26/09/2023</td>
                                                        <td class="text-center">7</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">ZZZZZ</td>
                                                        <td class="text-center">99/09/2023</td>
                                                        <td class="text-center">99/09/2023</td>
                                                        <td class="text-center">99</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Storage Warehouse Ends --}}


                {{-- Sesi Trucking Start --}}
                <div class="row mb-2 border-bottom">
                    <h3 class="h3">Trucking
                        <span id="truckingHideShow">
                            <i class="animate-icon fa-solid fa-chevron-down"></i>
                        </span>
                    </h3>
                </div>
                <section id="trucking" class="mb-4" style="width: 100%">
                    <div class="row p-2 sub-menu h-100">
                        <div id="trucking-left" class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                                    <div class="row w-100 m-0">
                                        <div class="input-group px-0">
                                            <input type="text" id="trucking_month_select" name="trucking_month_select"
                                                class="form-control rounded-start-3" placeholder="Pilih Bulan">
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.458374" width="70" height="70" rx="35"
                                            fill="#E1F5FE" />
                                        <path
                                            d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z"
                                            fill="#039BE5" />
                                        <path
                                            d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z"
                                            stroke="#039BE5" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Order</p>
                                        <h3 id="truckingTotalOrder" class="h3 mb-0 text-primary">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9" />
                                        <path
                                            d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z"
                                            fill="#43A047" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Finish Order</p>
                                        <h3 id="truckingFinishOrder" class="h3 mb-0 text-success">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.291687" width="70" height="70" rx="35"
                                            fill="#FFEBEE" />
                                        <path
                                            d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z"
                                            fill="#E53935" />
                                        <path
                                            d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z"
                                            fill="#E53935" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Pending Order</p>
                                        <h3 id="truckingPendingOrder" class="h3 mb-0 text-danger">123</h3>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.208313" width="70" height="70" rx="35"
                                            fill="#EDE7F6" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.3581 25.9356H28.8182V29.0265H19.5455V19.7402H22.6364V23.241C26.0937 19.6155 30.0339 18.2083 35 18.2083C44.3888 18.2083 52 25.8195 52 35.2083C52 44.5972 44.3888 52.2083 35 52.2083C25.6112 52.2083 18 44.5972 18 35.2083H21.0909C21.0909 42.8901 27.3182 49.1174 35 49.1174C42.6818 49.1174 48.9091 42.8901 48.9091 35.2083C48.9091 27.5265 42.6818 21.2992 35 21.2992C30.6097 21.2992 27.3417 22.5223 24.3581 25.9356ZM36.5455 33.6629H42.7273V36.7538H33.4545V25.9356H36.5455V33.6629Z"
                                            fill="#5E35B1" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Service Time</p>
                                        <h3 id="truckingServiceTime" class="h3 mb-0 d-inline text-purple">1</h3>
                                        <p class="fs-6 fw-normal d-inline">/hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="trucking-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row p-2 shadow rounded-3 h-100">
                                <div class="col col-lg-85 col-md-12 col-sm-12 col-12 pt-3">
                                    <div class="graph-container text-primaryDark w-100">
                                        <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order
                                        </h3>
                                        <div id="totalOrderTrucking">

                                        </div>
                                    </div>
                                </div>
                                <div class="mini-item-container col col-lg-35 col-md-12 col-sm-12 col-12">
                                    <div class="row justify-content-between mt-0 me-0 mb-1 ms-0 p-0">
                                        <div class="input-group px-0">
                                            <select name="trucking_year_select" id="trucking_year_select"
                                                class="form-control rounded-start-3">
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                            </select>
                                            {{-- <input type="text" id="lolo_year_select" name="lolo_year_select" class="form-control rounded-start-3" placeholder="Pilih Tahun"> --}}
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div
                                        class="mini-item card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                        <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="35" fill="#E1F5FE" />
                                            <path
                                                d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                stroke="#0D6EFD" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M30.7028 34.8915L33.0547 37.3492L35.8652 34.1507L39.0285 37.3845L44.5555 30.4582L42.721 29L38.8404 33.8332L35.7476 30.6816L33.0547 33.8684L30.8087 31.5165L26.34 35.9499L28.0099 37.6197L30.7028 34.8915ZM25.999 39.4895V41.1358H44.8142V39.4895H25.999Z"
                                                fill="#0D6EFD" />
                                        </svg>
                                        <div class="card-body ps-1 pe-0">
                                            <p class="card-text m-0 fs-7">Average Total Order</p>
                                            <h3 id="loloTotalOrder" class="h3 mb-0 text-primary">53.6</h3>
                                        </div>
                                    </div>
                                    <div
                                        class="mini-item card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                        <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="35" fill="#E8F5E9" />
                                            <path
                                                d="M43.7179 30.5295L35.7751 38.4724L31.5389 34.2362L25.1846 40.5905M38.9522 30H44.1945V35.2952"
                                                stroke="#198754" stroke-width="2.1181" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                stroke="#198754" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="card-body ps-1 pe-0">
                                            <p class="card-text m-0 fs-7">Highest Total Order</p>
                                            <h3 id="loloFinishOrder" class="h3 mb-0 text-success">123</h3>
                                        </div>
                                    </div>
                                    <div
                                        class="mini-item card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                        <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="35" fill="#FFEBEE" />
                                            <path
                                                d="M36.3371 39.4806C36.3371 38.8441 36.8532 38.328 37.4897 38.328H40.0746L35.4806 33.7339L32.6073 36.6073C32.3911 36.8234 32.098 36.9448 31.7923 36.9448C31.4866 36.9448 31.1934 36.8234 30.9772 36.6073L25.3376 30.9676C24.8875 30.5175 24.8875 29.7877 25.3376 29.3376C25.7877 28.8875 26.5175 28.8875 26.9676 29.3376L31.7923 34.1623L34.6656 31.2889C34.8817 31.0727 35.1749 30.9513 35.4806 30.9513C35.7863 30.9513 36.0795 31.0727 36.2956 31.2889L41.7047 36.698V34.1131C41.7047 34.0335 41.7128 33.9558 41.7281 33.8808C41.8356 33.3556 42.3003 32.9605 42.8573 32.9605C43.4939 32.9605 44.0099 33.4765 44.0099 34.1131V39.4806C44.0099 40.1172 43.4939 40.6332 42.8573 40.6332H37.4897C36.8532 40.6332 36.3371 40.1172 36.3371 39.4806Z"
                                                fill="#DC3545" />
                                            <path
                                                d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                stroke="#DC3545" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="card-body ps-2 pe-0">
                                            <p class="card-text m-0 fs-7">Lowest Total Order</p>
                                            <h3 id="loloPendingOrder" class="h3 mb-0 text-danger">51</h3>
                                        </div>
                                    </div>
                                    <div
                                        class="mini-item card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                        <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="70" height="70" rx="35" fill="#EDE7F6" />
                                            <path
                                                d="M35 24.5806C31.3669 24.5806 28.4194 27.5282 28.4194 31.1613C28.4194 34.7944 31.3669 37.7419 35 37.7419C38.6331 37.7419 41.5806 34.7944 41.5806 31.1613C41.5806 27.5282 38.6331 24.5806 35 24.5806ZM35 34.4516C33.1835 34.4516 31.7097 32.9778 31.7097 31.1613C31.7097 29.3448 33.1835 27.871 35 27.871C36.8165 27.871 38.2903 29.3448 38.2903 31.1613C38.2903 32.9778 36.8165 34.4516 35 34.4516ZM35 18C25.6089 18 18 25.6089 18 35C18 44.3911 25.6089 52 35 52C44.3911 52 52 44.3911 52 35C52 25.6089 44.3911 18 35 18ZM35 48.7097C31.5931 48.7097 28.481 47.4552 26.0819 45.3919C27.1032 43.8153 28.8512 42.746 30.8528 42.6843C32.2786 43.123 33.6359 43.3423 35 43.3423C36.3641 43.3423 37.7214 43.1298 39.1472 42.6843C41.1488 42.7528 42.8968 43.8153 43.9181 45.3919C41.519 47.4552 38.4069 48.7097 35 48.7097ZM46.1528 42.9448C44.4802 40.7923 41.896 39.3871 38.9484 39.3871C38.2492 39.3871 37.1661 40.0452 35 40.0452C32.8407 40.0452 31.7508 39.3871 31.0516 39.3871C28.1109 39.3871 25.5266 40.7923 23.8472 42.9448C22.2431 40.7032 21.2903 37.9613 21.2903 35C21.2903 27.4391 27.4391 21.2903 35 21.2903C42.5609 21.2903 48.7097 27.4391 48.7097 35C48.7097 37.9613 47.7569 40.7032 46.1528 42.9448Z"
                                                fill="#673AB7" />
                                        </svg>
                                        <div class="card-body ps-2 pe-0">
                                            <p class="card-text m-0 fs-7">Total Manpower</p>
                                            <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">3</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Trucking Ends --}}


                {{-- Sesi Plugging & Monitoring Start --}}
                <div class="row align-items-start mb-2 border-bottom">
                    <div class="col col-lg-9 col-md-9 col-sm-8 col-7">
                        <h3 class="h3">Plugging & Monitoring
                            <span id="PMHideShow">
                                <i class="animate-icon fa-solid fa-chevron-down"></i>
                            </span>
                        </h3>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-4 col-5 p-0 h-50">
                        <div class="input-group px-0">
                            <input type="text" id="pm_month_select" name="pm_month_select"
                                class="form-control rounded-start-3" placeholder="Pilih Bulan">
                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                <i class="fa-regular fa-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <section id="pluggingMonitoring" class="mb-4" style="width: 100%; height: 450px">
                    <div class="row p-2 sub-menu h-100">
                        <div id="pluggingMonitoring-left"
                            class="col col-lg-3 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.458374" width="70" height="70" rx="35"
                                            fill="#E1F5FE" />
                                        <path
                                            d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z"
                                            fill="#039BE5" />
                                        <path
                                            d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z"
                                            stroke="#039BE5" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Plug</p>
                                        <h3 class="h3 mb-0">160</h3>
                                    </div>
                                </div>
                                <div
                                    class="shift mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.041748" width="70" height="70" rx="35"
                                            fill="#FBE9E7" />
                                        <path
                                            d="M35 18.0417C31.6377 18.0417 28.3509 19.0388 25.5553 20.9068C22.7597 22.7747 20.5807 25.4298 19.2941 28.5361C18.0074 31.6425 17.6707 35.0606 18.3267 38.3583C18.9826 41.656 20.6017 44.6851 22.9792 47.0626C25.3567 49.4401 28.3858 51.0591 31.6835 51.7151C34.9811 52.371 38.3993 52.0344 41.5056 50.7477C44.612 49.461 47.267 47.2821 49.135 44.4864C51.003 41.6908 52 38.404 52 35.0417C51.9949 30.5346 50.2022 26.2136 47.0152 23.0266C43.8282 19.8396 39.5071 18.0468 35 18.0417ZM35 49.4264C32.155 49.4264 29.3739 48.5827 27.0083 47.0021C24.6428 45.4215 22.7991 43.1749 21.7104 40.5465C20.6216 37.9181 20.3368 35.0258 20.8918 32.2354C21.4468 29.4451 22.8168 26.882 24.8285 24.8703C26.8403 22.8586 29.4034 21.4886 32.1937 20.9335C34.984 20.3785 37.8763 20.6634 40.5048 21.7521C43.1332 22.8408 45.3798 24.6845 46.9604 27.0501C48.541 29.4156 49.3846 32.1967 49.3846 35.0417C49.3803 38.8555 47.8634 42.5117 45.1667 45.2084C42.47 47.9051 38.8137 49.422 35 49.4264ZM36.9615 27.8494V42.8879C36.9615 43.2347 36.8238 43.5673 36.5785 43.8126C36.3333 44.0578 36.0007 44.1956 35.6539 44.1956C35.307 44.1956 34.9744 44.0578 34.7292 43.8126C34.4839 43.5673 34.3462 43.2347 34.3462 42.8879V30.2923L32.456 31.5519C32.3131 31.6474 32.1528 31.7138 31.9842 31.7473C31.8156 31.7808 31.6421 31.7807 31.4735 31.7471C31.305 31.7134 31.1447 31.6469 31.0019 31.5513C30.8591 31.4557 30.7365 31.3328 30.6412 31.1898C30.5459 31.0468 30.4797 30.8864 30.4464 30.7178C30.4132 30.5492 30.4135 30.3756 30.4473 30.2071C30.4811 30.0386 30.5479 29.8784 30.6437 29.7357C30.7395 29.5931 30.8624 29.4706 31.0056 29.3755L34.9287 26.7612C35.1256 26.63 35.3545 26.5547 35.5909 26.5433C35.8273 26.5319 36.0623 26.5849 36.271 26.6966C36.4796 26.8083 36.654 26.9745 36.7757 27.1775C36.8973 27.3805 36.9615 27.6128 36.9615 27.8494Z"
                                            fill="#F4511E" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Monitor Shift 1</p>
                                        <p class="card-text m-0 fs-7">07:00 - 15:00</p>
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            <h4 class="h4 mb-0">121</h4>
                                            <div class="d-flex flow-row justify-content-end align-items-center">
                                                <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i>
                                                <p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                                <i class="fa-solid fa-circle-arrow-down fa-xs"
                                                    style="color: #dc3545;"></i>
                                                <p class="mb-0 text-middle fs-7 text-danger">2</p></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="shift mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.958252" width="70" height="70" rx="35"
                                            fill="#FBE9E7" />
                                        <path
                                            d="M35 18.9583C31.6377 18.9583 28.3509 19.9553 25.5553 21.8233C22.7597 23.6913 20.5807 26.3463 19.2941 29.4526C18.0074 32.559 17.6707 35.9771 18.3267 39.2748C18.9826 42.5725 20.6017 45.6016 22.9792 47.9791C25.3567 50.3566 28.3858 51.9756 31.6835 52.6316C34.9811 53.2875 38.3993 52.9509 41.5056 51.6642C44.612 50.3775 47.267 48.1986 49.135 45.4029C51.003 42.6073 52 39.3205 52 35.9582C51.9949 31.4511 50.2022 27.1301 47.0152 23.9431C43.8282 20.7561 39.5071 18.9634 35 18.9583ZM35 50.3429C32.155 50.3429 29.3739 49.4992 27.0083 47.9186C24.6428 46.338 22.7991 44.0914 21.7104 41.463C20.6216 38.8346 20.3368 35.9423 20.8918 33.1519C21.4468 30.3616 22.8168 27.7985 24.8285 25.7868C26.8403 23.7751 29.4034 22.4051 32.1937 21.85C34.984 21.295 37.8763 21.5799 40.5048 22.6686C43.1332 23.7573 45.3798 25.601 46.9604 27.9666C48.541 30.3321 49.3846 33.1132 49.3846 35.9582C49.3803 39.772 47.8634 43.4282 45.1667 46.1249C42.47 48.8217 38.8137 50.3386 35 50.3429ZM39.2995 35.0129L33.6918 42.4958H38.9231C39.2699 42.4958 39.6025 42.6335 39.8478 42.8788C40.093 43.124 40.2308 43.4566 40.2308 43.8034C40.2308 44.1503 40.093 44.4829 39.8478 44.7281C39.6025 44.9734 39.2699 45.1111 38.9231 45.1111H31.1288C31.1114 45.1118 31.094 45.1123 31.0768 45.1123C30.8317 45.1121 30.5915 45.0431 30.3837 44.9132C30.1759 44.7832 30.0088 44.5974 29.9014 44.3771C29.7941 44.1568 29.7508 43.9107 29.7764 43.6669C29.8021 43.4232 29.8957 43.1916 30.0467 42.9984L37.1855 33.4727C37.3852 33.1688 37.5193 32.8268 37.5794 32.4682C37.6395 32.1097 37.6242 31.7425 37.5345 31.3902C37.4447 31.0379 37.2826 30.7082 37.0583 30.4221C36.8341 30.1359 36.5526 29.8997 36.232 29.7284C35.9113 29.5571 35.5585 29.4545 35.1959 29.4272C34.8334 29.3999 34.4692 29.4484 34.1265 29.5697C33.7838 29.691 33.4701 29.8824 33.2055 30.1317C32.9409 30.381 32.7311 30.6827 32.5896 31.0175C32.5227 31.1757 32.4253 31.3191 32.303 31.4397C32.1806 31.5602 32.0358 31.6554 31.8766 31.72C31.7175 31.7845 31.5472 31.8171 31.3755 31.8158C31.2037 31.8145 31.034 31.7795 30.8758 31.7126C30.7176 31.6457 30.5742 31.5483 30.4537 31.426C30.3331 31.3036 30.2379 31.1588 30.1733 30.9996C30.1088 30.8405 30.0762 30.6702 30.0775 30.4985C30.0788 30.3267 30.1139 30.1569 30.1808 29.9988C30.4648 29.3268 30.8863 28.7216 31.4182 28.2222C31.95 27.7227 32.5805 27.3401 33.269 27.0988C33.9575 26.8575 34.6889 26.7628 35.4162 26.821C36.1434 26.8791 36.8505 27.0887 37.4919 27.4363C38.1334 27.7839 38.695 28.2619 39.1408 28.8395C39.5866 29.417 39.9066 30.0815 40.0803 30.7901C40.254 31.4987 40.2776 32.2358 40.1495 32.954C40.0215 33.6723 39.7446 34.3558 39.3367 34.9607C39.3247 34.9784 39.3124 34.9958 39.2995 35.0129Z"
                                            fill="#F4511E" />
                                    </svg>
                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Monitor Shift 2</p>
                                        <p class="card-text m-0 fs-7">15:00 - 23:00</p>
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            <h4 class="h4 mb-0">121</h4>
                                            <div class="d-flex flow-row justify-content-end align-items-center">
                                                <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i>
                                                <p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                                <i class="fa-solid fa-circle-arrow-down fa-xs"
                                                    style="color: #dc3545;"></i>
                                                <p class="me-0 mb-0 text-middle fs-7 text-danger">2</p></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="shift mini-item card px-3 d-flex flex-row align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.875" width="70" height="70" rx="35" fill="#FBE9E7" />
                                        <path
                                            d="M35 18.875C31.6377 18.875 28.3509 19.872 25.5553 21.74C22.7597 23.608 20.5807 26.263 19.2941 29.3694C18.0074 32.4757 17.6707 35.8939 18.3267 39.1915C18.9826 42.4892 20.6017 45.5183 22.9792 47.8958C25.3567 50.2733 28.3858 51.8924 31.6835 52.5483C34.9811 53.2043 38.3993 52.8676 41.5056 51.5809C44.612 50.2943 47.267 48.1153 49.135 45.3197C51.003 42.5241 52 39.2373 52 35.875C51.9949 31.3679 50.2022 27.0468 47.0152 23.8598C43.8282 20.6728 39.5071 18.8801 35 18.875ZM35 50.2596C32.155 50.2596 29.3739 49.416 27.0083 47.8354C24.6428 46.2548 22.7991 44.0082 21.7104 41.3798C20.6216 38.7513 20.3368 35.859 20.8918 33.0687C21.4468 30.2784 22.8168 27.7153 24.8285 25.7035C26.8403 23.6918 29.4034 22.3218 32.1937 21.7668C34.984 21.2117 37.8763 21.4966 40.5048 22.5853C43.1332 23.6741 45.3798 25.5178 46.9604 27.8833C48.541 30.2489 49.3846 33.03 49.3846 35.875C49.3803 39.6887 47.8634 43.345 45.1667 46.0417C42.47 48.7384 38.8137 50.2553 35 50.2596ZM38.5077 35.6371C39.6107 36.7409 40.2302 38.2374 40.2299 39.7978C40.2297 41.3582 39.6097 42.8546 38.5063 43.9579C37.403 45.0613 35.9066 45.6812 34.3462 45.6814C32.7858 45.6817 31.2892 45.0622 30.1856 43.9592C29.9403 43.7139 29.8025 43.3813 29.8025 43.0344C29.8025 42.6876 29.9403 42.3549 30.1856 42.1097C30.4308 41.8644 30.7635 41.7266 31.1103 41.7266C31.4571 41.7266 31.7898 41.8644 32.035 42.1097C32.4152 42.4898 32.8832 42.7704 33.3977 42.9264C33.9122 43.0825 34.4572 43.1092 34.9845 43.0043C35.5118 42.8995 36.005 42.6661 36.4206 42.3251C36.8362 41.984 37.1612 41.5457 37.367 41.049C37.5727 40.5523 37.6528 40.0126 37.6001 39.4775C37.5474 38.9425 37.3635 38.4287 37.0648 37.9817C36.7662 37.5347 36.3618 37.1683 35.8877 36.9149C35.4136 36.6614 34.8843 36.5288 34.3466 36.5288C34.1074 36.5289 33.8728 36.4632 33.6683 36.3392C33.4638 36.2151 33.2972 36.0373 33.1867 35.8251C33.0763 35.613 33.0261 35.3746 33.0417 35.1359C33.0573 34.8972 33.138 34.6673 33.2752 34.4714L36.4116 29.9891H31.0764C30.7296 29.9891 30.397 29.8513 30.1518 29.6061C29.9065 29.3609 29.7688 29.0282 29.7688 28.6814C29.7688 28.3346 29.9065 28.002 30.1518 27.7567C30.397 27.5115 30.7296 27.3737 31.0764 27.3737H38.9226C39.1618 27.3737 39.3964 27.4393 39.6009 27.5634C39.8055 27.6875 39.972 27.8653 40.0825 28.0774C40.193 28.2896 40.2432 28.528 40.2276 28.7667C40.212 29.0054 40.1312 29.2352 39.994 29.4312L36.5583 34.3414C37.2885 34.6382 37.9514 35.0788 38.5077 35.6371Z"
                                            fill="#F4511E" />
                                    </svg>
                                    <div class="card-body  ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Monitor Shift 3</p>
                                        <p class="card-text m-0 fs-7">23:00 - 07:00</p>
                                        <div class="d-flex flex-row justify-content-between align-items-center">
                                            <h4 class="h4 mb-0">121</h4>
                                            <div class="d-flex flow-row justify-content-end align-items-center">
                                                <i class="fa-solid fa-circle-arrow-up fa-xs" style="color: #198754;"></i>
                                                <p class="me-2 mb-0 text-middle fs-7 text-success">2</p>
                                                <i class="fa-solid fa-circle-arrow-down fa-xs"
                                                    style="color: #dc3545;"></i>
                                                <p class="me-0 mb-0 text-middle fs-7 text-danger">2</p></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="pluggingMonitoring-right" class="col-lg-9 col-md-12 col-sm-12 col-12 h-100">
                            <div class="row h-100">
                                <div id="pluggingMonitoringTable"
                                    class="col-lg-7 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                                    <div class="row shadow rounded-3 h-100 px-3">
                                        <div class="row pt-3 mt-0 me-0 mb-3 ms-0 p-0">
                                            <h3 class="h3 col col-lg-7 col-md-7 col-sm-12 col-12 text-start fw-bold">
                                                Duration
                                            </h3>
                                        </div>
                                        <div class="graph-container m-0 px-0 row text-primaryDark border rounded-3 overflow-hidden"
                                            style="border-color: #9DB2BF !important">
                                            <table id="pluggingMonitoringeTableSort"
                                                class="table table-fix-head table-responsive table-primaryDark table-striped table-hover responsive  w-100"
                                                data-order='[[ 1, "asc" ]]'>
                                                <thead class="align-middle text-center">
                                                    <tr>
                                                        <th scope="col">No Container</th>
                                                        <th scope="col">Lama Plugging</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="overflow-auto">
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                    <tr>
                                                        <td scope="row">HKLO9070</td>
                                                        <td class="text-center">07:30 - 16:00 (510 Menit)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="pluggingMonitoringChart"
                                    class="col col-lg-5 col-md-12 col-sm-12 col-12 pb-1 pe-35 h-100">
                                    <div class="row shadow rounded-3 h-100 px-3">
                                        <div class="row pt-3 px-1 pe-3">
                                            <h3 class="h3 col-12 text-start fw-bold">Total Container Monitored</h3>
                                        </div>
                                        <div class="graph-container row text-primaryDark" style="width: 100%">
                                            <div id="totalMonitoringTiapShift">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Plugging & Monitoring Ends --}}


                {{-- Sesi Stuffing & Stripping Start --}}
                <div class="row mb-2 border-bottom">
                    <h3 class="h3">Stuffing & Stripping
                        <span id="SSHideShow">
                            <i class="animate-icon fa-solid fa-chevron-down"></i>
                        </span>
                    </h3>
                </div>
                <section id="stuffingStripping" class="mb-4" style="width: 100%">
                    <div class="row p-2 sub-menu" style="height: inherit">
                        <div id="stuffingStripping-left"
                            class="col col-lg-25 col-md-12 col-sm-12 col-12 ps-2 pe-1 container">
                            <div class="mini-item-container row g-2 d-flex justify-content-between h-100 w-100">
                                <div
                                    class="mini-item card p-0 d-flex flex-row align-items-center justify-content-between border-0 mb-2 w-100">
                                    <div class="row w-100 m-0">
                                        <div class="input-group px-0">
                                            <input type="text" id="ss_month_select" name="ss_month_select"
                                                class="form-control rounded-start-3" placeholder="Pilih Bulan">
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.458374" width="70" height="70" rx="35"
                                            fill="#E1F5FE" />
                                        <path
                                            d="M35.7194 36.6259H31.8441C31.5872 36.6259 31.3407 36.7279 31.159 36.9096C30.9774 37.0913 30.8753 37.3377 30.8753 37.5947C30.8753 37.8516 30.9774 38.0981 31.159 38.2797C31.3407 38.4614 31.5872 38.5635 31.8441 38.5635H35.7194C35.9763 38.5635 36.2228 38.4614 36.4045 38.2797C36.5861 38.0981 36.6882 37.8516 36.6882 37.5947C36.6882 37.3377 36.5861 37.0913 36.4045 36.9096C36.2228 36.7279 35.9763 36.6259 35.7194 36.6259ZM39.5947 26.9376H38.4515C38.2516 26.3723 37.8817 25.8826 37.3926 25.5357C36.9035 25.1888 36.319 25.0017 35.7194 25H33.7818C33.1821 25.0017 32.5977 25.1888 32.1085 25.5357C31.6194 25.8826 31.2496 26.3723 31.0497 26.9376H29.9065C29.1356 26.9376 28.3964 27.2439 27.8513 27.7889C27.3062 28.334 27 29.0733 27 29.8441V41.47C27 42.2408 27.3062 42.9801 27.8513 43.5252C28.3964 44.0702 29.1356 44.3764 29.9065 44.3764H39.5947C40.3655 44.3764 41.1048 44.0702 41.6499 43.5252C42.1949 42.9801 42.5012 42.2408 42.5012 41.47V29.8441C42.5012 29.0733 42.1949 28.334 41.6499 27.7889C41.1048 27.2439 40.3655 26.9376 39.5947 26.9376ZM32.8129 27.9065C32.8129 27.6495 32.915 27.4031 33.0967 27.2214C33.2784 27.0397 33.5248 26.9376 33.7818 26.9376H35.7194C35.9763 26.9376 36.2228 27.0397 36.4045 27.2214C36.5861 27.4031 36.6882 27.6495 36.6882 27.9065V28.8753H32.8129V27.9065ZM40.5635 41.47C40.5635 41.7269 40.4614 41.9733 40.2797 42.155C40.0981 42.3367 39.8516 42.4388 39.5947 42.4388H29.9065C29.6495 42.4388 29.4031 42.3367 29.2214 42.155C29.0397 41.9733 28.9376 41.7269 28.9376 41.47V29.8441C28.9376 29.5872 29.0397 29.3407 29.2214 29.159C29.4031 28.9774 29.6495 28.8753 29.9065 28.8753H30.8753V29.8441C30.8753 30.1011 30.9774 30.3475 31.159 30.5292C31.3407 30.7109 31.5872 30.8129 31.8441 30.8129H37.657C37.914 30.8129 38.1604 30.7109 38.3421 30.5292C38.5238 30.3475 38.6259 30.1011 38.6259 29.8441V28.8753H39.5947C39.8516 28.8753 40.0981 28.9774 40.2797 29.159C40.4614 29.3407 40.5635 29.5872 40.5635 29.8441V41.47ZM37.657 32.7506H31.8441C31.5872 32.7506 31.3407 32.8526 31.159 33.0343C30.9774 33.216 30.8753 33.4625 30.8753 33.7194C30.8753 33.9763 30.9774 34.2228 31.159 34.4045C31.3407 34.5861 31.5872 34.6882 31.8441 34.6882H37.657C37.914 34.6882 38.1604 34.5861 38.3421 34.4045C38.5238 34.2228 38.6259 33.9763 38.6259 33.7194C38.6259 33.4625 38.5238 33.216 38.3421 33.0343C38.1604 32.8526 37.914 32.7506 37.657 32.7506Z"
                                            fill="#039BE5" />
                                        <path
                                            d="M35 52.4584C44.3888 52.4584 52 44.8471 52 35.4584C52 26.0695 44.3888 18.4584 35 18.4584C25.6112 18.4584 18 26.0695 18 35.4584C18 44.8471 25.6112 52.4584 35 52.4584Z"
                                            stroke="#039BE5" stroke-width="3" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Total Order</p>
                                        <h3 id="loloTotalOrder" class="h3 mb-0 text-primary">123</h3>
                                    </div>
                                </div>


                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.375" width="70" height="70" rx="35" fill="#E8F5E9" />
                                        <path
                                            d="M35 18.375C25.6111 18.375 18 25.9861 18 35.375C18 44.7639 25.6111 52.375 35 52.375C44.3889 52.375 52 44.7639 52 35.375C52 25.9861 44.3889 18.375 35 18.375ZM35 21.6653C42.5768 21.6653 48.7097 27.797 48.7097 35.375C48.7097 42.9518 42.578 49.0847 35 49.0847C27.4232 49.0847 21.2903 42.953 21.2903 35.375C21.2903 27.7982 27.422 21.6653 35 21.6653ZM44.6108 30.5949L43.066 29.0376C42.746 28.7151 42.2252 28.713 41.9027 29.033L32.2132 38.6446L28.1146 34.5127C27.7947 34.1901 27.2738 34.188 26.9513 34.5079L25.394 36.0527C25.0715 36.3727 25.0693 36.8935 25.3893 37.2161L31.6122 43.4893C31.9321 43.8119 32.4529 43.814 32.7755 43.494L44.6062 31.7583C44.9286 31.4383 44.9307 30.9174 44.6108 30.5949Z"
                                            fill="#43A047" />
                                    </svg>

                                    <div class="card-body ps-1 pe-0">
                                        <p class="card-text m-0 fs-7">Finish Order</p>
                                        <h3 id="loloFinishOrder" class="h3 mb-0 text-success">123</h3>
                                    </div>

                                </div>



                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.291687" width="70" height="70" rx="35"
                                            fill="#FFEBEE" />
                                        <path
                                            d="M36.7469 33.6183V24.1715C36.7469 23.9455 36.6571 23.7287 36.4973 23.5689C36.3375 23.4091 36.1208 23.3193 35.8948 23.3193H34.1905C33.9645 23.3193 33.7478 23.4091 33.588 23.5689C33.4282 23.7287 33.3384 23.9455 33.3384 24.1715V34.8965C33.3384 35.1224 33.4282 35.3391 33.5881 35.4989L38.9565 40.8674C39.1163 41.0271 39.333 41.1169 39.559 41.1169C39.7849 41.1169 40.0016 41.0271 40.1614 40.8674L41.2999 39.7289C41.4596 39.5691 41.5494 39.3524 41.5494 39.1265C41.5494 38.9005 41.4596 38.6838 41.2999 38.524L36.9932 34.2173C36.8355 34.0578 36.747 33.8426 36.7469 33.6183Z"
                                            fill="#E53935" />
                                        <path
                                            d="M48.7304 36.9535C48.4123 39.5181 47.3804 41.9418 45.7522 43.9487C44.124 45.9555 41.965 47.4648 39.521 48.3047C37.0771 49.1445 34.4463 49.2812 31.9285 48.6991C29.4106 48.117 27.1069 46.8395 25.2795 45.0122C23.4522 43.1848 22.1747 40.881 21.5926 38.3632C21.0105 35.8453 21.1472 33.2146 21.987 30.7707C22.8269 28.3267 24.3362 26.1677 26.343 24.5395C28.3499 22.9113 30.7736 21.8794 33.3382 21.5613V18.2917C30.1289 18.6143 27.0771 19.841 24.5373 21.8292C21.9975 23.8174 20.0741 26.4855 18.9905 29.5235C17.9069 32.5615 17.7077 35.8447 18.416 38.9914C19.1243 42.1381 20.711 45.0192 22.9917 47.3C25.2724 49.5807 28.1536 51.1674 31.3003 51.8757C34.447 52.584 37.7301 52.3848 40.7681 51.3012C43.8061 50.2176 46.4743 48.2942 48.4625 45.7544C50.4507 43.2146 51.6774 40.1628 52 36.9535H48.7304ZM42.0053 19.7054C40.3404 18.9531 38.5645 18.4757 36.7468 18.2917V21.5613C37.9963 21.7188 39.2182 22.048 40.3777 22.5396L42.0053 19.7054ZM46.1424 27.0849L48.992 25.4914C47.889 23.9113 46.5275 22.5285 44.9648 21.4011L43.3312 24.2456C44.3994 25.0525 45.3462 26.0087 46.1424 27.0849ZM47.8032 30.0631C48.2652 31.1775 48.577 32.3484 48.7304 33.5449H52C51.823 31.7914 51.3728 30.0763 50.6656 28.4619L47.8032 30.0631Z"
                                            fill="#E53935" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Pending Order</p>
                                        <h3 id="loloPendingOrder" class="h3 mb-0 text-danger">123</h3>
                                    </div>
                                </div>

                                <div
                                    class="mini-item card px-3 d-flex flex-row justify-content-between align-items-center border-0 shadow rounded-3">
                                    <svg width="45" height="45" viewBox="0 0 70 71" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect y="0.208313" width="70" height="70" rx="35"
                                            fill="#EDE7F6" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.3581 25.9356H28.8182V29.0265H19.5455V19.7402H22.6364V23.241C26.0937 19.6155 30.0339 18.2083 35 18.2083C44.3888 18.2083 52 25.8195 52 35.2083C52 44.5972 44.3888 52.2083 35 52.2083C25.6112 52.2083 18 44.5972 18 35.2083H21.0909C21.0909 42.8901 27.3182 49.1174 35 49.1174C42.6818 49.1174 48.9091 42.8901 48.9091 35.2083C48.9091 27.5265 42.6818 21.2992 35 21.2992C30.6097 21.2992 27.3417 22.5223 24.3581 25.9356ZM36.5455 33.6629H42.7273V36.7538H33.4545V25.9356H36.5455V33.6629Z"
                                            fill="#5E35B1" />
                                    </svg>
                                    <div class="card-body ps-2 pe-0">
                                        <p class="card-text m-0 fs-7">Service Time</p>
                                        <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">3</h3>
                                        <p class="fs-6 fw-normal d-inline">/hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="stuffingStripping-right" class="col-lg-95 col-md-12 col-sm-12 col-12 pe-35 pb-1 h-100">
                            <div class="row p-2 shadow rounded-3 h-100">
                                <div class="col col-lg-85 col-md-12 col-sm-12 col-12 pt-3">
                                    <div class="graph-container text-primaryDark w-100">
                                        <h3 class="h3 col-lg-9 col-md-9 col-sm-12 col-12 text-start fw-bold">Total Order
                                        </h3>
                                        <div id="totalOrderStuffingStripping">

                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-35 col-md-12 col-sm-12 col-12">
                                    <div class="row justify-content-between mt-0 me-0 mb-2 ms-0 p-0">
                                        <div class="input-group px-0">
                                            <select name="ss_year_select" id="ss_year_select"
                                                class="form-control rounded-start-3">
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                            </select>
                                            {{-- <input type="text" id="lolo_year_select" name="lolo_year_select" class="form-control rounded-start-3" placeholder="Pilih Tahun"> --}}
                                            <span class="input-group-text rounded-start-0 rounded-end-3">
                                                <i class="fa-regular fa-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between w-110 gx-2 mt-2">
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#E1F5FE" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#0D6EFD" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M30.7028 34.8915L33.0547 37.3492L35.8652 34.1507L39.0285 37.3845L44.5555 30.4582L42.721 29L38.8404 33.8332L35.7476 30.6816L33.0547 33.8684L30.8087 31.5165L26.34 35.9499L28.0099 37.6197L30.7028 34.8915ZM25.999 39.4895V41.1358H44.8142V39.4895H25.999Z"
                                                        fill="#0D6EFD" />
                                                </svg>
                                                <div class="card-body ps-1 pe-0">
                                                    <p class="card-text m-0 fs-7">Average Total Order</p>
                                                    <h3 id="loloTotalOrder" class="h3 mb-0 text-primary">53.6</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35" fill="#E8F5E9" />
                                                    <path
                                                        d="M43.7179 30.5295L35.7751 38.4724L31.5389 34.2362L25.1846 40.5905M38.9522 30H44.1945V35.2952"
                                                        stroke="#198754" stroke-width="2.1181" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#198754" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="card-body ps-1 pe-0">
                                                    <p class="card-text m-0 fs-7">Highest Total Order</p>
                                                    <h3 id="loloFinishOrder" class="h3 mb-0 text-success">123</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35"
                                                        fill="#FFEBEE" />
                                                    <path
                                                        d="M36.3371 39.4806C36.3371 38.8441 36.8532 38.328 37.4897 38.328H40.0746L35.4806 33.7339L32.6073 36.6073C32.3911 36.8234 32.098 36.9448 31.7923 36.9448C31.4866 36.9448 31.1934 36.8234 30.9772 36.6073L25.3376 30.9676C24.8875 30.5175 24.8875 29.7877 25.3376 29.3376C25.7877 28.8875 26.5175 28.8875 26.9676 29.3376L31.7923 34.1623L34.6656 31.2889C34.8817 31.0727 35.1749 30.9513 35.4806 30.9513C35.7863 30.9513 36.0795 31.0727 36.2956 31.2889L41.7047 36.698V34.1131C41.7047 34.0335 41.7128 33.9558 41.7281 33.8808C41.8356 33.3556 42.3003 32.9605 42.8573 32.9605C43.4939 32.9605 44.0099 33.4765 44.0099 34.1131V39.4806C44.0099 40.1172 43.4939 40.6332 42.8573 40.6332H37.4897C36.8532 40.6332 36.3371 40.1172 36.3371 39.4806Z"
                                                        fill="#DC3545" />
                                                    <path
                                                        d="M35 52C44.3888 52 52 44.3888 52 35C52 25.6112 44.3888 18 35 18C25.6112 18 18 25.6112 18 35C18 44.3888 25.6112 52 35 52Z"
                                                        stroke="#DC3545" stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <div class="card-body ps-2 pe-0">
                                                    <p class="card-text m-0 fs-7">Lowest Total Order</p>
                                                    <h3 id="loloPendingOrder" class="h3 mb-0 text-danger">51</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg-12 col-md-6 col-sm-12 col-12">
                                            <div
                                                class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3">
                                                <svg width="45" height="45" viewBox="0 0 70 70"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="70" height="70" rx="35"
                                                        fill="#EDE7F6" />
                                                    <path
                                                        d="M35 24.5806C31.3669 24.5806 28.4194 27.5282 28.4194 31.1613C28.4194 34.7944 31.3669 37.7419 35 37.7419C38.6331 37.7419 41.5806 34.7944 41.5806 31.1613C41.5806 27.5282 38.6331 24.5806 35 24.5806ZM35 34.4516C33.1835 34.4516 31.7097 32.9778 31.7097 31.1613C31.7097 29.3448 33.1835 27.871 35 27.871C36.8165 27.871 38.2903 29.3448 38.2903 31.1613C38.2903 32.9778 36.8165 34.4516 35 34.4516ZM35 18C25.6089 18 18 25.6089 18 35C18 44.3911 25.6089 52 35 52C44.3911 52 52 44.3911 52 35C52 25.6089 44.3911 18 35 18ZM35 48.7097C31.5931 48.7097 28.481 47.4552 26.0819 45.3919C27.1032 43.8153 28.8512 42.746 30.8528 42.6843C32.2786 43.123 33.6359 43.3423 35 43.3423C36.3641 43.3423 37.7214 43.1298 39.1472 42.6843C41.1488 42.7528 42.8968 43.8153 43.9181 45.3919C41.519 47.4552 38.4069 48.7097 35 48.7097ZM46.1528 42.9448C44.4802 40.7923 41.896 39.3871 38.9484 39.3871C38.2492 39.3871 37.1661 40.0452 35 40.0452C32.8407 40.0452 31.7508 39.3871 31.0516 39.3871C28.1109 39.3871 25.5266 40.7923 23.8472 42.9448C22.2431 40.7032 21.2903 37.9613 21.2903 35C21.2903 27.4391 27.4391 21.2903 35 21.2903C42.5609 21.2903 48.7097 27.4391 48.7097 35C48.7097 37.9613 47.7569 40.7032 46.1528 42.9448Z"
                                                        fill="#673AB7" />
                                                </svg>
                                                <div class="card-body ps-2 pe-0">
                                                    <p class="card-text m-0 fs-7">Total Manpower</p>
                                                    <h3 id="loloServiceTime" class="h3 mb-0 d-inline text-purple">3</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between w-100 gx-2 mt-2">
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div
                                    class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3 bg-cardBottom text-white">
                                    <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="70" height="70" rx="35" fill="white" />
                                        <path
                                            d="M41.8 38.1875C39.6219 38.1875 38.5746 39.25 35 39.25C31.4254 39.25 30.3857 38.1875 28.2 38.1875C22.5687 38.1875 18 42.1852 18 47.1125V48.8125C18 50.5723 19.6317 52 21.6429 52H48.3571C50.3683 52 52 50.5723 52 48.8125V47.1125C52 42.1852 47.4313 38.1875 41.8 38.1875ZM48.3571 48.8125H21.6429V47.1125C21.6429 43.9516 24.5875 41.375 28.2 41.375C29.308 41.375 31.1067 42.4375 35 42.4375C38.9237 42.4375 40.6844 41.375 41.8 41.375C45.4125 41.375 48.3571 43.9516 48.3571 47.1125V48.8125ZM35 37.125C41.0335 37.125 45.9286 32.8418 45.9286 27.5625C45.9286 22.2832 41.0335 18 35 18C28.9665 18 24.0714 22.2832 24.0714 27.5625C24.0714 32.8418 28.9665 37.125 35 37.125ZM35 21.1875C39.0147 21.1875 42.2857 24.0496 42.2857 27.5625C42.2857 31.0754 39.0147 33.9375 35 33.9375C30.9853 33.9375 27.7143 31.0754 27.7143 27.5625C27.7143 24.0496 30.9853 21.1875 35 21.1875Z"
                                            fill="url(#paint0_linear_2852_1181)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2852_1181" x1="35" y1="18"
                                                x2="35" y2="52" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#27374D" />
                                                <stop offset="1" stop-color="#27374D" stop-opacity="0.5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="card-body ps-3 pe-0">
                                        <p class="card-text m-0 fs-7">Top Principals</p>
                                        <h6 id="loloFinishOrder" class="h6 mb-0">WANHAI</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div
                                    class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3 bg-cardBottom text-white">
                                    <svg width="45" height="45" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" width="70" height="70" rx="35" fill="white" />
                                        <path
                                            d="M47.2273 48.8125C48.8495 48.8125 50.1591 47.3888 50.1591 45.625C50.1591 43.8612 48.8495 42.4375 47.2273 42.4375C45.605 42.4375 44.2955 43.8612 44.2955 45.625C44.2955 47.3888 45.605 48.8125 47.2273 48.8125ZM50.1591 29.6875H45.2727V35H53.99L50.1591 29.6875ZM23.7727 48.8125C25.395 48.8125 26.7045 47.3888 26.7045 45.625C26.7045 43.8612 25.395 42.4375 23.7727 42.4375C22.1505 42.4375 20.8409 43.8612 20.8409 45.625C20.8409 47.3888 22.1505 48.8125 23.7727 48.8125ZM51.1364 26.5L57 35V45.625H53.0909C53.0909 49.1525 50.4718 52 47.2273 52C43.9827 52 41.3636 49.1525 41.3636 45.625H29.6364C29.6364 49.1525 27.0173 52 23.7727 52C20.5282 52 17.9091 49.1525 17.9091 45.625H14V22.25C14 19.8912 15.7395 18 17.9091 18H45.2727V26.5H51.1364ZM17.9091 22.25V41.375H19.3945C20.4695 40.0788 22.0332 39.25 23.7727 39.25C25.5123 39.25 27.0759 40.0788 28.1509 41.375H41.3636V22.25H17.9091ZM31.5909 24.375L38.4318 31.8125L31.5909 39.25V33.9375H21.8182V29.6875H31.5909V24.375Z"
                                            fill="url(#paint0_linear_2852_1192)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2852_1192" x1="35.5" y1="18"
                                                x2="35.5" y2="52" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#27374D" />
                                                <stop offset="1" stop-color="#27374D" stop-opacity="0.5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="card-body ps-3 pe-0">
                                        <p class="card-text m-0 fs-7">Top Forwarder</p>
                                        <h6 id="loloFinishOrder" class="h6 mb-0">WANHAI</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div
                                    class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3 bg-cardBottom text-white">
                                    <svg width="45" height="45" viewBox="0 0 70 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="70" height="70" rx="35" fill="white" />
                                        <path
                                            d="M20.8132 45.2287C20.9794 45.7086 21.3048 46.093 21.7177 46.2973C22.1307 46.5017 22.5974 46.5092 23.0152 46.3183C23.433 46.1273 23.7676 45.7536 23.9455 45.2793C24.1234 44.805 24.13 44.2689 23.9637 43.789L22.0666 38.3024L33.3138 35.4424V44.684C33.3138 45.2 33.4923 45.6948 33.81 46.0597C34.1276 46.4246 34.5585 46.6296 35.0077 46.6296C35.4569 46.6296 35.8878 46.4246 36.2054 46.0597C36.5231 45.6948 36.7016 45.2 36.7016 44.684V35.4424L47.9488 38.3024L46.0517 43.789C45.9691 44.0266 45.9282 44.2805 45.9313 44.5363C45.9343 44.7921 45.9812 45.0446 46.0693 45.2796C46.1574 45.5145 46.285 45.7272 46.4447 45.9054C46.6044 46.0836 46.7932 46.2239 47.0002 46.3183C47.1997 46.4088 47.4124 46.4551 47.6269 46.4545C47.9662 46.4548 48.2977 46.3382 48.5786 46.1197C48.8594 45.9011 49.0767 45.5907 49.2022 45.2287L51.8277 37.6214C51.9178 37.3583 51.9569 37.0758 51.9423 36.7936C51.9277 36.5113 51.8597 36.2361 51.743 35.9871C51.6298 35.7391 51.4713 35.522 51.2784 35.3507C51.0855 35.1795 50.8626 35.0581 50.6251 34.9949L45.1708 33.6135V25.228C45.1708 24.712 44.9924 24.2171 44.6747 23.8522C44.3571 23.4874 43.9262 23.2824 43.477 23.2824H40.0893V17.4456C40.0893 16.9296 39.9108 16.4347 39.5932 16.0699C39.2755 15.705 38.8447 15.5 38.3954 15.5H31.62C31.1707 15.5 30.7399 15.705 30.4222 16.0699C30.1046 16.4347 29.9261 16.9296 29.9261 17.4456V23.2824H26.5384C26.0892 23.2824 25.6583 23.4874 25.3407 23.8522C25.023 24.2171 24.8445 24.712 24.8445 25.228V33.6135L19.3903 34.956C19.1528 35.0192 18.9299 35.1406 18.737 35.3118C18.544 35.4831 18.3856 35.7002 18.2724 35.9482C18.1557 36.1972 18.0877 36.4724 18.0731 36.7547C18.0585 37.0369 18.0976 37.3194 18.1877 37.5825L20.8132 45.2287ZM33.3138 19.3912H36.7016V23.2824H33.3138V19.3912ZM28.2323 27.1736H41.7831V32.738L35.3803 31.0648H35.211H35.0077H34.8044H34.635L28.2323 32.738V27.1736ZM49.7612 49.1199C49.1669 49.3291 48.5978 49.6233 48.0673 49.9954C47.5277 50.3579 46.9139 50.5489 46.2888 50.5489C45.6637 50.5489 45.0498 50.3579 44.5102 49.9954C43.3368 49.2351 42.0124 48.8356 40.6652 48.8356C39.3179 48.8356 37.9935 49.2351 36.8201 49.9954C36.2731 50.3537 35.6543 50.5421 35.0246 50.5421C34.395 50.5421 33.7761 50.3537 33.2291 49.9954C32.0547 49.2388 30.7307 48.8414 29.3841 48.8414C28.0375 48.8414 26.7135 49.2388 25.539 49.9954C24.9994 50.3579 24.3856 50.5489 23.7605 50.5489C23.1354 50.5489 22.5215 50.3579 21.9819 49.9954C21.4515 49.6233 20.8824 49.3291 20.2881 49.1199C20.0627 49.0279 19.8229 48.9917 19.5845 49.0138C19.346 49.0359 19.1144 49.1157 18.9048 49.2481C18.6951 49.3804 18.5123 49.5622 18.3682 49.7816C18.2242 50.001 18.1223 50.2529 18.0691 50.5208C17.9427 51.0135 17.991 51.5437 18.2036 51.9957C18.4162 52.4477 18.7759 52.7847 19.204 52.9333C19.5451 53.0394 19.8705 53.2034 20.1695 53.4197C21.1972 54.1123 22.3657 54.4815 23.5572 54.4898C24.7947 54.49 26.0103 54.1141 27.0804 53.4002C27.7444 52.9796 28.4903 52.7589 29.2486 52.7589C30.0069 52.7589 30.7528 52.9796 31.4167 53.4002C32.4793 54.0981 33.6821 54.4652 34.9061 54.4652C36.1301 54.4652 37.3329 54.0981 38.3954 53.4002C39.0594 52.9796 39.8053 52.7589 40.5636 52.7589C41.3218 52.7589 42.0677 52.9796 42.7317 53.4002C43.7816 54.12 44.9814 54.5 46.2041 54.5C47.4268 54.5 48.6266 54.12 49.6765 53.4002C49.9755 53.1839 50.3009 53.02 50.642 52.9138C50.8674 52.8615 51.0812 52.7569 51.2703 52.6065C51.4594 52.4562 51.6198 52.2632 51.7419 52.0392C51.8639 51.8153 51.945 51.5652 51.9801 51.3042C52.0153 51.0431 52.0037 50.7766 51.9463 50.5208C51.8924 50.2575 51.7914 50.0099 51.6496 49.794C51.5078 49.5781 51.3284 49.3984 51.1228 49.2666C50.9172 49.1348 50.6899 49.0537 50.4555 49.0284C50.221 49.0032 49.9846 49.0343 49.7612 49.1199Z"
                                            fill="url(#paint0_linear_2852_1214)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2852_1214" x1="35" y1="15.5"
                                                x2="35" y2="54.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#27374D" />
                                                <stop offset="1" stop-color="#27374D" stop-opacity="0.5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="card-body ps-3 pe-0">
                                        <p class="card-text m-0 fs-7">Top Shipper</p>
                                        <h6 id="loloFinishOrder" class="h6 mb-0">WANHAI</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-lg-3 col-md-6 col-sm-12 col-12">
                                <div
                                    class="mini-item-special card px-3 mb-2 d-flex flex-row justify-content-between align-items-center border-1 rounded-3 bg-cardBottom text-white">
                                    <svg width="45" height="45" viewBox="0 0 71 70" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" width="70" height="70" rx="35" fill="white" />
                                        <path
                                            d="M42.2389 49.4407C42.2389 49.4407 42.1745 49.3903 42.16 49.3782L42.2389 49.4407ZM42.2389 49.4407C42.3149 49.499 42.4377 49.5889 42.6073 49.7004L42.2389 49.4407ZM23.7152 38.5172H22.2152H20.233L22.9067 43.9827L22.9067 43.9827C23.1411 44.4618 23.4279 44.869 23.7453 45.1998L25.2904 46.8104C26.6274 46.3671 27.6409 45.8196 28.3644 45.3764L29.2806 44.8151L30.1069 45.5019C31.2177 46.4253 32.9729 47.6207 35.3734 47.6207C37.7496 47.6207 39.4937 46.4492 40.6066 45.5294L41.4611 44.8231L42.3871 45.4328L42.3957 45.4384C42.7599 45.6779 43.3114 46.0001 44.0495 46.3236L23.7152 38.5172ZM23.7152 38.5172V37.0172M23.7152 38.5172V37.0172M23.7152 37.0172V25.069H25.1013V37.0172V38.5172H26.6013H50.8507L49.3062 43.2529C49.3062 43.2529 49.3062 43.253 49.3061 43.253C49.0291 44.102 48.5922 44.7919 48.0796 45.2937L46.2555 47.0792M23.7152 37.0172L46.2555 47.0792M46.2555 47.0792C45.3926 46.857 44.6575 46.5898 44.0497 46.3236L46.2555 47.0792ZM43.5836 51.9179C43.5835 51.9179 43.5835 51.9178 43.5835 51.9178L43.7393 51.5621M43.5836 51.9179L43.7394 51.5621M43.5836 51.9179C43.6849 51.9623 43.7894 52.0066 43.8971 52.0508L43.4477 53.0768L43.8972 52.0508C45.4857 52.7023 47.763 53.3103 50.7245 53.3103C50.5067 53.3103 50.3787 53.2008 50.3399 53.1552C50.3787 53.1096 50.5067 53 50.7245 53C47.7465 53 45.5237 52.3485 44.0497 51.7029C43.9423 51.6559 43.8388 51.6089 43.7394 51.5621M43.5836 51.9179L44.1853 50.5438M43.7393 51.5621C43.7393 51.5621 43.7393 51.5621 43.7394 51.5621M43.7393 51.5621L44.1853 50.5438M43.7393 51.5621C43.1556 51.2878 42.7079 51.0229 42.3968 50.8184M43.7394 51.5621L44.1853 50.5438M44.1853 50.5438L42.3968 50.8184M42.3968 50.8184C42.3964 50.8182 42.3961 50.818 42.3957 50.8177L42.3968 50.8184ZM19.9737 37.9873C19.9738 37.9874 19.9739 37.9876 19.9739 37.9877L19.9738 37.9874L19.9737 37.9873ZM50.3168 53.1207C50.3168 53.1206 50.3169 53.1209 50.3171 53.1216L50.3168 53.1207ZM41.2594 17H46.7679C46.7816 17.0061 46.8119 17.0252 46.8551 17.0781C46.9412 17.1837 47.0315 17.3816 47.0315 17.6517V22.069H41.2594V17ZM46.7599 16.9975C46.7599 16.9973 46.7622 16.9976 46.7664 16.9993C46.7619 16.9987 46.7598 16.9978 46.7599 16.9975ZM41.2594 27.7586H47.0315V32.1759C47.0315 32.446 46.9412 32.6439 46.8551 32.7495C46.8119 32.8024 46.7816 32.8215 46.7679 32.8276H41.2594V27.7586ZM46.7599 32.8301C46.7597 32.8298 46.7619 32.8289 46.7664 32.8282C46.7623 32.83 46.76 32.8303 46.7599 32.8301ZM30.2943 17.6517C30.2943 17.3816 30.3846 17.1837 30.4707 17.0781C30.5138 17.0252 30.5442 17.0061 30.5579 17H36.0664V22.069H30.2943V17.6517ZM30.5659 16.9975C30.566 16.9978 30.5639 16.9987 30.5594 16.9993C30.5636 16.9976 30.5659 16.9973 30.5659 16.9975ZM30.2943 32.1759V27.7586H36.0664V32.8276H30.5579C30.5442 32.8215 30.5138 32.8024 30.4707 32.7495C30.3846 32.6439 30.2943 32.446 30.2943 32.1759ZM30.5659 32.83C30.5659 32.8303 30.5636 32.83 30.5594 32.8282C30.5639 32.8289 30.566 32.8297 30.5659 32.83Z"
                                            stroke="url(#paint0_linear_2852_1225)" stroke-width="3" />
                                        <defs>
                                            <linearGradient id="paint0_linear_2852_1225" x1="35.5" y1="15.5"
                                                x2="35.5" y2="54.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#27374D" />
                                                <stop offset="1" stop-color="#27374D" stop-opacity="0.5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <div class="card-body ps-3 pe-0">
                                        <p class="card-text m-0 fs-7">Top Cargo</p>
                                        <h6 id="loloFinishOrder" class="h6 mb-0">WANHAI</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Sesi Stuffing & Stripping Ends --}}


            </div>
        </div>
        <script defer src="{{ asset('js/analisis/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/analisis/bootstrap.js') }}"></script>
        <script src="{{ asset('js/analisis/bootstrap.min.js') }}"></script>
        <script src="https://kit.fontawesome.com/6b61509af7.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>

        {{-- Datatables Start --}}
        <script>
            // Default option
            $.extend($.fn.dataTable.defaults, {
                searching: false,
                paging: false,
                responsive: true,
                scrollCollapse: true,
                fixedHeader: true,
                scrollX: true,
                scrollY: 300,
            });

            let storageYardTable = new DataTable('#storageYardTableSort', {
                ordering: [],
            });

            let storageWarehouseTable = new DataTable('#storageWarehouseTableSort', {
                ordering: [],
            });

            let pluggingMonitoringTable = new DataTable('#pluggingMonitoringeTableSort', {
                ordering: [],
            });
        </script>
        {{-- Datatables Ends --}}


        {{-- Datepicker Start --}}
        <script>
            // Mendapatkan tanggal saat ini
            const today = new Date();

            // Mendapatkan bulan akhir saat ini
            const lastMonth = new Date(today.getFullYear(), today.getMonth() + 1, 0);

            // Mendapatkan tahun terakhir saat ini
            const lastYear = new Date(today.getFullYear() + 1, 0, 0);

            // Format tanggal ke dalam bentuk "YYYY-MM-DD"
            const formattedDate = lastMonth.toISOString().split('T')[0];


            // Default value select month START
            document.getElementById("lolo_month_select").value = formattedDate;
            document.getElementById("trucking_month_select").value = formattedDate;
            document.getElementById("pm_month_select").value = formattedDate;
            document.getElementById("ss_month_select").value = formattedDate;
            // Default value select month END


            // Datepicker untuk Lift On/Lift Off dengan plugin selectMonth
            const loloMonthSelect = flatpickr("#lolo_month_select", {
                altInput: true,
                altFormat: "F Y",
                dateFormat: "Y-m",
                plugins: [new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m"
                })],
                selectedDate: lastMonth,
                maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
            });

            // Datepicker untuk Trucking dengan plugin selectMonth
            const truckingMonthSelect = flatpickr("#trucking_month_select", {
                altInput: true,
                altFormat: "F Y",
                dateFormat: "Y-m",
                plugins: [new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m"
                })],
                selectedDate: lastMonth,
                maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
            });

            // Datepicker untuk Plugging & Monitoring dengan plugin selectMonth
            const pmMonthSelect = flatpickr("#pm_month_select", {
                altInput: true,
                altFormat: "F Y",
                dateFormat: "Y-m",
                plugins: [new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m"
                })],
                selectedDate: lastMonth,
                maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
            });

            // Datepicker untuk Stuffing/Stripping dengan plugin selectMonth
            const ssMonthSelect = flatpickr("#ss_month_select", {
                altInput: true,
                altFormat: "F Y",
                dateFormat: "Y-m",
                plugins: [new monthSelectPlugin({
                    shorthand: true,
                    dateFormat: "Y-m"
                })],
                selectedDate: lastMonth,
                maxDate: lastMonth, // Membatasi bulan maksimal hingga bulan saat ini
            });
        </script>
        {{-- Datepicker Ends --}}


        {{-- Hide/Show Section Start --}}
        <script>
            // LoLo Start
            document.getElementById('loloHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("liftInLiftOff");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // LoLo Ends


            // SY Start
            document.getElementById('syHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("storageYard");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // SY Ends


            // SW Start
            document.getElementById('swHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("storageWarehouse");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // SW Ends


            // Trucking Start
            document.getElementById('truckingHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("trucking");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // Trucking Ends


            // PM Start
            document.getElementById('PMHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("pluggingMonitoring");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // PM Ends


            // SS Start
            document.getElementById('SSHideShow').addEventListener('click', function() {
                var icon = this.querySelector('h3 span i.fa-chevron-down');
                icon.classList.toggle('fa-rotate-180');
                var x = document.getElementById("stuffingStripping");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            });
            // SS Ends
        </script>
        {{-- Hide/Show Section Start --}}


        {{-- Auto Enable and Disable Shift Pluggin & Monitoring Start --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const divs = document.querySelectorAll('.shift'); // Ambil semua elemen dengan class 'shift'
                let activeIndex = 0;

                function toggleColors() {
                    // Ganti kelas 'dark' dan 'bright' pada elemen 'shift' saat ini
                    if (activeIndex == 0) {
                        divs[0].classList.add('shift-active');
                        divs[1].classList.remove('shift-active');
                        divs[2].classList.remove('shift-active');
                    } else if (activeIndex == 1) {
                        divs[1].classList.add('shift-active');
                        divs[0].classList.remove('shift-active');
                        divs[2].classList.remove('shift-active');
                    } else {
                        divs[2].classList.add('shift-active');
                        divs[0].classList.remove('shift-active');
                        divs[1].classList.remove('shift-active');
                    }

                    // Perbarui indeks elemen yang aktif
                    activeIndex = (activeIndex + 1) % divs.length;
                }

                // Atur interval untuk memanggil toggleColors setiap 2 detik (2000ms)
                setInterval(toggleColors, 3000);
            });
        </script>
        {{-- Auto Enable and Disable Shift Pluggin & Monitoring Start --}}


        {{-- Chart dengan ApexChart START --}}
        <script>
            // {{-- Lolo Chart Start --}}
            var options = {
                series: [{
                        name: 'Total Order',
                        type: 'column',
                        data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                    },
                    {
                        name: 'Service Time',
                        type: 'line',
                        data: [12, 8, 20, 23, 10, 18, 30, 19, 40, 21, 24]
                    }
                ],
                chart: {
                    stacked: false,
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },
                },
                stroke: {
                    width: [0, 5],
                    curve: 'smooth'
                },
                plotOptions: {
                    bar: {
                        columnWidth: '75%',
                        borderRadius: 3,
                        borderRadiusApplication: 'end',
                    }
                },
                fill: {
                    opacity: [0.85, 1],
                    type: ["gradient", "solid"],
                    gradient: {
                        inverseColors: false,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 1,
                        opacityTo: 0.3,
                        stops: [0, 100, 100]
                    },
                },
                labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
                    '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
                ],
                markers: {
                    size: 0
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                xaxis: {
                    type: 'datetime'
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#totalOrderVsDowntime"), options);
            chart.render();
            // {{-- LoLo Chart Ends --}}


            // {{-- SY Chart Start --}}
            var LoLoOptions = {
                series: [44, 55, 41, 17, 15, 44, 55, 40, 16, 14, 43, 54, 40, 16, 14, 42, 52, 39, 15, 13],
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Remains:',
                                    formatter: () => '103 TEUs'
                                }
                            }
                        }
                    }
                },
                chart: {
                    type: 'donut',
                    height: 'auto',
                    width: '100%',
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },

                },
                responsive: [{
                    breakpoint: 480,
                }],
                legend: {
                    show: false,
                    position: 'bottom'
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#LuasStorageYard"), LoLoOptions);
            chart.render();
            // {{-- SY Chart Ends --}}


            // {{-- SW Chart Start --}}
            var SwOptions = {
                series: [44, 55, 41, 17, 15, 44, 55, 40, 16, 14, 43, 54, 40, 16, 14, 42, 52, 39, 15, 13],
                plotOptions: {
                    pie: {
                        donut: {
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Remains:',
                                    formatter: () => '103 TEUs'
                                }
                            }
                        }
                    }
                },
                chart: {
                    type: 'donut',
                    height: 'auto',
                    width: '100%',
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },
                },
                responsive: [{
                    breakpoint: 480,
                }],
                legend: {
                    show: false,
                    position: 'bottom'
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#LuasStorageWarehouse"), SwOptions);
            chart.render();
            // {{-- SW Chart Ends --}}


            // {{-- Trucking Chart Start --}}
            var truckingOptions = {
                series: [{
                    name: 'TEAM A',
                    type: 'area',
                    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                }, ],
                chart: {
                    stacked: false,
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 5,
                    curve: 'smooth'
                },
                fill: {
                    opacity: 1,
                    type: "gradient",
                    gradient: {
                        inverseColors: true,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 1,
                        opacityTo: 0.3,
                        stops: 100,
                    },
                },
                labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
                    '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
                ],
                markers: {
                    size: 5
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                xaxis: {
                    type: 'datetime'
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#totalOrderTrucking"), truckingOptions);
            chart.render();
            // {{-- Trucking Chart Ends --}}


            // {{-- PM Chart Start --}}
            var PmOptions = {
                series: [{
                    name: 'TEAM A',
                    data: [23, 11, 22]
                }, ],
                chart: {
                    type: 'bar',
                    stacked: false,
                    height: '95%',
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 0,
                    curve: 'smooth'
                },
                plotOptions: {
                    bar: {
                        columnWidth: '75%',
                        borderRadius: 5,
                        borderRadiusApplication: 'end',
                        distributed: true
                    }
                },
                fill: {
                    opacity: 1,
                    type: "gradient",
                    gradient: {
                        inverseColors: false,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 1,
                        opacityTo: 0.3,
                        stops: [0, 100],
                    },
                },
                labels: ['Shift 1', 'Shift 2', 'Shift 3'],
                markers: {
                    size: 0
                },
                legend: {
                    show: false,
                    position: 'top',
                    horizontalAlign: 'left'
                },
                xaxis: {
                    type: 'category',
                    categories: [
                        'Shift 1', 'Shift 2', 'Shift 3'
                    ],
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#totalMonitoringTiapShift"), PmOptions);
            chart.render();
            // {{-- PM Chart Ends --}}


            // {{-- SS Chart Start --}}
            var SsOptions = {
                series: [{
                    name: 'TEAM A',
                    type: 'area',
                    data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]
                }, ],
                chart: {
                    stacked: false,
                    toolbar: {
                        show: true,
                        offsetX: 0,
                        offsetY: 0,
                        tools: {
                            download: `<svg xmlns="http://www.w3.org/2000/svg" height="1.25em" viewBox="0 0 128 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 360a56 56 0 1 0 0 112 56 56 0 1 0 0-112zm0-160a56 56 0 1 0 0 112 56 56 0 1 0 0-112zM120 96A56 56 0 1 0 8 96a56 56 0 1 0 112 0z"/></svg>`,
                            selection: false,
                            zoom: false,
                            zoomin: false,
                            zoomout: false,
                            pan: false,
                            reset: false,
                            customIcons: []
                        },
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                stroke: {
                    width: 5,
                    curve: 'smooth'
                },
                fill: {
                    opacity: 1,
                    type: "gradient",
                    gradient: {
                        inverseColors: true,
                        shade: 'light',
                        type: "vertical",
                        opacityFrom: 1,
                        opacityTo: 0.3,
                        stops: 100,
                    },
                },
                labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003',
                    '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003'
                ],
                markers: {
                    size: 5
                },
                legend: {
                    position: 'top',
                    horizontalAlign: 'left'
                },
                xaxis: {
                    type: 'datetime'
                },
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function(y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#totalOrderStuffingStripping"), SsOptions);
            chart.render();
            // {{-- SS Chart Ends --}}
        </script>
    @endsection
</body>

</html>

{{-- Chart dengan ApexChart ENDS --}}
