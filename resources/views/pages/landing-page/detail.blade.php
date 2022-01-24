@extends('layouts.app')
@section('content')
          <!-- START: DETAILS -->
          <section class="container mx-auto">
            <div class="flex flex-wrap my-4 md:my-12">
              <div class="w-full md:hidden px-4">
                <h2 class="text-5xl font-semibold">Table</h2>
                <span class="text-xl">$350</span>
              </div>
              <div class="flex-1">
                <div class="slider">
                  <div class="thumbnail">
                    <div class="px-2">
                      <div
                        class="item selected"
                        data-img="images/img_details.png"
                      >
                        <img
                          src="images/img_details.png"
                          alt="front"
                          class="object-cover w-full h-full rounded-lg"
                        />
                      </div>
                    </div>
                    <div class="px-2">
                      <div
                        class="item"
                        data-img="images/img_details.png"
                      >
                        <img
                          src="images/img_details.png"
                          alt="back"
                          class="object-cover w-full h-full rounded-lg"
                        />
                      </div>
                    </div>
                    <div class="px-2">
                      <div
                        class="item"
                        data-img="images/img_details.png"
                      >
                        <img
                          src="images/img_details.png"
                          alt="rear"
                          class="object-cover w-full h-full rounded-lg"
                        />
                      </div>
                    </div>
                    <div class="px-2">
                      <div
                        class="item"
                        data-img="images/img_details.png"
                      >
                        <img
                          src="images/img_details.png"
                          alt="side"
                          class="object-cover w-full h-full rounded-lg"
                        />
                      </div>
                    </div>
                    <div class="px-2">
                      <div
                        class="item"
                        data-img="images/img_details.png"
                      >
                        <img
                          src="images/img_details.png"
                          alt="top"
                          class="object-cover w-full h-full rounded-lg"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="preview">
                    <div class="item rounded-lg h-full overflow-hidden">
                      <img
                        src="images/img_details.png"
                        alt="front"
                        class="object-cover w-full h-full rounded-lg"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex-1 px-4 md:p-6">
                <h2 class="text-5xl font-semibold">Chair Thatty</h2>
                <p class="text-xl">IDR 12.000.000</p>
      
                <a
                  href="cart.html"
                  class="transition-all duration-200 bg-pink-400 text-black focus:bg-black focus:text-pink-400 rounded-full px-8 py-3 mt-4 inline-flex"
                  ><svg
                    class="fill-current mr-3"
                    width="26"
                    height="24"
                    viewBox="0 0 26 24"
                  >
                    <path
                      d="M10.8754 18.7312C9.61762 18.7312 8.59436 19.7115 8.59436 20.9164C8.59436 22.1214 9.61762 23.1017 10.8754 23.1017C12.1331 23.1017 13.1564 22.1214 13.1564 20.9164C13.1563 19.7115 12.1331 18.7312 10.8754 18.7312ZM10.8754 21.8814C10.3199 21.8814 9.86796 21.4485 9.86796 20.9163C9.86796 20.3842 10.3199 19.9512 10.8754 19.9512C11.4308 19.9512 11.8828 20.3842 11.8828 20.9163C11.8828 21.4486 11.4308 21.8814 10.8754 21.8814Z"
                    />
                    <path
                      d="M18.8764 18.7312C17.6186 18.7312 16.5953 19.7115 16.5953 20.9164C16.5953 22.1214 17.6186 23.1017 18.8764 23.1017C20.1342 23.1017 21.1575 22.1214 21.1575 20.9164C21.1574 19.7115 20.1341 18.7312 18.8764 18.7312ZM18.8764 21.8814C18.3209 21.8814 17.869 21.4485 17.869 20.9163C17.869 20.3842 18.3209 19.9512 18.8764 19.9512C19.4319 19.9512 19.8838 20.3842 19.8838 20.9163C19.8838 21.4486 19.4319 21.8814 18.8764 21.8814Z"
                    />
                    <path
                      d="M19.438 7.2262H10.3122C9.96051 7.2262 9.67542 7.49932 9.67542 7.83626C9.67542 8.1732 9.96056 8.44632 10.3122 8.44632H19.438C19.7897 8.44632 20.0748 8.1732 20.0748 7.83626C20.0748 7.49927 19.7897 7.2262 19.438 7.2262Z"
                    />
                    <path
                      d="M18.9414 10.3942H10.8089C10.4572 10.3942 10.1721 10.6673 10.1721 11.0042C10.1721 11.3412 10.4572 11.6143 10.8089 11.6143H18.9413C19.293 11.6143 19.5781 11.3412 19.5781 11.0042C19.5781 10.6673 19.293 10.3942 18.9414 10.3942Z"
                    />
                    <path
                      d="M25.6499 4.508C25.407 4.22245 25.0472 4.05871 24.6626 4.05871H4.82655L4.42595 2.19571C4.34232 1.80709 4.06563 1.48078 3.68565 1.32272L0.890528 0.160438C0.567841 0.0261566 0.192825 0.168008 0.0528584 0.477043C-0.0872597 0.786176 0.0608116 1.14549 0.383347 1.27957L3.17852 2.4419L6.2598 16.7708C6.38117 17.3351 6.90578 17.7446 7.50723 17.7446H22.7635C23.1152 17.7446 23.4003 17.4715 23.4003 17.1346C23.4003 16.7976 23.1152 16.5245 22.7635 16.5245H7.50728L7.13247 14.7815H22.8814C23.4828 14.7815 24.0075 14.3719 24.1288 13.8076L25.9101 5.52488C25.9876 5.16421 25.8928 4.79349 25.6499 4.508ZM22.8814 13.5615H6.87012L5.08895 5.27879L24.6626 5.27884L22.8814 13.5615Z"
                    />
                  </svg>
                  Add to Cart</a
                >
                <hr class="my-8" />
      
                <h6 class="text-xl font-semibold mb-4">About the product</h6>
                <p class="text-xl leading-7 mb-6">
                  Tailored to a level of perfection synonymous with that of a Savile
                  Row suit and with understated quality in the detail, Jetty has been
                  influenced by timeless 1950s style.
                </p>
                <p class="text-xl leading-7">
                  Providing a subtle nod to the past, Jetty also provides a perfect
                  solution for the way we work today. A comprehensive product family,
                  Jetty features a variety of elegant chairs and sofas.
                </p>
              </div>
            </div>
          </section>
          <div class=" small-container single-Product">
            <div class="row">
                <div class="col-2">
                 <img src ="images/img_details.png" width="100%">
                </div>
                <div class="col-2">
                    <h1>Table</h1>
                    <p class="details-description">Meja Antik Enak Banget</p>
                    <h4>$350</h4>
                   <input type="number" value="1">
                   <a href="" class="btn">Add To Cart</a>
                </div>
            </div>
        </div>
        <div class="product-description">
            <div class="container">
                <div class="header text-bold">
                    <h3>Description</h3>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ultricies fames 
                        tortor lorem lorem enim a interdum vel. Amet auctor aliquam rhoncus, est orci 
                        bibendum. Sollicitudin odio sed etiam ut non volutpat, enim eu diam. Rhoncus, 
                        fringilla egestas porta aliquam hendrerit morbi</p>
                    <br />
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac ultricies fames 
                        tortor lorem lorem enim a interdum vel. Amet auctor aliquam rhoncus, est orci 
                        bibendum. Sollicitudin odio sed etiam ut non volutpat, enim eu diam. Rhoncus, 
                        fringilla egestas porta aliquam hendrerit morbi.</p>
                </div>
            </div>
        </div>
        <section class="flex bg-gray-100 py-16 px-4" id="product-list">
            <div class="container mx-auto">
              <div class="flex flex-start mb-4">
                <h3 class="text-2xl capitalize font-bold ">
                  Product <br class="" /> Recommendation
                </h3>
              </div>
              <div class="row row-cols-1 row-cols-md-1 g-2 ms-lg-5 me-lg-5">
                <div class="col">
                  <div class="card-group">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Table</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_2.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Chair</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_3.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Home Decor</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_4.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Modern Chair</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-group">
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_5.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Desk</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_6.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Chair</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_7.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Desk</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="images/img_details_8.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">Home Decor</h5>
                            <p class="card__description">Meja Antik Enak Banget.</p>
                            <span class="card__preci">$350</span>
                            <p class="card__place">Slamet Furniture</p>
                            <a href="#" class="card__button">Buy Now</a>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">Last Update 2 mins Ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection