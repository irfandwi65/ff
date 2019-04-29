                    <div class="container">
                        <?php foreach ($berita as $key) { ?>
                        <div class="row">
                            <div class="col">
                                <nav aria-label="breadcrumb"><br><br><br><br><br><br><br><br><br><br>
                                  <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/Home/'); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $key->judul; ?></li>
                                  </ol>
                                </nav>
                                    <div class="col-sm-12 title-post-detail">
                                        <h1 class="text-primary m-0"><?php echo $key->judul; ?></h1>
                                    </div>
                                        <img width="1110" height="500" src="<?php echo base_url('/image/'.$key->gambar); ?>" alt="">
                                        <div class="spost spost-detail" id="spost-detail">
                                            <div class="row">
                                                <div class="col-sm-12 wp"><br><br>
                                                   <ul class="share">
                                                        <li><a href="#" class="btn btn-primary addthis_button_whatsapp btn-whatsapp"><i class="fa fa-whatsapp"></i>Share</a></li>
                                                        <li><a href="#" class="btn btn-primary addthis_button_facebook btn-facebook"><i class="fa fa-facebook"></i>Share</a></li>
                                                        <li><a href="#" class="btn btn-primary addthis_button_twitter btn-twitter"><i class="fa fa-twitter"></i> Tweet</a></li>
                                                        <li><a href="#" class="btn btn-primary addthis_button_google btn-google"><i class="fa fa-google-plus"></i> Share</a></li>
                                                    </ul>
                                                    <div class="d-inline-flex">
                                                                                                        <div class="author-date d-inline-block">
                                                            <span class="d-block">Author : Admin</span>
                                                            <h4 class="date-post d-block m-0 op-published"><?php echo $key->tanggal; ?></h4>
                                                        </div>
                                                    </div>
                                                    <span>
                                                        <p><?php echo $key->isi; ?></p>
                                                    </span>
                                                </div>
                                        </div>
                                        
                                    </div>
                                </div><!-- big article -->
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    