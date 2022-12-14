<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add to Cart</title>
	<link rel="icon" href="logo (2).png">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet"href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">    
    <link href="style2.css" rel="stylesheet">
</head>
<body>   
<?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "images/shirt3.jpg" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "images/shirt3.jpg"></div>
                       
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name">Highlander t-shirt</span>
                    <span class = "product-price">₱ 500</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span>(50 ratings)</span>
                    </div>
                    <p class = "product-description">Durable flexible case that grips around the edges of your phone
                        Shock absorbent TPU case with anti-fingerprint finish
                        Colors are ink printed on the frosted shell surface
                        The design is featured on the back while the edges of the case are semi transparent and provide full access to ports
                        Compatible with Qi-standard wireless charging
                        Cases for all iPhone 13 and 14 models are compatible with MagSafe charging, too
                        iPhone SE (2020) / iPhone 8 cases also fit iPhone SE (2022)
                        Weight 26g
                        Thickness 1/16 inch (1.6mm)</p>
                    <div class = "btn-groups">
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="cart-add.php?id=7" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(7)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
                <div class="card">
                    <div class="row justify-content-left d-flex">
                        <div class="col-md-4 d-flex flex-column">
                            <div class="rating-box">
                                <h1 class="pt-4">3.0</h1>
                                <p class="">out of 5</p>
                            </div>
                            <div>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-active mx-1"></span>
                                <span class="fa fa-star star-inactive mx-1"></span>
                                <span class="fa fa-star star-inactive mx-1"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="rating-bar0 justify-content-center">
                                <table class="text-left mx-auto">
                                    <tr>
                                        <td class="rating-label">Excellent</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-5"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">40</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Good</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-5"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">30</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Average</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-3"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">8</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Poor</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-9"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">0</td>
                                    </tr>
                                    <tr>
                                        <td class="rating-label">Terrible</td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                              <div class="bar-0"></div>
                                            </div>
                                        </td>
                                        <td class="text-right">0</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="col-md-12" id="fbcomment">
                        <div class="header_comment">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                  <span class="count_comment">48 Comments</span>
                                </div>
                                <div class="col-md-6 text-right">
                                  <span class="sort_title">Sort by</span>
                                  <select class="sort_by">
                                    <option>Top</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                  </select>
                                </div>
                            </div>
                        </div>
            
                        <div class="body_comment">
                            <div class="row">
                                <div class="avatar_comment col-md-1">
                                  <img src="g (1).png" alt="avatar"/>
                                </div>
                                <div class="box_comment col-md-11">
                                  <textarea class="commentar" placeholder="Add a comment..."></textarea>
                                  <div class="box_post">
                                    <div class="pull-left">
                                      <input type="checkbox" id="post_fb"/>
                                      <label for="post_fb">Hide Name</label>
                                    </div>
                                    <div class="pull-right">
                                      <span>
                                        <img src="g (1).png" alt="avatar" />
                                        <i class="fa fa-caret-down"></i>
                                      </span>
                                      <button onclick="submit_comment()" type="button" value="1">Post</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row">
                                <ul id="list_comment" class="col-md-12">
                                    <!-- Start List Comment 1 -->
                                    <li class="box_result row">
                                        <div class="avatar_comment col-md-1">
                                            <img src="g (1).png" alt="avatar"/>
                                        </div>
                                        <div class="result_comment col-md-11">
                                            <h4>Elysia</h4>
                                            <p>I want This</p>
                                            <div class="tools_comment">
                                                <a class="like" href="#">Like</a>
                                                <span aria-hidden="true"> · </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true"> · </span>
                                                <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
                                                <span aria-hidden="true"> · </span>
                                                <span>26m</span>
                                            </div>
                                            <ul class="child_replay">
                                                <li class="box_reply row">
                                                    <div class="avatar_comment col-md-1">
                                                        <img src="g (1).png" alt="avatar"/>
                                                    </div>
                                                     <div class="result_comment col-md-11">
                                                        <h4>Maam</h4>
                                                        <p>Me too</p>
                                                        
                                                        <div class="tools_comment">
                                                            <a class="like" href="#">Like</a>
                                                            <span aria-hidden="true"> · </span>
                                                            <a class="replay" href="#">Reply</a>
                                                            <span aria-hidden="true"> · </span>
                                                            <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
                                                            <span aria-hidden="true"> · </span>
                                                            <span>26m</span>
                                                        </div>
                                                        <ul class="child_replay"></ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <!-- Start List Comment 2 -->
                                    <li class="box_result row">
                                        <div class="avatar_comment col-md-1">
                                            <img src="g (1).png" alt="avatar"/>
                                        </div>
                                        <div class="result_comment col-md-11">
                                            <h4>F</h4>
                                            <p>wow</p>
                                             <div class="tools_comment">
                                                <a class="like" href="#">Like</a>
                                                <span aria-hidden="true"> · </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true"> · </span>
                                                <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span> 
                                                <span aria-hidden="true"> · </span>
                                                <span>26m</span>
                                            </div>
                                            <ul class="child_replay"></ul>
                                        </div>
                                    </li>
                                </ul>
                            <button class="show_more" type="button">Load 10 more comments</button>
                            </div>
                        </div>
                    </div>
                </div>


</body>
</html>
<!--js link--->
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="des.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js"></script>