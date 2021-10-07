
                <div class="row">
                    <?php 
                    $conn = mysqli_connect("localhost","root","","tripadvisor") or die("Không thể kết nối tới CSDL");   
                    $lenh = "SELECT * FROM diadiemdulich,vung where diadiemdulich.IDVUNG = vung.IDVUNG";
                    $result = mysqli_query($conn , $lenh);
                    while($row = mysqli_fetch_array($result)) { ?>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-place mb-30">
                            <div class="place-img">
                                <img src="assets/img/service/<?php echo $row['HinhAnh']; ?>" alt="">
                            </div>
                            <div class="place-cap">
                                <div class="place-cap-top">
                                    <span><i class="fas fa-star"></i><span><?php echo $row['TongDanhGia'] ?> sao</span> </span>
                                    <h3><a href="#"><?php echo $row['TenDiaDiemDL']; ?></a></h3>
                                    <p class="dolor">Bãi biển<span></span></p>
                                </div>
                                <div class="place-cap-bottom">
                                    <ul>
                                        <!-- <li><i class="far fa-clock"></i>3 Days</li> -->
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row['TenVung']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>