@extends('face1/template/template')
@section('body')
    <style>
        body {
            background-color: white;
        }

        .showproduct {
            width: 96%;
            margin-left: 2%;
            height: auto;
            background-color: white;
            margin-top: 30px;
            padding-bottom: 50px;
            box-shadow: rgba(226, 226, 226, 0.2) 0px 7px 29px 0px;

        }
       
        .buy-product{
            display: inline-block;
            width: 76%;
        }
        .menu-categories{
            float: right;
        }
        .product-info {
            
            margin-bottom: 20px;
            --columns: 3;
            width: calc(calc(100% / var(--columns)) - 35px);
            display: inline-block;
            margin-right: 25px;
       
            padding: 10px 0px;
         
text-align: center;

            transition: all 0.5s;
        }
        .product-all{
            border: 1px solid rgb(194, 194, 194);
            width: 100%;
        
           
        }
        .product-action{
      transform: translateY(-50px) 
        }
        .product-info:hover .product-action a{
            opacity: 1;
        }
        .product-action a:hover{
            background-color: #c27b43;
        }
        .product-action a{
            padding: 12px 15px;
            background-color: #bdab98;
            color: black;
            opacity: 0;
            transition: all 0.5s;
        }
        .product-info img {

            width: 90%;

            height: cover;
          

        }
        .product-name {
          
        }
        .product-name span {
           text-align: center;
         margin-top: 20px;
          
            line-height:21px;
            font-weight: 600;
            word-break: all;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            word-break: break-word;
            font-size: 17px;
            letter-spacing: 0.24px;
            margin-bottom: 20px;
        }
        .product-price{
            text-align: center;
        }
        .product-price span {
            text-align: center;
            font-size: 26px;
            
            color: #3b3b3b;
            font-weight: 700;
        }



    



        .product-info:hover  .product-info img{
            box-shadow: rgba(153, 153, 153, 0.2) 0px 7px 29px 0px;
            transform: translateY(-20px);
        }

        .add-product form input {

            height: 40px;
            width: auto;
            margin-left: 40%;
            background-color: orange;
            text-decoration: none;
            color: white;
            border-radius: 5px;
            padding: 5px 5px;
            font-weight: 600;
            font-size: 16px;
            border: 0px;
        }

        .info-category-page{
            text-align: center;
            padding-top: 20px;
            width: 100%;
            height: auto;
            padding-bottom: 80px;
        }
        .name-category{
            padding: 60px 20px;
            font-size: 35px;
           
       font-weight:400;

        }
        
        .name-factory{
    
        }
    
    
        .count-product{
            font-weight: 700;
        }
        .product-details span{
            text-align: left;
            display: block;
            margin-top: 10px;
        }
        .product-details span i{
            margin-right: 4px;
        }
        .menu-categories{
                width: 23%;
                margin-top: 90px;
                float: left;
            }
            .menu-categories span{
           float: right;margin-right: 30%;
            }
            .redirect-categories{
                margin-top: 60px;
            }
            .redirect-categories a{
                height: auto;
                display: block;
                text-decoration: none;
                color: black;
                margin-bottom: 10px;
                font-weight: 300;
            
            }
            .redirect-brands{
                border-left: 2px solid blue;
                margin-left: 5%;
            }
            .redirect-brands a li {
                list-style: none;
            }
            .redirect-brands1 ul a{
                font-weight: 400;
            }
          #search-product{
            margin-top: 60px;
          }
          #search-product input[type="search"]{
            height: 35px;width: 85%;
            border-radius: 5px;
            border: 2px solid  black;
          }
          #search-product button{
            border: 0px;
            background-color: white;
            transform: translateX(-40px)
          }
