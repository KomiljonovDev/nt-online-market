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
                        <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Faq</h2>
                    </div>
                    <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                        <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                            <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="index.html" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                            <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                            <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Faq</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Faq -->
<section class="section-faq py-[50px] max-[1199px]:py-[35px]">
    <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
        <div class="flex flex-wrap w-full mb-[-24px]">
            <div class="w-full px-[12px]">
                <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-detail max-[991px]:mb-[12px]">
                        <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#3d4750] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">frequently asked <span class="text-[#6c7fd8]">questions</span></h2>
                        <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#686e7d] leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Customer service management.</p>
                    </div>
                </div>
            </div>
            <div class="min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]">
                <div class="bb-faq-img sticky top-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <img src="assets/img/faq/faq.jpg" alt="faq-img" class="w-full rounded-[20px]">
                </div>
            </div>
            <div class="min-[992px]:w-[66.66%] w-full px-[12px] mb-[24px]">
                <div class="bb-faq-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="bb-accordion style-1 mb-[-24px]">
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head active-arrow m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                What is the multi vendor services?
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px]">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                How to buy many products at a time?
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px] hidden">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                Refund policy for customer
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px] hidden">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                Exchange policy for customer
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px] hidden">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                Give a way products available
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px] hidden">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
                        <div class="bb-accordion-item overflow-hidden mb-[24px]">
                            <h4 class="accordion-head m-[0] py-[1rem] px-[1.25rem] text-[#4b5966] text-[16px] leading-[20px] font-medium relative rounded-[15px] border-[1px] border-solid border-[#eee] font-Poppins cursor-pointer tracking-[0] max-[767px]:text-[15px]">
                                Exchange policy for customer
                            </h4>
                            <div class="accordion-body px-[15px] pt-[15px] hidden">
                                <p class="text-[14px] font-Poppins text-[#7a7a7a] leading-[1.75]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sint atque pariatur cupiditate beatae voluptates quidem. Et tenetur autem itaque? Eum exercitationem assumenda enim eos voluptas. Ad incidunt laborum aliquam, expedita, voluptatibus quo id adipisci ea ratione ut, dignissimos natus?</p>
                            </div>
                        </div>
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
