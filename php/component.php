<?php

function component($proName, $proPrice, $proImage)
{
    $element = '
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="$proImage" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="Picture/Photos/Shop/SevenTeaOne/Ginger Mint Tea.jpg" alt="image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">$proName</h5>
                            <p class="card-text text-secondary">Seven Tea O</p>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <p>2 reviews</p>    
                            </h6>
                            <h5>
                              <a>RM</a>  <span class="price">$proPrice</span>
                            </h5>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add To Cart<i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </form>
            </div>
    ';

    echo $element;
}
