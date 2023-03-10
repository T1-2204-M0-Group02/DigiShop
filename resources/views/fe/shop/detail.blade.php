@extends('fe.layout')

@section('contents')

<!-- breadcrumb start -->
<div class="breadcrumb-main ">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-contain">
                    <div>
                        <h2>product</h2>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><i class="fa fa-angle-double-right"></i></li>
                            <li><a href="javascript:void(0)">product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section class="section-big-pt-space b-g-light">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-right-slick">
                        <div><img src="../assets/images/product-sidebar/001.jpg" alt="" class="img-fluid  image_zoom_cls-0"></div>
                        <div><img src="../assets/images/product-sidebar/002.jpg" alt="" class="img-fluid  image_zoom_cls-1"></div>
                        <div><img src="../assets/images/product-sidebar/003.jpg" alt="" class="img-fluid  image_zoom_cls-2"></div>
                        <div><img src="../assets/images/product-sidebar/004.jpg" alt="" class="img-fluid  image_zoom_cls-3"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="product-right product-description-box ">
                        <div class="pro-group">
                          <h2>Women Pink Shirt</h2>
                          <ul class="pro-price">
                            <li>$70</li>
                            <li><span>mrp $140</span></li>
                            <li>50% off</li>
                          </ul>                                   
                         
                        <div class="pro-group ">
                          <h6 class="product-title">Description</h6>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laboriosam fuga minus doloremque ullam, omnis laudantium itaque molestiae distinctio? Voluptates error, blanditiis, eos expedita fugiat inventore consequatur autem adipisci nulla iste, assumenda cum? Voluptate, laudantium quos fugit libero sint recusandae illum dolorem quaerat aut facilis asperiores eligendi in tempora dicta corrupti blanditiis minus eum consequatur ratione tenetur quia minima temporibus alias aspernatur. Nostrum exercitationem sit impedit cum eveniet ex est modi, eos soluta consectetur consequatur quia. Dolorem porro, ipsam voluptatibus explicabo reprehenderit quisquam, in delectus laborum quam aspernatur aut officia corrupti dolore, ex doloribus dolor deserunt. Nisi dignissimos necessitatibus repellat.</p>                                                                     
                        </div>
                        <div class="pro-group">
                          <h6 class="product-title">Quantity</h6>
                          <div class="qty-box">
                            <div class="input-group">
                              <button class="qty-minus"></button>
                              <input class="qty-adj form-control" type="number" value="1"/>
                              <button class="qty-plus"></button>
                            </div>
                          </div>
                        </div>
                        <div class="pro-group mb-0">
                          <div class="modal-btn">
                            <a href="{{ Route('cart') }}" class="btn btn-solid btn-sm">
                              add to cart
                            </a>
                          </div>
                        </div>
                        <div class="pro-group">
                          <h6 class="product-title">Delivery option</h6>
                          <ul class="delivery-services">
                            <li>
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M466.244,257.845l-58.193-86.841H300v-120H0v364.992h61.899c6.678,25.849,30.195,45,58.101,45s51.424-19.151,58.101-45h155.797c6.678,25.849,30.195,45,58.101,45s51.424-19.151,58.101-45H512V269.284L466.244,257.845z M135,81.003h30v60h-30V81.003z M120,430.995c-16.542,0-30-13.458-30-30s13.458-30,30-30s30,13.458,30,30S136.542,430.995,120,430.995z M270,385.995h-91.899c-6.677-25.849-30.195-45-58.101-45s-51.424,19.151-58.101,45H30v-75h240V385.995z M270,280.995H30V81.003h75v90h90v-90h75V280.995z M392,430.995c-16.542,0-30-13.458-30-30s13.458-30,30-30s30,13.458,30,30S408.542,430.995,392,430.995z M482,385.995h-31.899c-6.678-25.849-30.195-45-58.101-45s-51.424,19.151-58.101,45H300V201.003h92.041l55.715,83.143L482,292.707V385.995z"></path></g></g></svg>
                              free shipping
                            </li>
                            <li>
                              <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m410 0c8.285156 0 15 6.714844 15 15v199.027344c52.363281 26.195312 87 79.976562 87 140.722656 0 86.84375-70.40625 157.25-157.25 157.25-60.746094 0-114.527344-34.636719-140.722656-87h-199.027344c-8.285156 0-15-6.714844-15-15v-395c0-8.285156 6.714844-15 15-15zm-126 30v84.0625c0 10.785156-11.507812 19.085938-22.746094 12.84375l-48.753906-24.773438-49.761719 25.289063c-9.988281 5.058594-21.710937-2.324219-21.703125-13.359375l-.035156-84.0625h-111v365h172.703125c-14.519531-54.976562 1.808594-112.394531 40.855469-151.441406s96.464844-55.375 151.441406-40.855469v-172.703125zm23 391h69.996094c15.984375 0 30.488281-6.511719 40.988281-17.015625 11.039063-11.035156 17.015625-25.332031 17.015625-41.980469 0-31.96875-26.035156-58.003906-58.003906-58.003906h-41.683594l8.804688-8.820312c13.871093-13.953126-7.339844-35.042969-21.210938-21.09375l-34.402344 34.464843c-5.824218 5.855469-5.800781 15.328125.058594 21.152344l34.46875 34.402344c13.949219 13.871093 35.042969-7.339844 21.09375-21.210938l-8.914062-8.894531h41.785156c16.242187 0 28.003906 12.984375 28.003906 28.996094 0 15.40625-12.597656 28.003906-28.003906 28.003906h-69.996094c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15zm-42.230469-156.230469c-49.691406 49.695313-49.691406 130.269531 0 179.960938 49.695313 49.695312 130.269531 49.695312 179.960938 0 49.695312-49.691407 49.695312-130.265625 0-179.960938-49.691407-49.691406-130.269531-49.691406-179.960938 0zm-10.769531-234.769531h-83v59.65625l34.726562-17.648438c4.097657-2.078124 9.09375-2.246093 13.511719-.019531l34.761719 17.667969zm0 0" fill-rule="evenodd"></path></svg>
                                10 Days Returnable
                            </li>
                            <li>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="-38 0 512 512.00142"><g id="surface1"><path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 "></path><path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 "></path><path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 "></path></g></svg>
                              1 Year Warranty
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
              </div>
              
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- product-tab starts -->
<section class="tab-product tab-exes  ">
  <div class="custom-container">
      <div class="row">
          <div class="col-sm-12 col-lg-12">
              <div class="creative-card creative-inner">
                  <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-selected="true">Review</a>
                          <div class="material-border"></div>
                      </li>
                      
                      <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab" href="#top-review" role="tab" aria-selected="false">Write Review</a>
                          <div class="material-border"></div>
                      </li>
                  </ul>
                  <div class="tab-content nav-material" id="top-tabContent">
                      
                      <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="contact-top-tab">
                          <div class="mt-4 text-center">
                              <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                          <form class="theme-form">
                              <div class="row">
                                 
                                  <div class="col-md-6">
                                      <label >Name</label>
                                      <input type="text" class="form-control"  placeholder="Enter Your name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label >Email</label>
                                      <input type="text" class="form-control"  placeholder="Email" required>
                                  </div>
                                  <div class="col-md-12">
                                      <label >Review Title</label>
                                      <input type="text" class="form-control"  placeholder="Enter your Review Subjects" required>
                                  </div>
                                  <div class="col-md-12">
                                      <label >Review Title</label>
                                      <textarea class="form-control" placeholder="Wrire Your Testimonial Here"  rows="6"></textarea>
                                  </div>
                                  <div class="col-md-12">
                                      <button class="btn btn-normal" type="submit">Submit YOur Review</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- product-tab ends -->

