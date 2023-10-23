<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dev-Commerce Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
  </body>
  <style>
    .custom-login{
      height:406px;
      padding-top:80px;
    }
    .custom-product{
       height:650px;
    }
    .carousel{
      background-color:#e8dddd !important;
    }
   .carousel-control-next,
.carousel-control-prev /*, .carousel-indicators */ {
    filter: invert(100%);
   
}
.slider-img{
  height: 400px !important;
  filter:opacity(60%) !important;
  /* width:500px !important; */
}
.carousel-text{
  margin-left:500px !important;
}
.trending-wrapper{
  margin:20px;
}
.trending-products{
  float:left;
  width:20%;
}
.trending-image{
  height:100px;
}
.detail-image{
  height:200px;
}
.user{
  background-color:#f2eaea !important;
  border:none !important;
}
.cart-list-divider{
  border-bottom:1px solid black;
  margin-bottom:20px;
  padding-bottom:20px;
}
.cart-product{
  min-height:1200px;
}
.payment-container{
  margin:10px;
}
.back a{
  text-decoration:none;
  color:black;
  font-weight:bold;
}
.search{
  border:1px solid black !important;
  color:black;
}
.search:hover{
  background-color:whitesmoke;
  color:black;
}
.search:active{

}
.search-box{
  width:500px !important;
}
  </style>
  <script>
    $(document).ready(function(){
      $('#search').click(function(e){
        e.preventDefault();
      })
    })
  </script>
  
</html>