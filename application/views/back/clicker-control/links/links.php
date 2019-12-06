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
                                        <th>clcik left</th>
                                      
                                    </tr>
                                        <?php foreach($links as $link): ?>

                                    <tr class="row_link_<?php echo $link->id; ?>">
                                        <td><?php echo $link->id; ?></td>
                                         <td><?php echo $link->website_name; ?></td>
                                        <td>
                                            <a 
                                            class="link"
                                            id = "<?php echo $link->id ?>" 
                                            link="http://<?php echo $link->link; ?>" 
                                            href="#"
                                            rel="noopener noreferrer">
                                            <?php echo $link->link; ?>
                                                
                                            </a>
                                        </td>
                                        <td>
                                            <button class="pd-setting"><?php echo $link->clicks; ?></button>
                                        </td>
                                         

 

                                    </tr>
                                <?php endforeach; ?>
                                                  <!--     
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>

 -->        
                                 
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

<script type="text/javascript">
 let base_url = "<?php echo base_url(); ?>";

$(".link").click(function(){
id = $(this).attr("id");

openURL($(this).attr("link"),id);



 

})


function openURL(link,id){
          window.open(link,'_blank','width=300,height=300');



$.ajax({

    url:base_url+"user/links/APIclickLink",
    type:"POST",
    data:{id:id},
     success:function(data){
    $(".row_link_"+id).remove();


    }
 
});
}
// let template =``;

// $.ajax({

//     url:base_url+"user/links/APIlinks",
//     type:"get",
//     dataType:"JSON",
//     success:function(data){

//             for (var i = data.length - 1; i >= 0; i--) {

//             template += `<tr>
//             <td>${data[i].id}</td>
//              <td>${data[i].website_name}</td>
//             <td>${data[i].link}</td>
//             <td>
//                 <button class="pd-setting">${data[i].clicks}</button>
//             </td>
//             </tr>`;

//             }

// $(".links-container").append(template);


//     }



//     })
</script>