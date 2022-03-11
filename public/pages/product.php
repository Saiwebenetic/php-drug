<?php
include('./include/header.php')
?>
<div class="page_content">
  <div class="accordion mb-2" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          PageHighlights
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
        <div class="accordion-body">
          <li onclick="scrollSmoothTo('Men')">Men</li>
          <li onclick="scrollSmoothTo('Women')">Women</li>
          <li onclick="scrollSmoothTo('Lifestyle')">Lifestyle</li>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <!--product highligth-->

    <!--SEARCH BAR-->
    <div class="input-group top-search" style="display: none">
      <div class="search_input3">
        <input type="search" placeholder="Products Search" />
      </div>
      <button type="button" class="searchbtn3">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </div>
    <!---------------------------------------------------------------------------->
    <!--steps section starts here-->
    <div class="row desktop-view-step">
      <!--First step section-->
      <div class="col-lg-4 col-sm-12">
        <div class="custom_box">
          <div class="row">
            <div class="col-6">
              <div class="text-center icon_image">
                <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
              </div>
            </div>
            <div class="col-6">
              <div class="custom_content_text">
                <h4 class="text-right">STEP-1</h4>
                <p>release of Letraset sheets containing</p>
                <div class="arrow_div">
                  <i class="fa-solid fa-circle"></i><i class="fa-solid fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--SECOND step section-->
      <div class="col-lg-4 col-sm-12">
        <div class="custom_box">
          <div class="row">
            <div class="col-6">
              <div class="text-center icon_image">
                <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
              </div>
            </div>
            <div class="col-6">
              <div class="custom_content_text">
                <h4 class="text-right">STEP-2</h4>
                <p>release of Letraset sheets containing</p>
                <div class="arrow_div">
                  <i class="fa-solid fa-circle"></i><i class="fa-solid fa-angle-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--THIRD step section-->
      <div class="col-lg-4 col-sm-12">
        <div class="custom_box">
          <div class="row">
            <div class="col-6">
              <div class="text-center icon_image">
                <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
              </div>
            </div>
            <div class="col-6">
              <div class="custom_content_text">
                <h4 class="text-right">STEP-3</h4>
                <p>release of Letraset sheets containing</p>
                <div class="arrow_div"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--steps section ends here-->
    <!---------------------------------------------------------------------------->
    <!--banner starts here-->
    <div class="row mt-5 banner">
      <h2 class="text-center">Top 10 Most Common Medications</h2>
      <p class="text-center">
        It is a long established fact that a reader will be distracted by
        the readable content of the page when looking at its layout .
      </p>
      <div class="owl-slider">
        <div id="carousel" class="owl-carousel">
          <div class="item">
            <img src="https://i.ibb.co/k97DsX8/baner-3.png" alt="baner-3" class="rounded mx-auto d-block" />
          </div>
          <div class="item">
            <img src="https://i.ibb.co/ws4k3xR/baner-2.png" alt="baner-2" class="rounded mx-auto d-block" />
          </div>
          <div class="item">
            <img src="https://i.ibb.co/qWykp0x/baner-1.png" alt="baner-1" class="rounded mx-auto d-block" />
          </div>
          <div class="item">
            <img src="https://i.ibb.co/k97DsX8/baner-3.png" alt="baner-3" class="rounded mx-auto d-block" />
          </div>
          <div class="item">
            <img src="https://i.ibb.co/ws4k3xR/baner-2.png" alt="baner-2" class="rounded mx-auto d-block" />
          </div>
          <div class="item">
            <img src="https://i.ibb.co/qWykp0x/baner-1.png" alt="baner-1" class="rounded mx-auto d-block" />
          </div>
        </div>
      </div>
    </div>
    <!--banner ends here-->
    <!----------------------------------------------------------------------------------->
    <div class="row mobile-view-step" style="display: none">
      <div id="carousel-step" class="owl-carousel owl-theme">
        <!--1st item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-1</h4>
                    <p>release of Letraset sheets containing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--2nd item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-2</h4>
                    <p>release of Letraset sheets containing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--3rd item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-3</h4>
                    <p>release of Letraset sheets containing</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--4th item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-1</h4>
                    <p>
                      Well known for this objective reviews that are
                      non-baised often
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--5th item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-2</h4>
                    <p>
                      >Well known for this objective reviews that are
                      non-baised often
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--6th item-->
        <div class="item">
          <div class="col-lg-4 col-sm-12">
            <div class="custom_box">
              <div class="row">
                <div class="col-6">
                  <div class="text-center icon_image">
                    <img src="https://i.ibb.co/bvmrGnS/icon-1.png" alt="icon-1" border="0" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="custom_content_text">
                    <h4 class="text-right">STEP-3</h4>
                    <p>
                      >Well known for this objective reviews that are
                      non-baised often
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--owl carousel ends here-->
    </div>
    <!--mobile-view steps row ends here-->

    <!----------------------------------------------------------------------------------->
    <div class="row">
      <div class="col-lg-2 accord">
        <!--accordian start here-->
        <div class="container-fluid mt-5 accordianns_content">
          <div class="row mt-5">
            <div class="col-12">
              <h2 class="content_heading">Product Highlights</h2>
              <div class="accordion_container">
                <div class="accordion_head">
                  Men<span class="plusminus">+</span>
                </div>
                <div class="accordion_body" style="display: none">
                  <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                      Supplements
                    </li>
                    <li class="list-group-item">Vitamins</li>
                    <li class="list-group-item">Diabetes</li>
                  </ul>
                </div>
                <div class="accordion_head">
                  Women<i class="plusminus">+</i>
                </div>
                <div class="accordion_body" style="display: none">
                  <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                      Supplements
                    </li>
                    <li class="list-group-item">Vitamins</li>
                    <li class="list-group-item">Diabetes</li>
                  </ul>
                </div>
                <div class="accordion_head">
                  Lifestyle<i class="plusminus">+</i>
                </div>
                <div class="accordion_body" style="display: none">
                  <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                      Supplements
                    </li>
                    <li class="list-group-item">Vitamins</li>
                    <li class="list-group-item">Diabetes</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="input-group left-search">
          <div class="search_input2">
            <input type="search" placeholder="Product Search" />
          </div>
          <button type="button" class="searchbtn2">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
      </div>

      <!--col 2 ends here-->
      <!--accordian ends here-->

      <div class="col-lg-10">
        <!--SUPPLEMENTS STARTS HERE-->
        <!--------------------------------------------------------------------->
        <div class="row supplement">
          <h5 class="P_head">Supplements</h5>
          <div id="supplement-carousel" class="owl-carousel owl-theme">
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
          </div>
        </div>
        <!--------------------------------------------------------------------->
        <div class="row py-4 vitamins">
          <h5 class="P_head">Vitamins</h5>
          <div id="vitamins-carousel" class="owl-carousel owl-theme">
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
          </div>
        </div>
        <!------------------------------------------------------------------------>
        <div class="row diabetes">
          <h5 class="P_head">Diabetes</h5>
          <div id="diabetes-carousel" class="owl-carousel owl-theme">
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amoxicilin</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
            <!--1st item-->
            <div class="item">
              <div class="product-card-column">
                <img src="https://i.ibb.co/9Wn1v1d/img-4.png" alt="img-4" border="0" />
                <h5>Amphetamine</h5>
                <span class="genre">Generic Amoxil</span>
                <p>$253.70</p>
                <span class="rupees">Rs.253.70</span>
                <button>Get Treatment</button>
              </div>
            </div>
          </div>
        </div>
        <!------------------------------------------------------------------------>
      </div>
      <!--SUPPLEMENTS ENDS HERE-->
    </div>
  </div>
  <!--container ends here-->
</div>
<!--page content ends here-->
<?php
include('./include/footer.php')
?>