<!-- related products -->
<section class="section-big-py-space  ratio_asos b-g-light">
  <div class="custom-container">
    <div class="row">
      <div class="col-12 product-related">
        <h2>related products</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12 product">
        <div class="product-slide-6 product-m no-arrow">
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/1.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a1.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>

              </div>
              <div class="product-detail detail-inline ">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        sony xperia m5
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 56.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 24.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/3.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a3.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart" class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist">
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>

              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        woman hande bag
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 56.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 24.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/4.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a4.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>
              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        nikon camera
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 60.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 20.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/5.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a5.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>
              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        lenovo laptop
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 70.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 30.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/6.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a6.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>
              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        earphone Pouch Bag
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 100.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 80.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/7.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a7.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>
              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        wooden table
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 90.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 28.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="product-box">
              <div class="product-imgbox">
                <div class="product-front">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/8.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-back">
                  <a href="product-page(left-sidebar).html">
                    <img src="../assets/images/layout-2/product/a8.jpg" class="img-fluid  " alt="product">
                  </a>
                </div>
                <div class="product-icon icon-inline">
                  <button data-bs-toggle="modal" data-bs-target="#addtocart"   class="tooltip-top" data-tippy-content="Add to cart" >
                    <i  data-feather="shopping-cart"></i>
                  </button>
                  <a href="javascript:void(0)"  class="add-to-wish tooltip-top"  data-tippy-content="Add to Wishlist" >
                    <i  data-feather="heart"></i>
                  </a>
                  <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" class="tooltip-top"  data-tippy-content="Quick View">
                    <i  data-feather="eye"></i>
                  </a>
                  <a href="compare.html" class="tooltip-top" data-tippy-content="Compare">
                    <i  data-feather="refresh-cw"></i>
                  </a>
                </div>
              </div>
              <div class="product-detail detail-inline">
                <div class="detail-title">
                  <div class="detail-left">
                    <div class="rating-star">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                    <a href="product-page(left-sidebar).html">
                      <h6 class="price-title">
                        Wireless Optical Mouse
                      </h6>
                    </a>
                  </div>
                  <div class="detail-right">
                    <div class="check-price">
                      $ 80.21
                    </div>
                    <div class="price">
                      <div class="price">
                        $ 28.05
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- related products -->


@endsection