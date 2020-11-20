
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
                                        <div class="text_rv"></div>
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
                </div>


