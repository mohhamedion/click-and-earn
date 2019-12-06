       <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Links</h4>
                           <!--  <div class="add-product">
                                <a href="#">Add Library</a>
                            </div> -->
                            <div class="asset-inner">
                                <table>

                                    <tr>
                                        <th>No</th>
                                        <th>Name of Website</th>
                                        <th>Link</th>
                                        <th>click left</th>
                                        <th>status</th>
                                       <th>option</th>
                                    </tr>


                            <?php foreach ($my_links as $link) : ?>
                                    <tr>
                                        <td><?php echo $link->id; ?></td>
                                         <td><?php echo $link->website_name; ?></td>
                                        <td><?php echo $link->link; ?></td>
                                        <td>
                                            <button class="pd-setting"><?php echo $link->clicks; ?></button>
                                        </td>
                                          <td>
                                            <?php if($link->clicks==0): ?>

                                            <button class="dp-setting btn-danger btn">displayed(no clicks)</button>
                                            <?php else: ?>
                                               <button class="btn btn-custon-rounded-three btn-primary">  <?php echo $link->status; ?></button>

                                            <?php endif;?>

                                        </td>

                                         
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <a href="<?php echo base_url() ?>admin/links/renew/<?php echo $link->id ?>" class="btn btn-success">renew</a>
                                            
                                        </td>



                                    </tr>
                       <?php endforeach; ?>
                   
                                   
                                
                                 
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

