<!-- Featured Start -->
<div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản phẩm chất lượng</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn phí vận chuyển</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hoàn tiền nếu không giống mô tả</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Hỗ trợ 24/7</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
    <div class="container-fluid pt-5">
  
    <!-- Categories End -->


    <!-- Offer Start -->

    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Sản phẩm bán chạy nhất</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">

            
        <?php
        
        foreach ($spvip as $vip) {
            extract($vip);
            $anh=$image.$hinhanh;
    

        $idsp="index.php?act=sanphamct&idsp=".$id;
        echo '<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <a href="'.$idsp.'"><img class="img-fluid w-70" src="'.$anh.'" alt=""></a>
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" >'.$tensp.'</h6>
                        <div class="d-flex justify-content-center">
                            <h6>'.$gia.' đ</h6><h6 class="text-muted ml-2"><del></del></h6>
                        </div>
                    </div>
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="tensp" value="'.$tensp.'">
                        <input type="hidden" name="hinh" value="'.$hinhanh.'">
                        <input type="hidden" name="gia" value="'.$gia.'">
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="'.$idsp.'" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết sản phẩm</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ hàng</a>
                    </div>
                    </form>
                </div>
            </div>';

            
    }

        ?>

        </div>
    </div>

    