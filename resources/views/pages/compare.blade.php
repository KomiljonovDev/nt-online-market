@props(['parentCategories', 'productsMenu','$newArrivalProductFruits','$newArrivalProductSpicesAndSnacks'])
@yield('content')
<x-header title="Online Market"></x-header>


<!-- Loader -->
<div
    class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="assets/img/logo/loader.png" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header -->

<x-navbar :parentCategories="$parentCategories" :productsMenu="$productsMenu"></x-navbar>


<!-- Breadcrumb -->
<section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Compare</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="index.html" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                            <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                            <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Compare</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compare -->
<section class="section-compare py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full">
            <div class="w-full px-[12px]">
                <div class="bb-compare overflow-auto">
                    <ul class="bb-compare-main-box flex">
                        <li class="bb-compare-inner-rows">
                            <ul class="bb-compare-inner-box border-l-[1px] border-t-[1px] border-b-[1px] border-solid border-[#eee] w-[323px] max-[991px]:w-[250px]">
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-img h-[250px] m-auto flex items-center justify-center">
                                        <p class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Products image</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Name</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Category</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Ratings</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Availability</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">location</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Brand</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">SKU</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Quantity</h5>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-title p-[20px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Weight</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-pro-title compare-description p-[20px] h-[135px]">
                                        <h5 class="font-quicksand tracking-[0.03rem] text-[16px] leading-[24px] font-bold text-[#3d4750]">Description</h5>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bb-compare-inner-rows bb-compare-box">
                            <ul class="bb-compare-inner-box border-l-[1px] border-t-[1px] border-b-[1px] border-solid border-[#eee] w-[323px] max-[991px]:w-[250px]">
                                <li class="inner-image relative bg-[#fff] borderb-[1px] border-solid border-[#eee]">
                                        <span class="bb-remove-compare absolute top-[20px] right-[20px]">
                                            <a href="javascript:void(0)">
                                                <i class="ri-close-circle-fill transition-all duration-[0.3s] ease-in-out text-[22px] text-[#686e7d] hover:text-[#6c7fd8]"></i>
                                            </a>
                                        </span>
                                    <div class="compare-pro-img h-[250px] m-[auto] flex items-center justify-center">
                                        <img src="assets/img/new-product/1.jpg" alt="products-1" class="h-full max-[991px]:w-full">
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Ground Nuts Oil Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Snacks</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail flex p-[20px]">
                                            <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </span>
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">(10 Review)</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="in-stock font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#6c7fd8]">In Stock</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">In Store , Online</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Bhisma Organics</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">54786</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">1 Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">1 Kg</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-pro-title p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus possimus libero enim.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bb-compare-inner-rows bb-compare-box">
                            <ul class="bb-compare-inner-box border-l-[1px] border-t-[1px] border-b-[1px] border-solid border-[#eee] w-[323px] max-[991px]:w-[250px]">
                                <li class="inner-image relative bg-[#fff] borderb-[1px] border-solid border-[#eee]">
                                        <span class="bb-remove-compare absolute top-[20px] right-[20px]">
                                            <a href="javascript:void(0)">
                                                <i class="ri-close-circle-fill transition-all duration-[0.3s] ease-in-out text-[22px] text-[#686e7d] hover:text-[#6c7fd8]"></i>
                                            </a>
                                        </span>
                                    <div class="compare-pro-img h-[250px] m-[auto] flex items-center justify-center">
                                        <img src="assets/img/new-product/2.jpg" alt="products-2" class="h-full max-[991px]:w-full">
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Organic Litchi Juice Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Juice</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail flex p-[20px]">
                                            <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </span>
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">(15 Review)</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="out-stock font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#ffa5a5]">Out Of Stock</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Online</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Darsh Mart</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">851287</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">1 Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">5 Kg</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-pro-title p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus possimus libero enim.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bb-compare-inner-rows bb-compare-box">
                            <ul class="bb-compare-inner-box border-l-[1px] border-t-[1px] border-b-[1px] border-solid border-[#eee] w-[323px] max-[991px]:w-[250px]">
                                <li class="inner-image relative bg-[#fff] borderb-[1px] border-solid border-[#eee]">
                                        <span class="bb-remove-compare absolute top-[20px] right-[20px]">
                                            <a href="javascript:void(0)">
                                                <i class="ri-close-circle-fill transition-all duration-[0.3s] ease-in-out text-[22px] text-[#686e7d] hover:text-[#6c7fd8]"></i>
                                            </a>
                                        </span>
                                    <div class="compare-pro-img h-[250px] m-[auto] flex items-center justify-center">
                                        <img src="assets/img/new-product/3.jpg" alt="products-3" class="h-full max-[991px]:w-full">
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Crunchy Banana Chips</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Chips</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail flex p-[20px]">
                                            <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </span>
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">(20 Review)</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="in-stock font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#6c7fd8]">In Stock</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">In Store</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Peoples Store</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">865248</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">3 Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">500 Gram</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-pro-title p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus possimus libero enim.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="bb-compare-inner-rows bb-compare-box">
                            <ul class="bb-compare-inner-box border-l-[1px] border-t-[1px] border-b-[1px] border-solid border-[#eee] w-[323px] max-[991px]:w-[250px]">
                                <li class="inner-image relative bg-[#fff] borderb-[1px] border-solid border-[#eee]">
                                        <span class="bb-remove-compare absolute top-[20px] right-[20px]">
                                            <a href="javascript:void(0)">
                                                <i class="ri-close-circle-fill transition-all duration-[0.3s] ease-in-out text-[22px] text-[#686e7d] hover:text-[#6c7fd8]"></i>
                                            </a>
                                        </span>
                                    <div class="compare-pro-img h-[250px] m-[auto] flex items-center justify-center">
                                        <img src="assets/img/new-product/4.jpg" alt="products-4" class="h-full max-[991px]:w-full">
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Crunchy Potato Chips</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Chips</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail flex p-[20px]">
                                            <span class="bb-pro-rating">
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                                <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                            </span>
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">(5 Review)</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="in-stock">In Stock</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">In Store</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Peoples Store</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">587635</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">1 Pack</p>
                                    </div>
                                </li>
                                <li class="border-b-[1px] border-solid border-[#eee]">
                                    <div class="compare-pro-detail p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">200 Gram</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="compare-pro-title p-[20px]">
                                        <p class="font-Poppins tracking-[0.03rem] text-[15px] leading-[24px] font-normal text-[#686e7d]">Lorem ipsum dolor sit amet consectetur adipisicing elit necessitatibus possimus libero enim.</p>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<x-footer></x-footer>
<!-- Cart sidebar -->
<x-cart-sidebar></x-cart-sidebar>
<!-- Category Popup -->
<x-category-popup :categories="$categories" :products="$products"></x-category-popup>
<!-- Quick view Modal -->
<x-quick-view-modal></x-quick-view-modal>
<!-- Newsletter Modal -->
<x-newsletter-modal></x-newsletter-modal>
<!-- Tools Sidebar -->
<x-tools-sidebar></x-tools-sidebar>
<!-- Back to top  -->
<x-back-to-top></x-back-to-top>
<!-- Plugins -->
<x-plugins></x-plugins>

</body>
</html>
