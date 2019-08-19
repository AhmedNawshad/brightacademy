<section class="courses section">
        <div class="container">
            <div class="row">
            <?php
    
              if(!empty($courses))
                  {
                 foreach($courses as $row) 
                  {
                      ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="courses-wrap">
                        <div class="thumb">
                            <img src="<?php echo base_url(); ?>assets/img/courses/img-1.jpg" alt="">
                            <div class="courses-price">
                                <p class="years">Duration:<?php echo $row['duration']; ?></p>
                                <span class="price"><?php echo $row['amount']; ?></span>
                            </div>
                        </div>
                        <div class="course-detail-wrap">
                            <div class="teacher-wrap">
                                <span class="course-instructor">by <?php echo $row['lecturer']; ?></span>
                                <img src="<?php echo base_url(); ?>assets/img/courses/thumb-teacher-1.jpg" alt="">
                            </div>
                            <div class="course-content">
                                <h3><?php echo $row['course']; ?></h3>
                                <p><?php echo $row['description']; ?></p>
                                <a href="#" class="btn btn-common btn-sm">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>



                <?php
                      }
                    }
                 ?>
              
               
            </div>
            <a href="courses-list.html">More Courses <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </section>