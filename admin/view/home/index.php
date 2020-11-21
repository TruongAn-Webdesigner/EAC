
            <div class="full">
                    <div class="top_ad_right">

                    </div>
                </div>

                <div class="full">
                    <div class="boxcenter_statis">
                        <!-- review statis -->
                            <div class="review_statis">
                                <div class="box_review_statis mr1">

                                    <div class="review_statis_left bgblue">
                                        <i class="fas fa-plane-departure"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv"> Số Lượng tour</div>
                                        <div class="text_rv">
                                        <?php
                                            foreach ($rv1 as $rv1) {
                                                echo'<p>'.$rv1['count(*)'].'</p>';
                                            }
                                        ?></div>
                                    </div>


                                </div>

                                <div class="box_review_statis mr1">
                                    <div class="review_statis_left bggreen">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">Tổng Tiền</div>
                                        <div class="text_rv">

                                          <?php
                                                $tong=0;
                                                foreach ($rv2 as $rv2) {
                                                    $tong+=$rv2['tong'];
                                                }
                                                echo'<p>'.$tong.'</p>';
                                            ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="box_review_statis mr1">
                                    <div class="review_statis_left bgbrown">
                                        <i class="fas fa-users"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">Số khách hàng</div>
                                        <div class="text_rv">
                                            <?php
                                                foreach ($rv3 as $rv3) {
                                                    echo'<p>'.$rv3['tongKH'].'</p>';
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="box_review_statis">
                                    <div class="review_statis_left bgred">
                                         <i class="fas fa-eye"></i>
                                    </div>

                                    <div class="content_rv_st">
                                        <div class="title_rv">view</div>
                                        <div class="text_rv">100</div>
                                    </div>

                                </div>
                            </div>
                        <!-- end review statis -->
                    </div>

                    <div class="full">
                            <div class="boxcenter_statis">
                                <div class="statis_rank">

                                    <div class="box_rank mr2">
                                        <div class="title_box_rank">
                                               <div class="text_title_rank">
                                                    <span>ranks tour </span><br>
                                                    xếp loại các loại tour
                                               </div>

                                               <div class="full">
                                                   <div class="boxcenter_statis">
                                                   <div class="content_box_rank">
                                                        <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">First</th>
                                                                    <th scope="col">Last</th>
                                                                    <th scope="col">Handle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry</td>
                                                                    <td>the Bird</td>
                                                                    <td>@twitter</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                    </div>
                                                   </div>
                                               </div>
                                        </div>
                                    </div>

                                    <div class="box_rank">
                                        <div class="title_box_rank">
                                            <div class="text_title_rank">
                                                <span>rank User</span> <br>
                                                xếp hàng người dùng đi nhiều tour
                                            </div>

                                            <div class="content_box_rank">
                                                <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">2</th>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                            </tr>
                                                            <tr>
                                                            <th scope="row">3</th>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                               </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                </div>