.get-product-category{
    float: left;
    width: 100%;
    margin-top: 5px;
    text-align: left;
    margin-left: 1%;

}
.checkbox{

    display: inline-block;
    margin-left: 10px;
}
.product-soft {
            width: 100%;
  margin-left: 10px;
          text-align: left;
       margin-right: 3%;
       float: left;
margin-bottom: 45px;
     
        }
        .product-soft h5
        {
padding: 10px 0px;
        }
        
        .soft-category{
         
            padding: 20px 20px;
   
          
        }
    </style>
    <div class="showproduct">
    
        <div class="buy-product">
            <div class="info-category-page">
                <div class="info-category">
                    <span class="name-category">Rượu <span class="name-factory"> Qisky</span></span>
                    <span ><span class="count-product"> 8 </span> devices found</span>
                  
                </div>
                <div class="soft-category">
                
                    <div class="get-product-category">
                        <h5>Lọc theo danh mục</h5>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" value="">
                        <label for="">checkbox</label>
                   
                     </div>
                     
                    </div>
                <div class="product-soft">
                   <div class="soft-select">
                    <h5>Lọc theo giá</h5>
                    <select >
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                   </div>
                    <div class="">

                    </div>
                </div>
                </div>
            </div>
            <div class="product-info">
                <div class="product-all">
                    <a href=""> <img src="{{ asset('../public/images/product.png' ) }}" alt=""></a>
                   <div class="product-action">
                   
                    <a href=""> <i class="fas fa-search-plus"></i></a>
                    <a href=""><i class="fas fa-heart"></i></a>
                    <a href=""><i class="fas fa-shopping-cart"></i></a>
                   </div>
                </div>
                <div class="product-details">
                    <span>Jack Daniel’s Old</span>
                    <span>
                        @for($i=1;$i<=5;$i++)
                        <i  id="stars-{{$i}}" data-stars="{{$i}}" class="stars fas fa-star"></i>
                        @endfor
                    </span>
                    <span  >$500</span>
                </div>
                </div>
                <script>
                    $(".stars").on('mouseenter', function(){
                var stars = $(this).data("stars");
                
                for(var i = 1; i <= stars; i++){
                $("#stars-"+ i).css("color","orange");
                
           
                }
                    });

                    $(".stars").on('mouseleave', function(){
                var stars = $(this).data("stars");
                
                for(var i = 1; i <= stars; i++){
                $("#stars-"+ i).css("color","#212529");
                
                console.log("#stars-"+ i)
                }
                    });
                </script>
             
                          <div class="add-product">
                            <button>1</button>
                          </div>

        </div>
      
        <div class="menu-categories">
<h2>Categories <span> - </span></h3>
    <form action="" id="search-product">
        <input type="search" placeholder="Search">
        <button><i class="fas fa-search"></i>   </button>
    </form>
<div class="redirect-categories">
    <a onclick="showbrands(1)"  href="Javascript:0">Quisky  <span id="select1">+</span>
        <div class="redirect-brands1">
    <ul class="redirect-brands">
        <a href=""><li>Vodka</li></a>
        <a href=""><li>Vodka</li></a>
        <a href=""><li>Vodka</li></a>
        <a href=""><li>Vodka</li></a>
    </ul>
        </div>
    </a>

    <a onclick="showbrands(2)"  href="Javascript:0">Vodka  <span id="select1">+</span>
        <div class="redirect-brands2">
            <ul class="redirect-brands">
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
            </ul>
        </div>
    </a>
  
    <a onclick="showbrands(3)"  href="Javascript:0">Beer  <span id="select1">+</span>
        <div class="redirect-brands3">
            <ul class="redirect-brands">
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
            </ul>
        </div>
    </a>
    <a onclick="showbrands(3)"  href="Javascript:0">Wine  <span id="select1">+</span>
        <div class="redirect-brands3">
            <ul class="redirect-brands">
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
            </ul>
        </div>
    </a>
    <a onclick="showbrands(3)"  href="Javascript:0">Liqour  <span id="select1">+</span>
        <div class="redirect-brands3">
            <ul class="redirect-brands">
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
                <a href=""><li>Vodka</li></a>
            </ul>
        </div>
    </a>

</div>
        </div>
    </div>
   <div style="width: 100%;height: 100px; clear: both;">

   </div>
  <div style="width: 100%;border-bottom: 2px solid black;margin-top: 20px;;clear: both;">

  </div>

@endsection
