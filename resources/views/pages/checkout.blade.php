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
                        <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Checkout</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="index.html" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                            <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                            <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- checkout -->
<section class="section-checkout py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-checkout-sidebar mb-[-24px]">
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="sub-title mb-[12px]">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">summary</h4>
                        </div>
                        <div class="checkout-summary mb-[20px] border-b-[1px] border-solid border-[#eee]">
                            <ul class="mb-[20px]">
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">sub-total</span>
                                    <span class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">$56</span>
                                </li>
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">Delivery Charges</span>
                                    <span class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">$56</span>
                                </li>
                                <li class="flex justify-between leading-[28px] mb-[8px]">
                                    <span class="left-item font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">Coupon Discount</span>
                                    <span class="font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#686e7d]">
                                            <a href="javascript:void(0)" class="apply drop-coupon font-Poppins leading-[28px] tracking-[0.03rem] text-[14px] font-medium text-[#ff0000]">Apply Coupon</a>
                                        </span>
                                </li>
                                <li class="flex justify-between leading-[28px]">
                                    <div class="coupon-down-box w-full">
                                        <form method="post" class="relative">
                                            <input class="bb-coupon w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]" type="text" placeholder="Enter Your coupon Code" name="bb-coupon" required>
                                            <button class="bb-btn-2 transition-all duration-[0.3s] ease-in-out my-[8px] mr-[8px] flex justify-center items-center absolute right-[0] top-[0] bottom-[0] font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[12px] text-[13px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]" type="submit">Apply</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bb-checkout-pro mb-[-24px]">
                            <div class="pro-items p-[15px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] flex mb-[24px] max-[420px]:flex-col">
                                <div class="image mr-[15px] max-[420px]:mr-[0] max-[420px]:mb-[15px]">
                                    <img src="assets/img/new-product/1.jpg" alt="new-product-1" class="max-w-max w-[100px] h-[100px] border-[1px] border-solid border-[#eee] rounded-[20px] max-[1399px]:h-[80px] max-[1399px]:w-[80px]">
                                </div>
                                <div class="items-contact">
                                    <h4 class="text-[16px]"><a href="javascript:void(0)" class="font-Poppins tracking-[0.03rem] text-[15px] font-medium leading-[18px] text-[#3d4750]">Ground Nuts Oil Pack</a></h4>
                                    <span class="bb-pro-rating flex">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price flex items-center justify-left mb-[4px]">
                                        <span class="new-price font-Poppins text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem] text-[15px]">$15</span>
                                        <span class="old-price ml-[10px] font-Poppins text-[#777] font-semibold leading-[26px] tracking-[0.02rem] text-[15px] line-through">$22</span>
                                    </div>
                                    <div class="bb-pro-variation">
                                        <ul class="flex flex-wrap m-[-2px]">
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Small">250g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Medium">500g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Large">1kg</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-items p-[15px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] flex mb-[24px] max-[420px]:flex-col">
                                <div class="image mr-[15px] max-[420px]:mr-[0] max-[420px]:mb-[15px]">
                                    <img src="assets/img/new-product/2.jpg" alt="new-product-2" class="max-w-max w-[100px] h-[100px] border-[1px] border-solid border-[#eee] rounded-[20px] max-[1399px]:h-[80px] max-[1399px]:w-[80px]">
                                </div>
                                <div class="items-contact">
                                    <h4 class="text-[16px]"><a href="javascript:void(0)" class="font-Poppins tracking-[0.03rem] text-[15px] font-medium leading-[18px] text-[#3d4750]">Organic Litchi Juice Pack</a></h4>
                                    <span class="bb-pro-rating flex">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price flex items-center justify-left mb-[4px]">
                                        <span class="new-price font-Poppins text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem] text-[15px]">$25</span>
                                        <span class="old-price ml-[10px] font-Poppins text-[#777] font-semibold leading-[26px] tracking-[0.02rem] text-[15px] line-through">$30</span>
                                    </div>
                                    <div class="bb-pro-variation">
                                        <ul class="flex flex-wrap m-[-2px]">
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Small">250g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Medium">500g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Large">1kg</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-items p-[15px] bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] flex mb-[24px] max-[420px]:flex-col">
                                <div class="image mr-[15px] max-[420px]:mr-[0] max-[420px]:mb-[15px]">
                                    <img src="assets/img/new-product/3.jpg" alt="new-product-3" class="max-w-max w-[100px] h-[100px] border-[1px] border-solid border-[#eee] rounded-[20px] max-[1399px]:h-[80px] max-[1399px]:w-[80px]">
                                </div>
                                <div class="items-contact">
                                    <h4 class="text-[16px]"><a href="javascript:void(0)" class="font-Poppins tracking-[0.03rem] text-[15px] font-medium leading-[18px] text-[#3d4750]">Crunchy Banana Chips</a></h4>
                                    <span class="bb-pro-rating flex">
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-fill float-left text-[15px] mr-[3px] text-[#fea99a]"></i>
                                            <i class="ri-star-line float-left text-[15px] mr-[3px] text-[#777]"></i>
                                        </span>
                                    <div class="inner-price flex items-center justify-left mb-[4px]">
                                        <span class="new-price font-Poppins text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem] text-[15px]">$01</span>
                                        <span class="old-price ml-[10px] font-Poppins text-[#777] font-semibold leading-[26px] tracking-[0.02rem] text-[15px] line-through">$02</span>
                                    </div>
                                    <div class="bb-pro-variation">
                                        <ul class="flex flex-wrap m-[-2px]">
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Small">250g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Medium">500g</a>
                                            </li>
                                            <li class="h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal">
                                                <a href="javascript:void(0)" class="bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]" data-tooltip="Large">1kg</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="sub-title mb-[12px]">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Delivery Method</h4>
                        </div>
                        <div class="checkout-method mb-[24px]">
                                <span class="details font-Poppins leading-[26px] tracking-[0.02rem] text-[15px] font-medium text-[#686e7d]">Please select the preferred shipping method to use on this
                                    order.</span>
                            <div class="bb-del-option flex mt-[12px] max-[480px]:flex-col">
                                <div class="inner-del w-[50%] max-[480px]:w-full max-[480px]:mb-[8px]">
                                    <span class="bb-del-head font-Poppins leading-[26px] tracking-[0.02rem] text-[15px] font-semibold text-[#3d4750]">Free Shipping</span>
                                    <div class="radio-itens">
                                        <input type="radio" id="rate1" name="rate" class="w-full text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]" checked>
                                        <label for="rate1" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#686e7d] tracking-[0]">Rate - $0 .00</label>
                                    </div>
                                </div>
                                <div class="inner-del w-[50%] max-[480px]:w-full">
                                    <span class="bb-del-head font-Poppins leading-[26px] tracking-[0.02rem] text-[15px] font-semibold text-[#3d4750]">Flat Rate</span>
                                    <div class="radio-itens">
                                        <input type="radio" id="rate2" name="rate" class="w-full text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]">
                                        <label for="rate2" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#686e7d] tracking-[0]">Rate - $5.00</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-order">
                            <h5 class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[15px] font-medium text-[#686e7d]">Add Comments About Your Order</h5>
                            <textarea name="your-commemt" placeholder="Comments" class="w-full h-[100px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"></textarea>
                        </div>
                    </div>
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="sub-title mb-[12px]">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Payment Method</h4>
                        </div>
                        <div class="checkout-method mb-[24px]">
                                <span class="details font-Poppins leading-[26px] tracking-[0.02rem] text-[15px] font-medium text-[#686e7d]">Please select the preferred shipping method to use on this
                                    order.</span>
                            <div class="bb-del-option mt-[12px] flex max-[480px]:flex-col">
                                <div class="inner-del w-[50%] max-[480px]:w-full">
                                    <div class="radio-itens">
                                        <input type="radio" id="Cash1" name="radio-itens" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]">
                                        <label for="Cash1" class="relative pl-[26px] cursor-pointer leading-[16px] inline-block text-[#686e7d] tracking-[0]">Cash On Delivery</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-order">
                            <h5 class="font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[15px] font-medium text-[#686e7d]">Add Comments About Your Order</h5>
                            <textarea name="your-commemt" placeholder="Comments" class="w-full h-[100px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]"></textarea>
                        </div>
                    </div>
                    <div class="checkout-items border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                        <div class="sub-title mb-[12px]">
                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Payment Method</h4>
                        </div>
                        <div class="payment-img">
                            <img src="assets/img/payment/payment.png" alt="payment" class="w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-checkout-contact border-[1px] border-solid border-[#eee] p-[20px] rounded-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="main-title mb-[20px]">
                        <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">New Customer</h4>
                    </div>
                    <label class="inner-title font-Poppins leading-[26px] tracking-[0.02rem] mb-[6px] text-[16px] inline-block font-medium text-[#3d4750]">Checkout Options</label>
                    <div class="checkout-radio flex mb-[10px] max-[480px]:flex-col">
                        <div class="radio-itens mr-[20px]">
                            <input type="radio" id="del1" name="account" class="w-auto mr-[2px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]" checked>
                            <label for="del1" class="text-[14px] font-normal text-[#686e7d] relative pl-[26px] cursor-pointer leading-[16px] inline-block tracking-[0]">Register Account</label>
                        </div>
                        <div class="radio-itens">
                            <input type="radio" id="del2" name="account" class="w-auto mr-[2px] p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] rounded-[10px]">
                            <label for="del2" class="text-[14px] font-normal text-[#686e7d] relative pl-[26px] cursor-pointer leading-[16px] inline-block tracking-[0]">Guest Account</label>
                        </div>
                    </div>
                    <p class="font-Poppins leading-[28px] tracking-[0.03rem] mb-[16px] text-[14px] font-light text-[#686e7d]">By creating an account you will be able to shop faster, be up to date on an order's status,
                        and keep track of the orders you have previously made.</p>
                    <div class="inner-button mb-[20px]">
                        <a href="javascript:void(0)" class="bb-btn-2 inline-block items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Continue</a>
                    </div>
                    <div class="main-title mb-[20px]">
                        <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Returning Customer</h4>
                    </div>
                    <form method="post">
                        <div class="input-item mb-[24px]">
                            <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Email Address</label>
                            <input type="text" name="name" placeholder="Enter your email address" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                        </div>
                        <div class="input-item mb-[24px]">
                            <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Password</label>
                            <input type="password" name="password" placeholder="Enter your password" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]" required>
                        </div>
                        <div class="input-button mb-[20px]">
                            <button type="button" class="bb-btn-2 inline-block items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Login</button>
                        </div>
                    </form>
                    <div class="main-title mb-[20px]">
                        <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Billing Details</h4>
                    </div>
                    <div class="checkout-radio flex mb-[10px] max-[480px]:flex-col">
                        <div class="radio-itens mr-[20px]">
                            <input type="radio" id="address1" name="address" class="w-auto mr-[2px] p-[10px]" checked>
                            <label for="address1" class="relative font-normal text-[14px] text-[#686e7d] pl-[26px] cursor-pointer leading-[16px] inline-block tracking-[0]">I want to use an existing address</label>
                        </div>
                        <div class="radio-itens">
                            <input type="radio" id="address2" name="address" class="w-auto mr-[2px] p-[10px]">
                            <label for="address2" class="relative font-normal text-[14px] text-[#686e7d] pl-[26px] cursor-pointer leading-[16px] inline-block tracking-[0]">I want to use new address</label>
                        </div>
                    </div>
                    <div class="input-box-form mt-[20px]">
                        <form method="post">
                            <div class="flex flex-wrap mx-[-12px]">
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">First Name *</label>
                                        <input type="text" name="name" placeholder="Enter your First Name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]" required>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Last Name *</label>
                                        <input type="text" name="name" placeholder="Enter your Last Name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]" required>
                                    </div>
                                </div>
                                <div class="w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Address *</label>
                                        <input type="text" name="name" placeholder="Address Line 1" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]" required>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">City *</label>
                                        <div class="custom-select p-[10px] border-[1px] border-solid border-[#eee] leading-[26px] rounded-[10px]">
                                            <select>
                                                <option value="option1">City</option>
                                                <option value="option1">City 1</option>
                                                <option value="option2">City 2</option>
                                                <option value="option3">City 3</option>
                                                <option value="option4">City 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Post Code *</label>
                                        <input type="text" name="name" placeholder="Post Code" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] leading-[26px] outline-[0] rounded-[10px]" required>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Country *</label>
                                        <div class="custom-select p-[10px] border-[1px] border-solid border-[#eee] leading-[26px] rounded-[10px]">
                                            <select>
                                                <option value="option1">Country</option>
                                                <option value="option1">Country 1</option>
                                                <option value="option2">Country 2</option>
                                                <option value="option3">Country 3</option>
                                                <option value="option4">Country 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-[992px]:w-[50%] w-full px-[12px]">
                                    <div class="input-item mb-[24px]">
                                        <label class="inline-block font-Poppins leading-[26px] tracking-[0.02rem] mb-[8px] text-[14px] font-medium text-[#3d4750]">Region State *</label>
                                        <div class="custom-select p-[10px] border-[1px] border-solid border-[#eee] leading-[26px] rounded-[10px]">
                                            <select>
                                                <option value="option1">Region/State</option>
                                                <option value="option1">Region/State 1</option>
                                                <option value="option2">Region/State 2</option>
                                                <option value="option3">Region/State 3</option>
                                                <option value="option4">Region/State 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-[12px]">
                                    <div class="input-button">
                                        <button type="button" class="bb-btn-2 inline-block items-center justify-center check-btn transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[25px] text-[14px] font-normal text-[#fff] bg-[#6c7fd8] rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

