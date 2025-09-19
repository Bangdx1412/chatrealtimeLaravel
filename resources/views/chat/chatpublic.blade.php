@extends('layouts.app')

@section('style')
   <style>
        .items{
            border: 1px solid gainsboro;
            max-height: 500px;  
            overflow-y: auto;    /* cho phép cuộn dọc */
            padding-right: 5px; 
        }
        .item{
            display: flex;
            min-height: 50px;
            max-width: 90%;
            /* max-height: 50x */
            height: 100px;
            /* justify-content: space-between; */
            border: 1px solid black;
            margin: 5px 0;
            align-items: center
            ;
            padding: 10px 20px
            ;
            text-decoration: none;
            position: relative;
        }
       .item > img {
            object-fit: cover;
            width: 50px;   
            height: 50px;  
            border-radius: 50%; 
        }
        .item>p{
            color: black;
            margin: 2px 10px
        }
        .item:hover{
            transform:scale(0.9,1) 
        }
        .status{
            width: 15px;
            height: 15px;
            border: 1px solid green;
            background: green;
            border-radius: 50%;
            position: absolute;
            left: 55px;
            bottom: 20px;
        }
       .block-chat{
        width: 100%;
        min-height:500px ;
        border: 1px solid rgb(203, 203, 203);
        box-shadow: 0px 0px 2px rgb(131, 131, 223);
        border-radius:5px;
        outline: none;
        overflow-y:scroll 
       }
       .infor-friend{
         height: 40px;
       }
       .infor-friend > img{
           object-fit: cover;
            width: 30px;   
            height: 30px;  
            border-radius: 50%; 
       }
   </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-3">
            <p>Danh sách</p>
            <div class="row">
                <div class="col-md-12 items">
                    @foreach ($users as $item)
                        <a href="" class="item">
                            {{-- <div class="status"></div> --}}
                            <img src="{{$item->image}}" alt="">
                            <p>{{$item->name}}</p>
                        </a>
                    @endforeach
                </div>
            </div>
       </div>
       <div class="col-md-9">
            <div class="infor-friend">
                <img src="https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:format(webp):quality(75)/small/avatar_hoat_hinh_db4e0e9cf4.jpg" alt="">
            </div>
            <ul class="block-chat">
                
            </ul>
            <form action="">
                <div class="d-flex box-chat" >
                    <input type="text" class="form-control me-3" id="">
                    <button class="btn btn-success">Gửi</button>
                </div>
            </form>
       </div>
    </div>
</div>
@endsection
@section('script')
    <script type="module">

        Echo.join('chat')
            .here(users=>{
                console.log(users,"những ai đăng nhập");
                
            }).joining(user=>{
                console.log(user,"Ai vào kênh chat")

            }).leaving(user=>{
                console.log(user,"Ai roi link chat");
                
            })
    </script>
        

@endsection
